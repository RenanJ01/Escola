var list_marcs = ["Volkswagen", "Chevrolet", "Fiat", "Ford", "Toyota", "Honda", "Hyundai", "Renault"];
var list_volks = ["Volkswagen Gol", "Volkswagen Polo", "T-Cross Volkswagen", "Virtus Volkswagen"],
 list_chevr = ["Chevrolet Corsa", "Chevrolet Celta", "Chevrolet Chevette", "Chevrolet Classic", "Chevrolet Opala", "Chevrolet Monza", "Chevrolet S10", "Chevrolet Vectra"],
  list_fiat = ["Fiat Strada", "Fiat Toro", "Fiat Pulse", "Fiat Strada", "Fiat Argo", "Fiat Mobi"],
   list_ford = ["Ford F-600", "Ford Galaxie", "Ford Corcel", "Ford Maverick", "Ford Escort", "Ford Del Rey", "Ford EcoSport", "Ford Ka"],
    list_toyota = ["Toyota Corolla", "Cabine Dupla Hilux", "Toyota SW4", "Etios Sedan", "Etios"],
     list_honda = ["Honda Civic", "Honda Fit", "Honda City", "Honda HR-V", "Honda CR-V", "Honda Accord", "Honda WR-V"],
      list_hyundai = ["HB20", "HB20 S", "SUV Hyundai Creta", "New All Santa Fé"],
       list_renault = ["Renault Kangoo", "Renault KWID", "Renault Logan", "Renault Master", "Renault Sandero", "Renault Sandero GT Line", "Renault Sandero RS", "Renault Stepway"];

function ListarMarcas(lista) {
    var btn = document.getElementById("btn_marcs");
    var div = document.getElementById("div_list1");

    if (btn.innerText == "Listar Marcas") {
        var text = "";
        for (var i = 0; i < lista.length; i++) {
            if(i<(lista.length-1)){text += lista[i] + " - ";}
            else{text += lista[i];}
        }
        div.innerText = text;
        btn.innerText = "Ocultar Marcas";
        div.style.cssText="margin: 5px 0; border: 1px solid #959595; padding: 10px; box-shadow: 3px 2px 3px 2px #003624;";
    } else {
        div.innerText = "";
        btn.innerText = "Listar Marcas";
        div.style.cssText="";
    }

}

function ListarCarros(marca, id, lista) {
    var btn = document.getElementById("btn_"+marca);
    var div = document.getElementById("div_list"+id);

    if (btn.innerText == "Listar Carros") {
        var text = "";
        for (var i = 0; i < lista.length; i++) {
            if(i<(lista.length-1)){text += lista[i] + " - ";}
            else{text += lista[i];}
        }
        div.innerText = text;
        btn.innerText = "Ocultar Carros";
        div.style.cssText="margin: 5px 0; border: 1px solid #959595; padding: 10px; box-shadow: 3px 2px 3px 2px #003624;";
    } else {
        div.innerText = "";
        btn.innerText = "Listar Carros";
        div.style.cssText="";
    }

}