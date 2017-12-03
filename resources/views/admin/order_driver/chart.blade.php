@extends('common.layouts.main')

@section('title', 'Chart ')
@section('content')





    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.order_driver') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.order_driver') }}</a></li>
                        <li class="active">{{ trans('order_driver.'.$request->chartName) }}</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <form role="search" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>




            <div class="row">

        <div class="col-sm-12">
            <div class="white-box " id="mainChartBox">
                <h3 class="box-title"> Chart</h3>

                <div class="container" id="container"></div>

                <div>
                    <canvas id="chart2" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>
    </div>


    <div class="right-side-panel">
        <div class="scrollable-right container">
            <!-- .Theme settings -->
            <h3 class="title-heading">{{ trans('general.search') }}</h3>

            {!! Form::model($request,['method'=>'get','id'=>'searchForm', 'class'=>'form-horizontal']) !!}






            <div class="form-group">
                <div class="col-md-12">
                    {!! Form::text('id', null, ['placeholder'=>trans('order_driver.id'),'class'=>'form-control input-sm ']) !!}

                </div>
            </div>



            <div class="form-group">
                <div class="col-md-12">
                    {!! Form::select('users_id',[''=>'Driver']+$driverList, null, ['placeholder'=>'','class'=>'form-control input-sm ']) !!}

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    {!! Form::select('status',[''=>'status']+config('array.order_driver_status'), null, ['placeholder'=>trans('order_driver.status'),'class'=>'form-control input-sm ']) !!}

                </div>
            </div>


            <div class="form-group">
                <div class="col-md-12">
                    {!! Form::select('period_type',[''=>'Select Time Period']+[
            '' => '',
            'daily' => 'daily',
            'monthly' => 'monthly',
            'yearly' =>  'yearly'
            ], null, ['placeholder'=>'Time Period','class'=>'form-control input-sm ']) !!}

                </div>
            </div>


            <div class="form-group">
                <div class="col-md-12">
                    {!! Form::text('from_date', null, ['placeholder'=>'From Date','class'=>'form-control input-sm mydatepicker']) !!}

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    {!! Form::text('to_date', null, ['placeholder'=>'To Date','class'=>'form-control input-sm mydatepicker']) !!}

                </div>
            </div>




            <div class="form-group">
                <div class="col-md-12">
                    {!! Form::select('chartName',[''=>'Chart Name']+config('array.order_driver_chart'), null, ['placeholder'=>trans('order_driver.notification'),'class'=>'form-control input-sm ']) !!}

                </div>
            </div>




            <div class="form-group">
                <div class="col-md-12">
                    {!! Form::select('notification',[''=>'Notification Status']+config('array.order_driver_notification'), null, ['placeholder'=>trans('order_driver.notification'),'class'=>'form-control input-sm ']) !!}

                </div>
            </div>







            <div class="form-group">
                <label class="col-md-12"></label>
                <div class="col-md-12">
                    {!! Form::submit(trans('general.search'), ['class'=>'btn btn-info btn-sm', 'name' => 'search']) !!}
                </div>
            </div>

            {!! Form::hidden('sort', null) !!}
            {!! Form::hidden('order', null) !!}
            {!! Form::close()!!}
        </div>
    </div>
@endsection

@section('script')


    @parent

    {!! HTML::script('/assets/'.config('project.layoutAssetsFolder').'/plugins/bower_components/Chart.js/Chart.min.js') !!}
    {!! HTML::script('/assets/'.config('project.layoutAssetsFolder').'/plugins/bower_components/Chart.js/chartjs.init.js') !!}
<script>



   var chartData={!! json_encode($oChartData)  !!} ;


    $( document ).ready(function() {

        var ctx2 = document.getElementById("chart2").getContext("2d");
        var data2 = {
            labels: chartData['aHorizontalLine'],
            datasets: chartData['data']
        };

        var chart2 = new Chart(ctx2).Bar(data2, {
            scaleBeginAtZero : true,
            scaleShowGridLines : true,
            scaleGridLineColor : "rgba(0,0,0,.005)",
            scaleGridLineWidth : 55,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            barShowStroke : true,
            barStrokeWidth : 0,
            tooltipCornerRadius: 2,
            barDatasetSpacing : 5,
            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });



    });


   function addChartLabel(label,color){
       $('#mainChartBox').append('<div style="margin:5px;"><div style="display: inline-block;float:left;width:20px;height:20px;background:'+color+'; margin-right:10px; "></div>'+label+' </div>');
   }
    for(var oneStage in chartData['data'] ){
        addChartLabel(chartData['data'][oneStage]['label'],chartData['data'][oneStage]['fillColor'] );


    }
</script>

    <script src="https://code.highcharts.com/highcharts.src.js"></script>

    <script  >

        var chart = Highcharts.chart('container', {

            chart: {
                type: 'column'
            },

            title: {
                text: 'Chart'
            },

            subtitle: {
                text: ''
            },

            legend: {
                align: 'right',
                verticalAlign: 'middle',
                layout: 'vertical'
            },

            xAxis: {
                categories: chartData['aHorizontalLine'],
                labels: {
                    x: -10
                }
            },

            yAxis: {
                allowDecimals: false,
                title: {
                    text: (typeof chartData['chartLeftLabel'] =='undefined')? '': chartData['chartLeftLabel']
                }
            },

            series:chartData['data'],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            align: 'center',
                            verticalAlign: 'bottom',
                            layout: 'horizontal'
                        },
                        yAxis: {
                            labels: {
                                align: 'left',
                                x: 0,
                                y: -5
                            },
                            title: {
                                text: null
                            }
                        },
                        subtitle: {
                            text: null
                        },
                        credits: {
                            enabled: true
                        }
                    }
                }]
            }
        });

        $('#small').click(function () {
            chart.setSize(400, 300);
        });

        $('#large').click(function () {
            chart.setSize(600, 300);
        });

    </script>
    @endsection