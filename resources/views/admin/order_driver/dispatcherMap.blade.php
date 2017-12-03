<!DOCTYPE html>
<html>
<head>
    <title>Sahalat</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <meta http-equiv="refresh" content="60" />

    <link rel="shortcut icon" href="">
    <link href="/assets/map/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="/assets/map/css/custom-style.css" type="text/css" rel="stylesheet"/>
    <link href="/assets/map/css/jquery.mCustomScrollbar.css"  type="text/css" rel="stylesheet"/>
    <link href="/assets/map/css/scroll-style.css"  type="text/css" rel="stylesheet"/>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-5 col-xs-12 pull-left">
            <div class="left-side">
                <div class="logo"> <span><a href="index.html"><img src="/assets/map/img/logo.png"/></a></span> </div>
                <div class="usertime">
                    <h2>Sahalat</h2>
                    <span id="mainClock" style="width: 81px; text-align: left; display: inline-block;">00:00</span>
                    <script>
                        var myVar = setInterval(function() {
                            myTimer();
                        }, 1000);

                        function myTimer() {
                            var d = new Date();
                            document.getElementById("mainClock").innerHTML = d.toLocaleTimeString();
                        }
                    </script>
                </div>
                <div id="content-1" class="content">
                    <div class="on-delivery">
                        <h3>ON DELIVERY</h3>
                        <div class="person-listing">
                            <ul id="DriverList">































                                @foreach($oRestaurantUsers as &$oRestaurantUser)



                                    {{--*/$oRestaurantUser->deliveringOrder=0;/*--}}
                                    @foreach($oRestaurantUser->order as $key=>$order)

                                        {{--*/$oRestaurantUser->deliveringOrder+=($order->status ==config('array.order_status_delivering_index'))? 1:0;/*--}}
                                    @endforeach


                                    <li class="
                      @if($oRestaurantUser->deliveringOrder==0)
                                            green
                                            @elseif($oRestaurantUser->deliveringOrder==1)
                                            yellow
                                            @elseif($oRestaurantUser->deliveringOrder > 1)
                                            red
                                            @endif

                                            popupHtml" id="driver_{{$oRestaurantUser->users_id}}"  onclick="$('#driver_radio_{{$oRestaurantUser->users_id }}').prop('checked',true);$('#selected_driver_id').val('{{$oRestaurantUser->users_id }}');$('#submit').click();"> <span><img src="/assets/map/img/dummy-2.png"/></span>
                                        <p>

                                            <input type="radio" name="users_id" id="driver_radio_{{$oRestaurantUser->users_id }}" value="{{$oRestaurantUser->users_id }},{{$oRestaurantUser->users->lat }},{{$oRestaurantUser->users->long }}" data-location="{{$oRestaurantUser->users->lat }},{{$oRestaurantUser->users->long }}">

                                            {{$oRestaurantUser->users->first_name  }} -

                                            {{array_key_exists($oRestaurantUser->order_driver_status,config('array.order_driver_status') )? config('array.order_driver_status')[$oRestaurantUser->order_driver_status]:''}}

                                        </p>
                                        <aside>

                                            @if($oRestaurantUser->deliveringOrder==0) Available @else {{  $oRestaurantUser->deliveringOrder }} order @endif </aside>
                                    </li>
                                @endforeach








                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-7 col-xs-12 pull-left">
            <div class="row">
                <style type="text/css">
                    /* Set a size for our map container, the Google Map will take up 100% of this container */

                    #map { width: 100%; height: 100vh; }
                </style>
                <div id="map"><!--<span><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.768871279415!2d47.97605331470012!3d29.37705598213006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf84946e661e0f%3A0x53106fed6ec64d5!2sMawaqaa+-+National+Web+Solutions+Company!5e0!3m2!1sen!2skw!4v1509537390462" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></span>--></div>


                <script>
                    var orderData={
                    @foreach($oOrderResults as $oOrderResult)
                        {{$oOrderResult->id }}:{
                        'deliver_time':'{{$oOrderResult->deliver_time }}'

                    },
                    @endforeach
                    };
                </script>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-right position-ab">
                    <div class="row">
                        <div class="right-side">
<div  style="padding: 10px;margin-left: 6px ">
   {!! Form::model($request,['method'=>'get','id'=>'selectDateForm']) !!}

    
    <select name="selected_restaurant_id" onchange="$('#selectDateForm').submit();" style="display: block; width: 100% ;     margin-bottom: 8px;font-size: 17px;">
        <option value=""> All Restaurnat</option>
        @foreach($oRestaurantResults as $oRestaurantResult)
            <option value="{{$oRestaurantResult->id}}" @if($request->selected_restaurant_id ==$oRestaurantResult->id ) selected @endif >{{$oRestaurantResult->name_en}}</option>
            @endforeach
    </select>
    {!! Form::select('selected_date',$dateList,null,['onchange'=>'$("#selectDateForm").submit();','style'=>'   width:100%;font-size: 17px;']) !!}    {!! Form::close() !!}


</div>




                            <form action="{{route('admin.order_driver.index')}}" method="post">
                                <input type="hidden" name="users_id" value="0" id="selected_driver_id">
                                <div class="container-fluid">
                                    <div class="heading">
                                        <h2>ORDERS</h2>
                  <span>
                  <input class="search" name="" type="text" oninput="searchList($(this),'.right-side .orderbox')"  placeholder="Search">
                  </span> </div>
                                    <div class="tablebox"  id="waypoints">
                                        <p>Select orders then click show</p>























                                        {{--<div class="orderbox">--}}
                                        {{--<ul>--}}
                                        {{--<li> <span>--}}

                                        {{--<input type="checkbox" class="checkbox" id="order_checkbox_1" name="order_id[]" value="1" data-location="31.9799641,35.8746058"--}}

                                        {{-->--}}
                                        {{--yosit--}}
                                        {{--</span>--}}
                                        {{--<aside><tt>9080</tt></aside>--}}
                                        {{--</li>--}}
                                        {{--<li><span>--}}
                                        {{--090         -ojo--}}
                                        {{--</span> </li>--}}
                                        {{--</ul>--}}
                                        {{--</div>--}}





                                        @foreach($oOrderResults as $oOrderResult)


                                            <div class="orderbox">
                                                <ul>
                                                    <li> <span>

                            <input type="checkbox" class="checkbox" id="order_checkbox_{{$oOrderResult->id}}" name="order_id[]" value="{{$oOrderResult->id}}" data-location="{{isset($oOrderResult->address->lat)? $oOrderResult->address->lat.','.$oOrderResult->address->long:''}}"
                                   @if(isset($oOrderResult->address->lat) &&strlen($oOrderResult->address->lat) >5 && strlen($oOrderResult->address->long) >5) checked @endif
                                    >


                                                            {{ isset($oOrderResult->users->first_name)? $oOrderResult->users->first_name:''}}
                          </span>
                                                        <aside><tt>{{$oOrderResult->deliver_time}}</tt></aside>
                                                    </li>
                                                    <li><span>
                              {{array_key_exists($oOrderResult->status,config('array.order_status'))? config('array.order_status')[$oOrderResult->status]:'' }}
                                                            -
                              <a href="/admin/address/{{$oOrderResult->address_id}}"> {{isset($oOrderResult->address->name)? $oOrderResult->address->name:'' }}</a>
                              -
                                                            {{isset($oOrderResult->restaurant->name_en)?$oOrderResult->restaurant->name_en:''}}
                          </span> </li>
                                                </ul>
                                            </div>
                                        @endforeach






















                                        <div class="btngroup"> <span>
                    <input class="btn" name="" type="button"  id="submit" value="Show Route">
                    </span> <span>
                    <input class="btn" name="" type="submit" id="assingButton" value="Assign Orders to Drivers">
                    </span> </div>

                                        <div style="clear:both">

                                            @include('common.partials.messages')
                                        </div>

                                        <div class="address">
                                            <div delete_id="content-2"  id="directions-panel" class="content contentaddress">
                                                <div class="addressBox" style="display: none;">
                                                    <h4>T</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices, sem ac vestibulum ornare.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="row">

        <div class="copy-right">
                <p> © 2017 Sahalat All rights reserved</p>
              </div>
        </div>-->

    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/assets/map/js/bootstrap.js" type="text/javascript"></script>
<script src="/assets/map/js/map.js" type="text/javascript"></script>
<!-- custom scrollbar plugin -->
<script src="/assets/map/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
    // When the window has finished loading create our google map below
    //  google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 19	,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(29.377070, 47.978238), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 21
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.government",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        //   var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(29.377070, 47.978238),
            map: map,
            title: 'Mawaqaa - National Web Solutions Company, Kuwait City'
        });
    }
</script>
<script>
    (function($){
        $(window).on("load",function(){

            $("#content-1, #content-2").mCustomScrollbar({
                setTop:"0px"
            });

        });
    })(jQuery);
</script>

<script src="/assets/map/js/custom/helper.js"></script>
<script src="/assets/map/js/custom/search.js"></script>
<script src="/assets/map/js/custom/findRoute.js"></script>











<script>


    //  $('input[type="checkbox"]').prop('checked',true);

    $('input[type="radio"]').eq(0).prop('checked',true);
</script>
<script>
    var map={};
    var totalTime=0;
    var currentHour="{{ gmdate('H:i') }}";
    var currentTime=hourToSecond(currentHour);
    //    var waypts = [];
    //    // var waypointsDiv = document.getElementById('waypoints');
    //    var waypointsIds=[];
    //    $('#waypoints input:checkbox:checked').each(function(){
    //
    //        waypts.push({
    //            location:$(this).data('location'),
    //            stopover: true
    //        });
    //waypointsIds.push($(this).attr('value'));
    //    });


    function addMarker(markerData){
        markerData.map=map;

        var icon = {
            url: markerData.icon, // url
            scaledSize: new google.maps.Size(40, 40), // scaled size
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };

        markerData.icon=icon;
        var marker = new google.maps.Marker(markerData);



        var infowindow = new google.maps.InfoWindow({
            content: $(marker.popupHtmlSelector).html() +''+marker.html
        });

        marker.addListener('click', function() {
            infowindow.open(marker.get('map'), marker);
        });
//    google.maps.event.addListener(marker, 'click',
//            (function(marker)
//            {
//                return function()
//                {
//                    //Add Your Customized Click Code Here
//
//                    $('#myModal .content').html($(marker.popupHtmlSelector).html());
//                    $('#myModal .content').append(marker.html);
//                    $('#myModal').show();
//                    $('[value="'+marker.order_id+'"]').parent().css('background-color','red');
//                    //End Add Your Customized Click Code Here
//                }
//            })(marker));
    }
    function drowWaypoint(index, waypts,waypointsIds, data){

        var positionArray = waypts[index].location.split(',');
        var differenceTypeAndHtml=getMarkerData(data,waypointsIds[index]);

        var icon='/assets/website/images/pizza-icon.png';
        if(differenceTypeAndHtml[0]=='delay'){
            icon='/assets/website/images/red-pizza-icon.png';
        }else if(differenceTypeAndHtml[0]=='early'){
            icon='/assets/website/images/yellow-pizza-icon.png';
        }
        addMarker({
            position: {lat: parseFloat(positionArray[0]) ,lng: parseFloat(positionArray[1]) },
            label:waypointsIds[index],
            popupHtmlSelector:'#order_'+waypointsIds[index],
            title: 'Order Num '+waypointsIds[index],
            html:differenceTypeAndHtml[1],

            icon:icon
        });
    }

    function getMarkerData(data,waypointId){
        var finalHtml=' order number <a href="/admin/order/'+waypointId +'">#'+waypointId +'</a> <br>';
//        finalHtml += data.start_address + ' to ';
//        finalHtml += data.end_address + '<br>';
//        finalHtml += data.distance.text + ' - duration :';
//        finalHtml += data.duration.text + '<br>';

        finalHtml +='<br>Time to deliver in:'+convertSecondsToText(totalTime,true);
        finalHtml +='<br>current hour  :'+ currentHour;
        finalHtml +='<br>driver expect arrive    :'+secondToHour(parseInt(totalTime) + parseInt(currentTime));
        finalHtml +='<br>customer hour :'+orderData[waypointId]['deliver_time'];

        var differenceTypeAndDifference=calculateDifferenceTime(secondToHour(totalTime + currentTime),orderData[waypointId]['deliver_time']);
        var differenceType=differenceTypeAndDifference[0];
        var difference=differenceTypeAndDifference[1];

        $('#expected_time_'+waypointId).val(secondToHour(parseInt(totalTime) + parseInt(currentTime)));
        if(differenceType=='delay'){

            finalHtml +='<br>delay time :'+difference;
        }else if(differenceType=='early'){

            finalHtml +='<br> the deliver will be early :'+  difference;
        }else{

            finalHtml +='<br>small different in deliver time :'+  difference;
        }

        finalHtml +='<div style="clear:both"></div>';
        return [differenceType,finalHtml];
    }

    function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer( { suppressMarkers : true });


//        map = new google.maps.Map(document.getElementById('map'), {
//            zoom: 6,
//            center: {lat: 31.95557172, lng: 35.83669424}
//        });
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 19	,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(29.377070, 47.978238), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 21
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.attraction",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.government",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        map = new google.maps.Map(mapElement, mapOptions);

        directionsDisplay.setMap(map);


        addDriverMarker();
        addRestaurantMarker();
        addServiceBoyMarker();
        document.getElementById('submit').addEventListener('click', function() {
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay) {


        var waypts = [];
        var waypointsIds=[];

        $('#waypoints input:checkbox:checked').each(function(){

            waypts.push({
                location:$(this).data('location'),
                stopover: true
            });
            waypointsIds.push($(this).attr('value'));
        });

        directionsService.route({
            origin: $('#DriverList input:checked').data('location'),
            destination: $('#DriverList input:checked').data('location'),
            waypoints: waypts,
            optimizeWaypoints: true,
            travelMode: 'DRIVING'
        }, function(response, status) {

            customDirectionsRenderer(response, status,directionsDisplay);//return false;

            if (status === 'OK') {

                totalTime=0;

//console.log(response);

                //directionsDisplay.setDirections(response);
                var route = response.routes[0];
                var summaryPanel = document.getElementById('directions-panel');

                summaryPanel.innerHTML = '';
                // For each route, display summary information.

                for (var j = 0; j < route.waypoint_order.length; j++) {
                    totalTime+=route.legs[j].duration.value;

                    drowWaypoint(route.waypoint_order[j], waypts,waypointsIds, route.legs[j]);
                }

                for (var i = 0; i < route.legs.length; i++) {

                    //  console.log(waypts[route.waypoint_order[i]]);
                    //  showSteps(route.legs[i]);
                    //  console.log(route.legs[i].steps[0].end_point);
                    var routeSegment = i + 1;


                    summaryPanel.innerHTML += '<div class="addressBox"><h4>Route Segment: ' + routeSegment +'</h4><p>';
                    summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
                    summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
                    summaryPanel.innerHTML += route.legs[i].distance.text + ' - duration :';
                    summaryPanel.innerHTML += route.legs[i].duration.text + '</p></div>';


//alert(route.legs[i].end_location.lat+','+route.legs[i].end_location.log);
//                   alert($('#waypoints input[type="checkbox"][value="'+route.legs[i].end_location.lat+','+route.legs[i].end_location.log+'"]').parent().text()) ;
                }
            } else {
                //  window.alert('Directions request failed due to ' + status);
            }
        });





    }


    var bounds = null;
    var polylines=[];
    function customDirectionsRenderer(response, status,directionsDisplay) {



        if(status !='OK'){return false;}
        console.log(polylines);
        for (var i = 0; i < polylines.length; i++) {
            polylines[i].setMap(null);
            polylines[i].setVisible(false);

        }

//            directionsDisplay.setDirections(response);
        bounds = new google.maps.LatLngBounds();
        var route = response.routes[0];
        var path = response.routes[0].overview_path;
        var legs = response.routes[0].legs;
        for (i = 0; i < legs.length -1; i++) {



            var colors=['#f0f0f0','#00ff00','#ffff00','#00ffff','#555500','#330033'];
            var randomColor=colors[Math.floor(Math.random()*colors.length)];
            drowLegs(legs[i].steps,randomColor);

        }

        drowLegs(legs[legs.length -1].steps,'#ff0000');

        map.fitBounds(bounds);

    };

    function drowLegs(steps , color){
        var polyline = new google.maps.Polyline({
            path: [],
            geodesic: true,
            strokeColor: color,
            strokeOpacity: 1.0,
            strokeWeight: 2
        });

        polylines.push(polyline);
        for (j = 0; j < steps.length; j++) {
            var nextSegment = steps[j].path;
            for (k = 0; k < nextSegment.length; k++) {
                polyline.getPath().push(nextSegment[k]);
                bounds.extend(nextSegment[k]);

            }
        }


        polyline.setMap(map);
    }
</script>



<script>
    /*_______________________________________driver*/
    function getDriverList(){
        var driverList={
            @foreach($oRestaurantUsers as $oRestaurantUser)

              '{{$oRestaurantUser->users_id}}':
            {'name':'{{$oRestaurantUser->users->first_name}}','position':'{{$oRestaurantUser->users->lat.','.$oRestaurantUser->users->long}}',
                'deliveringOrder':'{{$oRestaurantUser->deliveringOrder}}'},
            @endforeach
        };
        return driverList;
    }
    function addDriverMarker(){
        var driverList=getDriverList();

        for(var driverId in driverList) {
            var positionArray=driverList[driverId]['position'].split(',');
            var iconIndex=driverList[driverId]['deliveringOrder'];
            iconIndex =(iconIndex > 3)? 3:iconIndex;

            addMarker({
                position: {lat: parseFloat(positionArray[0]), lng: parseFloat(positionArray[1])},
                label:driverList[driverId]['name'],
                popupHtmlSelector: '#driver_'+driverId,
                title: driverList[driverId]['name'],
                html:'',//$('#driver_'+driverId).html(),

                icon: '/assets/website/images/driver-icon-'+iconIndex+'.png'
            });
        }
    }
</script>


<div id="restaurantList" style="display:none;">
    @foreach($oRestaurantResults as $oRestaurantResult)
        <div class="oneRestaurant" id="restaurant_{{$oRestaurantResult->id}}">
            <img src="{{$oRestaurantResult->img}}" style="widht:150px;height:150px; float:left;">
            name : {{$oRestaurantResult->name_en}}
            <br>owner name : {{$oRestaurantResult->owner_first_name}}
            <br>Telephone : {{$oRestaurantResult->telephone}}
            <br>Email : {{$oRestaurantResult->email}}
            <br>Rating : {{$oRestaurantResult->rating}}
            <br>Area :<a href="/admin/area/{{$oRestaurantResult->area_id}}"> {{isset($oRestaurantResult->area->name_en)? $oRestaurantResult->area->name_en:''}}</a>
        </div>
    @endforeach
</div>

<script>
    /*_______________________________________restaurant*/
    function getRestaurantList(){
        var restaurantList={
            @foreach($oRestaurantResults as $oRestaurantResult)

              '{{$oRestaurantResult->id}}':
            {'name':'{{$oRestaurantResult->name_en}}','position':'{{$oRestaurantResult->lat.','.$oRestaurantResult->long}}',
                'img':'{{ $oRestaurantResult->img }}'
            },
            @endforeach
        };
        return restaurantList;
    }
    function addRestaurantMarker(){
        var restaurantList=getRestaurantList();

        for(var restaurantId in restaurantList) {
            var positionArray=restaurantList[restaurantId]['position'].split(',');

            addMarker({
                position: {lat: parseFloat(positionArray[0]), lng: parseFloat(positionArray[1])},
                label:restaurantList[restaurantId]['name'],
                popupHtmlSelector: '#restaurant_'+restaurantId,
                title: restaurantList[restaurantId]['name'],
                html:'',//$('#driver_'+driverId).html(),

                icon: restaurantList[restaurantId]['img']
            });
        }
    }
</script>



<div id="serviceBoyList" style="display:none;">
    @foreach($serviceBoyList as $serviceBoy)
        @if(isset($serviceBoy->users->first_name))
            <div class="oneRestaurant" id="service_boy_{{$serviceBoy->users_id}}">

                name : {{$serviceBoy->users->first_name}}
                <br>owner name : {{$serviceBoy->users->mobile}}
                <br>Telephone : {{$serviceBoy->users->phone}}
                <br>Status :<a href="/admin/service_boy/{{$serviceBoy->id}}/edit">{{config('array.service_boy_status')[$serviceBoy->status]}}</a>
                <br>Email : {{$serviceBoy->users->email}}
            </div>
        @endif
    @endforeach
</div>

<script>
    /*_______________________________________service_boy*/
    function getServiceBoyList(){
        var serviceBoyList={
            @if(count($serviceBoyList))
            @foreach($serviceBoyList as $serviceBoy)
@if(isset($serviceBoy->users->first_name))
              '{{$serviceBoy->users_id}}':
            {'name':'{{$serviceBoy->users->first_name}}','position':'{{$serviceBoy->users->lat.','.$serviceBoy->users->long}}',

            },
            @endif
            @endforeach
            @endif
        };
        console.log(serviceBoyList);
        return serviceBoyList;
    }
    function addServiceBoyMarker(){
        var serviceBoyList=getServiceBoyList();

        for(var serviceBoyId in serviceBoyList) {
            var positionArray=serviceBoyList[serviceBoyId]['position'].split(',');

            addMarker({
                position: {lat: parseFloat(positionArray[0]), lng: parseFloat(positionArray[1])},
                label:serviceBoyList[serviceBoyId]['name'],
                popupHtmlSelector: '#service_boy_'+serviceBoyId,
                title: serviceBoyList[serviceBoyId]['name'],
                html:'',//$('#driver_'+driverId).html(),

                icon:'/assets/website/images/service_boy_icon.png'
            });
        }
    }
</script>

<script>


    setTimeout('$("#submit").click()',1000);


</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLkoPoZU4wmIOavt0y7yEj8n2k2mBalRI&callback=initMap"></script>


</html>
