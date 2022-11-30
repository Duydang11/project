<?php 
  //load file LayoutTrangTrong.php vao day
  $layout = "LayoutTrangTrong.php";
 ?>

    <!-- Tiêu đề và lọc sản phẩm -->
    <div class="container special-collection" style="margin-top: 150px;">
        <div class="row">
            <div class="col-12">
                <div class="col-6">
                     <h2>
                     Tìm kiếm
                </h2>
                <!-- box search -->
        <?php 
            $fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
            $toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
         ?>
        <div class="panel panel-default">
          <div class="panel-heading"> Tìm theo mức giá </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                <input type="number" min="0" value="<?php echo $fromPrice ?>" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="<?php echo $toPrice ?>" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
        <!-- end box search --> 
                </div>
                <div class="col-6">
       
                </div>
            </div>
        </div>
    </div>

 <!-- Sản phẩm -->
    <div class="Product_content container " style="margin-top: 50px;">
        <div class="row">
            <?php foreach($data as $rows): ?>
            <div class="col-lg-3 col-md-6 col-xs-12 Product_content--item my-2  ">
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
        <div class="row">
            <div style="margin-top: 50px;"
                        class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                        <ul class="pagination">
                            <li class="page-item "><span class="btn btn-outline-dark"  >Trang</span></li>
                             <?php for($i = 1; $i <= $numPage; $i++): ?>
            <li class="page-item mx-2 "><a class="page-link btn btn-outline-dark " href="index.php?controller=search&action=name&key=<?php echo $key; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php endfor; ?>
                        </ul>
                    </div>
        </div>
         
    </div>


