/**
 * Created by taylor on 06/02/2016.
 */

/*______________________________get_address_from_longitude and latitude*/
//http://maps.googleapis.com/maps/api/geocode/json?latlng=31.608151699999993,36.3498097&sensor=true

function longLatToAddress(latitude,lngitude){
     $.ajax({
        type: 'get',
        url: 'http://maps.googleapis.com/maps/api/geocode/json?latlng='+latitude+','+lngitude+'&sensor=true',
        data: {},
        success: function (data) {
            formateRespondToAddress(data,latitude,lngitude);
        }, error: function () {

        }, complete: function () {

        }
    });
}//longLatToAddress

function formateRespondToAddress(data,latitude,lngitude){

    var formatted_address=data.results[1].formatted_address;

    var address_components=data.results[1].address_components;

    var city_short_name=address_components[0].short_name;
    var city_long_name=address_components[0].long_name;
    var country_short_name=address_components[1].short_name;
    var country_long_name=address_components[1].long_name;


    $('#placeInput').val(formatted_address);

    var addressData= {
        'infoProvider':'geoLocationGoogle',
        'ip':'ip',
        'countryIos2':country_short_name,
        'countryName':country_long_name,
        'city':city_long_name,
        'cityShortName':city_short_name,
        'longitude':lngitude,
        'latitude':latitude,
        'address':formatted_address,
        'street':'',
        'region':'',
        'org':'',
        'hostname':''
};
    sendAddressDataToSave(addressData);
}
/*____________________________End__get_address_from_longitude and latitude*/
/*____________________________________________getLongitude and latitude*/
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        return "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    var latitude=position.coords.latitude;
    var longitude=position.coords.longitude;
    longLatToAddress(latitude ,  longitude) ;
$('#insertAddressIframe').attr('src','https://www.google.com/maps?q='+latitude+','+longitude+'&output=embed');
    $('#selectAddressFromGoogleMapOpenButton').attr('onClick',"window.open('./selectAddressFromMap?latitude="+latitude+"&longitude="+longitude+"', 'address map', 'width=780,height=300,status=yes');");
    $('#hiddenLatitudeInput').attr('value',latitude);
    $('#hiddenLongitudeInput').attr('value',longitude);
    //$('#insertAddressIframe').attr('src','/selectAddressFromMap?latitude='+latitude+'&longitude='+longitude);

}

/*_______________________________________END_____getLongitude and latitude*/

function sendAddressDataToSave(addressData){
    return;
    $.ajax({
        type: 'post',
        url: './lib/address/saveAddressInfo.php',
        data: {'addressData':addressData},
        success: function (data) {
        }, error: function () {

        }, complete: function () {

        }
    });
}