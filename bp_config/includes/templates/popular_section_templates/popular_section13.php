
<!-- popular Product Section Starts Here -->
<?php ob_start(); ?>
<section class="popular_section popular_section13 p-0 my50">
    <?php if($pageConfig['popularProducts']['displaypopularProducts'] == 'yes') { ?>
      <div class="container" id="related_prods">
          <div class="popular-text-wrapper row">
              <div class="popular_section col-lg-12 col-12 pdt-col p-0">
                  <p class="popular-text">Our Collections</p>
                  <h1 class="popular-heading"><?= $updateContent['popularTitle'] ?></h1>
              </div>
          </div>
          <div class="product-wrapper row">
              <?php
              // $main_pdt_categor = "Diet";
              uksort($products, function() { return rand() > rand(); });
              $i = 0;
              foreach ($products as $key => $value){
                  $i++;
                  foreach ($value as $k => $v){
  
                      if($v == 'active' && $i <= $pageConfig['popularProducts']['popularProducts']){
                          $p = $key;
                          $product = $products[$p];
                          // echo "<pre>";
                          // print_r($product);
                          // echo "product ".$product['category'];
  
                          if($product['status']=='active')
                          {
                            $priceMin = $product['ssPrice'];
                            if($product['straightSaleMultiPrice']=='yes' && $product['billingModel']=='1')
                              $priceMin = $product['shop_option']['shop_option1']['option_price'];
                            else if($product['billingModel']=='2' || $product['billingModel']=='6' || $product['billingModel']=='7' || $product['billingModel']=='8')
                              $priceMin = $product['trialPrice'];
                            else if($product['billingModel']=='3')
                              $priceMin = $product['continuityPrice'];
                              ?>
                           <div  
                              class="product-section product-section14 col-xl-4 col-md-6 col-12" 
                              data-product="product<?php echo $i;?>"
                              data-prod-id="<?= $product['id'] ?>" 
                              data-product-category="<?= $product['category'] ?>" 
                              data-product-title="<?= $product['name'] ?>" 
                              data-product-alias="<?= $product['alias'] ?>"
                              data-product-description="<?= $product['description'] ?>"
                              data-product-price="<?= $priceMin ?>" 
                              data-product-shipping="<?= $product['ssShipping'] ?>"
                              <?php if ($product['billingModel'] != 1) { ?>
                              data-product-rbllprice="<?= $product['trialRebillPrice'] ?>"
                              data-product-trlshipping="<?= $product['trialShipping'] ?>"
                              data-product-cntntyprice="<?= $product['continuityPrice'] ?>"
                              data-product-cntntyshipping="<?= $product['continuityShipping'] ?>"
                              <?php } ?> 
                              data-product-billmodel="<?= $product['billingModel'] ?>" 
                              data-product-MultiPrice="<?= $product['straightSaleMultiPrice'] ?>" 
                              data-product-id="product-<?php echo $i;?>" 
                              data-product-size-option="<?= $product['sizeOption'] ?>" 
                              data-product-image-link="<?= preg_match('/^(http\:\/\/|https\:\/\/)/', $product['image']) ? $product['image'] : $path['images'] . '/' . $product['image']; ?>"
                              >
                              <div class="product-block pdt-overlay btn_shop"> 
                                 <div class="pdtImageWrapper popular_pdt_overly">
                                    <img class="prod_img14" src="<?= preg_match('/^(http\:\/\/|https\:\/\/)/', $product['image']) ? $product['image'] : $path['images'] . '/' . $product['image']; ?>">
                                 </div>
                                 <div class="product-details">
                                    <div class="product-details-inner">
                                        <?php if ($pageConfig['displayBillingModel'] == 'yes') { ?>
                                            <p class="prod_category14">
                                                <span>
                                                    <?php
                                                    switch ($product['billingModel']) {
                                                        case 1:
                                                            echo $generalConfig['naming_convention']['1'];
                                                            break;

                                                        case 2:
                                                        case 8:
                                                            echo $generalConfig['naming_convention']['2'];
                                                            break;

                                                        case 3:
                                                            echo $generalConfig['naming_convention']['3'];
                                                            break;

                                                        case 4:
                                                            echo $generalConfig['naming_convention']['1'] . ' & ' . $generalConfig['naming_convention']['2'];
                                                            break;

                                                        case 5:
                                                            echo $generalConfig['naming_convention']['1'] . ' & ' . $generalConfig['naming_convention']['3'];
                                                            break;

                                                        case 6:
                                                            echo $generalConfig['naming_convention']['2'] . ' & ' . $generalConfig['naming_convention']['3'];
                                                            break;

                                                        case 7:
                                                            echo $generalConfig['naming_convention']['1'] . ' & ' . $generalConfig['naming_convention']['2'] . ' & ' . $generalConfig['naming_convention']['3'];
                                                            break;
                                                    }
                                                    ?>
                                                </span>
                                            </p>
                                        <?php } ?>
                                        <h5 class="product-title product-name14"><?= $product['name'] ?></h5>
                                    </div>  
                                 </div>
                              </div>
                              
                           </div>  
                     <?php
                     }}}}
              ?>
          </div>
      </div>
  <?php } ?>
</section>
<?php $sections['popularProductsection'] = ob_get_clean(); ?>
<!-- popular Product Section Ends Here -->