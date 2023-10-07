function LoadPaises() {
    const Continente = [];

    const xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "https://restcountries.com/v3.1/all");
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xmlhttp.onload = function () {
        if (xmlhttp.status === 200) {
            const dados = JSON.parse(this.response);
            const slc = document.getElementById("slc_continentes");
            const idSlc = slc.options[slc.selectedIndex].value;

            dados.forEach(country => {
                if (country.continents === idSlc) {
                    Continente.push([country.name.common, country.capital, country.flags]);
                }
            });

            const table = document.getElementById("tb_paises");
            table.innerHTML = "";

            const tdr = document.createElement("tr");
            for (let i = 0; i < 3; i++) {
                const th = document.createElement("th");
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

            Continente.forEach(country => {
                const tr = document.createElement("tr");
                for (let i = 0; i < 3; i++) {
                    const td = document.createElement("td");
                    switch (i) {
                        case 0:
                            td.innerText = country[0];
                            break;
                        case 1:
                            td.innerText = country[1];
                            break;
                        case 2:
                            td.innerHTML = `<img alt="${country[2].alt}" src="${country[2].svg}">`;
                            break;
                    }
                    tr.appendChild(td);
                }
                table.appendChild(tr);
            });
        }
    };

    xmlhttp.send();
}

// Evento de carregamento da página
window.addEventListener('load', LoadPaises);

// Evento de mudança no select
const slcContinentes = document.getElementById("slc_continentes");
slcContinentes.addEventListener('change', LoadPaises);