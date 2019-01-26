<?php
namespace TopClient\domain;

/**
 * 结果
 * @author auto create
 */
class PageResult
{

	/**
	 * 翻页的pageno
	 **/
	public $page_no;

	/**
	 * 翻页的pagesie
	 **/
	public $page_size;

	/**
	 * 处罚订单列表
	 **/
	public $results;

	/**
	 * 一共能查询出来的结果总数
	 **/
	public $total_count;
}
?>
