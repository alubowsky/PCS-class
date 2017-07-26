<div class="col-sm-3">
    <div class="well">Filters</div>
    <form action="index.php">
        <div class="well">
            <div class="form-group">
                <label for="catagory">catagory</label>
                <input class="form-control" id="catagory" name="catagory"
                <?php if (!empty($catagory)) echo "value=\"$catagory\"" ?>
                />
            </div>
        </div>
        <input type="hidden" name="action" value="<?= $action ?>">
        <input type="submit" value="filter"/>
    </form>
</div>