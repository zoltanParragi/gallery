<?php
use \Illuminate\Support\Arr;

function listfiles($path, $minlength=4) {
    $arr = scandir($path);
    array_splice($arr, 0, 1);
    return Arr::where($arr, function ($value, $key) use ($minlength, $path){
        if((strlen($value) > $minlength) && !is_dir($path.'/'.$value)) return $value;
    });
}