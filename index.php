<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" >
        <title>Roy Biesheuvel</title>
    </head>
    <body>

        <div class="container">
            <div class="header"> 
                <nav> 
                    <ul> 
                        <li>
                            <a href="#">hobby's</a>
                        </li>
                        <li>
                            <a href="#">series</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="content container">
            <h1>Roy Biesheuvel</h1>
            <h2>Hobbys:</h2>
            <ul>
                <li> <a href="https://nl.wikipedia.org/wiki/Basketbal"> basketbal</a> </li>
                <li> <a href="https://nl.wikipedia.org/wiki/Basketbal"> gamen </a></li>
                <li> <a href="https://en.wikipedia.org/wiki/Coach_(basketball)"> coachen </a></li>
            </ul>
            <h2>series:</h2>
            <ol>
                <li>Suits</li>
                <li>Breaking bad</li>
                <li>The Rookie</li>
            </ol>
            <div id="image-container">
                <img src="foto.jpg.jpeg" alt="foto" id="image" />
            </div>


            <button id="clickme">klik hier</button>
        </div>



        <div style="margin-top:25px;">

            <form>
                <label for="number1">eerste nummer</label>

                <input type="text" name="number1" id="number1" placeholder="vul je nummer in"/>
                 <label for="number2">tweede nummer</label>

                 <input type="text" name="number2" id="number2" placeholder="vul je nummer in"/>

                 <label for="method">Choose a way:</label>
                    <select name="method" id="method">
                        <option value="plus">+</option>
                        <option value="minus">-</option>
                        <option value="divided_by">/</option>
                        <option value="multiplie">*</option>
                    </select>

                 <input type="submit" />
            </form>

           <?php

            if (!empty($_GET) && !empty($_GET['number1']) && !empty($_GET['number2'])) {
                $eerste = $_GET["number1"];
                $tweede = $_GET["number2"];

                $method=$_GET["method"];

                if ($method == "plus"){
                    echo $eerste + $tweede;

                } elseif ($method=="minus"){
                     echo $eerste - $tweede; 
                }elseif ($method=="divided_by"){
                     echo $eerste / $tweede; 
                }elseif ($method=="multiplie"){
                     echo $eerste * $tweede; 
                }
               
            } else {
                if(empty($_GET["question1"])){
                    echo 'je hebt niets ingevuld';
                }
                
            }


?>
        </div>




        <div style="margin_top:25px;">
            <form method="post">
                <label for="question1">wat is uw vraag?</label>

                <input type="text"name="question1" id="question1" placeholder="vraag"/>
                <input type="submit"/>


                
            </form>



        </div>

        <?php
        
        if (!empty($_POST)){
            $question=$_POST["question1"];
        $randomNumber = rand(0,4);
        $answer=match($randomNumber){
        0=> "nee",
        1=> "ja" ,
        2=> "mischien" ,
        default=> "vraag het later opmieuw."
        };
        echo $answer;
        }


        ?>

    <script type="text/javascript" src="script.js"></script>
    </body>
</html>