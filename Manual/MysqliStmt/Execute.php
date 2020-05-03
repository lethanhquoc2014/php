<?php
require_once '../Mysqli/Database.php';

$query = "insert into offices (`officeCode`, `city`, `phone`, `addressLine1`, `addressLine2`, `state`, `country`, `postalCode`, `territory`) values(?,?,?,?,?,?,?,?,?)";

$stmt = $mysqli->prepare($query);

$stmt->bind_param("sssssssss",
    $officeCode,
    $city,
    $phone,
    $addressLine1,
    $addressLine2,
    $state,
    $country,
    $postalCode,
    $territory
);

$officeCode = 11;
$city = 'Daklak';
$phone = '+1 650 219 4782';
$addressLine1 = 'Nguyen Dinh Chieu Street';
$addressLine2 = 'Suite 300';
$state = 'CA';
$country = 'VN';
$postalCode = '94080';
$territory = 'NA';

$stmt->execute();

$officeCode = 12;
$city = 'Binh Duong';
$phone = '+1 650 219 4782';
$addressLine1 = 'Nguyen Dinh Chieu Street';
$addressLine2 = 'Suite 300';
$state = 'CA';
$country = 'VN';
$postalCode = '94080';
$territory = 'NA';

$stmt->execute();

$stmt->close();

$query = 'select officeCode, city from offices';
$result = $mysqli->query($query);
if ($result) {
    while ($row = $result->fetch_row()) {
        printf("%s %s\n", $row[0], $row[1]);
    }
}
$result->free_result();

$mysqli->close();