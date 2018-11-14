<?php
include "../functions.php";
deleteUsers($_POST['id']);
header("Location:http://mydomain/?page=show");