<?php
require_once "db_connection.php";

function update_post() {
    $post = $_POST;
    $mysql = connect_to_mysql();

    mysqli_query(
       $mysql,
       "
       UPDATE post SET
            title = '" . $post['title'] . "',
            slug = '" . $post['slug'] . "',
            excerpt = '" . $post['excerpt'] . "',
            text = '" . $post['text'] . "',
            update_date = '" . date('Y-m-d H:i:s') . "'
        WHERE
            id = " . (int) $post['id'] . "

       "

    );


    close_mysql_connection($mysql);
}
update_post();

header("Location: /dashboard/posts.php");
