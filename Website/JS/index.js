function loadElements(location, element) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", location);
    xhr.onload = function() {
        if (xhr.status == 200) {
            document.querySelector(element).innerHTML = xhr.responseText;
        }
    }
    xhr.send();
}
loadElements("components/navbar.html", "header");


function loadHero(loc, attr) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", loc);
    xhr.onload = function() {
        if (xhr.status == 200) {
            document.querySelector(attr).innerHTML = xhr.responseText;
        }
    }
    xhr.send();
}
loadHero("components/hero.html", "section");



function loadFooter(place, atr) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", place);
    xhr.onload = function() {
        if (xhr.status == 200) {
            document.querySelector(atr).innerHTML = xhr.responseText;
        }
    }
    xhr.send();
}
loadHero("components/footer.html", "footer");