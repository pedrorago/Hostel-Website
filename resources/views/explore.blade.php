
@extends('layouts.app')

@section('title', 'Explore')

@section('content')
<section class='spaceTittle'>
	<h1>Explore</h1>
	<div class='bordaBaixo'>
		<span></span>
		<i class="material-icons" style='color:#fff;'>
			local_offer
		</i>
		<span></span>
	</div>
</section>


<section id='Explore'>
	<div class='container'>
		<main>
			<div class='exploreContainer'>
				<div class='exploreIMG'>
					<img src="img/banner1.jpg">
				</div>
				<div class='exploreDESC'>
					<h2>Quartos confortáveis e aconchegantes</h2>
					<p>Bastante aconchegante, o hostel é decorado e equipado nos mínimos detalhes. Itens de bom gosto e qualidade, como cama queen size, sofá cama, bi camas, condicionador de ar Split, TV de LCD que propiciam total conforto aos hóspedes. <br>É uma ótima opção para quem querer relaxar e não se preocupar com nada.</p>
					<a href="/reservas" class='btnReservar'>Reservar</a>
				</div>
			</div>

			<div class='exploreContainer exploreReverse'>
				<div class='exploreIMG'>
					<img src="img/banner3.jpg">
				</div>
				<div class='exploreDESC'>
					<h2>Área de lazer com piscina</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="/reservas" class='btnReservar'>Reservar</a>
				</div>
			</div>
			<div class='exploreContainer'>
				<div class='exploreIMG'>
					<img src="img/banner1.jpg">
				</div>
				<div class='exploreDESC'>
					<h2>Quartos confortáveis e aconchegantes</h2>
					<p>Bastante aconchegante, o hostel é decorado e equipado nos mínimos detalhes. Itens de bom gosto e qualidade, como cama queen size, sofá cama, bi camas, condicionador de ar Split, TV de LCD que propiciam total conforto aos hóspedes. <br>É uma ótima opção para quem querer relaxar e não se preocupar com nada.</p>
					<a href="/reservas" class='btnReservar'>Reservar</a>
				</div>
			</div>

			<div class='exploreContainer exploreReverse'>
				<div class='exploreIMG'>
					<img src="img/banner3.jpg">
				</div>
				<div class='exploreDESC'>
					<h2>Área de lazer com piscina</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="/reservas" class='btnReservar'>Reservar</a>
				</div>
			</div>


		</main>
	</div>
</section>
@stop

