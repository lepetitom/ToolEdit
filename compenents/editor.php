<div class="editor" id="editor">
    <div class="userDoc">
        <div class="titleDoc">
            <h1>Document Title</h1>
            <div>
                <i class="fas fa-link"></i>
                <button class="copy" onclick="copy()"><i class="far fa-copy"></i> </button>
            </div>
            
        </div>
        <h2>Mode édition</h2>
        
        <?php 
            include ("compenents/page_correcteur.php")
        ?>
    </div>
    <div class="toolsPage" id="toolsPage">
        <?php 
            include ("compenents/pageEdit_correcteur.php");
            include ("compenents/pageEdit_translate.php");
        ?>
    </div>
</div>

