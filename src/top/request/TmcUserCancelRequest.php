<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.user.cancel request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
use TopClient\RequestCheckUtil;
class TmcUserCancelRequest
{
	/** 
	 * 用户昵称
	 **/
	private $nick;
	
	/** 
	 * 用户所属的平台类型，tbUIC:淘宝用户; icbu: icbu用户;ae:ae用户
	 **/
	private $userPlatform;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setUserPlatform($userPlatform)
	{
		$this->userPlatform = $userPlatform;
		$this->apiParas["user_platform"] = $userPlatform;
	}

	public function getUserPlatform()
	{
		return $this->userPlatform;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.user.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
