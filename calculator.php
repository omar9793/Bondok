<?php
$lblResult = $lblError = "";

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if(isset( $_POST['add'])) {
    
    if(check($num1 , $num2))
    { $lblResult = "Result : " . ($num1 + $num2); }
    
    else
    { $lblError = "Enter Numbers"; }
    
    }
    

if(isset($_POST['substract'])) {
    if (check($num1 , $num2))
    { $lblResult = "Result : " . ($num1 - $num2); }
    
    else
    {  $lblError = "Enter Numbers"; }
    
    }
    
if (isset($_POST['multiply'])) {
    if (check($num1 , $num2))
    { $lblResult = "Result : " . ($num1 * $num2); }
    else
    { $lblError = "Enter Numbers"; }
    }
    
if (isset($_POST['divide'])) {
    
    if(check($num1 , $num2)) {
        
        if(divideCheck($num2))
        { $lblResult = "Result : " . ($num1/$num2); }
        else
        { $lblError = "Error : Second Number Can not be ZERO"; }
    }
    else
    { $lblError = "Enter Numbers"; }
    
    }

    
    
function check($var1 , $var2){
    if (is_numeric($var1) && is_numeric($var2)){
        return 1;
    }
    else {
        return 0;
    }
    }
    
function divideCheck($var) {
    if ($var == 0)
    { return 0; }
    else
    {  return 1; }
    }
    
    
?>




<link rel="stylesheet" type="text/css" href="calculator.css" />

<div id="headerDiv">
Calculator
</div>

<p>
<label id="lblError"><?php  echo $lblError ?></label>
</p>

<form action="calculator.php" method="post">



<div id="container">
<p>Number1 : 
<input type="text" name="num1" size="5" value="<?php echo $num1 ?>" />
</p>
<p>Number2 :
<input type="text" name="num2" size="5" value="<?php  echo $num2 ?>" />
</p>
</div>
<table id="signTable">
    <tr>
        <td><input type="submit" name="add" value="+"  /></td>
        <td><input type="submit" name="substract" value="-" /></td>
        <td><input type="submit" name="multiply" value="*" /></td>
        <td><input type="submit" name="divide" value="/" /></td>
    </tr>
</table>
<p>
<label id="lblResult"><?php echo $lblResult ?></label>
</p>

</form>
