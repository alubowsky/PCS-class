<?php
    include_once 'cart.php';
    if(!empty($_GET)){
        if(!empty($_GET['item'])){
            $item = $_GET['item'];
        }
        else{
            $errors  [] = "item is a required field";
        }

        if(!empty($_GET['quantity']) && is_numeric($_GET['quantity'])){
            $quantity = $_GET['quantity'];
        }
        else{
            $errors [] = "quantity is a required field";
        }
    }

    if(isset($item) && isset($quantity)){
        if(!isset($cart)){
            $cart = new cart();
        }
        $cart->addItem($item, $quantity);  
    }

    include "top.php";
?>

        <div>
            <form>
                <div class="form-group row">
                    <label for="item" class="col-sm-2 col-form-label">Item</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="item" name ="item" placeholder="item">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="quantity" name ="quantity" placeholder="quantity">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <?php if(empty($errors) && !empty($_GET)) : ?>
                <h2 class = "text-success text-center">You Have successfully added <?= $item ?> to the cart</h2>
            <?php endif ?>

            <?php if(isset($errors)){
                foreach($errors as $error){
                    echo '<h2 class = "text-danger text-center">' . $error . '</h2>';
                }
            } ?>
        </div>
<?php 
    include "bottom.php"
?>