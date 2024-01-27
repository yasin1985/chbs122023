<?php
		$Date=new CHBSDate();
		$Length=new CHBSLength();
		$Validation=new CHBSValidation();
?>		
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">

			<head>
<?php
		if(is_rtl())
		{
?>
				<style type="text/css">
					body { direction:rtl; }
				</style>
<?php		
		}
?>
			</head>

			<body>

				<table cellspacing="0" cellpadding="0" width="100%" bgcolor="#EEEEEE"<?php echo $this->data['style']['base']; ?>>
					
					<tr height="50px"><td <?php echo $this->data['style']['cell'][3]; ?>></td></tr>
					
					<tr>
						
						<td <?php echo $this->data['style']['cell'][3]; ?>>
							
							<table cellspacing="0" cellpadding="0" width="600px" border="0" align="center" bgcolor="#FFFFFF" style="border:solid 1px #E1E8ED;padding:50px">
							
								<!-- -->
<?php
		$logo=CHBSOption::getOption('logo');
		if($Validation->isNotEmpty($logo))
		{
?>
								<tr>
									<td <?php echo $this->data['style']['cell'][3]; ?>>
										<img style="max-width:100%;height:auto;" src="<?php echo esc_attr($logo); ?>" alt=""/>
										<br/><br/>
									</td>
								</tr>						   
<?php
		}
?>
								<!-- -->
								
								<tr>
									<td <?php echo $this->data['style']['header']; ?>><?php esc_html_e('Booking details','chauffeur-booking-system'); ?></td>
								</tr>
								<tr><td <?php echo $this->data['style']['separator'][3]; ?>></td></tr>
								<tr>
									<td <?php echo $this->data['style']['cell'][3]; ?>>
										<table cellspacing="0" cellpadding="0">
											<tr>
												<td <?php echo $this->data['style']['cell'][1]; ?>><?php esc_html_e('Booking ID','chauffeur-booking-system'); ?></td>
												<td <?php echo $this->data['style']['cell'][2]; ?>><?php echo $this->data['booking']['post']->ID; ?></td>
											</tr>
											<tr>
												<td <?php echo $this->data['style']['cell'][1]; ?>><?php esc_html_e('Pickup date and time','chauffeur-booking-system'); ?></td>
												<td <?php echo $this->data['style']['cell'][2]; ?>><?php echo esc_html($Date->formatDateToDisplay($this->data['booking']['meta']['pickup_date']).' '.$Date->formatTimeToDisplay($this->data['booking']['meta']['pickup_time'])); ?></td>
											</tr>	
<?php		  
		if(in_array($this->data['booking']['meta']['service_type_id'],array(1,3)))
		{
?>
											<tr>
												<td <?php echo $this->data['style']['cell'][1]; ?>><?php esc_html_e('Distance','chauffeur-booking-system'); ?></td>
												<td <?php echo $this->data['style']['cell'][2]; ?>>
													<?php echo $this->data['booking']['billing']['summary']['distance']; ?>
													<?php echo $Length->getUnitShortName($this->data['booking']['meta']['length_unit']); ?>
												</td>
											</tr>
<?php
		}
?>
											<tr>
												<td <?php echo $this->data['style']['cell'][1]; ?>><?php esc_html_e('Duration','chauffeur-booking-system'); ?></td>
												<td <?php echo $this->data['style']['cell'][2]; ?>>
													<?php echo esc_html($this->data['booking']['billing']['summary']['duration']);  ?>
												</td>
											</tr>	
										</table>
									</td>
								</tr>
											
								<!-- -->
<?php
		if(((int)$this->data['booking']['meta']['service_type_id']===3) || (((int)$this->data['booking']['meta']['service_type_id']===3) && ((int)$this->data['booking']['meta']['extra_time_enable']===1)))
		{
?>											
								<tr><td <?php echo $this->data['style']['separator'][2]; ?>></td></tr>
								<tr>
									<td <?php echo $this->data['style']['header']; ?>><?php esc_html_e('Route','chauffeur-booking-system'); ?></td>
								</tr>
								<tr><td <?php echo $this->data['style']['separator'][3]; ?>></td></tr>
								<tr>
									<td <?php echo $this->data['style']['cell'][3]; ?>>
										<table cellspacing="0" cellpadding="0">
<?php
			if((int)$this->data['booking']['meta']['service_type_id']===3)
			{
?>
											<tr>
												<td <?php echo $this->data['style']['cell'][1]; ?>><?php esc_html_e('Route name','chauffeur-booking-system'); ?></td>
												<td <?php echo $this->data['style']['cell'][2]; ?>><?php echo esc_html($this->data['booking']['meta']['route_name']); ?></td>
											</tr>
<?php
			}

			if(in_array($this->data['booking']['meta']['service_type_id'],array(1,3)))
			{
				if((int)$this->data['booking']['meta']['extra_time_enable']===1)
				{
?>
											
											<tr>
												<td <?php echo $this->data['style']['cell'][1]; ?>><?php esc_html_e('Extra time','chauffeur-booking-system'); ?></td>
												<td <?php echo $this->data['style']['cell'][2]; ?>><?php echo esc_html($Date->formatMinuteToTime($this->data['booking']['meta']['extra_time_value'])); ?></td>
											</tr>											
<?php
				}
			}
?>
										</table>
									</td>
								</tr>
<?php
		}
?>
								<!-- -->			
											
								<tr><td <?php echo $this->data['style']['separator'][2]; ?>></td></tr>
								<tr>
									<td <?php echo $this->data['style']['header']; ?>><?php esc_html_e('Route locations','chauffeur-booking-system'); ?></td>
								</tr>
								<tr><td <?php echo $this->data['style']['separator'][3]; ?>></td></tr>
								<tr>
									<td <?php echo $this->data['style']['cell'][3]; ?>>
										<table cellspacing="0" cellpadding="0">
											<tr>
												<td <?php echo $this->data['style']['cell'][3]; ?>>
													<ol <?php echo $this->data['style']['list'][1]; ?>>
<?php
		foreach($this->data['booking']['meta']['coordinate'] as $index=>$value)
		{
?>
														<li <?php echo $this->data['style']['list'][2]; ?>><a href="https://www.google.com/maps/?q=<?php echo esc_attr($value['lat']).','.esc_attr($value['lng']); ?>" target="_blank"><?php echo esc_html(CHBSHelper::getAddress($value)); ?></a></li>
<?php
		}
?>
													</ol>
												</td>
											</tr>   
										</table>
									</td>
								</tr>
											
								<!-- -->
											
								<tr><td <?php echo $this->data['style']['separator'][2]; ?>></td></tr>
								<tr>
									<td <?php echo $this->data['style']['header']; ?>><?php esc_html_e('Vehicle','chauffeur-booking-system'); ?></td>
								</tr>
								<tr><td <?php echo $this->data['style']['separator'][3]; ?>></td></tr>
								<tr>
									<td <?php echo $this->data['style']['cell'][3]; ?>>
										<table cellspacing="0" cellpadding="0">
											<tr>
												<td <?php echo $this->data['style']['cell'][1]; ?>><?php esc_html_e('Vehicle name','chauffeur-booking-system'); ?></td>
												<td <?php echo $this->data['style']['cell'][2]; ?>><?php echo esc_html($this->data['booking']['meta']['vehicle_name']); ?></td>
											</tr>
<?php
		if(array_key_exists('vehicle_bag_count',$this->data['booking']))
		{
?>
											<tr>
												<td <?php echo $this->data['style']['cell'][1]; ?>><?php esc_html_e('Bag count','chauffeur-booking-system'); ?></td>
												<td <?php echo $this->data['style']['cell'][2]; ?>><?php echo esc_html($this->data['booking']['vehicle_bag_count']); ?></td>
											</tr>
<?php
		}
		if(array_key_exists('vehicle_passenger_count',$this->data['booking']))
		{		
?>
											<tr>
												<td <?php echo $this->data['style']['cell'][1]; ?>><?php esc_html_e('Passengers count','chauffeur-booking-system'); ?></td>
												<td <?php echo $this->data['style']['cell'][2]; ?>><?php echo esc_html($this->data['booking']['vehicle_passenger_count']); ?></td>
											</tr>
<?php
		}
?>
										</table>
									</td>
								</tr>
											
							</table>

						</td>

					</tr>
					
					<tr height="50px"><td <?php echo $this->data['style']['cell'][3]; ?>></td></tr>
		
				</table> 
<?php
		if((int)$this->data['document_header_exclude']!==1)
		{
?>
			</body>

		</html>
<?php
		}
		else echo '<br style="height:40px;">';