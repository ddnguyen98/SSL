

<div class="container">
<h1>Current user:<?php echo $_SESSION["email"] ?></h1>
<div class= "container">
<a href="/profile/addForm">Add New</a><br>
<?php

foreach($data as $fruit){
    echo $fruit["name"]."<a href='/profile/editFruit?id=".$fruit["id"]."'> EDIT </a><a href='/profile/deleteFruit?id=".$fruit["id"]."'> DELETE </a><br>";
}

?>
</div>

<a class='btn btn-primary' href='/profile/logout'>Logout</a>
</div>