<?php include('header.php') ?>
	<div class="col-sm-12 col-xs-12 col-md-9 col-lg-9">
		<div id="espaciadoTop"></div>
		<h1>ULTIMOS MANGAS A&Ntilde;ADIDOS</h1>
		<div class="zone">
            <img class="separacion "src="img/separador2.png"></img>
			<?php for($i=0;$i<5;$i++) :?>
				<img class="manga" src="Mangas/test.png"></img>
				<img class="separacion "src="img/separador2.png"></img>
			<?php endfor; ?>
            <p></p>
            <?php for($i=0;$i<5;$i++) :?>
				manga <?php echo ($i+1); ?>
			<?php endfor; ?>
		</div>
	</div>
<?php include('footer.php')	?>
