<?php include('header.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="espaciadoTop"></div>
                <h1>ULTIMOS MANGAS A&Ntilde;ADIDOS</h1>
                <div class="zone">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img class="carrousel" src="Mangas/Assassination_Classroom/portada.jpg" alt="Assassination Classroom" onclick="location.href='list.php?id=assassination_classroom';">
                        </div>
                        <div class="item">
                          <img class="carrousel" src="Mangas/Death_Note/portada.jpg" value="death_note" alt="Death Note" onclick="location.href='list.php?id=death_note';">
                        </div>
                        <div class="item">
                          <img class="carrousel" src="Mangas/High_School_Of_The_Dead/portada.jpg" alt="High School Of The Dead" onclick="location.href='list.php?id=high_school_of_the_dead';">
                        </div>
                      </div>

                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="iconleft"></span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="iconright"></span>
                      </a>
                    </div>
                    <!-- <?php // for($i=0;$i<5;$i++) :?>
                        <div class="col-md-1">
                            <img class="manga" src="Mangas/test.png"></img>
                            <img class="separacion "src="img/separador2.png"></img>
                        </div>
                    <?php // endfor; ?> -->
                </div>
            </div>
        </div>
    </div>
	
<?php include('footer.php')	?>
