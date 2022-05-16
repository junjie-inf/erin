@extends('templates.default')

@section('title', trans('sections.' . Route::currentRouteName() ))

@section('content')


	<!--=== Content Part ===-->
	<div class="container">

		<!-- Este apartado estará oculto, salvo para la app móvil -->

		<div class="row" id="notifications" style="display: none;">
			<div class="col-lg-12">
				<div class="box">
					<div class="box-header">
						<h2><i class="icon-tasks"></i> Notificaciones </h2>
					</div>

					<div class="box-content">
						<div class="row">
							<fieldset class="col-lg-12 col-sm-12" >
								<div class="well">
									<label>
										<input
											data-token=""
											type="checkbox"
											name="push"
											id="notifications-handler"
											disabled
										/>
										Notificaciones activadas
									</label>
								</div>
							</fieldset>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-12">
				<p class="text-center">REGÍSTRESE O INICIE SESIÓN PARA COMENZAR A PEDIR/VER SU HIPOTECA</p>
				<a href="{{ URL::route('auth.signup') }}"><button type="button" class="btn btn-inverse" data-loading-text="<i class='icon-spinner icon-spin'></i> Sending..." style="width:100%; color:white; background:#021F60">REGISTRARSE</button></a>
				<a href="{{ URL::route('landing') }}"><button type="button" class="btn btn-inverse" data-loading-text="<i class='icon-spinner icon-spin'></i> Sending..." style="width:100%; color:white; background:#021F60">INICIAR SESIÓN</button></a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				

					<div class="box-content">

					<div class="tab-content" id="tabContent" style="padding: 0px !important">
						<!--  Actual  dashboardHealth.b -->
						<div class="box-content tab-pane active" id="actual">

							<div class="well">

						<!--Cambiar en Docker-->
						<div class="box-content tab-pane" id="history">
							<div class="row"><!--/map calor-->
								<div class="col-xs-12">
									<div class="box">
										<div class="box-header level-2">
											<h2><i class="icon-globe"></i><span class="break"></span>Análisis Tweets</h2>
											<div class="box-icon">
												<a href="javascript:void(0)" class="btn background btn-minimize" style="padding: 0px;"><i class="icon-chevron-up backgroundColor backColor"></i></a>
											</div>
										</div>
										<div class="box-content">
											<div id='map_canvas' style="margin-left: 20%;" ></div>
										</div>
									</div>
								</div>
							</div><!--/mapa calor-->
						</div><!--Cambiar en Docker-->

						<div class="box-content tab-pane" id="history">
							<div class="row"><!--/map-->
								<div class="col-xs-12">
									<div class="box">
										<div class="box-header level-2">
											<h2><i class="icon-globe"></i><span class="break"></span>Compras sugeridas</h2>
											<div class="box-icon">
												<a href="javascript:void(0)" class="btn background btn-minimize" style="padding: 0px;"><i class="icon-chevron-up backgroundColor backColor"></i></a>
											</div>
										</div>
										<div class="box-content">
										<iframe id='ep-chart-8072b08e-dd20-40d5-839e-33746a096e31' src='https://www.epdata.es/embed/8072b08e-dd20-40d5-839e-33746a096e31/450' style='width: 100%; min-height: 450px; overflow: hidden;' frameborder='0' scrolling='no' height='450'></iframe>
										<iframe id='ep-chart-da9797eb-be38-4fec-8ffd-edebf0e508bf' src='https://www.epdata.es/embed/da9797eb-be38-4fec-8ffd-edebf0e508bf/450' style='width: 100%; min-height: 450px; overflow: hidden;' frameborder='0' scrolling='no' height='450'></iframe>
										<iframe id='ep-chart-b6265b87-3bd1-4f3b-9b07-d46e97b782ca-106' src='https://www.epdata.es/embed/b6265b87-3bd1-4f3b-9b07-d46e97b782ca-106/450' style='width: 100%; min-height: 450px; overflow: hidden;' frameborder='0' scrolling='no' height='450'></iframe>
										<iframe id='ep-chart-e3fab22d-a1a3-49f6-a777-5c44a2e66c86-106' src='https://www.epdata.es/embed/e3fab22d-a1a3-49f6-a777-5c44a2e66c86-106/450' style='width: 100%; min-height: 450px; overflow: hidden;' frameborder='0' scrolling='no' height='450'></iframe>
										</div>
									</div>
								</div>
							</div><!--/map-->
						</div>

					</div>
				</div>
			
		</div><!--/col-->
	</div><!--/col-->

	<!--=== End Content Part ===-->

<style type="text/css" style="display: none">
	.nvd3.multiChart .y2.axis .nv-axis line {
		stroke: none;
		fill: none;
	}
	.nvd3.multiChart .y1.axis .nv-axis line {
		opacity: 0.2;
	}
	.year-neighbor, .year-neighbor2 {
		/* Por si interesase en un futuro para eliminar el selector de años en el calendario
		visibility: hidden !important;
		*/
	}
	.prev, .next {
		/* Por si interesase en un futuro para eliminar el selector de años en el calendario
		display: none;
		*/
	}
	.btn-group button{
	    background-color: #8fcc00;
	}
	.btn-group  button.btn.active{
	    background-color: #c2ff33;
	}

	#gritter-notice-wrapper {
	    width: 600px;
	}
	.gritter-title {
	    text-shadow: 0px 0px 0 #000;
	}

	.gritter-item{
	    background-color: rgba(221, 42, 42, 0.66);
	    color: white;
	    font-size: 15px;
	}
</style>

@stop


@section('specific-javascript-plugins')
@stylesheets('cr_calendar')
@javascripts('cr_calendar')
@javascripts('cr_maps')
@stop

@section('custom-javascript')
<script>
$(document).ready(function(){


	// @todo Refactor. Only for test purposes
	
	$.get("heatMap")
		.success(function(data){
			console.log(data)
			/*Docker mapa de calor */
			google.load('visualization', '1', {'packages': ['geochart']});
			google.setOnLoadCallback(drawRegionsMap);

			function drawRegionsMap() {

				var dataMap = google.visualization.arrayToDataTable([["Country","Popularity"],["ES-MD",0.063675780918428],["ES-AN",0.049329244829245],["ES-AR",0.028150027056277],["ES-AS",-0.0038371212121212],["ES-IB",0.003125],["ES-CN",0.057904360424522],["ES-CB",0.006198347107438],["ES-CL",0],["ES-CM",0.22272727272727],["ES-CT",0.014882920110193],["ES-VC",0.051454545454546],["ES-EX",0],["ES-GA",0.025983977708116],["ES-MC",0.044444444444444],["ES-NC",0],["ES-PV",0.0021645021645022],["ES-RI",0.22237215909091],["ES-CE",0],["ES-ML",0.1023033008658]]);

				var options = {
					title: 'Spain',
					width: 650, 
					height: 400, 
					region: 'ES', 
					resolution: 'provinces',
					//colorAxis: {colors: ['#F80909', '#F77F0E', '#2EF70E']},
					colorAxis : {minValue: -1, maxValue: 1,  colors: ['#F80909', '#F77F0E', '#2EF70E']},
					//colorAxis : {maxValue: 1,  colors: ['#2EF70E']}
				};

				var container = document.getElementById('map_canvas');
				var geochart = new google.visualization.GeoChart(container);
				geochart.draw(dataMap, options);
			};

			});

});
</script>
@stop
