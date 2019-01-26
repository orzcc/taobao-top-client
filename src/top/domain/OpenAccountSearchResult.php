<?php
namespace TopClient\domain;

/**
 * 搜索查询返回结果
 * @author auto create
 */
class OpenAccountSearchResult
{

	/**
	 * 状态码
	 **/
	public $code;

	/**
	 * OpenAccount的列表
	 **/
	public $datas;

	/**
	 * 状态信息
	 **/
	public $message;

	/**
	 * 查询是否成功，成功返回时有可能数据为空
	 **/
	public $successful;
}
?>
