<?php
    if(!empty($_POST['name'])) {
        $name= $_POST['name'];
    } else {
        exit("Name is a required field");
    }

    if(!empty($_POST['email'])) {
        $email= $_POST['email'];
    } else {
        exit("Email is a required field");
    }

    if(!empty($_POST['age'])) {
        if(! is_numeric($_POST['age'])){
            exit("Age must be a number");
        }
        if(($_POST['age'] < 0) || ($_POST['age'] > 120)){
            exit("Age must be greater than 0 and less then or equal to 120");
        }
         $age= $_POST['age'];
    } else {
        exit("Age is a required field");
    }

    if(! is_numeric($_POST['rating'])){
        exit("Rating must be a number");
    } else if(($_POST['rating'] < 1) || ($_POST['rating'] > 10)){
        exit("Rating must be greater or equal to 1 and less then or eqaul to 10");
    } else {
        $rating= $_POST['rating'];
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
                <h1>You Submitted</h1>
        </div>

        <div class="form-horizontal">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name = "name" id="name" readonly value=<?= $name?>>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="email"  name ="email" readonly value=<?= $email?>>
                </div>
            </div>
            <div class="form-group">
                <label for="age" class="col-sm-2 control-label">Age</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="age"  name ="age" min="0" max="120" readonly value=<?= $age?>>
                </div>
            </div>
            <div class="form-group">
                <label for="rating" class="col-sm-2 control-label">Rating</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="rating"  name ="rating" min= "1" max ="10" disabled value=<?= $rating?>>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>