window.onload = function() {
    var popup = document.getElementById("signup-popup");
    var popuptwo = document.getElementById("signup-popup-two");
    var myButton1 = document.getElementById("myButton1");
    var myButton = document.getElementById("myButton");
    var span = document.getElementsByClassName("exit")[0];
    var spantwo = document.getElementsByClassName("exittwo")[0];

    myButton1.onclick = function() {
        popup.style.display = "block";
    }

    myButton.onclick = function() {
        popuptwo.style.display = "block";
    }

    span.onclick = function() {
        popup.style.display = "none";
    }

    spantwo.onclick = function() {
        popuptwo.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
        if (event.target == popuptwo) {
            popuptwo.style.display = "none";
        }
    }
}