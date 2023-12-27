<div class="checkout-page7">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <form class="w-100 order-form" id="order_form" name="checkout_form" method="POST">
                    <div class="row">
                        <h3 class="form-heading mb-3">Shipping Information </h3>
                        <div class="col-12 col-md-6 left-col">
                            <div class="left-row1">
                                <div class="form-group bb-yes pt-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email Address" value="">
                                </div>
                                <div class="row m-0 bb-yes">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="firstName" id="firstName"
                                                placeholder="First Name" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lastName" id="lastName"
                                                placeholder="Last Name" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <input type="text" class="form-control" name="shippingAddress1"
                                        id="shippingAddress1" placeholder="Street Address" value="">
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group pt-0">
                                            <input type="text" class="form-control" name="shippingCity"
                                                id="shippingCity" placeholder="Town/City" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group pt-0">
                                            <!-- <input type="text" class="form-control" name="shippingState" placeholder="State" value="<?= $_POST['shippingState'] ?>"> -->
                                            <select name="shippingState" id="shipping_state" class="form-control "
                                                autocomplete="address-level1" data-placeholder="State / Province"
                                                data-input-classes="" placeholder="State / Province" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="AL" <?php if ($_POST['shippingState'] == 'AL') {
                                                                        echo 'selected';
                                                                    } ?>>Alabama
                                                </option>
                                                <option value="AK" <?php if ($_POST['shippingState'] == 'AK') {
                                                                        echo 'selected';
                                                                    } ?>>Alaska
                                                </option>
                                                <option value="AZ" <?php if ($_POST['shippingState'] == 'AZ') {
                                                                        echo 'selected';
                                                                    } ?>>Arizona
                                                </option>
                                                <option value="AR" <?php if ($_POST['shippingState'] == 'AR') {
                                                                        echo 'selected';
                                                                    } ?>>Arkansas
                                                </option>
                                                <option value="CA" <?php if ($_POST['shippingState'] == 'CA') {
                                                                        echo 'selected';
                                                                    } ?>>California
                                                </option>
                                                <option value="CO" <?php if ($_POST['shippingState'] == 'CO') {
                                                                        echo 'selected';
                                                                    } ?>>Colorado
                                                </option>
                                                <option value="CT" <?php if ($_POST['shippingState'] == 'CT') {
                                                                        echo 'selected';
                                                                    } ?>>Connecticut
                                                </option>
                                                <option value="DE" <?php if ($_POST['shippingState'] == 'DE') {
                                                                        echo 'selected';
                                                                    } ?>>Delaware
                                                </option>
                                                <option value="FL" <?php if ($_POST['shippingState'] == 'FL') {
                                                                        echo 'selected';
                                                                    } ?>>Florida
                                                </option>
                                                <option value="GA" <?php if ($_POST['shippingState'] == 'GA') {
                                                                        echo 'selected';
                                                                    } ?>>Georgia
                                                </option>
                                                <option value="HI" <?php if ($_POST['shippingState'] == 'HI') {
                                                                        echo 'selected';
                                                                    } ?>>Hawaii
                                                </option>
                                                <option value="ID" <?php if ($_POST['shippingState'] == 'ID') {
                                                                        echo 'selected';
                                                                    } ?>>Idaho
                                                </option>
                                                <option value="IL" <?php if ($_POST['shippingState'] == 'IL') {
                                                                        echo 'selected';
                                                                    } ?>>Illinois
                                                </option>
                                                <option value="IN" <?php if ($_POST['shippingState'] == 'IN') {
                                                                        echo 'selected';
                                                                    } ?>>Indiana
                                                </option>
                                                <option value="IA" <?php if ($_POST['shippingState'] == 'IA') {
                                                                        echo 'selected';
                                                                    } ?>>Iowa
                                                </option>
                                                <option value="KS" <?php if ($_POST['shippingState'] == 'KS') {
                                                                        echo 'selected';
                                                                    } ?>>Kansas
                                                </option>
                                                <option value="KY" <?php if ($_POST['shippingState'] == 'KY') {
                                                                        echo 'selected';
                                                                    } ?>>Kentucky
                                                </option>
                                                <option value="LA" <?php if ($_POST['shippingState'] == 'LA') {
                                                                        echo 'selected';
                                                                    } ?>>Louisiana
                                                </option>
                                                <option value="ME" <?php if ($_POST['shippingState'] == 'ME') {
                                                                        echo 'selected';
                                                                    } ?>>Maine
                                                </option>
                                                <option value="MD" <?php if ($_POST['shippingState'] == 'MD') {
                                                                        echo 'selected';
                                                                    } ?>>Maryland
                                                </option>
                                                <option value="MA" <?php if ($_POST['shippingState'] == 'MA') {
                                                                        echo 'selected';
                                                                    } ?>>Massachusetts
                                                </option>
                                                <option value="MI" <?php if ($_POST['shippingState'] == 'MI') {
                                                                        echo 'selected';
                                                                    } ?>>Michigan
                                                </option>
                                                <option value="MN" <?php if ($_POST['shippingState'] == 'MN') {
                                                                        echo 'selected';
                                                                    } ?>>Minnesota
                                                </option>
                                                <option value="MS" <?php if ($_POST['shippingState'] == 'MS') {
                                                                        echo 'selected';
                                                                    } ?>>Mississippi
                                                </option>
                                                <option value="MO" <?php if ($_POST['shippingState'] == 'MO') {
                                                                        echo 'selected';
                                                                    } ?>>Missouri
                                                </option>
                                                <option value="MT" <?php if ($_POST['shippingState'] == 'MT') {
                                                                        echo 'selected';
                                                                    } ?>>Montana
                                                </option>
                                                <option value="NE" <?php if ($_POST['shippingState'] == 'NE') {
                                                                        echo 'selected';
                                                                    } ?>>Nebraska
                                                </option>
                                                <option value="NV" <?php if ($_POST['shippingState'] == 'NV') {
                                                                        echo 'selected';
                                                                    } ?>>Nevada
                                                </option>
                                                <option value="NH" <?php if ($_POST['shippingState'] == 'NH') {
                                                                        echo 'selected';
                                                                    } ?>>New Hampshire
                                                </option>
                                                <option value="NJ" <?php if ($_POST['shippingState'] == 'NJ') {
                                                                        echo 'selected';
                                                                    } ?>>New Jersey
                                                </option>
                                                <option value="NM" <?php if ($_POST['shippingState'] == 'NM') {
                                                                        echo 'selected';
                                                                    } ?>>New Mexico
                                                </option>
                                                <option value="NY" <?php if ($_POST['shippingState'] == 'NY') {
                                                                        echo 'selected';
                                                                    } ?>>New York
                                                </option>
                                                <option value="NC" <?php if ($_POST['shippingState'] == 'NC') {
                                                                        echo 'selected';
                                                                    } ?>>North Carolina
                                                </option>
                                                <option value="ND" <?php if ($_POST['shippingState'] == 'ND') {
                                                                        echo 'selected';
                                                                    } ?>>North Dakota
                                                </option>
                                                <option value="OH" <?php if ($_POST['shippingState'] == 'OH') {
                                                                        echo 'selected';
                                                                    } ?>>Ohio
                                                </option>
                                                <option value="OK" <?php if ($_POST['shippingState'] == 'OK') {
                                                                        echo 'selected';
                                                                    } ?>>Oklahoma
                                                </option>
                                                <option value="OR" <?php if ($_POST['shippingState'] == 'OR') {
                                                                        echo 'selected';
                                                                    } ?>>Oregon
                                                </option>
                                                <option value="PA" <?php if ($_POST['shippingState'] == 'PA') {
                                                                        echo 'selected';
                                                                    } ?>>Pennsylvania
                                                </option>
                                                <option value="RI" <?php if ($_POST['shippingState'] == 'RI') {
                                                                        echo 'selected';
                                                                    } ?>>Rhode Island
                                                </option>
                                                <option value="SC" <?php if ($_POST['shippingState'] == 'SC') {
                                                                        echo 'selected';
                                                                    } ?>>South Carolina
                                                </option>
                                                <option value="SD" <?php if ($_POST['shippingState'] == 'SD') {
                                                                        echo 'selected';
                                                                    } ?>>South Dakota
                                                </option>
                                                <option value="TN" <?php if ($_POST['shippingState'] == 'TN') {
                                                                        echo 'selected';
                                                                    } ?>>Tennessee
                                                </option>
                                                <option value="TX" <?php if ($_POST['shippingState'] == 'TX') {
                                                                        echo 'selected';
                                                                    } ?>>Texas
                                                </option>
                                                <option value="UT" <?php if ($_POST['shippingState'] == 'UT') {
                                                                        echo 'selected';
                                                                    } ?>>Utah
                                                </option>
                                                <option value="VT" <?php if ($_POST['shippingState'] == 'VT') {
                                                                        echo 'selected';
                                                                    } ?>>Vermont
                                                </option>
                                                <option value="VA" <?php if ($_POST['shippingState'] == 'VA') {
                                                                        echo 'selected';
                                                                    } ?>>Virginia
                                                </option>
                                                <option value="WA" <?php if ($_POST['shippingState'] == 'WA') {
                                                                        echo 'selected';
                                                                    } ?>>Washington
                                                </option>
                                                <option value="WV" <?php if ($_POST['shippingState'] == 'WV') {
                                                                        echo 'selected';
                                                                    } ?>>West Virginia
                                                </option>
                                                <option value="WI" <?php if ($_POST['shippingState'] == 'WI') {
                                                                        echo 'selected';
                                                                    } ?>>Wisconsin
                                                </option>
                                                <option value="WY" <?php if ($_POST['shippingState'] == 'WY') {
                                                                        echo 'selected';
                                                                    } ?>>Wyoming
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                        <div class="form-group pt-0">
                                            <input type="text" class="form-control" name="shippingZip" id="shippingZip"
                                                placeholder="Zip Code" maxlength="5"
                                                onKeyUp="javascript:this.value=this.value.replace(/[^0-9]/g,'');"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pt-0">
                                    <input type="text" class="form-control" name="shippingCountry" id="shippingCountry"
                                        placeholder="Country" value="US" readonly>
                                </div>
                                <div class="form-group pt-0">
                                    <input type="tel" class="form-control" name="phone" id="phone"
                                        placeholder="Phone Number" data-min-length="10" data-max-length="15"
                                        onkeyup="javascript:this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10"
                                        value="">
                                </div>
                                <div class="form-group pt-0">
                                    <textarea id="order-notes" name="notes" placeholder="Order Notes"></textarea>
                                </div>
                            </div>
                            <div class="left-row2">
                                <div class="payment-wrapper">
                                    <div class="payment mb-4">
                                        <div
                                            class="payment-header d-flex justify-content-between px-0 pb-3 align-items-center">
                                            <label class="mb-0 ">
                                                <!-- <input type="radio" name="payment" id="radio1"> -->
                                                <span for="radio1"></span>
                                                Payment Methods
                                            </label>
                                            <div class="d-inline-flex">
                                                <?php if ($card_type['master'] == 'yes') { ?> <img
                                                    src="./bp_config/images/payment/CardSet<?= $pageConfig['creditCardIcons'] ?>/mastercard.png">
                                                <?php } ?>
                                                <?php if ($card_type['discover'] == 'yes') { ?><img
                                                    src="./bp_config/images/payment/CardSet<?= $pageConfig['creditCardIcons'] ?>/discover.png">
                                                <?php } ?>
                                                <?php if ($card_type['visa'] == 'yes') { ?><img
                                                    src="./bp_config/images/payment/CardSet<?= $pageConfig['creditCardIcons'] ?>/visa.png">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="payment-form px-3 py-3  row m-0">
                                            <label class="card-wrapper-label">
                                                Add a Card
                                            </label>
                                            <div class="col-12 col-xl-6 p-1">
                                                <div class="form-group">
                                                    <label>Card Number</label>
                                                    <input type="tel" class="form-control" name="cc_no" id="cc_no"
                                                        maxlength="16"
                                                        onkeyup="javascript:this.value=this.value.replace(/[^0-9]/g,'');"
                                                        value="" placeholder="Card No">
                                                </div>
                                            </div>
                                            <div class="col-4 col-xl-2 p-1">
                                                <div class="form-group">
                                                    <label>Exp. Month</label>
                                                    <select class="form-control" name="cc_month" id="cc_month"
                                                        maxlength="2" placeholder="Month(MM)">
                                                        <option value="" selected="selected">Month(MM)</option>
                                                        <?php for ($month = 01; $month < 13; $month = $month + 1) { ?>
                                                        <option value=<?= $month ?>><?= sprintf("%02d", $month); ?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-4 col-xl-2 p-1">
                                                <div class="form-group">
                                                    <label>Exp. Year</label>
                                                    <select class="form-control" name="cc_year" id="cc_year"
                                                        maxlength="4" placeholder="Year(YYYY)">
                                                        <option value="" selected="selected">Year(YYYY)</option>
                                                        <?php $c_year = date('Y');
                                                        for ($year = $c_year; $year < ($c_year + 11); $year = $year + 1) { ?>
                                                        <option value=<?= $year ?>> <?= $year ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-4 col-xl-2 p-1">
                                                <div class="form-group mb-0">
                                                    <label>CVV</label>
                                                    <input type="tel" class="form-control" name="CVV" id="cvv"
                                                        maxlength="3"
                                                        onkeyup="javascript:this.value=this.value.replace(/[^0-9]/g,'');"
                                                        placeholder="CVV" value="">
                                                </div>
                                            </div>
                                            <div class="col-12 text-right">
                                                <a href="javascript:void(0)" onClick="popop_cvv()" class="ml-4 cvv">
                                                    Where is my Security Code?
                                                </a>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-6">
                                                <img id="cvv-img" src="bp_config/images/payment/cvv.jpg"
                                                    style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="left-row3">
                                <div class="form-btn py-4 checkboxes">
                                    <!-- <?php if ($pageConfig['checkoutPage']['show_terms_checkbox'] == "yes") { ?>
                                        <label for="vehicle1" class="agree">
                                            <input type="checkbox" id="iagree" name="agree" value="agree">
                                            I agree with <a href="terms.php" target="_blank">Terms
                                                and Conditions</a> and <a href="privacy.php" target="_blank">Privacy
                                                Policy.</a>
                                        </label>
                                        <input type="hidden" id="checkbox_type"
                                               value="<?= $pageConfig['checkoutPage']['show_terms_checkbox'] ?>"/>
                                        <br/>
                                        <?php } ?>
                                        <label for="vehicle1" id="pv" class="agree" style="display:none;">
                                            <span id="verbiagee"></span>
                                            <!- <?= $verbiage ?> ->
                                        </label> -->

                                    <!--showing or not showing checkout page generic text terms based on require_generic_text_terms = yes or no-->
                                    <?php if ($pageConfig['checkoutPage']['require_generic_text_terms'] == "yes") { ?>
                                    <label for="vehicle1" class="agree" style="font-size: 16px;">
                                        <input type="checkbox" id="iagree" name="agree" value="agree">
                                        You agree with <a href="terms.php" target="_blank">Terms
                                            and Conditions</a> and <a href="privacy.php" target="_blank">Privacy
                                            Policy.</a>
                                    </label>
                                    <?php } ?>

                                    <!-- //check if checkoutPage_prod_terms set to yes then show checkout page products terms checkboxes, if set to no then disable it -->
                                    <?php if ($pageConfig['checkoutPage']['require_product_terms'] == "yes") { ?>
                                    <div id="prodTerms">
                                        <!-- <input type="checkbox" id="prod_agree" name="prod_agree" class="agree" value="agree">
                                        By placing an order you will be billed $<span class="total_price"></span> ($<span class="total_price"></span> + $<span id="ship_price"></span> for shipping) for <span id="prod_name"></span>. This is a one-time purchase. Shipment via <?php echo $generalConfig['shipping_carrier']; ?> typically takes <?php echo $generalConfig['shipping_period']; ?> business days. Your credit card will be billed as “<?php echo $generalConfig['descriptor']; ?>” on your statement. -->
                                    </div>
                                    <?php } ?>
                                    <?php if ($pageConfig['checkoutPage']['require_total_price_terms'] == "yes") { ?>
                                    <div id="totalTerms"></div>
                                    <?php } ?>

                                    <?php if ($pageConfig['shippingOption']['enableShippingOption'] == "yes") { ?>
                                    <label class="agree" style="font-size: 15px;">
                                        <input type="checkbox" id="shipping-insurance-checkbox"
                                            name="shipping-insurance">
                                        <?= $pageConfig['shippingOption']['shippingOptionName']; ?> -
                                        $<?= $pageConfig['shippingOption']['shippingOptionPrice']; ?>
                                    </label>
                                    <script>
                                    $(document).ready(function() {
                                        $('#shipping-insurance-checkbox').change(function() {
                                            if (this.checked) {
                                                $('#shipping-insurance-tr').show();
                                                $('#final_price').text(($('#final_price').text() * 1) +
                                                    ($('#shipping-insurance-price').text() * 1));
                                            } else {
                                                $('#shipping-insurance-tr').hide();
                                                $('#final_price').text(($('#final_price').text() * 1) -
                                                    ($('#shipping-insurance-price').text() * 1));
                                            }

                                            $('.total_price').text($('#final_price').text());
                                        });
                                    });
                                    </script>
                                    <?php } ?>

                                    <input type="hidden" id="products" name="products" value="">
                                    <button type="button" class="btn btn-order primary_color primary_text_color"
                                        id="btnPlaceOrder">PROCEED AND PLACE ORDER</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 right-col">
                            <div class="your-order">
                                <div class="rheading order-heading">
                                    <h3 class="form-heading2">Order Summary</h3>
                                </div>
                                <div class="rbody order-body">
                                    <p id="p_name_all"></p>
                                    <table class="table  table-cart">
                                        <tfoot>
                                            <tr>
                                                <td class="form-heading2" colspan="3">Subtotal</td>
                                                <td class="form-heading2">$<span id="product_subtotal"
                                                        value='0.00'>0.00</span></td>
                                            </tr>
                                            <?php if ($pageConfig['displayShippingPrice'] == "yes") { ?>
                                            <tr>
                                                <td class="form-heading2" colspan="3">Shipping</td>
                                                <td class="form-heading2">$<span id="shipping_subtotal"
                                                        value='0.00'>0.00</span></td>
                                            </tr>
                                            <?php } ?>
                                            <tr id="shipping-insurance-tr" style="display: none;">
                                                <td class="form-heading2" colspan="3">
                                                    <?= $pageConfig['shippingOption']['shippingOptionName']; ?></td>
                                                <td class="form-heading2">$<span id="shipping-insurance-price"
                                                        value='0.00'><?= $pageConfig['shippingOption']['shippingOptionPrice']; ?></span>
                                                </td>
                                            </tr>
                                            <tr class="total">
                                                <td class="form-heading2 " colspan="3">Total</td>
                                                <td class="form-heading2">$<span id="final_price"
                                                        value='0.00'>0.00</span></td>
                                                <input type="hidden" name="order_total_value" value="" />
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="cart">
                                <div class="rheading row-heading">
                                    <h3 class="form-heading2">Your basket</h3>
                                </div>
                                <div class="row rbody order-body">
                                    <div class="col-12 cart-inner">
                                        <div class="table-responsive">
                                            <table class="table  table-cart" style="width: 100%;" id="table-cart">
                                                <tbody id="cartRow">
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>