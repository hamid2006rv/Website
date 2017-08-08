<?php
include 'php/init.php';

$result=mysql_query('select * from content where cbody like "%../uploads%"');
echo mysql_num_rows($result);
while ($row=mysql_fetch_assoc($result))
{
	$cid=$row['cid'];
	$cbody=$row['cbody'];
	
	$cbody= str_replace('../uploads','uploads',$cbody);
	mysql_query(
	"
	update content
	set cbody='$cbody'
	where
	cid=$cid
	"
	);
}
?>