//課題１
<?php 
$a=3;
$b=7;
echo $a+$b;?>

//課題２
<?php
$array_month=["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7]; ?>

// 課題３
<?php
$hello="Hello";
$name="吉富 章博";
$world="‘s World!";
$hello.=$name;
$hello.=$world;
echo $hello;
?>

// 課題4
<?php
$tech_boost="tech";
$tech_boost.="_boost";
echo $tech_boost;
?>

<?php
$fruits = array("apple", "orange", "lemon");

for ($i = 0; $i < count($fruits); $i++) {
  echo "要素は" .$fruits[$i];
  echo "\n";
}
?>

課題１
<?php
$name=吉富　章博;

if($name=吉富　章博) {
  echo "私は あなたの名前 です";
} else {
  echo "私は あなたの名前 です";
}
?>

課題２
<?php
$total=0;

for($i = 1; $i <=1000; $i++){
$total += $i;}
echo $total;
?>

課題３
<?php
$fruts=array("apple", "orange", "lemon","banana","melon");

foreach($fruts as $frut){
  echo "$frut";
  echo "\n";
}
?>

課題４
<?php
$start = 1;

for($i=1; $i<=100; $i++){
if($i % 5 == 0){
echo $i;
 echo "\n";}
}
?>

<?php
// 1から100までを順番に表示する関数
function print_number(){

for($i = 0; $i < 100; $i++){
echo $i;
    }
}
?>

課題１
<?php
function multiplication($num) {
return $num * 2;
}
echo multiplication(3)
?>

課題２
<?php
function f($a, $b){
$result=$a+$b;
return $result;}
echo f(5,10);
?>

課題３
<?php
function total_Product($arr){
$result = 1; 
foreach($arr as $a){
 $result *= $a;
}
return $result;
}
echo total_Product(array(1,3,5,7,9));
?>

課題４
<?php
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
     if($max_number<$a){
         $max_number=$a;
     }
 }
 
 return $max_number;
}
echo max_array(array(2,5,33,44,22));
echo "\n";
?>

課題５
.strip_tags
<?php
  $html_body = 'テスト<br><p>テスト</p><strong>テスト</strong>';
  echo strip_tags($html_body);
?>

.array_push
<?php
  $members=array("一郎","二郎","三郎");
  array_push($members,"四郎","五郎");
  var_dump ($members);
 ?>
 
.array_merge
 <?php
  $array1 = [1, 2, 3];
  $array2 = [10, 20, 30];
  $array3 = [100, 200, 300];
  $array = array_merge($array1, $array2, $array3);
  print_r($array);
  ?>
  
 .time, mktime
  <?php
  $timestamp = mktime(0, 0, 0, 8, 1, 2017);
  echo $timestamp;
  ?>
  
 .date
 <?php
echo date('d', strtotime('-1 day'));//昨日
?>
