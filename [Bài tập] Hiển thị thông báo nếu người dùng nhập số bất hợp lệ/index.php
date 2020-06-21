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

    if ($operator === "Addition") {
        $total = $firstNumber + $secondNumber;
        echo $total;
    } else if ($operator === "Subtraction") {
        $total = $firstNumber - $secondNumber;
        echo $total;
    } else if ($operator === "Multiplication") {
        $total = $firstNumber * $secondNumber;
        echo $total;
    } else if ($operator === "Division") {

            $total = $firstNumber / $secondNumber;
            echo $total;
        }

}

function inputNumber($firstNumber, $secondNumber)
{

    try {
        if ($secondNumber === 0 || ($firstNumber === $secondNumber && $secondNumber === 0 )) {
            echo "/ by zero";
        }

    } catch (Exception $e) {
        echo 'Lỗi: ', $e->getMessage(), "\n";
    }


}

inputNumber();
?>


</body>

</html>








