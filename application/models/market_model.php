<?php
class Market_model extends CI_Model{
	
function get_market($marketId=NULL)
	{
		if($marketId)
		{
			$this->db->where('id',$marketId);
		}
		return $this->db->get('market')->result_array();
	}
}
?>