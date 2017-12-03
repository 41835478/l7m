
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
    <th>Name</th>
	 <th>Total</th>
    <th>Sahalat charge</th>
     <th>Deliver date </th>
    <th> Area</th>

      <th> Status</th>
  </tr>
  <tr>
@foreach($oResults as  $key=> $value)
    <td>{{$value['id']}} </td>
   <td>{{$value['name']}}</td> 

 <td>{{$value['total']}}</td> 


 <td>{{$value['sahalat_charge']}}</td> 


 <td>{{$value['deliver_date']}}</td> 


 <td>{{$value['name_en1']}}</td> 

 <td>{{$value['status']}}</td> 
  </tr>
  <tr>
   <!--  <td>February</td>
    <td>$50</td> -->

 @endforeach
  </tr>
</table>








