

    <?php

        $id             = $dataresult['id'];   
        $name           = $dataresult['name'];   
        $details        = $dataresult['details'];   
        $product_img    = $dataresult['product_img'];   
        $type           = $dataresult['type'];   
        $price          = $dataresult['price'];   
        $status         = $dataresult['status'];   

        $routeimg = "images/product/";
        $typename = "";

        switch ($type) {
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
                $typename = "-";
                break;
        }

    ?>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>View Product</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <section class="contact-section spad">
        <div class="container">
            <div class="row">
            
                <div class="col-md-12 row">

                    <div class="col-md-4">
                        <img src="<?php echo $routeimg . $product_img; ?>" alt="" >
                    </div>

                    <div class="col-md-7">
                        <div class="row"><h1><?php echo $name; ?></h1></div>
                        <div class="row h3">RM <em class="text-warning italic"><?php echo bcadd( $price,'0',2); ?></em></div>
                        <hr>
                        <!-- 
                        <div class="row">
                            <div class="col-md-5"><?php echo $details; ?></div>
                            <div class="col-md-5">
                                <form action="index.php?alh=6" method="post">
                                    <input type="number" name="prod_id" id="prod_id" style="display:none" value="<?php echo $id; ?>">
                                    Quantity <input class="form-control text-center" type="number" name="amount" id="amount" min="1" style="width:25%" value="1">
                                    <br>
                                    <button type="submit" class="btn btn-md text-white" style="background:orange;">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now!
                                    </button>
                                </form>
                            </div>
                            
                        </div> -->
                        
                        <div class="row">
                            
                            <form action="index.php?alh=6" method="post" id="formsubmit">
                                <input type="number" name="prod_id" id="prod_id" style="display:none" value="<?php echo $id; ?>">
                                <input type="number" name="amount" id="amount" style="display:none" value="1">
                                <div class="col-md-12">
                                    <div class="cart-table">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="cart-title first-row p-2">
                                                        <h5><?php echo $details; ?></h5>
                                                    </td>
                                                    <td class="qua-col first-row p-2">
                                                        <div class="quantity">
                                                            <div class="pro-qty">
                                                                <input type="number" value="1" id="amountinsert" disabled class="bg-white">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button class="btn btn-md text-white bg-warning" type="submit">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now!
                                    </button>
                                </div>

                            </form> 
                        </div>
                        
                    
                    </div>
                    



                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>

        $(document).ready(function() {

            $('#formsubmit').submit(function() { 
                
                $('#amount').val($('#amountinsert').val());

            });



        });

    </script>