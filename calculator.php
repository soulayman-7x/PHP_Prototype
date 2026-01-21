<form method="POST">
    <input type="number" name="num1" id="num1">
    <input type="number" name="num2" id="num2">

    <select name="operation" id="operation">
        <option value="add">add</option>
        <option value="sub">sub</option>
        <option value="mul">mul</option>
        <option value="div">div</option>
    </select>

    <input type="text" name="result" id="result" readonly>

    <button type="submit" name="calculate">calculate</button>
    
</form>

<?php

if (isset($_POST['calculate'])) {
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if (empty($number1) || empty($number2)) {
        echo "Error : All fields are required!";
    } else if (!is_numeric($number1) || !is_numeric($number2)) {
            echo "Error: Please enter valid numbers!";
    } else if ($operation == 'div' && $number2 == 0) {
        echo "Error : Cannot divide by zero!";
    } else {
                echo "The numbers are $number1 and $number2. The operation is $operation";

    }
}

