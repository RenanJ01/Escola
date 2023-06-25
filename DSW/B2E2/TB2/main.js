// Definição dos dados:
var Serie;

var animeOptions = [
  {
    sigla: "DB",
    nomeDB: ["Broly", "Bulma", "Freeza", "Goku", "Shenlong"],
    mdlDB: ["./Modelo/DB-Broly.glb", "./Modelo/DB-Bulma.glb", "./Modelo/DB-Freeza.glb", "./Modelo/DB-Goku.glb", "./Modelo/DB-Shenlong.glb"],
    imgURL: "https://1000marcas.net/wp-content/uploads/2022/02/Dragon-Ball-Logo.png"
  },
  {
    sigla: "OP",
    nomeDB: ["Ace", "Luffy", "Sanji", "Zoro"],
    mdlDB: ["./Modelo/OP-Ace.glb", "./Modelo/OP-Luffy.glb", "./Modelo/OP-Sanji.glb", "./Modelo/OP-Zoro.glb"],
    imgURL: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqgiR4xWYOnKU3165LE_BO05lUkXFsjaeE4PjxIvalQq75M-xc5GGSpINb2FW7LgKscNw&usqp=CAU"
  },
  {
    sigla: "NT",
    nomeDB: ["Hinata", "Kakashi", "Naruto", "Sasuke"],
    mdlDB: ["./Modelo/NT-Hinata.glb", "./Modelo/NT-Kakashi.glb", "./Modelo/NT-Naruto.glb", "./Modelo/NT-Sasuke.glb"],
    imgURL: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhfdzJ0_aYZdJfvxtWUcmltvWNgQCOy86pXrgxc9XGUf9H0c6VV5_XUs9X2k-0AenvzFs&usqp=CAU"
  },
  {
    sigla: "BH",
    nomeDB: ["Ichigo", "Toshiro"],
    mdlDB: ["./Modelo/BH-Ichigo.glb", "./Modelo/BH-Toshiro.glb"],
    imgURL: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhZ_IYMke25i1-ADdk3GuM97a3LSgfxdCYaaFqqLuLLegqMa07pEIPS4gE2dnY0HefB8w&usqp=CAU"
  }
];

function criaConteudo(anime) {
  var indAnime = anime.selectedIndex;
  var sigla = anime.options[indAnime].value;
  var text = anime.options[indAnime].text;

  var nomeAnime = document.getElementById("h_anime");
  var imgAnimes = document.getElementById("img_anime");

  var animeOption = animeOptions.find(option => option.sigla === sigla);

  Serie = animeOption.nomeDB.slice();
  imgAnimes.setAttribute("src", animeOption.imgURL);

  nomeAnime.innerText = text;

  var slc_dados = document.getElementById("slc_person");
  var art_anime = document.getElementById("glr_img");

  // Apaga dados do select 'dados':
  while (slc_dados.options.length > 0) {
    slc_dados.remove(0);
  }
  slc_dados.style.display = 'none';

  // Cria options do select 'dados':
  slc_dados.setAttribute("size", Serie.length + 1);

  let option = document.createElement("OPTION");
  option.setAttribute("value", "");
  option.setAttribute("disabled", "");
  option.setAttribute("selectd", "");
  option.text = "Escolha um personagem:";
  slc_dados.appendChild(option);

  Serie.forEach(nome => {
    option = document.createElement("OPTION");
    option.setAttribute("value", nome);
    option.text = nome;
    slc_dados.appendChild(option);
  });
  slc_dados.style.display = 'block';
  art_anime.style.display = 'block';
}

function GerarModel() {
  var slc_anime = document.getElementById("slc_anime");
  var slc_person = document.getElementById("slc_person");

  var loadingElement = document.getElementById("loading");
  loadingElement.style.display = "block";

  var canvas = document.getElementById("person");
  var context = canvas.getContext("3d");

  function limparCanvas() {
    context.clearRect(0, 0, canvas.width, canvas.height);
  }

  var indPaises = slc_anime.selectedIndex;
  var siglaP = slc_anime.options[indPaises].value;

  var animeOption = animeOptions.find(option => option.sigla === siglaP);
  var Fraquia = animeOption.nomeDB.slice();
  var Imgs = animeOption.mdlDB.slice();

  var indPerson = slc_person.selectedIndex;
  var person = slc_person.options[indPerson].value;
  let ind = Fraquia.indexOf(person);

  var scene = new THREE.Scene();
  var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
  var renderer = new THREE.WebGLRenderer({ canvas: document.getElementById("person") });
  var controls = new THREE.OrbitControls(camera, renderer.domElement);
  controls.enableDamping = true;
  controls.dampingFactor = 0.1;

  var ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
  scene.add(ambientLight);
  var directionalLight = new THREE.DirectionalLight(0xffffff, 0.8);
  directionalLight.position.set(0, 1, 1);
  scene.add(directionalLight);
  scene.background = new THREE.Color(0xCCCCCC);

  var loader = new THREE.GLTFLoader();
  loader.load(Imgs[ind], function (gltf) {
    var model = gltf.scene;
    scene.add(model);
    var sphere = new THREE.Sphere();
    var box = new THREE.Box3().setFromObject(model);
    box.getBoundingSphere(sphere);
    var center = sphere.center;
    var radius = sphere.radius;
    var distance = radius / Math.tan(Math.PI * camera.fov / 360);
    camera.position.copy(center);
    camera.position.z += distance;
    camera.lookAt(center);
    loadingElement.style.display = "none";
  }, undefined, function (error) {
    console.error(error);
    loadingElement.style.display = "none";
  });

  function animate() {
    requestAnimationFrame(animate);
    controls.update();
    renderer.render(scene, camera);
  }
  animate();
}
