var xhr = new XMLHttpRequest();
function liste() {
    var demo = document.getElementById("demo");
    xhr.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            var result = this.response;
            var div = document.createElement("div");
            if (result && demo) {
                
            
            for (var i = 0; i < result.length; i++) {
                var p = document.createElement("p");
                p.textContent = result[i].name;
                div.appendChild(p);
            }
            demo.appendChild(div);
        }
            demo.appendChild(div);
        }else if (this.readyState ==4) {
            alert("Une erreur est survenue");
        }
    };
    xhr.open("get","../Controllers/Controller.php",true);
    xhr.responseType = "json";
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send();
}
liste();
// Pour la page de formulaire

document.getElementById("inscription").addEventListener("submit",
function (e) {
    e.preventDefault();
    var data = new FormData(this);
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var res = this.response;
            if (res.success) {
                window.location.href = 'afficher.php';
            } else {
                document.getElementsByClassName('fich')[0].innerHTML = res.msg;
            }
        }else if (this.readyState == 4) {
            alert("Une erreur est survenue");
        }
    };
    xhr.open("POST","../Controllers/form.php", true);
    xhr.responseType = "json";
    xhr.send(data);
    return false;
});