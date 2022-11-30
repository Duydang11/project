<?php 
  //load file LayoutTrangTrong.php vao day
  $layout = "LayoutTrangTrong.php";
 ?>

  <div class="wrapper-blog">  
  <h1 class="mx-5 ">Tin tức</h1>
   
    <!-- list news -->
    <div class="row">
    <?php foreach($data as $rows): ?>  
      <div class="col-md-5 row-news"> <a href="index.php?controller=news&action=detail&newsId=<?php echo $rows->id; ?>" class="image"> <img src="../assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive col-12"> </a>
        <h3><a href="index.php?controller=news&action=detail&newsId=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
        <p class="desc"><?php echo $rows->description; ?></p>
      </div>
    <?php endforeach; ?> 
    </div>
    <!-- end list news -->
    <ul class="mx-5  d-flex" style="margin-top: 10px !important">
      <li><a href="#">Trang</a></li>
      <?php for($i = 1; $i <= $numPage; $i++): ?>
      <li><a class="border border-dark p-2" href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
    </ul>
  </div>