<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model
{
    function __construct() {
        $this->tableName = 'tbl_galeria';
        $this->primaryKey = 'ig_gl';
    }
        public function login($username,$password) 
        {
            $this->db->select('id, username, password');
            $this->db->from('usuarios');
            $this -> db -> where('username', $username);
            $this -> db -> where('password', $password);
            $this -> db -> limit(1);
            $query = $this -> db -> get();
            if($query -> num_rows() == 1){
              return $query->result();
            }else{
              return false;
            }
        }
        //Leia os dados para retorná-los na variável de sessão
        public function read_user_information($username) {
            $this->db->select('*');
            $this->db->from('usuarios');
            $this->db->where('username', $username);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
             return $query->result();
            } else {
               return false;
            }
          }
          public function usuario_diretor()
          {
            $xtencao1 = explode('.', $_FILES['img_dir']['name']);
            $new_name1 = rand() . '.' . $xtencao1[1];
            $destino1 = './imagens_dir/' . $new_name1;
            move_uploaded_file($_FILES['img_dir']['tmp_name'], $destino1);
            
                $data = array(
                'nome_dir' => $this->input->post('nome_dir'),
                'email_dir' => $this->input->post('email_dir'),
                'tel_dir' => $this->input->post('tel_dir'),                
                'img_dir' => $new_name1,
                 );
                
                //$this->db->where('id_dir', $this->session->userdata('usuarios')->id);
                return $this->db->update('user_diretor', $data);    
          }
          public function dados_escola() {
         
        $data = array(
        'nome_esc' => $this->input->post('nome_esc'),
        'email_esc' => $this->input->post('email_esc'),
        'tel_esc' => $this->input->post('tel_esc'),
        'endereco_esc' => $this->input->post('endereco_esc'),
        'bairro_esc' => $this->input->post('bairro_esc'),
        'cidade_esc' => $this->input->post('cidade_esc'),
        'ponto_ref_esc' => $this->input->post('ponto_ref_esc'),
        'sobre_int_esc' => $this->input->post('sobre_int_esc'),
        'palavra_dir' => $this->input->post('palavra_dir'),
        'esc_estrutura' => $this->input->post('esc_estrutura'),
        'escola_curso' => $this->input->post('escola_curso')         
    );
        $this->db->where('id_esc', $this->input->post('id_escl'));
        return $this->db->update('informa_escola', $data); 
              
          }
        public function insert_colbadorador() 
          {
            $xtencao1 = explode('.', $_FILES['exampleInputFile']['name']);
            $new_name1 = rand() . '.' . $xtencao1[1];
            $destino1 = './imagens_dir/' . $new_name1;
            move_uploaded_file($_FILES['exampleInputFile']['tmp_name'], $destino1);
            
                $data = array(
                'nome_col' => $this->input->post('fullname'),
                'funcao_col' => $this->input->post('address'),
                'formacao_col' => $this->input->post('username'), 
                'cargo_col' => $this->input->post('cargo'),
                'email_col' => $this->input->post('email'),
                'tel_col' => $this->input->post('tel_col'),
                'obs_col' => $this->input->post('descricao'), 
                'foto_col' => $new_name1
                 );
            return $this->db->insert('colaborador', $data);
          }
          public function up_colabadorador($param) {
              $xtencao1 = explode('.', $_FILES['exampleInputFile']['name']);
            $new_name1 = rand() . '.' . $xtencao1[1];
            $destino1 = './imagens_dir/' . $new_name1;
            move_uploaded_file($_FILES['exampleInputFile']['tmp_name'], $destino1);
            
                $data = array(
                'nome_col' => $this->input->post('fullname'),
                'funcao_col' => $this->input->post('address'),
                'formacao_col' => $this->input->post('username'), 
                'cargo_col' => $this->input->post('cargo'),
                'email_col' => $this->input->post('email'),
                'tel_col' => $this->input->post('tel_col'),
                'obs_col' => $this->input->post('descricao'), 
                'foto_col' => $new_name1
                 );

                $this->db->where('id_col', $param);
                return $this->db->update('colaborador', $data);
              
          }
          public function del_colabadorador($param) {
           
              return $this->db->delete('colaborador', array('id_col' => $param));
          }
          public function cria_categoria() {
              $data = array(
                    'nome_cat_bg' => $this->input->post('cat_bg_npme'),
                    'descricao_cat_bg' => $this->input->post('cat_bg_obs')
            );

            return $this->db->insert('categoria_blog', $data);
              
          }
          public function cria_post() {
              
            $xtencao1 = explode('.', $_FILES['file_bg']['name']);
            $new_name1 = rand() . '.' . $xtencao1[1];
            $destino1 = './imagens_dir/' . $new_name1;
            move_uploaded_file($_FILES['file_bg']['tmp_name'], $destino1);
              
            $data = array(
                    'titulo_ps' => $this->input->post('titulo_bg'),
                    'conteudo_ps' => $this->input->post('conteudo_bg'),
                    'categoria_fk_ps' => $this->input->post('cat_bg'),
                    'img_ps' => $new_name1,
                    'publicado_por_fk_ps' => $this->input->post('id_user')
            );

            return $this->db->insert('post_ps', $data);
              
          }
         public function up_posts($param)
          {
            $xtencao1 = explode('.', $_FILES['file_bg']['name']);
            $new_name1 = rand() . '.' . $xtencao1[1];
            $destino1 = './imagens_dir/' . $new_name1;
            move_uploaded_file($_FILES['file_bg']['tmp_name'], $destino1);
              
            $data = array(
                    'titulo_ps' => $this->input->post('titulo_bg'),
                    'conteudo_ps' => $this->input->post('conteudo_bg'),
                    'categoria_fk_ps' => $this->input->post('cat_bg'),
                    'img_ps' => $new_name1
            );

            $this->db->where('id_ps', $param);
            return $this->db->update('post_ps', $data);
          }
//deletar post
          public function del_post($val)
          {
            return $this->db->delete('post_ps', array('id_ps' => $val));
          }
//criando a cateogoria de eventos
          public function insert_cata_ev()
          {
            $data = array('nome_cat_evento' => $this->input->post('cat_ev'),
                                       'cod_ev ' => $this->input->post('ev_cod')
                               );
            return $this->db->insert('categoria_eventos',$data);
          }
//criando a categoria de eventos
          public function insert_eventos()
          {
            $xtencao1 = explode('.', $_FILES['filefile']['name']);
            $new_name1 = rand() . '.' . $xtencao1[1];
            $destino1 = './imagens_dir/' . $new_name1;
            move_uploaded_file($_FILES['filefile']['tmp_name'], $destino1);
              
            $data = array(
                    'titulo_ev' => $this->input->post('ev_titulo'),
                    'assunto_ev' => $this->input->post('ev_conteudo'),
                    'cat_fk_ev ' => $this->input->post('myselect'),
                    'img_ev' => $new_name1
            );
            return $this->db->insert('tbl_eventos',$data);
          }
//alteração do evento
          public function update_evento($id)
          {
            $xtencao1 = explode('.', $_FILES['filefile']['name']);
            $new_name1 = rand() . '.' . $xtencao1[1];
            $destino1 = './imagens_dir/' . $new_name1;
            move_uploaded_file($_FILES['filefile']['tmp_name'], $destino1);
              
            $data = array(
                    'titulo_ev' => $this->input->post('ev_titulo'),
                    'assunto_ev' => $this->input->post('ev_conteudo'),
                    'cat_fk_ev ' => $this->input->post('myselect'),
                    'img_ev' => $new_name1
            );

          $this->db->where('id_ev', $id);
          return $this->db->update('tbl_eventos', $data);
          }
//deletando evento
          public function del_evento($value)
          {
            
           return $this->db->delete('tbl_eventos', array('id_ev' => $value));
          }
//inserindo as materias
          public function insert_materia()
          {
            $data = array(
                    'materia_mt' => $this->input->post('materia_name'),
                    'codigo_mt ' => $this->input->post('codigo_name')
            );
            return $this->db->insert('tbl_curso_materia',$data);
          }
//alterando materiais
          public function up_materia($v)
          {
              $data = array(
                            'materia_mt' => $this->input->post('materia_name'),
                            'codigo_mt ' => $this->input->post('codigo_name')
            );

          $this->db->where('id_cm', $v);
          return $this->db->update('tbl_curso_materia', $data);
          }
//deltando as materias
          public function del_materia($value)
          {
            return $this->db->delete('tbl_curso_materia', array('id_cm' => $value));
          }
//Categoria de maria e professor
          public function cat_materia_prof()
          {
            $data = array(
                    'nome_cat_pf' => $this->input->post('nome_cat'),
                    'turno_pf' => $this->input->post('option_turno_car'),
                    'fk_prof_pf' => $this->input->post('prof_cat'),
                    'fk_materia_pf ' => $this->input->post('materia_cat')
            );
            return $this->db->insert('tbl_cat_prof_materia',$data);
          }
//categoria de turma
          public function cat_turma()
          {
            $data = array(
              'nome_turma_t' => $this->input->post('nomecat'),
              'codigo_t ' => $this->input->post('idcod')
            );
            return $this->db->insert('tbl_turma',$data);
          }

   public function cat_file()
          {
            
            $xtencao1 = explode('.', $_FILES['supfile']['name']);
            $new_name14 = rand() . '.' . $xtencao1[1];
            $destino1 = './uploads/' . $new_name14;
            move_uploaded_file($_FILES['supfile']['tmp_name'], $destino1);

            $data = array(
                    'cat_fk_f' => $this->input->post('select_turma'),
                    'file_img_f' => $new_name14
            );
            return $this->db->insert('file_agenda',$data);
          }

    public function insert_files($data = array()){
        if(!array_key_exists("created",$data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified",$data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }
//select galeria
    public function imagemdagaleria()
    {
      $this->db->select('*');
      $this->db->from('tbl_galeria');
      $this->db->join('tbl_turma', 'tbl_galeria.id_gl_mg = tbl_turma.id_t');
      return $query = $this->db->get();
    }
//===============================RETORNO DA ÁREA DO ADMINISTRADOR======================
    public function selectAll_colabore()
    {
        $this->db->select('*');
        $this->db->order_by('id_col', 'DESC');
        return $this->db->get('colaborador');
    }
    //====================================galeria de imagem=============================
    public function selectAll_img()
    {
        $this->db->select('*');
        $this->db->order_by('ig_gl', 'DESC');
        return $this->db->get('tbl_galeria');
    }
    public function selectAll_blog()
    {
        $this->db->select('*');
        $this->db->order_by('id_ps', 'DESC');
        return $this->db->get('post_ps');
    }
    public function selectAll_escola()
    {
      $this->db->select('*');
      $this->db->from('informa_escola');
      $this->db->join('user_diretor', 'informa_escola.id_esc = user_diretor.id_dir');
      return $query = $this->db->get()->result();

    }

   public function selectdadosEscola()
    {
    $query = $this->db->get('informa_escola')->result(); 
    return $query;

    }
//painel de agenda escolar
    public function age_escolar()
    {
        $bb = $this->db->get('file_agenda'); 
        return $bb;
    }
//Select blog e categoria
    public function blog_cat()
    {
      $this->db->select('*');
      $this->db->from('post_ps');
      $this->db->join('categoria_blog', 'post_ps.categoria_fk_ps = categoria_blog.id_cat_bg');
      $this->db->distinct();
      $this->db->group_by("categoria_fk_ps");
      return $query = $this->db->get();
    }
//selecionando todos os blogd
    public function todos_blogs()
    {
        $this->db->select('*');
        $this->db->from('post_ps');
        $this->db->join('categoria_blog', 'post_ps.categoria_fk_ps = categoria_blog.id_cat_bg');
        $this->db->order_by('id_ps', 'DESC');
        return $this->db->get();
    }
//select do blog  com link e pegando o id
    public function blogId($id)
    {
      $this->db->select('*');
      $this->db->from('post_ps');
      $this->db->where('id_ps', $id);
      return $query = $this->db->get()->result();
    }
//selecionando o evento
    public function evento_all()
    {
      $this->db->select('*');
      $this->db->from('tbl_eventos');
      $this->db->order_by('id_ev', 'DESC');
      return $query = $this->db->get();
    }
//enviando mensagem
    public function set_msg()
    {
        $data = array(
        'nome_em' => $this->input->post('name_em'),
        'email_em' =>  $this->input->post('email_em'),
        'assunto_em' =>  $this->input->post('subject_em'),
        'telef_em' =>  $this->input->post('telef_em'),
        'texto_em' =>  $this->input->post('message_em')
        );

    return $this->db->insert('tbl_email', $data);
    }
//recebendo recados
    public function recados()
    {
      $this->db->select('*');
      $this->db->from('tbl_email');
      $this->db->order_by('id_em', 'DESC');
      return $query = $this->db->get();
    }

}

//unlink("./uploads/images/$id");