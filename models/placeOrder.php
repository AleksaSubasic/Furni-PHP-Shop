<?php
header("Content-Type: application/json");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    try {
        session_start();
        include "../connection/conn.php";
        include "functions.php";

        $orderID = $_POST['orderID'];
        $totalPrice = $_POST['totalPrice'];

        $res = finishOrder($orderID, $totalPrice);

        if ($res) {
            echo json_encode(["msg" => "Successfully added product."]);
            http_response_code(200);
        } else {
            echo json_encode(["msg" => "Product already in a cart!"]);
            http_response_code(409);
        }

    } catch (PDOException $ex) {
        echo json_encode(["msg" => "Error: " . $ex->getMessage()]);
        http_response_code(500);
    }
} else {
    header("location: ../404.php");
}
?>