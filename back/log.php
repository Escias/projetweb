<?php

class log
{
    private $_username;

    public function __construct($username)
    {
        $this->_username = $username;
    }

    public function getUser(){
        return $this->_username;
    }
}
