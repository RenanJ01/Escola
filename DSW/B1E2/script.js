//Menu 1
var membros = ["Eriel de Jesus", "Jonatas Renan", "Lucas Henrique", "Matheus Mesquita"];

function Load() {
    var select = document.getElementById("slc_pessoal");

    for(let i=0; i < membros.length; i++){
        var option = document.createElement("option");
        option.text = membros[i];
        option.setAttribute("value", i);
        select.appendChild(option);
    }

}

var imgpessoal = ["https://w7.pngwing.com/pngs/746/565/png-transparent-captain-america-graphics-art-captain-america-spider-man-iron-man-the-avengers-carol-danvers-superhero-comics-heroes-superhero-thumbnail.png",
"https://w7.pngwing.com/pngs/752/512/png-transparent-mister-fantastic-human-torch-invisible-woman-thing-fantastic-four-iron-electronics-superhero-fictional-character-thumbnail.png",
"https://w7.pngwing.com/pngs/617/74/png-transparent-black-panther-black-panther-marvel-avengers-alliance-black-bolt-marvel-cinematic-universe-marvel-comics-black-panther-comics-marvel-avengers-assemble-fictional-characters-thumbnail.png",
"https://w7.pngwing.com/pngs/172/816/png-transparent-hulk-marvel-cinematic-universe-wikia-hulk-avengers-superhero-comic-book-thumbnail.png"];
var pessoais = ["<br> <h1>Dados Pessoais</h1> <h4>Nome:</h4> <p>Eriel de Jesus</p> <h4>Idade:</h4> <p>19</p> <br> <h2>Formação</h2> <p>Fundamental I</p> <p>Fundamental II</p> <p>Médio</p> <br> <h2>Experiência Profissional</h2> <p>Estágio - Exercito</p> <br> <h2>Qualificações profissionais (cursos)</h2> <p>Informatica</p> <br> <h2>Participações em eventos</h2> <h3>Como palestrante, expositor, etc:</h3> <p>Nenhum</p> <br> <h3>Como ouvinte:</h3> <p>Feira de Ciencias - Seminarios</p> <br>", 
"<br> <h1>Dados Pessoais</h1> <h4>Nome:</h4> <p>Jonatas</p> <h4>Idade:</h4> <p>18</p> <br> <h2>Formação</h2> <p>Fundamental I</p> <p>Fundamental II</p> <p>Médio</p> <br> <h2>Experiência Profissional</h2> <p>Estagio</p> <br> <h2>Qualificações profissionais (cursos)</h2> <p>Informatica</p> <br> <h2>Participações em eventos</h2> <h3>Como palestrante, expositor, etc:</h3> <p>FATEC</p> <br> <h3>Como ouvinte:</h3> <p>Feira de Ciencias - Seminarios</p> <br>",
"<br> <h1>Dados Pessoais</h1> <h4>Nome:</h4> <p>Lucas</p> <h4>Idade:</h4> <p>18</p> <br> <h2>Formação</h2> <p>Fundamental I</p> <p>Fundamental II</p> <p>Médio</p> <br> <h2>Experiência Profissional</h2> <p>Estagio - Escola Municipal</p> <br> <h2>Qualificações profissionais (cursos)</h2> <p>Informatica</p> <br> <h2>Participações em eventos</h2> <h3>Como palestrante, expositor, etc:</h3> <p>Nenhuma</p> <br> <h3>Como ouvinte:</h3> <p>Feira de Ciencias - Seminarios</p> <br>",
"<br> <h1>Dados Pessoais</h1> <h4>Nome:</h4> <p>Matheus</p> <h4>Idade:</h4> <p>19</p> <br> <h2>Formação</h2> <p>Fundamental I</p> <p>Fundamental II</p> <p>Médio</p> <br> <h2>Experiência Profissional</h2> <p>Estagio - ???</p> <br> <h2>Qualificações profissionais (cursos)</h2> <p>Informatica(Será?)</p> <br> <h2>Participações em eventos</h2> <h3>Como palestrante, expositor, etc:</h3> <p>Nenhuma</p> <br> <h3>Como ouvinte:</h3> <p>Feira de Ciencias - Seminarios</p> <br>"];

function FormarMenu(){
    var main = document.getElementById("main_menu1");
    main.innerHTML="";

    var select = document.getElementById("slc_pessoal");
    var id = select.selectedIndex;
    var option = select.options[id].value;
    
    //Imagem
    var fig = document.createElement("figure");
    fig.setAttribute("class", "fig_img");
    var img = document.createElement("img");
    img.src = imgpessoal[option];
    fig.appendChild(img);
    
    //Dados Pessoais
    var dp = document.createElement("section");
    dp.innerHTML = pessoais[option];

    //Implementar os componentes
    main.appendChild(fig);
    main.appendChild(dp);
}