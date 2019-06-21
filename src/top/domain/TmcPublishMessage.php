<?php
namespace TopClient\domain;

/**
 * tmc消息列表, 最多50条，元素结构与taobao.tmc.message.produce一致，用json表示的消息列表。例如：[{"content": "{\"tid\":1234554321,\"status\":\"X_LOGISTICS_PRINTED\",\"action_time\":\"2014-08-08 18:24:00\",\"seller_nick\": \"向阳aa\",\"operator\":\"小张\"}","topic": "taobao_jds_TradeTrace"},{"content": "{\"tid\":1234554321,\"status\":\"X_LOGISTICS_PRINTED\",\"action_time\":\"2014-08-08 18:24:00\",\"seller_nick\": \"向阳aa\",\"operator\":\"小张\"}","topic": "taobao_jds_TradeTrace"}]
 * @author auto create
 */
class TmcPublishMessage
{
	
	/** 
	 * 消息内容的JSON表述，必须按照topic的定义来填充
	 **/
	public $content;
	
	/** 
	 * 消息的扩增属性，用json格式表示
	 **/
	public $json_ex_content;
	
	/** 
	 * 直发消息需要传入目标appkey
	 **/
	public $target_app_key;
	
	/** 
	 * 目标分组
	 **/
	public $target_group;
	
	/** 
	 * 消息类型
	 **/
	public $topic;	
}
?>