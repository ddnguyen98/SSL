<div class="container">
    <?php 
        function create_image($cap){
            unlink("./assets/image1.png");
        
            global $image;

            $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");

            $background_color = imagecolorallocate($image, 255, 255, 255);

            $text_color = imagecolorallocate($image, 0, 255, 255);

            $line_color = imagecolorallocate($image, 64, 64, 64);

            $pixel_color = imagecolorallocate($image, 0, 0, 255);

            imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

            for ($i = 0; $i < 3; $i++) {

                imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);

            }

            for ($i = 0; $i < 1000; $i++) {

                imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);

            }

            $text_color = imagecolorallocate($image, 0, 0, 0);

            ImageString($image, 22, 30, 22, $cap, $text_color);

            imagepng($image, "./assets/image1.png");


        }
        if(@$_REQUEST["msg"] && !$_REQUEST == ''){
            echo "<h2 style='color:red'>".$_REQUEST['msg']."</h2>";
        }
        echo "<form method='POST' class='navbar-form navbar-right my-3'  action='/registration/captchaLogin'>
        <div class='form-group'>
            <input type='email' class='form-control' id='logemail' name='email' aria-describedby='emailHelp' placeholder='Enter email'>
        </div>
        <div class='form-group'>
            <input type='password' class='form-control' id='logpass' name='password' placeholder='Password'>
        </div>
        <div>";
        create_image($data["cap"]);
        echo $data["cap"];

        echo "<img src='/assets/image1.png'>";


        echo "<label for=;exampleInputEmail1;>Enter Captcha </label>
        
        <input name='captcha' type='captcha' id='captcha' placeholder=''>
        
        </div>
        <button type='submit' class='btn btn-primary'>Login</button>
        </form>";

    ?>
</div>