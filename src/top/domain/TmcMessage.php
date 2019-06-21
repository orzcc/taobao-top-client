<?php
namespace TopClient\domain;

/**
 * 消息通道的通用消息结构
 * @author auto create
 */
class TmcMessage
{
	
	/** 
	 * 消息详细内容，格式为JSON/XML
	 **/
	public $content;
	
	/** 
	 * 消息ID
	 **/
	public $id;
	
	/** 
	 * 消息发布者的AppKey
	 **/
	public $pub_app_key;
	
	/** 
	 * 消息发布时间
	 **/
	public $pub_time;
	
	/** 
	 * 消息所属主题
	 **/
	public $topic;
	
	/** 
	 * 消息所属的用户编号
	 **/
	public $user_id;
	
	/** 
	 * 用户的昵称
	 **/
	public $user_nick;	
}
?>