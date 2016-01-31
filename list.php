<?php include('header.php') ?>
    <?php
        $r = $_SERVER['REQUEST_URI'];
        $r = explode('=', $r);
        $r = array_filter($r);
        $r = array_merge($r, array());
        $endofurl = $r[1];
        $manga = $r[1];
    ?>
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="espaciadoTop"></div>
                <h1>TOMOS <?php echo $manga; ?></h1>
                <?php
                    $dir = opendir('./Mangas/'.$manga);
                    while ($elemento = readdir($dir)):
                        if( $elemento != "." && $elemento != ".." && $elemento != 'portada.jpg'):?>

                                <div class="col-md-4">
                                    <img src="Mangas/Assassination_Classroom/portada.jpg" alt="Assassination Classroom" style="width:5%, height:40px;">
                                    <?php echo $elemento;?>
                                </div>
                        <?php
                        endif;
                    endwhile;
                ?>
            </div>
        </div>
    </div>


<?php include('footer.php')	?>
