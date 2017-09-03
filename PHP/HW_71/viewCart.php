<?php 
    include_once "cart.php";
    $cart = new cart();
    

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['clear'])){
            $_SESSION['cart'] = "";
        }
    }

    $items = $cart->getItems();
    include "top.php";
?>
<div>
    <table class="table table-hover">
    <thead>
        <tr>
        <th>Product</th>
        <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(!empty($items)){
                foreach($items as $product=>$quantity){
                    echo "<tr> <td>". $product ."</td>";
                    echo "<td>". $quantity ."</td> </tr>";
                }
            }
        ?>
    </tbody>
    </table>
</div>

<div class="form-group row">
    <form method = "post">
        <div class="form-group row">
            <div class="col-sm-10">
                <input type="hidden" class="form-control" name ="clear">
            </div>
        </div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-danger">Clear Cart</button>
        </div>
    </form>
</div>

<?php 
    include "bottom.php";
?>