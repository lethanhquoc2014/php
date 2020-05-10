<?php
require_once 'Connect.php';

$employees = array(
    'employeeNumber' => '1002',
    'lastName' => 'Murphy',
    'firstName' => 'Diane',
    'extension' => 'x5800',
    'email' => 'dmurphy@classicmodelcars.com',
    'officeCode' => 1,
    'reportsTo' => 1002,
    'jobTitle' => 'Sales Manager (APAC)',
);

$result = $mc->add('employees', $employees); // if key existed, return false
if ($result) {
    echo 'Add successfully !' . PHP_EOL;
}