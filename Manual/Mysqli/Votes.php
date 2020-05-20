<?php
require_once 'Database.php';

$stmt = $mysqli->prepare("INSERT INTO votes1 (user_id, day_number, from_user_id, ctime) VALUES (?,?,?, NOW())");
if ($stmt) {
    for ($i = 0; $i < 750000; $i++) {
        $user_id = $i;
        $from_user_id = $i;
        for ($j = 1; $j <= 15; $j++) {
            echo 'user_id: ' . $user_id . ' day_number: ' . $day_number . ' from_user_id: ' . $from_user_id . PHP_EOL;
            $day_number = $j;
            $stmt->bind_param("ddd", $user_id, $day_number, $from_user_id);
            $stmt->execute();
        }
    }
    $stmt->close();
}
$mysqli->close();