<?php
// Returns the number of rows affected by INSERT, UPDATE, or DELETE query.

require_once '../Mysqli/Database.php';

$query = "insert into offices (`officeCode`, `city`, `phone`, `addressLine1`, `addressLine2`, `state`, `country`, `postalCode`, `territory`) values(?,?,?,?,?,?,?,?,?)";

if ($stmt = $mysqli->prepare($query)) {

    /* Bind variable for placeholder */
    $officeCode = 10;
    $city = 'Da Nang';
    $phone = '+1 650 219 4782';
    $addressLine1 = 'Nguyen Dinh Chieu Street';
    $addressLine2 = 'Suite 300';
    $state = 'CA';
    $country = 'VN';
    $postalCode = '94080';
    $territory = 'NA';
    $stmt->bind_param("sssssssss", $officeCode, $city, $phone, $addressLine1, $addressLine2, $state, $country, $postalCode, $territory);

    /* execute statement */
    $stmt->execute();

    printf("rows inserted: %d\n", $stmt->affected_rows);

    /* close statement */
    $stmt->close();
}

/* close connection */
$mysqli->close();