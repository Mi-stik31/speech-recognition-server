<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo json_encode(array('text' => 'Я наговорил в микрофон'), JSON_UNESCAPED_UNICODE);
}