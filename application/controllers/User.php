<?php

class User extends CI_Controller{
  private $data;
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('user_type') != 'USER') {
      redirect('');
    }
    $this->load->model('InvoiceModel','Invoices');
    $this->load->model('UnitTypeModel','PropertyType');
    $this->load->model('UnitModel','UNITS');
    $this->load->model('UserModel','Normies');
    $this->data =  $this->session->userdata();
  }

  function index(){
    $this->master('User/dashboard',$this->data);
  }

  public function editprofile()
  {
    if (isset($this->data->logoutUrl)) {
      $usersInfo = $this->Facebooklords->getUserById($this->data->id);
    }else{
      $usersInfo = $this->data;
    }
    $this->master('User/settings',$usersInfo);
  }

  public function profile()
  {
  	$this->master('User/profile',$this->data);
  }

  public function tenant_list()
  {
    $this->data['tenants'] = $this->Invoices->getMyTenants($this->data['id']);
  	$this->master('User/tenants',$this->data);
  }

  public function property()
  {
    $this->data['types'] = $this->PropertyType->getAllUnitType();
    $this->data['units'] = $this->UNITS->getUnitByOwner($this->data['id']);
    $this->session->set_userdata($this->data);
  	$this->master('User/property',$this->data);
  }

  public function do_upload()
  {
    $config['upload_path'] = 'C:/xampp/htdocs/RentalFinder/propertyimages/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']  = '2048';
    $config['max_width']  = '2048';
    $config['max_height']  = '2048';
    $config['file_name'] = $this->data['id'].'.jpg';
    
    $this->load->library('upload', $config);
    
    if ( ! $this->upload->do_upload()){
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('message', '
        <div class="alert alert-danger">
          File too large
        </div>
        ');
      redirect('User/Property');
    }
    else{
      $data = array('upload_data' => $this->upload->data());
      $newProperty = array(
              'Unit_Name'=> $this->input->post('propertyname'),
              'Unit_Description'=>$this->input->post('description'),
              'Unit_Capacity'=>$this->input->post('capacity'),
              'Unit_Amenities'=>$this->input->post('amenities'),
              'Unit_Houserules'=>$this->input->post('houserules'),
              'Unit_Picture'=>$this->data['id'].'.jpg',
              'Unit_Lat'=>0.0,
              'Unit_Long'=>0.0,
              'Unit_Price'=>$this->input->post('price'),
              'Unit_Type'=>$this->input->post('propertytype'),
              'Owner_ID'=>$this->data['id']
            );
        $this->UNITS->insertUnit($newProperty);
        $this->session->set_flashdata('message', '
                <div class="alert alert-info">
                  '.$newProperty['Unit_Name'].' succesfully added
                </div>
        ');

        redirect('User/Property');
    }
  }

  public function inbox()
  {
  	$this->master('User/inbox',$this->data);
  }

  public function maps()
  {
  	$this->master('User/maps',$this->data);
  }

  public function notifications()
  {
  	$this->master('User/notifications',$this->data);
  }

  public function logout()
  {
      $this->session->sess_destroy();
      redirect('');
  }

public function master($page,$data = null)
  {
    $this->load->view('User/header', $data);
    $this->load->view($page, $data);
    $this->load->view('User/footer', $data);
  }

}
