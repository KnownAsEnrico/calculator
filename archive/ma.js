// Keyboard input mit JS registrieren(weil es einfacher ist xD)

const inputs = document.getElementById("keyboardinput");
let number = "";
let current = 0;
let last = "0";


function calculate(pInput) {

while (Number(pInput) !== NaN || pInput !== "." || pInput !== "=") {
if(pInput === ".") {
    last += pInput;
    console.log(last);
}
if(pInput === "=") {
    last += last;
    console.log(last);
}
last += current;
current = Number(pInput);
console.log(current);
} 

switch(pInput) {
    case "/":
        number = String(division(Number("last"), current));
        console.log(number);
        break;
    case "*":
        number = String(multiplication(Number("last"), current));
        console.log(number);
        break;
    case "+":
        number = String(addition(Number("last"), current));
        console.log(number);
        break;
    case "-":
        number = String(subtraction(Number("last"), current));
        console.log(number);
        break;
    case "%":
        number = String(modulo(Number("last"), current));
        console.log(number);
        break;
    case "Backspace":
        //Back method()
        break;
    case "Delete":
        //Delete Method()
        break;
    default:
        console.log("not the right key");
        break;

}

}

function addition(num1, num2) {
    return num1 + num2;
}

function subtraction(num1, num2) {
    return num1 - num2;
}

function division(num1, num2) {
    return num1 / num2;
}

function multiplication(num1, num2) {
    return num1 + num2;
}

function modulo(num1, num2) {
    return num1 % num2;
}


function pushInput(pInput = "") {
    inputs.value += pInput;
}



document.addEventListener("keydown", (event) => {
    // nur nötige Keyinputs annehmen
    switch (event.key) {
            case "0":
                calculate(event.key);
                console.log(event.key);
                break;
            case "1":
                calculate(event.key);
                break;
            case "2":
                calculate(event.key);
                break;
            case "3":
                calculate(event.key);
                break;
            case "4":
                calculate(event.key);
                break;
            case "5":
                calculate(event.key);
                break;
            case "6":
                calculate(event.key);
                break;
            case "7":
                calculate(event.key);
                break;
            case "8":
                calculate(event.key);
                break;
            case "9":
                calculate(event.key);
                break;
            case "/":
                calculate(event.key);
                break;
            case "*":
                calculate(event.key);
                break;
            case "+":
                calculate(event.key);
                break;
            case "-":
                calculate(event.key);
                break;
            case "%":
                calculate(event.key);
                break;
            case "Backspace":
                inputs.value += "back";
                break;
            case "Delete":
                inputs.value += "del";
                break;
            case "Enter":
                inputs.value += "=";
                break;
            case "NumpadEnter":
                inputs.value += "=";
                break;
            case ",":
                inputs.value += ".";
                break;
            case ".":
                inputs.value += ".";
                break;
            default:
                console.log("not the right key");
                break;
    };


});

//Test von Typecasting
//console.log(Number("121")+121);


// eine Funktion, die das berechnen leiten soll

// if(typeof pInput === "number") {
        
// }
// function keyLogger(pInput) {
//     while (pInput !== "=") {

//         pInput += pCurrent;
//         pCurrent = pInput;
//     }
// }






