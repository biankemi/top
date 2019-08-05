<?php
namespace top\request;

/**
 * TOP API: alibaba.lst.store.open.waybill.send request
 * 
 * @author auto create
 * @since 1.0, 2018.05.24
 */
class AlibabaLstStoreOpenWaybillSendRequest
{
	/** 
	 * 订单信息
	 **/
	private $openOrderDTO;
	
	private $apiParas = array();
	
	public function setOpenOrderDTO($openOrderDTO)
	{
		$this->openOrderDTO = $openOrderDTO;
		$this->apiParas["open_order_d_t_o"] = $openOrderDTO;
	}

	public function getOpenOrderDTO()
	{
		return $this->openOrderDTO;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.store.open.waybill.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
