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

<!-- API DICO -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="assets/app.js"></script>

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
