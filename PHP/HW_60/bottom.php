            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam architecto id illo magni animi esse voluptatibus possimus labore, saepe tenetur suscipit libero praesentium quis iure.</p>
        </div>
    <div>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="color" class="col-sm-2 control-label">Choose a font color</label>
                <div class="col-sm-10">
                <input type="color" class="form-control" id="color" name = "color" value= <?= "$color" ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="font" class="col-sm-2 control-label">Choose a font</label>
                <div class="col-sm-10">
                    <input type="radio" name="font-family" value="Times New Roman"
                    <?php if($font === "Times New Roman") echo "checked"; ?>
                    >Times New Roman<br>
                    <input type="radio" name="font-family" value="Georgia" 
                    <?php if($font === "Georgia") echo "checked"; ?>
                    > Georgia<br>
                    <input type="radio" name="font-family" value="Palatino Linotype" 
                    <?php if($font === "Palatino Linotype") echo "checked"; ?>
                    > Palatino Linotype<br>
                    <input type="radio" name="font-family" value="other" 
                    <?php if($font !== "Times New Roman" && $font !== "Georgia" && $font !== "Palatino Linotype") echo "checked"; ?>
                    > other
                </div>
            </div>
             <div class="form-group">
                <label for="font" class="col-sm-2 control-label">or write your own</label>
                <div class="col-sm-10">
                <input type="font" class="form-control" id="font" name = "font" 
                <?php if(isset($_GET['font-family']) || isset($_GET['font']))  echo "value = $font"?>>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>