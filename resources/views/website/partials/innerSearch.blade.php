
<div class="about_part"> <!--about_part-->
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-md-4 linepart">
                <h2><i><img src="{!! $img !!}" alt="icon1" style="max-width:100px;max-height:70px;" ></i> {!! $title !!}</h2>

            </div>

            {!! Form::model((isset($request))?$request:[],['route'=>'restaurant.index','method'=>'get','onsubmit'=>'return empty();submit()']) !!}
            <div class="res_search">

            <div class="input-group add-on">
                            <h2> {{trans('website.search')}}   <span>{{trans('website.restaurant')}}</span> </h2>
                    {!! Form::text('name_en',null,['id'=>'roll-input','class'=>'search_form','placeholder'=>trans("website.searchRestaurant")]) !!}<button class="btn btn-default" id="search_rest_icon"  type="submit" onclick="return empty(); submit()"><i class="glyphicon glyphicon-search"></i></button>
                    
                        <!-- lastvertion -->
                </div>          
                      </div>
            {!! Form::hidden('area_id',null) !!}
            {!! Form::hidden('cuisine_id',null) !!}
            {!! Form::hidden('restaurant_id',null) !!}
{!! Form::close() !!}
        </div>
    </div>
</div> <!--about_part end-->


<script type="text/javascript">
   

function empty() {
    var x;
    x = document.getElementById("roll-input").value;
    if (x == "") {
        alert(" needs to enter any search keyword.");
        return false;
    };
}


</script>

