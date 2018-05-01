<!DOCTYPE html>
<html lang="en">
<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        function deleteVariant(id) {
            $("#varientid").val(id);
        }

        function deleteByCheckVariant(id) {
//            alert(id);
            $("#varientidcheck").val(id);
        }

        function deleteByCheckAllVariant(id) {

            alert(id);
//            $("#varientidcheck").val(id);
        }

        function editVariant(id, product_title, title, price, inventory_quantity) {
//            alert(id);
//            alert(title);
//            alert(price);
//            alert(inventory_quantity);

            $("#vid").val(id);
            $("#Product_Titlee").val(product_title);
            $("#Titlee").val(title);
            $("#Pricee").val(price);
            $("#inventory_quantityy").val(inventory_quantity);

        }

        function viewVariant(product_title, title, price, inventory_quantity) {
            $("#Product_Title").val(product_title);
            $("#Title").val(title);
            $("#Price").val(price);
            $("#inventory_quantity").val(inventory_quantity);
        }
    </script>
</head>
<body>
<style>


</style>

</body>
</html>