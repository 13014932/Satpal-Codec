<html>
<body>
<style>
    table, th, td {
        width: 50%;
        border: 1px solid black;
        padding: collapse;
    }

</style>


<form method="post" action="/finelpage" enctype="multipart/form-data">

    {{csrf_field()}}

    First Name <input type="text" name="fname" value="Test Name"><br><br>
    Last Name <input type="text" name="lname" value="Test Last-Name"><br><br>
    E-mail Id <input type="email" name="email" value="datadisplay@onepage.com"><br><br>
    Mobile Number <input type="text" name="mobile" value="86767667"><br><br>

    <input type="submit" name="submit" value="submit">
</form>


</body>
</html>
