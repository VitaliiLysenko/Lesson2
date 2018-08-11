<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--1Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $a, равном 'test', 'тест', 4. (Форма GET)-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET">
            $a:<input type="text" name="$a">
            <input type="submit" value="Send">
        </form>
<?php
if ($_GET['$a'] == 'test') {
    echo 'Верно';
} else {

    echo 'Неверно';
}
?>
    </body>
</html>
//////////////////////////////////////////////////////////
<!--2 Если переменная $a равна нулю или равна двум, то прибавьте к ней 7, иначе
поделите ее на 10. Выведите новое значение переменной на экран. (Форма GET)
<html>-->
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET">
            $a:<input type="text" name="$a">
            <input type="submit" value="Send">
        </form>
        <?php
        if ($_GET['$a'] == 0||$_GET['$a'] == 2) {
            echo "Равно: ".$a;
        } else {
            echo "Не равно 0 или 2:".$a /= 10;
        }
        ?>
    </body>
</html> 
/////////////////////////////////////////
<!--3 Если переменная $a больше 2-х и меньше 11-ти, или переменная $b больше или
равна 6-ти и меньше 14-ти, то выведите 'Верно', в противном случае выведите
'Неверно'. (Форма POST)-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            $a:<input type="text" name="$a">
            $b:<input type="text" name="$b">
            <input type="submit" value="Send">
        </form>
        <?php
        if ($_POST['$a'] >2 and $_POST['$a']<11) {
            if($_POST['$b']>=6 and $_POST['$b']<14){
                echo 'Верно.'.$a;
            }
        } else {
            echo "Не равно. ".$a;
        }
        ?>
    </body>
</html>
/////////////////////////////////////////////////////////////
<!--4 В переменной $min лежит число от 0 до 59. Определите в какую четверть часа
попадает это число (в первую, вторую, третью или четвертую).
Затем переделать эту задачу считывая число из формы.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            $min:<input type="text" name="$a">
            <input type="submit" value="Send">
        </form>
        <?php
        if ($_POST['$min'] >=0 and $_POST['$min']<=25) {
                echo 'Первая четверть:'.$min;
            }
            elseif ($_POST['$min'] >26 and $_POST['$min']<=50) {
                echo 'Вторая четверть:'.$min;
            }elseif ($_POST['$min'] >51 and $_POST['$min']<=75) {
                echo 'Третья четверть:'.$min;
        } else {
            echo 'Четвертая'.$min;
        }
        ?>
    </body>
</html>
/////////////////////////////////////////////////////////////////////////
<!--5 В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в
какую пору года попадает этот месяц (зима, лето, весна, осень). Затем переделать
эту задачу считывая число из формы.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            $month:<input type="text" name="$month">
            <input type="submit" value="Send">
        </form>
        <?php
        if ($_POST['$month'] ==12 and $_POST['$min']==1 and $_POST['$min']==2) {
                echo 'Зима:'.$month;
            }
            elseif ($_POST['$month'] ==3 and $_POST['month']==4 and $_POST['month']==5 ) {
                echo 'Весна:'.$month;
            }elseif ($_POST['$month'] ==6 and $_POST['$month']==7 and $_POST['$month']==8 ) {
                echo 'Лето:'.$min;
        } else {
            echo 'Осень'.$min;
        }
        ?>
    </body>
</html>
///////////////////////////////////////////////////////////////////////////////////////
<!--6 Ввести оценки ученика по 5ти предметам. Посчитать средний балл и перевести его
в словарный эквивалент. Например 0-30 – выгнать, 30-60 не зачёт, 60-74 –
удовлетворительно, 75-89 – хорошо, 90-100 – отлично.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            $a:<input type="text" name="$a">
            $b:<input type="text" name="$b">
            $c:<input type="text" name="$c">
            $d:<input type="text" name="$d">
            $e:<input type="text" name="$e">            
            <input type="submit" value="Send">
        </form>
        <?php
        $total=($a+$b+$c+$d+$e)/5;
        if ($_POST['$total'] >=0 and $_POST['$total']<30){
                echo 'Выгнать:'.$total;
            }
            elseif ($_POST['$total']<30 and $_POST['$total']<60) {
                echo 'Не зачет:'.$total;
            }elseif ($_POST['$total'] >60 and $_POST['$total']<74) {
                echo 'Удовлетворительно:'.$total;
            }elseif ($_POST['$total'] >75 and $_POST['$total']<89) {
                echo 'Хорошо:'.$total;
            }else {
            echo 'Отлично'.$total;
        }
        ?>
    </body>
</html>
////////////////////////////////////////////////////////////////////////////
<!--9 В переменной $year хранится год. Определите, является ли он високосным (в таком
году есть 29 февраля). Год будет високосным в двух случаях: либо он делится на 4,
но при этом не делится на 100, либо делится на 400.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            $leapYear:<input type="text" name="$leap year">
                    
            <input type="submit" value="Send">
        </form>
        <?php
       if(($_POST($leapYear)%4==0 and $_POST($leapYear)%100!==0)or $_POST($leapYear)%400==0){
                   echo "Год высокосный".$leapYear;
               } else {
                   echo 'Не высокосный'.$leapYear;
               }
       
        
        ?>
    </body>
</html>
////////////////////////////////////////////////////////////////////////////////
<!--10 Дано целое число, лежащее в диапазоне 1-999. Вывести его строку описание вида
«четное двузначное число», «нечетное трехзначное число» и т. д.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            $Variable:<input type="text" name="$variable">
                    
            <input type="submit" value="Send">
        </form>
        <?php
       if($_POST($variable)%2==0){
           echo 'Число четное: '.$variable;
       } else { 
           echo 'Число не четное:'.$variable;           
        }
        if($_POST($variable)>99){
        echo "Число трехзначное".$variable;        
        }
        elseif ($_POST($variable)>9 and $_POST($variable)<=99) {
            echo 'Число двухзначное'.$variable;        
        } else {
            echo 'Однозначное'.$variable;  
        }   
        ?>
    </body>
</html>
////////////////////////////////////////////////////////////////////////////////
<!--11 Необходимо написать программу, которая проверяет пользователя на знание
таблицы умножения. Пользователь сам вводит два целых однозначных числа.
Программа задаёт вопрос: результат умножения первого числа на второе.
Пользователь должен ввести ответ и увидеть на экране правильно он ответил или
нет. Если нет – показать еще и правильный результат.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            $First:<input type="text" name="$first">
            $Second:<input type="text" name="$second">  
            $Result:<input type="text" name="$result"> 
            <input type="submit" value="Send">
        </form>
        <?php
       if($_POST("$result")==$_POST($first)*$_POST($second)){
           echo 'Good';
       } else {
           echo 'Not Good!Result= '.$_POST($first)*$_POST($second);
       }
        ?>
    </body>
</html>
////////////////////////////////////////////////////////////////////////////////
<!--12 Определить четверть координатной плоскости, которой принадлежит точка.
Координаты точки ввести с клавиатуры.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            X Coordinate :<input type="text" name="$xCoord">
            Y Coordinate:<input type="text" name="$yCoord">  
             
            <input type="submit" value="Send">
        </form>
        <?php
       if($_POST("$xCoord")>0 and $_POST($yCoord)>0){
           echo 'Первая Четверть';
       }elseif ($_POST("$xCoord")<0 and $_POST($yCoord)>0 ) {
           echo 'Вторая Четверть';       
       }elseif ($_POST("$xCoord")<0 and $_POST($yCoord)<0 ) {
           echo 'Третья Четверть';
       }elseif ($_POST("$xCoord")>0 and $_POST($yCoord)<0 ) {
           echo 'Четвертая четверть';            
        ?>
    </body>
</html>
///////////////////////////////////////////////////////////////////////////
<!--13 Ученик вводит с клавиатуры число, символ арифметического действия (+, -, *, /) и
еще одно число. Компьютер должен напечатать результат.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            First Data :<input type="text" name="$fiD">
            Second Data:<input type="text" name="$seD"> 
            Symbol:<input type="text" name="$symbol">
             
            <input type="submit" value="Send">
        </form>
        <?php
        if ($_POST($symbol)=='*'){
            echo 'Total: '.$_POST($fiD)*$_POST($seD);
        }elseif ($_POST($symbol)=='/') {
             echo 'Total: '.$_POST($fiD)/$_POST($seD);
        }elseif ($_POST($symbol)=='+'){
             echo 'Total: '.$_POST($fiD)+$_POST($seD);
        }elseif ($_POST($symbol)=='-'){
             echo 'Total: '.$_POST($fiD)-$_POST($seD);
        }
        ?>
    </body>
</html>
/////////////////////////////////////////////////////////////////////////////
<!--14 Определить, можно ли квадрат со стороной a вписать в окружность заданного
радиуса R.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            S :<input type="text" name="$s">
            R:<input type="text" name="$r"> 
            <input type="submit" value="Send">
        </form>
        <?php
       if ($_POST($s)*sqrt(2)<=$_POST($r)*2){
            echo 'Yes';
        } else {
            echo 'NO';
        }        
        ?>
    </body>
</html>
/////////////////////////////////////////////////////////////////////////////
<!--15 Даны два числа - сторона и площадь квадрата. Определить, существует ли квадрат
с такой стороной и площадью.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            Side a :<input type="text" name="$sideA">
            Side b:<input type="text" name="$sideB"> 
            <input type="submit" value="Send">
        </form>
        <?php
       if ($_POST($sideA)==sqrt($_POST($sideB))){
            echo 'Yes';
        } else {
            echo 'NO';
        }        
        ?>
    </body>
</html>
////////////////////////////////////////////////////////////////////////
<!--16 Даны длины четырех отрезков. Определить какой вид четырехугольника можно
составить из этих отрезков. В выходной поток вывести 1 если это квадрат (ромб), 2
если прямоугольник (параллелепипед) или 3 если произвольный четырехугольник
и соответственно названия фигур.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            Side a :<input type="text" name="$sideA">
            Side b:<input type="text" name="$sideB"> 
            Side c:<input type="text" name="$sideC">
            Side d:<input type="text" name="$sideD"> 
            <input type="submit" value="Send">
        </form>
        <?php
       if ($_POST($sideA)==$_POST($sideC)and $_POST($sideA)==$_POST($sideD)){
            echo '1-ый Квадрат';
        } elseif ($_POST($sideA)==$_POST($sideB)and $_POST($sideC)==$_POST($sideD))
            echo '2-ой прямоугольник';
        } else {
             echo '3-ий производный четырех угольник';
        }        
        ?>
    </body>
</html>