<div class="container">
    <h2>Edit Fruit</h2>
    <?php echo "<form method='POST'  action='/profile/edit?id=".$_REQUEST['id']."'>" ?>
    <div class="form-group">
        <label for="name">Fruit Name</label>
        <input type="text" name="name" />
     </div>
    <input type="submit" class="btn btn-primary"/>
    </form>
</div>