
 {!! HTML::style('/assets/website/css/invoice.css') !!}

 {!! HTML::style('/assets/website/css/bootstrap.css') !!}

 <style type="text/css">
 	.well{
 		background-color: #fff !important;
 	}
 </style>
    <div class="container">
        <div class="row">
            <div class="well col-xs-10  col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">

                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 "></div>
                    <div class="col-xs-6 col-sm-6 col-md-6" id="logo">
                        <a href="#">
                            <img src="/assets/website/images/logo.png" class="img-responsive center-block" />
                        </a>
                    </div>
                </div>
                <div class="row" id="headlines">
                    <div class="col-xs-6 col-sm-6 col-md-6" id="fisrt-box" ><span>Thank You! </span>For Ordering Through Sahalat</div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6" id="sec-box" ><span >Your Order!</span><br>Order Number: #{{$order->success_order_id}}</div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <strong class="customer-info" >CUSTOMER INFO</strong>
                        <br>
                        <address class="f-address">

                            <strong>First Name : </strong>{{isset( $order->users->first_name)?$order->users->first_name:'' }}
                            <br>
                            <strong>Last Name : </strong>{{isset( $order->users->last_name)?$order->users->first_name:'' }}
                            <br>
                            <strong><abbr title="Your Mobile Number">Mobile Number : </abbr> </strong>
 							{{isset( $order->users->mobile)?$order->users->mobile:'' }}
                        </address>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 ">
                        <strong class="order-info">ORDER DETAILS!</strong>
                        <br>
                        <address>
                        	<strong> Address :</strong> {{isset( $order->Address->name)?$order->Address->name:'' }}
                        	   <br>
                            <strong>Company Name : </strong>Sahalat
                            <br>
                            <strong>Order Date and Time: </strong>{{$order->deliver_date}} {{$order->deliver_time}}
                            <br>
                            
                            <strong>Transaction ID: {{$order->transaction_id()}}</strong>
                            <br>
                            <strong>Payment Method: </strong>@if(isset($order->payment()->first()->type)) {{array_key_exists($order->payment()->first()->type,config('array.payment_type') )?config('array.payment_type')[$order->payment()->first()->type]:''}}
                             @endif
                            <br>
                        </address>
                    </div>
                </div>
                <div class="row" id="table-info" >

                    <div class="text-center" style="margin-bottom:5%;">
                        <h1 class="online-rec">Online Receipt</h1>
                    </div>

                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Qty.</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>


@if(count($order->cart))

@foreach($order->cart as $cart)
                            <tr>
                                <td class="col-md-9">{{$cart->dish->name_en}}</h4></td>
                                <td class="col-md-1" style="text-align: center"> {{$cart->quantity }} </td>
                                <td class="col-md-1 text-center">{{$cart->unit_price }}</td>
                                <td class="col-md-1 text-center">{{$order->sub_total}}</td>
                            </tr>
                           
            @endforeach 


@endif
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td class="text-right">
                                    <p>
                                        <strong>Subtotal: </strong>
                                    </p>
                                  
                                </td>
                                <td class="text-center">
                                    
                                    <p>
                                        <strong>{{$order->sub_total}}</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td class="text-right"><h4><strong>Total: </strong></h4></td>
                                <td class="text-center text-danger"><h4><strong>{{$order->total}}</strong></h4></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <row>
                    <strong class="disclaimer" >Disclaimer</strong>
                    <p >
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker.. the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker..
                    </p>
                </row>

                <row>
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <div class="row">

                                <a href="#"><img src="img/app_store.png" /></a>
                            </div><br />
                            <div class="row">
                                <a href="#"><img src="img/google_play.png" /></a>
                            </div>
                        </div>
                        <div class="col-md-8">

                            <div class="row">
                                <span class="followus">FOLLOW US</span>
                            </div>
                            <div class="row">
                                <div class="social_link_main">
                                    <a href="http://www.twitter.com"><img src="/assets/website/images/twitter.jpg" alt="logo"></a>
                                    <a href="http://www.facebook.com"><img src="/assets/website/images/facebook.jpg" alt="logo"></a>
                                    <a href="http://www.youtube.com"><img src="/assets/website/images/you_tube.jpg" alt="logo"></a>
                                    <a href="http://www.instagram.com"><img src="/assets/website/images/instagram.jpg" alt="logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="row">
                                <span>
                                    <img class="c-icon" src="/assets/website/images/email.png" />info@sahalat.com
                                </span>

                            </div>
                            <div class="row">
                                <span>
                                    <img class="c-icon" src="/assets/website/images/phone.png"  /><span style="font-size:14px">0534 432 4639 |  4834 9498 </span>
                                </span>

                            </div>
                            <div class="row">
                                <span>
                                    <img class="c-icon" src="/assets/website/images/address.png" />sahalat Address-kuwait
                                </span>

                            </div>
                        </div>
                    </div>
                </row>
            </div>
        </div>
    </div>
