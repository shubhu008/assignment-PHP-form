<?php
if(isset($_POST["add"]))
{
  $value1=$_POST['value1'];
  $value2=$_POST['value2'];
  echo $value1+$value2;
  exit;
}
if(isset($_POST["sub"]))
{
  $value1=$_POST['value1'];
  $value2=$_POST['value2'];
  echo $value1-$value2;
  exit;
}
if(isset($_POST["product"]))
{
  $value1=$_POST['value1'];
  $value2=$_POST['value2'];
  echo $value1*$value2;
  exit;
}
if(isset($_POST["divide"]))
{
  $value1=$_POST['value1'];
  $value2=$_POST['value2'];
  echo $value1/$value2;
  exit;
}?>
