<?php

//1.������� ������� � PHP � getPlus10(), ������� ����� ���������
//����� � ������������� ����� ����� ����� � 10.
//
//function getPlus10($a){
//    $a+=10;
//    echo "Summ= ".$a;
//}
//2.���� ������ $arr = array(�frst�=>45, �second�=>76,
//�third�=>12). �������� �������, ����� �������� ������,
//���������� �������� �������� ����� ������� $arr.
//
//function keyGen(){
//    $arr=array("first"=>45,"second"=>76,"third"=>12);
//    foreach ($arr as $key=>$value){
//        for($i=0;$i<1;$i++){
//            $arr1[]=$key;
//        }
//        
//    }
//    print_r($arr1);
//}
//echo keyGen();
//3.�������� ��������� ������. ������ ��� ����� - ��� 'ru' � 'en'.
//����� ������ ���� �������� �������, ���������� ��������
//�������� ���� ������ ��-������, � ������ - ��-���������. �
//���������� $lang �������� ���� (��� ��������� ���� ��
//�������� ��� 'ru', ��� 'en' - ���� ��, ���� ��), � �
//���������� $day - ����� ���. �������� ������ ���� ������,
//��������������� ���������� $lang � $day. �� ����: ����, �
//�������, $lang = 'ru' � $day = 3 - �� ������� '�����'.

//$arr = array('ru' => array('���', '����', '����', '����', '����', '���', '����'),
//    'en' => array('Mon', 'Tue', 'Wedn', 'Thur', 'Fri', 'Sat', 'Sun')
//);
//$lang = 'en';
////$day =5;
//$day = rand(1, 7);
//$dayWeek=0;
//foreach ($arr as $key=>$v){
//if($key==$lang){
//    $dayWeek=$arr[$key][$day-1];
//    echo 'Day: '.$dayWeek;    
//} else {
//    $dayWeek=$arr[$land][$day-1];
//    echo $dayWeek;
//    
//}
//}
//�������� �� ������ �� �������� �� dayWeek.

//4.��� ��������� ������, ���������� ������������� �
//������������� �����. �������� �� ����� ������� ��� �����
//�������, ������� �������� ������������� �����.
//$arr=array(array(1,4,-5),
//           array(-4,2,-6));
//       foreach ($arr as $value){
//           foreach ($value as $value1){
//           if($value1<0){
//               echo $value1."<br>";
//           } else {
//               echo '';
//           }
//       }
//       }

//5.������������ ������ � ���������� ����������� ����� �������
//3, ������� ����������� � ���������� n. ������� ������ �� nxn
//��������� ����� ����� �� ������� [0;n] � ������� ��� �� �����.
//������� ������ ������ ������ �� ������ ��������� �������
//�������, ���� ��� ��� ����, � ������� ��� �� �����.
//
//
 
//6.��� �������� ���������� ������ �������� ����� ������
//�������, ������� ������� ������� ����� �������� ������
//���� � ����, ����� �������� ������� ������� ������ ��
//������� ���������, �� � ������ 15 �������, � ������� �����
//��� �� ������ �����������. � ������ ������� ��������
//���������, ������� ����� �������� �� ����� 15 ���������
//�������� �� ������� ��������� (�� 2*2 �� 9*9, ������ ���
//������� �� ��������� �� 1 � �� 10 � ������� ������). ���
//���� ����� 15 �������� �� ������ ���� �������������
//(������� 2*3 � 3*2 � �� �������� ���� �������
//��������������).
//$arr=(array(15,3);
//for($i=0;$i< strlen($arr);$i++){
//    for($j=0;$j< strlen($arr[$i]);$j++){
//      $arr[$i][$j]= rand(2, 9);
//      if($j== strlen($arr[i]-1)){
//          $arr[$i][$j]=$arr[$i][$j-2]*$arr[$i][$j-1];
//          for($q=0;$q<$i;$q++){
//              if($arr[$i][$j]==$arr[$q][$j]&&$i>0){
//                  if($arr[$i][$j-1]==$arr[q][$j-1]||$arr[$i][$j-2]==$arr[$q][$j-2]){
//                      $i--;
//                  }
//              }
//          }
//      }
//    }
//    for($w=0;$w<strlen($arr);$w++){
//        echo "Task�".($w."Multiplication ");
//        for($e=0;$e<strlen($arr[$w]);$e++){
//            if($e==1){
//                echo $arr[$w][$e];
//            }
//        }
//    }
//}

$employees = [
    [
        'name' => 'Clark Kent',
        'age' => 22,
        'skills' => ['PHP', 'Java', 'C#']
    ],
    [
        'name' => 'Steve Stifler',
        'age' => 21,
        'skills' => ['�++', 'JS', 'CSS', 'HTML']
    ],
    [
        'name' => 'Bruce Wayne',
        'age' => 35,
        'skills' => ['PHP', 'PHP Unit', 'XDebug', 'JS']
    ],
    [
        'name' => 'Peter Parker',
        'age' => 18,
        'skills' => ['PHP Unit', 'C', 'Pascal']
    ]
];

