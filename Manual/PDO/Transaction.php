<?php
require_once 'Database.php';

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->beginTransaction();
    $pdo->exec(
        "INSERT INTO `orders` (
            `orderNumber`,
            `orderDate`,
            `requiredDate`,
            `shippedDate`,
            `status`,
            `comments`,
            `customerNumber`
        ) VALUES (
            10427,
            '2020-05-04',
            '2020-05-10',
            null,
            'In Process',
            null,
            119
        );"
    );
    $pdo->exec(
        "INSERT INTO `orderdetails` (
            `orderNumber`,
            `productCode`,
            `quantityOrdered`,
            `priceEach`,
            `orderLineNumber`
        ) VALUES (
            10427,
            'S24_2022',
            24,
            36.74,
            4
        );"
    );
    $pdo->commit();
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Failed: " . $e->getMessage() . PHP_EOL;
}

