<div class="container">
<?php
if(@$_REQUEST["msg"] && !$_REQUEST == ''){
    echo "<h2 style='color:red'>".$_REQUEST['msg']."</h2>";
}
echo "<form method='POST' class='navbar-form navbar-right my-3'  action='/registration/dbLogin'>
<div class='form-group'>
    <input type='email' class='form-control' id='logemail' name='email' aria-describedby='emailHelp' placeholder='Enter email'>
</div>
<div class='form-group'>
    <input type='password' class='form-control' id='logpass' name='password' placeholder='Password'>
</div>
<div>";
echo "</div>
<button type='submit' class='btn btn-primary'>Login</button>
</form>";
?>
</div>