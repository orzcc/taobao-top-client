<?php
namespace TopClient\domain;

/**
 * 商品属性图片结构
 * @author auto create
 */
class PropImg
{

	/**
	 * 图片创建时间 时间格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $created;

	/**
	 * 属性图片的id，和商品相对应
	 **/
	public $id;

	/**
	 * 图片放在第几张（多图时可设置）
	 **/
	public $position;

	/**
	 * 图片所对应的属性组合的字符串
	 **/
	public $properties;

	/**
	 * 图片链接地址
	 **/
	public $url;
}
?>
