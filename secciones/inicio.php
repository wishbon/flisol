<section id="inicio">

	<?php
	if (isset($_GET['ins'])){
		echo "<div class='ins'><p>";
		print $_GET['ins'];
		echo "</p></div>";
	}
	?>
	<div class="contenedor">
		<div class="cabecera">

			<img src="img/logo.png" alt="" />
			<br>
			<h2>Festival Latinoamericano de Instalación del Software Libre - Santiago de Chile</h2>
			<br>
			<span class="fecha">23 abr <span>2016</span></span>
			<br>
			<ul class="countdown">
				<li> <span class="days">00</span>
					<p class="days_ref">Días</p>
				</li>
				<li> <span class="hours">00</span>
					<p class="hours_ref">Horas</p>
				</li>
				<li> <span class="minutes">00</span>
					<p class="minutes_ref">Minutos</p>
				</li>
				<li> <span class="seconds">00</span>
					<p class="seconds_ref">Segundos</p>
				</li>
			</ul>
			<script class="source" type="text/javascript">
			$('.countdown').downCount({
				date: '04/23/2016 12:00:00',
				offset: +10
			}, function () {
				alert('Ya es el día!!! ponte las chalas y parte al FLISOL!');
			});
			</script>

			<br />
			<br />
			<div class="compartir">
				<a class="facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http://www.santiago.flisol.cl/','name','height=455,width=470,toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no');return false;">Compartir en facebook!</a>


				<a class="twitter" href="#" onclick="window.open('https://twitter.com/intent/tweet?text=Invitados al FLISOL 2016!&amp;url=http://santiago.flisol.cl/','name','height=255,width=470,toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no');return false;">Compartir en Twitter!</a>


				<a class="googlemas" href="#" onclick="window.open('https://plus.google.com/share?url=http://www.santiago.flisol.cl/&amp;t=Todos+invitados+al+FLISOL+Santiago2016!','name','height=455,width=490,toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no');return false;">Compartir en G+</a>
			</div>
		</div>
	</div>

</section>
