
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Add New Product</span>
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
                    <h4>Add New Product</h4><hr>
                    <form action="product/insert_product.php" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-3"><label for="name">Product Name</label></div>
                            <div class="col-md-6"><input class="form-control" type="text" name="name" id="name"></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3"><label for="name">Details</label></div>
                            <div class="col-md-6">
                                <textarea class="form-control" name="details" id="details" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3"><label for="name">Product Type</label></div>
                            <div class="col-md-6">
                               <select class="form-control" name="type" id="type">
                                   <option value="">Please select one</option>
                                   <option value="sc">Skincare</option>
                                   <option value="mk">Makeup</option>
                                   <option value="bs">Body & Sun</option>
                                   <option value="men">Men's</option>
                                   <option value="frag">Fragrance</option>
                               </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3"><label for="name">Price</label></div>
                            <div class="col-md-6">
                               <input class="form-control" type="text" name="price" id="price">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3"><label for="name">Product Image</label></div>
                            <div class="col-md-6">
                               <input class="form-control" type="file" name="product_img" id="product_img">
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
