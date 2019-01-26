<?php
namespace TopClient\domain;

/**
 * 发送结果
 * @author auto create
 */
class SendMessageResult
{

	/**
	 * 延迟发送任务的唯一号
	 **/
	public $delay_task_id;

	/**
	 * 短信条数
	 **/
	public $sms_size;

	/**
	 * 发送的唯一号
	 **/
	public $task_id;
}
?>
