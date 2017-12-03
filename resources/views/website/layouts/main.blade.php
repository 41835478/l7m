<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Sahalat"/>
    <meta name="keywords" content="Sahalat"/>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    {{--<link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">--}}
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>@yield('title') - {{ app_name() }}</title>


    <!-- Bootstrap -->
    @if(config('app.locale')=='ar')

    {!! HTML::style('/assets/website/css/ar/bootstrap.css') !!}
    {!! HTML::style('/assets/website/css/ar/custom.css') !!}
    @else
        {!! HTML::style('/assets/website/css/bootstrap.css') !!}
        {!! HTML::style('/assets/website/css/bootstrap-theme.css') !!}
        {!! HTML::style('/assets/website/css/main_style.css') !!}
        {!! HTML::style('/assets/website/css/responsiveslides.css') !!}
        {!! HTML::style('/assets/website/css/animate.css') !!}

        {!! HTML::style('/assets/website/css/themes.css') !!}



        <!--fav icon-->


    @endif
    {{--{!! HTML::style('/assets/website/css/additional.css') !!}--}}

    

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {!! HTML::script('/assets/website/js/html5shiv.min.js') !!}

    {!! HTML::script('/assets/website/js/respond.min.js') !!}

    <![endif]-->

</head>

<body>

<section class="wrapper-main">


    <section class="top_area">


        @include('website.partials.header')

























        @inject('banner','App\Repositories\website\banner\EloquentBannerRepository')
        {{--*/
$homeBanners= $banner->getByFilter(['type'=>config('array.banner_type_home_banner_index')]);

/*--}}

        <section class="banner">

            <!-- Slideshow 1 -->
            <div class="rslides_container">
                <ul class="rslides" id="slider1">
                    @if(count($homeBanners))
                        @foreach($homeBanners as $homeBanner)

                    <li><img src="{{$homeBanner->img}}" alt="">
                        <div class="caption_sec animated slideInDown">
                            <article class="container">
                                <h1>Fresh meats</h1>
                                <h5>Tender, Healthier & Tastier meat straight from farms</h5>
                                <a href="#">Read More</a> </article>
                        </div>
                    </li>
                        @endforeach
                    @endif





                </ul>
            </div>
            <!---slideshow------->

</section>
















        <section class="content-wrapper">




                            @section('headerForm')

                            @show

            </section>
        </section>


    </section>


    @yield('content')




<div class="modal fade" id="generalPopupModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index:999999;">
    <div class="modal-dialog custom_width" role="document">

        <div class="modal-content" style="background-color:#fff;">
            <i style="float:right;padding-right:10px;cursor:pointer; font-size: 28px;" onclick="$('#generalPopupModel').modal('hide');">&times;</i>

            <div class="modal-body padbottom" style="padding:10px; clear:both;">




            </div>

        </div>
    </div>
</div>

@include('website.partials.footer')
</section>


@section('script')
        <!-- jQuery -->


{!! HTML::script('/assets/website/js/jquery.min.js') !!}
{!! HTML::script('/assets/website/js/bootstrap.js') !!}

{!! HTML::script('/assets/website/js/modernizr-1.7.min.js') !!}
{!! HTML::script('/assets/website/js/classie.js') !!}
{!! HTML::script('/assets/website/js/uisearch.js') !!}
{!! HTML::script('/assets/website/js/uisearch.js')!!}
{!! HTML::script('/assets/website/js/custom.js')!!}
{!! HTML::script('/assets/website/js/custom_js.js')!!}
{!! HTML::script('../assets/website/js/jquery.bxslider.min.js')!!}
{!! HTML::script('/assets/website/js/jquery.smoove.js')!!}
{!! HTML::script('/assets/website/js/jquery1.11.3.min.js')!!}
{!! HTML::script('/assets/website/js/owl.carousel.js')!!}
{!! HTML::script('/assets/website/js/owl.carousel-bk.js')!!}
{!! HTML::script('/assets/website/js/prettymaps.js')!!}
{!! HTML::script('/assets/website/js/responsiveslides.min.js')!!}

{!! HTML::script('/assets/website/js/smk-accordion.js')!!}













<script src="/assets/website/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
$(function () {

    // Slideshow 1
    $("#slider1").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 1500,
        namespace: "centered-btns"
    });


});

</script>
<script src="/assets/website/js/jquery.smoove.js"></script>
<script>$('.about_wrap .row').smoove({offset:'40%'});</script>
<script>$('.shop_box').smoove({offset:'40%'});</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOaSmNcBHf07FWaVlO4pXgyFYMjmCPAEg"></script>
<script src="/assets/website/js/prettymaps.js"></script>
<script>

    $(function(){
        //default
        $('.map-canvas').prettyMaps({
            address: 'Kuwait City',
            image: 'images/map-icon.png',
            hue: '#d1bebe',
            saturation: -80
        });

    });
</script>




<script>
   // new UISearch(document.getElementById('sb-search'));
</script>

<script>
  //  $('header').load('header.html');
</script>


<script>

    function showSuccess(form, data) {

        var defaultSuccessMessagesDiv = '<div style="background-color:lightgreen;padding:5px 10px;" id="defaultSuccessMessagesDiv"></div>';


        var successHtml = "Success";

        var successMessagesDiv = $('.successMessagesDiv,.success,.successMessages');
        if (successMessagesDiv.length == 0) {
            $(defaultSuccessMessagesDiv).insertBefore(form);
            successMessagesDiv = $('#defaultSuccessMessagesDiv');
        }

        successMessagesDiv.html(successHtml)
    }

    function showErrors(form, xhr) {

        var defaultErrorMessagesDiv = '<div style="background-color:indianred;padding:5px 10px;" id="defaultErrorMessagesDiv"></div>';


        var errorsHtml = "";
        if (xhr.status == 422) {
            var responseJson = jQuery.parseJSON(xhr.responseText);

            for (var key in responseJson) {
                var inputNode = form.find('[name="' + key + '"]');
                inputNode.parent().parent().addClass('has-error');
                $('<p class="help-block">' + responseJson[key] + '</p>').insertAfter(inputNode);
                errorsHtml += responseJson[key] + "<br>";
            }
        }

        var errorMessagesDiv = $('.errorMessagesDiv,.errors,.errorsMessages');
        if (errorMessagesDiv.length == 0) {
            $(defaultErrorMessagesDiv).insertBefore(form);
            errorMessagesDiv = $('#defaultErrorMessagesDiv');
        }

        errorsHtml = (errorsHtml == "") ? "Error,Please try again later." : errorsHtml;
        errorMessagesDiv.html(errorsHtml);
    }
    function removeCurrentMessages(form) {

        $('#defaultSuccessMessagesDiv,#defaultErrorMessagesDiv').remove();
        form.find('.help-block,.errors,.success').remove();
        form.find('.has-error').removeClass('has-error');

    }
    function submitForm(formJsForm) {

        var form = $(formJsForm);

        if (form.attr('startSubmit') == "true") {
            return false;
        }
        removeCurrentMessages(form);
        form.attr('startSubmit', 'true');

        var url = form.attr('action');
        var method = form.attr('method');

        var loadingNode = $('.loading');
        loadingNode = ( loadingNode.length == 0) ? form.find("[type='submit']") : loadingNode;


        var loadingNodeOrigin = loadingNode.html();


        var loadingHtml = loadingNode.data('loading');

        loadingHtml = ( typeof loadingHtml === "undefined") ? "loading ..." : loadingHtml;


        loadingNode.html(loadingHtml);

//        var errorMessageNode=$(".")

        $.ajax({
            dataType: 'text',// 'json',
            url: url,
            type: method,
            data: form.find(' input[type=\'text\'],input[type=\'password\'],  input[type=\'hidden\'],  input[type=\'radio\']:checked,  input[type=\'checkbox\']:checked,  select,  textarea'),
            success: function (data) {


                try {
                    var responseJson = jQuery.parseJSON(data);
                } catch (e) {
                    showErrors(form, data);
                    return false;
                }
                if (typeof  responseJson.status == "undefined") {

                } else {

                    showSuccess(form, data);

                    if (typeof  responseJson.redirect != "undefined") {
                        window.location.href = responseJson.redirect;
                    }
                }

            },
            error: function (xhr) {
                console.log(xhr.responseText);
                showErrors(form, xhr);

            },
            complete: function () {

                loadingNode.html(loadingNodeOrigin);
                form.attr('startSubmit', 'false');
            }
        });

    }

    $('.ajaxForm').submit(function () {
        submitForm(this);

        event.preventDefault();
        event.stopPropagation();
    });
</script>


{!! HTML::script('http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyDLkoPoZU4wmIOavt0y7yEj8n2k2mBalRI&demooooo') !!}


<script>
    var geocoder = new google.maps.Geocoder();
    /*___________________________________-auto select area */

    function longLatToAddress(position){
        var latLng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);

        geocoder.geocode({
            latLng: latLng
        }, function(responses) {
            if (responses && responses.length > 0) {
                formateRespondToAddress(responses[0].formatted_address);
            } else {
                formateRespondToAddress('Cannot determine address at this location.');
            }
        });

    }//longLatToAddress

    function formateRespondToAddress(address){

        var addressArea=address.split(',');

        if(addressArea.length > 0 ){
            for(var i=0;i<addressArea.length;i++){

                selectOptionFromDropDown(addressArea[i],'#areaSearchSelect option');
            }

        }
    }

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(longLatToAddress);
        } else {
            return "Geolocation is not supported by this browser.";
        }
    }

    getLocation();
    /*__________________________________________________END___auto select area__*/

    function selectOptionFromDropDown(searchText,listSelector){
        var listItems=$(listSelector);
        var searchText=searchText.replace(/\s/g,'.*').toLowerCase();

        listItems.each(function(){
            var listItem=$(this);
            if(listItem.text().toLowerCase().match(new RegExp('.*'+searchText+'.*'))){
                listItem.prop('selected',true);
            }else{
              //  listItem.hide();
            }
        });

    }

</script>





{{--*/

$oAdvertisementBanners=$banner->getByFilter(['type'=>config('array.banner_type_advertisement_index'),'default'=>1]);
$aAdvertisementBanners=[];
$aAdvertisementUrl=[];
if(count($oAdvertisementBanners)){
foreach($oAdvertisementBanners as $oAdvertisementBanner){
$aAdvertisementBanners[]=$oAdvertisementBanner->img;
$aAdvertisementUrl[]=$oAdvertisementBanner->url;
}
}
$randomIndex=rand(0,count($aAdvertisementBanners) - 1);
$randomAdvertisement='';
$randomAdvertisementUrl='';
if(count($aAdvertisementBanners) >0){
$randomAdvertisement=$aAdvertisementBanners[$randomIndex];
$randomAdvertisementUrl=$aAdvertisementUrl[$randomIndex];
}
        /*--}}

<script>

    function setCookie(key, value) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
        document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
    }

    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    }
    function showAdvertize() {
        var model=$('#generalPopupModel');
        var imgLink="{{$randomAdvertisement}}";
        if(getCookie('advertiseShow')==1 || imgLink==""){return false;}
        model.find('.modal-body').html('<img src="'+imgLink+'" onclick="window.location.href=\'{{$randomAdvertisementUrl}}\'" style="width:100%;margin-bottom:10px; position:relative; z-index:99999; cursor:pointer;">');

        if(model.length > 0){
            $('#generalPopupModel').modal({
                show: 'false'
            });
        }
        setCookie("advertiseShow",1);
    }
    setTimeout('showAdvertize()',500);
</script>



@show


</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/599198221b1bed47ceb0483a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>
