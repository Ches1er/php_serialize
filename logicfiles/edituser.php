<?php
include "../functions.php";
editUser($_POST['id'],$_POST['name'],$_POST['surname']);
header("Location:http://mydomain/?page=show");