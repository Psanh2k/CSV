<?php if (isset($data['result'])) { ?>
    <h1 style="text-align: center;">
        <?php
        if ($data['result']) {
            echo "Update Thanh Cong";
        } else {
            echo "Update That Bai";
        }
        ?></h1>
<?php } ?>
<div style="text-align: center;" class="div">
    <a class="btn_href" href="../../UserManagement">ListUser</a>
</div>