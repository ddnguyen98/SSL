<div class="container">
<?php
foreach($data as $fruit){
    echo $fruit["name"]."<a href='/profile/editFruit?id=".$fruit["id"]."'> EDIT </a><a href='/profile/deleteFruit?id=".$fruit["id"]."'> DELETE </a><br>";
}
?>
    <form method="POST"  action="/profile/addItem">

    <div class="form-group">
        <label for="name">Fruit Name</label>
        <input type="text" name="name" />
     </div>
    <input type="submit" class="btn btn-primary"/>
    </form>
</div>