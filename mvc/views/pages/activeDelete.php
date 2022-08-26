<?php if (isset($data['rs'])) { ?>
    <h1 style="text-align: center;">
        <?php
        if ($data['rs']) {
            echo
            "Delete Thanh Cong";
        } else {
            echo "Delete That Bai";
        }
        ?>
    </h1>
<?php } ?>
<div style="text-align: center;" class="div">
    <a class="btn_href" href="../../UserManagement">ListUser</a>
</div>