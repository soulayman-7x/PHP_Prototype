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
        switch ($operation) {
            case 'add':
                $finalResult = $number1 + $number2;
                break;

            case 'sub':
                $finalResult = $number1 - $number2;
                break;

            case 'mul':
                $finalResult = $number1 * $number2;
                break;

            case 'div':
                $finalResult = $number1 / $number2;
                break;
        }
    }
}

?>

<!-- style -->

<style>
    body {
        display: grid;
        place-items: center;
        min-height: 100vh;
        background: #f0f0f5;
        font: 14px sans-serif;
        margin: 0;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 260px;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px #ddd;
    }

    h2 {
        color: #6a1b9a;
        margin: 0 0 5px;
        text-align: center;
    }

    input,
    select,
    button {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 6px;
        outline: none;
    }

    input:focus,
    select:focus {
        border-color: #6a1b9a;
    }

    #result {
        background: #f3e5f5;
        color: #6a1b9a;
        border: 1px dashed #6a1b9a;
        font-weight: bold;
    }

    button {
        background: #6a1b9a;
        color: #fff;
        border: none;
        cursor: pointer;
        font-weight: bold;
    }

    button:hover {
        opacity: 0.8;
    }
</style>


<form method="POST">
    <h2>Calculator</h2>
    <input type="number" name="num1" id="num1">
    <input type="number" name="num2" id="num2">

    <select name="operation" id="operation">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select>
    <label>Final Result</label>
    <input type="text" name="result" id="result" value="<?php echo isset($finalResult) ? $finalResult : ''; ?>" readonly>

    <button type="submit" name="calculate">calculate</button>

</form>