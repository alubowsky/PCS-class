<?php
    $cs = "mysql:host=localhost;dbname=pcs";
    $user = "test";
    $password = 'password';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $query = "SELECT name FROM students GROUP BY name";
        $results = $db->query($query);
        $students = $results->fetchAll(PDO::FETCH_ASSOC);
        $results->closeCursor();

        $query2 = "SELECT name, grade FROM students";
        $results2 = $db->query($query2);
        $grades = $results2->fetchAll(PDO::FETCH_ASSOC);

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                if(empty($_POST['student'])){
                    $error = "name is a required field";
                }
                else{
                    $theName = $_POST['student'];
                    $query = "DELETE FROM students WHERE name = :name";
                    $statement = $db->prepare($query);
                    $statement->bindValue('name', $theName);               
                    if($statement->execute()){
                        $success = "You have successfully deleted student $theName ";
                    }
                }
        }
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>PCS Students</h1>
            <h2>Student veiwer</h2>
        </div>
    </div>
    <div class="container">
<div class="row">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Grade 1</th>
                    <th>Grade 2</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($students as $student) :?>
                <tr>
                    <td><?= $student['name'] ?></td>
                    <?php foreach($grades as $grade) {
                        if($student['name']===$grade['name']){
                            echo "<td> {$grade['grade']} </td>";
                        }
                    }
                 ?>  
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <form class="form-horizontal" method = "POST">
            <div class="form-group">
                <label for="student" class="col-sm-2 control-label">Delete a student</label>
                <div class="col-sm-10">
                    <select class="form-control" id="student" name="student">
                        <?php foreach($students as $student) :?>
                        <option><?= $student["name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">delete student</button>
                </div>
            </div>
        </form>
        <?php if(isset($success)) : ?>
            <h2 class="text-center alert alert-success">
                <?=$success?>
            </h2>
        <?php endif ?>
        <?php if(!empty($error)) : ?>
        <h2 class="text-center alert alert-danger">
            <?= $error ?>
        </h2>
        <?php endif ?>
      </div>
    </body>
</html>