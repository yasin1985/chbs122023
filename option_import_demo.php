		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Import demo','chauffeur-booking-system'); ?></h5>
				<span class="to-legend">
<?php
		if(CHBSPlugin::isAutoRideTheme())
		{
			esc_html_e('Import demo for the plugin is not available, because your are using "AutoRide" theme.','chauffeur-booking-system'); 
			echo '<br>';
			esc_html_e('You should use "Theme Demo Data Installer" to install entire dummy content.','chauffeur-booking-system'); 
		}
		else
		{
			esc_html_e('To import demo content, click on below button.','chauffeur-booking-system'); 
			echo '<br>';
			esc_html_e('You should run this function only once (the same content will be created when you run it once again).','chauffeur-booking-system');
			echo '<br>';
			esc_html_e('This operation takes a few minutes. This operation is not reversible.','chauffeur-booking-system'); 
		}
?>
				</span>
<?php
		if(!CHBSPlugin::isAutoRideTheme())
		{
?>
				<input type="button" name="<?php CHBSHelper::getFormName('import_dummy_content'); ?>" id="<?php CHBSHelper::getFormName('import_dummy_content'); ?>" class="to-button to-margin-0" value="<?php esc_attr_e('Import','chauffeur-booking-system'); ?>"/>
<?php
		}
?>
			</li>
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				$('#<?php CHBSHelper::getFormName('import_dummy_content'); ?>').bind('click',function(e) 
				{
					e.preventDefault();
					$('#action').val('<?php echo PLUGIN_CHBS_CONTEXT.'_option_page_import_demo'; ?>');
					$('#to_form').submit();
					$('#action').val('<?php echo PLUGIN_CHBS_CONTEXT.'_option_page_save'; ?>');
				});
			});
		</script>