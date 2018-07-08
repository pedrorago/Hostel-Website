
@extends('layouts.app')

@section('title', 'Home')

@section('content')


<section id="HomeBanner">
	<img src="img/banner4.jpg" class='bg'>
	<div class='container'>
		<main>
			<h1 class='Heading1'>Seja bem vindo ao nosso Hostel Website ! </h1>
			<h2 class='Heading3'>Esperamos que você tenha uma experiência agradavél. Está curiso para conhecer nossos serviços? Dê uma explorada no site.</h2>

			<div class='bannerBoxProp'>
				<div>
					<h2>Onde estamos</h2>
					<p>Porto de Galinhas</p>
				</div>
				<div>
					<h2>Onde você está</h2>
					<p>Recife</p>
				</div>
				<div>
					<h2>Distância entre nós</h2>
					<p>100km</p>
				</div>
				<div>
					<h2>Vagas</h2>
					<p class='pDisponivel'>Disponíveis</p>
				</div>
				<a href="/reservas" class='buttonReservar'>Reservar</a>
				<img src="img/dire2.svg" class='tarjinha'>
			</div>

			<i class="material-icons arrowSlide">
				keyboard_arrow_right
			</i>

		</main>
	</div>
</section>

<section id='HomeServicos'>
	<div class='container'>
		<main>
			<h2>Nossos Serviços</h2>
			<div class='bordaBaixo'>
				<span></span>
				<i class="material-icons">
					local_offer
				</i>
				<span></span>
			</div>
			<div class='containerServicos'>
				
				<div class='boxImg'>
					<img src="img/banner14.jpg">
				</div>

				<div class='servicosDesc'>

					<div class='containerLazer'>
						<span class='servicosImg'>
							<i class="material-icons">
								rowing
							</i>
						</span>

						<span class='lazerDesc'>
							<h2>ÁREA DE LAZER</h2>
							<p>Área de lazer com piscina para relaxar.</p>
						</span>
					</div>
					<div class='containerLazer'>
						<span class='servicosImg'>
							<i class="material-icons">
								insert_emoticon
							</i>
						</span>

						<span class='lazerDesc'>
							<h2>CONFORTO</h2>
							<p>Quartos confortavéis e modernos.</p>
						</span>
					</div>
					<div class='containerLazer'>
						<span class='servicosImg'><i class="material-icons">
							restaurant
						</i></span>

						<span class='lazerDesc'>
							<h2>DELICIOSAS COMIDAS</h2>
							<p>Comidas deliciosas oferecidas pelo nosso hostel</p>
						</span>
					</div>
					<div class='containerLazer'>
						<span class='servicosImg'>
							<i class="material-icons">
								network_wifi
							</i>
						</span>

						<span class='lazerDesc'>
							<h2>WIFI ABERTO</h2>
							<p>Wifi de otíma qualidade por todo o espaço.</p>
						</span>
					</div>
				</div>

			</div>
		</main>
	</div>
</section>

<section id='HomeGaleria'>
	<div class='container'>
		<main>
			<div class='boxGaleriaHome'>
				<span></span>
				<a href="/galeria">Visite nossa<br>galeria</a>
				<img src="img/banner10.jpg">
			</div>
			<div class='boxGaleriaHome'>
				<span></span>
				<a href="/galeria">Visite nossa<br>galeria</a>
				<img src="img/banner11.jpg">
			</div>
			<div class='boxGaleriaHome'>
				<span></span>
				<a href="/galeria">Visite nossa<br>galeria</a>
				<img src="img/banner12.jpg">
			</div>
			<div class='boxGaleriaHome'>
				<span></span>
				<a href="/galeria">Visite nossa<br>galeria</a>
				<img src="img/banner13.jpg">
			</div>
		</main>
	</div>
</section>

<section id='HomeComments'>
	
	<div class='container'>
		<main>
			<div>
				<h2>Muito feliz com o experiência!</h2>
				<span></span>
				<blockquote><i>“</i>Estou muito feliz com a experiência e estadia do hostel, desde então eu recomendo para todos os meus amigos. Espero ter a oportunidade de voltar mais vezes!<i>”</i>
				</blockquote>
				<div class='userBox'>
					<div class='boxImgComments'>
						<img src="img/woman.jpg">
					</div>
					<div class='boxComments'>
						<h3>Amanda Tavares</h3>
						<p>Jornalista</p>
					</div>
				</div>

			</div>

			<div class='manComments'>
				<h2>Ótimo lugar, amei!</h2>
				<span></span>
				<blockquote><i>“</i>Muito bom para relaxar, ambiente tranquilo e confortável. Recomento!<i>”</i>
				</blockquote>
				<div class='userBox'>
					<div class='boxComments'>
						<h3>Rafael Queiroz</h3>
						<p>Fotógrafo</p>
					</div>
					<div class='boxImgComments'>
						<img src="img/man.jpg">
					</div>
					
				</div>

			</div>


		</main>
	</div>

</section>
@stop

