<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/modern-business.css" rel="stylesheet">
</head>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="home">Day 3 Page</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">
            <?php
                //Checks through navigation data
                foreach($data->nav as $key=>$link){
                $style = "";
                //Checks current page name and if it matches it adds a style of green to signify current page
                if($key == $data->urlPathParts[0]){
                    $style = "style='font-weight:bold'";
                }
                //Echo link for page
                echo "<li class='nav-item'><a class='nav-link' href='".$link."'".$style.">".strtoupper($key)."</a></li>";
                }
            ?>
        </ul>

      </div>
    </div>
  </nav>
</html>