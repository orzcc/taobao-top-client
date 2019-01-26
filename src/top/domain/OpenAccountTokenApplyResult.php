<?php
namespace TopClient\domain;

/**
 * Open Account申请token的结果
 * @author auto create
 */
class OpenAccountTokenApplyResult
{

	/**
	 * 错误码
	 **/
	public $code;

	/**
	 * token
	 **/
	public $data;

	/**
	 * 错误信息
	 **/
	public $message;

	/**
	 * 是否成功
	 **/
	public $successful;
}
?>
