<?php
    function getDaysInMonth ($month, $year){
        $months = [
                "January" => 31,
                "March" => 31,
                "April" =>30,
                "May" => 31,
                "June"=>30,
                "July" => 31,
                "August" => 31,
                "September"=>30,
                "October" => 31,
                "November"=>30,
                "December" => 31
            ];
        if(array_key_exists($month, $months)){
            $daysInMonth = $months[$month];
        }
        else{
                if((($year%4 == 0) && !($year%100 == 0)) || ($year%400 == 0)){
                    $daysInMonth = 29;
                }
                else {
                    $daysInMonth = 28;
                }
        }
        return "There are " . $daysInMonth . " days in " . $_GET['month'] . " " .  $_GET['year'] ;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
                <h1>Results</h1>
                <h2><?=getDaysInMonth($_GET['month'], $_GET['year'])?></h2>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
