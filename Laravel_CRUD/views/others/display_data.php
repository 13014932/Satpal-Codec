<html>
</body>
<style>
    table, th, td {
        width: 50%;
        border: 1px solid black;
        /*padding: collapse;*/
    }

    .space {

        display: inline-block;
        width: 150px;
    }


</style>
<form method="post" action="/finelpage">

    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>

    First Name <input type="text" name="fname" value="Test Name"><br><br>
    Last Name <input type="text" name="lname" value="Test Last-Name"><br><br>
    E-mail Id <input type="email" name="email" value="datadisplay@onepage.com"><br><br>
    Mobile Number <input type="text" name="mobile" value="8684846301"><br><br>

    <input type="submit" name="submit" value="submit">
</form>
<?php include 'error.php'; ?>

<div>
    <table>
        <thead>
        <tr>
            <th><strong>S.No.</strong></th>
            <th><strong class="space">ID</strong></th>
            <th><strong class="space">Name</strong></th>
            <th><strong class="space">Last Name</strong></th>
            <th><strong class="space">Email</strong></th>
            <th><strong class="space"> Mobile</strong></th>
            <th><strong> created_at <span class="space"></span> </strong></th>
            <th><strong class="space"> updated_at</strong></th>
            <th><strong class="space"> action</strong></th>

        </tr>
        </thead>
        <tbody>
        <?php


        $i = 0;
        foreach ($get_data as $key => $data) {

            echo "<tr> <th>" . ++$i . "</th>";
            echo " <th>" . $data->id . "</th>";
            echo "<th>" . $data->fname . "</th>";
            echo "<th>" . $data->lname . "</th>";
            echo "<th>" . $data->email . "</th>";
            echo "<th>" . $data->mobile . "</th>";
            echo "<th>" . $data->created_at . "</th>";
            echo "<th>" . $data->updated_at . "</th>";

            echo "<th>" . "DELETE" . "</th></tr>";

        }

        ?>

        </tbody>
    </table>
    <div>


    </div>

</div>
</body>
</html>
