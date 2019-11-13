window.addEventListener('scroll', function(e) {
    var scroll = window.pageYOffset;
    const background = document.querySelector('.showcase');
    background.style.top = (scroll * 0.4) + 'px';
});