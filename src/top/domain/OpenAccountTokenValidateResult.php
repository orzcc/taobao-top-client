<?php
namespace TopClient\domain;

/**
 * 验证token返回数据结构
 * @author auto create
 */
class OpenAccountTokenValidateResult
{

	/**
	 * 错误码
	 **/
	public $code;

	/**
	 * token中的数据
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
