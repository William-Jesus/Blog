<?php
require_once "db_connection.php";

function get_post($postId = null) {
    $mysql = connect_to_mysql();

    if (empty($postId)) {

        $result = mysqli_query(
            $mysql,
            "
            SELECT * FROM post;
            "
        );
        close_mysql_connection($mysql);
        return $result;
    }

    if (isset($postId)){

        $result = mysqli_query(
            $mysql,
            "
            SELECT * FROM post WHERE id = $postId
            "
        );
        close_mysql_connection($mysql);
        return $result->fetch_object();
    }
}

function get_recent_post() {

    $mysql = connect_to_mysql();

    $result = mysqli_query(
        $mysql,
        "
        SELECT * FROM post ORDER BY creation_date DESC LIMIT 5;
        "
    );
    close_mysql_connection($mysql);
    return $result;

}
