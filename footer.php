<!-- SCRIBENS -->
<script src="https://scribens.fr/API/scribens_api.js?lang=fr" data-name="scribens"></script>

<!-- FONTAWESOME -->
<script src="https://kit.fontawesome.com/48f85784ea.js" crossorigin="anonymous"></script>

<!-- VueJS -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<!-- Tiny -->
<script src="https://cdn.tiny.cloud/1/tpebd2ow1v6zqnrwwzszp8jzcmng26q9gnekabbsjyoexfyh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<!-- SCRIBENS -->
<script src="https://scribens.fr/API/tinymce.plugin.js"></script>

<!-- MY SCRIPT -->
<script src="assets/js/script.js"></script>
<script src="assets/js/Edit_correcteur.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

<script src="assets/js/synthese.js"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: "scribensplugin",
      toolbar: "bold italic underline | scribensplugin",
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      // définir la configuration de scribens
      scribens: {
      // utiliser les informations d'identification de votre compte API
      email: 'tempelaere.t@gmail.com',
      password: 'ESD@b3',
      // choisir la langue du correcteur
      // valeurs possibles: fr, en
      lang: "fr"
      }
   });
   
</script>
<script src="assets/js/translate.js"></script>


</body>
</html>
