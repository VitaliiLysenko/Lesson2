<?php
//1.������� ������� � PHP � getPlus10(), ������� ����� ��������� ����� �
//������������� ����� ����� ����� � 10.
//function getPlus10($a){
//    $a+=10;
//    echo "Summ= ".$a;
//}

//2.�������� ������� �� ����������� �������: ��� ������ ����������
//�����, � �� ����� ��������.

//function getPlus10($a){
//    return $a+=10;   
//}
//echo getPlus10(20);

//3.�������� ������� pythagoras(), ������� ��������� �������� ����
//������� �������������� ������������ � ���������� ������ ����������
//����� �������������� ������������. ����������: �����
//����������� ���������� PHP-������� pow().

//function pythagoras($a,$b){
//    echo pow($a, $b);
//}
//echo 'total= ';
//echo pythagoras(2,12);

//4.�������� ������� col(), ������� ����������� ���������� ����������
//����������. ��������: col(12,6,123) ������ ����������� ����� 3.

//function col(...$a){
//    
//        echo  count($a);
//    
//    return $a;
//}
//echo col(2,4,5,6,4,3);
/*
�������� �� ������ ������:
Notice: Array to string conversion in C:\xampp\htdocs\HomeWork.loc\index07.php on line 37
 Array*/
//5.�������� ������� op(), ������� ��������� ��� ���������: $num1 �
//$num2 � ��������, $operator � ������, ������������
//��������. ������� ������ ���������� ��������� ����������
//��������� $operator ��� $num1 � $num
function op($num1,$num2,$operator){
    if ($operator=='+'){
        $total=$num1+$num2;
    }elseif ($operator=='-') {
        $total=$num1-$num2;
    }elseif ($operator=='/'){
        $total=$num1/$num2;       
    } else {
        $total=$num1*$num2;
    }    
    echo $total;
    
}
echo op(7,5,"+");