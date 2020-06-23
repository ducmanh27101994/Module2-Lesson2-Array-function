<html>
<head></head>
<body>

<form method="post">
    <h1>Simple Calculator</h1>
    <br/>
    <fieldset>Calculator

        First operand:
        <input type="text" name="firstNumber"><br/>
        Operator:
        <select name="operator">
            <option value="Addition">Adđition</option>
            <option value="Subtraction">Subtraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select><br/>
        Second operand:
        <input type="text" name="secondNumber"><br/>
        <button type="submit">Calculate</button>
    </fieldset>
</form>
<h2>Result:</h2>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstNumber = $_POST['firstNumber'];
    $operator = $_POST['operator'];
    $secondNumber = $_POST['secondNumber'];

    function addition($a,$b) {
        global $operator;
        if ($operator==="Addition") {
            $addition = $a + $b;
        }
        return $addition;
    }
    function subtraction($a,$b) {
        global $operator;
        if ($operator==="Multiplication") {
            $subtraction = $a - $b;
        }
        return $subtraction;
    }
    function multiplication($a,$b){
        global $operator;
        if($operator==="Multiplication") {
            $multiplication = $a * $b;
        }
        return $multiplication;
    }
    function division ($a,$b){
        global $operator;
        if ($b === 0){
            throw new Exception("/ by zero");
        } else if ($operator==="Division"){
            $division = $a / $b;
        }
        return $division;
    }

    try {
        var_dump(addition($firstNumber,$secondNumber));
        var_dump(subtraction($firstNumber,$secondNumber));
        var_dump(multiplication($firstNumber,$secondNumber));
        var_dump(division($firstNumber,0));
    } catch (Exception $e) {
        echo $e->getMessage();
    }



}








?>


</body>

</html>








