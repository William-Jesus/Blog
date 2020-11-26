<?php
require_once "db_connection.php";

function save_post() {
    $post = $_POST;
    $mysql = connect_to_mysql();

    mysqli_query(
        $mysql,
        "
        INSERT INTO post (title, slug, excerpt, text)
        VALUES ('" . $post["title"] . "', '" . $post["slug"] . "', '" . $post["excerpt"] . "', '". $post["text"] . "');
        "
    );

    close_mysql_connection($mysql);
}
save_post();

header("Location: /dashboard/index.php");
