<?php
require_once 'Database.php';

$stmt = $pdo->prepare(
    "INSERT INTO `orders` (
        `orderNumber`,
        `orderDate`,
        `requiredDate`,
        `shippedDate`,
        `status`,
        `comments`,
        `customerNumber`
    ) VALUES (
        :orderNumber,
        :orderDate,
        :requiredDate,
        :shippedDate,
        :status,
        :comments,
        :customerNumber
    )"
);
$stmt->bindParam(':orderNumber', $orderNumber);
$stmt->bindParam(':orderDate', $orderDate);
$stmt->bindParam(':requiredDate', $requiredDate);
$stmt->bindParam(':shippedDate', $shippedDate);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':comments', $comments);
$stmt->bindParam(':customerNumber', $customerNumber);

$orderNumber = 10427;
$orderDate = '2020-05-04';
$requiredDate = '2020-05-10';
$shippedDate = null;
$status = 'In Process';
$comments = null;
$customerNumber = 119;
$stmt->execute();
