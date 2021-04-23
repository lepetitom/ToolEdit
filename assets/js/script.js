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


const exempleTxt = `
    fdsfL’enfant qui jouait le voilà maigre et courbé

    L’enfant qui pleurait le voilà les yeux brûlés

    L’enfant qui dansait une ronde le voilà qui court après
`
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
        console.log('reponse',reponse);
        
        // Emotion Type
        let emotionsHTML = document.getElementById('emotions')
        let emotions = reponse.data.emotion.elements
        console.log(emotions)
        emotions.map(emotion => {
            emotionsHTML.append(emotion.type)
        })

        // Emotion score
        let emotionsScoreHTML = document.getElementById('emotionsScore')
        let emotionsScore = reponse.data.emotion.elements
        console.log(emotionsScore)
        emotionsScore.map(emotion => {
            emotionsScoreHTML.append(emotion.value)
        })

        // Emotion Image
        let emotionsImageHTML = document.getElementById('emotionsImage')
        let emotionsImage = reponse.data.emotion.elements
        console.log(emotionsImage)
        emotionsImage.map(emotion => {
            var val = emotion.type,
                img = document.createElement('img');

            img.src = 'assets/images/' + val +'.png';
            console.log(img.src);
            emotionsImageHTML.append(img);
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


