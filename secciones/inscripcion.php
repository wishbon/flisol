<section id="inscripcion">
	<div class="contenedor">
		<h1>Inscripción</h1>
		<div class="izqder">
			<div class="texto">
				<h2>Asistentes</h2>
				<p>Quisieramos conocerte!, por favor completa el siguiente formulario e indícanos si traerás tu equipo el día del evento, de esta manera podremos ofrecerte una solución tecnológica de acuerdo al rendimiento y características de tu equipo</p><br>
				<div class="politicas">
					<a href="./documentos/antes_de_traer.pdf">Antes de traerlo</a>
				</div><br>
				<form  action="secciones/formularios/asistente.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="action" value="submit">
					Nombre:<br>
					<input name="nombre" type="text" required placeholder="Tu nombre aquí" /><br>
					Mail:<br>
					<input name="email" type="email" required placeholder="ejemplo@ejemplo.cl" /><br>
					Comuna:<br>
					<input name="comuna" type="text" /><br>
					Actividad/Ocupación:<br>
					<input type="text" required name="actividad" value="">
					<br>
					<br>
					<h2>¿Traerás tu equipo?</h2>
					<div class="menus">
						<input type="radio" name="instala" id="instalasi" onclick="cambiaform()" value="Si"><label for="instalasi">Si</label><br />
						<input type="radio" name="instala" id="instalano" onclick="cambiaform()" value="No"><label for="instalano">No</label><br />
					</div>
					<div id="caracteristicas">
						Cracterísticas (Todo lo que sepas de tu equipo como RAM, Marca, Tiene o no lector de CD, Tarjeta de video, Tarjeta de Red, etc.):
						<textarea name="caracteristicas" id="resumenasistente" rows="5" cols="40" onblur="quitarenter()" ></textarea>

					</div>
					<input type="submit" value="Enviar" />
				</form>
			</div>
			<script type="text/javascript">
			function cambiaform(){

				if(document.getElementById('instalasi').checked)
				document.getElementById('caracteristicas').style.display = "inline";
				else
				document.getElementById('caracteristicas').style.display = "none";

			}
			</script>



			<div class="texto cts">
				<h2>Inscribir Stand:</h2>

			<!--	<div class="menus">


				<	<div class="menu">
						<input type="radio" name="name" id="charla" value="" onclick="ChangeForm()"><label for="charla">Charla<br />
						</label>
					</div>
					<div class="menu">
						<input type="radio" name="name" id="taller" value="" onclick="ChangeForm()" ><label for="taller">Taller<br />
						</label>

					</div>
					<div class="menu">
						<input type="radio" name="name" id="stand" value="" onclick="ChangeForm()"><label for="stand">Stand<br />

						</label>

					</div>

				</div>


				<div id="fcharla" class="formularios">


					<form  action="secciones/formularios/charla.php" method="POST" enctype="multipart/form-data">


					<input type="hidden" name="action" value="submit">

					<input type="hidden" name="tipo" value="Charla">
					Nombre:<br>
					<input name="nombre" required type="text" placeholder="Tu nombre aquí"/><br>
					Mail:<br>
					<input name="email" required type="email" placeholder="ejemplo@ejemplo.cl"/><br>
					Título de la Charla:<br>
					<input type="text" required name="titulo"><br>
					Público objetivo de la Charla (niños?, usuarios avanzados?):<br>
					<input type="text" required name="publico"><br>
					Resumen de la Charla:
					<textarea id="charlaresumen" name="resumen"  required maxlength="400" minlength="300" onkeypress="return limitacharla(event, 400);" onblur="minimocharla()" onkeyup="actualizaInfocharla(400)" rows="6" cols="10"></textarea>
					<div id="infocharla">Máximo 400 caracteres</div><br>
					<input type="submit" value="Enviar"/>
				</form>
			</div>














			<div id="ftaller" class="formularios">

	<form  action="secciones/formularios/taller.php" method="POST" enctype="multipart/form-data">


				<input type="hidden" name="action" value="submit">

				<input type="hidden" name="tipo" value="Taller">
				Nombre:<br>
				<input name="nombre" required type="text" placeholder="Tu nombre aquí" /><br>
				Mail:<br>
				<input name="email" required type="email" placeholder="ejemplo@ejemplo.cl" /><br>
				Título del Taller:<br>
				<input type="text" required name="titulo"><br>
				Público objetivo del Taller (niños?, usuarios avanzados?):<br>
				<input type="text" required name="publico"><br>
				Requiere conocimientos previos de:<br>
				<input type="text" required name="conocimientos"><br>
				Resumen del Taller:
				<textarea id="tallerresumen" name="resumen"  required onkeypress="return limitataller(event, 400);" minlength="300" onblur="minimotaller()" onkeyup="actualizaInfotaller(400)" maxlength="400" rows="6" cols="10"></textarea>
				<div id="infotaller">Máximo 400 caracteres</div><br>
				<input type="submit" value="Enviar"/>
			</form>

		</div>
-->

		<div id="fstand" class="formularios">

	<form  action="secciones/formularios/stand.php" method="POST" enctype="multipart/form-data">


			<input type="hidden" name="action" value="submit">

			<input type="hidden" name="tipo" value="Stand">
			Nombre:<br>
			<input name="nombre" required type="text" placeholder="Tu nombre aquí" /><br>
			Mail:<br>
			<input name="email" required type="email" placeholder="ejemplo@ejemplo.cl"/><br>
			Nombre su Stand:<br>
			<input type="text" required name="titulo"><br>
			¿Qué desea promocionar o difundir?:<br>
			<textarea id="standresumen" name="resumen"  required onkeypress="return limitastand(event, 400);" minlength="300" onblur="minimostand()" onkeyup="actualizaInfostand(400)" rows="6" maxlength="400" cols="10"></textarea>
			<div id="infostand">Máximo 400 caracteres</div><br>
			<input type="submit" value="Enviar"/>
		</form>

	</div>




</div>
</div>

</div>
</section>
