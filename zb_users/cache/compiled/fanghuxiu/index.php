<?php  include $this->GetTemplate('header');  ?>
<?php if ($type=="index") { ?>
    <?php  include $this->GetTemplate('q_index');  ?>
<?php }else{  ?>
    <?php  include $this->GetTemplate('q_list');  ?>
<?php } ?>
<?php  include $this->GetTemplate('footer');  ?>