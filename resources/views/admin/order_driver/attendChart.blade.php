@extends('common.layouts.main')

@section('title', 'Chart ')
@section('content')


    <style type="text/css">
        .axis path,
        .axis line {
            fill: none;
            stroke: black;
            shape-rendering: crispEdges;
        }

        .axis text {
            font-family: sans-serif;
            font-size: 10px;
        }

        .timeline-label {
            font-family: sans-serif;
            font-size: 12px;
        }

        #timeline2 .axis {
            transform: translate(0px,40px);
            -ms-transform: translate(0px,40px); /* IE 9 */
            -webkit-transform: translate(0px,40px); /* Safari and Chrome */
            -o-transform: translate(0px,40px); /* Opera */
            -moz-transform: translate(0px,40px); /* Firefox */
        }

        .coloredDiv {
            height:20px; width:20px; float:left;
        }
    </style>



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
                        <li class="active">{{ trans('order_driver.dutyTime') }}</li>
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




                <div>
                    <h3>Drivers Duty Time </h3>
                    <div id="timeline3"></div>
                    <div id="hoverRes">
                        <div class="coloredDiv"></div>
                        <div id="name"></div>
                        <div id="scrolled_date"></div>
                    </div>
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

            <div class="form-group" style="display:none;">
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
    {!! HTML::script('/assets/website/lib/js/date.js') !!}



   <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    {!! HTML::script('/assets/js/d3-timeline.js') !!}

    <script type="text/javascript">


        var chartData={!! json_encode($oChartData)  !!} ;

        function fixHourToChartTime(hour){

            var startHourTime=hour.hourToSecond()/3600;

            var oneHour=60*60*1000;
           return  oneHour*startHourTime-(oneHour*2);
        }

        window.onload = function() {



            var labelTestData = [
<?php foreach($oChartData as $orderDriver) {?>
                {label: "<?=$orderDriver['label'] ;?>", times: [
                        <?php foreach($orderDriver['times'] as $time) {?>
                    {"starting_time":fixHourToChartTime('<?=$time['starting_time'];?>'), "ending_time":fixHourToChartTime('<?=$time['ending_time'];?>')},
                <?php }?>
                ]},
        <?php }?>
//                {label: "person d", times: [{"starting_time":oneHour-(oneHour*3), "ending_time":oneHour*22}]},

            ];





            var width =$('#mainChartBox').width();
            function timelineRect() {
                var chart = d3.timeline();

                var svg = d3.select("#timeline1").append("svg").attr("width", width)
                        .datum(testData).call(chart);
            }








            function timelineHover() {
                var chart = d3.timeline()
                        .width(width)
                        .stack()
                        .margin({left:70, right:30, top:0, bottom:0})
                        .hover(function (d, i, datum) {
                            // d is the current rendering object
                            // i is the index during d3 rendering
                            // datum is the id object
                            var div = $('#hoverRes');
                            var colors = chart.colors();
                            div.find('.coloredDiv').css('background-color', colors(i))
                            div.find('#name').text(datum.label);
                        })
                        .click(function (d, i, datum) {
                            alert(datum.label);
                        })
                        .scroll(function (x, scale) {
                            $("#scrolled_date").text(scale.invert(x) + " to " + scale.invert(x+width));
                        });

                var svg = d3.select("#timeline3").append("svg").attr("width", width)
                        .datum(labelTestData).call(chart);
            }
            timelineHover();
        }
    </script>
    @endsection