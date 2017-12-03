<div class="col-sm-3">
    <section class="in-section">
        <h3>{{trans('website.popularRestaurant')}}</h3>
        <ul>
            @inject('rRestaurant', 'App\Repositories\website\restaurant\RestaurantContract')

            @foreach($rRestaurant->getFooterPopularRestaurantMenu( ) as $id=>$onePopularRestaurant)
                <li><a href="/restaurant/{{$id}}">{{$onePopularRestaurant}}</a></li>
            @endforeach
        </ul>
    </section>
</div>