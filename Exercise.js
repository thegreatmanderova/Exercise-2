function mouseOverArciaga() {
    document.getElementById("arciaga").style.color = "DarkTurquoise";
}
function mouseOverArnillo() {
    document.getElementById("arnillo").style.color = "DarkViolet";
}
function mouseOverNarag() {
    document.getElementById("narag").style.color = "DeepPink";
}
function mouseOverReginio() {
    document.getElementById("reginio").style.color = "Fuchsia";
}
function mouseOverNarvadez() {
    document.getElementById("narvadez").style.color = "DodgerBlue";
}

/*function myMouseOut() {
    document.getElementsByClassName("name").style.color = "white";
}*/

function myMouseOut() {
    var elements = document.getElementsByClassName("name");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.color = "white";
    }
}

window.onload = function() {
    var elements = document.getElementsByClassName("name");
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('mouseout', myMouseOut);
    }
};