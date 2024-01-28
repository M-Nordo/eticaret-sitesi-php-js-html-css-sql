<!--   product  -->
<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Tıkla ve Satın Al</button>
                    </div>
                    <div class="col">
                        <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,534 oylama | 1000+ cevaplanan soru</a>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Önceki Fiyat:</td>
                        <td><strike>25.000₺</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Güncel Fiyat:</td>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Kazanç:</td>
                        <td><span class="font-size-16 text-danger">22.000₺</span></td>
                    </tr>
                </table>
                <!---    !product price       -->

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Günde <br> Ürün Değişikliği</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Kargo Ücreti <br>Bizden</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">2 Yıllık <br>Garanti</a>
                        </div>
                    </div>
                </div>
                <!--    !policy -->
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Tahmini Teslim : 01 Mart  - 11 Mart</small>
                    <small>Sold by <a href="#">Nordo Elektronik </a>(5 te 4,5 olumlu | 28,178 oylama)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Müşteriye Teslim - Ankara</small>
                </div>
                <!-- !order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Renk Seçeneği:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Adet</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-baloo">RAM Seçeneği :</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->


            </div>

            <div class="col-12">
                <h6 class="font-rubik">Ürün Açıklaması</h6>
                <hr>
                <p class="font-rale font-size-14">Ürünümüz son teknoloji ile üretilmiş olup suya ve darbelere karşı dayanıklıdır.</p>
                <p class="font-rale font-size-14">Nordo Telefon Şirketi ürünün stok adedini değiştirebilir, ürünü stoktan kaldırabilir ve yeni stoklar ekleyebilir. Her hakkı saklıdır...</p>
            </div>
        </div>
    </div>
</section>
<!--   !product  -->
<?php
        endif;
        endforeach;
?>