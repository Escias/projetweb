<?php

class json
{
    public function createJSON($name, $array){
        $fp = fopen($name, 'w');
        fwrite($fp, json_encode($array));
        fclose($fp);
    }

    public function deleteJSON($name){
        unlink($name);
    }
}
