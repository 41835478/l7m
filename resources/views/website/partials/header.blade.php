









<section class="top-wrapper">
    <article class="container">
        <header>
            <div class="top-nav">
                <ul>
                    <li>  <a class="sign" @if(isset(current_user()->getUser()->id)) title="logout" href="/logout" @else  data-toggle="modal" title="Login"  href="/signin" @endif> {{trans('website.signIn')}}</a>
                    </li>
                    <li><a title="SingUp"  @if(isset(current_user()->getUser()->id)) href="/users#tab_default_1" @else   href="/users/create" @endif>{{trans('website.newUser')}}</a></li>
                    <li><a href="new-user.html" class="lang"><span>5</span></a></li>
                </ul>
            </div>
            <div class="menu-bar">
                <div class="logo"><a href="/"> <img src="/assets/website/images/logo.png" alt="logo"></a></div>
                <div class="inn_bar">


                    <div class="lang"><a @if(config('app.locale') =='ar')  href="?locale=en" title="en" @else href="?locale=ar" title="ar" @endif> ????  </a>
                        </div>

                    <!--menu-->
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="/">{{trans('website.home')}}</a></li>
                                    <li><a href="/restaurant">All L7m Shop</a></li>
                                    <li><a href="/restaurant?type=new">New L7m Shop</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="/dish?type=mostSelling">Most Selling L7m</a></li>
                                    <li><a href="#">Promotion</a></li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                        <!--/.container-fluid -->
                    </nav>
                    <!--menu-->

                </div>
            </div>
        </header>
    </article>
</section>













































@if(false)


<header> <!--header start-->
        <div class="container">
            <div class="nav_main">
                <div class="row">


                    <div class="col-md-1 col-sm-1 col-xs-12  @if(config('app.locale') =='ar') pull-left @else pull-right @endif">
                        <div class="aside_button_part">
                            <ul>
                                <li><a  @if(config('app.locale') =='ar')  href="?locale=en" title="en" @else href="?locale=ar" title="ar" @endif><img src="/assets/website/images/header_icon1.jpg"></a></li>
                                <li><a title="SingUp"  @if(isset(current_user()->getUser()->id)) href="/users#tab_default_1" @else   href="/users/create" @endif><img src="/assets/website/images/header_icon2.jpg"></a></li>
                                <li><a   @if(isset(current_user()->getUser()->id)) title="logout" href="/logout" @else  data-toggle="modal" title="Login" data-target="#myModal" href="#" @endif><img src="@if(config('app.locale') =='ar') /assets/website/images/ar/header_icon3.png @else /assets/website/images/header_icon3.png @endif "></a></li>



                <!--                 <li> <a href="\logout"> <img src="@if(config('app.locale') =='ar') /assets/website/images/ar/header_icon3.png @else /assets/website/images/header_icon3.png @endif "></a> </li>
 -->
                            </ul>
                        </div>



                    </div>



                    <div class="col-md-11 col-sm-11">
                        <!-- Static navbar -->
                        <nav class="navbar navbar-default">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">{{trans('website.toggleNavigation')}}</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/">
                                    <img src="/assets/website/images/logo.png" alt="logo">
                                </a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active margintop2"><span><img src="/assets/website/images/home.png" alt="icons"></span><a href="/">{{trans('website.home')}}</a></li>
                                    <li><span><img src="/assets/website/images/restaurants.png" alt="icons"></span><a href="/restaurant">{{trans('website.allRestaurant')}}</a></li>
                                    <li><span><img src="/assets/website/images/restaurants2.png" alt="icons"></span><a href="/restaurant?type=new">{{trans('website.newRestaurants')}}</a></li>
                                    <li><span><img src="/assets/website/images/most_selling.png" alt="icons"></span><a href="/dish?type=mostSelling">{{trans('website.mostSellingDishes')}}  </a></li>
                                    <li><span><img src="/assets/website/images/about_sahalat.png" alt="icons"></span><a href="/about">{{trans('website.aboutSahalat')}}  </a></li>



                                   <li >

            {!! Form::model((isset($request))?$request:[],['route'=>'restaurant.index','method'=>'get','onsubmit'=>'return empty();submit()']) !!}


             <div class="search_wrap ">
                           <!-- onclick=" $('.search_wrap').addClass('active'); return empty(); submit()"><img src="/assets/website/images/search22.png" alt="search" /></button> -->
                    {!! Form::text('name_en',null,['id'=>'roll-input','placeholder'=>trans("website.searchRestaurant")]) !!}<button  id="search_bt"  type="submit" onclick=" return empty(); submit()"><img src="/assets/website/images/search22.png" alt="search" /></button>

                        <!-- lastvertion -->

                      </div>
            {!! Form::hidden('area_id',null) !!}
            {!! Form::hidden('cuisine_id',null) !!}
            {!! Form::hidden('restaurant_id',null) !!}
                      {!! Form::close() !!}
                                   </li>







                                </ul>

                            </div>

                        </nav>
                    </div>




                </div>
            </div>
        </div>
    </header>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{trans('website.login')}}</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">

                            {!! Form::open(['route'=>'client.auth.login','class'=>'ajaxForm']) !!}
                            <fieldset>
                                <div class="form-group clearfix">
                                    <label class="head">{{trans('website.userName')}}<span class="reqrd">*</span></label>
                                    <input class="form-control" placeholder="{{trans('website.email')}}" name="email" type="text">
                                </div>
                                <div class="form-group clearfix">
                                    <label class="head">{{trans('website.password')}} <span class="reqrd">*</span></label>
                                    <input class="form-control" placeholder="{{trans('website.password')}}" name="password" type="password" value="">
                                </div>
                                <div class="checkbox clearfix">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> {{trans('website.staySignedIn')}} | <a href="/recover"> {{trans('website.forgotYourPassword')}}.</a> | <a href="/users/create"> {{trans('website.createAccount')}}.</a>
                                    </label>
                                </div>




                                <center><button type="submit" class="btn btn-primary">{{trans('website.login')}}</button></center>
                            </fieldset>
                        {!! Form::close() !!}
                        <center>
                        <a class="btn btn-primary" style="color:#ffffff;" href="/google-login">{{trans('website.googleSignIn')}}</a>
                        <a class="btn btn-primary" style="color:#ffffff;"  href="/linkedin-login">{{trans('website.linkedinSignIn')}}</a>
                        <a class="btn btn-primary" style="color:#ffffff;"  href="/facebook-login">{{trans('website.facebookinSignIn')}}</a>

                        </center>
                    </div>
                </div>

            </div>
        </div>
    </div>








    <div class="modal fade" id="messageDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title myModalLabel header" id="customerReview">{{trans('website.customerReview')}}</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body body">






                    </div>
                </div>

            </div>
        </div>
    </div>

                                <script type="text/javascript">
                                          function empty() {
                                          var x;
                                          x = document.getElementById("search_text").value;
                                           if (x == "") {
                                              alert(" needs to enter any search keyword.");
                                          return false;
                                          };
                                        }


                                    </script>

@endif