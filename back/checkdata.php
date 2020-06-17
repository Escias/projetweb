<?php
$val = array();
$count=0;
$value = '';
$sql = "SELECT Is_Online FROM codingmusic_ig_users WHERE NickName= 'Rosstail';";
$this->_bdd->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$tab = $this->_bdd->query($sql);
foreach ($tab as $rslt){
    $val[]=$rslt;
}
$check = array();
foreach ($val as $value){
    foreach ($value as $item){
        $check[]=$item;
    }
}
echo $check;
echo "<p>test</p>";
echo "<p>".$check[0]."</p>";