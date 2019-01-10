<?php
$a=$_POST['f_name'];
$b=$_POST['m_name'];
$c=$_POST['Last Name'];
$d=$_POST['gender'];
$e=$_POST['dob'];
$f=$_POST['Father_name'];
$g=$_POST['Addr1'];
$h=$_POST['Addr2'];
$i=$_POST['email1'];
$j=$_POST['email2'];
$k=$_POST['Mobile'];
$l=$_POST['contact_no'];
$m=$_POST['College'];
$n=$_POST['department'];
$o=$_POST['sem'];
$p=$_POST['pwd1'];
$q=$_POST['pwd2'];

mysql_connect("localhost","root","");
mysql_select_db("company");
$query="INSERT INTO registration VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q')";
mysql_query($query);

echo "ho gya";


?>