// NOMBRE CARACTERES

document.getElementById('text').addEventListener('keyup', function() {
    document.getElementById('nbcaractere').innerHTML = text.value.length;
});



// NOMBRE MOTS
   
    document.getElementById('text').addEventListener('keyup', function countWords() {
        s = document.getElementById("text").value;
        s = s.replace(/(^\s*)|(\s*$)/gi,"");
        s = s.replace(/[ ]{2,}/gi," ");
        s = s.replace(/\n /,"\n");
        document.getElementById('nbmots').innerHTML = s.split(' ').length;
    });



// NOMBRE LIGNES

document.getElementById('text').addEventListener('keyup', function countLines() {
    var area = document.getElementById("text")
    var text = area.value.replace(/\s+$/g,"")
    var split = text.split("\n")
    document.getElementById('nblignes').innerHTML = split.length
});
