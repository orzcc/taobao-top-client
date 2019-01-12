<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.activitylink.get request
 *
 * @author auto create
 * @since 1.0, 2019.01.11
 */
class TbkActivitylinkGetRequest
{
	/**
	 * 推广位id，mm_xx_xx_xx pid三段式中的第三段
	 **/
	private $adzoneId;

	/**
	 * 1：PC，2：无线，默认：１
	 **/
	private $platform;

	/**
	 * 渠道关系ID，仅适用于渠道推广场景
	 **/
	private $relationId;

	/**
	 * 需要转链的活动页URL，从官方活动页获取
	 **/
	private $srcUrl;

	/**
	 * 媒体平台下达人的淘客pid
	 **/
	private $subPid;

	/**
	 * 自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
	 **/
	private $unionId;

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

	public function setPlatform($platform)
	{
		$this->platform = $platform;
		$this->apiParas["platform"] = $platform;
	}

	public function getPlatform()
	{
		return $this->platform;
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

	public function setSrcUrl($srcUrl)
	{
		$this->srcUrl = $srcUrl;
		$this->apiParas["src_url"] = $srcUrl;
	}

	public function getSrcUrl()
	{
		return $this->srcUrl;
	}

	public function setSubPid($subPid)
	{
		$this->subPid = $subPid;
		$this->apiParas["sub_pid"] = $subPid;
	}

	public function getSubPid()
	{
		return $this->subPid;
	}

	public function setUnionId($unionId)
	{
		$this->unionId = $unionId;
		$this->apiParas["union_id"] = $unionId;
	}

	public function getUnionId()
	{
		return $this->unionId;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.activitylink.get";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
		RequestCheckUtil::checkNotNull($this->srcUrl,"srcUrl");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
