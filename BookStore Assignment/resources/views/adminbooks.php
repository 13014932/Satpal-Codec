
<?php echo View::make('BootStrapTable'); ?>
<?php echo View::make('DataTable.DataTableLib'); ?>
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

</style>

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-lg-4">
                    <h2><span>Admin Books View Table</span></h2>

                    <!--                                        <a href="#" class="btn btn-info btn-lg">-->
                    <!--                                            <span class="glyphicon glyphicon-refresh"> </span>-->
                    <!--                                        </a>-->

                </div>


                <div class="col-lg-8">

                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i>
                        <span>Create A New Book</span></a>

                </div>
            </div>
        </div>
        <table class="table table-striped table-hover display " cellspacing="0" id="datatable">
            <thead>
            <tr>


                <th class='space'>Book-ID</th>
                <th class='space'>S.NO.</th>
                <th class='space'>Book-Name</th>

                <th class='space'>Book-Price</th>
                <th class='space'>special_price</th>

                <th class='space'>Book-Author_name</th>
                <th class='space'>Book-created_date</th>

                <th >Book-Quantity</th>
                <th ></th>
                <th ></th>
                <th ></th>

            </tr>
            </thead>
            <tbody>


            <?php
            //   $i = 0;  // $vendors - vendors data come from VendorsController
            //            foreach ($vendors as $vendor) {
            //
            //                echo "<tr><td>
            //							<span class=\"custom-checkbox\">
            //								<input type=\"checkbox\" id=\"checkbox2\" name=\"options[]\" value=\"1\">
            //								<label for=\"checkbox2\"></label>
            //							</span>
            //						</td></tr>";
            //                echo "<td class='space'>" . ++$i . "</td>";
            //
            //                echo "<td class='space'>" . $vendor->vendors_name . "</td>";
            //
            //                echo "<td class='space'>" . $vendor->vendor_split ." (Global) "." "." <a href=\"#editVendorSplitModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\"
            //                                                                                 data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a> ". "</td>";
            //                echo "<td class='space'>" . $vendor->vendor_login_accounts ." <a href=\"#editUserModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\"
            //                                                                                data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a> ". "</td>";
            //
            //                echo "<td class='space'>
            //                      <a href=\"#deleteEmployeeModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\"
            //                                                                                     data-toggle=\"tooltip\"title=\"Delete\">&#xE872;</i></a></td>";
            //
            //
            //            }
            ?>

            </tbody>
        </table>


        <script>


            //            <!-- DATATABLE  PROCESSING (SERVER-SIDE)-->
            $(document).ready(function () {

//                var url='';
//                $('#datatable tbody').on( 'click', 'tr', function () {
//                    var  mydata1=table.row( this ).data();
//                    alert(mydata1.id);
//                });

                $('#datatable tbody').on( 'click', 'tr', function () {

//                      console.log( table.row( this ).data() );
                    var  mydata=table.row( this ).data();
                    $("#vendor_del_id").val(mydata.id);
                    $("#vbook_id").val(mydata.id);

                    $("#vbook_name").val(mydata.name);
                    $("#vprice").val(mydata.price);
                    $("#vauthor_name").val(mydata.author_name);
                    $("#vspecial_price").val(mydata.special_price);
                    $("#vbook_created_date").val(mydata.book_created_date);
                    $("#vquantity").val(mydata.quantity);

                    $("#ubook_id").val(mydata.id);

                    $("#ubook_name").val(mydata.name);
                    $("#uprice").val(mydata.price);
                    $("#uauthor_name").val(mydata.author_name);
                    $("#uspecial_price").val(mydata.special_price);
                    $("#ubook_created_date").val(mydata.book_created_date);
                    $("#uquantity").val(mydata.quantity);

//                    $(this 'a').attr("href", mydata.id);

//                     url = '{{ url("/edituser", ":id") }}';
//                    url = url.replace('%3Aid', data.datos[i].id);
//                alert(mydata.id);
                } );

                var table = $('#datatable').DataTable({


                    'columnDefs': [


                        {
                            "targets": 1,
                            "searchable": false,
                            "orderable": false,


                        },

                        {
                            "targets": 8,
                            "searchable": false,
                            "orderable": false

                        },
                        {
                            "targets": 9,
                            "searchable": false,
                            "orderable": false


                        },
                        {
                            "targets": 10,
                            "searchable": false,
                            "orderable": false


                        },
                        {
                            "targets": 8,

                            "render": function () {

                                return '<a href="#viewEmployeeModal" class="view " data-toggle="modal"><i class=" fa fa-eye" data-toggle="tooltip" title="View Current Split"></i></a>';


                            }
                        },
                        {
                            "targets": 9,

                            "render": function ( ) {

//                                return '<a  href="edituser/67202" class="edit" ><i class=" fa fa-pencil" data-toggle="tooltip" title="Edit Login Accounts "></i></a>';
                                return  '<a href="#editUserModal" class="edit" data-toggle="modal"><i class=" fa fa-pencil" data-toggle="tooltip" title="Edit Login Accounts "></i></a>';


                            }
                        },
                        {
                            "targets": 10,

                            "render": function () {


                                return  '<a href="#deleteVendorModal" class="delete" data-toggle="modal"><i class=" fa fa-trash" data-toggle="tooltip"  title="DELETE"> </i></a>';


                            }
                        }

                    ],
                    'select': {
                        'style': 'multi'
                    },
                    'order': [[0, 'asc']],
                    "tabIndex": 2,
                    "language": {
                        "lengthMenu": "Display _MENU_ Books per page",
                        "info": "Showing _START_ to _END_ of _TOTAL_ Books",
                        "infoEmpty": "No records available",
                        "infoFiltered": "(filtered from _MAX_ total records)",
                        "search":         "Search Books:",
                    },
                    "processing": true,
                    "serverSide": true,
                    "pagingType": "full_numbers",
                    "scrollY": "560px",
                    "scrollCollapse": true,
                    "lengthMenu": [10, 25, 50, 100, 500],
                    "ajax": "<?= route('books') ?>",
                    "columns": [

                        {"data": "id"},
                        {"data": null},

                        {"data": "name"},

                        {"data": "price"},
                        {"data": "special_price"},
                        {"data": "author_name"},
                        {"data": "book_created_date"},

                        {"data": "quantity"},
                        {"data": null},
                        {"data": null},
                        {"data": null}

                    ]


                });
                table.on('order.dt search.dt processing.dt page.dt  ', function () {
                    table.column(1).nodes().each(function (cell, i) {
                        cell.innerHTML = i + 1;
                        var info = table.page.info();
                        var length_process = info.length;
                        var page = info.page + 1;
                        if (page > '1') {
                            var pageprocess = (page - 1) * length_process;  // u can change this value of ur page
                            cell.innerHTML = pageprocess + i + 1;
                        }
                    });
                });


            });
        </script>



    </div>

</div>


