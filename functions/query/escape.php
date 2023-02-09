<?php
function sql_escape($value) {
    if(is_array($value)) {
        foreach($value as $key => $val) {
            $value[$key] = sql_escape($val);
        }
    } else {
        $value = addslashes($value);
    }
    return $value;
}