<?php include('header.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="espaciadoTop"></div>
                <h1>ULTIMOS MANGAS A&Ntilde;ADIDOS</h1>
                <div class="zone">
                    <?php for($i=0;$i<5;$i++) :?>
                        <div class="col-md-1">
                            <img class="manga" src="Mangas/test.png"></img>
                            <img class="separacion "src="img/separador2.png"></img>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
	
<?php include('footer.php')	?>
