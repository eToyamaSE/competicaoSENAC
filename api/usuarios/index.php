<?php

$metodo = $_SERVER["REQUEST_METHOD"];

if ($metodo == "GET") {
    include_once "get.php";
} else if ($metodo == "POST") {
    include_once "post.php";
} else if ($metodo == "PUT") {
    include_once "put.php";
} else if ($metodo == "DELETE") {
    include_once "delete.php";
}