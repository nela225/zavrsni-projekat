<?php
include 'db.php';
header("Content-Type: application/json");
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $res = $conn->query("SELECT * FROM proizvodi");
        echo json_encode($res->fetch_all(MYSQLI_ASSOC));
        break;
    case 'POST':
        $data = json_decode(file_get_contents("php://input"));
        $n = $data->naziv;
        $c = $data->cijena;
        $conn->query("INSERT INTO proizvodi (naziv, cijena) VALUES ('$n', '$c')");
        break;
    case 'DELETE':
        parse_str($_SERVER['QUERY_STRING'], $params);
        $id = $params['id'];
        $conn->query("DELETE FROM proizvodi WHERE id = $id");
        break;
}
?>