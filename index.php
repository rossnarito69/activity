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
        $numbers = array_map('trim', explode(',', $input));

        echo "<h3>Results:</h3>";
        foreach ($numbers as $number){
            if(is_numeric($number)){
                if($number % 2 == 0){
                    echo "The number $number is even. <br>";
                } else {
                    echo "The number $number is odd. <br>";
                }

            } else {
                echo "Invalid input: '$number' is not a valid number. <br>";
            }

        }
    }
    ?>
</body>
</html>