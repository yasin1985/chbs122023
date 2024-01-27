<?php

/******************************************************************************/
/******************************************************************************/

class CHBSSocialProfile
{
	/**************************************************************************/
	
	function __construct()
	{		
		$this->socialProfile=array
		(
			'angies-list'=>array('Angies list','angies-list','',''),
			'behance'=>array('Behance','behance','',''),
			'deviantart'=>array('Deviantart','deviantart','',''),
			'dribbble'=>array('Dribbble','dribbble','',''),
			'envato'=>array('Envato','envato','',''),
			'facebook'=>array('Facebook','facebook','https://www.facebook.com/QuanticaLabs/','2'),
			'flickr'=>array('Flickr','flickr','',''),
			'foursquare'=>array('Foursquare','foursquare','',''),
			'github'=>array('Github','github','',''),
			'google-plus'=>array('Google+','google-plus','',''),
			'houzz'=>array('Houzz','houzz','',''),
			'instagram'=>array('Instagram','instagram','',''),
			'linkedin'=>array('Linkedin','linkedin','',''),
			'paypal'=>array('Paypal','paypal','',''),
			'pinterest'=>array('Pinterest','pinterest','http://pinterest.com/quanticalabs','3'),
			'reddit'=>array('Reddit','reddit','',''),
			'rss'=>array('RSS','rss','',''),
			'skype'=>array('Skype','skype','',''),
			'soundcloud'=>array('Soundcloud','soundcloud','',''),
			'spotify'=>array('Spotify','spotify','',''),
			'stumbleupon'=>array('Stumbleupon','stumbleupon','',''),
			'tumblr'=>array('Tumblr','tumblr','',''),
			'twitter'=>array('Twitter','twitter','https://twitter.com/quanticalabs','1'),
			'vimeo'=>array('Vimeo','vimeo','',''),
			'vine'=>array('Vine','vine','',''),
			'vk'=>array('VK','vk','',''),
			'weibo'=>array('Weibo','weibo','',''),
			'xing'=>array('Xing','xing','',''),
			'yelp'=>array('Yelp','yelp','',''),
			'youtube'=>array('Youtube','youtube','','')
		);	
	}
	
	/**************************************************************************/
	
	function getSocialProfile()
	{
		return($this->socialProfile);
	}
	
	/**************************************************************************/
	
	function isSocialProfile($index)
	{
		return(array_key_exists($index,$this->getSocialProfile()) ? true : false);
	}
		
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/