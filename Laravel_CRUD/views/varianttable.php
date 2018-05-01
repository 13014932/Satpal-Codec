<?php echo View::make('layout'); ?>
<?php echo View::make('navbar'); ?>
<?php echo View::make('BootstrapTable'); ?>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Variant Table</h2>
                </div>
                <div class="col-lg-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i>
                        <span>Add New Variant</span></a><a href="#deleteByCheckEmployeeModal" class="btn btn-danger"
                                                           data-toggle="modal"><i class="material-icons">&#xE15C;</i>
                        <span>Delete</span></a>

                </div>

            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll" name="selectall">
								<label for="selectAll"></label>
							</span>
                </th>
                <th class='space'>S.No.</th>

                <th class='space'>Product Title</th>
                <!--                <th class='space'>Sku</th>-->
                <th class='space'>Title</th>
                <th class='space'>Price</th>
                <th class='space'>Inventory Quantity</th>
                <th class='space' style="
                        width:  150px;">Action
                </th>
            </tr>
            </thead>
            <tbody>

            <?php $i = 0;
            foreach ($showdata as $data) {

                echo "<tr><td>
							<span class=\"custom-checkbox\">
								<input type=\"checkbox\" id=\"checkbox2\" name=\"options[]\" onclick=\"deleteByCheckVariant($data->id)\" >
								<label for=\"checkbox2\"></label>
							</span>
						</td>";
                echo "<td class='space'>" . ++$i . "</td>";

                echo "<td class='space'>" . $data->product_title . "</td>";
//                echo "<td class='space'>" . $data->sku . "</td>";
                echo "<td class='space'>" . $data->title . "</td>";
                echo "<td class='space'>" . $data->price . "</td>";
                echo "<td class='space'>" . $data->inventory_quantity . "</td>";
                echo "<td >
                        <a href=\"#viewEmployeeModal\" onclick=\"viewVariant('$data->product_title', '$data->title', $data->price, $data->inventory_quantity)\" class=\"view\" title=\"View\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE417;</i></a>
                        <a href=\"#editEmployeeModal\" onclick=\"editVariant('$data->id', '$data->product_title','$data->title', $data->price, $data->inventory_quantity)\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\"
                                                                                 data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>


                <a href=\"#deleteEmployeeModal\" onclick='deleteVariant($data->id)'  class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\"
                                                                                     data-toggle=\"tooltip\"
                                                                                     title=\"Delete\">&#xE872;</i></a>
                 
                   </td>";

            }
            ?>






            </tr>
            </tbody>
        </table>
    </div>
</div>
