<?php
namespace TopClient\domain;

/**
 * 消息通道的用户结构
 * @author auto create
 */
class TmcUser
{
	
	/** 
	 * 用户首次开通时间
	 **/
	public $created;
	
	/** 
	 * 接收用户消息的组名
	 **/
	public $group_name;
	
	/** 
	 * 用户授权是否有效，true表示授权有效，false表示授权过期
	 **/
	public $is_valid;
	
	/** 
	 * 用户最后开通时间
	 **/
	public $modified;
	
	/** 
	 * 用户开通的消息类型列表。如果为空表示应用开通的所有类型
	 **/
	public $topics;
	
	/** 
	 * 用户ID
	 **/
	public $user_id;
	
	/** 
	 * 用户昵称
	 **/
	public $user_nick;
	
	/** 
	 * 用户所属的平台类型，tbUIC:淘宝用户; icbu: icbu用户
	 **/
	public $user_platform;	
}
?>