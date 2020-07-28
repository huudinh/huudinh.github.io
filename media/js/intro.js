function loadElement(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mainLoad").innerHTML = this.responseText;
        }
    };
    let name = id + ".html";
    xhttp.open("GET", name, true);
    xhttp.send();
}