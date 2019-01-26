<?php
namespace TopClient\domain;

/**
 * ItemImg结构
 * @author auto create
 */
class ItemImg
{

	/**
	 * 图片创建时间 时间格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $created;

	/**
	 * 商品图片的id，和商品相对应（主图id默认为0）
	 **/
	public $id;

	/**
	 * 图片放在第几张（多图时可设置）
	 **/
	public $position;

	/**
	 * 图片链接地址
	 **/
	public $url;
}
?>
