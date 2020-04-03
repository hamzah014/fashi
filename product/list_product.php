    <!-- Datatable -->
    <link rel="stylesheet" href="css/datatable/dataTables.bootstrap.min.css">

    <style>
        
        .prod-img{
            height: 303px;
            width: 270px;
        }

    </style>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>List of Product</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                <h4>Total of Product : <?php echo sizeof($dataresult); ?></h4>
                <br>
                <h4><a href="index.php?alh=4" class="btn btn-info">Add New Product</a></h4>
                <br>
                
                <table id="table_listuser" class="table table-striped table-bordered">
                    <thead style="background:gray;">
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Product Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if( sizeof($dataresult) > 0 ){
                                
                                $count = 0;

                                foreach($dataresult as $key => $value){
                                    
                                    $count++;

                                    $routeimg = "images/product/";
                                    $typename = "";
                        ?>

                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['details']; ?></td>

                            <?php

                                switch ($value['type']) {
                                    case 'sc':
                                        $typename = "Skincare";
                                        break;
                                    case 'mk':
                                        $typename = "Makeup";
                                        break;
                                    case 'bs':
                                        $typename = "Body & Sun";
                                        break;
                                    case 'men':
                                        $typename = "Men's";
                                        break;
                                    case 'frag':
                                        $typename = "Fragrance";
                                        break;
                                    
                                    default:
                                        $typename = "Unknown";
                                        break;
                                }

                            ?>

                            <td><?php echo $typename; ?></td>
                            <td>RM <?php echo bcadd( $value['price'],'0',2); //turn string into two decimal place ?></td>
                            <td><img class="prod-img" src="<?php echo $routeimg . $value['product_img']; ?>" ></td>
                            <td>
                                <a class="btn btn-success" href="index.php?alh=9&prodid=<?php echo $value['id']; ?>">Edit</a>
                                <button class="btn btn-danger" onclick="product_delete(<?php echo $value['id']; ?>)">Delete</button>
                            </td>
                        </tr>

                        <?php
                                }
                            }else{
                        ?>

                        <tr>
                            <td class="alert alert-warning text-center" colspan="20">Sorry, there's no product found yet.</td>
                        </tr>

                        <?php
                            }
                        ?>
                        
                    </tbody>
                </table>

                </div>

            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <script src="js/data-table/datatables.min.js"></script>
    <script src="js/data-table/dataTables.bootstrap.min.js"></script>
    <script src="js/data-table/dataTables.buttons.min.js"></script>
    <script src="js/data-table/buttons.bootstrap.min.js"></script>
    <script src="js/data-table/jszip.min.js"></script>
    <script src="js/data-table/vfs_fonts.js"></script>
    <script src="js/data-table/buttons.html5.min.js"></script>
    <script src="js/data-table/buttons.print.min.js"></script>
    <script src="js/data-table/buttons.colVis.min.js"></script>
    <script src="js/datatables-init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>

    <script type="text/javascript">
    
        function product_delete(prodid) {

            console.log(prodid);
            
		    var formData = new FormData();
		    formData.append('prodid',prodid);

            var answers = confirm('Are you sure want to delete this product?');

            if(answers==false){

            }else{


		        $.ajax({
		        	url:'product/delete_product.php',
		        	type: 'POST',
		        	data: formData,
		        	cache: false,
		        	processData: false,
		        	contentType: false,
		        	success: function (data){
                    
		        		console.log(data);
                        if(data==1){
                            alert('The product has been successfully deleted');
                        }else{
                            alert('Error occurred, failed to delete the product. Please try again later.');
                        }
                        window.location.reload();
                    
		        	},
		        	error: function(){
                    
		        	}
                
                
		        });

            }
        }




    </script>