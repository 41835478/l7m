@if (count($oResults))
  <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>



<table style="width:90%">

  <tr>
    <th>ID</th>
    <th>order ID</th>
	 <th>Users</th>
    <th>amount</th>
     <th>status </th>
    <th> type</th>
<th> notification </th>
<th> created_at</th>
      
  </tr>
  <tr>
   @foreach($oResults as $oResult)
  <td> {{$oResult->id}} </td>
 <td>{{ $oResult->order_id }} </td>
 <td> {{ $oResult->users->first_name }} </td>


 <td>{{ $oResult->amount }}</td>

     <td>{{ config('array.payment_status')[$oResult->status] }}</td>

      <td>{{  config('array.payment_type')[$oResult->type] }}</td>

         <td>{{  config('array.payment_notification')[$oResult->notification] }}</td>

                               <td>{{ $oResult->created_at }}</td>


  </tr>
  <tr>
   <!--  <td>February</td>
    <td>$50</td> -->
 
   @endforeach


   @endif

    </tr>
</table>