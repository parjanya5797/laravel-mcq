<?php

function serialNumber($collection,$loop,$key)
{
    return (request()->has('page') && request()->page != 1)?(request()->page - 1) * $collection->perpage() + $loop->iteration :$key +1;
}

function getCorrectClass($key,$correct,$type="external")
{
    return $type == 'external'?($key == $correct ?'success':'primary'):(trimText($key,'ans_') == $correct);
}

function trimText($original_text,$text_to_trim)
{
    $data = str_replace($text_to_trim,'',$original_text);
    return $data;
}
