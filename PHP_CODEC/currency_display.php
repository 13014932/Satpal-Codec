<!docttype html>
<html>
<body>

<?php
include 'currency.php';

$c_obj=new currency(8,2,10,8);
print $c_obj->doller();
print $c_obj->pound();
print $c_obj->rupees();


?>


</body>
</html>