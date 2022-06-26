<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php include 'function.php';?>
    <h1 class="text-center bg-info width-auto ">simple calculate</h1>

<FORM action="" method="POST">  
    <table style="margin-left:50ch" class="bg-primary ms-10  ">
        <tr class=" ">
            <td class="">Enter first number:</td>
            <td><input type="number" placeholder="numberOne" name="num1"></td>
        </tr>

        <tr>
            <td>Enter second number:</td>
            <td><input class="" type="number" placeholder="numberTwo" name="num2"></td>
        </tr>
        <tr>
          
            <td><input style="margin-left: 80px;" class="text-white bg-dark" type="submit" value="calculate" name="calculation"></td>
        </tr>
    </table>
</FORM>
<?php

if(isset($_POST['calculation'])){
    $numOne=$_POST['num1'];
    $numTwo=$_POST['num2'];
}

if(empty( $num_1) or empty( $num_2)){
    echo"<span>Field must not be empty</span>";
}
   
    $cal =new sum;
    $cal->add($numOne , $numTwo);
    $cal->mul($numOne , $numTwo);
    $cal->divi($numOne , $numTwo);
    $cal->mod($numOne , $numTwo);

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>