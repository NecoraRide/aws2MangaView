<?php include('header.php') ?>
    <?php
        $r = $_SERVER['REQUEST_URI'];
        $r = explode('=', $r);
        $r = array_filter($r);
        $r = array_merge($r, array());
        $endofurl = $r[1];
        $manga = $r[1];
        $mangaTarget = '';
        if ($manga == 'assassination_classroom'){$mangaTarget = 'Assassination_Classroom';}
        else if ($manga == 'death_note'){$mangaTarget = 'Death_Note';}
        else if ($manga == 'high_school_of_the_dead'){$mangaTarget = 'High_School_Of_The_Dead';}
    ?>
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="espaciadoTop"></div>
                <h1>TOMOS <?php echo $mangaTarget; ?></h1>
                <?php
                    $dir = opendir('./Mangas/'.$manga);
                    while ($elemento = readdir($dir)):
                        if( $elemento != "." && $elemento != ".." && $elemento != 'portada.jpg'):?>

                                <div class="col-md-4">
                                    <img src="Mangas/<?php echo $mangaTarget;?>/portada.jpg" alt="<?php echo $mangaTarget;?>" style="width:5%, height:40px;">
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
