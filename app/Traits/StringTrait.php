<?php

namespace App\Traits;

trait StringTrait {
    public function trimText($original_text,$text_to_trim)
    {
        $data = str_replace($text_to_trim,'',$original_text);
        return $data;
    }
}
