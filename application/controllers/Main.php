<?php

class Main extends CI_Controller{

     public function view(){
        $page_name = "display_db_page";

        if(!file_exists(APPPATH.'views/pages/'.$page_name.'.php'))
            {
            show_404();
            }
        // echo "qweqweqwe";
            $send_data['what_is_data'] = "kamusta mundo";
            $send_data['in_db'] = $this->Test_model->get_db();
            // print_r($send_data['in_db']);

            $this->load->view('templates/header');
            $this->load->view('pages/'.$page_name, $send_data);
            $this->load->view('templates/footer');

    }

    public function insert(){

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"></div>');
        $this->form_validation->set_rules('collected_firstname','Firstname','required');
    
            if($this->form_validation->run() == FALSE){
                echo "asdasd";

            $page_name = "input_page"; // name of php file

            if(!file_exists(APPPATH.'views/pages/'.$page_name.'.php'))
                {
                    show_404();
                }

                $this->load->view('templates/header');
                $this->load->view('pages/'.$page_name); //dir
                $this->load->view('templates/footer');
            }else{
                $this->Test_model->insert_db();
                $this->session->set_flashdata('new_creds','New credentials was added');
                redirect(base_url());
            }

    }


}