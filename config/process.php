<?php

    include_once("connection.php");
    include_once("url.php");

    session_start();

    $data = $_POST;

    if (!empty($data)) {

        if ($data["type"] == "create") {

            $name = $data["name"];
            $description = $data["description"];
            $price = $data["price"];
            $quantity = $data["quantity"];
            
            $query = "INSERT INTO product (name, description, price, quantity)  VALUES (:name, :description, :price, :quantity)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":price", $price);
            $stmt->bindParam(":quantity", $quantity);

            try {
                $stmt->execute();
            } catch (PDOException $ex) {
                $error = $ex->getMessage();
                echo "Error: $error";
            }
        } else if ($data["type"] == "edit") {

        } else if ($data["type"] == "delete") {

            $id = $data["id"];

            $query = "DELETE FROM product WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
            } catch (PDOException $ex) {
                $error = $ex->getMessage();
                echo "Error: $error";
            }
        }

        header("Location:" . $BASE_URL . "/../index.php");
    } else {
        $id;

        if (!empty($_GET)) {
            $id = $_GET["id"];
        }

        if (!empty($id)) {

            $query = "SELECT * FROM product WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $product = $stmt->fetch();

        } else {
            $products = [];

            $query = "SELECT * FROM product";

            $stmt = $conn->prepare($query);

            $stmt->execute();

            $products = $stmt->fetchAll();
        }
    }

    $conn = null;