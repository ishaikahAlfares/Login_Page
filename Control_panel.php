<! DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- by using this tag we can make the web page a responsive web page-->
        <title>Control Page</title>
        <!-- ----------------------------------------------------------------------CSS----------------------------------------------------------------------------- -->
        <style type="text/css">
            body {

                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                text-align: center;
                width: 100%;
                height:100%;
                font-family: 'Open Sans', sans-serif;
                background: #092756;
                background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #11915e 0%, #092756 100%);
                background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #11915e 0%,#092756 100%);
                background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #11915e 0%,#092756 100%);
                background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #11915e 0%,#092756 100%);
                background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #11915e 0%,#092756 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}

            

            input[type="range"] {
                position: relative;
                display: block;
                width: 200px;
                margin-bottom:10px;
                color: black;
                cursor: pointer;
                -moz-appearance: none;
                -ms-progress-appearance: none;
                -webkit-appearance: none;
                appearance: none;

            }

            input[type="range"]::before {
                left: 0;
                transform: translateX(-100%);
                content: attr(min)
            }

            input[type="range"]::after {
                left: 0;
                transform: translateX(100%);
                content: attr(max)
            }

            input[type="range"]::-webkit-slider-runnable-track {
                appearance: none;
                background: #222;
                height: 3px;
                border-radius: 3px;
                -moz-appearance: none;
                -ms-progress-appearance: none;
                -webkit-appearance: none;
                appearance: none;
            }

            input[type="range"]::-webkit-slider-thumb {
                background: #0097f0;
                height: 20px;
                width: 6px;
                border-radius: 12px;
                margin: -7px 0 0 0;
                -moz-appearance: none;
                -ms-progress-appearance: none;
                -webkit-appearance: none;
                appearance: none;


            }

            .Bcolor button {
                background:  #0d6743;
                color: white;
            }

            button {
                margin-top: 15px;
                background: #0970ad;
                height: 40px;
                width: 70px;
                border-radius: 30%;
                border: 1px solid;
                padding: 5px;
                box-shadow: 5px 10px lightgray;

            }

            span {
                background: azure;
                height: 100px;
                width: 100px;
                border-radius: 100%;

            }
            .container1{
                background-color: rgba(255,255,255,0.5);
                width: 450px;
                display: flex;
                 justify-content: center;
                 flex-direction: column;
                 align-items: center;
                 text-align: center;
                 margin-top:5%;
                 margin-bottom:5%;
                 border-radius:5%;
            }
            .container {
                 
                background-color: white;
                 width: 400px;
                 display: flex;
                 justify-content: center;
                 flex-direction: column;
                 align-items: center;
                 text-align: center;
                 margin-top:5%;
                 margin-bottom:5%;
                 border-radius:5%;
                 
                }
                label{
                    font-weight: bold;
                    color:#087563;
                }
        </style>
    </head>



    <body>
        <!-- ------------------------------------------------------------------------------HTML-------------------------------------------------------------------------------------- -->
     <div class="container1">
        <div class="container">
        <form action="" method="post">


            <!-- create range sliders and create span for each slider to show the current value of the slider-->
            <br><label for="en1">Engine 1 </label><br>
            <span id="current-value1">90</span><br>
            <input type="range" id="slider1" min="0" max="180" value="90" steps="1" name="en1">

            <label for="en2"> Engine 2</label><br>
            <span id="current-value2">90</span><br>
            <input type="range" id="slider2" min="0" max="180" value="90" steps="1" name="en2">

            <label for="en3"> Engine 3</label><br>
            <span id="current-value3">90</span><br>
            <input type="range" id="slider3" min="0" max="180" value="90" steps="1" name="en3">

            <label for="en4"> Engine 4</label><br>
            <span id="current-value4">90</span><br>
            <input type="range" id="slider4" min="0" max="180" value="90" steps="1" name="en4">

            <label for="en5"> Engine 5</label><br>
            <span id="current-value5">90</span><br>
            <input type="range" id="slider5" min="0" max="180" value="90" steps="1" name="en5">

            <label for="en6"> Engine 6</label><br>
            <span id="current-value6">90</span><br>
            <input type="range" id="slider6" min="0" max="180" value="90" steps="1" name="en6">
            
            <div class="buttons">
                <button type="submit" name="save"> Save </button>
                <button type="submit" name="on"> On </button>
                <button type="submit" name="off"> Off </button>
            </div>
            <div class="Bcolor">
                <button type="submit" name="forward">Forward</button>
                <br>
                <button type="submit" name="left">Left</button>
                <button type="submit" name="stop">Stop</button>
                <button type="submit" name="right">Right</button>
                <br>
                <button type="submit" name="backward">Backward</button>
            </div></div></div>

            
            <!-- ---------------------------------------------------------------------------JS---------------------------------------------------------------------------- -->
            <script>
                /* showing the current value of each slider in the span area*/

                document.getElementById("slider1").addEventListener("input", function(event) {
                    let value1 = event.target.value;
                    document.getElementById("current-value1").innerText = value1;
                });
                document.getElementById("slider2").addEventListener("input", function(event) {
                    let value2 = event.target.value;
                    document.getElementById("current-value2").innerText = value2;
                });
                document.getElementById("slider3").addEventListener("input", function(event) {
                    let value3 = event.target.value;
                    document.getElementById("current-value3").innerText = value3;
                });
                document.getElementById("slider4").addEventListener("input", function(event) {
                    let value4 = event.target.value;
                    document.getElementById("current-value4").innerText = value4;
                });
                document.getElementById("slider5").addEventListener("input", function(event) {
                    let value5 = event.target.value;
                    document.getElementById("current-value5").innerText = value5;
                });
                document.getElementById("slider6").addEventListener("input", function(event) {
                    let value6 = event.target.value;
                    document.getElementById("current-value6").innerText = value6;
                });
            </script>
            <!-- ----------------------------------------------------------------------------PHP------------------------------------------------------------------------------------ -->

            <?php
            /* database connection*/
            $db_con =  new mysqli('localhost', 'root', '', 'r_arm_complete')
                or die("\nUnable tp connect to database");
            ?>

            <?php
            /* changing values of degree column in the database if the save button got pressed */
            if (isset($_POST["save"])) {
                $rangeValue = $_POST['en1'];
                $sql = "UPDATE engines SET degree = '$rangeValue' WHERE Engine_number = '1'";
                $query = mysqli_query($db_con, $sql);
                $rangeValue = $_POST['en2'];
                $sql = "UPDATE engines SET degree = '$rangeValue' WHERE Engine_number = '2'";
                $query = mysqli_query($db_con, $sql);
                $rangeValue = $_POST['en3'];
                $sql = "UPDATE engines SET degree = '$rangeValue' WHERE Engine_number = '3'";
                $query = mysqli_query($db_con, $sql);
                $rangeValue = $_POST['en4'];
                $sql = "UPDATE engines SET degree = '$rangeValue' WHERE Engine_number = '4'";
                $query = mysqli_query($db_con, $sql);
                $rangeValue = $_POST['en5'];
                $sql = "UPDATE engines SET degree = '$rangeValue' WHERE Engine_number = '5'";
                $query = mysqli_query($db_con, $sql);
                $rangeValue = $_POST['en6'];
                $sql = "UPDATE engines SET degree = '$rangeValue' WHERE Engine_number = '6'";
                $query = mysqli_query($db_con, $sql);
            }

            /* changing values of state column in the database if the on button got pressed */
            if (isset($_POST["on"])) {
                $sql = "UPDATE engines SET state = '1' where state = '0'";
                $query = mysqli_query($db_con, $sql);
            }

            /* changing values of state column in the database if the off button got pressed */
            if (isset($_POST["off"])) {
                $sql = "UPDATE engines SET state = '0' where state = '1'";
                $query = mysqli_query($db_con, $sql);
            }


            /* changing values of Direction column in the database */
            if (isset($_POST["forward"])) {
                $sql = "UPDATE engines SET Direction = 'f'";
                $query = mysqli_query($db_con, $sql);
            }
            if (isset($_POST["left"])) {
                $sql = "UPDATE engines SET Direction = 'l'";
                $query = mysqli_query($db_con, $sql);
            }
            if (isset($_POST["stop"])) {
                $sql = "UPDATE engines SET Direction = 's' ";
                $query = mysqli_query($db_con, $sql);
            }
            if (isset($_POST["right"])) {
                $sql = "UPDATE engines SET Direction = 'r' ";
                $query = mysqli_query($db_con, $sql);
            }
            if (isset($_POST["backward"])) {
                $sql = "UPDATE engines SET Direction = 'b' ";
                $query = mysqli_query($db_con, $sql);
            }

            ?>


        </form>
    </body>

    </html>