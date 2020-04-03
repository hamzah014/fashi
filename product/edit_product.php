    <?php

        $id              = $dataresult['id'];               
        $name            = $dataresult['name'];                   
        $details         = $dataresult['details'];                       
        $product_img     = $dataresult['product_img'];                       
        $type            = $dataresult['type'];               
        $price           = $dataresult['price'];               
        $status          = $dataresult['status'];           

        $routeimg        = "images/product/";

    ?>
    
    
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
                        <span>Edit Product</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <section class="contact-section spad">
        <div class="container">
            <div class="row">
            
                <div class="col-md-12">
                    <h4>Edit Product</h4><hr>
                    <form action="product/update_product.php" method="post" enctype="multipart/form-data">
                        <input class="form-control" type="text" name="prodid" id="prodid" value="<?php echo $id; ?>" hidden>
                        <div class="row">
                            <div class="col-md-3"><label for="name">Product Name</label></div>
                            <div class="col-md-6"><input class="form-control" type="text" name="name" id="name" value="<?php echo $name; ?>"></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3"><label for="name">Details</label></div>
                            <div class="col-md-6">
                                <textarea class="form-control" name="details" id="details" cols="30" rows="10"><?php echo $details; ?></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3"><label for="name">Product Type</label></div>
                            <div class="col-md-6">
                               <select class="form-control" name="type" id="type">
                                   <option <?php if($type==""){echo 'selected';} ?> value="">Please select one</option>
                                   <option <?php if($type=="sc"){echo 'selected';} ?> value="sc">Skincare</option>
                                   <option <?php if($type=="mk"){echo 'selected';} ?> value="mk">Makeup</option>
                                   <option <?php if($type=="bs"){echo 'selected';} ?> value="bs">Body & Sun</option>
                                   <option <?php if($type=="men"){echo 'selected';} ?> value="men">Men's</option>
                                   <option <?php if($type=="frag"){echo 'selected';} ?> value="frag">Fragrance</option>
                               </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3"><label for="name">Price</label></div>
                            <div class="col-md-6">
                               <input class="form-control" type="text" name="price" id="price" value="<?php echo $price; ?>">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3"><label for="name">Product Image</label></div>
                            <div class="col-md-6">
                               <input class="form-control" type="file" name="product_img" id="product_img" accept="image/x-png,image/gif,image/jpeg" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                               <img class="prod-img" src="<?php echo $routeimg . $product_img; ?>" alt="Product Image">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success btn-lg">Submit</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
    
