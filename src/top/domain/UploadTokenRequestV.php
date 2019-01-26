<?php
namespace TopClient\domain;

/**
 * 系统自动生成
 * @author auto create
 */
class UploadTokenRequestV
{

	/**
	 * 多媒体中心分配的业务码, mtopupload或其他
	 **/
	public $biz_code;

	/**
	 * 客户端IP
	 **/
	public $client_ip;

	/**
	 * 客户端网络类型 wifi 或 2g 或 3g 或 cdma 或 gprs
	 **/
	public $client_net_type;

	/**
	 * 文件内容的CRC32校验和
	 **/
	public $crc;

	/**
	 * 文件名
	 **/
	public $file_name;

	/**
	 * 文件大小，单位byte
	 **/
	public $file_size;

	/**
	 * 自定义数据
	 **/
	public $private_data;

	/**
	 * 上传类型：resumable 或 normal
	 **/
	public $upload_type;

	/**
	 * session
	 **/
	public $user_id;
}
?>
