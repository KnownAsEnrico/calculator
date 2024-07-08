var input = document.querySelector("input");
// var last = "";
var current = "";

//string zu Math.
function calc(p1){
 return eval(p1);
}


//Eine Eingabe wird hinten entfernt
function back(p1) {
    let iArr = p1.split('');
    iArr.pop(); //das letzte wird entfernt
    var end = iArr.join('');
    return end;
}

//Feld wird geleert
function del(pInput) {
    pInput = "";
    input.value = "";
}

function oInput(pInput = "") {


    if(typeof current === "string" && typeof pInput === "string" 
    && current.match(/[%/*\-+.]/g) && pInput.match(/[%/*\-+.]/g)) {
        current = back(input.value) + pInput;
        del(pInput);
        input.value += current;
    }
    else
    if(pInput === "=") {
        
        current = calc(input.value);
        push(input.value);
        importSQL(input.value, current);
        del(pInput);
        input.value += current; 

    }
    else
    if(pInput === "Delete") {
        del(pInput);
    }
    else
    if(pInput === "Backspace") {
        current = back(input.value);
        del(pInput);
        input.value += current;
    }
    else
    {
        input.value += pInput;
        // last = current;
        current = pInput;
    }
}

//Tastenaufnahme
document.addEventListener("keydown", (event) => {
    // nur nötige Keyinputs annehmen
    let button = document.querySelector("button");
    switch (event.key) {
        case "Enter":
            oInput("=");
            break;
        case "NumpadEnter":
            oInput("=");
            break;
        case ",":
            oInput(".");
            break;
        case ".":
            oInput(".");
            break;
        default:
            var array = ['Delete', 'Backspace', '%', '/', '7', '8', '9', '*',
             '4', '5', '6', '-', '1', '2', '3', '+', '00', '0', '.', '='];
            if (array.forEach(arrayItem => {
                if(arrayItem === event.key) {
                    oInput(event.key);
                }
            }))
            break;
};


});


//AJAX Probieren

//  $("#toHTML").load("data.php");

function importSQL(sql1, sql2) {
    $.post("data.php", {
         input: sql1,
        result: sql2
     });
}

function exportToHTML(rIn) {
    del(rIn);
    oInput(rIn);
}

function push(calc1) {
    var table = document.createElement("tr");
    var data = document.createElement("td");
    var dataRes = document.createElement("td");
    data.textContent = calc1;
    data.onclick = function () {exportToHTML(calc1)};
    table.appendChild(data);
    dataRes.textContent = calc(calc1);
    dataRes.onclick = function () {exportToHTML(calc(calc1))};
    table.appendChild(dataRes);
    document.getElementById("toHTML").appendChild(table);
}
var dataO;
$.ajax({
    url: "data.php",
    type: "POST",
    success: function (response) {
        var data = JSON.parse(response);
        dataO = data;
        processData(dataO);
    }
});

function processData(data) {
    var i = 0;
    while (data[i]) {
        push(data[i]);
        i++;
    }
}


// $.get("data.php", function (data, array) {
//     $("#toHTML").html(data);
//     array.forEach(element => {
//         console.log(element);
//     });
// });
// $.ajax({
//     url: "data.php",
//     type: "POST",
//     success: function (response) {
//         var data = JSON.parse(response);
//         var here = document.getElementById("toHTML");
//         for (var i = 0; i < data.length; i++)
//         {
//         var newDiv1 = document.createElement("div");
//         newDiv1.textContent = data[i];
//         newDiv1.className = "red";
//         newDiv1.onclick = "exportToHTML("+data[i]+")";
//         here.appendChild(newDiv1);

//         var newDiv2 = document.createElement("div");
//         newDiv2.textContent = "=";
//         here.appendChild(newDiv2);

//         var newDiv3 = document.createElement("div");
//         newDiv3.className = "red";
//         newDiv3.textContent = data[i+1];
//         newDiv3.onclick = function () {exportToHTML(data[i+1])};
//         here.appendChild(newDiv3);
        
//         i++;
//         }

        
//     }
// });
