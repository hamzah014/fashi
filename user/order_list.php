
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
                        <span>My Order List</span>
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
                
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Tracking ID</th>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Address</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if( sizeof($dataresult) < 0 ){
                                ?>
                                        <tr>
                                            <td class="alert alert-warning text-center" colspan="20">Sorry, you haven't make any order yet.</td>
                                        </tr>

                                <?php    
                                    }else{
                                        
                                        $totalspend = 0;

                                        foreach($dataresult as $key => $value){

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

                                       
                                ?>

                                            <tr>
                                                <td class="cart-pic first-row"><?php echo $tracking_id; ?></td>
                                                <td class="cart-pic first-row"><img src="<?php echo $routeimg . $prodimg; ?>" alt=""></td>
                                                <td class="cart-pic first-row">
                                                    <h5><?php echo $prodname; ?></h5>
                                                </td>

                                                <td class="cart-pic first-row">
                                                    <?php echo $address; ?>
                                                </td>

                                                <td class="p-price first-row"><?php echo $amount; ?></td>
                                                <td class="p-price first-row">RM <?php echo bcadd( $total_price,'0',2); ?></td>
                                                <td class="cart-pic first-row p-3">
                                                    <?php
                                                        if($status=="success"){
                                                            
                                                    ?>        
                                                        
                                                        <button class="btn btn-success btn-md" disabled>Success</button>

                                                    <?php
                                                        }else{
       
                                                    ?>   
                                                        
                                                        <button class="btn btn-info btn-md" onclick="receivedorder(<?php echo $orderid; ?>)">Received</button>
                                                    
                                                    <?php
                                                        }
                                                    ?>
                                                    
                                                </td>
                                            </tr>
                                
                                <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="cart-total">Total <span>RM <?php echo bcadd( $totalspend,'0',2) ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    
    <script>

    function receivedorder(orderid) {
        
        console.log(orderid);

		var formData = new FormData();
		formData.append('orderid',orderid);
		
		//alert(product_image);
		$.ajax({
			url:'user/received_order.php',
			type: 'POST',
			data: formData,
			cache: false,
			processData: false,
			contentType: false,
			success: function (data){
				
				console.log(data);
				if(data==1){
                    alert('Your item has been updated! Thank you!');
                }else{
                    alert('Sorry, error occured. Please try again.');

                }
				
                window.location.reload();
				
			},
			error: function(){
				
			}
			
			
		});

    }

    </script>