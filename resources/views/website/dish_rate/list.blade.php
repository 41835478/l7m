

{!! Form::open(['onsubmit'=>" rate({'description':$('#dishCommentInput').val(),'id':".$dish_id.",'model':'dish' });  
rate({'title':$('#dishtitleInput').val(),'id':".$dish_id.",'model':'dish' });  
event.preventDefault();event.stopPropagation(); return false;"])  !!}
{!! Form::text('title',null,['id'=>'dishtitleInput','class'=>'form-control' , 'placeholder'=>'Title']) !!}
<br>
{!! Form::text('description',null,['id'=>'dishCommentInput','class'=>'form-control','placeholder'=>'Comment']) !!}
<br>
<input type="submit" value="submit" class="btn  btn-defult float-right">
{!! Form::close() !!}
@if(count($dishRate))

@foreach($dishRate as $rate)



  <!--   <section class="reviews">
    	<hr>
        <strong>{{$rate->users->first_name}}  </strong>
        <p>  {{$rate->description}} </p>
        <span style="float:right;"> {{$rate->created_at}}</span>
    </section> -->
    @endforeach

    @endif
