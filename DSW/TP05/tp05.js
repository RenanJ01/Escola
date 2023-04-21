
var jogos = ["Minecraft", "Terraria", "GTA", "Sonic", "Mario"];
var livros = ["Star Wars", "Harry Potter", "Percy Jackson", "A Sociedade do Anel", "As Brumas de Avalon", "Deuses Americanos"];

function Itens() {
    var select = document.getElementsByTagName("select");

    for(let i=0; i < jogos.length; i++){
        var option = document.createElement("option");
        option.text = jogos[i];
        option.setAttribute("value", i);
        select[0].appendChild(option);
    }

    for(let i=0; i < livros.length; i++){
        var option = document.createElement("option");
        option.text = livros[i];
        option.setAttribute("value", i);
        select[1].appendChild(option);
    }
}

function Esconder(){
    var select = document.getElementsByTagName("select");   
    var btn = document.getElementById("btn_vision");
    var dpy = window.getComputedStyle(select[0]).display;
    console.log(dpy);
    if(dpy == "none"){
        select[0].style.display = "block";
        select[1].style.display = "block";
        btn.innerText = "Esconder";
    }else{
        select[0].style.display = "none";
        select[1].style.display = "none";
        btn.innerText = "Mostrar";
    }
}