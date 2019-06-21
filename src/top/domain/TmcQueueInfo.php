<?php
namespace TopClient\domain;

/**
 * 队列详细信息
 * @author auto create
 */
class TmcQueueInfo
{
	
	/** 
	 * 消息队列Broker名称
	 **/
	public $broker_name;
	
	/** 
	 * 当前队列当天读取量
	 **/
	public $get_total;
	
	/** 
	 * TMC组名
	 **/
	public $name;
	
	/** 
	 * 当前队列当天写入量
	 **/
	public $put_toal;	
}
?>