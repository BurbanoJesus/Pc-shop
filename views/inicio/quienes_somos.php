<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/pcshop/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css'];
require_once VIEWS.'templates/head.php';

$nosotros = "active";
include VIEWS.'templates/header.php';

?>
<main>
	<div class="main">
		<div class="contenido" id="quienes_somos">
			<div class="wrap_head_titulo">
				<div class="capa_background">
					<div class="icon_about">
						<svg class="file" viewBox="0 0 224.000000 224.000000"
						 preserveAspectRatio="xMidYMid meet">
						<g transform="translate(0.000000,224.000000) scale(0.100000,-0.100000)"
						stroke="none">
						<path d="M839 2221 l-24 -19 0 -314 0 -313 -153 -279 c-84 -153 -152 -279
						-150 -281 87 -80 215 -175 235 -175 16 0 44 18 81 54 l57 55 57 -55 c38 -36
						65 -54 82 -54 23 0 90 49 209 152 l38 33 -156 275 -155 275 0 98 0 97 239 0
						c226 0 240 1 265 21 41 33 35 72 -22 138 -27 31 -52 62 -56 68 -4 8 15 38 49
						78 61 72 70 110 35 145 -19 19 -33 20 -314 20 -275 0 -295 -1 -317 -19z"/>
						<path d="M1652 1017 c-13 -7 -44 -50 -69 -97 l-45 -86 192 -342 c106 -189 196
						-360 199 -380 4 -20 4 -54 1 -74 l-7 -38 137 0 c130 0 138 1 158 23 12 13 22
						33 22 45 0 21 -489 916 -513 938 -20 20 -51 24 -75 11z"/>
						<path d="M1233 811 c-137 -117 -201 -136 -298 -86 l-49 24 -33 -20 c-18 -11
						-57 -23 -86 -26 -73 -7 -119 15 -232 110 -51 44 -93 73 -98 68 -23 -23 -437
						-798 -437 -817 0 -13 12 -32 26 -43 27 -21 32 -21 874 -21 809 0 849 1 871 18
						14 12 22 30 22 48 0 19 -74 161 -218 419 -120 215 -223 395 -229 401 -8 9 -38
						-11 -113 -75z"/>
						</g>
						</svg>
					</div>
				</div>
			</div>
			<h2 class="main">Sobre Nosotros</h2>
			<div class="info_about">
				<div class="info_desc">
					<p>Nuestro objetivo es ayudar a las personas a elegir el computador que cumplan con las necesidades especificas de cada cliente, nos comprometemos a ofrecer la asesoría necesaria que te permita encontrar el producto indicado para ti que resuelva todo lo que necesites de forma eficiente y eficaz.</p>
				</div>
			</div>
		</div>
		<?php  include VIEWS.'templates/chat.php'; ?>
	</div>
</main>
	
<?php 
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>