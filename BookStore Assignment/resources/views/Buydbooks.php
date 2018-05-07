
<?php echo View::make('BootStrapTable'); ?>

<style>


    table.dataTable td {

        text-align: center;
    }
    /*massge on column hover*/
    .message{
        display:none;
        color:#000;
        background:#999;
        position:absolute;
        top:10px;
    }

    th{
        position:relative;
    }

    .anchor:hover + .message{
        display:block !important;
        z-index:10;
    }
    .dateset{
        width: 170px;

    }
</style>

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-lg-4">
                    <h2><span>Buyd Books View Table</span></h2>

                    <!--                                        <a href="#" class="btn btn-info btn-lg">-->
                    <!--                                            <span class="glyphicon glyphicon-refresh"> </span>-->
                    <!--                                        </a>-->

                </div>

<div class="col-lg-6">
                    <a href="/userbooks" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i>
                        <span>Buy More Books</span></a>

                </div>
            </div>
        </div>
        <table class="table table-striped table-hover display " cellspacing="0" id="datatable">
            <thead>
            <tr>


                <th class='dateset'>Book-ID</th>
                
                <th class='space'>Book-Price</th>

                <th class='space'>Book-Quantity</th>
                
                <th class='dateset'>Book-Buy_Date</th>

               
                

            </tr>
            </thead>
            <tbody>


            <?php
               // $vendors - vendors data come from VendorsController
                       foreach ($buydbooks as $book) {
            
                      
            
                            echo "<tr><td class='dateset'>" . $book->book_id . "</td>";
                            echo "<td class='space'>" . $book->book_price . "</td>";
                            echo "<td class='space'>" . $book->quantity . "</td>";
                            echo "<td class='dateset'>" . $book->created_at . "</td>";
                           
            
			
                           
                           
            
            
                        }
            ?>
</tr>
            </tbody>
        </table>


    </div>

</div>
<script>
function deleteVariant(id,price,quantity) {
			$("#book_id").val(id);
			$("#book_price").val(price);
			 $("#book_quantity").val(quantity);
            
        }
</script>
<!-- Edit Vendor Split Modal HTML -->



