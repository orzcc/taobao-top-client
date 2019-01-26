<?php
namespace TopClient\domain;

/**
 * Open Account模型
 * @author auto create
 */
class OpenAccount
{

	/**
	 * 支付宝的帐号标识
	 **/
	public $alipay_id;

	/**
	 * 头像url
	 **/
	public $avatar_url;

	/**
	 * 银行卡号
	 **/
	public $bank_card_no;

	/**
	 * 银行卡的拥有者姓名
	 **/
	public $bank_card_owner_name;

	/**
	 * 出生日期
	 **/
	public $birthday;

	/**
	 * 创建帐号的App Key
	 **/
	public $create_app_key;

	/**
	 * 帐号创建的设备的ID
	 **/
	public $create_device_id;

	/**
	 * 账号创建时的位置
	 **/
	public $create_location;

	/**
	 * 展示名
	 **/
	public $display_name;

	/**
	 * 数据域
	 **/
	public $domain_id;

	/**
	 * 邮箱
	 **/
	public $email;

	/**
	 * 自定义扩展信息Map的Json格式
	 **/
	public $ext_infos;

	/**
	 * 1男 2女
	 **/
	public $gender;

	/**
	 * 记录创建时间
	 **/
	public $gmt_create;

	/**
	 * 记录上次更新时间
	 **/
	public $gmt_modified;

	/**
	 * Open Account Id
	 **/
	public $id;

	/**
	 * 开发者自定义账号id
	 **/
	public $isv_account_id;

	/**
	 * 地区
	 **/
	public $locale;

	/**
	 * 登录名
	 **/
	public $login_id;

	/**
	 * 密码
	 **/
	public $login_pwd;

	/**
	 * 加密算法类型：1、代表单纯MD5，2：代表单一Salt的MD5，3、代表根据记录不同后的MD5
	 **/
	public $login_pwd_encryption;

	/**
	 * 密码加密强度
	 **/
	public $login_pwd_intensity;

	/**
	 * 密码salt
	 **/
	public $login_pwd_salt;

	/**
	 * 手机
	 **/
	public $mobile;

	/**
	 * 姓名
	 **/
	public $name;

	/**
	 * TAOBAO = 1;WEIXIN = 2;WEIBO = 3;QQ = 4;
	 **/
	public $oauth_plateform;

	/**
	 * 第三方oauth openid
	 **/
	public $open_id;

	/**
	 * 账号状态：1、启用，2、删除，3、禁用
	 **/
	public $status;

	/**
	 * 账号创建类型：1、通过短信创建，2、ISV批量导入，3、ISV OAuth创建
	 **/
	public $type;

	/**
	 * 记录的版本号
	 **/
	public $version;

	/**
	 * 旺旺
	 **/
	public $wangwang;

	/**
	 * 微信
	 **/
	public $weixin;
}
?>
