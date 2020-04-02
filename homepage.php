
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li><a onclick="allcategory()">All</a></li>
                            <li><a onclick="selectedcategory('sc')">Skincare</a></li>
                            <li><a onclick="selectedcategory('mk')">Makeup</a></li>
                            <li><a onclick="selectedcategory('bs')">Body & Sun</a></li>
                            <li><a onclick="selectedcategory('men')">Men's</a></li>
                            <li><a onclick="selectedcategory('frag')">Fragrance</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2" id="product_area">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Default Sorting</option>
                                    </select>
                                    <select class="p-show">
                                        <option value="">Show:</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01- 09 Of <?php echo sizeof($dataresult); ?> Product</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">

                        <?php
                            if( sizeof($dataresult) > 0 ){
                                
                                $count = 0;

                                foreach($dataresult as $key => $value){
                                    
                                    $count++;

                                    $routeimg = "images/product/";
                                    $typename = "";
                        ?>


                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img style="width:270px;height:303px" src="<?php echo $routeimg . $value['product_img']; ?>" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view">
                                                
                                                <?php

                                                    if(isset($_SESSION['userid']) && isset($_SESSION['username'])){
                                                ?>
                                                        <a href="index.php?alh=5&prod=<?php echo $value['id']; ?>">+ Quick View</a>
                                                
                                                <?php
                                                    }else{
                                                ?>

                                                        <a style="cursor: pointer;" onclick="tologinpage()">+ Quick View</aa>
                                                
                                                <?php
                                                    }

                                                ?>
                                            </li>
                                        </ul>
                                    </div>

                                    
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
                                                    $typename = "All";
                                                    break;
                                            }

                                        ?>


                                    <div class="pi-text">
                                        <div class="catagory-name"><?php echo $typename; ?></div>
                                        <a href="#">
                                            <h5><?php echo $value['name']; ?></h5>
                                        </a>
                                        <div class="product-price">
                                            RM <?php echo bcadd( $value['price'],'0',2); //turn string into two decimal place ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                                    }

                                }else{
                            ?>

                            <tr>
                                <h3 class="alert alert-warning text-center" colspan="20">Sorry, there's no product found yet.</h4>
                            </tr>

                            <?php
                                }
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
    

    <script>

        function selectedcategory(prodtype) {
        
            console.log(prodtype);

	    	var formData = new FormData();
	    	formData.append('prodtype',prodtype);
            
	    	//alert(product_image);
	    	$.ajax({
	    		url:'product/listcategory_product.php',
	    		type: 'POST',
	    		data: formData,
	    		cache: false,
	    		processData: false,
	    		contentType: false,
	    		success: function (data){
                
	    			//console.log(data);
	    			
                    $('#product_area').html(data);

                
	    		},
	    		error: function(){
                
	    		}
            
            
	    	});

        }

        function allcategory(){
            window.location.reload();
        }

        function tologinpage(){

            result = confirm('You are not login yet. Please login to see more details');
            //console.log(result);
            if(result==true){
                console.log("true");
                window.location.href = "login.php";
            }else{
                //console.log(result);
            }

        }

    </script>