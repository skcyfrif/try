<div class="member-ship-box aos-init aos-animate" data-aos="zoom-in">
    <div class="member-ship-headig">
        <h2>Select your Plan</h2>
    </div>
    <div class="ptic-menber">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pricing pricing-palden">
                        <?php
                        if (!empty($allData)) {
                            foreach ($allData as $lit_dat) {
                                ?>
                                <div class="pricing-item">
                                    <h3><?= $lit_dat->title; ?></h3>
                                    <div class="price-box">
                                        <h2><i class="fa fa-dollar" aria-hidden="true"></i> <?= $lit_dat->price; ?></h2>

                                    </div>
                                    <div class="price-contan">
                                        <?= $lit_dat->description; ?>

                                    </div>
                                    <a class="pricing-action" href="<?= HTTP_ROOT; ?>paypals/pay/<?= $lit_dat->id; ?>">Buy Now</a>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                            <div class="text-danger h4">Plan not added</div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
   
</style>