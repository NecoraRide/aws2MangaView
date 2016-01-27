<?php include('header.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="espaciadoTop"></div>
                <h1>MANGAS</h1>
                <div class="zonaMangas">
                        <?php
                            $fichero = fopen("./modulos/ficheros/mangas.txt","r");
                            while(!feof($fichero)):
                                $tmp = fgets($fichero,4096);
                                $manga = split(":", $tmp);
                                for($i = 0; $i < sizeof($manga)-1; $i++):
                                ?>
                                        <label><?php echo $manga[$i];?></label>
                                        <img class="manga" src="Mangas/test.png"></img>
                                        <img class="separacion "src="img/separador2.png"></img>

                            <?php endfor;
                            endwhile;
                        ?>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php')	?>
