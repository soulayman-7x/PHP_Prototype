<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$code = $_POST['code'];

?>

<!-- style -->

<style>
    body {
        background-color: #050505;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        font-family: 'Inter', sans-serif;
    }

    table {
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        max-width: 500px;
        background: #0f0f0f;
        border: 2px solid #BC13FE;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 0 25px rgba(188, 19, 254, 0.2);
    }

    th {
        background-color: #1a1a1a;
        color: #00E5FF;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 0.9rem;
        padding: 18px;
        border-bottom: 2px solid #BC13FE;
        text-align: left;
    }

    td {
        color: #ffffff;
        padding: 15px;
        border-bottom: 1px solid #222;
        font-size: 0.95rem;
    }

    tr:last-child td {
        border-bottom: none;
    }

    td:first-child {
        color: #00E5FF;
        font-weight: 600;
        width: 40%;
        background: rgba(0, 229, 255, 0.02);
    }

    tr:hover td {
        background: rgba(188, 19, 254, 0.05);
        transition: 0.3s;
    }
</style>


<table border="1">
    <thead>
        <tr>
            <th>Champ</th>
            <th>Value</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>First Name</td>
            <td><?php echo $first_name ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $last_name ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address ?></td>
        </tr>
        <tr>
            <td>City</td>
            <td><?php echo $city ?></td>
        </tr>

        <tr>
            <td>Postal Code</td>
            <td><?php echo $code ?></td>
        </tr>
    </tbody>
</table>