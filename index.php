<?php 
$case = $_REQUEST['case'];
switch($case){
case '1' :
//Armstrong Number my name is pankaj
$n1 = '371';
$n2 = $n1;
$ar = 0;
while($n2>0){
$rem = $n2%10;
$ar = $ar+($rem*$rem*$rem);
$n2 = $n2/10;
}
if($ar == $n1){
echo 'This number is Armstromg '.$ar;
}else{
echo 'This is not a Armstromg.';
}
break;
case '2' :
//reverse number of any number
$n1 = '987654321';
$rev = array();
while($n1>0){
$num = $n1%10;
$rev[] = $num;
$n1 = intval($n1/10);
} 
echo $nm = implode($rev);
break;
case '3' :
// Factorial Number
$n1 = '5';
$fact = '1';
for($i=1;$i<=$n1;$i++){
$fact = $fact*$i;
}
echo $fact;
break;

case '44' :
for($i=0;$i<=5;$i++){
for($j=5;$j>=$i;$j--){
echo '*';
}
echo '<br>';
}
break;

case '4' :
// Fibbonacci Series 0,1,1,2,3,5,8,13
$n1 = 10;
echo $x = 0;
echo '<br />';
echo $y = 1;
for($i=1;$i<=$n1;$i++){
$z=$x+$y;
$x=$y;
$y=$z;
echo $z.'<br />';
}
break;
case '5' :
// peramid *,**
for($i=0;$i<=5;$i++){
for($j=0;$j<$i;$j++){
echo '*';
}
echo '<br>';
}
break;
case '6' :
for($i=0;$i<=5;$i++){
for($j=0;$j<=$i;$j++){
if($j%2==0){
echo '0';
}else{
echo '1';
}
}
echo '<br>';
}
break;
case '7' :
for($i=1;$i<5;$i++){
for($j=1;$j<$i;$j++){
echo '&nbsp;&nbsp;';
}
for($k=5;$k>$i;$k--){
echo '*';
}
echo '<br>';
}
break;
case '8' :
//array unique
$b1 = array();
$a1 = array('a','b','a','c','d','c','e','f');
$c=array_unique($a1);
print_r($c);
$len = count($a1);
for($i=0;$i<$len;$i++){
if(!in_array($a1[$i],$b1)){
$b1[] = $a1[$i];
}
}
print_r($b1);
break;
case '9' :
//array push
$a = array('red','green'); 
array_push($a,'blue','yello');
print_r($a);
echo '<br>';
//array combine
$a=array('a1','b1','c1');
$b=array('d1','e1','f1');
$c=array_merge($a,$b);
print_r($c);
echo '<br>';
$d=array_combine($a,$b);
print_r($d);
echo '<br>';
////
$x=1;
$y=2;
$z='';
while($z<1000){
$z=$x+$y;
echo $z.'<br>';
$x=$y;
$y=$z;
}
break;
case '10' :
for($i=1;$i<=5;$i++){
for($j=5;$j>$i;$j--){
echo '*';
}
echo '<br>';
}
break;
case '11' :

for($i=1;$i<=5;$i++){
for($j=5;$j>$i;$j--){
echo "&nbsp;";
}
for($k=$i;$k>=1;$k--){
echo '*';
}
echo '<br>';
}
break;
case '12' :
//prime number program
$num =23;
for($j = 2; $j <= $num; $j++)
{
for($k = 2; $k < $j; $k++)
{
if( $j % $k == 0)
{ 
break;
}
}
if($k == $j)
echo 'Prime Number '.$j.'<br>';
}
break;
case '13' :
$j=0;
$factor=array(); 
$num=10;
for($i=1;$i<=$num;$i++)  
{
  if($num%$i==0)
	{ 
	 $j++;
	 $factor[$j]=$i;
	}
}
   print_r($factor);
break;

case "14":
//bubble
	 $arr = array(12,23,4,15,2,8,6,9,7);
	 $len = count($arr);
	 //$sarr = array();
	 $swap = 1;
	 while($swap > 0)
	 {
		$swap = 0; 
		for($i=0;$i<$len-1;$i++)
		{
			if( $arr[$i] > $arr[$i+1] )
			{
				$temp = $arr[$i];
				$arr[$i] = $arr[$i+1];
				$arr[$i+1] = $temp;
				$swap++;
			}
		}			
	 }
	 print_r($arr);
	 break;
case "15" :
//bubble short	
$arr = array('50','3','45','22','77','150','122','53','69','33');
$len = count($arr);
$swap = 1;
while($swap>0){
$swap = 0;
for($i=0;$i<$len-1;$i++){
if($arr[$i] > $arr[$i+1]){
$temp = $arr[$i];
$arr[$i] = $arr[$i+1];
$arr[$i+1] = $temp;
$swap++;
}
}
} 
print_r($arr);
break;
} 
?>