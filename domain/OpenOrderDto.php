<?php
namespace top\domain;

/**
 * 订单信息
 * @author auto create
 */
class OpenOrderDto
{
	
	/** 
	 * 出库时间
	 **/
	public $delivery_time;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 订单号
	 **/
	public $id;
	
	/** 
	 * ISV订单号
	 **/
	public $isv_order_no;
	
	/** 
	 * 出库明细
	 **/
	public $shipped_item_list;
	
	/** 
	 * 配送联系人
	 **/
	public $shipping_contact;
	
	/** 
	 * 配送联系人电话
	 **/
	public $shipping_contact_tel;
	
	/** 
	 * 快递单号
	 **/
	public $tracking_no;	
}
?>