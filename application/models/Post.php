<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends CI_Model{
    /*
     * get rows from the posts table
     */
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('unit');
        //filter data by searched keywords
        if(!empty($params['search']['keywords'])){
            $this->db->like('Unit_Name',$params['search']['keywords']);
        }
        //sort data by ascending or desceding order
        if(!empty($params['search']['sortBy'])){
            $this->db->order_by('Unit_Name',$params['search']['sortBy']);
        }else{
            $this->db->order_by('Unit_ID','desc');
        }
        //set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        //get records
        $query = $this->db->get();
        //return fetched data
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }
    function getdata($unitname){
        $query=$this->db->where('Unit_Name',$unitname)->get('unit')->row_array();
        return $query;
    }

}
