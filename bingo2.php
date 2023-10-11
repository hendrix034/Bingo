<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        h2 {
            margin: 0;
            padding: 10px;
            font-size: 24px;
        }

        .bingo-card {
            border-collapse: collapse;
            margin: 20px auto;
        }

        .bingo-card th, .bingo-card td {
            border: 1px solid #000;
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 20px;
            cursor: pointer;
        }

        .bingo-card .marked {
            background-color: lightgreen;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .generate-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .generate-button:hover {
            background-color: #0056b3;
        }

        #ballOut {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php
// ... Your PHP code for generating the bingo card ...
?>

<div class="container">
    <h2>Bingo Card</h2>
    <table class="bingo-card">
        <tr>
            <th>B</th>
            <th>I</th>
            <th>N</th>
            <th>G</th>
            <th>O</th>
        </tr>
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo '<tr>';
            for ($j = 0; $j < 5; $j++) {
                $cellValue = $bingoCard[$j][$i];
                echo '<td onclick="toggleMarked(this,' . $j . ',' . $cellValue . ')">' . $cellValue . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
    <div class="button-container">
        <button class="generate-button" onclick="generateBingoBall()">Generate Number</button>
    </div>
    <label id="ballOut"></label>
</div>
</body>
</html>
