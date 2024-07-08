<?php

$number = "";

?>




<html>




<title>Calculator</title>





<head>
    <h1>Calculator</h1>
    <!------------------------------------------------------------------Link zum CSS------------------------------------------------------------------->
    <link rel="stylesheet" href="styles.css">
</head>





<!----------------------------------------------------------------------------Taschenrechner Code------------------------------------------------------------->

<body>

    <div name="HG_box" class="boxback"></div>


    <input id="keyboardinput" type="text" class="box" name="display" value="<?= $number ?>" disabled />

    <br>

    <div id="row1" class="button">

        <button type="button" name="modulo" onclick=pushInput()>%</button>
        <button type="button" name="cancel an entry" onclick=pushInput()>CE</button>
        <button type="button" name="clear" onclick=pushInput()>C</button>
        <button type="button" name="divide" onclick=pushInput()>/</button>

        <!-- Verlauf -->
        <div name="History input">
            <div class="box">
                <h3 class="posi">Calculation-History</h3>
                <!-- Input in den Verlauf mit PHP -->
                <ul>
                    <p class="historyinput"><?= "<li>result</li>" ?></p>
                </ul>
            </div>
        </div>
    </div>

    <br>

    <div id="row2" class="button">

        <button type="button" name="7" onclick="pushInput('7')">7</button>
        <button type="button" name="8" onclick="pushInput('8')">8</button>
        <button type="button" name="9" onclick="pushInput('9')">9</button>
        <button type="button" name="multiply" onclick="pushInput('*')">*</button>

    </div>

    <br>

    <div id="row3" class="button">

        <button type="button" name="4" onclick="pushInput('4')">4</button>
        <button type="button" name="5" onclick="pushInput('5')">5</button>
        <button type="button" name="6" onclick="pushInput('6')">6</button>
        <button type="button" name="subtract" onclick="pushInput('-')">-</button>

    </div>

    <br>

    <div id="row4" class="button">

        <button type="button" name="1" onclick="pushInput('1')">1</button>
        <button type="button" name="2" onclick="pushInput('2')">2</button>
        <button type="button" name="3" onclick="pushInput('3')">3</button>
        <button type="button" name="add" onclick="pushInput('+')">+</button>

    </div>

    <br>

    <div id="row5" class="button">


        <button type="button" class="bspecial" name="0" onclick="pushInput('0')">0</button>
        <button type="button" name="dot" onclick="pushInput('.')">.</button>
        <button type="button" name="result" id="result" onclick="pushInput('=')">=</button>

</div>



<!-------------------------------------------------------------------------------------Link zur Js Datei--------------------------------------------------------------------------->
<script src=" main.js"></script>
</body>

</html>