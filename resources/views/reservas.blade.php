
@extends('layouts.app')

@section('title', 'Reservas')

@section('content')
<section class='spaceTittle'>
	<h1>Reservas</h1>
	<div class='bordaBaixo'>
		<span></span>
		<i class="material-icons" style='color:#fff;'>
			local_offer
		</i>
		<span></span>
	</div>
</section>

<section id='Reservas'>
	<div class='container'>
		<main>
			<div class='reservaDesc'>
				<h3>PAGAMENTO / RESERVA:</h3>
				<p>Pagamento por transferência ou depósito bancário antecipado.
					Pacotes para feriados, carnaval e réveillon, podem ser parcelados de acordo com o período de aquisição. Para isso antecipe sua reserva!
					A reserva apenas é confirmada com o comprovante de pagamento enviado para nosso e-mail e o crédito confirmado em conta.
					O voucher será emitido e enviado para seu e-mail.
					Não reembolsável.
				Regras e observações serão enviadas por e-mail no ato da reserva.</p>

				<h3>CANCELAMENTO:</h3>

				<p>Por favor, observe que se você: cancelar, alterar ou em caso de não comparecimento, será cobrado o valor total da reserva.</p>

				<h3>INFORMAÇÕES IMPORTANTES:</h3>

				<p>Check in às 14h e o Check out às 12h.
					Você é recebido por um responsável do Hostel, dando as boas vindas com a entrega da chave sob a apresentação do voucher e de um documento de identificação do hóspede responsável pela reserva.
					Na saída a chave deve ser entregue ao responsável do Hostel.
					Fornecemos 01 enxoval completo por acomodação/hóspede.
					A diária não inclui alimentação e bebidas.
					Permite-se aluguel por diária, final de semana e temporada.
				Não é permitido animais nas dependências do Hostel. </p>

				<div class='ReservasIcons'>
					<i class="material-icons">phone</i>
					<p>+55 81 99999-9999</p>
				</div>
				<div class='ReservasIcons'>
					<i class="material-icons">email</i>
					<p>teste@testegmail.com</p>
				</div>

				<a href="/contato" class='btnContato'>ENTRAR EM CONTATO</a>
			</div>

		</main>

	</div>
	<div class='containerMapa'>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1972.961780586324!2d-35.00067!3d-8.506803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc4a89202588c9f64!2sFlat+Htur+Porto+de+Galinhas!5e0!3m2!1spt-BR!2sbr!4v1531091461249" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>


@stop

