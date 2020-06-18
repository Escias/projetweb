<?php
	$req = new request('root', 'root', 'test', 'mysql', 'localhost');
	$check = $req->getValue($req->getRows('Codingmusic_Tracks',array('Link'),"'".'10'."'", 'ID'));
	$toPlay = str_replace("https://www.youtube.com/watch?v=", "", $check[0]);
	echo $toPlay;
	/*echo '<iframe src="https://www.youtube.com/embed/'. $toPlay . '?autoplay=1" allow="autoplay" frameborder="0" allowfullscreen></iframe>';*/
?>