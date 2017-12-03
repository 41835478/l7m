

{!! Form::open(['onsubmit'=>" rate({'description':$('#dishCommentInput').val(),'id':".$dish_id.",'model':'dish' });  event.preventDefault();event.stopPropagation(); return false;"])  !!}
{!! Form::text('description',null,['id'=>'dishCommentInput','class'=>'form-control']) !!}

{!! Form::close() !!}
@if(count($dishRate))

@foreach($dishRate as $rate)



    <section class="reviews">
        <strong>{{$rate->users->first_name}}  </strong>
        <p>  {{$rate->description}} </p>
        <span style="float:right;"> {{$rate->created_at}}</span>
    </section>
    @endforeach

    @endif
