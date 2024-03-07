<section>
    <div class="bg_in">
        <div class="breadcrumbs">
            <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href=".">
                        <span itemprop="name">Trang chủ</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="sanpham.php">
                        <span itemprop="name">Tất cả sản phẩm</span></a>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>Tất cả sản phẩm</h1>

                </div>
            </div>
            <div class="pro_all_gird">
                <div class="girds_all list_all_other_page ">
                    <?php
                    foreach ($list_product as $key => $product) {
                    ?>
                        <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">

                            <input type="hidden" value="<?php echo $product['id_product'] ?>" name="product_id">
                            <input type="hidden" value="<?php echo $product['title_product'] ?>" name="product_title">
                            <input type="hidden" value="<?php echo $product['image_product'] ?>" name="product_image">
                            <input type="hidden" value="<?php echo $product['price_product'] ?>" name="product_price">
                            <input type="hidden" value="1" name="product_quantity">
                            <div class="grids grids-list-product">
                                <div class="grids_in">
                                    <div class="content">
                                        <div class="img-right-pro">
                                            <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product['id_product'] ?>">
                                                <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $product['image_product'] ?>" />
                                            </a>

                                        </div>
                                        <div class="name-pro-right">
                                            <a href="chitietsp.php">
                                                <h3> <?php echo $product['title_product'] ?></h3>
                                            </a>
                                        </div>
                                        <div>
                                            <input type="submit" style="box-shadow: none" class="add_card" name="addcart" value="Thêm vào giỏ">
                                        </div>
                                        <div class="price_old_new">
                                            <div class="price">
                                                <span class="news_price"><?php echo number_format($product['price_product'], 0, ',', '.') . 'đ' ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
</section>