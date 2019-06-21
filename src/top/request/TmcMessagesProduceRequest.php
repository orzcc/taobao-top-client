<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.messages.produce request
 * 
 * @author auto create
 * @since 1.0, 2018.11.10
 */
use TopClient\RequestCheckUtil;
class TmcMessagesProduceRequest
{
	/** 
	 * tmc消息列表, 最多50条，元素结构与taobao.tmc.message.produce一致，用json表示的消息列表。例如：[{"content": "{\"tid\":1234554321,\"status\":\"X_LOGISTICS_PRINTED\",\"action_time\":\"2014-08-08 18:24:00\",\"seller_nick\": \"向阳aa\",\"operator\":\"小张\"}","topic": "taobao_jds_TradeTrace"},{"content": "{\"tid\":1234554321,\"status\":\"X_LOGISTICS_PRINTED\",\"action_time\":\"2014-08-08 18:24:00\",\"seller_nick\": \"向阳aa\",\"operator\":\"小张\"}","topic": "taobao_jds_TradeTrace"}]
	 **/
	private $messages;
	
	private $apiParas = array();
	
	public function setMessages($messages)
	{
		$this->messages = $messages;
		$this->apiParas["messages"] = $messages;
	}

	public function getMessages()
	{
		return $this->messages;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.messages.produce";
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
