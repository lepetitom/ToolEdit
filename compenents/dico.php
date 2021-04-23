<div class="dictionnaire done" id="dictionnaire">
    <h1>Dictionnaire</h1>
    <div class="navSearch">
        <i class="fas fa-search"></i>
        <form action="app/motAnalyse.php" class="mt-3" method="POST" id="formSaisie">
            <input name="motInput" id="motInput" type="text" placeholder="Mot à définir" required autofocus class="search">
            <button class="envoyer" id="btnEnvoiForm-lg" type="submit">Envoyer</button>
        </form>
    </div>
    <div id="divNotif">
        <div id="alertError" role="alert"></div>
    </div>
    <div id="apiWiki">
        <div class="result">
            <div class="titreDef">
                <div id="apiWikilLabel">
                    <div id="motWikiAff"></div>
                </div>
            </div>
            <div class="def">
                <div id="wikiBody" class="modal-body">
                <div id="loader"></div>
                <div id="imgWikiAff"></div>
                <div id="line-separator"></div>
                <div id="defsWikiAff"></div>
                <div id="cadreComplement" >
                    <div id="complementAff"></div>
                    <div id="line-separatorComp"></div>
                    <div id="defsCompAff"></div>
                </div>
                <div id="linkPageWiki"></div>
                </div>
            </div>
        </div>
    </div>
</div> 






<!-- Loader -->
<div id="bgLoader">
    <div class="loader-center">
        <div id="loaderWik"></div>
    </div>
</div>

<!-- START - Layout Global -->
<div id="layoutDefault">


<!-- START - Layout Contenu -->

<div id="layoutDefault_content" role="main" class="done">

    <div class="container-fluid py-2 bg-lightos header-dark">
    <div class="container">
        <h1 class="title-main text-right mr-2 mr-lg-3 my-2">API Dico Wiktionnaire</h1>
    </div>
    </div>

    <!-- ############################################################### -->
    <!-- START - SECTION FORMULAIRE -->
    <!-- ############################################################### -->
    <section class="formulaire">
    <div class="container mt-2 mt-lg-4 pb-2">
        <!-- Titre formulaire -->
        <h2 class="title-niv2 mr-3 ml-auto mr-lg-0 ml-lg-5 w-93 mt-3 mb-2">Formulaire de saisie</h2>

        <!-- START - Formulaire -->
        <form action="app/motAnalyse.php" class="mt-3" method="POST" id="formSaisie">
        <div class="row mx-auto align-items-center justify-content-center" id="validForm"></div>

        <!-- Options + Search Bar-->
        <div class="row">

            <!-- Search Bar -->
            <div class="col-12 order-1">
            <div class="form-group row w-resp mx-auto mt-1">
                <div id="cardSearch" class="card card-sm w-100 mb-2 mb-md-4">
                <div class="card-body lh-125 search row no-gutters align-items-center">

                    <!-- Icone loupe -->
                    <div class="col-auto loupe-search btn-bg-bord no-bord-rad">
                    <button class="btn btn-bg-bord bord-btn pad-btn" disabled>
                        <i class="fas fa-search size-search color-search mx-0 mb-0"></i>
                    </button>
                    </div>

                    <!-- Zone Input -->
                    <div class="col">
                    <input class="form-control form-control-borderless input-search" name="motInput" id="motInput" type="text" placeholder="Mot à définir" required autofocus>
                    </div>

                    <!-- Bouton validation grand ecran -->
                    <div class="col-auto bg-btn d-none d-md-flex pad-pers align-items-center">
                    <button class="btn btn-info btn-resp" id="btnEnvoiForm-lg" type="submit">Envoyer</button>
                    </div>
                    <!--end of col-->
                </div>
                </div>

                <!-- Bouton validation petit ecran -->
                <div class="d-md-none w-100 my-2">
                <button id="btnEnvoiForm" type="submit" class="btn btn-info mx-auto py-2 btn-resp btn-block">Envoyer</button>
                </div>
            </div>
            </div>
        </div>

        </form>
        <!-- END - Formulaire -->

    </div>
    </section>
    <!-- ############################################################### -->
    <!-- END - SECTION FORMULAIRE -->
    <!-- ############################################################### -->




    <!-- ############################################################### -->
    <!-- START - NOTIFICATION DES ERREURS -->
    <!-- ############################################################### -->
    <div id="divNotif" class="container w-90 mx-auto mt-1 my-2">
    <div id="alertError" class="alert alert-danger alert-dismissible displayMsg" role="alert"></div>
    </div>
    <!-- ############################################################### -->
    <!-- END - NOTIFICATION DES ERREURS -->
    <!-- ############################################################### -->




    <!-- ############################################################### -->
    <!-- START - SECTION MODAL DEFINITION WIKI -->
    <!-- ############################################################### -->
    <div class="def-wiki w-resp d-none" id="apiWiki">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title" id="apiWikilLabel">
            <div id="motWikiAff" class="d-flex align-items-center"></div>
            </div>
        </div>
        <div id="wikiBody" class="modal-body">
            <div id="loader"></div>
            <div id="imgWikiAff"></div>
            <div id="line-separator"></div>
            <div id="defsWikiAff"></div>
            <div id="cadreComplement" class="display-cadre-complement cadre-complement my-3">
            <div id="complementAff"></div>
            <div id="line-separatorComp"></div>
            <div id="defsCompAff"></div>
            </div>
            <div id="linkPageWiki"></div>
        </div>
        <div class="modal-footer">
            <div id="CreditWiki" class="d-flex justify-content-around align-items-center credit-wiki py-1 w-90 mx-auto">
            <div class="text-center w-85 fz80-90">Définition issue du <a href="https://fr.wiktionary.org/" class="fz80-90" alt="Site du Wiktionnaire, dictionnaire francophone libre et gratuit" target="_blank">Wiktionnaire</a>,
                dictionnaire francophone libre et gratuit.</div>
            <div class="w-20 text-center my-auto">
                <a href="https://creativecommons.org/licenses/by-sa/3.0/fr/" class="fz80-90" target="_blank"><img class="w-logo-cc" src="assets/img/CC-BY-SA-logo.png" alt="Logo Creative Commons CC-BY-SA-" /></a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- ############################################################### -->
    <!-- FIN - SECTION MODAL DEFINITION WIKI -->
    <!-- ############################################################### -->

</div>

</div>