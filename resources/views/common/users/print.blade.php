
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
    <th>email</th>
	 <th>first_name</th>
    <th>last_name</th>
     <th>mobile </th>
    <th> House Phone </th>
    <th> gender</th>
  </tr>
  <tr>

    <td>{{$users->id}} </td>

    <td>{{$users->email}} </td>

    <td>{{$users->first_name}} </td>

        <td>{{$users->last_name}} </td>

        <td>{{$users->mobile}} </td>


        <td>{{$users->phone}} </td>
<?php 
if($users->gender==0)
{
	echo "<td> male </td>";
}else echo "<td>female </td>";

?>
         </td>

  </tr>
  <tr>
   


  </tr>
</table>


