<?php 

require_once ('classes/Calculate.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
   
    if (empty($num1) || empty($num2) || empty($operator)) {
        $result =  "Please fill all the fields";
    } else {

        $calculate = new Calculate($num1, $num2, $operator);
        $result = $calculate->calculate();
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation PHP || Code With Ashikur Rahman</title>

    <!-- 
    -CSS Link 
    -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="title">Calculation</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <input type="number" name="num1" id="num1" placeholder="First Number">
            </div>

            <div class="form-group">
                <input type="number" name="num2" id="num2" placeholder="Second Number">
            </div>

            <div class="form-group">
                <select name="operator" id="operator">
                    <option value="">Select Operator</option>
                    <option value="add">Add</option>
                    <option value="subtract">Subtract</option>
                    <option value="multiply">Multiply</option>
                    <option value="divide">Divide</option>
                    <option value="modulus">Modulus</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Calculate">
            </div>

            <?php if (isset($result)) : ?>
                <div class="result">
                    <p class="result-text">Result: <?=  $result; ?></p>
                </div>
            <?php endif; ?>
        </form>
    </div>

    <!-- 
    -Main js file 
    -->
    <script src="j/script.js"></script>
</body>

</html>