
<!-- PARTIE UNDO REDO ET SUPPRIMER -->
<div id="nouveau" class="container done">
    <div class="editPart">
        <div class="undo-redo">
            <a onClick="document.execCommand('undo', '', null)" name="Undo" value="Undo" ><i class="fas fa-undo-alt"></i></a>
            <a onClick="document.execCommand('redo', '', null)" name="Redo" value="Redo" ><i class="fas fa-redo-alt"></i></a>
        </div>
        

        <a class='supprimer' value="effacer" onclick="effacer()" href=""><i class="fas fa-trash"></i> Effacer le texte</a>
    </div>

    <!-- PARTIE SUGGESTION -->
    <div class="suggestions">
        <div class="first">
            <h3>Suggestions</h3>
            
            <!-- nombre erreurs trouvées -->
            <div class="probleme">
                <div class="cercle"></div>
            </div>
        </div>
        
        <!-- bloc suggestions -->
        <div class="blocSuggestions">
            <div class="container2">
                <div class="faute">
                    <div>
                        <div class="cercle"></div>
                        <div class="rectangle"></div>
                    </div>
                    <div>
                        <div class="cercle"></div>
                        <div class="rectangle"></div>
                   </div>
                </div>

                <!-- zone correction -->
                <div class="centre"></div>

                <!-- zone suggestions mots -->
                <div class="choix"></div>


                <!-- ajouter le mot au dictionnaire personnel -->
                <div class="add">
                    <div class="center">
                        <div>
                            <div class="cercle"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div>
                            <div class="rectangle"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    <div>




    <!-- PARTIE DEFINITION ET ÉMOTIONS -->
    <div class="defmotions">

        <!-- bloc dictionnaire -->
        <div class="dictionnaire">
            <h3>Dictionnaire</h3>
            <div class="blocdico">
                <div class="container2">
                    <div class="center">
                        <div>
                            <div class="cercle"></div>
                            <div class="rectangle"></div>
                        </div>
                    </div>
                    
                    <div class="centre"></div>
                    <div class="rectangle2"></div>
                </div>
            </div>
        </div>     

        <!-- bloc emotions -->
        <div class="emotion">
            <h3>Émotion générée</h3>
            <button onclick="scribens_check('text', 'tempelaere.t@gmail.com', 'ESD@b3')">Scribens</button>
            <div class="blocemotion">
                <div class="container2">
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                </div>
            </div>
        </div>



        </div>
    </div>


    <!-- PARTIE DU BAS -->
    <div class="baspage">
        <p id="nbcaractere"> 0 </p>
        <a class="seemore" href="">Voir plus</a>
    </div>
</div>
</div>


