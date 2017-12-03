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

<div style="display:block;width:100%;clear:both;">
                <div class="container" style="height: 700px;" id="container"></div>
            </div>

                <div>
                    <canvas id="chart3" height="150"></canvas>
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



   var ctx3 = document.getElementById("chart3").getContext("2d");
   var data3 = chartData;

   var myPieChart = new Chart(ctx3).Pie(data3,{
       segmentShowStroke : true,
       segmentStrokeColor : "#fff",
       segmentStrokeWidth : 0,
       animationSteps : 100,
       tooltipCornerRadius: 0,
       animationEasing : "easeOutBounce",
       animateRotate : true,
       animateScale : false,
       legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
       responsive: true
   });



   function addChartLabel(label,color){
       $('#mainChartBox').append('<div style="margin:5px;"><div style="display: inline-block;float:left;width:20px;height:20px;background:'+color+'; margin-right:10px; "></div>'+label+' </div>');
   }
    for(var oneStage in chartData ){
        addChartLabel(chartData[oneStage]['label'],chartData[oneStage]['color'] );


    }
</script>

    <script src="https://code.highcharts.com/highcharts.src.js"></script>

    <script>

        var highChartData=[];


        for(var oneStage in chartData ){
            highChartData.push([chartData[oneStage]['label'], chartData[oneStage]['value']]);


        }

        Highcharts.chart('container', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45
                }
            },
            title: {
                text: '{{ trans('order_driver.'.$request->chartName) }}'
            },
            subtitle: {
                text: 'Number Of Orders'
            },
            plotOptions: {
                pie: {
                    innerSize: 100,
                    depth: 45
                }
            },
            series: [{
                name: 'Delivered amount',
                data: highChartData
            }]
        });
    </script>
    @endsection