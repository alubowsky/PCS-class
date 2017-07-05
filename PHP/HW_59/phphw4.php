<?php
    $name  = "";
    $yearsCoding = "";
    $favLang ="";
    $langArr = [
        "Java",
        "PHP",
        "SQL",
        "Javascript",
        "Ruby",
        "HTML",
        "c#"
    ];

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        if(!empty($_POST['name'])) {
                $name = $_POST['name'];
        } else {
            $errors[] = "Name is a required field";
        }

        if(!empty($_POST['yearsCoding'])) {
            if((! is_numeric ($_POST['yearsCoding'])) || ($_POST['yearsCoding'] < 0) || ($_POST['yearsCoding'] > 50)){
                $errors[] = "Years spent coding must be a number between 0 and 50";
            }
             $yearsCoding = $_POST['yearsCoding'];  
        } else {
            $errors[] = "Years spent coding is a required field";
        }

        if(!empty($_POST['favLang'])) {
            if(in_array($_POST['favLang'], $langArr)){
                $favLang = $_POST['favLang']; 
            } else {
                    $errors[] = "Favorite programming language must be Java, PHP, SQL, Javascript, Ruby, HTML, or c#"; 
            }      
        } else {
            $errors[] = "Please choose a favorite language";
        }
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
                <h1>Form</h1>
        </div>

        <?php if(isset($errors)) : ?>
            <div class = "alert alert-danger">
                <ul>
                    <?php foreach($errors as $error) echo "<li>$error</li>" ?>
                </ul>
            </div>
        <?php endif ?>

        <form class="form-horizontal" method="post">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name = "name" id="name" placeholder="Name" required value ="<?=$name?>">
                </div>
            </div>
            <div class="form-group">
                <label for="yearsCoding" class="col-sm-2 control-label">How many years have you been coding?</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="yearsCoding" min= "0" max = "50"  name ="yearsCoding" placeholder="years coding" value ="<?=$yearsCoding?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="favLang" class="col-sm-2 control-label">Favorite programing language</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="favLang"  name ="favLang" placeholder="programing language"  value ="<?=$favLang?>" required>
                </div>
            </div>
            <?php if((empty($errors))&&(isset($_POST['submit']))) : ?>
                <div>
                    <div class="col-sm-10 well">Thanks for submiting your data</div>
                </div>
            <?php endif ?>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary" name = "submit" value= "submit">
                </div>
            </div>
        </form>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
  