<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<section class="page-contents">
    <h2>การจัดการข้อมูลที่อยู่ผู้ส่ง</h2>
    <!--login modal-->
    <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="<?= site_url('shop/address_logistic'); ?>">X</a>
                    <h1 class="text-center">ผู้ส่ง</h1>
                </div>
                <div class="modal-body">
                <?php
                     echo form_open('shop/creat_address');
            
                     echo form_label('ชื่อผู้ส่ง'); 
                     echo form_input(array('class'=>'form-control input-lg','name'=>'name')); 
                     echo "<br/>"; 
                     
                     echo form_label('เบอร์โทร'); 
                     echo form_input(array('class'=>'form-control input-lg','name'=>'phone_number')); 
                     echo "<br/>"; 

                     echo form_label('ที่อยู่'); 
                     echo form_input(array('class'=>'form-control input-lg','name'=>'address')); 
                     echo "<br/>";

                     echo form_label('รหัสไปรษณี'); 
                     echo form_input(array('class'=>'form-control input-lg','name'=>'postal_code')); 
                     echo "<br/>";

                     echo form_submit(array('id'=>'submit','value'=>'บันทึก','class'=>'btn btn-success'));
                     echo form_close(); 
                ?>




<!-- 
                    <form action="<?= site_url('shop/creat_address'); ?>" method="POST" class="form col-md-12 center-block">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" name="name" placeholder="ชื่อผู้ส่ง" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" name="phone_number" placeholder="เบอร์โทร" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" name="address" placeholder="ที่อยู่" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" name="postal_code" placeholder="รหัสไปรษณี" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="submit">บันทึก</button>
                        </div>
                    </form> -->
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <style>
        body {
            margin-top: 0px;
        }

        .modal-footer {
            border-top: 0px;
        }
    </style>

</section>