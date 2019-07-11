<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.jzf.convert request
 *
 * @author auto create
 * @since 1.0, 2019.07.02
 */
class TbkJzfConvertRequest
{
	/**
	 * 广告位id
	 **/
	private $adzoneId;

	/**
	 * 标题类型的字数需超过10个
	 **/
	private $content;

	/**
	 * 代理ID（暂未支持，无需传递）
	 **/
	private $relationId;

	/**
	 * 1：标题，2：淘口令/链接,不传默认为1
	 **/
	private $type;

	private $apiParas = array();

	public function setAdzoneId($adzoneId)
	{
		$this->adzoneId = $adzoneId;
		$this->apiParas["adzone_id"] = $adzoneId;
	}

	public function getAdzoneId()
	{
		return $this->adzoneId;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas["relation_id"] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.jzf.convert";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
		RequestCheckUtil::checkNotNull($this->content,"content");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
