<?php 
   //load file LayoutTrangChu.php
      $layout = "LayoutTrangChu.php";
 ?>
 <!-- Carousel -->
    <section id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="https://img.cdn.vncdn.io/nvn/ncdn/store1/41786/bn/0514.JPG"
                    alt="">

            </div>
            <div class="carousel-item ">
                <img src="https://img.cdn.vncdn.io/nvn/ncdn/store1/41786/bn/0515.JPG"
                    alt="">

            </div>
            <div class="carousel-item  ">
                <img src="https://img.cdn.vncdn.io/nvn/ncdn/store1/41786/bn/0516.JPG"
                    alt="">

            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>
    <!-- end carousel -->

    <!-- Product hot -->
    <section class="product_hot container-fluid">
        <div class="row">
            <div class="col-4 row-product">
                <img src="https://bucket.nhanh.vn/store1/41786/bn/BANNER1.jpg">
                <a href="#" class="cuban"> Túi da</a>
                <div class="overlay"></div>
            </div>
            <div class="col-4 row-product">
                <img src="https://bucket.nhanh.vn/store1/41786/bn/0615.JPG">
                <a href="#" class="cuban"> Sơ mi Cuban</a>
                <div class="overlay"></div>
            </div>
            <div class="col-4 row-product">
                <img src="https://bucket.nhanh.vn/store1/41786/bn/000035.jpg">
                <a href="#" class="cuban"> Áo thun</a>
                <div class="overlay"></div>
            </div>
        </div>
    </section>
    <!--End Product hot -->

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

     <!-- mAzine title -->
            <div class="mgz text-center">
                <h1>MAGAZINE</h1>
                <a href="#">Xem thêm</a>
            </div>
     <!-- /magazine title-->
     <!-- magazine item -->
           <div class="magazine">
              <div class="magazine-item">
                 <img src="https://traffic-edge12.cdn.vncdn.io/nvn/ncdn/store1/41786/bn/0519.JPG">
                 <a href="#">MAGAZINE PHẢI</a>
                 <div class="overlay"></div>
              </div>
               <div class="magazine-item">
                 <img src="https://traffic-edge08.cdn.vncdn.io/nvn/ncdn/store1/41786/bn/How_to_Display_Eye_Catchy_Banner_Slider_in_Magento_2_950x500.png">
                  <a href="#">MAGAZINE TRÁI</a>
                 <div class="overlay"></div>
              </div>
           </div>
     <!-- /magazine item -->