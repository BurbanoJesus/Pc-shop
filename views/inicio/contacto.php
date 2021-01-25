<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/pcshop/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css'];
require_once VIEWS.'templates/head.php';

$contacto = "active";
include VIEWS.'templates/header.php';

?>
<main>
	<div class="main">
		<div class="contenido" id="contactanos">
			<div class="wrap_head_titulo">
				<div class="capa_background">
					<div class="icon_about">
						<svg class="file" viewBox="0 0 512.000000 362.000000"
						 preserveAspectRatio="xMidYMid meet">
						<g transform="translate(0.000000,362.000000) scale(0.100000,-0.100000)"
						stroke="none">
						<path d="M340 3604 c-30 -8 -59 -19 -65 -25 -11 -11 2161 -2190 2207 -2215 35
						-18 121 -18 156 0 15 8 520 508 1122 1110 816 817 1092 1098 1083 1107 -39 39
						-45 39 -2288 38 -1871 0 -2167 -2 -2215 -15z"/>
						<path d="M23 3308 c-17 -50 -18 -123 -18 -1488 0 -1365 1 -1438 18 -1487 10
						-29 22 -53 25 -53 4 0 354 347 777 770 l770 770 -770 770 c-423 424 -773 770
						-777 770 -3 0 -15 -24 -25 -52z"/>
						<path d="M4295 2590 l-770 -770 770 -770 c423 -423 773 -770 777 -770 3 0 15
						24 25 53 17 49 18 122 18 1487 0 1365 -1 1438 -18 1488 -10 28 -22 52 -25 52
						-4 0 -354 -346 -777 -770z"/>
						<path d="M1030 835 c-495 -495 -761 -768 -755 -774 6 -6 37 -17 70 -25 53 -14
						299 -16 2215 -16 2237 0 2244 0 2283 39 9 9 -183 206 -753 776 -421 421 -768
						765 -772 765 -4 0 -110 -103 -235 -229 -231 -232 -273 -265 -378 -301 -70 -24
						-206 -27 -276 -6 -111 34 -148 62 -390 302 -129 129 -237 234 -240 234 -2 0
						-348 -344 -769 -765z"/>
						</g>
						</svg>
					</div>
				</div>
			</div>
			<h2 class="main">Contacto</h2>
			<div class="wrap_contacto">
				<div class="content_contacto animacion anim_arriba_s">
					<form class="form_contacto" action="<?php echo CONTROLLERS?>inicio/c_contacto.php" method="POST">
						<div class="input s50">
							<input type="text" name="nombre"  placeholder="Nombre" />
						</div>
						<div class="input s50">
							<input type="text" name="telefono"  placeholder="Telefono" />
						</div>
						<div class="input">
							<input type="text" name="correo"  placeholder="Correo" />
						</div>
						<div class="input">
							<textarea name="mensaje" cols="30" rows="5" placeholder="Mensaje"></textarea>
						</div>
						<div class="content_button">
							<button class="button" type="submit">
							Enviar
							<svg viewBox="0 0 299.000000 257.000000"
							 preserveAspectRatio="xMidYMid meet">
							<g transform="translate(0.000000,257.000000) scale(0.100000,-0.100000)"
							stroke="none">
							<path d="M0 2065 l0 -494 33 -6 c17 -3 491 -66 1052 -140 561 -75 1025 -137
							1030 -140 6 -2 4 -4 -3 -4 -21 -2 -2045 -271 -2079 -277 l-33 -6 0 -494 c0
							-272 3 -494 8 -494 17 0 2963 1268 2963 1275 0 7 -2946 1275 -2963 1275 -5 0
							-8 -223 -8 -495z"/>
							</g>
							</svg>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php  include VIEWS.'templates/chat.php'; ?>
	</div>
</main>
	
<?php
$scripts = ['comp_slider.js','comp_modal.js','funciones_animacion.js'];
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>