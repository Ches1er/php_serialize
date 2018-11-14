<?php
include "functions.php";
$page=@$_GET['page'];

$_ROUTES=[
    ""=>"main.show",
    "show"=>"main.show"
];

$page=!isset($_ROUTES[$page])?"404":$page;
list($logicfile,$pagefile)=explode(".",$_ROUTES[$page]);
loadPage($logicfile,$pagefile);


