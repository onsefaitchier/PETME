fichier connect.php

<?php

$connect = mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('php') or die(mysql_error());


?>
