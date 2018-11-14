<?php
include "../functions.php";
addNewUser($_POST['name'],$_POST['surname']);
header("Location:http://mydomain/?page=show");
