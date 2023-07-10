<?php 
if(isset($_POST['submit'])){
$fnumber=$_REQUEST['fnumber'];
$snumber=$_REQUEST['snumber'];
$ar=array();
$i=0;
// $v=strlen($fnumber);
while($fnumber>0){
    $fnum=$fnumber%10;
    $fnumber=($fnumber-$fnum)/10;
    $ar[$i]=$fnum;
    $i++;
}
$flag=1;
while($snumber>0){
    $snum=$snumber%10;
    $snumber=($snumber-$snum)/10;
    $f=0;
    for($i=0;$i<5;$i++){
        if($snum==$ar[$i]){
            $f=1;
        }
    }
    if($f==0){
        $flag=0;
        break;
    }
}
if($flag==1)
{
	echo "yes";
}
else
{
	echo "no";
}
}
?>