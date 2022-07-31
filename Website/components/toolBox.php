<?php
function response($data = null){
    $response = new stdClass();

    $response->data = $data;
    echo json_encode($response);
}