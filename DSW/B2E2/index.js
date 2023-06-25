// Definição dos dados:
var Locais;
    
var nomeBR = ["Rio de Janeiro", "Bonito", "Fernando de Noronha", "Amazônia", "Salvador"];
var imagBR = ["data:image/png;base64,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",
"https://images.pexels.com/photos/3648269/pexels-photo-3648269.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", 
"https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Abismo_Anhumas%2C_Bonito%2C_MS.JPG/800px-Abismo_Anhumas%2C_Bonito%2C_MS.JPG",
"https://s2.glbimg.com/syL1Qkmsfeoc05erUesXyk9c7Zs=/0x0:719x620/690x0/i.s3.glbimg.com/v1/AUTH_e84042ef78cb4708aeebdf1c68c6cbd6/internal_photos/bs/2017/7/g/I4Pk0BSUGgTET3eIUSwA/pernambuco-estrelas-fernando-de-noronha-1.jpg",
"https://cdn.jornaldebrasilia.com.br/wp-content/uploads/2021/11/08081830/amazonia.png",
"https://magazine.zarpo.com.br/wp-content/uploads/2016/07/salve-salvador_zarpo-770x515.jpg"];

var nomeFR = ["Paris", "Vale do Loire", "Riviera Francesa", "Mont Saint-Michel", "Provence"];
var imagFR = ["data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALkAAAB7CAMAAAAfU9HRAAAAFVBMVEX///8AJlTOESYAEUp1fJDdd3zMABFXDawmAAAAeUlEQVR4nO3OSQEAIAADoHn2j2yIPYUEZBTWTuPcWYi5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ufmX8wfrgV8jP5GHWwAAAABJRU5ErkJggg==",
"https://www.viajaquepassa.com.br/wp-content/uploads/2021/02/torre-eiffel-paris.png",
"https://www.carpemundi.com.br/wp-content/uploads/2017/07/vale-loire-scaled.jpg",
"https://f7j8i5n9.stackpathcdn.com/wp-content/uploads/2020/04/riviera-francesa.jpg",
"https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Mont-Saint-Michel_vu_du_ciel.jpg/275px-Mont-Saint-Michel_vu_du_ciel.jpg",
"https://www.conexaoparis.com.br/wp-content/uploads/2019/06/shutterstock_494841310-1.jpg"];

var nomePT = ["Lisboa", "Porto ", "Algarve", "Sintra", "Évora"];
var imagPT = ["data:image/png;base64,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",
 "https://www.eurodicas.com.br/wp-content/uploads/2018/02/capital-de-portugal.jpg",
 "https://s7a5n8m2.stackpathcdn.com/wp-content/uploads/2016/10/porto-portugal-13.jpg",
 "https://a.cdn-hotels.com/gdcs/production40/d520/9413d6ac-768a-4246-ae9a-1e3a9247f41d.jpg",
 "https://www.viajali.com.br/wp-content/uploads/2018/08/sintra-portugal-65-1.jpg",
 "https://cdn.shopify.com/s/files/1/0637/2609/2501/articles/oficina-de-inverno-o-que-voce-precisa-saber-sobre-evora-capa.jpg?v=1659634554"];

var nomeMX = ["Cidade do México", "Cancún", "Chichén Itzá", "Tulum", "Guanajuato"];
var imagMX = ["data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASkAAACqCAMAAADGFElyAAACQFBMVEUAaEfOESb///8AWC7KAAD5qlH6+vgAAAD8rVKQRiD6+vcAhIkAfYKOQx3Mzq4zAADu7+ecoWjwwjvNz7Wan2MAY2R7gT3nlknhj0afpGyPlVTb3t/MmlvYrGzv8fKpbD07KCCWSSA9JhlsOSChb0JgNB9LKRTo6OEAFx+MQBqKNAAmIR3jsxmbVixsSC6APhssAABmbRLDxa+vso9zcG7P0L9OLh5vsLIvw91nb3nb3c6Jj0htcyyQlVrSzs2gh4GpnJm/ubnXyr3LtaeSRgDCjVCxdTyXeG60gECbYji4gEt+MwCvl4+cd0pvMhZ3QSSXXzbAsZ6TTACnZxm3eTKJYTd7VEW0lnPmxJqwfl+mYQB/Xz7Xs40XHiDg0auxg1m4j1nIkU2RdU46GQkoKiZAOCz+3a8wEw8QDhd9UDCqaDPajFuwj1yhWSjKil61b03878maZUPv0ZD9343otjqzt4TFq0rBhRjhrkm1djOATBmionnTuVXgsytsUTjyyGKRbipXOShbJhVgJABZRS1mYV6HfXA/EgCUZUxVPS+5rYe9k4PaxIyPTy9tGQBJBADZvnGOjYz95exaTEXzn5zsYBPvhCZqWSjyeWX0epKagCyBb2f0o5zxTmr4qLTQnSdmNwDD3dunhBJCR1P6wMjAdISAqqlRhIT0iJiNq6tEZ2QAOzj0xraPb33FZ3pth4ZNnJ79xhN9rszG2ec8lLyl0ubYfkXjsZWZmYhnu9g1latYfY2Yoq2toEV/qJbZWmNpg2U9AAAMqElEQVR4nO3c+1cTVx4AcPdWQmYIMW/IJJkkk2QCEhiTIYk7kJSgQYgmwUJqK/IyPkoq3RSJFcJDUNcXVkDXtXWppbVE3O5KtfRhX//a3jvBdmuFbvccf8ncOx5mQiZzTj7n+/3O984Mbtv20scr4OWP7X966ePlQ2EpLIWlsBSWwlJYCkthKSyFpbAUlsJSWApLYSkshaWwFJbCUlgKS2EpLIWlsBSWwlJYCkthKSyFpbAUlsJSWApLYSkshaWwFJbCUlgKS2EpLIWlsBSWwlJYCkthKUlKhV/d92pLxISlth506569ZrM52raX2xfBUltAtUet9RY4OmLW4b37D9BYapOxxxxvSBBWq9WZrO+0Evb9LVjqt+Mg2QrCr3V1pwKOyspKwuGsjdXGdr4eDv9uyZKWVCt96I03aVin3jzc3c5yRNJWE+iphWEVbfvdFJSKlAz92NPa2mGub+8+IqjCh9ucPZUE0VvHBFIdlnh8D5ZCTFpjH1r1D5hj0c4B8+DgUbq1qytmrbTbmDomnTp23LJzH5YCMqVSewKuDw5aombOYmlri58sB4fbU2bOwdg451DcZXtrKDMkk7yUUplzq2DuDb49kCRSqZS5bTjpWOgaywyg9LNVDtSwXKDm1PDrkpcy5rRAS4a73/nL/loXlxlra89kODYzNj5QzxF1jMPeU4eoklsnoBSklLkcrwJHskfe7T/yLmdvv27uzlQmmbGxeD3ngEjWnoSNJVx1qeGtGispSPlzvNs9kj2t0YxqNK+Ox4YHzbHhzoaxrlhHpb2uju3h7ElIxR6v37lFVyUFKSFn5M9kpz2j7e+dFdxRy5jFfPRKQ00x+2yMw1nD2R02F8GytVuUKilIkbp8/kz2zMTkZCsAb1gGzCnLlK2+JpOK1nK2tPOoK9DrIFwMl0zH924+YZaCFJCpSPf0WX7CMwfAkag1Gh+y24i6nlgtYW/o5XrSBGsjiAAsVQ32pLSlRK03DubPTgA6arHGnFaCIVzXa4mkayjecQXVqIA9wSSc6es7w5KXAsCXP3cVHDFbzOZYG+eycS6CgD2Cc6ZyiJmpT09ZXekYy9o3rVTSkfLl+HMyWf8pyymLdYqYqWMYwsH0pPtrOOtQcsA61Hmds6bSlZsGVYlLCc82yHyOD8FGPTV0dNY8FRjvDTBsIsDUnxrqme23EPXRU7GGqf5UT0ftkCSl5j2j0+Jszp/ned4Np36ZWL99IFU7XhdgA3WOhPUKjCjOPNUTZY+3cW9lAkcH6gMvvgBT6lKeOV5AHRWvhG06AB1Wi9VusdaPMywbYGacDeOceaAzOpQeT6Sjw2w7Nztbvkn6lbYU2Tcyr4SxFDLm8ui1rK3DHK2FFT2TZBmmjoGzQKIjdvLKMNszzMYzifjwjPX8JlOa0pZCQ6v0u3llvvjiUAxOZMyWtgznqksEWChl72wYtsUIpj1xIVN5fGyW4y5KV0ophHIHiy8ibe3mMaelfbzOAZtyxtlmad2ZOPoak0lcGGYddibFzRA2iUrJIJSQv7ohRXd1WdpTF8wuhum40Dkbi/8VtL77/sKBS5fPX+GYy1zv3TSxS6JSgjIH3PzVcxtuh2bqLR3pY50MG0+a6622kyYArjnAgYV9d/ec/772JL2Dk6xUTglALtfVPjc3cRbO+xYIR0OCmeqcccWcQz22Swtwn+smkKBdpvcj12+AXZxUs0/QarXAz7d3dU9qNJ55cI0dZpyzbDwxEDMPnLTNNsJ93HfBZdPrpv0L126AHdyClKQEwYBWWdRCwTrFA+Hq4cPvjU6OemSt+wPEFad1NtphuRCH/edNtGNLONyyJ1K7cOAGuDS70U/5VVKQCnl5tJpHd2RIZQ71CKRMZfJNewRwLTXDNZhjybill4X956W7aE8ZWDA1Xm7cc4Nmd6EWXQVkXmXpS/l8IZ0gzvjmFxfhT16ZI2GcfVHub++ecB/pH2C5Tovz5DEX42Jd7GxAvCRMyy623AzfoK/sKuas4M3xJS/Few0hSsydW3+7jaJKZ/SDrGf075rujnsj19piRK/j2BTbGwi4HI4A8/GO4oXOiOmkbIfpYhptqyi+WW0QSlzKrQpRRlKEun3nA5FO6XNPTo5qNPc+nBzpM5uHx2scNUkGdp8OzhVgxnfcLX6yETSaGsXCJVChkNqgLHEpGFKUkUJUi/+4v/QRSkc4mzmj0Xyo0Uxq7o1FzdYuhnHYHLakg+MCLpct83HALUYVLO0t4mTGTxnUIUpb4lLA10zpNk5cS0s/LUeAX8kr5z8p/7RvUjh7dnBsbDhT2etIOgiWc9kSMAWZpEvMQCQVbhSzr5lSG3RkqUsBn0FNjmTR1v2lz4LBVdhP8T5TGIwAEL6WzHTt3bvTdLyW4DjGZrPBqErWjYsZGIFnwKIUPARl/HWbUIpSWRXPZz3F76mAY21F3KTdc2K47E22mN6n6f2ugI21MQykYhMMO35+BmbgAh1BjWf2hMzw6zNfaUr1fZHls4J4rdOkqEBUj9D27dt3Fp/tAnsmWTl0srE30wyiCjRkUAaaYFQhqQkVD06UfkyB7Nz83IaIvqAoVBQKiObBg7cX/3uvlkuXGKY8fJGFVIzDZfvYUd4CyGLygfkz8/PZ0peCYeXf2FjVV8CwCppWV1aXPrqP7H559MDWculcRAaOp9Mcmz4/++mnC2BkfuM9P/n8IUtUSvALG8+NPURRFQwGC8Glpc9gJx7556opLE5YSPfIJ/c0KkAvRG7ebFkIA/LO58VQJHm/4fkjlqpULmQQDMWwCOv1+rWKgqLiX/8OFkAhuLISLDwC9Pcez+SkRqPx/FKO7osdPWxdm3XNOiBIYoasNuqaeK+v+MJEm1ZgCuorKiqChTVY4SsKKysXyyc1oxpoNan5Aj0DCh7J7n/wwe07KKK8OoPByEvh3AczS2mkmg3+n18vK/RrsFwVINNDRFURfBQs3NP8oC8UCprJ8jCIrAQVS4sPbqGSD7ux5hBFPV+oSlMK6Hh1yOD7mSocKegVaIFxhcBgfAWPHZ/Uw0wMFgoLC6YViLgkznzgbIii4Oz4+ZAqVSmtTh1q9hYrDSle0DM1or9jeARTD2HBfw8fBtfW1hQwuMKmYBD1EhvPTvmp5pCBcktECpBaI2UAoyiFstPZEfF3psdPAIwtMQv1ipUVMbYUCli1ggqE96h4SiSbDKGm34RUyUrJtFp1Plss1qdPT+9eh+vHcKEjqwV9Qf/ItLayhlIRpSQs8zCiFAUaNRaeE6CJegFUyUqhYZRt9JFZ97e7oZXsy8fPHAFMONiTFlZNMnpVr1co9PpnNxrmACX8pu0saamsRlCP+MFGq7C+e/duyGUCrdWft8LlYHCtoIgUZzdhOvyElolPuMDqRE4ILzhaSUt5+vr4fD4kfm+aRlRwrL9TVV1VVi0fhKXp4VdlX4u70tnTpzfCELi1/r7REUlJoSFQBq87JAP048dPi1K71+Rl8mp59SCs5UfLyvqfPFmHoaaZFmfDpIHn0S0ZlbSyT/zqKqPB5+WRFF002X1IXlZWVlUtd757vVouX0FJuU5nRSgV7A6adUrVi49V2lJGY4jyik1kcb68XpSSV5dVVcnlMLq+gVBg/Yn4pgxChYxq74sCquSlVHzOGDLwfiDGSVYFg+ppWTH94AK3UE5+ST+mAUmiuww6o9qg2+RYpS0FBK2SMjQbgAc2VtOqEejyDcw8eVkVTMAyeVUViqn1x7B5mJ8GPkoNWakXn/lKXspNUTmdoVkFKzY5Mg1PafTX8q/Ekx9cqr6SH3rybM8RQFFNzU25zaBKXQqoBGAUtPm+X670mr59+t13fxbH0+/RHj4ePTQ7wfsFQbXFn42WupQYLtN9P/QJKq/PX7xk9WR9Y6ALxT4vpQ75BHduestjSEJKNe1Rgbw3xHt9Ia+ArEjwI7hVfNPn1VHNzWiiJxvd2koCUqhFMDZRIYMB1nbYMxhDPLUN/HTIyAtC3oCcjGp0JUu1SSMlJSlAuv0gR/FqSheicoIqx0OpvJYUQpQBtVChkFr7O0eQihRA1/YEFWXUNgkyY5788UewfdENefgmHYw1arO+XJJSAN2HICGO309vWwY/Pdh+C+TdQNBBvq3/owQJSoGNSc0rqsXtjmXw0fbFn3+FpV40lpfB9vvktm3Li/f/yMckKAUHIjIt/7HPSFPq/xlYCkthKSyFpbAUlsJSWApLYSkshaWwFJbCUlgKS2EpLIWlsBSWwlJYCkthKSyFpbAUlsJSWApLYSkshaWwFJbCUlgKS2EpLIWlsBSWwlJYCkthKSyFpbAUlsJSWApL/Q/jP9JjfSV64nWmAAAAAElFTkSuQmCC",
 "https://www.vounajanela.com/wp-content/uploads/2017/11/mexico.jpg",
 "https://uploads.metropoles.com/wp-content/uploads/2020/09/30093842/Canc%C3%BAn2.jpg",
 "https://live.staticflickr.com/65535/49829443973_f90795c9b1_b.jpg",
 "https://i0.wp.com/www.guiamexico.com.br/wp-content/uploads/2018/12/Tulum-4.jpg?fit=1920%2C1077&strip=all&ssl=1",
 "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjsjd3S8vjU2AMA9BexCz65_L9BvRdznBQl4cB2DRmab_wIf01UUkBcbAuRhYXsfQpz_A&usqp=CAU"];

var nomeAU = ["Sydney", "Grande Barreira de Corais", "Melbourne", "Uluru (Ayers Rock)", "Grande Oceano Road"];
var imagAU = ["data:image/png;base64,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",
 "https://www.remessaonline.com.br/blog/wp-content/uploads/2022/06/maiores-cidades-da-australia.jpg.optimal.jpg",
 "https://i0.statig.com.br/bancodeimagens/39/88/xh/3988xhbke9qwgi98r5ema9lbe.jpg",
 "https://www.segurospromo.com.br/blog/wp-content/uploads/2020/09/melbourne-australia.jpg",
 "https://uluru-australia.com/wp-content/themes/uluru/images/fader2.jpg",
 "https://i.natgeofe.com/n/ea27bd3b-ab91-4997-99c6-3659179290cd/great-ocean-road-australia-590_4x3.jpg"];

var nomeJP = ["Tóquio", "Quioto", "Monte Fuji", "Hiroshima", "Nara"];
var imagJP = ["data:image/jpeg;base64,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",
 "https://viagemeturismo.abril.com.br/wp-content/uploads/2016/12/8734439139_c9449a4df2_o1.jpeg?quality=90",
 "https://content.r9cdn.net/rimg/dimg/38/93/de70f3b4-city-20339-551a6f73.jpg?width=1366&height=768&xhint=1814&yhint=1179&crop=true",
 "https://www.civitatis.com/f/japon/tokio/guia/monte-fuji-m.jpg",
 "https://ichef.bbci.co.uk/news/640/cpsprodpb/8854/production/_99000943_21d5411f-3b71-4b6b-8ec1-022479ebba53.jpg",
 "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ0ZPqsz7hwzLzpjQUAyejIsONC1s33MFE4euS6EZY5HXI4mFYx47ON1P48w6q4F70GLg&usqp=CAU"];

var nomeEG = ["Pirâmides de Gizé", "Cairo", "Vale dos Reis", "Luxor", "Cruzeiro pelo Rio Nilo"];
var imagEG = ["data:image/png;base64,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", 
"https://static.historiadomundo.com.br/2022/09/piramides-de-gize.jpg",
"https://images.memphistours.com/large/c8f4bbe25a6f390c4fa2c795441cc994.jpg",
"https://viajeparaisrael.com.br/wp-content/uploads/2017/08/vale-dos-reis.jpg",
"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCvsZXqBS5MXCzX9nb-E6Dhs7-L79oY01xjPzOxqBFUY796vc-avsnZQ0iYasNqjOzf-8&usqp=CAU",
"https://www.embarquenaviagem.com/wp-content/uploads/2018/10/zahra.jpg"];

function criaConteudo(paises) {

    // Seleção do país:
    var indPaises = paises.selectedIndex;
    var sigla = paises.options[indPaises].value;
    var text = paises.options[indPaises].text;

    var imgLocal = document.getElementById("img_local");
    imgLocal.setAttribute("src", "");
    
    var nomePais = document.getElementById("h_pais");
    var imgPais = document.getElementById("img_pais");

    switch (sigla) {
        case "BR":
            Locais = nomeBR.slice();
            imgPais.setAttribute("src", imagBR[0]);
            break;
        case "FR":
            Locais = nomeFR.slice();
            imgPais.setAttribute("src", imagFR[0]);
            break;
        case "PT":
            Locais = nomePT.slice();
            imgPais.setAttribute("src", imagPT[0]);
            break;
        case "MX":
            Locais = nomeMX.slice();
            imgPais.setAttribute("src", imagMX[0]);
            break;
        case "AU":
            Locais = nomeAU.slice();
            imgPais.setAttribute("src", imagAU[0]);
            break;
        case "JP":
            Locais = nomeJP.slice();
            imgPais.setAttribute("src", imagJP[0]);
            break;
        case "EG":
            Locais = nomeEG.slice();
            imgPais.setAttribute("src", imagEG[0]);
            break;
    }

    nomePais.innerText = text;

    var slc_dados = document.getElementById("slc_local");
    var art_paisagem = document.getElementById("glr_img");

    // Apaga dados do select 'dados':
    while (slc_dados.options.length > 0) {
        slc_dados.remove(0);
    }
    slc_dados.style.display = 'none';

    //Cria options do select 'dados':
    slc_dados.setAttribute("size", Locais.length + 1);

    option = document.createElement("OPTION");
    option.setAttribute("value", "");
    option.setAttribute("disabled", "");
    option.setAttribute("selectd", "");
    option.text = "Escolha uma localidade:";
    slc_dados.appendChild(option);

    Locais.forEach(nome => {
        option = document.createElement("OPTION");
        option.setAttribute("value", nome);
        option.text = nome;
        slc_dados.appendChild(option);
    });
    slc_dados.style.display = 'block';
    art_paisagem.style.display = 'block';
}

function ImgLocal(){
    var imgLocal = document.getElementById("img_local");
    //Selects
    var slc_paises = document.getElementById("slc_pais");
    var slc_locais = document.getElementById("slc_local");


    // Seleção do país:
    var indPaises = slc_paises.selectedIndex;
    var siglaP = slc_paises.options[indPaises].value;
    var Pais, Imgs;

    switch (siglaP) {
        case "BR":
            Pais = nomeBR.slice();
            Imgs = imagBR.slice();
            break;
        case "FR":
            Pais = nomeFR.slice();
            Imgs = imagFR.slice();
            break;
        case "PT":
            Pais = nomePT.slice();
            Imgs = imagPT.slice();
            break;
        case "MX":
            Pais = nomeMX.slice();
            Imgs = imagMX.slice();
            break;
        case "AU":
            Pais = nomeAU.slice();
            Imgs = imagAU.slice();
            break;
        case "JP":
            Pais = nomeJP.slice();
            Imgs = imagJP.slice();
            break;
        case "EG":
            Pais = nomeEG.slice();
            Imgs = imagEG.slice();
            break;
    }

    // Seleção do país:
    var indLocal = slc_locais.selectedIndex;
    var localidade = slc_locais.options[indLocal].value;
    let ind = Pais.indexOf(localidade);

    imgLocal.setAttribute("src", Imgs[ind + 1]);
}