 <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST['name'])){
            $theName = $_POST['name'];
            if(empty($_POST['price']) || !is_numeric($_POST['price'])){
            $error = "price needs to be a number greater than 0";
            }
            else{
                $thePrice =  $_POST['price'];
            }
            include "../model/addSeferModel.php";
        }else{
            $error = "name is a required field";
        }
    }
    include "../view/addSeferView.php";
?>