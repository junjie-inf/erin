@extends('templates.default')

@section('title', trans('sections.' . Route::currentRouteName()))

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
                            <fieldset class="col-lg-12 col-sm-12">
                                <div class="well">
                                    <label>
                                        <input data-token="" type="checkbox" name="push" id="notifications-handler"
                                            disabled />
                                        Notificaciones activadas
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header">
                        <h2><i class="icon-tasks"></i> Informe </h2>
                        <div class="box-icon">
                            <button id="refresh" class="btn background" style="padding: 0px;"><i
                                    class="icon-refresh backgroundColor backColor"></i></button>
                        </div>
                    </div>

                    <div class="box-content">
                        <div class="row">
                            <form class="form-horizontal col-lg-12 col-sm-12" enctype="multipart/form-data">

                                <fieldset class="col-lg-12 col-sm-12">

                                    <div class="form-group">
                                        <label class="control-label" for="select-person"> Clientes <i
                                                class="icon-spinner icon-spin" style="display:none"></i></label>
                                        <div class="controls">
                                            <select id="select-person" name="person" class="form-control"
                                                data-rel="chosen" data-placeholder="Elija un cliente...">
                                                <option></option>
                                                @foreach ($persons as $key => $person)
                                                    <option value="{{ $person->id }}">
                                                        {{ $person->surname . ', ' . $person->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                        <div class="well">
                            <ul class="nav nav-pills nav-justified enfermedad-seleccion">

                                @foreach ($enfermedades as $t)
                                    <!--Sólo para Pacientes-->
                                @endforeach
                            </ul>

                            <div class="tab-content" id="tabContent" style="padding: 0px !important">
                                <!--  Actual  dashboardHealth.b -->
                                <div class="box-content tab-pane active" id="actual">

                                    <div class="well">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="box margin-top-20">
                                                    <div class="box-header level-2">
                                                        <!-- Diagramas -->
                                                        <h2 class="reg-name"><i class="icon-bar-chart"></i> Dashboards </h2>
                                                        <div class="box-icon">
                                                            <a href="javascript:void(0)" class="btn background btn-minimize"
                                                                style="padding: 0px;"><i
                                                                    class="icon-chevron-up backgroundColor backColor"></i></a>
                                                        </div>
                                                    </div>

                                                    <!-- Diagramas/content -->
                                                    <div class="box-content">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-sm-6 tipo_cliente">
                                                                <div id="tipo_cliente" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 scoring_operacion">
                                                                <div id="scoring_operacion" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 scoring_cliente">
                                                                <div id="scoring_cliente" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->

                                                            <div class="col-lg-3 col-sm-6 acompanado">
                                                                <div id="acompanado" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 edad_otro">
                                                                <div id="edad_otro" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 tipo_trabajo">
                                                                <div id="tipo_trabajo" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 tipo_trabajo_otro">
                                                                <div id="tipo_trabajo_otro" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 edad">
                                                                <div id="edad" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->

                                                            <div class="col-lg-3 col-sm-6 duracion_hipoteca">
                                                                <div id="duracion_hipoteca" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 interes">
                                                                <div id="interes" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 ltv">
                                                                <div id="ltv" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 precio">
                                                                <div id="precio" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 ratio">
                                                                <div id="ratio" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 importe_financiado_dash">
                                                                <div id="importe_financiado_dash" class="sz1">
                                                                </div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 rmd_dash">
                                                                <div id="rmd_dash" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 importe_hipoteca_dash">
                                                                <div id="importe_hipoteca_dash" class="sz1">
                                                                </div>
                                                            </div>
                                                            <!--/col-->

                                                            <div class="col-lg-3 col-sm-6 ahorros">
                                                                <div id="ahorros" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 deuda">
                                                                <div id="deuda" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 importe_bonus">
                                                                <div id="importe_bonus" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 importe_bonus_otro">
                                                                <div id="importe_bonus_otro" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 neto_mensual">
                                                                <div id="neto_mensual" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 neto_mensual_otro">
                                                                <div id="neto_mensual_otro" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 numero_pagas">
                                                                <div id="numero_pagas" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                            <div class="col-lg-3 col-sm-6 numero_pagas_otro">
                                                                <div id="numero_pagas_otro" class="sz1"></div>
                                                            </div>
                                                            <!--/col-->
                                                        </div>
                                                    </div>
                                                    <!--<div class="row"></div>-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->

                                        <div class="row">
                                            <div class="col-xs-12 col-lg-6">
                                                <div class="box margin-top-20">
                                                    <div class="box-header level-2">
                                                        <h2><i class="icon-bolt"></i><span
                                                                class="break"></span>Información del usuario</h2>
                                                        <div class="box-icon">
                                                            <a href="javascript:void(0)" class="btn background btn-minimize"
                                                                style="padding: 0px;"><i
                                                                    class="icon-chevron-up backgroundColor backColor"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="box-content"
                                                        style="text-align:center;padding-bottom: 21px">
                                                        <div class="col-lg-6 col-xs-6">
                                                            <br>
                                                            <h2 class="inh_bold">Nombre</h2>
                                                            <dl id="personName"
                                                                class="dl-horizontal inh_nomargin-top person_data"></dl>
                                                            <br>
                                                            <h2 class="inh_bold">Genero</h2>
                                                            <dl id="personGender"
                                                                class="dl-horizontal inh_nomargin-top person_data"></dl>
                                                            <br>
                                                            <h2 class="inh_bold">Fecha de nacimiento</h2>
                                                            <dl id="PersonBirth"
                                                                class="dl-horizontal inh_nomargin-top person_data"></dl>
                                                        </div>
                                                        <div class="col-lg-6 col-xs-6"
                                                            style="border-left-style: solid;padding-bottom: 49px; border-width: 2px;">
                                                            <br>
                                                            <h2 class="inh_bold">Apellidos</h2>
                                                            <dl id="personSurname"
                                                                class="dl-horizontal inh_nomargin-top person_data"></dl>
                                                            <br>

                                                            <br>
                                                            <h2 class="inh_bold">Edad</h2>
                                                            <dl id="personAge"
                                                                class="dl-horizontal inh_nomargin-top person_data"></dl>
                                                        </div>
                                                        <span class="clearfix"></span>


                                                    </div>
                                                </div>
                                            </div>

                                            <!--<div class="col-xs-12 col-lg-12">-->
                                            <div class="col-xs-12 col-lg-6">
                                                <div class="box margin-top-20">
                                                    <div class="box-header level-2">
                                                        <h2><i class="icon-bar-chart"></i> Estado y Recomendaciones </h2>
                                                        <div class="box-icon">
                                                            <a href="javascript:void(0)"
                                                                class="btn background btn-minimize"
                                                                style="padding: 0px;"><i
                                                                    class="icon-chevron-up backgroundColor backColor"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="box-content">
                                                        <div id="doctorMp" class="col-lg-12"></div>
                                                        <div id="personDoctorReco" class="col-lg-12"></div>
                                                    </div>
                                                    <div class="row"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->


                                    </div>

                                    <!-- Todo bien parece -->


                                    <!-- CDA Actions -->


                                    <!--
           <div class="row">
            <div class="col-xs-12">
             <div class="box">
              <div class="box-header level-2">
               <h2><i class="icon-bolt"></i><span class="break"></span>Informacion del usuario</h2>
               <div class="box-icon">
                <a href="javascript:void(0)" class="btn background btn-minimize" style="padding: 0px;"><i class="icon-chevron-up backgroundColor backColor"></i></a>
               </div>
              </div>

              <div class="box-content">
               <div class="col-lg-6">
                <br>
                <h2 class="inh_bold">Nombre</h2>
                <dl id="personName" class="dl-horizontal inh_nomargin-top"></dl>
                <br>
                <h2 class="inh_bold">Genero</h2>
                <dl id="personGender" class="dl-horizontal inh_nomargin-top"></dl>
                <br>
                <h2 class="inh_bold">Fecha de nacimiento</h2>
                <dl id="PersonBirth" class="dl-horizontal inh_nomargin-top"></dl>
               </div>
               <div class="col-lg-6">
                <br>
                <h2 class="inh_bold">Apellidos</h2>
                <dl id="personSurname" class="dl-horizontal inh_nomargin-top"></dl>
                <br>
                <h2 class="inh_bold">Altura</h2>
                <dl id="personHeigth" class="dl-horizontal inh_nomargin-top"></dl>
                <br>
                <h2 class="inh_bold">Edad</h2>
                <dl id="personAge" class="dl-horizontal inh_nomargin-top"></dl>
               </div>
               <span class="clearfix"></span>


              </div>
             </div>
            </div>
           </div>
    -->

                                    <!--Cambiar en Docker-->
                                    <!--<div class="box-content tab-pane" id="history">
           <div class="row"><!--/map calor-->
                                    <!--<div class="col-xs-12">
             <div class="box">
              <div class="box-header level-2">
               <h2><i class="icon-globe"></i><span class="break"></span>Análisis Tweets</h2>
               <div class="box-icon">
                <a href="javascript:void(0)" class="btn background btn-minimize" style="padding: 0px;"><i class="icon-chevron-up backgroundColor backColor"></i></a>
               </div>
              </div>
              <div class="box-content">
               <div id='map_canvas'></div>
              </div>
             </div>
            </div>
           </div><!--/mapa calor-->
                                    <!--</div><!--Cambiar en Docker-->

                                    <!--<div class="box-content tab-pane" id="history">
           <div class="row"><!--/map-->
                                    <!--<div class="col-xs-12">
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
                                    <!--</div>-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/col-->
                </div>
                <!--/col-->

                <!--=== End Content Part ===-->

                <style type="text/css" style="display: none">
                    .nvd3.multiChart .y2.axis .nv-axis line {
                        stroke: none;
                        fill: none;
                    }

                    .nvd3.multiChart .y1.axis .nv-axis line {
                        opacity: 0.2;
                    }

                    .year-neighbor,
                    .year-neighbor2 {
                        /* Por si interesase en un futuro para eliminar el selector de años en el calendario
      visibility: hidden !important;
      */
                    }

                    .prev,
                    .next {
                        /* Por si interesase en un futuro para eliminar el selector de años en el calendario
      display: none;
      */
                    }

                    .btn-group button {
                        background-color: #8fcc00;
                    }

                    .btn-group button.btn.active {
                        background-color: #c2ff33;
                    }

                    #gritter-notice-wrapper {
                        width: 600px;
                    }

                    .gritter-title {
                        text-shadow: 0px 0px 0 #000;
                    }

                    .gritter-item {
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
                    $(document).ready(function() {


                        // @todo Refactor. Only for test purposes
                        // @author <joseantonio.garcia8@um.es>
                        $(document).ready(function() {

                            /** @var form DOM The Import CDA Form */
                            var form = $('#form-import-cda');


                            /** @var tmp_field DOM The input type file */
                            var tmp_field = form.find('[name="tmp"]');


                            /** @var field DOM The hidden type file the the encoded content */
                            var field = form.find('[name="file"]');


                            /** @var patient DOM  */
                            var patient = form.find('[name="id-patient"]');



                            // Send via Ajax
                            form.submit(function(e) {
                                $.ajax({
                                    url: 'importCDA',
                                    method: 'post',
                                    data: {
                                        'id-patient': patient.val(),
                                        'file': field.val()
                                    },
                                    success: function() {
                                        window.location.reload();
                                    }
                                });

                                return false;

                            });


                            // When a file is updated, it is converted to Base64 format
                            tmp_field.change(function(e) {

                                /** @var reader FileReader a FileReader */
                                var reader = new FileReader();

                                /** @var file File the uploaded file (a XML file) */
                                var file = tmp_field[0].files[0];


                                // The file has loaded into base64 format
                                reader.onloadend = function() {

                                    // Put the value
                                    field.val(reader.result);


                                    // Automatically submit the form
                                    form.trigger('submit');

                                }


                                // Read the data as base64
                                reader.readAsDataURL(file);
                            });
                        })


                        crHooks.push(function() {

                            // Actualizar el tamaño de algunos elementos a la ventana
                            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                                $(window).trigger('resize');
                            });

                            //setInterval(function(){ if ($('#select-person').val()) { viewPersonData(false);} }, 10000);
                            //$('#refresh').on('click', function(){ if ($('#select-person').val()) { viewPersonData();} } );

                            /* jQuery Chosen */
                            // Funcion para llamar al chosen cuando tiene muchos valores, actualiza los valores mediante peticiones ajax
                            // Se necesita una ruta a la que llamar para obtener los datos
                            // la ruta devuelve los datos y un count que se pasa por a la ruta para saber la ultima peticion
                            function setChosen(selectDiv, url, call) {

                                var select = $('#' + selectDiv);

                                $(select).chosen({
                                    width: '100%',
                                    no_results_text: "<i class='icon-spinner icon-spin'></i> Searching "
                                }).on('change', function(e) {

                                    @if (Auth::user()->admin || Auth::user()->role_id == 4 || Auth::user()->role_id == 3)
                                        getDiseases();
                                    @endif
                                    call();
                                });

                                var chosen = $(select).siblings('.chosen-container');
                                var count = 0;
                                var input = $(chosen).find('input:text');


                                // @todo. Hay un error aquí ya que se pierden los datos al usar el teclado
                                // para navegar. Desactivando esto funciona, pero es posible
                                // que alguna otra cosa se borre
                                //
                                // Para volver al comportamiento anterior, eliminar la línea return
                                //
                                // @author <joseantonio.garcia8@um.es>
                                return;
                                $(input).on('keyup', function(e) {
                                    var search = $(input).val();
                                    count++;
                                    $.get(url, {
                                            search: search,
                                            count: count
                                        })
                                        .success(function(data) {
                                            if (count == data['count']) {
                                                $(select).empty();
                                                $(select).append(new Option());
                                                for (i = 0; i < data['data'].length; i++) {
                                                    $(select).append(new Option(data['data'][i].id_real,
                                                        data['data'][i].id));
                                                }

                                                $(select).trigger("chosen:updated");
                                                $(input).val(search);

                                                if (data['data'].length == 0) {
                                                    $(select).next().find(".chosen-results").append(
                                                        '<li class="no-results">No result match "' + (
                                                            search) + '"</li>');
                                                }

                                            }
                                        });
                                });
                            }

                            function getDiseases() {
                                $.get("getDiseases", {
                                        user: $('#select-person').val()
                                    })
                                    .success(function(data) {
                                        //console.log($('#select-person').val())
                                        //console.warn(data);

                                        // CDA
                                        $('#export-cda-action').attr('href', 'getCDA/' + $('#select-person').val());


                                        $('#form-import-cda').find('[name="id-patient"]').val($('#select-person')
                                            .val());
                                        //console.warn( "Id de la persona seleccionada [Ok -  es este]: "+$('#select-person').val() );
                                        $(".enfermedad-seleccion").empty();
                                        /* Esto sólo muestra para médicos y administradores, para pacientes (ver más arriba) */
                                        //console.log(data['enfermedades'][0].id);
                                        $(".enfermedad-seleccion").append(
                                            '<li class="nav-item active ch-nav-s"><a class="nav-link" data-id="' +
                                            '0' + '" href="#">' + 'Resultado' + '</a></li>');
                                        $(".enfermedad-seleccion").append(
                                            '<li class="nav-item active ch-nav-s"><a class="nav-link" data-id="' +
                                            '632' + '" href="#">' + 'Cliente' + '</a></li>');
                                        $(".enfermedad-seleccion").append(
                                            '<li class="nav-item active ch-nav-s"><a class="nav-link" data-id="' +
                                            '636' + '" href="#">' + 'Estabilidad' + '</a></li>');
                                        $(".enfermedad-seleccion").append(
                                            '<li class="nav-item active ch-nav-s"><a class="nav-link" data-id="' +
                                            '637' + '" href="#">' + 'Recursos' + '</a></li>');

                                        viewPersonData();

                                        $(".enfermedad-seleccion li").on("click", function() {
                                            $('.treatments > ch').empty();
                                            $(this).addClass('active').siblings().removeClass('active');

                                            enfermedadSelection();

                                        });


                                    })
                            }

                            // funcion para generar el date picker
                            function setDateRangePicker(div, call) {
                                $('#' + div).daterangepicker({
                                    format: 'DD/MM/YYYY',
                                    ranges: {
                                        'Today': [moment(), moment()],
                                        'Yesterday': [moment().subtract('days', 1), moment().subtract('days',
                                            1)],
                                        'Last 7 Days': [moment().subtract('days', 6), moment()],
                                        'Last 30 Days': [moment().subtract('days', 29), moment()],
                                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                                        'Last Month': [moment().subtract('month', 1).startOf('month'), moment()
                                            .subtract('month', 1).endOf('month')
                                        ]
                                    },
                                    startDate: moment().subtract('days', 1),
                                    endDate: moment()
                                }, function(from, to) {

                                    self.from = from;
                                    self.to = to;

                                    call();

                                });
                            }



                            /* Funcion para generar la grafica de lineas */
                            /*
                            	lineData: [{
                            				'key': _label,
                            				'color' : _color,
                            				'values' : [{ 'x': _valorX, 'y': _valorY }, ..... ] },
                            				'type' : _tipo ( 'line', 'bar', ...),
                            				'yAxis' : _numEjeY}
                            			, ....]
                            */
                            function setLineChart(div, lineData, unit, unit2, byDay = true) {
                                //console.log("pasa char--"+div+"----"+ lineData +"----"+ unit+"----"+ unit2+"----"+ byDay);
                                nv.addGraph(function() {
                                    var chart = nv.models.multiChart()
                                        .margin({
                                            top: 30,
                                            right: 75,
                                            bottom: 100,
                                            left: 85
                                        })
                                        .useInteractiveGuideline(true);
                                    //.color(d3.scale.category10().range());

                                    chart.xAxis.tickFormat(function(d) {
                                        return d3.time.format(byDay ? '%d/%m/%Y' : '%d/%m/%Y %I %p')(
                                            new Date(d))
                                    });
                                    chart.yAxis1.tickFormat(function(d) {
                                        return d3.format(',.0f')(d) + ' ' + unit
                                    });
                                    chart.yAxis2.tickFormat(function(d) {
                                        return d3.format(',.0f')(d) + ' ' + unit2
                                    });
                                    //chart.yAxis2.tickFormat(function(d) { return d3.format(',.1f')(d) + ' º'});

                                    for (var line in lineData) {
                                        // Convertir los datos a numeros
                                        lineData[line].values.forEach(function(d) {
                                            d.y = +d.y;
                                        });

                                        // Ordenar datos
                                        lineData[line].values.sort(function(a, b) {
                                            if (a.x > b.x) {
                                                return 1;
                                            }
                                            if (a.x < b.x) {
                                                return -1;
                                            }
                                            // a must be equal to b
                                            return 0;
                                        })
                                    }

                                    d3.select('#' + div + ' svg')
                                        .datum(lineData)
                                        .transition().duration(500).call(chart);


                                    $('#' + div + ' svg g.nv-x text').attr('transform',
                                        'translate(45,45) rotate(45)');


                                    nv.utils.windowResize(function() {
                                        chart.update();
                                        $('#' + div + ' svg g.nv-x text').attr('transform',
                                            'translate(45,45) rotate(45)');
                                    });

                                    chart.legend.dispatch.on('legendClick', function() {
                                        setTimeout(function() {
                                            $('#' + div + ' svg g.nv-x text').attr('transform',
                                                'translate(45,45) rotate(45)');
                                        }, 1)
                                    });


                                    $('.nvtooltip').css('opacity',
                                    0); // Esconder los tooltip que se habian generado si se ha actualizado la grafica

                                    return chart;
                                });
                            }

                            // Funcion para generar la tabla de datos
                            function setDatatable(div, data, columns) {
                                // $("#"+div).dataTable().fnDestroy();
                                $("#" + div).dataTable().fnClearTable();

                                var thead = '';
                                for (var i in columns) {
                                    thead += '<tr></tr>'
                                }

                                $("#" + div + ' thead').html(thead);

                                $('#' + div).dataTable({
                                    "bDestroy": true,
                                    "paging": true,
                                    'columns': columns,
                                    'data': data
                                });
                            }

                            // funcion para generar el div de geolocalizacion
                            /*
                            	data : obtenidos de la funcion TemplateBuilder::with(template->fields)->answer(datum)->readonly()->build() del report
                            */
                            function setGeoData(geolocationDiv, geoinfoDiv, locationDiv, mapDiv, data) {
                                // GEOLOCATION INFORMATION

                                $("#" + geolocationDiv).attr('style', '');

                                var country = data.country ? data.country : '';
                                var city = data.city ? data.city : '';
                                var address = data.address ? data.address : '';

                                var geoinfo = "<dl id='" + geoinfoDiv + "' class='dl-horizontal inh_nomargin-top'>" +
                                    "<br>" +
                                    "<dt>Country</dt><dd>" + country + "</dd>" +
                                    "<dt>City</dt><dd>" + city + "</dd>" +
                                    "<dt>Address</dt><dd>" + address + "</dd>" +
                                    "<br />";
                                if (data.geo.type == 'Point') {
                                    geoinfo = geoinfo + "<dt>Latitude</dt><dd>" + data.geo.coordinates[1] + "</dd>";
                                    geoinfo = geoinfo + "<dt>Longitude</dt><dd>" + data.geo.coordinates[0] + "</dd>";
                                }
                                geoinfo = geoinfo + "</dl>";

                                $('#' + geoinfoDiv).replaceWith(geoinfo);

                                var location = "<h2 id='" + locationDiv +
                                    "' class='inh_bold'>Location <a href='{{ URL::to('/') }}/#" + data.id +
                                    "' class='blue inh_small pull-right'><i class='icon-search'></i> View in a big map</a></h2>";
                                $('#' + locationDiv).replaceWith(location);

                                $('img.static-map').each(function() {
                                    var $this = $(this),
                                        id = $this.data('id'),
                                        latitude = $this.data('latitude'),
                                        longitude = $this.data('longitude');

                                    // Relleno mapa del report
                                    url = GMaps.staticMapURL({
                                        size: [1000, 200],
                                        lat: latitude,
                                        lng: longitude,
                                        zoom: 16,
                                        scale: 2,
                                        markers: [{
                                            lat: latitude,
                                            lng: longitude,
                                            color: 'blue'
                                        }]
                                    });

                                    $this.attr('src', url);
                                });
                                // Relleno mapa del report
                                var canvas = $('#' + mapDiv),
                                    dimensions = {
                                        width: canvas.width(),
                                        height: canvas.height()
                                    };

                                var map = new google.maps.Map(document.getElementById(mapDiv), {
                                    center: new google.maps.LatLng(0, 0),
                                    zoom: 1
                                });

                                var geojson = data.geo;

                                CoolReport.drawFromGeoJSON(map, geojson);
                                CoolReport.zoomToGeoJSON(map, geojson);
                                $('#' + mapDiv).height(450).width('auto');

                                google.maps.event.trigger(map, 'resize');
                            }

                            function setAlertTimeline(div, data) {

                                $(div).html('');

                                for (var i in data) {
                                    var timeslot =
                                        $('<div class="timeslot">' +
                                            '<div class="task">' +
                                            '<span style="background: #fffbf4; border: 2px solid #fd8f05; !important">' +
                                            '<span class="type">' + data[i].title + '</span>' +
                                            '<span class="details">' + data[i].description + '</span>' +
                                            '<span> Creado en:' +
                                            '<span class="remaining">' + data[i].date + '</span>' +
                                            '</span>' +
                                            '</span>' +
                                            '</div>' +
                                            '<div class="icon" style="background: #fd8f05; border: #fd8f05; !important">' +
                                            '<i class="icon-bell" ></i>' +
                                            '</div>' +
                                            '<div class="time">' + data[i].date + '</div>' +
                                            '</div>');

                                    if (i % 2 == 1) {
                                        $(timeslot).addClass('alt');
                                    }

                                    $(div).append(timeslot);
                                }

                                $(window).trigger('resize');


                            }

                            function getPersonDataValues(data, keys) {
                                //console.log("getPersonDataValues--"+data +"---"+keys);
                                var values = [];

                                for (var key in keys) {
                                    values[keys[key]] = [];
                                }

                                for (var i in data) {
                                    for (var key in keys) {

                                        values[keys[key]].push({
                                            x: new Date(data[i]['fecha']),
                                            y: data[i][keys[key]]
                                        });
                                        //					 console.log(data[i][keys[key]], keys[key], data);
                                    }
                                }
                                return values;
                            }

                            var acompanado, edad, edad_otro, tipo_trabajo, tipo_trabajo_otro, duracion_hipoteca,
                                interes, ltv, precio, ratio,
                                ahorros, deuda, importe_bonus, importe_bonus_otro, neto_mensual, neto_mensual_otro,
                                numero_pagas, numero_pagas_otro,
                                importe_financiado_dash, rmd_dash, importe_hipoteca_dash;

                            function initGages(age, gender, data, init = true, id_report) {
                                //console.log(id_report);

                                var limits = {
                                    ages: [
                                        [16, 18],
                                        [19, 24],
                                        [25, 29],
                                        [30, 39],
                                        [40, 49],
                                        [50, 59],
                                        [60, Number.MAX_SAFE_INTEGER]
                                    ],
                                    male: {
                                        sistolic: [
                                            [105, 135],
                                            [105, 139],
                                            [108, 139],
                                            [110, 145],
                                            [110, 150],
                                            [115, 155],
                                            [115, 160]
                                        ],
                                        diastolic: [
                                            [60, 86],
                                            [62, 88],
                                            [65, 89],
                                            [68, 92],
                                            [70, 96],
                                            [70, 98],
                                            [70, 100]
                                        ]
                                    },
                                    female: {
                                        sistolic: [
                                            [100, 130],
                                            [100, 130],
                                            [102, 135],
                                            [105, 139],
                                            [105, 150],
                                            [110, 155],
                                            [115, 160]
                                        ],
                                        diastolic: [
                                            [60, 85],
                                            [60, 85],
                                            [60, 86],
                                            [65, 89],
                                            [65, 96],
                                            [70, 98],
                                            [70, 100]
                                        ]
                                    }
                                }

                                var diastolic = ['La tension diastólica es mas baja que la recomendada',
                                    'La tension diastólica está en los niveles recomendados',
                                    'La tension diastólica es mas alta que la recomendada'
                                ];
                                var sistolic = ['La tension sistólica es mas baja que la recomendada',
                                    'La tension sistólica está en los niveles recomendados',
                                    'La tension sistólica es mas alta que la recomendada'
                                ];
                                var spo2 = ['El oxigeno en sangre es demasiado bajo',
                                    'El oxigeno en sangre es muy bajo',
                                    'El oxigeno en sangre está en niveles normales'
                                ];
                                var imc = ['El peso está por debajo del recomendado',
                                    'El peso está en valores recomendados',
                                    'El peso está por encima del recomendado',
                                    'El peso está demasiado alto, puede afectar a su salud. Se le recomienda perder peso'
                                ];
                                var glucosa = ['La glucosa está por debajo del recomendado',
                                    'La glucosa está  en valores recomendados',
                                    'La glucosa está  por encima del recomendado',
                                    'La glucosa está demasiada alta, puede afectar a su salud. Se recomienda consultar a su médico'
                                ];
                                var frecResp = ['La frecuancia respiratoria está por debajo del recomendado',
                                    'La frecuancia respiratoria está  en valores recomendados',
                                    'La frecuancia respiratoria está  por encima del recomendado',
                                    'La frecuancia respiratoria está demasiada alta, puede afectar a su salud. Se recomienda consultar a su médico'
                                ];
                                var temp = ['La temperatura respiratoria está por debajo del recomendado',
                                    'La temperatura respiratoria está  en valores recomendados',
                                    'La temperatura respiratoria está  por encima del recomendado',
                                    'La temperatura respiratoria está demasiada alta, puede afectar a su salud. Se recomienda consultar a su médico'
                                ];

                                var i = 0;
                                for (i in limits.ages) {
                                    if (age <= limits.ages[i][1])
                                        break;
                                }
                                var g = (gender == 'Hombre') ? 'male' : 'female';

                                var s, d, sis, i;

                                if (id_report != 632) {
                                    $('.duracion_hipoteca').hide("slow");
                                    $('.interes').hide("slow");
                                    $('.ltv').hide("slow");
                                    $('.precio').hide("slow");
                                    $('.ratio').hide("slow");
                                    $('.importe_financiado_dash').hide("slow");
                                    $('.importe_hipoteca_dash').hide("slow");
                                    $('.rmd_dash').hide("slow");
                                }
                                if (id_report == 632) {
                                    $('.duracion_hipoteca').show(2000);
                                    $('.interes').show(2000);
                                    $('.ltv').show(2000);
                                    $('.precio').show(2000);
                                    $('.ratio').show(2000);
                                    $('.importe_financiado_dash').show(2000);
                                    $('.importe_hipoteca_dash').show(2000);
                                    $('.rmd_dash').show(2000);
                                }

                                if (id_report != 636) {
                                    $('.acompanado').hide("slow");
                                    $('.edad').hide("slow");
                                    $('.edad_otro').hide("slow");
                                    $('.tipo_trabajo').hide("slow");
                                    $('.tipo_trabajo_otro').hide("slow");
                                }
                                if (id_report == 636) {
                                    $('.acompanado').show(2000);
                                    $('.edad').show(2000);
                                    $('.edad_otro').show(2000);
                                    $('.tipo_trabajo').show(2000);
                                    $('.tipo_trabajo_otro').show(2000);
                                }
                                if (id_report != 637) {
                                    $('.ahorros').hide("slow");
                                    $('.deuda').hide("slow");
                                    $('.importe_bonus').hide("slow");
                                    $('.importe_bonus_otro').hide("slow");
                                    $('.neto_mensual').hide("slow");
                                    $('.neto_mensual_otro').hide("slow");
                                    $('.numero_pagas').hide("slow");
                                    $('.numero_pagas_otro').hide("slow");
                                }
                                if (id_report == 637) {
                                    $('.ahorros').show(2000);
                                    $('.deuda').show(2000);
                                    $('.importe_bonus').show(2000);
                                    $('.importe_bonus_otro').show(2000);
                                    $('.neto_mensual').show(2000);
                                    $('.neto_mensual_otro').show(2000);
                                    $('.numero_pagas').show(2000);
                                    $('.numero_pagas_otro').show(2000);

                                }

                                if (id_report != 0) {
                                    $('.tipo_cliente').hide("slow");
                                    $('.scoring_operacion').hide("slow");
                                    $('.scoring_cliente').hide("slow");
                                }
                                if (id_report == 0) {
                                    $('.tipo_cliente').show(2000);
                                    $('.scoring_operacion').show(2000);
                                    $('.scoring_cliente').show(2000);
                                }

                                //cliente
                                if (init) {
                                    //Estabilidad
                                    $('#acompanado').html('');
                                    acompanado = new JustGage({
                                        id: "acompanado",
                                        value: (data['estabilidad'][0]['acompanado'] == null ? 0 : data[
                                            'estabilidad'][0]['acompanado']),
                                        max: 100,
                                        min: 0,
                                        title: "Acompañado o no",
                                        label: '',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });


                                    $('#edad').html('');
                                    edad = new JustGage({
                                        id: "edad",
                                        value: (age == null ? 0 : age),
                                        max: 100,
                                        min: 0,
                                        title: "Edad",
                                        label: 'Años',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 24
                                        }, {
                                            color: "#57FB21",
                                            lo: 25,
                                            hi: 50
                                        }, {
                                            color: "#ff3b30",
                                            lo: 51,
                                            hi: 100
                                        }]
                                    });

                                    $('#edad_otro').html('');
                                    edad_otro = new JustGage({
                                        id: "edad_otro",
                                        value: (data['estabilidad'][0]['edad_otro'] == null ? 0 : data[
                                            'estabilidad'][0]['edad_otro']),
                                        max: 100,
                                        min: 0,
                                        title: "Edad Acompañante",
                                        label: 'Años',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 24
                                        }, {
                                            color: "#57FB21",
                                            lo: 25,
                                            hi: 50
                                        }, {
                                            color: "#ff3b30",
                                            lo: 51,
                                            hi: 100
                                        }]
                                    });

                                    $('#tipo_trabajo').html('');
                                    tipo_trabajo = new JustGage({
                                        id: "tipo_trabajo",
                                        value: (data['estabilidad'][0]['tipo_trabajo'] == null ? 0 : data[
                                            'estabilidad'][0]['tipo_trabajo']),
                                        max: 100,
                                        min: 0,
                                        title: "Trabajo",
                                        label: '%',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 49
                                        }, {
                                            color: "#57FB21",
                                            lo: 50,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    $('#tipo_trabajo_otro').html('');
                                    tipo_trabajo = new JustGage({
                                        id: "tipo_trabajo_otro",
                                        value: (data['estabilidad'][0]['tipo_trabajo_otro'] == null ? 0 : data[
                                            'estabilidad'][0]['tipo_trabajo_otro']),
                                        max: 100,
                                        min: 0,
                                        title: "Trabajo Acompañante",
                                        label: '%',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 49
                                        }, {
                                            color: "#57FB21",
                                            lo: 50,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    //Scores
                                    //calculos para la Hipoteca, decimales con puntos
                                    var scores = [];
                                    var precio_vivienda = data['hipoteca'][0]['precio'];
                                    scores['score_vivienda'] = 0;
                                    if (precio_vivienda < 49999.98) {
                                        scores['score_vivienda'] = 0;
                                    } else if (precio_vivienda > 49999.99 && precio_vivienda < 99999.98) {
                                        scores['score_vivienda'] = 5;
                                    } else if (precio_vivienda > 99999.99 && precio_vivienda < 149999.98) {
                                        scores['score_vivienda'] = 10;
                                    } else if (precio_vivienda > 149999.99 && precio_vivienda < 249999.98) {
                                        scores['score_vivienda'] = 15;
                                    } else if (precio_vivienda > 249999.99 && precio_vivienda < 399999.98) {
                                        scores['score_vivienda'] = 20;
                                    } else { //si es mayor
                                        scores['score_vivienda'] = 25;
                                    }

                                    //Financiacion
                                    var importe_financiado = precio_vivienda - data['recursos'][0]['ahorros'];
                                    scores['score_financiacion'] = 0;
                                    if (importe_financiado < 29999.98) {
                                        scores['score_financiacion'] = -5;
                                    } else if (importe_financiado > 29999.99 && importe_financiado < 49999.98) {
                                        scores['score_financiacion'] = 0;
                                    } else if (importe_financiado > 49999.99 && importe_financiado < 99999.98) {
                                        scores['score_financiacion'] = 3;
                                    } else if (importe_financiado > 99999.99 && importe_financiado < 149999.98) {
                                        scores['score_financiacion'] = 6;
                                    } else if (importe_financiado > 149999.99 && importe_financiado < 249999.98) {
                                        scores['score_financiacion'] = 8;
                                    } else { //si es mayor
                                        scores['score_financiacion'] = 10;
                                    }

                                    //deudas presentes
                                    var deuda = 0;
                                    if (data['recursos'][0]['deuda'] < 10000) {
                                        deuda = data['recursos'][0]['deuda'];
                                    }
                                    //deudas futuras(hipoteca)
                                    var interes = data['hipoteca'][0]['interes'];
                                    var plazos = data['hipoteca'][0]['duracion_hipoteca'] * 12;
                                    interes = (interes / 100) / 12;
                                    var importe_hipoteca = (importe_financiado * interes * (Math.pow((1 + interes), (
                                        plazos)))) / ((Math.pow((1 + interes), (plazos))) - 1);

                                    //rmd
                                    var rmd = data['recursos'][0]['neto_mensual'] - deuda - importe_hipoteca;

                                    scores['score_rmd'] = 0;
                                    if (rmd < 999.98) {
                                        scores['score_rmd'] = 0;
                                    } else if (rmd > 999.99 && rmd < 1499.98) {
                                        scores['score_rmd'] = 5;
                                    } else if (rmd > 1499.99 && rmd < 1999.98) {
                                        scores['score_rmd'] = 10;
                                    } else if (rmd > 1999.99 && rmd < 2499.98) {
                                        scores['score_rmd'] = 15;
                                    } else if (rmd > 2499.99 && rmd < 3499.98) {
                                        scores['score_rmd'] = 20;
                                    } else { //si es mayor
                                        scores['score_rmd'] = 25;
                                    }

                                    //ahorros
                                    var ahorros = data['recursos'][0]['ahorros'];
                                    scores['score_ahorros'] = 0;
                                    if (ahorros < 49999.98) {
                                        scores['score_ahorros'] = 0;
                                    } else if (ahorros > 49999.99 && ahorros < 99999.98) {
                                        scores['score_ahorros'] = 2;
                                    } else if (ahorros > 99999.99 && ahorros < 149999.98) {
                                        scores['score_ahorros'] = 4;
                                    } else if (ahorros > 149999.99 && ahorros < 199999.98) {
                                        scores['score_ahorros'] = 6;
                                    } else if (ahorros > 199999.99 && ahorros < 249999.98) {
                                        scores['score_ahorros'] = 8;
                                    } else { //si es mayor
                                        scores['score_ahorros'] = 10;
                                    }

                                    //ratio de esfuerzo
                                    var ratio_esfuerzo = ((0 + importe_hipoteca) / data['recursos'][0][
                                        'neto_mensual']) * 100;
                                    console.log(importe_hipoteca);
                                    scores['score_ratio'] = 0;
                                    if (ratio_esfuerzo < 24.98) {
                                        scores['score_ratio'] = 20;
                                    } else if (ratio_esfuerzo > 24.99 && ratio_esfuerzo < 29.98) {
                                        scores['score_ratio'] = 15;
                                    } else if (ratio_esfuerzo > 29.99 && ratio_esfuerzo < 34.98) {
                                        scores['score_ratio'] = 10;
                                    } else if (ratio_esfuerzo > 35.99 && ratio_esfuerzo < 39.98) {
                                        scores['score_ratio'] = 5;
                                    } else {
                                        scores['score_ratio'] = 0;
                                    }

                                    //ltv
                                    var loantovalue = ((precio_vivienda - ahorros) / precio_vivienda) * 100;
                                    scores['score_ltv'] = 0;
                                    if (loantovalue < 49.99) {
                                        scores['score_ltv'] = 10;
                                    } else if (loantovalue > 50 && loantovalue < 69.99) {
                                        scores['score_ltv'] = 7;
                                    } else if (loantovalue > 70 && loantovalue < 79.99) {
                                        scores['score_ltv'] = 5;
                                    } else if (loantovalue > 80 && loantovalue < 89.99) {
                                        scores['score_ltv'] = 2;
                                    } else {
                                        scores['score_ltv'] = 0;
                                    }

                                    //calculos del score delcliente y de la operacion
                                    scores['score_cliente'] = scores['score_ratio'] + scores['score_rmd'] + scores[
                                        'score_ltv'];
                                    scores['score_operacion'] = scores['score_vivienda'] + scores[
                                        'score_financiacion'] + scores['score_ahorros'];
                                    //scoring operacion-> precio vivienda, importe hipoteca, ahorros
                                    scores['score_operacion'] = (scores['score_operacion'] / 45) * 100
                                    scores['score_cliente'] = (scores['score_cliente'] / 55) * 100

                                    scores['score_total'] = 0.6 * scores['score_cliente'] + 0.4 * scores[
                                        'score_operacion'];

                                    //calculamos el tipo de Cliente
                                    if (scores['score_cliente'] > 0 && scores['score_cliente'] < 15 && scores[
                                            'score_operacion'] <= 10) {
                                        scores['tipo_cliente'] = 4.2;
                                    } else if (scores['score_cliente'] > 15.01 && scores['score_cliente'] < 40 &&
                                        scores['score_operacion'] <= 10) {
                                        scores['tipo_cliente'] = 4.2;
                                    } else if (scores['score_cliente'] > 40.01 && scores['score_cliente'] < 60 &&
                                        scores['score_operacion'] <= 10) {
                                        scores['tipo_cliente'] = 4.2;
                                    } else if (scores['score_cliente'] > 60.01 && scores['score_cliente'] < 100 &&
                                        scores['score_operacion'] <= 10) {
                                        scores['tipo_cliente'] = 4.2;
                                    } else if (scores['score_cliente'] > 0 && scores['score_cliente'] < 15 && scores[
                                            'score_operacion'] > 10 && scores['score_operacion'] < 40) {
                                        scores['tipo_cliente'] = 4.1;
                                    } else if (scores['score_cliente'] > 15.01 && scores['score_cliente'] < 40 &&
                                        scores['score_operacion'] > 10 && scores['score_operacion'] < 40) {
                                        scores['tipo_cliente'] = 3.2;
                                    } else if (scores['score_cliente'] > 40.01 && scores['score_cliente'] < 60 &&
                                        scores['score_operacion'] > 10 && scores['score_operacion'] < 40) {
                                        scores['tipo_cliente'] = 3.2;
                                    } else if (scores['score_cliente'] > 60.01 && scores['score_cliente'] < 100 &&
                                        scores['score_operacion'] > 10 && scores['score_operacion'] < 40) {
                                        scores['tipo_cliente'] = 3.2;
                                    } else if (scores['score_cliente'] > 0 && scores['score_cliente'] < 15 && scores[
                                            'score_operacion'] >= 40 && scores['score_operacion'] < 60) {
                                        scores['tipo_cliente'] = 4.0;
                                    } else if (scores['score_cliente'] > 15.01 && scores['score_cliente'] < 40 &&
                                        scores['score_operacion'] >= 40 && scores['score_operacion'] < 60) {
                                        scores['tipo_cliente'] = 3.1;
                                    } else if (scores['score_cliente'] > 40.01 && scores['score_cliente'] < 60 &&
                                        scores['score_operacion'] >= 40 && scores['score_operacion'] < 60) {
                                        scores['tipo_cliente'] = 2.4;
                                    } else if (scores['score_cliente'] > 60.01 && scores['score_cliente'] < 100 &&
                                        scores['score_operacion'] >= 40 && scores['score_operacion'] < 60) {
                                        scores['tipo_cliente'] = 2.2;
                                    } else if (scores['score_cliente'] > 0 && scores['score_cliente'] < 15 && scores[
                                            'score_operacion'] >= 60 && scores['score_operacion'] < 80) {
                                        scores['tipo_cliente'] = 4.0;
                                    } else if (scores['score_cliente'] > 15.01 && scores['score_cliente'] < 40 &&
                                        scores['score_operacion'] >= 60 && scores['score_operacion'] < 80) {
                                        scores['tipo_cliente'] = 2.3;
                                    } else if (scores['score_cliente'] > 40.01 && scores['score_cliente'] < 60 &&
                                        scores['score_operacion'] >= 60 && scores['score_operacion'] < 80) {
                                        scores['tipo_cliente'] = 2.3;
                                    } else if (scores['score_cliente'] > 60.01 && scores['score_cliente'] < 100 &&
                                        scores['score_operacion'] >= 60 && scores['score_operacion'] < 80) {
                                        scores['tipo_cliente'] = 1.2;
                                    } else if (scores['score_cliente'] > 0 && scores['score_cliente'] < 15 && scores[
                                            'score_operacion'] >= 80 && scores['score_operacion'] < 100) {
                                        scores['tipo_cliente'] = 4.0;
                                    } else if (scores['score_cliente'] > 15.01 && scores['score_cliente'] < 40 &&
                                        scores['score_operacion'] >= 80 && scores['score_operacion'] < 100) {
                                        scores['tipo_cliente'] = 2.1;
                                    } else if (scores['score_cliente'] > 40.01 && scores['score_cliente'] < 60 &&
                                        scores['score_operacion'] >= 80 && scores['score_operacion'] < 100) {
                                        scores['tipo_cliente'] = 2.1;
                                    } else if (scores['score_cliente'] > 60.01 && scores['score_cliente'] < 100 &&
                                        scores['score_operacion'] >= 80 && scores['score_operacion'] < 100) {
                                        scores['tipo_cliente'] = 1.1;
                                    }
                                    console.log(scores);



                                    $('#importe_financiado_dash').html('');
                                    importe_financiado_dash = new JustGage({
                                        id: "importe_financiado_dash",
                                        value: (importe_financiado == null ? 0 : importe_financiado),
                                        max: 100,
                                        min: 0,
                                        title: "Importe Financiado",
                                        label: 'Euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });


                                    $('#importe_hipoteca_dash').html('');
                                    importe_hipoteca_dash = new JustGage({
                                        id: "importe_hipoteca_dash",
                                        value: (importe_hipoteca == null ? 0 : importe_hipoteca),
                                        max: 100,
                                        min: 0,
                                        title: "Importe Hipoteca",
                                        label: 'Euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });



                                    $('#rmd_dash').html('');
                                    rmd_dash = new JustGage({
                                        id: "rmd_dash",
                                        value: (rmd == null ? 0 : rmd),
                                        max: 100,
                                        min: 0,
                                        title: "RMD",
                                        label: 'Euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    $('#duracion_hipoteca').html('');
                                    duracion_hipoteca = new JustGage({
                                        id: "duracion_hipoteca",
                                        value: (data['hipoteca'][0]['duracion_hipoteca'] == null ? 0 : data[
                                            'hipoteca'][0]['duracion_hipoteca'] * 12),
                                        max: 120,
                                        min: 0,
                                        title: "Duración Hipoteca",
                                        label: 'meses',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    $('#interes').html('');
                                    interes = new JustGage({
                                        id: "interes",
                                        decimals: 0,
                                        value: (data['hipoteca'][0]['interes'] == null ? 0 : data['hipoteca'][0]
                                            ['interes']),
                                        max: 3,
                                        min: 0,
                                        title: "Interés",
                                        label: '%',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 3,
                                            hi: 2
                                        }, {
                                            color: "#57FB21",
                                            lo: 2,
                                            hi: 1
                                        }, {
                                            color: "#57FB21",
                                            lo: 1,
                                            hi: 0
                                        }]
                                    });

                                    $('#precio').html('');
                                    precio = new JustGage({
                                        id: "precio",
                                        value: (data['hipoteca'][0]['precio'] == null ? 0 : data['hipoteca'][0][
                                            'precio'
                                        ]),
                                        max: 100,
                                        min: 0,
                                        title: "Precio Vivienda",
                                        label: 'euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    $('#ltv').html('');
                                    ltv = new JustGage({
                                        id: "ltv",
                                        value: (loantovalue == null ? 0 : loantovalue),
                                        max: 100,
                                        min: 0,
                                        title: "Loan to Value",
                                        label: '%',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    //console.log(ratio_esfuerzo);
                                    $('#ratio').html('');
                                    ratio = new JustGage({
                                        id: "ratio",
                                        value: (ratio_esfuerzo == null ? 0 : ratio_esfuerzo),
                                        max: 100,
                                        min: 0,
                                        title: "Ratio de Esfuerzo",
                                        label: '%',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    //Recursos
                                    $('#ahorros').html('');
                                    ahorros = new JustGage({
                                        id: "ahorros",
                                        value: (data['recursos'][0]['ahorros'] == null ? 0 : data['recursos'][0]
                                            ['ahorros']),
                                        max: 100,
                                        min: 0,
                                        title: "Ahorros",
                                        label: 'euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    $('#deuda').html('');
                                    deuda = new JustGage({
                                        id: "deuda",
                                        value: (data['recursos'][0]['deuda'] == null ? 0 : data['recursos'][0][
                                            'deuda'
                                        ]),
                                        max: 100,
                                        min: 0,
                                        title: "Deudas",
                                        label: 'euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    $('#importe_bonus').html('');
                                    importe_bonus = new JustGage({
                                        id: "importe_bonus",
                                        value: (data['recursos'][0]['importe_bonus'] == null ? 0 : data[
                                            'recursos'][0]['importe_bonus']),
                                        max: 100,
                                        min: 0,
                                        title: "Importe Bonus",
                                        label: 'euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    $('#importe_bonus_otro').html('');
                                    importe_bonus_otro = new JustGage({
                                        id: "importe_bonus_otro",
                                        value: (data['recursos'][0]['importe_bonus_otro'] == null ? 0 : data[
                                            'recursos'][0]['importe_bonus_otro']),
                                        max: 100,
                                        min: 0,
                                        title: "Importe Bonus Acompañante",
                                        label: 'euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    $('#neto_mensual').html('');
                                    neto_mensual = new JustGage({
                                        id: "neto_mensual",
                                        value: (data['recursos'][0]['neto_mensual'] == null ? 0 : data[
                                            'recursos'][0]['neto_mensual']),
                                        max: 100,
                                        min: 0,
                                        title: "Neto mensual",
                                        label: 'euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    $('#neto_mensual_otro').html('');
                                    neto_mensual_otro = new JustGage({
                                        id: "neto_mensual_otro",
                                        value: (data['recursos'][0]['neto_mensual_otro'] == null ? 0 : data[
                                            'recursos'][0]['neto_mensual_otro']),
                                        max: 100,
                                        min: 0,
                                        title: "Neto mensual Acompañante",
                                        label: 'euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    $('#numero_pagas').html('');
                                    numero_pagas = new JustGage({
                                        id: "numero_pagas",
                                        value: (data['recursos'][0]['numero_pagas'] == null ? 0 : data[
                                            'recursos'][0]['numero_pagas']),
                                        max: 100,
                                        min: 0,
                                        title: "Número de pagas",
                                        label: 'euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    $('#numero_pagas_otro').html('');
                                    numero_pagas = new JustGage({
                                        id: "numero_pagas_otro",
                                        value: (data['recursos'][0]['numero_pagas_otro'] == null ? 0 : data[
                                            'recursos'][0]['numero_pagas_otro']),
                                        max: 100,
                                        min: 0,
                                        title: "Número de pagas Acompañante",
                                        label: 'euros',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    var scoring_operacion = scores['score_operacion'];
                                    $('#scoring_operacion').html('');
                                    scoring_operacion = new JustGage({
                                        id: "scoring_operacion",
                                        value: (scoring_operacion == null ? 0 : scoring_operacion),
                                        decimals: 2,
                                        max: 100,
                                        min: 0,
                                        title: "Scoring Operación",
                                        label: '%',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    var scoring_cliente = scores['score_cliente'];
                                    $('#scoring_cliente').html('');
                                    scoring_cliente = new JustGage({
                                        id: "scoring_cliente",
                                        value: (scoring_cliente == null ? 0 : scoring_cliente),
                                        decimals: 2,
                                        max: 100,
                                        min: 0,
                                        title: "Scoring Cliente",
                                        label: '%',
                                        customSectors: [{
                                            color: "#ff3b30",
                                            lo: 0,
                                            hi: 50
                                        }, {
                                            color: "#57FB21",
                                            lo: 51,
                                            hi: 75
                                        }, {
                                            color: "#57FB21",
                                            lo: 76,
                                            hi: 100
                                        }]
                                    });

                                    var tipo_cliente = scores['tipo_cliente'];
                                    $('#tipo_cliente').html('');
                                    tipo_cliente = new JustGage({
                                        id: "tipo_cliente",
                                        value: (tipo_cliente == null ? 0 : tipo_cliente),
                                        decimals: 1,
                                        max: 4.2,
                                        min: 0,
                                        title: "Tipo Cliente",
                                        label: '',
                                        customSectors: [{
                                            color: "#57FB21",
                                            lo: 1,
                                            hi: 2
                                        }, {
                                            color: "#f5bb22",
                                            lo: 2,
                                            hi: 3
                                        }, {
                                            color: "#ec891f",
                                            lo: 3,
                                            hi: 4
                                        }, {
                                            color: "#ff3b30",
                                            lo: 4,
                                            hi: 5
                                        }]
                                    });
                                    viewRecoHipoteca(scores)

                                } else {
                                    gBPD.refresh(data['diastolic'] == null ? 0 : data['diastolic']);
                                    gBPS.refresh(data['sistolic'] == null ? 0 : data['sistolic']);
                                    gSo2.refresh(data['spo2'] == null ? 0 : data['spo2']);
                                    gW.refresh(data['imc'] == null ? 0 : data['imc']);
                                    glucosa.refresh(data['glucosa'] == null ? 0 : data['glucosa']);
                                    frecResp.refresh(data['frecResp'] == null ? 0 : data['frecResp']);
                                    temp.refresh(data['temp'] == null ? 0 : data['temp']);
                                }

                                $('#gBPD,#gBPS,#gSo2,#gW,#glucosa').attr('data-toggle', 'tooltip');
                                $('#gBPD').attr('title', '<h5>' + diastolic[d] + '<h5>');
                                $('#gBPS').attr('title', '<h5>' + sistolic[sis] + '<h5>');
                                $('#gSo2').attr('title', '<h5>' + spo2[s] + '<h5>');
                                $('#gW').attr('title', '<h5>' + imc[i] + '<h5>');
                                $('#glucosa').attr('title', '<h5>' + glucosa[i] + '<h5>');
                                $('#frecResp').attr('title', '<h5>' + frecResp[i] + '<h5>');
                                $('#temp').attr('title', '<h5>' + temp[i] + '<h5>');

                                $('[data-toggle="tooltip"]').tooltip({
                                    html: "true",
                                    placement: "auto-bottom"
                                });

                                //			console.log('gBPD',gBPD,'gBPS',gBPS,'gSo2',gSo2,'gW',gW,'glucosa',glucosa, 'frecResp', frecResp, 'temp', temp);

                            }

                            function viewRecoHipoteca(scores) {
                                userSelected = "";
                                @if (Auth::user()->admin || Auth::user()->role_id == 4)
                                    userSelected = $('#select-person').val();
                                @else
                                    userSelected = {{ $user }};
                                @endif

                                // RECOMENDACIÓN del médico
                                $.get("personDoctorReco", {
                                        person: userSelected,
                                        score: scores['tipo_cliente']
                                    })
                                    .success(function(data) {
                                        if ($("#cp").length) $("#cp").empty();
                                        $('#personDoctorReco').append('<div id ="cp">');
                                        if (data['resultado'] == 'Si') {
                                            $('<h3 class="reco_doct"><p>Hipoteca concedida</p></h3>').appendTo(
                                                "#cp");
                                        } else if (data['resultado'] == 'No') {
                                            $('<h3 class="reco_doct"><p>Hipoteca no concedida, revise sus datos</p></h3>')
                                                .appendTo("#cp");
                                        }

                                        try {
                                            if (data['resultado'] != null) {
                                                data.mensajes.forEach(function(element) {
                                                    console.log(element)
                                                    //console.warn(element);
                                                    $('<p class="content_reco_doct"><b>' + element +
                                                        '</b></p>').appendTo("#cp");
                                                });
                                            }
                                        } catch (e) {
                                            console.error("Error: lectura del json");
                                        };
                                    });
                            }


                            //viewPersonData();
                            function viewPersonData(init = true, scores) {

                                userSelected = "";
                                @if (Auth::user()->admin || Auth::user()->role_id == 4)
                                    userSelected = $('#select-person').val();
                                @else
                                    userSelected = {{ $user }};
                                @endif
                                //console.log(userSelected);
                                // RECOMENDACIÓN del médico
                                /*$.get( "personDoctorReco",{ person: userSelected  } )
                                	.success(function(data)
                                	{
                                		if($("#cp").length) $("#cp").empty();
                                		$('#personDoctorReco').append('<div id ="cp">');
                                		
                                		try
                                		{
                                			data.mensajes.forEach(function(element)
                                			{
                                				//console.warn(element);
                                				$('<h3 class="reco_doct"><p>'+element[1]+' | '+element[2]+'</p></h3>').appendTo("#cp");
                                				$('<p class="content_reco_doct"><b>'+element[3]+'</b></p>').appendTo("#cp");
                                			});
                                		}
                                		catch (e)
                                		{
                                			console.error("Error: lectura del json");
                                		};
                                	});*/
                                /* . $get "personDoctorReco" */


                                //			console.log(init);

                                $.get("personInfo", {
                                        person: $('#select-person').val(),
                                        enfermedad: $(".enfermedad-seleccion").find(".active > a").attr('data-id')
                                    })
                                    .success(function(data) {
                                        var id_report = $(".enfermedad-seleccion").find(".active > a").attr(
                                            'data-id');

                                        //					console.log('personInfo', data);

                                        $('#personName').text(data['info']['name']);
                                        $('#personSurname').text(data['info']['surname']);
                                        $('#personGender').text(data['info']['gender']);
                                        $('#personHeigth').text(data['info']['height']);
                                        $('#personAge').text(data['info']['age']);

                                        // var birth = new Date(data['birth']);
                                        var birth = null;

                                        if (data['info']['birth'].search(/-/) != -1)
                                            birth = moment(data['info']['birth'], "YYYY-MM-DD");
                                        else
                                            birth = moment(data['info']['birth'], "DD/MM/YYYY");

                                        $('#PersonBirth').text(birth.format("DD-MM-YYYY"));


                                        initGages(data['info']['age'], data['info']['gender'], data, init,
                                            id_report);

                                        $('#personState').html('');

                                        $('#personTreatments').html('');

                                        // Recomendaciones de tratamiento que está funcionando en otros pacientes
                                        if (data['tratamiento'] == null) {
                                            $('#personTreatments').html(
                                                "<h2><b>No se ha encontrado ninguna recomendación</b></h2>");
                                        } else {
                                            var state = '';
                                            for (var i in data['tratamiento']) {
                                                $('#personTreatments').append('<h2><b>Paciente con ' + i +
                                                    '</b></h2>');

                                                for (var ii in data['recomendaciones'][i]['warning']) {
                                                    $('#personTreatments').append('<p>' + data['recomendaciones'][i]
                                                        ['warning'][ii] + '</p>');
                                                }

                                                for (var ii in data['recomendaciones'][i]['critical']) {
                                                    $('#personTreatments').append('<p><b>' + data['recomendaciones']
                                                        [i]['critical'][ii] + '</b></p>');
                                                }
                                            }
                                        }

                                    })
                            }

                            function setPersonData(data, type) {
                                var data_attr = {
                                    bp: {
                                        columns: ['sistolic', 'diastolic', 'pulse'],
                                        key: ['Sistólica', 'Diastólica', 'Pulso'],
                                        color: ['red', 'blue', 'green'],
                                        type: ['line', 'line', 'line'],
                                        yAxis: ['1', '1', '2'],
                                        disabled: [false, false, true],
                                        axis_labels: ['mmHg', 'latidos/m']
                                    },
                                    spo2: {
                                        columns: ['spo2'],
                                        key: ['Oxigeno en sangre'],
                                        color: ['blue'],
                                        type: ['line'],
                                        yAxis: ['1'],
                                        disabled: [false],
                                        axis_labels: ['%', '']
                                    },
                                    weight: {
                                        columns: ['peso', 'imc'],
                                        key: ['Peso', 'IMC'],
                                        color: ['red', 'blue'],
                                        type: ['line', 'line'],
                                        yAxis: ['1', '1'],
                                        disabled: [false, false],
                                        axis_labels: ['Kg', 'Kg/m^2']
                                    },

                                    glucosa: {
                                        columns: ['glucosa', 'mg/dl'],
                                        key: ['mg/dl'],
                                        color: ['red', 'blue'],
                                        type: ['line', 'line'],
                                        yAxis: ['1', '1'],
                                        disabled: [false, false],
                                        axis_labels: ['Kg', 'mg/dl']
                                    },

                                    frecResp: {
                                        columns: ['frecResp', 'mg/dl'],
                                        key: ['mg/dl'],
                                        color: ['red', 'blue'],
                                        type: ['line', 'line'],
                                        yAxis: ['1', '1'],
                                        disabled: [false, false],
                                        axis_labels: ['Kg', 'mg/dl']
                                    },

                                    temp: {
                                        columns: ['temp', 'mg/dl'],
                                        key: ['mg/dl'],
                                        color: ['red', 'blue'],
                                        type: ['line', 'line'],
                                        yAxis: ['1', '1'],
                                        disabled: [false, false],
                                        axis_labels: ['Kg', 'mg/dl']
                                    },

                                }

                                var data_values = getPersonDataValues(data[type], data_attr[type]['columns']);

                                var lineData = [];
                                var tableColumns = [{
                                    title: 'fecha',
                                    className: 'text-center',
                                    data: 'fecha'
                                }];

                                for (var i in data_attr[type]['key']) {
                                    lineData.push({
                                        key: data_attr[type]['key'][i],
                                        color: data_attr[type]['color'][i],
                                        values: data_values[data_attr[type]['columns'][i]],
                                        type: data_attr[type]['type'][i],
                                        yAxis: data_attr[type]['yAxis'][i],
                                        disabled: data_attr[type]['disabled'][i]
                                    });

                                    tableColumns.push({
                                        title: data_attr[type]['key'][i],
                                        className: 'text-center',
                                        data: data_attr[type]['columns'][i]
                                    })
                                }
                                /*console.log("lineData" );
                                console.log(lineData );
                                console.log(data_attr[type]['axis_labels'][0]);
                                console.log(data_attr[type]['axis_labels'][1]);
                                */
                                setLineChart('linechart', lineData, data_attr[type]['axis_labels'][0], data_attr[type][
                                    'axis_labels'
                                ][1]);

                                setDatatable("datatable", data[type], tableColumns);

                                // var columns = [
                                // 	{title: 'Fecha', className: 'text-center', data: 'timestamp'},
                                // 	{title: 'Entradas (' + formatedMaxCTValue + ')', className: 'text-center', data: 'entradas'},
                                // 	{title: 'Salidas (' + formatedMaxCTValue + ')', className: 'text-center', data: 'salidas'},
                                // 	{title: 'eControl Cabecera (' + formatedMaxCTValue + ')', className: 'text-center', data: 'econtrol'},
                                // 	{title: 'Suministros / eControl Frontera (' + formatedMaxCTValue + ')', className: 'text-center', data: 'datasuministros'},
                                // 	{title: 'Pérdidas (%)', className: 'text-center', data: 'perdidas'}
                                // ];
                                // console.log(data[type]);

                                // var bp = getPersonDataValues(data['bp'], ['sistolic', 'diastolic', 'pulse']);
                                // var spo2 = getPersonDataValues(data['spo2'], ['spo2']);
                                // var weight = getPersonDataValues(data['weight'], ['peso', 'imc']);

                                // console.log(bp, spo2, weight);

                                // lineDataBP = [];
                                // lineDataSpo2 = [];
                                // lineDataWeight = [];

                                // lineDataBP.push({
                                // 	'key': 'Sistólica',
                                // 	'color': 'red',
                                // 	'values': bp['sistolic'],
                                // 	'type': 'line',
                                // 	'yAxis': 1,
                                // 	"disabled": false
                                // });

                                // lineDataBP.push({
                                // 	'key': 'Diastólica',
                                // 	'color': 'blue',
                                // 	'values': bp['diastolic'],
                                // 	'type': 'line',
                                // 	'yAxis': 1,
                                // 	"disabled": false
                                // });

                                // lineDataBP.push({
                                // 	'key': 'Pulso',
                                // 	'color': 'green',
                                // 	'values': bp['pulse'],
                                // 	'type': 'line',
                                // 	'yAxis': 2,
                                // 	"disabled": true
                                // });
                                // setLineChart('linechart-bp', lineDataBP, 'mmHg','latidos/m');

                                // lineDataSpo2.push({
                                // 	'key': 'Oxigeno en sangre',
                                // 	'color': 'blue',
                                // 	'values': spo2['spo2'],
                                // 	'type': 'line',
                                // 	'yAxis': 1,
                                // 	"disabled": false
                                // });
                                // setLineChart('linechart-spo2', lineDataSpo2, '%');

                                // lineDataWeight.push({
                                // 	'key': 'Peso',
                                // 	'color': 'red',
                                // 	'values': weight['peso'],
                                // 	'type': 'line',
                                // 	'yAxis': 1,
                                // 	"disabled": false
                                // });

                                // lineDataWeight.push({
                                // 	'key': 'IMC',
                                // 	'color': 'blue',
                                // 	'values': weight['imc'],
                                // 	'type': 'line',
                                // 	'yAxis': 2,
                                // 	"disabled": true
                                // });
                                // setLineChart('linechart-weight', lineDataWeight, 'Kg', 'Kg/m^2');

                            }

                            // Selector de enfermedades
                            $(".enfermedad-seleccion li").on("click", function() {

                                $('.treatments > ch').empty();
                                $(this).addClass('active').siblings().removeClass('active');

                                enfermedadSelection();

                            });

                            function enfermedadSelection() {
                                viewPersonData();


                                $(".reg-name").html('<i class="icon-bar-chart"></i> Registro ' + $(
                                    ".enfermedad-seleccion").find(".active > a").text());

                                /*
                                 * Recomendación de tratamientos [2a llamada] (Tras dar al botón de la enfermedad)
                                 *
                                 * Nota: Correción del id del paciente '$('#select-person').val()'', sólo para el caso de que tenga que seleccionar un paciente (función habilitada para el admin y médico)
                                 */
                                /*$.ajax(
                                	{
                                		type: "GET",

                                		url: 'http://nimbeo.com:8080/iohealth_webservice/api/service/nn?user_id='+$('#select-person').val()+'&enf_user='+$(".enfermedad-seleccion").find(".active > a").attr('data-id'),
                                		success: function(data)
                                		{

                                			if($("#ch").length) $("#ch").empty();
                                			$('#personRecom').append('<div id ="ch">');

                                			if (data.medicamentos.length > 0 || data.alimentos.length > 0 || data.actividades.length > 0)
                                			{
                                				$('<h2 id="ant_tr"><b> TRATAMIENTO: "'+data.tratamiento+'" </b></h2>').appendTo("#ch");
                                				//$('<h2 id="ant_tr"><b> Recomendaciones </b></h2>').appendTo("#ch");
                                			}else{
                                				$('<h2 id="ant_tr"><b> No se ha podido recomendar ningún tratamiento </b></h2>').appendTo("#ch");
                                				$('<b id="ant_tr"> Posibles causas: </b>').appendTo("#ch");
                                				$('<p id="ant_tr"> - Ausencia de algún registro como: peso, altura, fecha de nacimiento, género... </p>').appendTo("#ch");
                                				$('<p id="ant_tr"> - Ausencia de la existencia de tratamiento en cuestión </p>').appendTo("#ch");
                                			}

                                			if (data.medicamentos.length > 0)
                                				$('<p class="title_reco"><b id="ant_tr"> MEDICAMENTOS </b></p>').appendTo("#ch");
                                			for (var i = 0; i < data.medicamentos.length; i++)
                                			{
                                				$('<p class="nm"><b id="ant_tr" > '+data.medicamentos[i].nombre+' </b></p>').appendTo("#ch");
                                				$('<p id="ant_tr" class="ct_tab">Número de dosis: '+data.medicamentos[i].dosis+' </p>').appendTo("#ch");
                                			}
                                			if (data.alimentos.length > 0)
                                				$('<p class="title_reco"><b id="ant_tr"> ALIMENTOS </b></p>').appendTo("#ch");
                                			for (var i = 0; i < data.alimentos.length; i++)
                                			{
                                				$('<p class="nm"><b id="ant_tr" > '+data.alimentos[i].nombre+' </b></p>').appendTo("#ch");
                                				$('<p id="ant_tr" class="ct_tab"> '+data.alimentos[i].comentarios+' </p>').appendTo("#ch");
                                			}
                                			if (data.actividades.length > 0)
                                				$('<p class="title_reco"><b id="ant_tr"> EJERCICIOS </b></p>').appendTo("#ch");
                                			for (var i = 0; i < data.actividades.length; i++)
                                			{
                                				$('<p class="nm"><b id="ant_tr" > '+data.actividades[i].nombre+' </p>').appendTo("#ch");
                                				//console.warn("Duración: "+data..actividades[i].duracion);
                                			}

                                		},
                                		error: function()
                                		{
                                			if($("#ch").length) $("#ch").empty();
                                			// No ha habido respuestas
                                			$('#personRecom').append('<div id ="ch">');
                                			$('<h2 id="ant_tr"><b> No se ha podido recomendar ningún tratamiento </b></h2>').appendTo("#ch");
                                			$('<b id="ant_tr"> Posibles causas: </b>').appendTo("#ch");
                                			$('<p id="ant_tr"> - Ausencia de algún registro como: peso, altura, fecha de nacimiento, género... </p>').appendTo("#ch");
                                			$('<p id="ant_tr"> - Ausencia de la existencia de tratamiento en cuestión </p>').appendTo("#ch");
                                		}
                                	});*/
                            }

                            // INIT
                            setChosen('select-person', 'persons', viewPersonData);





                            // Recomendación de tratamientos (por defecto) 1a llamada

                            /*$.ajax(
                            	{
                            		type: "GET",

                            		url: 'http://nimbeo.com:8080/iohealth_webservice/api/service/nn?user_id={{ $user }}&enf_user='+$(".enfermedad-seleccion").find(".active > a").attr('data-id'),
                            		success: function(data)
                            		{


                            			$('#personRecom').append('<div id ="ch">');

                            			if (data.medicamentos.length > 0 || data.alimentos.length > 0 || data.actividades.length > 0)
                            			{
                            				$('<h2 id="ant_tr"><b> TRATAMIENTO: "'+data.tratamiento+'" </b></h2>').appendTo("#ch");
                            				//$('<h2 id="ant_tr"><b> Recomendaciones </b></h2>').appendTo("#ch");
                            			}else{
                            				$('<h2 id="ant_tr"><b> No se ha podido recomendar ningún tratamiento </b></h2>').appendTo("#ch");
                            				$('<b id="ant_tr"> Posibles causas: </b>').appendTo("#ch");
                            				$('<p id="ant_tr"> - Ausencia de algún registro como: peso, altura, fecha de nacimiento, género... </p>').appendTo("#ch");
                            				$('<p id="ant_tr"> - Ausencia de la existencia de tratamiento en cuestión </p>').appendTo("#ch");
                            			}

                            			if (data.medicamentos.length > 0)
                            				$('<p class="title_reco"><b id="ant_tr"> MEDICAMENTOS </b></p>').appendTo("#ch");
                            			for (var i = 0; i < data.medicamentos.length; i++)
                            			{
                            				$('<p class="nm"><b id="ant_tr" > '+data.medicamentos[i].nombre+' </b></p>').appendTo("#ch");
                            				$('<p id="ant_tr" class="ct_tab">Número de dosis: '+data.medicamentos[i].dosis+' </p>').appendTo("#ch");
                            			}
                            			if (data.alimentos.length > 0)
                            				$('<p class="title_reco"><b id="ant_tr"> ALIMENTOS </b></p>').appendTo("#ch");
                            			for (var i = 0; i < data.alimentos.length; i++)
                            			{
                            				$('<p class="nm"><b id="ant_tr" > '+data.alimentos[i].nombre+' </b></p>').appendTo("#ch");
                            				$('<p id="ant_tr" class="ct_tab"> '+data.alimentos[i].comentarios+' </p>').appendTo("#ch");
                            			}
                            			if (data.actividades.length > 0)
                            				$('<p class="title_reco"><b id="ant_tr"> EJERCICIOS </b></p>').appendTo("#ch");
                            			for (var i = 0; i < data.actividades.length; i++)
                            			{
                            				$('<p class="nm"><b id="ant_tr" > '+data.actividades[i].nombre+' </p>').appendTo("#ch");
                            				//console.warn("Duración: "+data..actividades[i].duracion);
                            			}

                            		},
                            		error: function()
                            		{
                            			// No ha habido respuestas
                            			$('#personRecom').append('<div id ="ch">');
                            			$('<h2 id="ant_tr"><b> No se ha podido recomendar ningún tratamiento </b></h2>').appendTo("#ch");
                            			$('<b id="ant_tr"> Posibles causas: </b>').appendTo("#ch");
                            			$('<p id="ant_tr"> - Ausencia de algún registro como: peso, altura, fecha de nacimiento, género... </p>').appendTo("#ch");
                            			$('<p id="ant_tr"> - Ausencia de la existencia de tratamiento en cuestión </p>').appendTo("#ch");
                            		}
                            	}
                            );*/
                            /* . $ajax recomendación de tratamientos */


                            setDateRangePicker('dates', function() {

                                if ($('#select-person').val()) {
                                    //getDiseases();
                                    viewPersonData();
                                }
                            });

                            // Selección de un paciente
                            @if (!Auth::user()->admin) //no Admin
                                @if (!(Auth::user()->role_id == 4))
                                    // no medico
                                    $('#select-person').val({{ $user }});
                                    $('#select-person').trigger("chosen:updated");
                                    $('#select-person').change();
                                    $('#select-person').closest('.row').hide();
                                @endif
                            @endif


                        })

                        /*
                         * VECTOR MAP
                         */

                        //$.getJSON( $SITE_PATH + "statistic/query?type=map&from=" + CoolReport.start.format('X') + '&to=' + CoolReport.end.format('X') , Map);

                        /*data_array = {};
                	Map();
                	function Map(){
                		//console.log(data.data['coordenadas']);
                		var map_name = $('#spain-map').attr('data-name');
                		var array = [];
                		var dataMap = [];
                		var lat = [];
                		/*for (var i = 0 ; i < data.data['coordenadas'].length; i++) {

                		lat.push(data.data['coordenadas'][i]['coordenadas'].split(","));
                		lat[i][0] = parseFloat(lat[i][0].replace("[",""));
                		lat[i][1] = parseFloat(lat[i][1].replace("]",""));
                		//console.log(lat[i][0])
                //console.log(lat[i][0].replace("[",""));

                		dataMap.push({ latLng: lat[i] ,name: data.data['coordenadas'][i]['ciudad'] });
                	}*/


                        /*$('#spain-map').vectorMap({
                			map: map_name,
                			backgroundColor: 'transparent',
                			regionStyle: {
                				initial: {
                					fill: '#bce8f0',
                					"fill-opacity": 0.8
                				},
                				hover: {
                					stroke: '#126892',
                					"stroke-width": 2,
                					"fill-opacity": 1
                				},
                			},
                			markerStyle: {
                			 initial: {
                				 fill: '#F8E23B',
                				 stroke: '#383f47'
                			 }
                		 	},
                				markers : [
                		      {latLng: [40.33, -3.77], name: 'Leganes'},
                		      {latLng: [39.86, -4.03], name: 'Toledo'},
                				]
                				,
                			onRegionLabelShow: function (e, el, code) {
                		        if (typeof data_array[code] == 'undefined') {
                		            e.preventDefault();
                		        } else {
                		            var countrylbl = data_array[code];
                		            el.html(el.html() + ': ' + countrylbl);
                		        }
                		    }
                		});
                	}*/
                        /*$.get("heatMap")
                        	.success(function(data){
                        		console.log(data)
                        		/*Docker mapa de calor */
                        /*google.load('visualization', '1', {'packages': ['geochart']});
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

                        });*/

                    });
                </script>
            @stop
