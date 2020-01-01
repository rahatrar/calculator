<?php
require "Calculation.php";
$result ='';
$fnum = '';
$lnum = '';
if(isset($_POST['btn'])){
    $fnum = $_POST['fnum'];
    $lnum = $_POST['lnum'];
    $btn = $_POST['btn'];
    $test = new Calculation();
$result=$test->calcu($fnum,$lnum,$btn);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap" rel="stylesheet">



</head>
<body style="font-family: 'Alfa Slab One', cursive;">
<div class="calculator">
    <div class="offset-4 col-lg-4">
        <h1 class="text-center mt-5" style=" font-size: 50px;
">Calculator</h1>
        <form method="post">
            <div class="form-group">
                <label>First Number</label>
                <input type="text" class="form-control" name="fnum" value="<?php echo $fnum;?>" placeholder="Enter a Digit">
            </div>
            <div class="form-group">
                <label>Last Number</label>
                <input type="text" class="form-control" name="lnum" value="<?php echo $lnum;?>" placeholder="Enter another Digit">
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-success pt-1 pr-5 pl-5 pb-1" name="btn" style="font-size: 25px" value="+"><i class="fas fa-plus-circle"></i></button>
            <button type="submit" class="btn btn-danger pt-1 pr-5 pl-5 pb-1" name="btn" style="font-size: 25px" value="-"><i class="fas fa-minus-circle"></i></button>
            <button type="submit" class="btn btn-primary pt-1 pr-5 pl-5 pb-1" name="btn" style="font-size: 25px" value="*"><i class="fas fa-times-circle"></i></i></button>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" value="<?php echo $result;?>" readonly placeholder="Result">
            </div>
        </form>



    </div>
</div>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>