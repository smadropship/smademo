<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<section class="page-contents">
    <center>
        <div class="card-body">
            <h2>รายการพัสดุ</h2>
            <br>
            <a href="<?= site_url('shop/addlist_address'); ?>" class="btn btn-primary">สร้างรายการ</a>
            <table class="table table-striped" style="width:70%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ชื่อผู้รับ</th>
                        <th>ที่อยู่ผู้รับ</th>
                        <th>เบอร์โทรผู้รับ</th>
                        <th>รหัสไปรษณี</th>
                        <th>ขนส่ง</th>
                        <th>ราคา</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($send_logistics as $send_logistic) {
                        echo "<tr>";
                        echo "<td>" . $send_logistic->id . "</td>";
                        echo "<td>" . $send_logistic->name_receiver . "</td>";
                        echo "<td>" . $send_logistic->phone_number_receiver . "</td>";
                        echo "<td>" . $send_logistic->address_receiver . "</td>";
                        echo "<td>" . $send_logistic->postal_code_receiver . "</td>";
                        echo "<td>" . $send_logistic->logistic_method . "</td>";
                        echo "<td>" . $send_logistic->price . " บาท</td>";
                        // echo "<td><a href='" . base_url() . "index.php/customer/edit_customer_form/" . $r->id . "' class='btn btn-primary'>Edit</a></td>";
                        // echo "<td><a href='" . base_url() . "shop/delete_receiver/" . $r->id . "' onclick='return confirm(\"Confirm Delete Item\")' class='btn btn-danger'>Delete</a></td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </center>
</section>
<style>
    .timeline {
        list-style-type: none;
        position: relative
    }

    .timeline:before {
        background: #dee2e6;
        left: 9px;
        width: 2px;
        height: 100%
    }

    .timeline-item:before,
    .timeline:before {
        content: " ";
        display: inline-block;
        position: absolute;
        z-index: 1
    }

    .timeline-item:before {
        background: #fff;
        border-radius: 50%;
        border: 3px solid #3b7ddd;
        left: 0;
        width: 20px;
        height: 20px
    }

    .card {
        margin-bottom: 24px;
        box-shadow: 0 0 0.875rem 0 rgba(33, 37, 41, .05);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: initial;
        border: 0 solid transparent;
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .card-header:first-child {
        border-radius: .25rem .25rem 0 0;
    }

    .card-header {
        border-bottom-width: 1px;
    }

    .pb-0 {
        padding-bottom: 0 !important;
    }

    .card-header {
        padding: 1rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 0 solid transparent;
    }
</style>