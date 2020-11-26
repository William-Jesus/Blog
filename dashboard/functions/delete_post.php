<?php
require_once "db_connection.php";

function delete_post() {
    $postId = $_GET["post_id"];
    $mysql = connect_to_mysql();

    mysqli_query(
       $mysql,
       "
        DELETE FROM post WHERE id = " . (int) $postId . "
       "

    );


    close_mysql_connection($mysql);
}
delete_post();

header("Location: /dashboard/posts.php");
