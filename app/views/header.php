 <!DOCTYPE html>
 <html lang="en-CA">

 <head>
     <title>Mắt Kính</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,300&family=Poppins:wght@400;600&family=Roboto+Mono:wght@300;400;500;600;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/product.css">
     <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/style.css">

 </head>

 <body>
     <header>
         <div class="header_top_menu">
             <div class="btn_menu_search">
                 <div class="bg_in">
                     <div class="table_row_search">
                         <div class="search_top">
                             <div id='cssmenu'>
                                 <ul>
                                     <li class='active'><a href='<?php echo BASE_URL ?>/index'>Trang chủ</a></li>

                                     <li class=''>

                                         <a href='<?php echo BASE_URL ?>/sanpham/tatca'>Sản phẩm</a>

                                         <ul>
                                             <?php
                                                foreach ($category as $key => $cate) {
                                                ?>
                                                 <li>

                                                     <a href='<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $cate['id_category_product'] ?>'><span><?php echo $cate['title_category_product'] ?></span></a>


                                                 </li>
                                             <?php
                                                }
                                                ?>



                                         </ul>
                                     </li>
                                     <li><a href='<?php echo BASE_URL ?>/giohang'>Giỏ hàng</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="clear"></div>
                     </div>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
     </header>
     <div class="clear"></div>