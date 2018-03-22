<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Posts Management class created by CodexWorld
 */
class Rent extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('invoicemodel','invoice');
        $this->load->model('post');
        $this->load->model('rentmodel');
        $this->load->library('Ajax_pagination');
        $this->perPage = 10;
    }
    
    public function index($Unit_Name=false){
        if($Unit_Name){
        $data = $this->session->userdata();
            $data['unit'] = $this->post->getdata($Unit_Name);
            $this->load->view('rent/header');
            $this->load->view('rent/list', $data);
            $this->load->view('home/footer');
        }else{
            $data = array();
            $data = $this->session->userdata();
            
            //total rows count
            $totalRec = count($this->post->getRows());
            
            //pagination configuration
            $config['target']      = '#postList';
            $config['base_url']    = base_url().'rent/ajaxPaginationData';
            $config['total_rows']  = $totalRec;
            $config['per_page']    = $this->perPage;
            $config['link_func']   = 'searchFilter';
            $this->ajax_pagination->initialize($config);
            
            //get the posts data

    $data = $this->session->userdata();
            $data['unit'] = $this->post->getRows(array('limit'=>$this->perPage));


            //load the view
            //print_r($data);
            //exit();
            $this->load->view('rent/header',$data);
            $this->load->view('rent/list', $data);
            $this->load->view('home/footer');
            //$this->load->view('rent/index', $data);
        }
    }

    function occupy(){
        date_default_timezone_set('Asia/Manila');
        if ($this->input->post('Rent') && $this->session->userdata('id')) {
            $unit_id = $this->input->post('Unit_ID');
            $total = $this->input->post('Unit_Price');
            $tenant_id = $this->session->userdata('id');
            $date = date('Y-m-d');
            $rentId = $this->rentmodel->add($unit_id,$tenant_id,$date);
            $this->invoice->generateInvoice($rentId,$total);
            redirect('User/invoice','refresh');
        }else{
            $this->session->set_flashdata('error', '
                <div class="alert alert-warning">
                    Please login first
                </div>
                ');
            redirect('Login');
        }
    }

    function ajaxPaginationData(){
        $conditions = array();
        
        //calc offset number
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //set conditions for search
        $keywords = $this->input->post('keywords');
        $sortBy = $this->input->post('sortBy');
        if(!empty($keywords)){
            $conditions['search']['keywords'] = $keywords;
        }
        if(!empty($sortBy)){
            $conditions['search']['sortBy'] = $sortBy;
        }
        
        //total rows count
        $totalRec = count($this->post->getRows($conditions));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'rent/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //set start and limit
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        
        //get posts data
        $data['unit'] = $this->post->getRows($conditions);
        
        //load the view
        $this->load->view('rent/ajax-pagination-data', $data, false);
    }
}