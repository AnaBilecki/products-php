<?php

    include_once("connection.php");

    session_start();

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

    $conn = null;