<?php 
		echo $this->data['nonce']; 
?>	
		<div class="to">
			<div class="ui-tabs">
				<ul>
					<li><a href="#meta-box-vehicle-1"><?php esc_html_e('General','chauffeur-booking-system'); ?></a></li>
				</ul>
				<div id="meta-box-vehicle-1">
					<ul class="to-form-field-list">
						<?php echo CHBSHelper::createPostIdField(__('Booking extra ID','chauffeur-booking-system')); ?>
						<li>
							<h5><?php esc_html_e('Description','chauffeur-booking-system'); ?></h5>
							<span class="to-legend"><?php esc_html_e('Description of the additive.','chauffeur-booking-system'); ?></span>
							<div>
								<textarea rows="1" cols="1" name="<?php CHBSHelper::getFormName('description'); ?>" id="<?php CHBSHelper::getFormName('description'); ?>"><?php echo esc_html($this->data['meta']['description']); ?></textarea>
							</div>
						</li>
						<li>
							<h5><?php esc_html_e('"Read more" link','chauffeur-booking-system'); ?></h5>
							<span class="to-legend">
								<?php esc_html_e('Enter URL address of page (opened in a new window) on which customer can find more information about this add-on.','chauffeur-booking-system'); ?><br/>
								<?php esc_html_e('This link will be displayed in the end of booking add-on description.','chauffeur-booking-system'); ?>
							</span>
							<div>
								<input type="text" name="<?php CHBSHelper::getFormName('read_more_link_url_address'); ?>" id="<?php CHBSHelper::getFormName('read_more_link_url_address'); ?>" value="<?php echo esc_attr($this->data['meta']['read_more_link_url_address']); ?>"/>
							</div>
						</li> 
						<li>
							<h5><?php esc_html_e('Quantity','chauffeur-booking-system'); ?></h5>
							<span class="to-legend"><?php esc_html_e('Define whether an add-on can be ordered more then once.','chauffeur-booking-system'); ?></span>						
							<div class="to-radio-button">
<?php
			foreach($this->data['dictionary']['mandatory_type'] as $index=>$value)
			{
?>
								<input type="radio" value="<?php echo esc_attr($index); ?>" id="<?php CHBSHelper::getFormName('quantity_enable_'.$index); ?>" name="<?php CHBSHelper::getFormName('quantity_enable'); ?>" <?php CHBSHelper::checkedIf($this->data['meta']['quantity_enable'],$index); ?>/>
								<label for="<?php CHBSHelper::getFormName('quantity_enable_'.$index); ?>"><?php echo esc_html($value[0]); ?></label>
<?php
			}
?>
							</div>
						</li>
						<li>
							<h5><?php esc_html_e('Maximum number','chauffeur-booking-system'); ?></h5>
							<span class="to-legend"><?php esc_html_e('A maximum number possible to order. Integer value from 1 to 9999.','chauffeur-booking-system'); ?></span>						
							<div>
								<input type="text" name="<?php CHBSHelper::getFormName('quantity_max'); ?>" id="<?php CHBSHelper::getFormName('quantity_max'); ?>" value="<?php echo esc_attr($this->data['meta']['quantity_max']); ?>" maxlength="4"/>
							</div>
						</li>  
						<li>
							<h5><?php esc_html_e('Mandatory','chauffeur-booking-system'); ?></h5>
							<span class="to-legend"><?php esc_html_e('Define whether selecting of this add-on has to be mandatory.','chauffeur-booking-system'); ?></span>						
							<div class="to-radio-button">
								<input type="radio" value="1" id="<?php CHBSHelper::getFormName('mandatory_1'); ?>" name="<?php CHBSHelper::getFormName('mandatory'); ?>" <?php CHBSHelper::checkedIf($this->data['meta']['mandatory'],1); ?>/>
								<label for="<?php CHBSHelper::getFormName('mandatory_1'); ?>"><?php esc_html_e('Yes','chauffeur-booking-system'); ?></label>
								<input type="radio" value="0" id="<?php CHBSHelper::getFormName('mandatory_0'); ?>" name="<?php CHBSHelper::getFormName('mandatory'); ?>" <?php CHBSHelper::checkedIf($this->data['meta']['mandatory'],0); ?>/>
								<label for="<?php CHBSHelper::getFormName('mandatory_0'); ?>"><?php esc_html_e('No','chauffeur-booking-system'); ?></label>
							</div>
						</li>			
						<li>
							<h5><?php esc_html_e('Price','chauffeur-booking-system'); ?></h5>
							<span class="to-legend"><?php esc_html_e('Price per single addition or passenger quantity.','chauffeur-booking-system'); ?></span>
							<div>
								<input type="text" name="<?php CHBSHelper::getFormName('price'); ?>" id="<?php CHBSHelper::getFormName('price'); ?>" value="<?php echo esc_attr($this->data['meta']['price']); ?>"/>
							</div>
						</li>
						<li>
							<h5><?php esc_html_e('Tax rate','chauffeur-booking-system'); ?></h5>
							<span class="to-legend"><?php esc_html_e('Select tax rate for the price.','chauffeur-booking-system'); ?></span>
							<div class="to-radio-button">
								<input type="radio" value="0" id="<?php CHBSHelper::getFormName('tax_rate_id_0'); ?>" name="<?php CHBSHelper::getFormName('tax_rate_id'); ?>" <?php CHBSHelper::checkedIf($this->data['meta']['tax_rate_id'],0); ?>/>
								<label for="<?php CHBSHelper::getFormName('tax_rate_id_0'); ?>"><?php esc_html_e('- Not set -','chauffeur-booking-system'); ?></label>
<?php
		foreach($this->data['dictionary']['tax_rate'] as $index=>$value)
		{
?>
								<input type="radio" value="<?php echo esc_attr($index); ?>" id="<?php CHBSHelper::getFormName('tax_rate_id_'.$index); ?>" name="<?php CHBSHelper::getFormName('tax_rate_id'); ?>" <?php CHBSHelper::checkedIf($this->data['meta']['tax_rate_id'],$index); ?>/>
								<label for="<?php CHBSHelper::getFormName('tax_rate_id_'.$index); ?>"><?php echo esc_html($value['post']->post_title); ?></label>
<?php		
		}
?>
							</div>
						</li>						
						<li>
							<h5><?php esc_html_e('Service and transfer types','chauffeur-booking-system'); ?></h5>
							<span class="to-legend"><?php esc_html_e('Select for which service and transfer types this add-on has to be available.','chauffeur-booking-system'); ?></span>
							<div class="to-clear-fix">
								<span class="to-legend-field"><?php esc_html_e('Service type:','chauffeur-booking-system'); ?></span>
								<div class="to-checkbox-button">
<?php
		foreach($this->data['dictionary']['service_type'] as $index=>$value)
		{
?>
									<input type="checkbox" value="<?php echo esc_attr($index); ?>" id="<?php CHBSHelper::getFormName('service_type_id_enable_'.$index); ?>" name="<?php CHBSHelper::getFormName('service_type_id_enable[]'); ?>" <?php CHBSHelper::checkedIf($this->data['meta']['service_type_id_enable'],$index); ?>/>
									<label for="<?php CHBSHelper::getFormName('service_type_id_enable_'.$index); ?>"><?php echo esc_html($value[0]); ?></label>
<?php		
		}
?>
								</div>
							</div>
							<div class="to-clear-fix">
								<span class="to-legend-field"><?php esc_html_e('Transfer type:','chauffeur-booking-system'); ?></span>
								<div class="to-checkbox-button">
<?php
		foreach($this->data['dictionary']['transfer_type'] as $index=>$value)
		{
?>
									<input type="checkbox" value="<?php echo esc_attr($index); ?>" id="<?php CHBSHelper::getFormName('transfer_type_id_enable_'.$index); ?>" name="<?php CHBSHelper::getFormName('transfer_type_id_enable[]'); ?>" <?php CHBSHelper::checkedIf($this->data['meta']['transfer_type_id_enable'],$index); ?>/>
									<label for="<?php CHBSHelper::getFormName('transfer_type_id_enable_'.$index); ?>"><?php echo esc_html($value[0]); ?></label>
<?php		
		}
?>
								</div>
							</div>								
						</li>
						<li>
							<h5><?php esc_html_e('Vehicles','chauffeur-booking-system'); ?></h5>
							<span class="to-legend"><?php esc_html_e('Select vehicles which should be assigned to this add-on.','chauffeur-booking-system'); ?></span>
							<div class="to-checkbox-button">
								<input type="checkbox" value="-1" id="<?php CHBSHelper::getFormName('vehicle_id_0'); ?>" name="<?php CHBSHelper::getFormName('vehicle_id[]'); ?>" <?php CHBSHelper::checkedIf($this->data['meta']['vehicle_id'],-1); ?>/>
								<label for="<?php CHBSHelper::getFormName('vehicle_id_0'); ?>"><?php esc_html_e('- All vehicles -','chauffeur-booking-system') ?></label>
<?php
		foreach($this->data['dictionary']['vehicle'] as $index=>$value)
		{
?>
								<input type="checkbox" value="<?php echo esc_attr($index); ?>" id="<?php CHBSHelper::getFormName('vehicle_id_'.$index); ?>" name="<?php CHBSHelper::getFormName('vehicle_id[]'); ?>" <?php CHBSHelper::checkedIf($this->data['meta']['vehicle_id'],$index); ?>/>
								<label for="<?php CHBSHelper::getFormName('vehicle_id_'.$index); ?>"><?php echo esc_html($value['post']->post_title); ?></label>
<?php		
		}
?>
							</div>								
						</li> 
					</ul>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{	
				$('.to').themeOptionElement({init:true});
				
				toPreventCheckbox($('input[name="<?php CHBSHelper::getFormName('vehicle_id'); ?>[]"]'));
			});
		</script>