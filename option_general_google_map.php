		
		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Google Maps API key','chauffeur-booking-system'); ?></h5>
				<span class="to-legend">
					<?php echo sprintf(__('You can generate your own key <a href="%s" target="_blank">here</a>.','chauffeur-booking-system'),'https://developers.google.com/maps/documentation/javascript/get-api-key'); ?><br/>
					<?php esc_html_e('You have to enable libraries: Places, Maps JavaScript, Roads, Geocoding, Directions.','chauffeur-booking-system'); ?>
				</span>
				<div class="to-clear-fix">
					<input type="text" name="<?php CHBSHelper::getFormName('google_map_api_key'); ?>" id="<?php CHBSHelper::getFormName('google_map_api_key'); ?>" value="<?php echo esc_attr($this->data['option']['google_map_api_key']); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Google Maps use','chauffeur-booking-system'); ?></h5>
				<span class="to-legend">
					<?php esc_html_e('Ask customer whether Google Maps library can be loaded. If not, the plugin stops work.','chauffeur-booking-system'); ?>
				</span>
				<div class="to-clear-fix">
					 <div class="to-radio-button">
						<input type="radio" value="1" id="<?php CHBSHelper::getFormName('google_map_ask_load_enable_1'); ?>" name="<?php CHBSHelper::getFormName('google_map_ask_load_enable'); ?>" <?php CHBSHelper::checkedIf($this->data['option']['google_map_ask_load_enable'],1); ?>/>
						<label for="<?php CHBSHelper::getFormName('google_map_ask_load_enable_1'); ?>"><?php esc_html_e('Enable','chauffeur-booking-system'); ?></label>
						<input type="radio" value="0" id="<?php CHBSHelper::getFormName('google_map_ask_load_enable_0'); ?>" name="<?php CHBSHelper::getFormName('google_map_ask_load_enable'); ?>" <?php CHBSHelper::checkedIf($this->data['option']['google_map_ask_load_enable'],0); ?>/>
						<label for="<?php CHBSHelper::getFormName('google_map_ask_load_enable_0'); ?>"><?php esc_html_e('Disable','chauffeur-booking-system'); ?></label>
					</div>
				</div>
			</li>			
			<li>
				<h5><?php esc_html_e('Remove duplicated Google Maps scripts','chauffeur-booking-system'); ?></h5>
				<span class="to-legend">
					<?php esc_html_e('Enable this option to remove Google Maps script from theme and other, included plugins.','chauffeur-booking-system'); ?><br/>
					<?php esc_html_e('This option allows to prevent errors related with including the same script more than once.','chauffeur-booking-system'); ?>
				</span>
				<div class="to-clear-fix">
					 <div class="to-radio-button">
						<input type="radio" value="1" id="<?php CHBSHelper::getFormName('google_map_duplicate_script_remove_1'); ?>" name="<?php CHBSHelper::getFormName('google_map_duplicate_script_remove'); ?>" <?php CHBSHelper::checkedIf($this->data['option']['google_map_duplicate_script_remove'],1); ?>/>
						<label for="<?php CHBSHelper::getFormName('google_map_duplicate_script_remove_1'); ?>"><?php esc_html_e('Enable (remove)','chauffeur-booking-system'); ?></label>
						<input type="radio" value="0" id="<?php CHBSHelper::getFormName('google_map_duplicate_script_remove_0'); ?>" name="<?php CHBSHelper::getFormName('google_map_duplicate_script_remove'); ?>" <?php CHBSHelper::checkedIf($this->data['option']['google_map_duplicate_script_remove'],0); ?>/>
						<label for="<?php CHBSHelper::getFormName('google_map_duplicate_script_remove_0'); ?>"><?php esc_html_e('Disable','chauffeur-booking-system'); ?></label>
					</div>
				</div>
			</li>	
		</ul>