<html>
<ul>
    <?php
    //Checks through navigation data
    foreach($data["navigation"] as $link){
        $style = "";

        //Checks current page name and if it matches it adds a style of green to signify current page
        if($link == $data["pagename"]){
            $style = "style='color:green; font-weight:bold'";
        }
        //Echo link for page
        echo " <a href='".$link."'".$style.">".strtoupper($link)."</a> |";
    }
    ?>
</ul>
</html>