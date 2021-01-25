<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/pcshop/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css','estilos_form.css','comp_slider.css','comp_modal.css'];
require_once VIEWS.'templates/head.php';

$inicio = "active";
include VIEWS.'templates/header.php';
?>
<main>
	<div class="main" id="inicio">
		<div class="contenido">
			<h2 class="main">OFERTAS DE COMPUTADORES</h2>
			<div class="wrap_elementos">
				<div class="elemento">
					<div class="file_multimedia">
						<img class="file" src="<?php echo IMG?>default/s1.png" alt="logo" />
						<div class="descuento"></div>
						<span class="str_string">- 25%</span>
					</div>
					<div class="props">
						<div class="nombre">
							<span>TODO EN UNO HP ALL-IN-ONE 20-C405LA</span>
						</div>
						<div class="precio">
							<span class="anterior"><s>Antes $ 2'509.900</s></span>
							<span class="nuevo"><p>Ahora </p> $ 1'879.900</span>
						</div>
						<div class="lista">
							<span class="a">Sistema Operativo</span>
							<span class="b">Windows 10 Home</span>
						</div>
						<div class="lista">
							<span class="a">Procesador</span>
							<span class="b">INTEL CORE I5-7200U</span>
						</div>
						<div class="lista">
							<span class="a">Disco Duro</span>
							<span class="b">1 TB HDD</span>
						</div>
						<div class="lista">
							<span class="a">Memoria RAM</span>
							<span class="b">4 GB DDR4</span>
						</div>
						<div class="lista">
							<span class="a">Tarjeta Gráfica</span>
							<span class="b">Integrada</span>
						</div>
						<div class="lista last">
							<span class="a">Tamaño pantalla</span>
							<span class="b">23.8 pulgadas</span>
						</div>
						<div class="content_button">
							<button onclick="window.open('https://api.whatsapp.com/send?phone=+573226674241&text=Hola, me gustaria saber mas información acerca de este producto: TODO EN UNO HP ALL-IN-ONE 20-C405LA','_blank')" class="button" type="button">Mas información</button>
						</div>
					</div>
				</div>
				<div class="elemento">
					<div class="file_multimedia">
						<img class="file" src="<?php echo IMG?>default/s2.png" alt="logo" />
						<div class="descuento"></div>
						<span class="str_string">- 25%</span>
					</div>
					<div class="props">
						<div class="nombre">
							<span>PORTATIL ACER A315-56-543D</span>
						</div>
						<div class="precio">
							<span class="anterior"><s>Antes $ 2'599.900</s></span>
							<span class="nuevo"><p>Ahora </p> $ 1'939.900</span>
						</div>
						<div class="lista">
							<span class="a">Sistema Operativo</span>
							<span class="b">Windows 10 Home</span>
						</div>
						<div class="lista">
							<span class="a">Procesador</span>
							<span class="b">INTEL CORE I5-1035G1</span>
						</div>
						<div class="lista">
							<span class="a">Disco Duro</span>
							<span class="b">256GB SSD</span>
						</div>
						<div class="lista">
							<span class="a">Memoria RAM</span>
							<span class="b">4 GB DDR4</span>
						</div>
						<div class="lista">
							<span class="a">Tarjeta Gráfica</span>
							<span class="b">Integrada</span>
						</div>
						<div class="lista last">
							<span class="a">Tamaño pantalla</span>
							<span class="b">15,6 pulgadas</span>
						</div>
						<div class="content_button">
							<button onclick="window.open('https://api.whatsapp.com/send?phone=+573226674241&text=Hola, me gustaria saber mas información acerca de este producto: TODO EN UNO HP ALL-IN-ONE 20-C405LA','_blank')" class="button" type="button">Mas información</button>
						</div>
					</div>
				</div>
				<div class="elemento">
					<div class="file_multimedia">
						<img class="file" src="<?php echo IMG?>default/s3.png" alt="logo" />
						<div class="descuento"></div>
						<span class="str_string">- 25%</span>
					</div>
					<div class="props">
						<div class="nombre">
							<span>PORTATIL LENOVO IDEAPAD S145-14IIL</span>
						</div>
						<div class="precio">
							<span class="anterior"><s>Antes $ 2'269.900</s></span>
							<span class="nuevo"><p>Ahora </p> $ 1'699.900</span>
						</div>
						<div class="lista">
							<span class="a">Sistema Operativo</span>
							<span class="b">Windows 10 Home</span>
						</div>
						<div class="lista">
							<span class="a">Procesador</span>
							<span class="b">INTEL CORE I3 1005G1</span>
						</div>
						<div class="lista">
							<span class="a">Disco Duro</span>
							<span class="b">1 TB HDD</span>
						</div>
						<div class="lista">
							<span class="a">Memoria RAM</span>
							<span class="b">4 GB DDR4</span>
						</div>
						<div class="lista">
							<span class="a">Tarjeta Gráfica</span>
							<span class="b">Integrada</span>
						</div>
						<div class="lista last">
							<span class="a">Tamaño pantalla</span>
							<span class="b">14 pulgadas</span>
						</div>
						<div class="content_button">
							<button onclick="window.open('https://api.whatsapp.com/send?phone=+573226674241&text=Hola, me gustaria saber mas información acerca de este producto: TODO EN UNO HP ALL-IN-ONE 20-C405LA','_blank')" class="button" type="button">Mas información</button>
						</div>
					</div>
				</div>
				<div class="elemento">
					<div class="file_multimedia">
						<img class="file" src="<?php echo IMG?>default/s4.png" alt="logo" />
						<div class="descuento"></div>
						<span class="str_string">- 25%</span>
					</div>
					<div class="props">
						<div class="nombre">
							<span>PORTATIL ASUS M509D</span>
						</div>
						<div class="precio">
							<span class="anterior"><s>Antes $ 3'119.900</s></span>
							<span class="nuevo"><p>Ahora </p> $ 2'339.900</span>
						</div>
						<div class="lista">
							<span class="a">Sistema Operativo</span>
							<span class="b">Windows 10 Home</span>
						</div>
						<div class="lista">
							<span class="a">Procesador</span>
							<span class="b">AMD RYZEN 5 3500U/BGA</span>
						</div>
						<div class="lista">
							<span class="a">Disco Duro</span>
							<span class="b">1 TB HDD</span>
						</div>
						<div class="lista">
							<span class="a">Memoria RAM</span>
							<span class="b">8 GB DDR4</span>
						</div>
						<div class="lista">
							<span class="a">Tarjeta Gráfica</span>
							<span class="b">2 GB</span>
						</div>
						<div class="lista last">
							<span class="a">Tamaño pantalla</span>
							<span class="b">15,6 pulgadas</span>
						</div>
						<div class="content_button">
							<button onclick="window.open('https://api.whatsapp.com/send?phone=+573226674241&text=Hola, me gustaria saber mas información acerca de este producto: TODO EN UNO HP ALL-IN-ONE 20-C405LA','_blank')" class="button" type="button">Mas información</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php  include VIEWS.'templates/chat.php'; ?>
		<div id="theater" class="theater" data="">
			<div index="" class="indicador"></div>
			<div class="close"><i class="icon-cancelar"></i></div>
			<div index="" class="btn_left"><i class="icon-arrow-c"></i></div>
			<div index="" class="btn_right"><i class="icon-arrow-c"></i></div>
			<div class="theater_main">
				<div class="theater_content">
					<img index="0" src="" id="img_theater">
				</div>
			</div>
		</div>
		<div id="div_mod_eliminar"></div>
	</div>	
</main>
<?php
$scripts = ['comp_slider.js','comp_modal.js','funciones_animacion.js'];
include VIEWS.'templates/footer.php'; 
include VIEWS.'templates/foot.php';
?>