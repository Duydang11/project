    <!-- Section: Header -->
    <header class="header">
        <div class="container">
            <div class="row">
            <?php if(!isset($_SESSION["customer_email"])): ?>
      <div class="col-12 customer text-end mb-2"> <a href="index.php?controller=account&action=login">Đăng nhập</a>&nbsp; &nbsp;<a href="index.php?controller=account&action=register">Đăng ký</a> </div>
    <?php else: ?>
      <div class="col-12 customer text-end mb-2"> <a href="#">Xin chào <?php echo $_SESSION['customer_email']; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout">Đăng xuất</a> </div>
    <?php endif; ?>
      
      
            <div class="wrapper col-12">
                <a href="index.php" class="brand">
                    <img src="https://traffic-edge36.cdn.vncdn.io/nvn/ncdn/store1/41786/logo_1658210901_Artboard%201.png" alt="">
                </a>
                <button type="button" class="burger" id="burger">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </button>
                <span class="overlay" id="overlay"></span>
                <nav class="navbar" id="navbar">
                    <ul class="menu">
                        <!-- để thử-->
                        <li class="menu-item"><a href="index.php">Trang chủ</a></li>
                        
                        <li class="menu-item menu-item-child">
                            <a href="#" data-toggle="sub-menu">Sản phẩm<i class="expand"></i></a>
                             
                            
                            <ul class="sub-menu">
                                <?php 
                                 $conn = Connection::getInstance();
                                 $query = $conn->query("select *from categories where parent_id = 0 order by id desc");
                                 $categories = $query->fetchALL(PDO::FETCH_OBJ);
                                ?>
                                <?php foreach($categories as $rows): ?>
                                <li class="menu-item"><a href="index.php?controller=products&action=category&catId=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>

                                <ul class="sub-menu-2" style="padding: 5px;">
                                  <?php 
                                 $querySub = $conn->query("select * from categories where parent_id={$rows->id} order by id desc");
                                 $categoriesSub = $querySub->fetchAll(PDO::FETCH_OBJ);
                                  ?>
                                <?php foreach($categoriesSub as $rowsSub): ?>
                                  <li style="padding-left:10px" ><a href="index.php?controller=products&action=category&catId=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
                                <?php endforeach; ?>
                                </ul>
                                
                                <?php endforeach; ?>
                            </ul>
                            
                        </li>
                        <li class="menu-item"><a href="index.php?controller=cart">Giỏ hàng</a></li>
                        <li class="menu-item"><a href="index.php?controller=news">Tin tức</a></li>
                        <li class="menu-item"><a href="index.php?controller=contact">Liên hệ</a></li>
                        
                        <li class="menu-item">
                            <div id="myOverlay" class="overlay_search" style="z-index: 999999999999999999;">
                                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                <div class="overlay-content" id="smart-search">
                                    <!-- <form action="/action_page.php"> -->
                                    <input type="text" onkeyup="searchAjax();" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
                                        <button type="submit"><i class="fa fa-search" onclick="return search();"></i></button>
                                    <!-- </form> -->
                                    <div class="show_resul" id="smart-search-box">
                                        <ul></ul>
                                    </div>
                                </div>

                            </div>
                            <script type="text/javascript">
      function search(){
        //lay gia tri cua textbox co id=key
        var key = document.getElementById("key").value;
        //di chuyen den trang tim kiem
        location.href = "index.php?controller=search&action=name&key="+key;
      }
      /*
      //kiem tra jquery (neu website chua co jquery thi phai download va add jquery vao trang)
      $(document).ready(function(){
        alert("jquery da load vao trang");
      });*/
      function searchAjax(){
        var key =$("#key").val();
        //hien thi box search
        $("#smart-search-box").attr("style","display:block");
        //thuc hien lay thong tin bang ajax
        $.get("index.php?controller=search&action=ajax&key="+key, function(data){
          //lam rong du lieu trong the ul
          $("#smart-search-box ul").empty();
          //them du lieu vao the ul
          $("#smart-search-box ul").append(data);
        });
      }
    </script>

                            <button class="openBtn btn  btn-outline-dark" onclick="openSearch()"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </li>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- END Section: Header -->
