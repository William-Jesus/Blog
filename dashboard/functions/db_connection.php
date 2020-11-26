<?php

function connect_to_mysql(){
    return mysqli_connect("127.0.0.1", "root", "rootroot", "blog_project");
}

function close_mysql_connection($mysql){
    mysqli_close($mysql);

}
