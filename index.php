<!DOCTYPE php>
<?php
    $buttons = array('Delete', 'Backspace', '%', '/', '7', '8', '9', '*', '4', '5', '6', '-', '1', '2', '3', '+', '00', '0', '.', '=');
?>
<html>
<head>
    <title>Calc.</title>
    <!-- CSS link -->
    <link rel="stylesheet" href="styles.css">
    <script
        src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
        crossorigin="anonymous">
    </script>
</head>

<body>
    

    <!-- Verlauf -->
    <div name="historyBox" class="historyBox">
            <h3 class="fontStyle">Calculation-History</h3>
        <!-- Input in den Verlauf (SQLDatenbank muss noch connected werden)-->
            <div name="box" class="scrollable" id="toHTML"></div>
    </div>


    <!-- Taschenrechner Körper -->
<div class="calculatorBody">
    <h2 class="centered-text fontStyle">Calculator</h2>
    <div id="inputfield"><input id="input" type="text" class="inputfield" disabled value=""/></div>
    <div name="buttonsbox" class="buttonsbox">
        <div name="buttons" class="buttons">
        <?php foreach ($buttons as $button): ?>
            <button class="buttonCalc" id="<?= $button; ?>" <?= $button; ?> onclick="oInput('<?= $button; ?>')"><?= $button; ?></button>
        <?php endforeach; ?>
        </div>
    </div>
    </div>
</div>


</body>
<!-- JS import -->
<script src="main.js"></script>
<footer>

</footer>
</html>