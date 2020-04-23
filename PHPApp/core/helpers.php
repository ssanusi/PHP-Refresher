<?php


/**
 * @param $name
 * @param array $data
 * @return mixed
 */
function view($name, $data = []){
    extract($data);
    return require "app/views/{$name}.view.php";
}


/**
 * @param $path
 */
function redirect($path){
    header("Location: /{$path}");
};
