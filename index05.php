<?php

//<!--1.������� ������ �� 10 ��������� ����� �����, ����� � ��� ������
//������������ � ��� ������, ������� ��� ������������ � �����.
//������� ����� � ��� ������.
//$a=4;
//$arr=[];
//for ($i=0;$i<10;$i++){
//    $arr[]= rand(-5,10);
//}
//var_dump($arr);
//foreach ($arr as $key=>$value){
//    if($value==$a){
//        echo "[$key]=>",$value;
//        break;
//    }
//}-->
//2.����� ������� �������������� ��������� � ��������� ��������.
//$arr = [];
//$plus=0;
//for ($i = 0; $i < 15; $i++) {
//    $arr []= rand(-3, 15);
//}
//var_dump($arr);
//foreach ($arr as $value){
//    if ($value<0){
//    $plus+=$value;
//    echo $value."<br>";
//    $plus/=15;
//    }
//}echo "total: ".$plus;

//3.�������� ��� ������� 7 �������� ������� �� 7. ���������� ����������
//����� ���������.
//$arr=[];
//$count=0;
//for($i=0;$i<7;$i++){
//    $arr[]= rand(4, 13);
//}print_r($arr);
//foreach ($arr as $value){
//    if ($value>7){
//        $value=7;
//        $count++;
//    }
//}echo '<br>';
//echo 'total= '.$count;

//4.������� ����� ������, ������� �������� ���������� �����������
//������� ([1, 2, 3, 4] -> [4, 3, 2, 1]).
$arr=[1,2,3,4];
$stack=new\Ds\Stack();
$arr2=[];
foreach ($arr as $value){
    $stack->push($value);
}print_r($stack);

//
//5.����� ����� ��� ��������� �������, ������� ������������ �����
//������ � ������������� ��������. ������ ������� �����
//������������. ��������, � ������� [3, -5, -2, 4, -8, 0] ��������������
//������� ���������� �������� ����� -2 � -8. �� ����� ����� -10.
// $arr=[4,-2,6,-3,6,-12];
// print_r($arr);
// $total=0;
// echo '<br>';
// foreach ($arr as $value){
//     if($value<0 and $value%2==0){
//         $total+=$value;
//     }
// }echo 'Total= '.$total;

//6.����� � ������� ����� �������� � ����������(max) �
//����������(min) ����������. ������� ��� 2 �������� �� �����, �
//����� ��������� � ������� ����� ���� ��������� ��������� (min � max
//� ����� �� ������).
//$arr = [];
//$aMax ;
//$aMin;
//$summ=0;
//for ($i = 0; $i < 10; $i++) {
//    $arr[] = rand(0, 15);
//}print_r($arr);
//echo '<br>';
//$aMax = max($arr);
//$aMin = min($arr);
//echo 'Max= ' . $aMax . "<br>" . 'Min= ' . $aMin . "<br>";
//foreach ($arr as $value){
//    if($value!==$aMax or $value!==$aMin){
//       $summ+=$value;        
//    }
//}echo 'Summ= '.$summ;

//7.������������ ��������, �������������� � ������� ��� ���� �����
//�����, ����� ������� ����� ��������� ��������.
//$sum=0;
//$arr=[];
//for ($i=0;$i<10;$i++){
//$arr[]= rand(-5, 15);}
/////////////////////////////////////////
//8.��� ������ � ���������� �������. ������� ����� ������, � �������
//������ �������� �������� ����� ������������ ���� �������� ���������
//������� � �������� �� �������� ��������. ��������, �������� ������
//����� ���: [1, 7, 3, 4], ����� ������ �������: [84, 12, 28, 21]. ������
//�������� ���������� ��������� �������: [7*3*4, 1*3*4, 1*7*4, 1*7*3]

//$arr = [];
//for ($i = 0; $i < 4; $i++) {
//    $arr[] = rand(1, 7);
//}print_r($arr);
//echo '<br>';
//foreach ($arr as $key=>$value){
//    while ($key==0){
//        $arr[0]=$arr[1]*$arr[2]*$arr[3];
//    } elseif ($key==$arr[1]) {
//        $arr[1]=$arr[0]*$arr[2]*$arr[3];
//        
//    } elseif ($key==2){
//        $arr[2]=$arr[0]*$arr[1]*$arr[3];
//    }elseif ($key==2){
//       $arr[3]=$arr[0]*$arr[1]*$arr[2]; 
//    }endwhile;
//}
//


