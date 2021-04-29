function showLocation(name) {
    var xhttp;
    if (name == "") {
    document.getElementById("instruction").innerHTML = "Select an contact name for show details details..";
    return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("instruction").innerHTML = this.responseText;
    }
    };
    xhttp.open("GET", "../Model/queries.php?q="+name, true);
    xhttp.send();
    }