<?php
namespace TopClient\domain;

/**
 * 发送验证码请求
 * @author auto create
 */
class SendVerCodeRequest
{

	/**
	 * 短信内容替换上下文
	 **/
	public $context;

	/**
	 * 设备id
	 **/
	public $device_id;

	/**
	 * 设备级别的发送次数限制
	 **/
	public $device_limit;

	/**
	 * 发送次数限制的时间，单位为秒，如1个小时内一个设备最多发多少短信
	 **/
	public $device_limit_in_time;

	/**
	 * 业务域，比如登录的验证码不能用于注册
	 **/
	public $domain;

	/**
	 * 验证码失效时间，单位为秒
	 **/
	public $expire_time;

	/**
	 * 外部的id，发送失败的消息通知会原封不动的带回，用于和已有的状态进行关联
	 **/
	public $external_id;

	/**
	 * 手机号
	 **/
	public $mobile;

	/**
	 * 手机号的次数限制
	 **/
	public $mobile_limit;

	/**
	 * 手机号的次数限制的时间，单位为秒
	 **/
	public $mobile_limit_in_time;

	/**
	 * session id
	 **/
	public $session_id;

	/**
	 * session级别的发送次数限制
	 **/
	public $session_limit;

	/**
	 * 发送次数限制的时，单位为秒间，单位为秒
	 **/
	public $session_limit_in_time;

	/**
	 * 特殊权限指定签名
	 **/
	public $signature;

	/**
	 * 签名id
	 **/
	public $signature_id;

	/**
	 * long型模板id
	 **/
	public $template_id;

	/**
	 * 验证码长度大于等于4，小于等于8
	 **/
	public $ver_code_length;
}
?>
