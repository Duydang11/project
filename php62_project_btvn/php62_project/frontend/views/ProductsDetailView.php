<?php 
  //load file LayoutTrangTrong.php vao day
  $layout = "LayoutTrangTrong.php";
 ?>

<!-- product -->
<div class="product row " style="margin-top: 150px;">

    <div class="col-6 mx-3 product-left">
       <img  src="../assets/upload/products/<?php echo $record->photo; ?>">
    </div>
    <div class="col-5 mx-4">
        <div class="product-right-title">
            <p>#Sản Phẩm Mới</p>
            <p><?php echo $record->name; ?></p>
        </div>

                <!-- gia -->
        <div class="gia">
            <p><?php echo number_format($record->price - ($record->price * $record->discount)/100); ?>₫ </p>
        </div>
        <div class="gia">
            <p><?php echo number_format($record->price); ?>₫ </p>
        </div>
        <!-- /gia -->
        <!-- icon -->
        <div class="product-icon">
            <div class="product-icon-left"><a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" class="btn btn-dark rounded-pill px-5 py-3">Cho vào giỏ hàng</a></div>
            <div class="product-icon-right"><a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>"><i class="fa fa-heart" aria-hidden="true"></i></a></div>

        </div>

        

        <!-- /icon -->
        <!-- rating -->
        <div style="border:1px solid #dddddd; margin-top: 35px;">
            <h4 style="padding-left: 10px;">Rating</h4>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 80%; padding-left: 10px; display:flex"><img src="../assets/frontend/images/star.jpg"></td>
                    <td><span class="label label-primary"><?php echo $this->modelGetStar($id,1); ?> vote</span></td>
                </tr>
                <tr>
                    <td style="width: 80%; padding-left: 10px; display:flex"><img src="../assets/frontend/images/star.jpg"> <img
                            src="../assets/frontend/images/star.jpg"></td>
                    <td><span class="label label-warning"><?php echo $this->modelGetStar($id,2); ?> vote</span></td>
                </tr>
                <tr>
                    <td style="width: 80%; padding-left: 10px; display:flex"><img src="../assets/frontend/images/star.jpg"> <img
                            src="../assets/frontend/images/star.jpg"> <img src="../assets/frontend/images/star.jpg">
                    </td>
                    <td><span class="label label-danger"><?php echo $this->modelGetStar($id,3); ?> vote</span></td>
                </tr>
                <tr>
                    <td style="width: 80%; padding-left: 10px; display:flex"><img src="../assets/frontend/images/star.jpg"> <img
                            src="../assets/frontend/images/star.jpg"> <img src="../assets/frontend/images/star.jpg">
                        <img src="../assets/frontend/images/star.jpg"></td>
                    <td><span class="label label-info"><?php echo $this->modelGetStar($id,4); ?> vote</span></td>
                </tr>
                <tr>
                    <td style="width: 80%; padding-left: 10px; display:flex"><img src="../assets/frontend/images/star.jpg"> <img
                            src="../assets/frontend/images/star.jpg"> <img src="../assets/frontend/images/star.jpg">
                        <img src="../assets/frontend/images/star.jpg"> <img src="../assets/frontend/images/star.jpg">
                    </td>
                    <td><span class="label label-success">1 vote</span></td>
                </tr>
            </table>
            <br>
        </div>
        <!-- /rating -->
        <!-- detail -->
        <div class="product-detail">
            <div class="product-detail-info">
                <a href="#">CHI TIẾT SẢN PHẨM</a><button><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                <p>
                    <?php echo $record->description; ?>
                </p>
            </div>
            <div class="product-detail-info">
                <a href="#">CÁCH BẢO QUẢN</a><button><i class="fa fa-angle-down" aria-hidden="true"></i></button>
            </div>
        </div>

    </div>
   
    


        <!-- /detail -->
    </div>
</div>
<!-- /product -->


 <!-- Product new -->
    <section class="product_new container-fluid">
        
        <div class="row">
            <div class="col-12 text-center">
                <h1>SẢN PHẨM MỚI</h1>
                <a href="#">Xem thêm</a>
            </div>
            <?php 
            $hotProducts = $this->modelHotProducts();
         ?>
             <?php foreach($hotProducts as $rows): ?>
            <div class="col-lg-3 col-md-6 col-xs-12 Product_content--item  mt-3">
                <div class="border border-2  text-center rounded">
                    <div class="product-item-img d-flex justify-content-center">
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img
                            src="../assets/upload/products/<?php echo $rows->photo; ?>"
                            title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive">
                    </a>
                </div>
                <div class="product_info">
                    <h3 class="name"><a
                            href="index.php?controller=products&action=detail&productId=<?php echo $rows->id; ?>">
                            <?php echo $rows->name; ?>
                        </a></h3>
                    <p class="price-box"> <span class="special-price"> <span class="price product-price"
                                style="text-decoration:line-through;">
                                <?php echo number_format($rows->price); ?>
                            </span> ₫ </span> </p>
                    <p class="price-box"> <span class="special-price"> <span class="price product-price">
                                <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?>
                            </span>₫ </span> </p>


                    <p class="price-box" style="display:flex; justify-content: center;"> 
              <a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=1"><img src="../assets/frontmain/star.jpg"></a> 
              <a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=2"><img src="../assets/frontmain/star.jpg"></a> 
              <a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=3"><img src="../assets/frontmain/star.jpg"></a> 
              <a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=4"><img src="../assets/frontmain/star.jpg"></a> 
              <a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=5"><img src="../assets/frontmain/star.jpg"></a> 
            </p>
                    <div class="action-btn">
                        <form>

                            <a href="index.php?controller=cart&action=create&productId=<?php echo $rows->id; ?>"
                                class="btn btn-outline-dark">Add to Cart</a>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- End Product new -->



</div>