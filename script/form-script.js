let percentageCounter = document.getElementById("total-percentage");
let warningArea = document.getElementById("percentage-div");

let plainInput = document.getElementById("plain");
let hillInput = document.getElementById("hill");
let forestInput = document.getElementById("forest");
let mountainInput = document.getElementById("mountain");
let lakeInput = document.getElementById("lake");
let swampInput = document.getElementById("swamp");
let desertInput = document.getElementById("desert");
let volcanoInput = document.getElementById("volcano");

plainInput.value = 0;
hillInput.value = 0;
forestInput.value = 0;
mountainInput.value = 0;
lakeInput.value = 0;
swampInput.value = 0;
desertInput.value = 0;
volcanoInput.value = 0;
percentageCounter.innerText = "0";

// --- FUNCTIONS --- //

//change counter (total/100)
function changePercentage() {
    let val1 = parseInt(plainInput.value);
    let val2 = parseInt(hillInput.value);
    let val3 = parseInt(forestInput.value);
    let val4 = parseInt(mountainInput.value);
    let val5 = parseInt(lakeInput.value);
    let val6 = parseInt(swampInput.value);
    let val7 = parseInt(desertInput.value);
    let val8 = parseInt(volcanoInput.value);
    if (isNaN(val1)) {
        val1 = 0;
    }
    if (isNaN(val2)) {
        val2 = 0;
    }
    if (isNaN(val3)) {
        val3 = 0;
    }
    if (isNaN(val4)) {
        val4 = 0;
    }
    if (isNaN(val5)) {
        val5 = 0;
    }
    if (isNaN(val6)) {
        val6 = 0;
    }
    if (isNaN(val7)) {
        val7 = 0;
    }
    if (isNaN(val8)) {
        val8 = 0;
    }
    let total = val1 + val2 + val3 + val4 + val5 + val6 + val7 + val8;
    total = total.toString(10);
    percentageCounter.innerText = total;
}


// --- EVENTS --- //

plainInput.addEventListener("change", ev => changePercentage());
hillInput.addEventListener("change", ev => changePercentage());
forestInput.addEventListener("change", ev => changePercentage());
mountainInput.addEventListener("change", ev => changePercentage());
lakeInput.addEventListener("change", ev => changePercentage());
swampInput.addEventListener("change", ev => changePercentage());
desertInput.addEventListener("change", ev => changePercentage());
volcanoInput.addEventListener("change", ev => changePercentage());