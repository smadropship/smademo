<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<section class="page-contents">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <h5><strong><?= lang('ผู้ส่ง'); ?></strong></h5>
                    <?php echo form_open('shop/listAddress'); ?>
                    <div class="checkbox bg">
                        <?php foreach ($address_logistics as $address_logistic) {
                        ?>
                            <label style="display: inline-block; width: auto;">
                                <input type="radio" name="address_logistic" value="<?= $address_logistic->id; ?>" id="<?= $address_logistic->id; ?>" required="required">
                                <span>
                                    <?= lang('ชื่อ') . ': ' . $address_logistic->name; ?><br><br>
                                    <?= lang('ที่อยู่') . ': ' . $address_logistic->address; ?><br>
                                    <?= lang('โทร') . ': ' . $address_logistic->phone_number; ?><br>
                                    <?= lang('รหัสไปรษณี') . ': ' . $address_logistic->postal_code; ?>
                                </span>
                            </label>
                        <?php    }
                        ?>
                    </div>
                    <hr>
                    <h5><strong><?= lang('ผู้รับ'); ?></strong></h5>
                    <div class="checkbox bg">
                        <?php foreach ($address_receivers as $address_receiver) {
                        ?>
                            <label style="display: inline-block; width: auto;">
                                <input type="radio" name="address_receiver" value="<?= $address_receiver->id; ?>" id="<?= $address_receiver->id; ?>" required="required">
                                <span>
                                    <?= lang('ชื่อ') . ': ' . $address_receiver->name; ?><br><br>
                                    <?= lang('ที่อยู่') . ': ' . $address_receiver->address; ?><br>
                                    <?= lang('โทร') . ': ' . $address_receiver->phone_number; ?><br>
                                    <?= lang('รหัสไปรษณี') . ': ' . $address_receiver->postal_code; ?>
                                </span>
                            </label>
                        <?php    }
                        ?>
                    </div>
                    <hr>
                    <input type="submit" value="submit" class="btn btn-primary">
                </div>
                <?
               ?>
            </div>
        </div>
    </div>
</section>