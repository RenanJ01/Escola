var jogos = ["Minecraft", "Terraria", "GTA", "Sonic", "Mario"];
var livros = ["Star Wars", "Harry Potter", "Percy Jackson", "A Sociedade do Anel", "As Brumas de Avalon", "Deuses Americanos"];
var img = ["https://www.minecraft.net/content/dam/games/minecraft/key-art/Games_Subnav_Minecraft-300x465.jpg", "https://s2.glbimg.com/GrUfp3oENBBetca7dBFKUBCUEUs=/0x0:695x521/640x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2021/J/o/vIaLg5TFSs08OaoiR6eA/2014-12-08-terraria.png", "https://www.adrenaline.com.br/wp-content/plugins/seox-image-magick/imagick_convert.php?width=910&height=568&format=webp&quality=91&imagick=/wp-content/uploads/2021/08/gta-v1_chamda.jpg", "https://assets.xboxservices.com/assets/df/56/df560c92-93ef-451d-9f3c-aff19b1850cf.jpg?n=605040_GLP-Page-Hero-0_1083x609.jpg", "https://i.etsystatic.com/39509626/r/il/6b5632/4613187463/il_794xN.4613187463_bzki.jpg"];
var img2 = ["https://m.media-amazon.com/images/I/51MWO+1LhlL._SY344_BO1,204,203,200_.jpg", "https://m.media-amazon.com/images/P/B01LQM96G4.01._SCLZZZZZZZ_SX500_.jpg", "https://m.media-amazon.com/images/I/51yvcUb5tFL._SY346_.jpg", "https://m.media-amazon.com/images/I/51yxqpcD9iL._SY344_BO1,204,203,200_QL70_ML2_.jpg", "https://m.media-amazon.com/images/I/51Y8AVWWCBL._SY344_BO1,204,203,200_QL70_ML2_.jpg", "https://m.media-amazon.com/images/I/61b53lLQulS.jpg"];

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

function Imagens(modo){    
    var select = document.getElementsByTagName("select");    
    var id = select[modo].selectedIndex;
    var option = select[modo].options[id].value;

    if(modo == 0){
        var image = document.getElementById("img_jogos");
        image.setAttribute("src", img[option]);
    }else{
        var image = document.getElementById("img_livros");
        image.setAttribute("src", img2[option]);
    }
}