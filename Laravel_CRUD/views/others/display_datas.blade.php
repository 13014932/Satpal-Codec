<html>
</body>
<style>
table, th, td {
	width : 50%;
    border: 1px solid black;
    padding:collapse;
}
.space {

      display:inline-block;
      width: 150px;
}


</style>
<form  method="post" action="/finelpage"  enctype="multipart/form-data">
      echocsrf_field() ;
  First Name	<input type="text" name="fname" value="Test Name"><br><br>
  Last Name	<input type="text" name="lname" value="Test Last-Name"><br><br>
  E-mail Id	<input type="email" name="email" value="datadisplay@onepage.com"><br><br>
  Mobile Number <input type="text" name="mobile" value="8684846301"><br><br>

  <input type="submit" name="submit" value ="submit">
</form>

<div >
  <table >
    <thead>
      <tr >
        <th><strong>S.No.</strong></th>
				<th><strong class="space">ID</strong></th>
        <th><strong class="space">Name</strong></th>
        <th><strong class="space">Last Name</strong></th>
        <th><strong class="space">Email</strong></th>
        <th><strong class="space">	Mobile</strong></th>
        <th><strong >	created_at  <span class="space"></span>               </strong></th>
        <th><strong class="space">	updated_at</strong></th>
				<th><strong class="space">	action</strong></th>

      </tr>
    </thead>
    <tbody>
				<?php




        foreach ($petani as $key => $data) {





         <tr> <th>  echo ++$i; </th>
           <th> echo $data->id ;</th>
           <th> echo $data->	fname ;</th>
           <th> echo $data->lname ;</th>
           <th> echo $data->email ;</th>
           <th>echo $data->mobile ;</th>
           <th>echo $data->created_at ;</th>
           <th>echo $data->updated_at ;</th>
					<th>DELETE  </th>
         </tr>

                }
                ?>

    </tbody>
  </table>
</div>
</body>
</html>
