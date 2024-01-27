<?php

/******************************************************************************/
/******************************************************************************/

class CHBSTelegram
{
	/**************************************************************************/
	
	function __construct()
	{
		
	}
	
	/**************************************************************************/
	
	function sendMessage($token,$groupId,$message,$parseMode=null)
	{
		$argument=array();
		$requestData=array();
		
		$argument['chat_id']='-'.$groupId;
		$argument['text']=trim($message);
		
		if(!is_null($parseMode)) $argument['parse_mode']=$parseMode;
		
		$url=add_query_arg($argument,'https://api.telegram.org/bot'.$token.'/sendMessage');

		$ch=curl_init($url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
		$response=curl_exec($ch);
		
		$requestData['url']=$url;
		$requestData['curl_error_message']=curl_error($ch);
		
		$LogManager=new CHBSLogManager();
		
		$LogManager->add('telegram',1,print_r(json_decode($response),true));		
		$LogManager->add('telegram',2,$requestData);	
		
		curl_close($ch);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/