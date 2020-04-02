    <style> 
        button:disabled {
          cursor: not-allowed;
        }

        button:enabled {
          cursor: pointer;
        }
    </style>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <form action="product/add_order.php" method="post" class="checkout-form" id="formsubmit">
    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="fir">Full Name<span>*</span></label>
                                <input type="text" id="fullname" name="fullname" value="<?php echo $fullname; ?>" required>
                                <input type="text" id="prodid" name="prodid" value="<?php echo $prodid; ?>" hidden>
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Address<span>*</span></label>
                                <textarea name="address" id="address" cols="30" rows="10" class="form-control" required><?php echo $address; ?></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address<span></span></label>
                                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" id="contactno" name="contactno" value="<?php echo $contactno; ?>" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="phone"><span><i>Note: You can update your details in My Profile.</i></span></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>
                                    
                                    <?php 
                                        $routeimg = "images/product/";
                                        $totalprice =  $price*$amount; 
                                    ?>
                                    <input type="text" id="prodimage" name="prodimage" value="<?php echo $product_img; ?>" hidden>
                                    <input type="text" id="amount" name="amount" value="<?php echo $amount; ?>" hidden>
                                    <input type="text" id="prodprice" name="prodprice" value="<?php echo $price; ?>" hidden>
                                    <li class="fw-normal"><img src="<?php echo $routeimg . $product_img; ?>" alt="product_image" style="width:30%;"></li>
                                    <li class="fw-normal"><?php echo $prodname; ?> x <?php echo $amount; ?> <span>RM <?php echo number_format($totalprice,2); ?></span></li>
                                    <li class="total-price">Total <span>RM <?php echo number_format($totalprice,2); ?></span></li>
                                </ul>
                                <div class="order-btn">
                                    <button class="site-btn place-btn" id="btnsubmit" type="submit" hidden>Place Order</button>
                                    
                                    <a class="site-btn place-btn text-white" id="btnorder" onclick="openmodal()">Place Order</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>

        <button id="btnmodal" hidden type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open order Modal</button>
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Header</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">

                            <div class="col-md-12">
                                <label for="paymentmethod">Payment Method</label>
                                <select name="paymentmethod" id="paymentmethod" class="form-control" onchange="selectbankoption()">
                                    <option value="">Select One</option>
                                    <option value="onlinebank">Online Banking</option>
                                </select>
                            </div>
                            <div id="bankoption" class="col-md-12" style="display: none;">
                                <label for="bankname">Select Bank</label>
                                <select name="bankname" id="bankname" class="form-control" onchange="requiredbank()">
                                    <option value="">Select One</option>
                                    <option value="rhb">RHB Bank</option>
                                    <option value="bankislam">Bank Islam</option>
                                    <option value="cimb">CIMB Bank</option>
                                    <option value="maybank">Maybank</option>
                                </select>
                            </div>

                            <div class="col-md-12 pt-3">
                                <button id="btnplaceorder" disabled class="site-btn place-btn" onclick="submitorder()">Place Order</button>
                            </div>

                            <div class="col-md-12 pt-3" id="error_msg"></div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button id="closemodal" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <!-- Shopping Cart Section End -->
    </form>

    <script>

        function openmodal() {

            $('#btnmodal').click()

        }

        function selectbankoption() {
            
            paymethod = $('#paymentmethod').val();

            if(paymethod == ""){
                $('#bankoption').hide();
                $('#bankname').val("");
                requirebank();
            }else if(paymethod=="onlinebank"){
                $('#bankoption').show();
            }


        }

        function requiredbank() {
            
            bankname = $('#bankname').val();
            paymentmethod = $('#paymentmethod').val();
            //alert(bankoption);
            if(bankname == "" || paymentmethod == ""){
                $('#btnplaceorder').attr("disabled", "true");
            }else{
                $('#btnplaceorder').removeAttr("disabled");
                console.log(bankname);
            }


        }

        function submitorder() {
            
            $('#closemodal').click();
            $('#btnsubmit').click();

        }

    </script>