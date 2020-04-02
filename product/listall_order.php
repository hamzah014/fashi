    <!-- Datatable -->
    <link rel="stylesheet" href="css/datatable/dataTables.bootstrap.min.css">


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>List of Order</span>
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

                <h4>Total of Order : <?php echo sizeof($dataresult); ?></h4>
                <table id="table_listuser" class="table table-striped table-bordered">
                    <thead style="background:grey;">
                        <tr>
                            <th>No.</th>
                            <th>Tracking ID</th>
                            <th>Product</th>
                            <th>Details Order</th>
                            <th>Amount</th>
                            <th>Total Price</th>
                            <th>Payment Method</th>
                            <th>Status Order</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if( sizeof($dataresult) > 0 ){
                                
                                $count = 0;
                                $totalspend = 0;

                                foreach($dataresult as $key => $value){
                                    
                                    $count++;
                                    //defined the location of product images
                                    $routeimg = "images/product/";
                                                
                                    //defined all the value
                                    $orderid            = $value['id'];  
                                    $userid             = $value['userid']; 
                                    $tracking_id        = $value['tracking_id'];         
                                    $prodid             = $value['prodid']; 
                                    $fullname           = $value['fullname'];    
                                    $address            = $value['address'];       
                                    $email              = $value['email'];
                                    $contactno          = $value['contactno'];           
                                    $amount             = $value['amount'];
                                    $total_price        = $value['totalprice'];
                                    $paymentmethod      = $value['paymentmethod'];        
                                    $bankname           = $value['bankname'];         
                                    $status             = $value['status'];       

                                    //find product details by using id
                                    $sql2 = "SELECT * FROM product WHERE id='$prodid'";
        
                                    //get all data that id equal to prodid
                                    $result2 = $conn->query($sql2);
                                                        
                                    //turn the result into array
                                    $dataresult2 = getdata_row($result2);

                                    $prodimg = $dataresult2['product_img'];
                                    $prodname = $dataresult2['name'];

                                    $totalspend = $totalspend + $total_price;
                                    
                                    $banknamereal = ""; 
                                    //rhb
                                    //bankislam
                                    //cimb
                                    //maybank

                                    switch ($bankname) {
                                        case 'rhb':
                                            $banknamereal = "RHB Bank";
                                            break;
                                        
                                        case 'bankislam':
                                            $banknamereal = "Bank Islam";
                                            break;
                                        
                                        case 'cimb':
                                            $banknamereal = "CIMB Bank";
                                            break;
                                        
                                        case 'maybank':
                                            $banknamereal = "Maybank";
                                            break;
                                        
                                        default:
                                            $banknamereal = "Unknown Bank";
                                            break;
                                    }
                           
                        ?>

                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $tracking_id; ?></td>
                            <td><?php echo $prodname; ?></td>
                            <td>
                                <?php echo $fullname; ?>
                                <hr>
                                <?php echo $contactno; ?>
                                <hr>
                                <?php echo $address; ?>
                                <hr>
                                <?php echo $email; ?>
                            </td>
                            <td><?php echo $amount; ?></td>
                            <td>RM <?php echo bcadd( $total_price,'0',2); ?></td>
                            <td><?php echo $banknamereal; ?></td>
                            <td>
                                <?php
                                    if($status=="success"){
                                        
                                ?>        
                                    
                                    <button class="btn btn-success btn-md" disabled>Success</button>
                                <?php
                                    }else{
                                ?>   
                                    
                                    <button class="btn btn-warning disabled btn-md">Pending</button>
                                
                                <?php
                                    }
                                ?>
                                                
                            </td>
                        </tr>

                        <?php
                                }
                            }else{
                        ?>

                        <tr>
                            <td class="alert alert-warning text-center" colspan="20">Sorry, there's no user found yet.</td>
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
    $(document).ready(function() {
        
        $('#table_listuser').DataTable();
    
    });
</script>