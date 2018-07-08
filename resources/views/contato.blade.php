
@extends('layouts.app')

@section('title', 'Contato')

@section('content')
<section class='spaceTittle'>
	<h1>Contato</h1>
	<div class='bordaBaixo'>
		<span></span>
		<i class="material-icons" style='color:#fff;'>
			local_offer
		</i>
		<span></span>
	</div>
</section>
<section id='Contato'>
	<div class='container'>
		<main>
			<form class="mui-form contatoForm">
				<svg width="63px" height="100px" viewBox="0 0 63 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="05.Eventos/Compra-efetivada" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-1043.000000, -461.000000)">
					<g id="Group-2" transform="translate(325.000000, 190.000000)" fill="#0098e2">
						<g id="dire" transform="translate(718.000000, 271.000000)">
							<path d="M51.5028673,69.9925274 C53.5061248,69.0954559 57.9381106,66.771686 59.3766066,68.5987722 C60.6808767,70.2535397 60.4605437,72.3441724 60.4048273,74.3081001 C60.3364481,76.7306999 60.2680689,79.1507656 60.2022223,81.5733655 C60.1009197,85.2047311 59.9970846,88.8386309 59.8932495,92.4725306 C59.832468,94.6290499 60.2376781,99.3982266 57.5506285,99.9303876 C55.993102,100.239548 51.6750816,99.4438404 49.3020697,99.0155774 C42.0842643,97.7105158 34.8664588,96.4181247 27.6435882,95.1308018 C25.035048,94.6645273 22.3910519,94.53022 19.792642,94.0512751 C18.1971271,93.7547853 15.6670963,93.1313967 15.6670963,91.0813096 C15.6670963,88.488925 18.5643488,87.0672948 20.4004572,85.8483926 C23.0773766,84.0745224 25.992357,82.6680968 28.8668163,81.1856481 C32.9645038,79.0722085 37.0571261,76.961303 41.152281,74.8478634 C44.5408507,73.0993343 48.0231253,71.5484649 51.5028673,69.9925274 Z M30.8244878,44.0190135 C20.0079098,54.4899157 12.9445907,61.5701918 6.54733581,69.5703463 C5.49125691,70.8880784 3.48546676,73.835237 1.57591402,73.6020998 C-0.830021133,73.3106782 0.170341378,68.4908196 0.410934893,67.2567128 C2.76621878,55.3236347 17.1334505,24.0401672 26.4786091,8.25018864 C32.0375856,-1.14625506 33.0607412,-0.854833528 39.3490959,1.11162826 C42.9276079,2.22916647 57.0922345,7.73069809 58.7814542,8.49346226 C65.8574361,11.6889627 63.0868119,13.8758912 57.4012072,19.1240128 C49.8592337,26.0877202 38.8932345,36.2114507 30.8244878,44.0190135 Z" id="Fill-34"></path>
						</g>
					</g>
				</g>
			</svg>
			<legend>Formulário de Contato</legend>
			<div class="mui-textfield mui-textfield--float-label">
				<input type="text" required name='nome'>
				<label>Digite seu nome</label>
			</div>
			<div class="mui-textfield mui-textfield--float-label">
				<input type="email" required name='email'>
				<label>Digite seu email</label>
			</div>
			<div class="mui-textfield mui-textfield--float-label">
				<textarea required name='msg'></textarea>
				<label>Escreva sua mensagem</label>
			</div>
			<button type="submit" class="mui-btn mui-btn--raised">Submit</button>
		</form>
	</main>
</div>
	<div class='containerMapa'>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1972.961780586324!2d-35.00067!3d-8.506803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc4a89202588c9f64!2sFlat+Htur+Porto+de+Galinhas!5e0!3m2!1spt-BR!2sbr!4v1531091461249" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>

@stop

