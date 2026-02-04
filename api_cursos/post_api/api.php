<?php

    header("Content-Type: application/json");

    include "db.php";

    $method = $_SERVER["REQUEST_METHOD"];
    //var_dump($method);
    //die();

    $input = json_decode(file_get_contents("php://input"), true);

    match($method) {
        "GET" => handleGet($pdo),
        "POST" => handlePost($pdo, $input),
        "PUT" => handlePut($pdo, $input),
        "DELETE" => handleDelete($pdo, $input),
    };

    function handleGet($pdo) {
        $query = "SELECT * FROM posts";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    function handlePost($pdo, $input) {
        $query = "INSERT INTO posts(title, content, status) VALUES(:title, :content, :status)";
        $stmt = $pdo->prepare($query);

        $stmt->execute([
            "title" => $input["title"],
            "content" => $input["content"],
            "status" => $input["status"],
        ]);

        echo json_encode(["message" => "Post creado exitosamente"]);
    }

    function handlePut($pdo, $input) {
        $query = "UPDATE posts SET title = :title, content = :content, status = :status WHERE id = :id";

        $stmt = $pdo->prepare($query);

        $stmt->execute([
            "id" => $input["id"],
            "title" => $input["title"],
            "content" => $input["content"],
            "status" => $input["status"],
        ]);

        echo json_encode(["message" => "Post Actualizado exitosamente"]);
    }

    function handleDelete($pdo, $input) {
        $query = "DELETE FROM posts WHERE id = :id";

        $stmt = $pdo->prepare($query);

        $stmt->execute(["id" => $input["id"]]);

        echo json_encode(["message" => "Se ha eliminado exitosamente"]);
    }

?>