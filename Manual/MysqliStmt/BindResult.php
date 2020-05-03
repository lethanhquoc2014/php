<?php
require_once '../Mysqli/Database.php';

if ($stmt = $mysqli->prepare("select customerNumber, customerName from customers limit 5")) {
    $stmt->execute();

    /* bind variables to prepared statement */
    $stmt->bind_result($customerNumber, $customerName);

    /* fetch values */
    while ($stmt->fetch()) {
        printf("%s %s\n", $customerNumber, $customerName);
    }

    /* close statement */
    $stmt->close();
}

$mysqli->close();