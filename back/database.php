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

    public function getColumns($columns, $table)
    {
        $list = array();
        $req = " SELECT " . $columns . " FROM " . $table;
        $tab = $this->_bdd->query($req);
        foreach ($tab as $row) {
            array_push($list, $row[$columns]);
        }
        return $list;
    }

    /**
     * Permet d'effectuer une une requête SELECT all
     * @param $table nom de la table où effectuer la requête
     * @param $where
     * @param $pos colonne de la table à vérifier
     * @return array retourne une liste contenant les résultats
     */
    public function getAllRows($table, $where, $pos){
        $val = array();
        if ($where != NULL){
            $sql = "SELECT * FROM ".$table." WHERE ".$pos."=".$where.";";
        }else{
            $sql = "SELECT * FROM ".$table.";";
        }
        $this->_bdd->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $tab = $this->_bdd->query($sql);
        foreach ($tab as $rslt){
            $val=$rslt;
        }
        return $val;
    }

    /**
     * Permet d'effectuer une une requête SELECT spécifique
     * @param $table nom de la table où effectuer la requête
     * @param $list liste contenant le nom des colonnes
     * @param $where
     * @param $pos colonne de la table à vérifier
     * @return array retourne une liste contenant les résultats
     */
    public function getRows($table, $list, $where, $pos){
        $val = array();
        $count=0;
        $value = '';
        foreach($list as $element){
            $value = $value.$element;
            if($count<count($list)-1){
                $value = $value.",";
            }
            $count++;
        }
        if ($where != NULL){
            $sql = "SELECT ".$value." FROM ".$table." WHERE ".$pos."=".$where.";";
        }else{
            $sql = "SELECT ".$value." FROM ".$table.";";
        }
        $this->_bdd->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $tab = $this->_bdd->query($sql);
        foreach ($tab as $rslt){
            $val[]=$rslt;
        }
        return $val;
    }

    public function getValue($array){
        $check = array();
        foreach ($array as $value){
            foreach ($value as $item){
                $check[]=$item;
            }
        }
        return $check;
    }

    /**
     * Permet de réaliser une requête INSERT
     * @param $table nom de la table sur laquelle effectuée le INSERT
     * @param $list éléments à ajouter
     */
    public function Insert($table,$list){
        $count=0;
        $value = '';
        foreach($list as $element){
            $value = $value.$element;
            if($count<count($list)-1){
                $value = $value.",";
            }
            $count++;
        }
        $sql = "INSERT INTO ".$table." VALUES (default,".$value.")";
        if ($this->_bdd->query($sql)===true) {
            $this->_bdd->query($sql);
        }
    }

    /**
     * Met à jours la colonne de la table indiqué
     * @param $table nom de la table
     * @param $value contenu à ajouter
     * @param $column nom de la colonne à modifier
     * @param $colwhere
     * @param $where
     */
    public function getUpdate($table, $value, $column, $colwhere, $where)
    {
        $sql = "UPDATE ".$table." SET ".$column." = '".$value."' WHERE ".$colwhere." = '".$where."';";
        if ($this->_bdd->query($sql)===true) {
            $this->_bdd->query($sql);
        }
    }
}
?>
