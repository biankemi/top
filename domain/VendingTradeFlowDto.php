<?php
namespace top\domain;

/**
 * 处理成功结果集
 * @author auto create
 */
class VendingTradeFlowDto
{
	
	/** 
	 * 实际金额
	 **/
	public $actual_amount;
	
	/** 
	 * 服务佣金
	 **/
	public $commission;
	
	/** 
	 * 折扣
	 **/
	public $discount;
	
	/** 
	 * 厂商设备唯一编码
	 **/
	public $equipment_code;
	
	/** 
	 * 扩展信息
	 **/
	public $ext_fields;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 商品清单
	 **/
	public $goods_detail_d_t_o_list;
	
	/** 
	 * 支付信息
	 **/
	public $payment_d_t_o_list;
	
	/** 
	 * 外部系统正向交易流水号
	 **/
	public $payment_trade_flow_no;
	
	/** 
	 * 供应商代码
	 **/
	public $supplier_code;
	
	/** 
	 * 实际金额
	 **/
	public $total_amount;
	
	/** 
	 * 外部系统交易流水号
	 **/
	public $trade_flow_no;
	
	/** 
	 * 交易类型：1购买，2退款
	 **/
	public $trade_type;	
}
?>