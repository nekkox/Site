<?php

$chars = [' '];

if (!empty($_GET['name']) && (!is_numeric($_GET['name'])) && (!in_array($_GET['name'],$chars)  )){

    include ('greetings/user_greeting.php');
}else
    include ('view/greetings/visitor_greeting.php');


