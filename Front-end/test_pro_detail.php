                    <form method="POST" action="product_cart.php">
                        <div class="p-t-33 p-b-60">
                            <div class="flex-m flex-w p-b-10">
                                <div class="flex-m flex-w p-b-10">
                                    <label style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px;">Size : </label>
                                    <select name="product_size" style="padding: 12px; font-family: 'Sarabun', sans-serif; border-radius: 5px; border: 1px solid #ccc; width: 400px; margin:15px;" required>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="Over Size">Over Size</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                            <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                                รายละเอียดไซต์สินค้า
                                <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                                <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                            </h5>

                            <div class="dropdown-content dis-none p-t-15 p-b-23">
                                <img src="../img/table_size.jpg" width="500px" height="200px">
                            </div>
                        </div>

                        <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                            <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                                รายละเอียดสินค้า
                                <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                                <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                            </h5>

                            <div class="dropdown-content dis-none p-t-15 p-b-23">
                                <p class="s-text8">
                                    <?= $row['product_detail'] ?>
                                </p>
                            </div>
                        </div><br></br>
                        <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10 ml-auto">
                                <button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    <i class="fa-solid fa-cart-plus fa-xl" style="color: #ffffff;"></i> เพิ่มลงตะกร้า
                                </button>
                        </div>
        </form>

