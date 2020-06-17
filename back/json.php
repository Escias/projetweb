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

    public function extractJSON($path){
        $user = array();
        $str = file_get_contents($path);
        $json = json_decode($str,true);
        foreach ($json as $item){
            $user = $item;
        }
        return $user;
    }
}
