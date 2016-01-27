<?php include('header.php') ?>
    <script>
        jQuery(document).ready(function(){
            var x = window.location.href.split('=');
            var manga;
            switch(x[1]){
                case 'assassination_classroom':
                    manga = 'Assassination Classroom';
                    break;


            }
            if(x[1] == ){
                jQuery('#nombreManga').html('Assassination Classroom');
            }

        });
    </script>

     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="espaciadoTop"></div>
                <h1>TOMOS <span id="nombreManga"></span></h1>
                <div class="zonaMangas">

                </div>
            </div>
        </div>
    </div>


<?php include('footer.php')	?>
