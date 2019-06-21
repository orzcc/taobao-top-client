<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.user.topics.get request
 * 
 * @author auto create
 * @since 1.0, 2018.12.22
 */
class TmcUserTopicsGetRequest
{
	/** 
	 * 卖家nick
	 **/
	private $nick;
	
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

	public function getApiMethodName()
	{
		return "taobao.tmc.user.topics.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
