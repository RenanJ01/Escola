

async function LoadPaises() {
// Use o método fetch para buscar os dados de forma assíncrona
fetch("https://restcountries.com/v3.1/all")
  .then(respost => {
    if (respost.ok) {
        //console.log("Ok");
      return respost.json(); 
    } else {
      throw new Error("Erro na solicitação HTTP");
    }
  })
  .then(dados => {
    var slc = document.getElementById("slc_continentes");
    idSlc = slc.options[slc.selectedIndex].value;
    var Continente = [];

    dados.forEach(id => {
      if (id.continents == idSlc) {
        Continente.push([id.name.common, id.capital, id.flags]);
      }
    });

    var table = document.getElementById("tb_paises");
    table.innerHTML = "";

    var tdr = document.createElement("tr");
    for (let i = 0; i < 3; i++) {
      var th = document.createElement("th");
      switch (i) {
        case 0:
          th.innerText = "Nome";
          th.setAttribute("id", "tb-l");
          break;
        case 1:
          th.innerText = "Capital";
          break;
        case 2:
          th.innerHTML = "Bandeira";
          th.setAttribute("id", "tb-r");
          break;
      }
      tdr.appendChild(th);
    }
    table.appendChild(tdr);

    Continente.forEach(id => {
      var tr = document.createElement("tr");
      for (let i = 0; i < 3; i++) {
        var td = document.createElement("td");
        switch (i) {
          case 0:
            td.innerText = id[0];
            break;
          case 1:
            td.innerText = id[1];
            break;
          case 2:
            td.innerHTML = "<img alt='" + id[2].alt + "' src='" + id[2].svg + "'>";
            break;
        }
        tr.appendChild(td);
      }
      table.appendChild(tr);
    });
  })
  .catch(error => {
    console.error("Ocorreu um erro: " + error);
  });
}

window.addEventListener('load', LoadPaises());
    //     var xmlhttp = new XMLHttpRequest();
    // } else {
    //     var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    // }

    // xmlhttp.open("GET", "https://restcountries.com/v3.1/all");
    // xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // // Manipule o JSON somente após o carregamento completo dos dados.
    // xmlhttp.onload = function () {
    //     if (xmlhttp.status == 200) {
    //         var dados = JSON.parse(this.response);
    //         var slc = document.getElementById("slc_continentes");
    //         idSlc = slc.options[slc.selectedIndex].value;
    //         dados.forEach(id => {
    //             if (id.continents == idSlc) {
    //                 Continente.push([id.name.common, id.capital, id.flags]);
    //             }
    //         });

    //         var table = document.getElementById("tb_paises");
    //         table.innerHTML = "";

    //         var tdr = document.createElement("tr");
    //         for (let i = 0; i < 3; i++) {
    //             var th = document.createElement("th");
    //             switch (i) {
    //                 case 0:
    //                     th.innerText = "Nome";
    //                     th.setAttribute("id", "tb-l");
    //                     break;
    //                 case 1:
    //                     th.innerText = "Capital";
    //                     break;
    //                 case 2:
    //                     th.innerHTML = "Bandeira";
    //                     th.setAttribute("id", "tb-r");
    //                     break;
    //             }
    //             tdr.appendChild(th);
    //         }
    //         table.appendChild(tdr);

    //         Continente.forEach(id => {
    //             var tr = document.createElement("tr");
    //             for (let i = 0; i < 3; i++) {
    //                 var td = document.createElement("td");
    //                 switch (i) {
    //                     case 0:
    //                         td.innerText = id[0];
    //                         break;
    //                     case 1:
    //                         td.innerText = id[1];
    //                         break;
    //                     case 2:
    //                         td.innerHTML = "<img alt='" + id[2].alt + "' src='" + id[2].svg + "'>";
    //                         break;
    //                 }
    //                 tr.appendChild(td);
    //             }
    //             table.appendChild(tr);
    //         });
    //     }
    // };

    // xmlhttp.send();