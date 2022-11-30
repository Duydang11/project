<?php 
  $layout = "LayoutTrangTrong.php";
 ?>
<div class="template-cart ">
  <form class="col-10  border border-dark" action="index.php?controller=cart&action=update" method="post">
    <div class="table-responsive">
      <table class="table table-striped table-cart table-bordered">
        <thead>
          <tr>
            <th class="image bg-warning text-dark">Ảnh sản phẩm</th>
            <th class="name bg-warning text-darke">Tên sản phẩm</th>
            <th class="price bg-warning text-dark">Giá bán lẻ</th>
            <th class="quantity bg-warning text-dark">Số lượng</th>
            <th class="price bg-warning text-dark">Thành tiền</th>
            <th class="bg-warning text-dark">Xóa</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($_SESSION['cart'] as $product): ?>
          <tr>
            <td>
              
              <img style=" width: 100px;height: 100px" src="../assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" /></td>
            <td><a href="index.php?controller=product&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?> </a></td>
            <td> <?php echo number_format(($product['price'] - ($product['price'] * $product['discount'])/100)); ?>₫ </td>
            <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product['number']; ?>" name="product_<?php echo $product['id']; ?>" required="Không thể để trống"></td>
            <td><p><b><?php echo number_format($product['number'] * ($product['price'] - ($product['price'] * $product['discount'])/100)); ?>₫</b></p></td>
            <td><a href="index.php?controller=cart&action=delete&productId=<?php echo $product['id']; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
          </tr>
        <?php endforeach; ?>  
        </tbody>
        <tfoot>
          <!-- co the goi ham trong CartModel -->
          <?php if($this->cartNumber()): ?>
          <tr class="">
            <td colspan="6"><a href="index.php?controller=cart&action=destroy" class="btn btn-warning ">Xóa toàn bộ</a> <a href="index.php" class="btn btn-warning">Tiếp tục mua hàng</a>
              <input type="submit" class="btn btn-secondary  " value="Cập nhật"></td>
          </tr>
        </tfoot>
      <?php endif; ?>
      </table>
    </div>
  </form>
  <div class="total-cart mt-3 "> Tổng tiền thanh toán:
    <?php echo number_format($this->cartTotal()); ?>₫ <br>
    <a href="index.php?controller=cart&action=checkout" class="btn btn-secondary ">Thanh toán</a> </div>
</div>