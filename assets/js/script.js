function nouveau() {
    var nouveau = document.getElementById("nouveau");
    nouveau.classList.remove("done");
    var traduction = document.getElementById("translate");
    traduction.classList.add("done");
    var synthese = document.getElementById("synthese");
    synthese.classList.add("done");
    var editor = document.getElementById("editor");
    editor.classList.remove("done");
}
function traduction() {
    var element = document.getElementById("translate");
    element.classList.remove("done");
    var nouveau = document.getElementById("nouveau");
    nouveau.classList.add("done");
    var synthese = document.getElementById("synthese");
    synthese.classList.add("done");
    var editor = document.getElementById("editor");
    editor.classList.remove("done");
}
function synthese() {
    var editor = document.getElementById("editor");
    editor.classList.add("done");
    var synthese = document.getElementById("synthese");
    synthese.classList.remove("done");
}


const exempleTxt = `Paul vient de finir son travail. Il est en train de ranger ses affaires. Il a plusieurs choses à faire ce soir. Il doit faire quelques courses, il compte aussi faire un peu de rangement. Il sait bien cuisiner alors en général, il prépare aussi le repas. Et ce soir, il peut prendre son temps car sa femme et ses enfants vont rentrer tard. Il veut leur faire une surprise. Il pense leur préparer une tarte aux fraises.`
const textHTML = document.getElementById('text')
textHTML.innerHTML = exempleTxt

document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault()

    const text = document.getElementById('text').value

    axios.post("http://127.0.0.1:5000/api/post",{
        method: 'post',
        url: 'url',
        data: {text:text}
    })
    .then(function (reponse) {
        //On traite la suite une fois la réponse obtenue 
        console.log(reponse);
        let emotionsHTML = document.getElementById('emotions')
        let emotions = reponse.data.emotion.elements
        console.log(emotions)
        emotions.map(emotion => {
            emotionsHTML.append(emotion.type)
        })

    })
    .catch(function (erreur) {
        //On traite ici les erreurs éventuellement survenues
        console.log(erreur);
    });
})



//COPIER LES DONNÉES DU TEXTAREA 
function copy() {
    let textarea = document.getElementById("text");
    textarea.select();
    document.execCommand("copy");
  }