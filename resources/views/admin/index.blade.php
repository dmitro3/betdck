@extends('admin')

@section('content')

@php

@endphp
<script type="text/javascript" src="/js/chart.min.js"></script>


<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content" style="background-color: #1e1e2d">
	<div class="kt-portlet">
		<div class="kt-portlet__body  kt-portlet__body--fit">
			<div class="row row-no-padding row-col-separator-xl">

				<div class="col-md-12 col-lg-6 col-xl-3">
					<!--begin::Total Profit-->
					<div class="kt-widget24">
						<div class="kt-widget24__details">
							<div class="kt-widget24__info">
								<h4 class="kt-widget24__title">
									Depósitos
								</h4>
								<span class="kt-widget24__desc">
									Últimas 24 horas
								</span>
							</div>

							<span class="kt-widget24__stats kt-font-success">
								<i class="la la-rub"></i> {{$pay_today}}
							</span>
						</div>
					</div>
					<!--end::Total Profit-->
				</div>

				<div class="col-md-12 col-lg-6 col-xl-3">
					<!--begin::New Feedbacks-->
					<div class="kt-widget24">
						<div class="kt-widget24__details">
							<div class="kt-widget24__info">
								<h4 class="kt-widget24__title">
									Depósitos
								</h4>
								<span class="kt-widget24__desc">
									Últimos 7 dias
								</span>
							</div>

							<span class="kt-widget24__stats kt-font-success">
							   <i class="la la-rub"></i> {{$pay_week}}
							</span>
						</div>
					</div>
					<!--end::New Feedbacks-->
				</div>

				<div class="col-md-12 col-lg-6 col-xl-3">
					<!--begin::New Orders-->
					<div class="kt-widget24">
						<div class="kt-widget24__details">
							<div class="kt-widget24__info">
								<h4 class="kt-widget24__title">
									Depósitos
								</h4>
								<span class="kt-widget24__desc">
									Últimos 30 dias
								</span>
							</div>

							<span class="kt-widget24__stats kt-font-success">
								<i class="la la-rub"></i> {{$pay_month}}
							</span>
						</div>
					</div>
					<!--end::New Orders-->
				</div>

				<div class="col-md-12 col-lg-6 col-xl-3">
					<!--begin::New Users-->
					<div class="kt-widget24">
						<div class="kt-widget24__details">
							<div class="kt-widget24__info">
								<h4 class="kt-widget24__title">
									Depósitos
								</h4>
								<span class="kt-widget24__desc">
									Em todo período
								</span>
							</div>

							<span class="kt-widget24__stats kt-font-success">
								<i class="la la-rub"></i> {{$pay_all}}
							</span>
						</div>
					</div>
					<!--end::New Users-->
				</div>

			</div>
		</div>
	</div>
	<div class="kt-portlet">
		<div class="kt-portlet__body  kt-portlet__body--fit">
			<div class="row row-no-padding row-col-separator-xl">

				<div class="col-md-12 col-lg-6 col-xl-3">
					<!--begin::Total Profit-->
					<div class="kt-widget24">
						<div class="kt-widget24__details">
							<div class="kt-widget24__info">
								<h4 class="kt-widget24__title">
									Usuários
								</h4>
								<span class="kt-widget24__desc">
									Total
								</span>
							</div>

							<span class="kt-widget24__stats kt-font-brand">
								{{$usersCount}}<i class="la la-user"></i>
							</span>
						</div>
					</div>
					<!--end::Total Profit-->
				</div>

				<div class="col-md-12 col-lg-6 col-xl-3">
					<!--begin::New Orders-->
					<div class="kt-widget24">
						<div class="kt-widget24__details">
							<div class="kt-widget24__info">
								<h4 class="kt-widget24__title">
									Saques
								</h4>
								<span class="kt-widget24__desc">
									Valor total
								</span>
							</div>

							<span class="kt-widget24__stats kt-font-danger">
								<i class="la la-rub"></i> {{$with_req}}
							</span>
						</div>
					</div>
					<!--end::New Orders-->
				</div>

								<div class="col-md-12 col-lg-6 col-xl-3">
					<!--begin::New Orders-->
					<div class="kt-widget24">
						<div class="kt-widget24__details">
							<div class="kt-widget24__info">
								<h4 class="kt-widget24__title">
									Saques
								</h4>
								<span class="kt-widget24__desc">
									Valor de hoje
								</span>
							</div>

							<span class="kt-widget24__stats kt-font-danger">
								<i class="la la-rub"></i> {{$with_today}}
							</span>
						</div>
					</div>
					<!--end::New Orders-->
				</div>

				<div class="col-md-12 col-lg-6 col-xl-3">

					<!--begin::New Users-->
					<div class="kt-widget24">
						<div class="kt-widget24__details">
							<div class="kt-widget24__info">
								<h4 class="kt-widget24__title">
									Saldo Bruto do Sistema
								</h4>
								<span class="kt-widget24__desc">
									PIX BRL
								</span>
							</div>

							<span class="kt-widget24__stats kt-font-warning">
								<span class="kt-widget1__number kt-font-success"><i class="la la-rub"></i> <!--<img src="/img/real_loading.gif" height="26px"/>--> <span id="fkBal">{{$pay_all - $with_req}} </span>
							</span>
						</div>
					</div>
					<!--end::New Users-->
				</div>

			</div>
		</div>
	</div>
	<div class="kt-portlet">
		<div class="kt-portlet__body kt-portlet__body--fit">
			<div class="row row-no-padding row-col-separator-xl">
				<div class="col-md-12 col-lg-12 col-xl-4">
					<!--begin:: Widgets/Stats2-1 -->
					<div class="kt-widget1">
						<div class="kt-widget1__item">
							<div class="kt-widget1__info">
								<h3 class="kt-widget1__title">Comissão Jackpot</h3>
							</div>
							<span class="kt-widget1__number kt-font-success"><i class="la la-rub"></i> {{$profit_jackpot}}</span>
						</div>

						<div class="kt-widget1__item">
							<div class="kt-widget1__info">
								<h3 class="kt-widget1__title">Comissão PvP</h3>
							</div>
							<span class="kt-widget1__number kt-font-success"><i class="la la-rub"></i> {{$profit_pvp}}</span>
						</div>

						<div class="kt-widget1__item">
							<div class="kt-widget1__info">
								<h3 class="kt-widget1__title">Comissão Battle</h3>
							</div>
							<span class="kt-widget1__number kt-font-success"><i class="la la-rub"></i> {{$profit_battle}}</span>
						</div> 

						
						<div class="kt-widget1__item">
							<div class="kt-widget1__info">
								<h3 class="kt-widget1__title">Lucro Mines</h3>
							</div>
							<span class="kt-widget1__number kt-font-success"><i class="la la-rub"></i> {{(round(\Cache::get('minesGame.profit'), 2) ?? 0)}}</span>
						</div>


					</div>
					<!--end:: Widgets/Stats2-1 -->
				</div>
				<div class="col-md-12 col-lg-12 col-xl-4">
					<!--begin:: Widgets/Stats2-2 -->
					<div class="kt-widget1">

						
						<div class="kt-widget1__item">
							<div class="kt-widget1__info">
								<h3 class="kt-widget1__title">Lucro Wheel</h3>
							</div>
							<span class="kt-widget1__number kt-font-success"><i class="la la-rub"></i> {{$profit_wheel}}</span>
						</div>

						<div class="kt-widget1__item">
							<div class="kt-widget1__info">
								<h3 class="kt-widget1__title">Lucro Dice</h3>
							</div>
							<span class="kt-widget1__number kt-font-success"><i class="la la-rub"></i> {{$profit_dice}}</span>
						</div>

						<div class="kt-widget1__item">
							<div class="kt-widget1__info">
								<h3 class="kt-widget1__title">Lucro Crash</h3>
							</div>
							<span class="kt-widget1__number kt-font-success"><i class="la la-rub"></i> {{$profit_crash}}</span>
						</div>

						<div class="kt-widget1__item">
							<div class="kt-widget1__info">
								<h3 class="kt-widget1__title">Banco Mines</h3>
							</div>
							<span class="kt-widget1__number kt-font-success"><i class="la la-rub"></i> {{(round(\Cache::get('minesGame.bank'), 2) ?? 200)}}</span>
						</div>


					</div>
					<!--end:: Widgets/Stats2-2 -->
				</div>
				<div class="col-md-12 col-lg-12 col-xl-4">
					<!--begin:: Widgets/Stats2-3 -->
					<div class="kt-widget1">

						<div class="kt-widget1__item">
							<div class="kt-widget1__info">
								<h3 class="kt-widget1__title">Lucro da Casa/Corretora</h3>
							</div>
							<span class="kt-widget1__number kt-font-success"><i class="la la-rub"></i> {{$profit_exchange}}</span>
						</div>

						<div class="kt-widget1__item">
							<div class="kt-widget1__info">
								<h3 class="kt-widget1__title">Geral Lucro</h3>
							</div>
							<span class="kt-widget1__number kt-font-success"><i class="la la-rub"></i> {{$profit}}</span>
						</div>

						<div class="kt-widget1__item">
							<div class="kt-widget1__info">
								<h3 class="kt-widget1__title">Sistema Ref.\Promo (despesas)</h3>
							</div>
							<span class="kt-widget1__number kt-font-danger"><i class="la la-rub"></i> {{$profit_ref}}</span>
						</div>
					</div>
					<!--end:: Widgets/Stats2-3 -->
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xl-6">
			<div class="kt-portlet kt-portlet--height-fluid">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Gráfico de Registros no mês atual
						</h3>
					</div>
				</div>
				<div class="kt-portlet__body kt-portlet__body--fluid">
					<div class="kt-widget12">
						<div class="kt-widget12__chart" style="height:250px;">
							<canvas id="authChart"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="kt-portlet kt-portlet--height-fluid">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Gráfico de Depositos no mês atual
						</h3>
					</div>
				</div>
				<div class="kt-portlet__body kt-portlet__body--fluid">
					<div class="kt-widget12">
						<div class="kt-widget12__chart" style="height:250px;">
							<canvas id="depsChart"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	 @if($u->superadmin)
	<div class="row">
		<div class="col-xl-4">

			<!--begin:: Widgets/Support Tickets -->
			<div class="kt-portlet kt-portlet--height-fluid">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Chat
						</h3>
					</div>
					<div class="kt-portlet__head-toolbar">
						<div class="dropdown dropdown-inline">
							<button type="button" class="btn btn-clean btn-sm btn-icon-md btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flaticon-more-1"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<ul class="kt-nav">
									<li class="kt-nav__item">
										<a class="kt-nav__link clearChat">
											<i class="kt-nav__link-icon flaticon-delete"></i>
											<span class="kt-nav__link-text">Limpar</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__body" id="chat_app">
					<div class="kt-widget3 chat-scroll kt-scroll" data-scroll="true" data-height="345">
						@if($messages != 0) @foreach($messages as $sms)
						<div class="kt-widget3__item chat_mes" id="chatm_{{$sms['time2']}}">
							<div class="kt-widget3__header">
								<div class="kt-widget3__user-img">
									<img class="kt-widget3__img" src="{{$sms['avatar']}}" alt="">
								</div>
								<div class="kt-widget3__info">
									<span class="kt-widget3__username">
										{{$sms['username']}}
									</span><br>
									<span class="kt-widget3__time">
										{{$sms['time']}}
									</span>
								</div>
								<span class="kt-widget3__status">
									<button class="btn btn-sm btn-label-brand btn-bold" onclick="chatdelet({{$sms['time2']}})">APAGAR</button>
								</span>
							</div>
							<div class="kt-widget3__body">
								<p class="kt-widget3__text">
									{!!$sms['messages']!!}
								</p>
							</div>
						</div>
						@endforeach @endif
					</div>

					<div class="form-group" style="margin-top: 10px;">
						<label for="exampleSelect1">Selecione um Usuário</label>
						<select class="form-control" id="users">
						@foreach($fake as $user)
							<option value="{{ $user->user_id }}">{{ $user->username }}</option>
						@endforeach
						</select>
					</div>
					<div class="form-group" style="margin-bottom: 0px;">
						<input type="text" class="form-control" placeholder="digite um texto" id="chatmess">
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="reset" class="btn btn-primary" id="chatsend">ENVIAR</button>
					</div>
				</div>
			</div>
		</div>
		@endif
	    @if($u->superadmin)
		<div class="col-xl-4">
			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Rodar/Girar Jackpot
						</h3>
					</div>
				</div>
				<div class="kt-portlet__body">
					<ul class="nav nav-tabs nav-fill" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#room_easy">SALA EASY</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#room_medium">SALA MEDIUM</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#room_hard">SALA HARD</a>
						</li>
					</ul>
					<div class="tab-content kt-scroll" data-scroll="true" data-height="507">
						<div class="tab-pane active" id="room_easy" role="tabpanel">
							<div class="kt-timeline-v1__item-body">
								<div class="kt-widget4" id="chance_easy">
									@foreach($chances_easy as $user)
									<div class="kt-widget4__item">
										<div class="kt-widget4__pic">
											<img src="{{ $user['avatar'] }}" alt="">
										</div>
										<div class="kt-widget4__info">
											<span class="kt-widget4__username">
												{{ $user['username'] }}
											</span>
											<p class="kt-widget4__text">
												{{ $user['sum'] }}р./{{ $user['chance'] }}%
											</p>
										</div>
										<button class="btn btn-sm btn-outline-success btn-bold" onclick="gotRoulette('{{ $user['game_id'] }}', {{ $user['id'] }})">Setar Vencedor</button>
									</div>
									@endforeach
								</div>
							</div>
						</div>
						<div class="tab-pane" id="room_medium" role="tabpanel">
							<div class="kt-timeline-v1__item-body">
								<div class="kt-widget4" id="chance_medium">
									@foreach($chances_medium as $user)
									<div class="kt-widget4__item">
										<div class="kt-widget4__pic">
											<img src="{{ $user['avatar'] }}" alt="">
										</div>
										<div class="kt-widget4__info">
											<span class="kt-widget4__username">
												{{ $user['username'] }}
											</span>
											<p class="kt-widget4__text">
												{{ $user['sum'] }}р./{{ $user['chance'] }}%
											</p>
										</div>
										<button class="btn btn-sm btn-outline-success btn-bold" onclick="gotRoulette('{{ $user['game_id'] }}', {{ $user['id'] }})">Setar Vencedor</button>
									</div>
									@endforeach
								</div>
							</div>
						</div>
						<div class="tab-pane" id="room_hard" role="tabpanel">
							<div class="kt-timeline-v1__item-body">
								<div class="kt-widget4" id="chance_hard">
									@foreach($chances_hard as $user)
									<div class="kt-widget4__item">
										<div class="kt-widget4__pic">
											<img src="{{ $user['avatar'] }}" alt="">
										</div>
										<div class="kt-widget4__info">
											<span class="kt-widget4__username">
												{{ $user['username'] }}
											</span>
											<p class="kt-widget4__text">
												{{ $user['sum'] }}р./{{ $user['chance'] }}%
											</p>
										</div>
										<button class="btn btn-sm btn-outline-success btn-bold" onclick="gotRoulette('{{ $user['game_id'] }}', {{ $user['id'] }})">Setar Vencedor</button>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4">

			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Apostas no Jackpot
						</h3>
					</div>
				</div>
				<!--begin::Form-->
				<form class="kt-form">
					<div class="kt-portlet__body" style="height: 533px;">
						<div class="form-group">
							<label for="exampleSelect1">Selecione um Usuário</label>
							<select class="form-control" id="users_jackpot">
							@foreach($fake as $user)
								<option value="{{ $user->user_id }}">{{ $user->username }}</option>
							@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="exampleSelect1">Sala</label>
							<select class="form-control" id="room_jackpot">
								<option value="easy">Easy</option>
								<option value="medium">Medium</option>
								<option value="hard">Hard</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleSelect1">Aposta</label>
							<select class="form-control" id="balance_jackpot">
								<option value="balance">Saldo Real</option>
								<option value="bonus">Bônus</option>
							</select>
						</div>
						<div class="form-group">
							<label>Valor da Aposta</label>
							<input type="text" class="form-control" placeholder="valor da aposta" id="sum_jackpot">
						</div>
					</div>
					<div class="kt-portlet__foot">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-primary betJackpot">Apostar</button>
						</div>
					</div>
				</form>
				<!--end::Form-->
			</div>

		</div>
	</div>
	@endif
	<div class="row">
		<div class="col-xl-4">
			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							últimos depositos
						</h3>
					</div>
				</div>
				<div class="kt-portlet__body">
					<div class="kt-widget3 kt-scroll" data-scroll="true" data-height="616">
						@foreach($last_dep as $pay)
						<div class="kt-widget3__item">
							<div class="kt-widget3__header">
								<div class="kt-widget3__user-img">
									<img class="kt-widget3__img" src="{{$pay['avatar']}}" alt="">
								</div>
								<div class="kt-widget3__info">
									<a href="/admin/user/{{$pay['id']}}" class="kt-widget3__username">
									{{$pay['username']}}
									</a><br>
									<span class="kt-widget3__time">
									{{ Carbon\Carbon::parse($pay['date'])->diffForHumans() }}
									</span>
								</div>
								<span class="kt-widget3__status kt-font-success">
									<i class="la la-rub"></i> {{$pay['sum']}}
								</span>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4">
			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Últimos Cadastros
						</h3>
					</div>
				</div>
				<div class="kt-portlet__body">
					<div class="kt-widget3 kt-scroll" data-scroll="true" data-height="616">
						@foreach($users as $user)
						<div class="kt-widget3__item">
							<div class="kt-widget3__header">
								<div class="kt-widget3__user-img">
									<img class="kt-widget3__img" src="{{$user->avatar}}" alt="">
								</div>
								<div class="kt-widget3__info">
									<a href="/admin/user/{{$user->id}}" class="kt-widget3__username">
									{{$user->username}}
									</a><br>
									<span class="kt-widget3__time">
									</span>
								</div>
								<span class="kt-widget3__status kt-font-success">
								</span>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4">
			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Lista dos mais ricos
						</h3>
					</div>
				</div>
				<div class="kt-portlet__body">
					<div class="kt-widget3 kt-scroll" data-scroll="true" data-height="616">
						@foreach($userTop as $top)
						<div class="kt-widget3__item">
							<div class="kt-widget3__header">
								<div class="kt-widget3__user-img">
									<img class="kt-widget3__img" src="{{$top->avatar}}" alt="">
								</div>
								<div class="kt-widget3__info">
									<a href="/admin/user/{{$top->id}}" class="kt-widget3__username">
									{{$top->username}}
									</a>
								</div>
								<span class="kt-widget3__status kt-font-success">
									<i class="la la-rub"></i> {{ $top->balance }}
								</span>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
</div>

<script>
$(document).ready(function() {
	$.ajax({
		method: 'POST',
		url: '/admin/getUserByMonth',
		success: function (res) {
			var authChart = 'authChart';
			if ($('#'+authChart).length > 0) {
				var months = [];
				var users = [];

				$.each(res, function(index, data) {
					months.push(data.date);
					users.push(data.count);
				});

				var lineCh = document.getElementById(authChart).getContext("2d");

				var chart = new Chart(lineCh, {
					type: 'line',
					data: {
						labels: months,
						datasets: [{
							label: "",
							tension:0.4,
							backgroundColor: 'transparent',
							borderColor: '#2c80ff',
							pointBorderColor: "#2c80ff",
							pointBackgroundColor: "#fff",
							pointBorderWidth: 2,
							pointHoverRadius: 6,
							pointHoverBackgroundColor: "#fff",
							pointHoverBorderColor: "#2c80ff",
							pointHoverBorderWidth: 2,
							pointRadius: 6,
							pointHitRadius: 6,
							data: users,
						}]
					},
					options: {
						legend: {
							display: false
						},
						maintainAspectRatio: false,
						tooltips: {
							callbacks: {
								title: function(tooltipItem, data) {
									return 'Data : ' + data['labels'][tooltipItem[0]['index']];
								},
								label: function(tooltipItem, data) {
									return data['datasets'][0]['data'][tooltipItem['index']] + ' Usuario.' ;
								}
							},
							backgroundColor: '#eff6ff',
							titleFontSize: 13,
							titleFontColor: '#6783b8',
							titleMarginBottom:10,
							bodyFontColor: '#9eaecf',
							bodyFontSize: 14,
							bodySpacing:4,
							yPadding: 15,
							xPadding: 15,
							footerMarginTop: 5,
							displayColors: false
						},
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: true,
									fontSize:12,
									fontColor:'#9eaecf',
									stepSize: Math.ceil(users/5)
								},
								gridLines: {
									color: "#e5ecf8",
									tickMarkLength:0,
									zeroLineColor: '#e5ecf8'
								},

							}],
							xAxes: [{
								ticks: {
									beginAtZero: true,
									fontSize:12,
									fontColor:'#9eaecf',
									source: 'auto',
								},
								gridLines: {
									color: "transparent",
									tickMarkLength:20,
									zeroLineColor: '#e5ecf8',
								},
							}]
						}
					}
				});
			}
		}
	});
	$.ajax({
		method: 'POST',
		url: '/admin/getDepsByMonth',
		success: function (res) {
			var depsChart = 'depsChart';
			if ($('#'+depsChart).length > 0) {
				var months = [];
				var deps = [];

				$.each(res, function(index, data) {
					months.push(data.date);
					deps.push(data.sum);
				});

				var lineCh = document.getElementById(depsChart).getContext("2d");

				var chart = new Chart(lineCh, {
					type: 'line',
					data: {
						labels: months,
						datasets: [{
							label: "",
							tension:0.4,
							backgroundColor: 'transparent',
							borderColor: '#2c80ff',
							pointBorderColor: "#2c80ff",
							pointBackgroundColor: "#fff",
							pointBorderWidth: 2,
							pointHoverRadius: 6,
							pointHoverBackgroundColor: "#fff",
							pointHoverBorderColor: "#2c80ff",
							pointHoverBorderWidth: 2,
							pointRadius: 6,
							pointHitRadius: 6,
							data: deps,
						}]
					},
					options: {
						legend: {
							display: false
						},
						maintainAspectRatio: false,
						tooltips: {
							callbacks: {
								title: function(tooltipItem, data) {
									return 'Data : ' + data['labels'][tooltipItem[0]['index']];
								},
								label: function(tooltipItem, data) {
									return data['datasets'][0]['data'][tooltipItem['index']] + ' R$.' ;
								}
							},
							backgroundColor: '#eff6ff',
							titleFontSize: 13,
							titleFontColor: '#6783b8',
							titleMarginBottom:10,
							bodyFontColor: '#9eaecf',
							bodyFontSize: 14,
							bodySpacing:4,
							yPadding: 15,
							xPadding: 15,
							footerMarginTop: 5,
							displayColors: false
						},
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero:true,
									fontSize:12,
									fontColor:'#9eaecf',
									stepSize: Math.ceil(deps/5)
								},
								gridLines: {
									color: "#e5ecf8",
									tickMarkLength:0,
									zeroLineColor: '#e5ecf8'
								},

							}],
							xAxes: [{
								ticks: {
									fontSize:12,
									fontColor:'#9eaecf',
									source: 'auto',
								},
								gridLines: {
									color: "transparent",
									tickMarkLength:20,
									zeroLineColor: '#e5ecf8',
								},
							}]
						}
					}
				});
			}
		}
	});
});
</script>
@endsection
