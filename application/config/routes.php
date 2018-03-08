<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['inicio'] = 'welcome';
$route['sair'] = 'welcome/logout';
$route['ensinos'] = 'welcome/turma_ensinos';
$route['agenda-escolar'] = 'welcome/agenda';
$route['galeria-de-fotos'] = 'welcome/galeria';
$route['posts'] = 'welcome/posts_blog';
$route['fale-conosco'] = 'welcome/fale_conosco';
$route['leia-mais/(:any)'] = 'welcome/leia_o_post/$1';
$route['eventos-institucionais'] = 'welcome/eventos_iesfa';
$route['acessando-ao-sistema'] = 'welcome/area_de_login';
$route['recupera-senha'] = 'welcome/area_de_recupera_senha';

//=====================ROTAS DO ADMIN==========================
$route['painel-admin']='painel_admin/home_admin';
$route['meu-perfil'] = 'painel_admin/ver_update_perfil';
$route['cadastro-do-colaborador']='painel_admin/inns_colaborador';
$route['criar-blog'] = 'painel_admin/blog';
$route['criar-eventos'] = 'painel_admin/painel_de_eventos';
$route['galeria-de-imagens'] = 'painel_admin/painel_galeria';
$route['criar-agenda'] = 'painel_admin/painel_agenda_escolar';
$route['criar-materias'] = 'painel_admin/painel_cursos';
$route['recados-avisos'] = 'painel_admin/painel_avisos';
//=====================CRUD DO PAINEL==========================
$route['visualizar/(:any)'] = 'painel_admin/ver_colab/$1';
$route['deletar/(:any)'] = 'painel_admin/delete_col/$1';
$route['visualizar-post/(:any)'] = 'painel_admin/visualizar_post/$1';
$route['deletar-post/(:any)'] = 'painel_admin/deletar_post/$1';
$route['alterar-evento/(:any)'] = 'painel_admin/up_evento/$1';
$route['deletar-evento/(:any)'] = 'painel_admin/del_evento/$1';
$route['alterar-materia/(:any)'] = 'painel_admin/ver_materia/$1';
$route['delte-materia/(:any)'] = 'painel_admin/delte_materia/$1';
$route['cadastro-categoria-mat-prof'] = 'painel_admin/prof_materia';
$route['del_file/(:any)'] = 'painel_admin/delete_file/$1';
$route['cria-galeria'] = 'painel_admin/galeria_file';
//=====================CRUD GALERIA DE IMAGEM==========================
$route['deletar-img/(:any)'] = 'painel_admin/galeria_exclui/$1';
$route['publica-img/(:any)'] = 'painel_admin/galeria_public/$1';
$route['deletar-email/(:any)'] = 'painel_admin/deleta_email/$1';
