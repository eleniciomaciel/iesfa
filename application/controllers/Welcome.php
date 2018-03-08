<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model');
    }

    public function index()
	{
        $qery['dadosEscoal'] = $this->login_model->selectdadosEscola();
        $qery['school'] = $this->login_model->selectAll_escola();
        $qery['blog'] = $this->login_model->selectAll_blog();
        $qery['img'] = $this->login_model->selectAll_img();
        $qery['dd'] = $this->login_model->selectAll_colabore();
		$this->load->view('welcome_message',$qery);
	}

	public function home()
	{
		$this->load->view('admin/home');
	}
	public function turma_ensinos()
	{
		$this->load->view('ensinos');
	}
	public function agenda()
	{
		$this->load->view('agenda_escolar');
	}
	public function galeria()
	{
		$this->load->view('galeria_fotos');
	}
	public function posts_blog()
	{
        $dr['dt'] = $this->login_model->todos_blogs();
        $dr['dd'] = $this->login_model->blog_cat();
		$this->load->view('posts_blogs',$dr);
	}
	public function fale_conosco()
	{
		$this->load->view('contato');
	}
	public function leia_o_post($id)
	{
        $dr['dj'] = $this->login_model->blogId($id);
        $dr['dh'] = $this->login_model->blog_cat();
		$this->load->view('leia_mais',$dr);
	}
	public function eventos_iesfa()
	{
        $dados['rt'] = $this->login_model->evento_all();
		$this->load->view('eventos', $dados);
	}
	public function area_de_login()
	{
		$this->load->view('login');
	}
	public function area_de_recupera_senha()
	{
		$this->load->view('recupera_senha');
	}
//forçando doqnload da home do site
     public function forcar_download($fileName = NULL)
        {
            $this->load->helper('download');

            $dados = force_download('uploads/'.$fileName, NULL);

            if ($dados == true) {
                $this->painel_agenda_escolar();
            }else{
                echo "<script>alert('arquivo nem existe.');</script>";
                    //redirect ( base_url () );
                    $this->painel_agenda_escolar();
            }

         /*if ($fileName) 
             {
                $file = realpath ( "uploads" ) . "\\" . $fileName;
                // check file exists    
                if (file_exists ( $file )) 
                {
                     // get file content
                     $data = file_get_contents ( $file );
                     //force download
                     force_download ( $fileName, $data );
                } else {
                 // Redirect to base url
                    echo "<script>alert('arquivo não existe.');</script>";
                    //redirect ( base_url () );
                    $this->index();
                }
            }*/
        }
        
//login do sistema
        public function user_login_process() {
      //Valida los campos 
        $this->form_validation->set_rules('username', 'Usuario', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Senha', 'trim|required|xss_clean');        
        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){

                $this->db->select('*');
                $this->db->order_by('id_col', 'DESC');
                $qery['coli'] = $this->db->get('colaborador');

                $this->load->view('admin/home',$qery); 
            }else{
                $this->load->view('login');                
            }
        }else{
                //$data = array('uuname' => $this->input->post('username'),
                              //'upass' => md5($this->input->post('password')));
                
                $username = $this->input->post('username');
                $password =  $this->input->post('password');
                
                $result = $this->login_model->login($username,$password);  
                
                if ($result == TRUE) {                
                    $username = $this->input->post('username');
                    
                    $result = $this->login_model->read_user_information($username);
                
                    if ($result != false) {
                        $session_data = array(
                                                
                                                'username' => $result[0]->username,
                                                'iduser'=> $result[0]->id,
                                        );                                        
                        // Pasa el arreglo a la vista
                        $this->session->set_userdata('logged_in', $session_data);   
                                        $this->db->select('*');
                $this->db->order_by('id_col', 'DESC');
                $qery['coli'] = $this->db->get('colaborador');

                $this->load->view('admin/home',$qery);                                   
                       
                    }
                }else{
                    $this->session->set_flashdata('item', 'Usuario ou senha inválidos.');
                    $this->load->view('login');
                }
        }
    }
   public function logout() {
    
        // Elimina los datos de la sesión
        $sess_array = array(
        'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        
        $this->load->view('login');  
     }
//enviando mensagem 
     public function message()
     {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name_em', 'Nome', 'required|max_length[30]');
        $this->form_validation->set_rules('email_em', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject_em', 'Assunto', 'required|max_length[30]');
        $this->form_validation->set_rules('telef_em', 'Telefone', 'required|max_length[30]');
        $this->form_validation->set_rules('message_em', 'Mensagem', 'required|max_length[500]');

        if ($this->form_validation->run() === FALSE)
        {
            $this->fale_conosco();
        }
        else
        {
            $this->login_model->set_msg();
            echo "<script>alert('Mensagem emviada com sucesso! Retornaremos em breve.');</script>";
            $this->fale_conosco();
        }
     }

}
