<?php

/******************************************************************************/
/******************************************************************************/

class CHBSCountry
{
	/**************************************************************************/

	function __construct()
	{
		$this->country=CHBSGlobalData::setGlobalData('country',array($this,'init'));
	}
	
	/**************************************************************************/

	function init()
	{
		$country=array
		(
			'AF'=>array(__('Afghanistan','chauffeur-booking-system')),
			'AX'=>array(__('Aland Islands','chauffeur-booking-system')),
			'AL'=>array(__('Albania','chauffeur-booking-system')),
			'DZ'=>array(__('Algeria','chauffeur-booking-system')),
			'AS'=>array(__('American Samoa','chauffeur-booking-system')),
			'AD'=>array(__('Andorra','chauffeur-booking-system')),
			'AO'=>array(__('Angola','chauffeur-booking-system')),
			'AI'=>array(__('Anguilla','chauffeur-booking-system')),
			'AQ'=>array(__('Antarctica','chauffeur-booking-system')),
			'AG'=>array(__('Antigua And Barbuda','chauffeur-booking-system')),
			'AR'=>array(__('Argentina','chauffeur-booking-system')),
			'AM'=>array(__('Armenia','chauffeur-booking-system')),
			'AW'=>array(__('Aruba','chauffeur-booking-system')),
			'AU'=>array(__('Australia','chauffeur-booking-system')),
			'AT'=>array(__('Austria','chauffeur-booking-system')),
			'AZ'=>array(__('Azerbaijan','chauffeur-booking-system')),
			'BS'=>array(__('Bahamas','chauffeur-booking-system')),
			'BH'=>array(__('Bahrain','chauffeur-booking-system')),
			'BD'=>array(__('Bangladesh','chauffeur-booking-system')),
			'BB'=>array(__('Barbados','chauffeur-booking-system')),
			'BY'=>array(__('Belarus','chauffeur-booking-system')),
			'BE'=>array(__('Belgium','chauffeur-booking-system')),
			'BZ'=>array(__('Belize','chauffeur-booking-system')),
			'BJ'=>array(__('Benin','chauffeur-booking-system')),
			'BM'=>array(__('Bermuda','chauffeur-booking-system')),
			'BT'=>array(__('Bhutan','chauffeur-booking-system')),
			'BO'=>array(__('Bolivia','chauffeur-booking-system')),
			'BA'=>array(__('Bosnia And Herzegovina','chauffeur-booking-system')),
			'BW'=>array(__('Botswana','chauffeur-booking-system')),
			'BV'=>array(__('Bouvet Island','chauffeur-booking-system')),
			'BR'=>array(__('Brazil','chauffeur-booking-system')),
			'IO'=>array(__('British Indian Ocean Territory','chauffeur-booking-system')),
			'BN'=>array(__('Brunei Darussalam','chauffeur-booking-system')),
			'BG'=>array(__('Bulgaria','chauffeur-booking-system')),
			'BF'=>array(__('Burkina Faso','chauffeur-booking-system')),
			'BI'=>array(__('Burundi','chauffeur-booking-system')),
			'KH'=>array(__('Cambodia','chauffeur-booking-system')),
			'CM'=>array(__('Cameroon','chauffeur-booking-system')),
			'CA'=>array(__('Canada','chauffeur-booking-system')),
			'CV'=>array(__('Cape Verde','chauffeur-booking-system')),
			'KY'=>array(__('Cayman Islands','chauffeur-booking-system')),
			'CF'=>array(__('Central African Republic','chauffeur-booking-system')),
			'TD'=>array(__('Chad','chauffeur-booking-system')),
			'CL'=>array(__('Chile','chauffeur-booking-system')),
			'CN'=>array(__('China','chauffeur-booking-system')),
			'CX'=>array(__('Christmas Island','chauffeur-booking-system')),
			'CC'=>array(__('Cocos (Keeling) Islands','chauffeur-booking-system')),
			'CO'=>array(__('Colombia','chauffeur-booking-system')),
			'KM'=>array(__('Comoros','chauffeur-booking-system')),
			'CG'=>array(__('Congo','chauffeur-booking-system')),
			'CD'=>array(__('Congo, Democratic Republic','chauffeur-booking-system')),
			'CK'=>array(__('Cook Islands','chauffeur-booking-system')),
			'CR'=>array(__('Costa Rica','chauffeur-booking-system')),
			'CI'=>array(__('Cote D\'Ivoire','chauffeur-booking-system')),
			'HR'=>array(__('Croatia','chauffeur-booking-system')),
			'CU'=>array(__('Cuba','chauffeur-booking-system')),
			'CW'=>array(__('Curaçao','chauffeur-booking-system')),
			'CY'=>array(__('Cyprus','chauffeur-booking-system')),
			'CZ'=>array(__('Czech Republic','chauffeur-booking-system')),
			'DK'=>array(__('Denmark','chauffeur-booking-system')),
			'DJ'=>array(__('Djibouti','chauffeur-booking-system')),
			'DM'=>array(__('Dominica','chauffeur-booking-system')),
			'DO'=>array(__('Dominican Republic','chauffeur-booking-system')),
			'EC'=>array(__('Ecuador','chauffeur-booking-system')),
			'EG'=>array(__('Egypt','chauffeur-booking-system')),
			'SV'=>array(__('El Salvador','chauffeur-booking-system')),
			'GQ'=>array(__('Equatorial Guinea','chauffeur-booking-system')),
			'ER'=>array(__('Eritrea','chauffeur-booking-system')),
			'EE'=>array(__('Estonia','chauffeur-booking-system')),
			'ET'=>array(__('Ethiopia','chauffeur-booking-system')),
			'FK'=>array(__('Falkland Islands (Malvinas)','chauffeur-booking-system')),
			'FO'=>array(__('Faroe Islands','chauffeur-booking-system')),
			'FJ'=>array(__('Fiji','chauffeur-booking-system')),
			'FI'=>array(__('Finland','chauffeur-booking-system')),
			'FR'=>array(__('France','chauffeur-booking-system')),
			'GF'=>array(__('French Guiana','chauffeur-booking-system')),
			'PF'=>array(__('French Polynesia','chauffeur-booking-system')),
			'TF'=>array(__('French Southern Territories','chauffeur-booking-system')),
			'GA'=>array(__('Gabon','chauffeur-booking-system')),
			'GM'=>array(__('Gambia','chauffeur-booking-system')),
			'GE'=>array(__('Georgia','chauffeur-booking-system')),
			'DE'=>array(__('Germany','chauffeur-booking-system')),
			'GH'=>array(__('Ghana','chauffeur-booking-system')),
			'GI'=>array(__('Gibraltar','chauffeur-booking-system')),
			'GR'=>array(__('Greece','chauffeur-booking-system')),
			'GL'=>array(__('Greenland','chauffeur-booking-system')),
			'GD'=>array(__('Grenada','chauffeur-booking-system')),
			'GP'=>array(__('Guadeloupe','chauffeur-booking-system')),
			'GU'=>array(__('Guam','chauffeur-booking-system')),
			'GT'=>array(__('Guatemala','chauffeur-booking-system')),
			'GG'=>array(__('Guernsey','chauffeur-booking-system')),
			'GN'=>array(__('Guinea','chauffeur-booking-system')),
			'GW'=>array(__('Guinea-Bissau','chauffeur-booking-system')),
			'GY'=>array(__('Guyana','chauffeur-booking-system')),
			'HT'=>array(__('Haiti','chauffeur-booking-system')),
			'HM'=>array(__('Heard Island & Mcdonald Islands','chauffeur-booking-system')),
			'VA'=>array(__('Holy See (Vatican City State)','chauffeur-booking-system')),
			'HN'=>array(__('Honduras','chauffeur-booking-system')),
			'HK'=>array(__('Hong Kong','chauffeur-booking-system')),
			'HU'=>array(__('Hungary','chauffeur-booking-system')),
			'IS'=>array(__('Iceland','chauffeur-booking-system')),
			'IN'=>array(__('India','chauffeur-booking-system')),
			'ID'=>array(__('Indonesia','chauffeur-booking-system')),
			'IR'=>array(__('Iran, Islamic Republic Of','chauffeur-booking-system')),
			'IQ'=>array(__('Iraq','chauffeur-booking-system')),
			'IE'=>array(__('Ireland','chauffeur-booking-system')),
			'IM'=>array(__('Isle Of Man','chauffeur-booking-system')),
			'IL'=>array(__('Israel','chauffeur-booking-system')),
			'IT'=>array(__('Italy','chauffeur-booking-system')),
			'JM'=>array(__('Jamaica','chauffeur-booking-system')),
			'JP'=>array(__('Japan','chauffeur-booking-system')),
			'JE'=>array(__('Jersey','chauffeur-booking-system')),
			'JO'=>array(__('Jordan','chauffeur-booking-system')),
			'KZ'=>array(__('Kazakhstan','chauffeur-booking-system')),
			'KE'=>array(__('Kenya','chauffeur-booking-system')),
			'KI'=>array(__('Kiribati','chauffeur-booking-system')),
			'KR'=>array(__('Korea','chauffeur-booking-system')),
			'KW'=>array(__('Kuwait','chauffeur-booking-system')),
			'KG'=>array(__('Kyrgyzstan','chauffeur-booking-system')),
			'LA'=>array(__('Lao People\'s Democratic Republic','chauffeur-booking-system')),
			'LV'=>array(__('Latvia','chauffeur-booking-system')),
			'LB'=>array(__('Lebanon','chauffeur-booking-system')),
			'LS'=>array(__('Lesotho','chauffeur-booking-system')),
			'LR'=>array(__('Liberia','chauffeur-booking-system')),
			'LY'=>array(__('Libyan Arab Jamahiriya','chauffeur-booking-system')),
			'LI'=>array(__('Liechtenstein','chauffeur-booking-system')),
			'LT'=>array(__('Lithuania','chauffeur-booking-system')),
			'LU'=>array(__('Luxembourg','chauffeur-booking-system')),
			'MO'=>array(__('Macao','chauffeur-booking-system')),
			'MK'=>array(__('Macedonia','chauffeur-booking-system')),
			'MG'=>array(__('Madagascar','chauffeur-booking-system')),
			'MW'=>array(__('Malawi','chauffeur-booking-system')),
			'MY'=>array(__('Malaysia','chauffeur-booking-system')),
			'MV'=>array(__('Maldives','chauffeur-booking-system')),
			'ML'=>array(__('Mali','chauffeur-booking-system')),
			'MT'=>array(__('Malta','chauffeur-booking-system')),
			'MH'=>array(__('Marshall Islands','chauffeur-booking-system')),
			'MQ'=>array(__('Martinique','chauffeur-booking-system')),
			'MR'=>array(__('Mauritania','chauffeur-booking-system')),
			'MU'=>array(__('Mauritius','chauffeur-booking-system')),
			'YT'=>array(__('Mayotte','chauffeur-booking-system')),
			'MX'=>array(__('Mexico','chauffeur-booking-system')),
			'FM'=>array(__('Micronesia, Federated States Of','chauffeur-booking-system')),
			'MD'=>array(__('Moldova','chauffeur-booking-system')),
			'MC'=>array(__('Monaco','chauffeur-booking-system')),
			'MN'=>array(__('Mongolia','chauffeur-booking-system')),
			'ME'=>array(__('Montenegro','chauffeur-booking-system')),
			'MS'=>array(__('Montserrat','chauffeur-booking-system')),
			'MA'=>array(__('Morocco','chauffeur-booking-system')),
			'MZ'=>array(__('Mozambique','chauffeur-booking-system')),
			'MM'=>array(__('Myanmar','chauffeur-booking-system')),
			'NA'=>array(__('Namibia','chauffeur-booking-system')),
			'NR'=>array(__('Nauru','chauffeur-booking-system')),
			'NP'=>array(__('Nepal','chauffeur-booking-system')),
			'NL'=>array(__('Netherlands','chauffeur-booking-system')),
			'NC'=>array(__('New Caledonia','chauffeur-booking-system')),
			'NZ'=>array(__('New Zealand','chauffeur-booking-system')),
			'NI'=>array(__('Nicaragua','chauffeur-booking-system')),
			'NE'=>array(__('Niger','chauffeur-booking-system')),
			'NG'=>array(__('Nigeria','chauffeur-booking-system')),
			'NU'=>array(__('Niue','chauffeur-booking-system')),
			'NF'=>array(__('Norfolk Island','chauffeur-booking-system')),
			'MP'=>array(__('Northern Mariana Islands','chauffeur-booking-system')),
			'NO'=>array(__('Norway','chauffeur-booking-system')),
			'OM'=>array(__('Oman','chauffeur-booking-system')),
			'PK'=>array(__('Pakistan','chauffeur-booking-system')),
			'PW'=>array(__('Palau','chauffeur-booking-system')),
			'PS'=>array(__('Palestinian Territory, Occupied','chauffeur-booking-system')),
			'PA'=>array(__('Panama','chauffeur-booking-system')),
			'PG'=>array(__('Papua New Guinea','chauffeur-booking-system')),
			'PY'=>array(__('Paraguay','chauffeur-booking-system')),
			'PE'=>array(__('Peru','chauffeur-booking-system')),
			'PH'=>array(__('Philippines','chauffeur-booking-system')),
			'PN'=>array(__('Pitcairn','chauffeur-booking-system')),
			'PL'=>array(__('Poland','chauffeur-booking-system')),
			'PT'=>array(__('Portugal','chauffeur-booking-system')),
			'PR'=>array(__('Puerto Rico','chauffeur-booking-system')),
			'QA'=>array(__('Qatar','chauffeur-booking-system')),
			'RE'=>array(__('Reunion','chauffeur-booking-system')),
			'RO'=>array(__('Romania','chauffeur-booking-system')),
			'RU'=>array(__('Russian Federation','chauffeur-booking-system')),
			'RW'=>array(__('Rwanda','chauffeur-booking-system')),
			'BL'=>array(__('Saint Barthelemy','chauffeur-booking-system')),
			'SH'=>array(__('Saint Helena','chauffeur-booking-system')),
			'KN'=>array(__('Saint Kitts And Nevis','chauffeur-booking-system')),
			'LC'=>array(__('Saint Lucia','chauffeur-booking-system')),
			'MF'=>array(__('Saint Martin','chauffeur-booking-system')),
			'PM'=>array(__('Saint Pierre And Miquelon','chauffeur-booking-system')),
			'VC'=>array(__('Saint Vincent And Grenadines','chauffeur-booking-system')),
			'WS'=>array(__('Samoa','chauffeur-booking-system')),
			'SM'=>array(__('San Marino','chauffeur-booking-system')),
			'ST'=>array(__('Sao Tome And Principe','chauffeur-booking-system')),
			'SA'=>array(__('Saudi Arabia','chauffeur-booking-system')),
			'SN'=>array(__('Senegal','chauffeur-booking-system')),
			'RS'=>array(__('Serbia','chauffeur-booking-system')),
			'SC'=>array(__('Seychelles','chauffeur-booking-system')),
			'SL'=>array(__('Sierra Leone','chauffeur-booking-system')),
			'SG'=>array(__('Singapore','chauffeur-booking-system')),
			'SK'=>array(__('Slovakia','chauffeur-booking-system')),
			'SI'=>array(__('Slovenia','chauffeur-booking-system')),
			'SB'=>array(__('Solomon Islands','chauffeur-booking-system')),
			'SO'=>array(__('Somalia','chauffeur-booking-system')),
			'ZA'=>array(__('South Africa','chauffeur-booking-system')),
			'GS'=>array(__('South Georgia And Sandwich Isl.','chauffeur-booking-system')),
			'ES'=>array(__('Spain','chauffeur-booking-system')),
			'LK'=>array(__('Sri Lanka','chauffeur-booking-system')),
			'SD'=>array(__('Sudan','chauffeur-booking-system')),
			'SR'=>array(__('Suriname','chauffeur-booking-system')),
			'SJ'=>array(__('Svalbard And Jan Mayen','chauffeur-booking-system')),
			'SZ'=>array(__('Swaziland','chauffeur-booking-system')),
			'SE'=>array(__('Sweden','chauffeur-booking-system')),
			'CH'=>array(__('Switzerland','chauffeur-booking-system')),
			'SY'=>array(__('Syrian Arab Republic','chauffeur-booking-system')),
			'TW'=>array(__('Taiwan','chauffeur-booking-system')),
			'TJ'=>array(__('Tajikistan','chauffeur-booking-system')),
			'TZ'=>array(__('Tanzania','chauffeur-booking-system')),
			'TH'=>array(__('Thailand','chauffeur-booking-system')),
			'TL'=>array(__('Timor-Leste','chauffeur-booking-system')),
			'TG'=>array(__('Togo','chauffeur-booking-system')),
			'TK'=>array(__('Tokelau','chauffeur-booking-system')),
			'TO'=>array(__('Tonga','chauffeur-booking-system')),
			'TT'=>array(__('Trinidad And Tobago','chauffeur-booking-system')),
			'TN'=>array(__('Tunisia','chauffeur-booking-system')),
			'TR'=>array(__('Turkey','chauffeur-booking-system')),
			'TM'=>array(__('Turkmenistan','chauffeur-booking-system')),
			'TC'=>array(__('Turks And Caicos Islands','chauffeur-booking-system')),
			'TV'=>array(__('Tuvalu','chauffeur-booking-system')),
			'UG'=>array(__('Uganda','chauffeur-booking-system')),
			'UA'=>array(__('Ukraine','chauffeur-booking-system')),
			'AE'=>array(__('United Arab Emirates','chauffeur-booking-system')),
			'GB'=>array(__('United Kingdom','chauffeur-booking-system')),
			'US'=>array(__('United States','chauffeur-booking-system')),
			'UM'=>array(__('United States Outlying Islands','chauffeur-booking-system')),
			'UY'=>array(__('Uruguay','chauffeur-booking-system')),
			'UZ'=>array(__('Uzbekistan','chauffeur-booking-system')),
			'VU'=>array(__('Vanuatu','chauffeur-booking-system')),
			'VE'=>array(__('Venezuela','chauffeur-booking-system')),
			'VN'=>array(__('Viet Nam','chauffeur-booking-system')),
			'VG'=>array(__('Virgin Islands, British','chauffeur-booking-system')),
			'VI'=>array(__('Virgin Islands, U.S.','chauffeur-booking-system')),
			'WF'=>array(__('Wallis And Futuna','chauffeur-booking-system')),
			'EH'=>array(__('Western Sahara','chauffeur-booking-system')),
			'YE'=>array(__('Yemen','chauffeur-booking-system')),
			'ZM'=>array(__('Zambia','chauffeur-booking-system')),
			'ZW'=>array(__('Zimbabwe','chauffeur-booking-system'))
		); 
		
		return($country);
	}
	
	/**************************************************************************/
	
	function getCountry($country=null)
	{
		if(is_null($country)) return($this->country);
		else return($this->country[$country]);
	}
	
	/**************************************************************************/
	
	function isCountry($index)
	{
		return(array_key_exists($index,$this->country));
	}
	
	/**************************************************************************/
	
	function getCountryName($index)
	{
		return($this->country[$index][0]);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/