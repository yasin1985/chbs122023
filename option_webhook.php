
		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('After sent booking webhook','chauffeur-booking-system'); ?></h5>
				<span class="to-legend">
					<?php esc_html_e('Enable this webhook, if you want to send all order details under defined URL address after submit the booking by the customer.','chauffeur-booking-system'); ?><br/>
				</span>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php esc_html_e('Status:','chauffeur-booking-system'); ?></span>
					<div class="to-radio-button">
						<input type="radio" value="1" id="<?php CHBSHelper::getFormName('webhook_after_sent_booking_enable_1'); ?>" name="<?php CHBSHelper::getFormName('webhook_after_sent_booking_enable'); ?>" <?php CHBSHelper::checkedIf($this->data['option']['webhook_after_sent_booking_enable'],1); ?>/>
						<label for="<?php CHBSHelper::getFormName('webhook_after_sent_booking_enable_1'); ?>"><?php esc_html_e('Enable','chauffeur-booking-system'); ?></label>
						<input type="radio" value="0" id="<?php CHBSHelper::getFormName('webhook_after_sent_booking_enable_0'); ?>" name="<?php CHBSHelper::getFormName('webhook_after_sent_booking_enable'); ?>" <?php CHBSHelper::checkedIf($this->data['option']['webhook_after_sent_booking_enable'],0); ?>/>
						<label for="<?php CHBSHelper::getFormName('webhook_after_sent_booking_enable_0'); ?>"><?php esc_html_e('Disable','chauffeur-booking-system'); ?></label>
					</div>
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php esc_html_e('URL address:','chauffeur-booking-system'); ?></span>
					<div>
						<input type="text" name="<?php CHBSHelper::getFormName('webhook_after_sent_booking_url_address'); ?>" id="<?php CHBSHelper::getFormName('webhook_after_sent_booking_url_address'); ?>" value="<?php echo esc_attr($this->data['option']['webhook_after_sent_booking_url_address']); ?>"/>
					</div>
				</div>
			</li>   			
		</ul>