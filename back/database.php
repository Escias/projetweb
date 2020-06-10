<?php

class request
{
    private $_user;
    private $_pwd;
    private $_dbName;
    private $_dbType;
    private $_dbAdress;
    private $_bdd;

    /**
     * Méthode constructeur permettant de créer une connexion
     * avec notre base de données
     * @param $user =>    permet d'indiquer l'utilisateur PhpMyAdmin
     * @param $pwd =>    permet d'indiquer le mot de passe de l'utilisateur PHPMyAdmin
     * @param $dbname =>    permet d'indiquer le nom de la base de données à laquelle je veux me connecter
     * @param $dbtype =>    permet d'indiquer le type de base de donnée sur lequel je vais établir une connexion (Oracle, mySQL...)
     * @param $dbadress =>  permet de fournir l'adresse sur laquelle est installé notre base (localhost ou l'adresse IP de notre serveur/ ou nom de domaine)
     */
    public function __construct($user, $pwd, $dbname, $dbtype, $dbadress)
    {
        $this->_user = $user;
        $this->_pwd = $pwd;
        $this->_dbName = $dbname;
        $this->_dbType = $dbtype;
        $this->_dbAdress = $dbadress;

        $this->connectDB();
    }

    /**
     * Méthode qui permet d'établir
     * une connexion avec la base de données
     * via l'objet PDO en utilisant les variables de classes
     */
    private function connectDB()
    {
        try {
            if ($this->_bdd === null) {
                $dsn = $this->_dbType . ':dbname=' . $this->_dbName . ';host=' . $this->_dbAdress;

                $this->_bdd = new PDO($dsn, $this->_user, $this->_pwd);
            }

        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
            die();
        }
    }

    /**
     * Permet de réaliser une requête Select
     * et d'afficher chaque enregistrement à l'utilisateur
     */
    public function Insert($table, $list)
    {
        $count = 0;
        $value = '';
        foreach ($list as $element) {
            $value = $value . $element;
            if ($count < count($list) - 1) {
                $value = $value . ",";
            }
            $count++;
        }
        $sql = "INSERT INTO ".$table." VALUES (default,".$value." )";
        if ($this->_bdd->query($sql)===true) {
            $this->_bdd->query($sql);
        }
    }



}
