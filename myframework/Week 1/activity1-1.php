<html>
    <?php
        //Main class to run
        $main = new Main();
        $main -> start();

        class Main{
            public function start(){
                //Part 1
                //Variables to set up
                $name = "Dominic";
                $age = 20;
                $person = array($name, $age, $name => $age, $age => $name);
                $speak = new Speak();

                //Functions from Speak Class
                $speak -> singleQuote($name, $age);
                $speak -> doubleQuote($name,$age);
                $speak -> doubleQuote($person[0],$person[1]);
                $speak -> doubleQuote($person[$age],$person[$name]);

                //Null value and removing var
                $age = null;
                //Still runs without error since value still exists
                echo("This age is {$age}<br/>");
                unset($name);
                //Runs but shows an error for undefined variable.
                echo("This name is {$name}<br/>");

                echo("<br/>");
                echo("<br/>");
                
                //Part 2
                $grades = array(94,54,89.9,60.01,102.1);

                //Loops through grades, checks highest grade then goes down to check next highest.
                for($x = 0; $x < count($grades); $x++){
                    if($grades[$x] >= 90){
                        echo("{$grades[$x]} is an A <br/>");
                    }
                    elseif($grades[$x] >= 80){
                        echo("{$grades[$x]} is an B <br/>");
                    }
                    elseif($grades[$x] >= 70){
                        echo("{$grades[$x]} is an C <br/>");
                    }
                    elseif($grades[$x] >= 60){
                        echo("{$grades[$x]} is an D <br/>");
                    }
                    else{
                        echo("{$grades[$x]} is an F <br/>");
                    }
                }

                echo("<br/>");
                echo("<br/>");

                //Part 3
                $colors = array("Red","Rose Red","Blue","Sky Blue","Green","Dark Green","Orange","Bright Orange","Yellow","Neon Yellow");

                //Loops through array and echos index + name
                for ($x = 0; $x < count($colors); $x++){ 
                    echo("Color {$x} is {$colors[$x]} <br/>");
                }
            }
        }
        //Class Part 1 is used for
        class Speak{
            //Concatenation  
            public function singleQuote($n, $a)
            {
                echo('My name is '. $n .' and my age is '. $a .'<br/>');
            }
            //String Interperlation
            public function doubleQuote($name, $age)
            {
                echo("My name is {$name} and my age is {$age}<br/>");
            }
        }
    ?>
</html>