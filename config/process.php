<?php

    include_once("connection.php");

    session_start();

    $products = [];

    $query = "SELECT * FROM product";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $products = $stmt->fetchAll();

    $conn = null;