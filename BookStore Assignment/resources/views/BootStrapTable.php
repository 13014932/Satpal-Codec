<?php echo View::make('BooksLayout'); ?>

<style type="text/css">
    .border_radius{

        border-radius: 25px;
    }
    .space {

    }
    table.table td a.view {
        color: #03A9F4;
    }

    .table-wrapper {
        background: #fff;
        padding: 80px 2px;
        margin: 40px -200px;
        border-radius: 3px;

    }
    .table-title {
        padding-bottom: 15px;
        background: #435d7d;
        color: #fff;
        padding: 16px 30px;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
    .table-title .btn-group {
        float: right;
    }
    .table-title .btn {
        color: #fff;
        float: right;
        font-size: 13px;
        border: none;
        min-width: 50px;
        border-radius: 2px;
        border: none;
        outline: none !important;
        margin-left: 10px;
    }
    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }
    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
        padding: 12px 15px;
        vertical-align: middle;
    }
    table.table tr th:first-child {
        width: 60px;
    }
    table.table tr th:last-child {
        width: 100px;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child i {
        opacity: 0.9;
        font-size: 22px;
        margin: 0 5px;
    }
    table.table td a {
        font-weight: bold;
        color: #566787;
        display: inline-block;
        text-decoration: none;
        outline: none !important;
    }
    table.table td a:hover {
        color: #2196F3;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
    table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {
        background: #0397d6;
    }
    .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
    /* Custom checkbox */
    .custom-checkbox {
        position: relative;
    }
    .custom-checkbox input[type="checkbox"] {
        opacity: 0;
        position: absolute;
        margin: 5px 0 0 3px;
        z-index: 9;
    }
    .custom-checkbox label:before{
        width: 18px;
        height: 18px;
    }
    .custom-checkbox label:before {
        content: '';
        margin-right: 10px;
        display: inline-block;
        vertical-align: text-top;
        background: white;
        border: 1px solid #bbb;
        border-radius: 2px;
        box-sizing: border-box;
        z-index: 2;
    }
    .custom-checkbox input[type="checkbox"]:checked + label:after {
        content: '';
        position: absolute;
        left: 6px;
        top: 3px;
        width: 6px;
        height: 11px;
        border: solid #000;
        border-width: 0 3px 3px 0;
        transform: inherit;
        z-index: 3;
        transform: rotateZ(45deg);
    }
    .custom-checkbox input[type="checkbox"]:checked + label:before {
        border-color: #03A9F4;
        background: #03A9F4;
    }
    .custom-checkbox input[type="checkbox"]:checked + label:after {
        border-color: #fff;
    }
    .custom-checkbox input[type="checkbox"]:disabled + label:before {
        color: #b8b8b8;
        cursor: auto;
        box-shadow: none;
        background: #ddd;
    }
    /* Modal styles */
    .modal .modal-dialog {
        max-width: 400px;
    }
    .modal .modal-header, .modal .modal-body, .modal .modal-footer {
        padding: 20px 30px;
    }
    .modal .modal-content {
        border-radius: 3px;
    }
    .modal .modal-footer {
        background: #ecf0f1;
        border-radius: 0 0 3px 3px;
    }
    .modal .modal-title {
        display: inline-block;
    }
    .modal .form-control {
        border-radius: 2px;
        box-shadow: none;
        border-color: #dddddd;
    }
    .modal textarea.form-control {
        resize: vertical;
    }
    .modal .btn {
        border-radius: 2px;
        min-width: 100px;
    }
    .modal form label {
        font-weight: normal;
    }
    .custom-checkbox {
        min-height: 1rem;
        padding-left: 0;
        margin-right: 0;
        cursor: pointer;
    }
    .custom-checkbox .custom-control-indicator {
        content: "";
        display: inline-block;
        position: relative;
        width: 30px;
        height: 10px;
        background-color: #818181;
        border-radius: 15px;
        margin-right: 10px;
        -webkit-transition: background .3s ease;
        transition: background .3s ease;
        vertical-align: middle;
        margin: 0 16px;
        box-shadow: none;
    }
    .custom-checkbox .custom-control-indicator:after {
        content: "";
        position: absolute;
        display: inline-block;
        width: 18px;
        height: 18px;
        background-color: #f1f1f1;
        border-radius: 21px;
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
        left: -2px;
        top: -4px;
        -webkit-transition: left .3s ease, background .3s ease, box-shadow .1s ease;
        transition: left .3s ease, background .3s ease, box-shadow .1s ease;
    }
    .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator {
        background-color: #84c7c1;
        background-image: none;
        box-shadow: none !important;
    }
    .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator:after {
        background-color: #84c7c1;
        left: 15px;
    }
    .custom-checkbox .custom-control-input:focus ~ .custom-control-indicator {
        box-shadow: none !important;
    }
    .placeholder_align {

        text-align :right;

    }
    .split_input_box{

        width: 100px;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
            if(this.checked){
                checkbox.each(function(){
                    this.checked = true;
                });
            } else{
                checkbox.each(function(){
                    this.checked = false;
                });
            }
        });

        checkbox.click(function(){
            if(!this.checked){
                $("#selectAll").prop("checked", false);
            }
        });
    });

    function myFunction(split) {
        document.getElementById("result").placeholder = split;
    }

</script>

<body>

<!-- Create new Vendor login Modal HTML -->

<div id="addEmployeeModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="/newbook">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
                <div class="modal-header">
                    <h3 class="modal-title">ADD NEW Book</h3>
<!--                    <h6 class="modal-title">Create a new Book .</h6>-->
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>


                <div class="modal-body">
                    <div class="form-group">
                        <label>book_name</label>
                        <input type="text" name="book_name"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>price</label>
                        <input type="number" name="price"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>author_name</label>
                        <input type="text" name="author_name"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>special_price</label>
                        <input type="number" name="special_price"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>book_created_date</label>
                        <input type="date" data-date-inline-picker="true"  name="book_created_date"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>quantity</label>
                        <input type="number" name="quantity"  class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Create New Book">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Vendor Login Accounts Modal HTML -->

<div id="editUserModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="/bookupdate">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
                <div class="modal-header">
                    <h4 class="modal-title">EDIT BOOK Details</h4>
                    <p class="modal-title">Fill out the form to update any info for this BOOK.</p>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>

                <div class="modal-body">
                    <div class="form-group">
                        <label>book_id</label>
                        <input type="text" name="ubook_id" id="ubook_id" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>book_name</label>
                        <input type="text" name="ubook_name" id="ubook_name" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>price</label>
                        <input type="number" name="uprice" id="uprice" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>author_name</label>
                        <input type="text" name="uauthor_name"  id="uauthor_name" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>special_price</label>
                        <input type="number" name="uspecial_price" id="uspecial_price" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>book_created_date</label>
                        <input type="text"    name="ubook_created_date" id="ubook_created_date" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>quantity</label>
                        <input type="number" name="uquantity" id="uquantity" class="form-control" >
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Update Book">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Vendor Split Modal HTML -->

<div id="editVendorSplitModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="/editVendordSplit">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
                <div class="modal-header">
                    <h4 class="modal-title">GLOBAL SPLIT</h4><br>
                    I would like all line items that contain this Vendor to take exactly this percentage or fixed amount from every Order.
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Vendor Split</label><br><br>
                        <!--                         <input type="checkbox"  required>Percentage<br>-->
                        <!--                     <input type="checkbox"  required>   Fixed Amount<br><br>-->
                        <label class="custom-control custom-checkbox">
                            <input type="radio" name="split" onclick="myFunction(this.value)" value="%"  checked>  <span >Percentage</span>
                        </label><br><br>
                        <label class="custom-control custom-checkbox">
                            <input type="radio" name="split" onclick="myFunction(this.value)" value="$">  <span ></span>Fixed Amount
                        </label>
                    </div>
                    <div class="form-group">
                        <label>How Much</label>
                        <input type="number" id="amount" name="amount" class="form-control"  required>
                    </div>
                    <input type="hidden" id="vendor_split_id" name="vendor_split_id" >
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save Vendor Settings">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete VENDOR Modal HTML -->

<div id="deleteVendorModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="/bookdelete">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>

                <div class="modal-header">
                    <h4 class="modal-title">Delete Vendor ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning">
                        <small>This action cannot be undone.</small>
                    </p>
                    <input type="hidden" id="vendor_del_id" name="vendor_del_id" >
                </div>
                <div class="modal-footer">

                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete VENDOR By Check Modal HTML -->
<div id="deleteVendorByCheck" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="/vendorDeleteByCheck">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>

                <div class="modal-header">
                    <h4 class="modal-title">Delete Vendor ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning">
                        <small>This action cannot be undone.</small>
                    </p>
                    <input type="hidden" id="vendor_check_del_id" name="vendor_check_del_id" >
                </div>
                <div class="modal-footer">

                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>



<!--VIEW  MODAL HTML -->
<div id="viewEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="vendors">
                <div class="modal-header">
                    <h4 class="modal-title">View Current Book</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>


                <div class="modal-body">
                    <div class="form-group">
                        <label>book_id</label>
                        <input type="text" name="vbook_id" id="vbook_id" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>book_name</label>
                        <input type="text" name="vbook_name" id="vbook_name" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>price</label>
                        <input type="number" name="vprice" id="vprice" class="form-control" readonly >
                    </div>
                    <div class="form-group">
                        <label>author_name</label>
                        <input type="text" name="vauthor_name"  id="vauthor_name" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>special_price</label>
                        <input type="number" name="vspecial_price" id="vspecial_price" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>book_created_date</label>
                        <input type="text"    name="vbook_created_date" id="vbook_created_date" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>quantity</label>
                        <input type="number" name="vquantity" id="vquantity" class="form-control" readonly >
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-info" data-dismiss="modal" value="Done">

                </div>
            </form>
        </div>
    </div>
</div>


</body>
