<?php

define("DOCROOT",$_SERVER["DOCUMENT_ROOT"]);

function renderTemplate($template,$content){
    ob_start();
    include DOCROOT."/templates/".$template.".php";
    return ob_get_clean();
}

function renderView($view){
    ob_start();
    include DOCROOT."/views/".$view.".php";
    return ob_get_clean();
}

function renderTemplateWithView($template,$view){
    $content=renderView($view);
    echo renderTemplate($template,$content);
}

function loadPage($logicfile,$pagefile){
    include DOCROOT."/logicfiles/".$logicfile.".php";
    $func = $pagefile."Page";
    $func("template",$pagefile);
}

    //Actions w datafile

function dataPath(){
    return DOCROOT."/datafiles/"."users.data";
}

function getArrayFromFile(){
    return unserialize(file_get_contents(dataPath()));
}

function saveArray($arr){
    file_put_contents(dataPath(),serialize($arr));
}

    //Actions w array

function addNewUser($name,$surname){
    $user['name']=$name;
    $user['surname']=$surname;
    $users=getArrayFromFile();
    $users[time().md5($user['name'].$user["surname"])]=$user;
    saveArray($users);
}
function deleteUsers($id){
    $users=getArrayFromFile();
    unset($users[$id]);
    saveArray($users);
}
function editUser($id,$newName,$newSurname){
    $users=getArrayFromFile();
    if (!empty($users[$id])){
        $users[$id]['name']=$newName;
        $users[$id]['surname']=$newSurname;
        saveArray($users);
    }
    else return;
}

function showUsers(){
    $array = getArrayFromFile();
    ob_start();
    foreach ($array as $key=>$v){
        $name=$v["name"];
        $surname=$v["surname"];
        echo "id: ". $key."   ".$name."  ".$surname."<br/>";
    }
    return ob_get_clean();
}


