<?php
$a=$_POST['f_name'];
$b=$_POST['m_name'];
$c=$_POST['l_name'];

mysql_connect("localhost","root","");
mysql_select_db("bakchodi");
$query="INSERT INTO registration VALUES ('$a','$b','$c')";
mysql_query($query);

echo "ho gya";


?>