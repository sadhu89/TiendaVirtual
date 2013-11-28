<?php

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Usuario_model', 'u');
    }

    public function index($pag=0) {
        $data['usuarios']= $this->u->get_usuarios(NULL,$pag);
        /************ Configuracion de la paginacion *************************/
        $config['base_url'] = base_url() .'admin/usuario/';
        $config['total_rows'] = $this->u->get_total();
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        /********************************************************************/
        $data['activo'] = 'administrador';
        $data['contenido'] = 'admin/usuario';
        $this->load->view('plantilla_admin/plantilla', $data);
   }
 


    public function eliminar($id) {
        $this->u->eliminar($id);
        $this->index();
    }
    
    public function modificar($id = NULL) {
        $data['activo'] = 'administrador';
        if (!isset($_POST['nombre'])) {
            if ($id === NULL) {
                $data['titulo'] = 'NUEVO ADMINISTRADOR';
            } else {
                $data['titulo'] = 'MODIFICAR ADMINISTRADOR';
                $data['usuarios'] = $this->u->get($id);
            }
            $data['contenido'] = 'admin/modificar_usuario';
            $this->load->view('plantilla_admin/plantilla', $data);
        } else {
            $nombre = $this->input->post('nombre');
            $email = $this->input->post('email');
            $contrasena = $this->input->post('contrasena');
            $confirmar = $this->input->post('confirmar');
            if ($contrasena!=$confirmar) {
                if ($id === NULL) {
                    $data['titulo'] = 'NUEVO ADMINISTRADOR';
                } else {
                    $data['titulo'] = 'MODIFICAR ADMINISTRADOR';
                    $data['usuarios'] = $this->u->get($id);
                }
                $data['error'] = "Las contraseņas no coinciden";
                $data['contenido'] = 'admin/modificar_usuario';
                $this->load->view('plantilla_admin/plantilla', $data);
                return;
            }
            if ($id === NULL) {
                $this->u->insertar($nombre, $email, $contrasena);
            } else {
                $this->u->actualizar($id, $nombre, $email, $contrasena);
            }
            $this->index();
        }
    }

}

