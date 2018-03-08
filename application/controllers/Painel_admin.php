<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model');
    }

    public function home_admin()
	{
        $this->db->select('*');
        $this->db->order_by('id_col', 'DESC');
        $qery['coli'] = $this->db->get('colaborador');
        $this->load->view('admin/home',$qery);
	}
    public function ver_update_perfil() {       
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->join('user_diretor', 'user_diretor.login_fk_dir = usuarios.id');
        $this->db->join('informa_escola', 'informa_escola.dir_fk_esc = usuarios.id');
        $query['dados'] = $this->db->get()->result();
        $this->load->view('admin/perfil',$query);

        }
    public function inns_colaborador() 
        {
            $this->db->select('*');
            $this->db->order_by('id_col', 'DESC');
            $query['col'] = $this->db->get('colaborador');
            $this->load->view('admin/form_colaborador',$query);
        }
    public function blog() 
        {
            $this->db->select('*');
            $query['pst'] = $this->db->get('post_ps');
            $this->load->view('admin/blogar',$query);

        }
    public function painel_de_eventos()
        {
            $this->db->select('*');
            $this->db->order_by('id_ev', 'DESC');
            $mostra['ev'] = $this->db->get('tbl_eventos');
            $this->load->view('admin/painel_eventos',$mostra);
        }
    public function painel_galeria() 
        {   $p3['dd'] = $this->login_model->imagemdagaleria();
            $p3['mumu'] = $this->db->get('tbl_turma');
            $this->load->view('admin/painel_imagens',$p3);
        }
    public function painel_agenda_escolar()
        {            
            $p1['mat'] = $this->db->get('tbl_turma');

            $this->db->select('*');
            $this->db->from('file_agenda');
            $this->db->join('tbl_turma', 'file_agenda.cat_fk_f = tbl_turma.id_t');
            $p1['up'] = $query = $this->db->get();

            $this->load->view('admin/painel_ag_escolar',$p1);
        }
        public function painel_cursos() 
        {
            $this->db->select('*');
            $this->db->order_by('id_cm', 'DESC');
            $query['mmt'] = $this->db->get('tbl_curso_materia');
            $this->load->view('admin/painel_dos_cursos',$query);
        }

        public function painel_avisos() 
        {
            $rek['rek'] = $this->login_model->recados();
          $this->load->view('admin/painel_recados',$rek);  
        }
//ações do formularios
    public function create_user() 
        {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('nome_dir', 'Nome', 'required');
                $this->form_validation->set_rules('tel_dir', 'Telefone', 'required');
                $this->form_validation->set_rules('email_dir', 'Email', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                    echo "<script>alert('Preencha todas as informações por gentileza!');</script>";
                        $this->ver_update_perfil();
                }
                else
                {
                    $this->login_model->usuario_diretor();
                    $this->session->set_flashdata('item_esc_ok', 'Informações alterada com sucesso!');
                    echo "<script>alert('Informações atuazada com sucesso!');</script>";
                    $this->ver_update_perfil();
                }
        }
    
        public function cad_escola() {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('nome_esc', 'Nome da escola', 'required|max_length[100]');
                $this->form_validation->set_rules('email_esc', 'E-mail da escola', 'required|max_length[50]|valid_email');
                $this->form_validation->set_rules('tel_esc', 'Telefone da escola', 'required|max_length[20]');
                $this->form_validation->set_rules('endereco_esc', 'Endereço', 'required|max_length[50]|alpha_numeric_spaces');
                $this->form_validation->set_rules('bairro_esc', 'Bairro', 'required|max_length[50]|alpha_numeric_spaces');
                $this->form_validation->set_rules('cidade_esc', 'Cidade', 'required|max_length[50]|alpha_numeric_spaces');
                $this->form_validation->set_rules('ponto_ref_esc', 'Ponto de referência', 'required|max_length[500]');
                $this->form_validation->set_rules('sobre_int_esc', 'Sobre a instituição', 'required|max_length[500]');
                $this->form_validation->set_rules('palavra_dir', 'Paravra do diretor', 'required|max_length[700]');

                $this->form_validation->set_rules('esc_estrutura', 'Estrutura Escolar', 'required|max_length[700]');

                $this->form_validation->set_rules('escola_curso', 'Cursos ofertados', 'required|max_length[700]');

                if ($this->form_validation->run() == FALSE)
                {
                    $this->session->set_flashdata('item_esc', 'Existem itens faltando digitar nos dados da escola.');
                    $this->ver_update_perfil();
                }
                else
                {
                    $this->login_model->dados_escola();
                    $this->session->set_flashdata('item_esc_ok', 'Informações alterada com sucesso!');
                    $this->ver_update_perfil();
                } 
        }
        public function cria_colaborador() {
            
                $this->load->library('form_validation');

                $this->form_validation->set_rules('fullname', 'Nome', 'required');
                $this->form_validation->set_rules('address', 'Função', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->inns_colaborador();
                }
                else
                {
                    $this->login_model->insert_colbadorador();
                    $this->session->set_flashdata('item_col', 'Colaborador criado com sucesso!');
                    $this->inns_colaborador();
                }
            
        }
        public function ver_colab($param) {
            
            $query['mos'] = $this->db->get_where('colaborador', array('id_col' => $param))->result();
            $this->load->view('admin/crud/dados_ver_colaborador',$query);
        }
        public function up_col() {
            
                $this->load->library('form_validation');

                $this->form_validation->set_rules('fullname', 'Nome', 'required');
                $this->form_validation->set_rules('address', 'Função', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->ver_colab();
                }
                else
                {
                    $param = $this->input->post('id');
                    $this->login_model->up_colabadorador($param);
                    $this->session->set_flashdata('item_col', 'Informações Alterado com sucesso!');
                    $this->ver_colab($param);
                }
            
        }
        public function delete_col($param) {
            
            $this->login_model->del_colabadorador($param);
            echo "<script>alert('Colaborador deletado com sucesso!');</script>";
            $this->inns_colaborador();
        }
        public function send_cat_blog() {
            
                $this->load->library('form_validation');

                $this->form_validation->set_rules('cat_bg_npme', 'Categoria', 'required');
                $this->form_validation->set_rules('cat_bg_obs', 'Observação da categoria', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->blog();
                }
                else
                {
                   
                    $this->login_model->cria_categoria();
                    $this->session->set_flashdata('item_bg', 'Categoria criada com sucesso!');
                    $this->blog();
                }
        }
        public function insert_blog() {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('titulo_bg', 'Titulo', 'required');
            $this->form_validation->set_rules('conteudo_bg', 'Conteúdo', 'required');
            $this->form_validation->set_rules('cat_bg', 'Categoria', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                    $this->blog();
            }
            else
            {
               
                $this->login_model->cria_post();
                $this->session->set_flashdata('item_bg2', 'Post criada com sucesso!');
                $this->blog();
            }
        }

        public function visualizar_post($pa)
        {
            $query['dd'] = $this->db->get_where('post_ps', array('id_ps' => $pa))->result();
            $this->load->view('admin/ver_post',$query);
        }
        public function up_post()
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('titulo_bg', 'Titulo', 'required');
            $this->form_validation->set_rules('conteudo_bg', 'Conteúdo', 'required');
            $this->form_validation->set_rules('cat_bg', 'Categoria', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $param = $this->input->post('id_user');
                $this->visualizar_post($param);
            }
            else
            {
                $param = $this->input->post('id_user');
                $this->login_model->up_posts($param);
                $this->session->set_flashdata('item_bg2', 'Post Atualizado com sucesso!');
                $this->visualizar_post($param);
            }   
        }

        public function deletar_post($val)
        {
           $this->login_model->del_post($val);
            echo "<script>alert('Post deletado com sucesso!');</script>";
            $this->blog();
        }
//categoria de eventos
        public function categ_ev()
        {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('cat_ev', 'Categoria', 'required|trim');
                $this->form_validation->set_rules('ev_cod', 'Codigo da categoria','required|trim|is_unique[categoria_eventos.cod_ev]|alpha_numeric_spaces');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->painel_de_eventos();
                }
                else
                {
                    $this->login_model->insert_cata_ev();
                    $this->session->set_flashdata('item_bg3', 'Categoria criado com sucesso!');
                    $this->painel_de_eventos();
                }
        }
//criando os eventos
          public function cria_eventos()
          {
            $this->load->library('form_validation');

                $this->form_validation->set_rules('ev_titulo', 'Titulo', 'required|trim|min_length[3]|max_length[50]|is_unique[tbl_eventos.titulo_ev]');
                $this->form_validation->set_rules('ev_conteudo', 'Conteúdo','required|trim|min_length[3]|max_length[1000]');
                $this->form_validation->set_rules('myselect', 'Categoria', 'required|trim');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->painel_de_eventos();
                }
                else
                {
                    $this->login_model->insert_eventos();
                    $this->session->set_flashdata('item_bg4', 'Evento criado com sucesso!');
                    $this->painel_de_eventos();
                }
          }
//visualizar alteração de evento
          public function up_evento($dd)
          {
              $this->db->select('*');
              $query['dd'] = $this->db->get_where('tbl_eventos', array('id_ev' => $dd))->result();
              
              $this->load->view('admin/crud/ver_ev_p_alteracao', $query);
          }
//alteração do contéudo dos eventos
          public function update_eventos()
          {
                $this->load->library('form_validation');

            $this->form_validation->set_rules('ev_titulo', 'Titulo', 'required|trim|min_length[3]|max_length[50]');
                $this->form_validation->set_rules('ev_conteudo', 'Conteúdo','required|trim|min_length[3]|max_length[1000]');
                $this->form_validation->set_rules('myselect', 'Categoria', 'required|trim');

                if ($this->form_validation->run() == FALSE)
                {
                    $dd = $this->input->post('id');
                    $this->up_evento($dd);
                }
                else
                {
                    $dd = $this->input->post('id');
                    $this->login_model->update_evento($dd);
                    $this->session->set_flashdata('item_bg4', 'Evento alterado com sucesso!');
                    $this->up_evento($dd);
                }
          }
//deletando painel de evento
          public function del_evento($value)
          {

            $this->login_model->del_evento($value);
             echo "<script>alert('Evento deletado com sucesso!');</script>";
             $this->painel_de_eventos();
             redirect(base_url('painel_admin/cria_eventos'));

          }
//Painel de cadastro de materias
          public function maria_curso()
          {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('materia_name', 'Matéria', 'max_length[50]|trim|min_length[3]|required',
                        array('required' => 'Digite uma %s por favor. Ex.: Português.')
                );
                $this->form_validation->set_rules('codigo_name', 'Código', 'required|numeric|exact_length[5]|is_unique[tbl_curso_materia.codigo_mt]');                

                if ($this->form_validation->run() == FALSE)
                {
                    $this->painel_cursos();
                }
                else
                {
                    $this->login_model->insert_materia();
                    $this->session->set_flashdata('item_bg5', 'Matéria criado com sucesso!');
                    $this->painel_cursos();
                }
          }
//ver painel de alteração
          public function ver_materia($v)
          {
              $this->db->select('*');
              $query['mmt'] = $this->db->get_where('tbl_curso_materia', array('id_cm' => $v))->result();
              
              $this->load->view('admin/crud/up_materias', $query);
          }
//Painel de alteração de materias
          public function up_curso_mt()
          {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('materia_name', 'Matéria', 'max_length[50]|trim|min_length[3]|required',
                        array('required' => 'Digite uma %s por favor. Ex.: Português.')
                );
                $this->form_validation->set_rules('codigo_name', 'Código', 'required|numeric|exact_length[5]');                

                if ($this->form_validation->run() == FALSE)
                {
                    $v = $this->input->post('idv');
                    $this->ver_materia($v);
                }
                else
                {
                    $v = $this->input->post('idv');
                    $this->login_model->up_materia($v);
                    $this->session->set_flashdata('item_bg6', 'Matéria alterada com sucesso!');
                    $this->ver_materia($v);
                }
          }
//deltando a materia
          public function delte_materia($value)
          {
             $this->login_model->del_materia($value);
             echo "<script>alert('Matéria deletada com sucesso!');</script>";
             $this->painel_cursos();
             //redirect(base_url('painel_admin/painel_cursos'));
          }
//Categoria dos professores e materias
        public function prof_materia()
        {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('nome_cat', 'Nome da categoria', 'required');
                $this->form_validation->set_rules('option_turno_car', 'Turno', 'required');
                $this->form_validation->set_rules('prof_cat', 'Professor(a)', 'required');
                $this->form_validation->set_rules('materia_cat', 'Matéria', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                    echo "<script>alert('Ops! Error.');</script>";
                    $this->painel_agenda_escolar();
                }
                else
                {
                    $this->login_model->cat_materia_prof();
                    echo "<script>alert('Categoria criada com sucesso!');</script>";
                    $this->painel_agenda_escolar();
                }
        }
//criando turma categoria
        public function cat_turma()
        {
           $this->load->library('form_validation');

                $this->form_validation->set_rules('nomecat', 'Nome da categoria', 'required|is_unique[tbl_turma.nome_turma_t]');
                $this->form_validation->set_rules('idcod', 'Código', 'required|is_unique[tbl_turma.codigo_t]');

                if ($this->form_validation->run() == FALSE)
                {                    
                    $this->painel_agenda_escolar();
                }
                else
                {
                    $this->login_model->cat_turma();
                    echo "<script>alert('Categoria criada com sucesso!');</script>";
                    $this->painel_agenda_escolar();
                } 
        }
//formulario de arquivos da grade escolar
        public function form_file_grade()
        {
            $this->load->library('form_validation');

                $this->form_validation->set_rules('select_turma', 'Turma', 'required|is_unique[file_agenda.cat_fk_f]');
                if ($this->form_validation->run() == FALSE)
                {                    
                    $this->painel_agenda_escolar();
                }
                else
                {
                    $this->login_model->cat_file();
                    echo "<script>alert('Categoria criada com sucesso!');</script>";
                    $this->painel_agenda_escolar();
                } 
        }

//forçando doqnload do arquivo
     public function forcar_download($fileName = NULL)
        {
            $this->load->helper('download');

            $dados = force_download('uploads/'.$fileName, NULL);

            if ($dados == true) {
                $this->painel_agenda_escolar();
            }else{
                echo "<script>alert('arquivo nem existe bbb.');</script>";
                    //redirect ( base_url () );
                    $this->painel_agenda_escolar();
            }
        }
//forçando doqnload do arquivo welcome
     public function forcar_download_welcome($fileName = NULL)
        {
            $this->load->helper('download');

            $dados = force_download('uploads/'.$fileName, NULL);

            if ($dados == true) {
                $this->index();
            }else{
                echo "<script>alert('arquivo nem existe bbb.');</script>";
                    //redirect ( base_url () );
                    $this->index();
            }
        }

//delete o grade escolar
        public function delete_file($value)
        {
            $this->db->delete('file_agenda', array('file_img_f' => $value));
            unlink("./uploads/$value");
            echo "<script>alert('Agenda deletada com sucesso!');</script>";
            $this->painel_agenda_escolar();
        }
//criando galeria de imagem
     public function galeria_file(){

        if($this->input->post('userSubmit')){
            
            //Check whether user upload picture
            $xtencao1 = explode('.', $_FILES['picture']['name']);
            $new_name1 = rand() . '.' . $xtencao1[1];
            $destino1 = 'uploads/images/' . $new_name1;
            move_uploaded_file($_FILES['picture']['tmp_name'], $destino1);
            
            //Prepare array of user data
            $userData = array(
                'texto_gl' => $this->input->post('desc'),
                'id_gl_mg' => $this->input->post('ano_let'),
                'img_gl' => $new_name1
            );
            
            //Pass user data to model
            $insertUserData = $this->login_model->insert_files($userData);
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('success_msg', 'Os dados do usuário foram adicionados com sucesso.');
            }else{
                $this->session->set_flashdata('error_msg', 'Ocorreram alguns problemas, tente novamente.');
            }
        }
        //Form for adding user data
        $this->painel_galeria();
    }
//EXCLUINDO IMAGEM
    public function galeria_exclui($id)
    {
        $this->db->delete('tbl_galeria', array('img_gl' => $id));         
        unlink("./uploads/images/$id");
        echo "<script>alert('Imagem deletada com sucesso!');</script>";
        $this->painel_galeria();
    }
//publicando imagem
    public function galeria_public($id)
    {
        $st = '0';
        $this->db->set('status', $st);
        $this->db->where('ig_gl', $id);
        $this->db->update('tbl_galeria');
        echo "<script>alert('Imagem publicada com sucesso!');</script>";
        $this->painel_galeria();
    }
//deletando email
    public function deleta_email($v)
    {
        $this->db->delete('tbl_email', array('id_em' => $v));
        echo "<script>alert('E-mail deletado com sucesso!');</script>";
        $this->painel_avisos();
    }
}

