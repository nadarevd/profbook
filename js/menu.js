function start() {
    var academics = document.getElementById('academics');
    var about_me = document.getElementById('about-me');
    var boxes = document.getElementsByClassName('boxes');
    academics.onclick = function() {
        about_me.style.display = none;
        boxes.style.display = block;
    }

    about_me.onclick = function() {
        about_me.style.display = block;
        boxes.style.display = none;
    }
}

window.onload = start;