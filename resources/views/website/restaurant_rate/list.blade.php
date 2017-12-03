
{!! Form::open(['onsubmit'=>" rate({'description':$('#restaurantCommentInput').val(),'id':".$restaurant_id.",'model':'restaurant' });  event.preventDefault();event.stopPropagation(); return false;"])  !!}
{!! Form::text('description',null,['id'=>'restaurantCommentInput','class'=>'form-control']) !!}
{!! Form::submit('Submit',['style'=>'float:right;border-radius: 15px;','onclick'=>'location.reload();']) !!}
<br>

{!! Form::close() !!}
@if(count($restaurantRate))

@foreach($restaurantRate as $rate)



    <section class="reviews">
        <strong>{{$rate->users->first_name}}  </strong>
        <p>  {{$rate->description}} </p>
        <span style="float:right;"> {{$rate->created_at}}</span>
    </section>
    @endforeach

    @endif
