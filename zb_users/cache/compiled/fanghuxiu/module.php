


     <div class="box-moder hot-article" id="<?php  echo $module->HtmlID;  ?>">
     <?php if ((!$module->IsHideTitle)&&($module->Name)) { ?>
      <h3><b><?php  echo $module->Name;  ?></b></h3>
        <span class="span-mark"></span>
     <?php }else{  ?>
	 <div style="display:none;"></div>
	 <?php } ?>
    
     <?php if ($module->Type=='div') { ?>
     <div><?php  echo $module->Content;  ?></div>
     <?php } ?>

     <?php if ($module->Type=='ul') { ?>
     <ul><?php  echo $module->Content;  ?></ul>
     <?php } ?>

    </div>
    <div class="placeholder"></div>
