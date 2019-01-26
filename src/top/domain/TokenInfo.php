<?php
namespace TopClient\domain;

/**
 * token信息
 * @author auto create
 */
class TokenInfo
{

	/**
	 * token info扩展信息
	 **/
	public $ext;

	/**
	 * isv自己账号的唯一id
	 **/
	public $isv_account_id;

	/**
	 * ISV APP的登录态时长
	 **/
	public $login_state_expire_in;

	/**
	 * open account id
	 **/
	public $open_account_id;

	/**
	 * 时间戳
	 **/
	public $timestamp;

	/**
	 * 用于防重放的唯一id
	 **/
	public $uuid;
}
?>
