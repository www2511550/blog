


     <div class="box-moder hot-article" id="{$module.HtmlID}">
     {if (!$module.IsHideTitle)&&($module.Name)}
      <h3><b>{$module.Name}</b></h3>
        <span class="span-mark"></span>
     {else}
	 <div style="display:none;"></div>
	 {/if}
    
     {if $module.Type=='div'}
     <div>{$module.Content}</div>
     {/if}

     {if $module.Type=='ul'}
     <ul>{$module.Content}</ul>
     {/if}

    </div>
    <div class="placeholder"></div>
