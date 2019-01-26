<?php
namespace TopClient\domain;

/**
 * 查询的对象
 * @author auto create
 */
class RpcResult
{

	/**
	 * 业务出错的状态码
	 **/
	public $biz_error_code;

	/**
	 * 业务出错的描述
	 **/
	public $biz_error_desc;

	/**
	 * 结果
	 **/
	public $data;

	/**
	 * 执行结果状态码
	 **/
	public $result_code;

	/**
	 * 执行结果
	 **/
	public $result_msg;
}
?>
