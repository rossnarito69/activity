<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd and Even Checker</title>
</head>
<body>
    <h2> Odd and Even Checker</h2>
    <form method="post">
        <label for="numbers"> Enter numbers (comma-separated):</label><br>
        <input type="text" id="numbers" name="numbers" placeholder="ex. 1,2,3,4,5">
        <br><br>
        <button type="submit"> Check </button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $input=$_POST['numbers'];
    }
    ?>
</body>
</html>