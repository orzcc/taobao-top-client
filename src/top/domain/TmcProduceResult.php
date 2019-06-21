<?php
namespace TopClient\domain;

/**
 * 消息批量发送结果
 * @author auto create
 */
class TmcProduceResult
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_message;
	
	/** 
	 * 是否成功
	 **/
	public $is_success;	
}
?>