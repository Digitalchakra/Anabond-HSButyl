<?php
class Product_model extends CI_Model{
	
function get_products($marketId=NULL)
	{
		if($marketId)
		{
			$this->db->select('*');
			$this->db->join('relation', 'relation.product_id = product.id');
			$this->db->where('relation.market_id',$marketId);
			return $this->db->get('product')->result_array();
		}
		else
		{
			return $this->db->get('product')->result_array();
		}
	}
}
?>