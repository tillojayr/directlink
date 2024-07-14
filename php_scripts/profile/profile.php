<?php

session_start();
// main.php
include '../FirebaseService.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $firebaseService = new FirebaseService();

    foreach ($_POST as $key => $val) {
        $data[$key] = $val;
    }

    var_dump($data['profile']);
    exit();
    $id = $_SESSION['user_id'];
    $table = 'user';

    $where = array(
        'user_id' => $id
    );
    $response = $firebaseService->updateData($table, $data, $id);

    echo json_encode($response);
}


?>