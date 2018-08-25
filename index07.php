<?php
//1.Создать функцию в PHP — getPlus10(), которая будет принимать число и
//распечатывать сумму этого числа и 10.
//function getPlus10($a){
//    $a+=10;
//    echo "Summ= ".$a;
//}

//2.Изменить функцию из предыдущего задания: она должна возвращать
//сумму, а не сразу выводить.

//function getPlus10($a){
//    return $a+=10;   
//}
//echo getPlus10(20);

//3.Напишите функцию pythagoras(), которая принимает значения двух
//катетов прямоугольного треугольника и возвращает размер гипотенузы
//этого прямоугольного треугольника. Примечание: может
//пригодиться встроенная PHP-функция pow().

//function pythagoras($a,$b){
//    echo pow($a, $b);
//}
//echo 'total= ';
//echo pythagoras(2,12);

//4.Создайте функцию col(), которая распечатает количество переданных
//аргументов. Например: col(12,6,123) должна распечатать число 3.

//function col(...$a){
//    
//        echo  count($a);
//    
//    return $a;
//}
//echo col(2,4,5,6,4,3);
/*
Работает но выдает ошибку:
Notice: Array to string conversion in C:\xampp\htdocs\HomeWork.loc\index07.php on line 37
 Array*/
//5.Напишите функцию op(), которая принимает три аргумента: $num1 и
//$num2 – числовые, $operator – символ, обозначающий
//операцию. Функция должна возвращать результат выполнения
//оператора $operator над $num1 и $num
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