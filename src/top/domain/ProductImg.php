<?php
namespace TopClient\domain;

/**
 * 产品图片
 * @author auto create
 */
class ProductImg
{

	/**
	 * 添加时间.格式:yyyy-mm-dd hh:mm:ss
	 **/
	public $created;

	/**
	 * 产品图片ID
	 **/
	public $id;

	/**
	 * 修改时间.格式:yyyy-mm-dd hh:mm:ss
	 **/
	public $modified;

	/**
	 * 图片序号。产品里的图片展示顺序，数据越小越靠前。要求是正整数。
	 **/
	public $position;

	/**
	 * 图片所属产品的ID
	 **/
	public $product_id;

	/**
	 * 图片地址.(绝对地址,格式:http://host/image_path)
	 **/
	public $url;
}
?>
