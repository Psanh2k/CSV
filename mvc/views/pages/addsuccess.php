<?php if (isset($data['result'])) { ?>
    <h1 style="text-align: center;"><?php
                                    if ($data['result']) {
                                        echo
                                        "Dang Ky Thanh Cong";
                                    } else {
                                        echo "Dang Ky That Bai";
                                    }
                                    ?></h1>
<?php } ?>
<div style="text-align: center;" class="div">
    <a class="btn_href" href="../UserManagement">ListUser</a>
</div>