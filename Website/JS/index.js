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