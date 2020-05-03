<?php
require_once '../Mysqli/Database.php';

$query = "select * from customers";

if ($result = $mysqli->query($query)) {
    while ($finfo = $result->fetch_field()) {
        /* get fieldpointer offset */
        $currentfield = $result->current_field;

        printf("Column %d:\n", $currentfield);
        printf("Name:     %s\n", $finfo->name);
        printf("Table:    %s\n", $finfo->table);
        printf("max. Len: %d\n", $finfo->max_length);
        printf("Flags:    %d\n", $finfo->flags);
        printf("Type:     %d\n\n", $finfo->type);
    }
    $result->close();
}
$mysqli->close();

// Result
/*
Column 1:
Name:     customerNumber
Table:    customers
max. Len: 3
Flags:    53251
Type:     3

Column 2:
Name:     customerName
Table:    customers
max. Len: 34
Flags:    4097
Type:     253

Column 3:
Name:     contactLastName
Table:    customers
max. Len: 15
Flags:    4097
Type:     253

Column 4:
Name:     contactFirstName
Table:    customers
max. Len: 13
Flags:    4097
Type:     253

Column 5:
Name:     phone
Table:    customers
max. Len: 18
Flags:    4097
Type:     253

Column 6:
Name:     addressLine1
Table:    customers
max. Len: 32
Flags:    4097
Type:     253

Column 7:
Name:     addressLine2
Table:    customers
max. Len: 24
Flags:    0
Type:     253

Column 8:
Name:     city
Table:    customers
max. Len: 17
Flags:    4097
Type:     253

Column 9:
Name:     state
Table:    customers
max. Len: 13
Flags:    0
Type:     253

Column 10:
Name:     postalCode
Table:    customers
max. Len: 9
Flags:    0
Type:     253

Column 11:
Name:     country
Table:    customers
max. Len: 12
Flags:    4097
Type:     253

Column 12:
Name:     salesRepEmployeeNumber
Table:    customers
max. Len: 4
Flags:    49160
Type:     3

Column 13:
Name:     creditLimit
Table:    customers
max. Len: 9
Flags:    0
Type:     246
 */