<?php
/**
 * [PHPFOX_HEADER]
 */

defined('PHPFOX') or exit('NO DICE!');

/**
 * 
 * 
 * @copyright		phpfoxclub.ir (c) 2014
 * @author  		amir christ
 * @package  		Module_staffblock
 * @version 		$Id: staffblock.html.php 2014-10-24 amir christ $
 */

?>

<link type="text/css" rel="stylesheet" href="{$sSiteUrl}module/staffblock/static/css/default/default/staffblock.css">
<script type="text/javascript" src='{$sSiteUrl}module/staffblock/static/jscript/staffblock.js'></script>

{if Phpfox::getLib('module')->getFullControllerName() != 'staffblock.index'}
	{if Phpfox::getParam('staffblock.is_module_active')}
		{if Phpfox::getParam('staffblock.is_actice_staff_info')}
			{if $aCountAdmins != 0}
<div style="background-color: #{$sAdminColor};" class="pfcstaffblock">
	<span style="float: left;">
		{phrase var='staffblock.user_admin'}
	</span>
	<span style="float: right;">
		{$aCountAdmins}&nbsp;{phrase var='staffblock.admin_count'}
	</span>
</div>
	{if !Phpfox::getParam('staffblock.auto_resize') || $aCountAdmins < $aResizeCount}
<div class="staffblock_images">
<ul>
	{foreach from=$aUserImages name=adminusers item=aUserImage}
		<li>{img user=$aUserImage suffix='_50_square' max_width=$aMaxWidth max_height=$aMaxWidth}</li>
	{/foreach}
</ul>
</div>
{else}
<div class="staffblock_images">
<ul>
	{foreach from=$aUserImages name=adminusers item=aUserImage}
		<li>{img user=$aUserImage suffix='_50_square' max_width=$aMinWidth max_height=$aMinWidth}</li>
	{/foreach}
</ul>
</div>
	{/if}
<div class="separate"></div>
			{/if}
	{/if}
{/if}
