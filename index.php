<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LEAP YEAR</title>
</head>
    <body>

        <form method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
            <label for="inputValue">Enter Year</label>
            <input type="text" name="inputValue">
            <button type="submit">Check</button>
        </form>
        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                
                $input = $_POST['inputValue'];

                if(empty($input)){
                    echo 'Enter a Vaild Year';
                }else{
                    leapYear($input);
                }

                
            }

            function leapYear($year){
                if($year % 400 == 0 ) 
                    echo 'It is a Leap Year'.' '.$year;
                
                else if($year % 100 == 0)
                
                    echo 'It is NOT a Leap Year'.' '.$year;
                
                else if($year % 4 == 0)
                
                    echo 'It is a Leap Year'.' '.$year;
                
                else
                
                    echo 'It is NOT a Leap Year'.' '.$year;
            }
        ?>
    </body>
</html>