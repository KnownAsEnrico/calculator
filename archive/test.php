<?php // Define the buttons for addition, subtraction, multiplication, and division 
$addButton = '+'; $subButton = '-'; $mulButton = '*'; $divButton = '/';
 // Define the input fields for the buttons 
$num1 = $_POST['num1']; $num2 = $_POST['num2']; $operator = $_POST['operator'];
 // Check if the buttons were pressed and the operator was entered correctly
  if (isset($_POST['num1'])) { $num1 = parseFloat($_POST['num1']); if ($operator == $addButton) { if ($num1 == $num2) { echo 'Error: Both numbers cannot be equal.'; }
   else { echo $num1 + $num2; } }
    else if ($operator == $subButton) { if ($num1 < $num2) { echo 'Error: Number 1 is less than number 2.'; }
     else { echo $num1 - $num2; } } else if ($operator == $mulButton) { if ($num1 == $num2) { echo 'Error: Both numbers cannot be equal.'; }
      else { echo $num1 * $num2; } } else if ($operator == $divButton) { if ($num1 == $num2) { echo 'Error: Both numbers cannot be equal.'; }
       else { echo parseFloat($num1 / $num2); } }
        else { echo 'Invalid operator.'; } }
        else if (isset($_POST['operator'])) {
             switch ($operator) { case $addButton: $num1 = parseFloat($_POST['num1']);
              $num2 = parseFloat($_POST['num2']);
               if ($num1 == $num2) { echo 'Error: Both numbers cannot be equal.'; }
                else { echo $num1 + $num2; } break; case $subButton: if ($num1 < $num2)
                 { echo 'Error: Number 1 is less than number 2.'; } else { echo $num1 - $num2; }
                  break; case $mulButton: if ($num1 == $num2) { echo 'Error: Both numbers cannot be equal.'; }
                   else { echo $num1 * $num2; } break;
                    case $divButton:
                    if ($num1 == $num2) { echo 'Error: Both numbers cannot be equal.'; }
                     else { echo parseFloat($num1 / $num2); } break; default: echo 'Invalid operator.'; } }
                      else { echo 'Please enter a valid operator.'; } ?>