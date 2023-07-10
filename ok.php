<?php
$a=12345;
$b=231;
$ar=array();
$i=0;
while($a>0)
{
	$a1=$a%10;
	$a=($a-$a1)/10;
	$ar[$i]=$a1;
	$i++;
}
$flag=1;
while($b>0)
{
	$b1=$b%10;
	$b=($b-$b1)/10;
	$f=0;
	for($i=0;$i<5;$i++)
	{	
		if($b1==$ar[$i])
		{
			$f=1;
		}
	}
	if($f==0)
	{
		$flag=0;
		break;
	}
}

if($flag==1)
{
	echo "Y";
}
else
{
	echo "N";
}

?>