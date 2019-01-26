<?php
namespace TopClient\domain;

/**
 * token info中的扩展字段
 * @author auto create
 */
class TokenInfoExt
{

	/**
	 * 授权登录后返回的信息
	 **/
	public $oauth_other_info;

	/**
	 * open account当前token info中open account id对应的open account信息
	 **/
	public $open_account;
}
?>
