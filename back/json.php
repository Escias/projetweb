<?php

class json
{
    /**
     * create a json file
     * @param $name name of the json file
     * @param $array content of the json file
     */
    public function createJSON($name, $array){
        $fp = fopen($name, 'w');
        fwrite($fp, json_encode($array));
        fclose($fp);
    }

    /**
     * delete a file
     * @param $name path of the file
     */
    public function deleteJSON($name){
        unlink($name);
    }

    /**
     * extract data of the json file
     * @param $path path of the json file
     * @return array return content of the file in a array
     */
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
