<?php
function viewMess(){
echo filter_input($_POST[$name])."<br>";
echo filter_input($_POST[$mess])."<br>";
echo time("d.m.y")."<br>";
}
