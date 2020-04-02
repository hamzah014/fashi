
    <?php

        include('../conn.php');
        include_once('../header_link.php');
        include_once('../script_link.php');
        $prodtype = $_POST['prodtype'];
        $sql2 = "SELECT * FROM product WHERE type='$prodtype' AND status=1";

        //get all data that status equal to 1 (active)
        $result2 = $conn->query($sql2);

        //turn the result into array
        $dataresult2 = getdata_rowall($result2);

    ?>
    
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
                <p>Show 01- 09 Of <?php echo sizeof($dataresult2); ?> Product</p>
            </div>
        </div>
    </div>
    <div class="product-list">
        <div class="row">
        <?php
            if( sizeof($dataresult2) > 0 ){
                
                $count = 0;
                foreach($dataresult2 as $key => $value){
                    
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
                            <li class="quick-view"><a href="index.php?alh=5&prod=<?php echo $value['id']; ?>">+ Quick View</a></li>
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
                                    $typename = "Unknown";
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