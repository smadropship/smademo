<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section class="page-contents">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <h5><strong><?= lang('ผู้ส่ง'); ?></strong></h5>
                    <?php echo form_open('shop/listAddress'); ?>
                    <div class="checkbox bg" onclick="Clicklogistic()">
                        <?php foreach ($address_logistics as $address_logistic) {
                        ?>
                            <label style="display: inline-block; width: auto;">
                                <input type="radio" name="address_send" value="<?= $address_logistic->id; ?>" required="required">
                                <span>
                                    <?= lang('ชื่อ') . ':  ' . $address_logistic->name; ?><br><br></li>
                                    <?= lang('ที่อยู่') . ': ' . $address_logistic->address; ?><br>
                                    <?= lang('โทร') . ': ' . $address_logistic->phone_number; ?><br>
                                    <?= lang('รหัสไปรษณี') . ': ' . $address_logistic->postal_code; ?>
                                </span>
                            </label>
                        <?php    }
                        ?>
                    </div>
                    <hr>

                    <!-- <h5><strong><?= lang('เลือกขนส่งสินค้า'); ?></strong></h5>
                    <div class="checkbox bg" onclick="myFunction()">
                        <?php foreach ($logistics as $logistic) {
                        ?>
                            <label style="display: inline-block; width: auto;">
                                <input type="radio" name="logistic_method" value="<?= $logistic->logistic_name; ?>" id="<?= $logistic->logistic_name; ?>" required="required">
                                <span>
                                    <i class="fa fa-truck margin-right-md"></i> <?= $logistic->logistic_name; ?>
                                </span>
                            </label>
                        <?php    }
                        ?>
                    </div>
                    <hr> -->
                    <h5><strong><?= lang('เลือกขนส่งสินค้า'); ?></strong></h5>
                    <div class="checkbox bg">
                        <label style="display: inline-block; width: auto;">
                            <input type="radio" name="logistic_method" onclick="KerryClick()" value="kerry" id="kerry" required="required">
                            <span>
                                <i class="fa fa-truck margin-right-md"></i>kerry
                            </span>
                        </label>
                        <label style="display: inline-block; width: auto;">
                            <input type="radio" name="logistic_method" onclick="FlashClick()" value="flash" id="flash" required="required">
                            <span>
                                <i class="fa fa-truck margin-right-md"></i>flash
                            </span>
                        </label>
                        <hr>
                        <h5><strong><?= lang('ระบุน้ำหนักพัสดุ'); ?></strong></h5>
                        <input type="text" name="weight" id="weight" placeholder="หน่วยกรัม" style="width: 50%;padding: 5px 20px;margin: 8px 0;box-sizing: border-box;">
                        <button id="entweight" class="btn btn-primary">คำนวณค่าส่ง</button>
                        <h3>ค่าส่ง :</h3>
                        <h2 id="labelTxt">0</h2>

                        <input type="hidden" name="price" value="">

                        <hr>
                        <h5><strong><?= lang('ผู้รับ'); ?></strong></h5>
                        <div class="checkbox bg">
                            <?php foreach ($address_receivers as $address_receiver) {
                            ?>
                                <label style="display: inline-block; width: auto;">
                                    <input type="radio" name="address_receiver" value="<?= $address_receiver->id; ?>" required="required">
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
        <script>
            var kerryVal = 0;
            var flashVal = 0;

            function KerryClick() {
                var kerry = $('#kerry')[0];
                if (kerry.checked == true) {
                    // alert("Kerry Click");
                    kerryVal = 10;
                }
            }

            function FlashClick() {
                var flash = $('#flash')[0];
                if (flash.checked == true) {
                    // alert("Flash Click");
                    flashVal = 5;
                }
            }
            $(document).ready(function() {
                $('#entweight').click(function() {
                    var weight = parseInt($('#weight').val());
                    const calulatePriceFWeight = function(weight, plusems, plusflash) {
                        var result = {
                            'flash': 0,
                            'ems': 0
                        };
                        var weightlist = [{
                                'weight': 250,
                                'cost': 20
                            },
                            {
                                'weight': 500,
                                'cost': 25
                            },
                            {
                                'weight': 1000,
                                'cost': 50
                            },
                            {
                                'weight': 1500,
                                'cost': 60
                            },
                            {
                                'weight': 2000,
                                'cost': 70
                            },
                            {
                                'weight': 2500,
                                'cost': 120
                            },
                            {
                                'weight': 3000,
                                'cost': 130
                            },
                            {
                                'weight': 3500,
                                'cost': 150
                            },
                            {
                                'weight': 4000,
                                'cost': 160
                            },
                            {
                                'weight': 4500,
                                'cost': 190
                            },
                            {
                                'weight': 5000,
                                'cost': 210
                            },
                            {
                                'weight': 5500,
                                'cost': 240
                            },
                            {
                                'weight': 6000,
                                'cost': 260
                            },
                            {
                                'weight': 6500,
                                'cost': 290
                            },
                            {
                                'weight': 7000,
                                'cost': 310
                            },
                            {
                                'weight': 7500,
                                'cost': 340
                            },
                            {
                                'weight': 8000,
                                'cost': 360
                            },
                            {
                                'weight': 8500,
                                'cost': 390
                            },
                            {
                                'weight': 9000,
                                'cost': 420
                            },
                            {
                                'weight': 9500,
                                'cost': 450
                            },
                            {
                                'weight': 10000,
                                'cost': 480
                            },
                            {
                                'weight': 11000,
                                'cost': 500
                            },
                            {
                                'weight': 12000,
                                'cost': 510
                            },
                            {
                                'weight': 13000,
                                'cost': 530
                            },
                            {
                                'weight': 14000,
                                'cost': 540
                            },
                            {
                                'weight': 15000,
                                'cost': 560
                            },
                            {
                                'weight': 16000,
                                'cost': 570
                            },
                            {
                                'weight': 17000,
                                'cost': 590
                            },
                            {
                                'weight': 18000,
                                'cost': 600
                            },
                            {
                                'weight': 19000,
                                'cost': 620
                            },
                            {
                                'weight': 20000,
                                'cost': 630
                            }
                        ]
                        for (let k in weightlist) {
                            if (weight <= weightlist[k].weight) {
                                result.flash = weightlist[k].cost + plusflash;
                                result.ems = weightlist[k].cost +
                                    plusems;
                                break;
                            }
                        }
                        console.log(result);
                        return result;
                    };
                    var finalResult = calulatePriceFWeight(weight, kerryVal, flashVal)

                    if (kerryVal > 0) {
                        $('#labelTxt').text(finalResult.ems);
                        $("input[name=price]").val(finalResult.ems);
                    }
                    if (flashVal > 0) {
                        $('#labelTxt').text(finalResult.flash);
                        $("input[name=price]").val(finalResult.flash);
                    }
                    kerryVal = 0;
                    flashVal = 0;

                });
            });
        </script>
</section>