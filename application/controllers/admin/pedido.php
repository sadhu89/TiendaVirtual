<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pedido
 *
 * @author Carito
 */
class Pedido extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Pedido_model', 'p');
    }

    public function index($pag=0) {
        $data['pedidos']= $this->p->get_pedidos(NULL,$pag);
        /************ Configuracion de la paginacion *************************/
        $config['base_url'] = base_url() .'admin/pedido/';
        $config['total_rows'] = $this->p->get_total();
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        /********************************************************************/
        $data['activo'] = 'pedido';
        $data['contenido'] = 'admin/pedido';
        $data['pag']=$this->pagination->create_links();
        $this->load->view('plantilla_admin/plantilla', $data);
   }
    
   public function do_buscar() {
        $buscar= $this->input->post('buscar');
        if($buscar=='')
            redirect(base_url() . 'admin/pedido');
        else
            redirect(base_url() . 'admin/pedido/buscar/'.urlencode ($buscar).'/0');
    }

    public function buscar() {
        $cad=  urldecode($this->uri->segment(4));
        $data['pedidos'] = $this->p->get_pedidos($cad,$this->uri->segment(5));
        $config['base_url'] = base_url() . 'admin/pedido/buscar/'.$this->uri->segment(4);

        /*         * ********** Configuracion de la paginacion ************************ */
        $config['total_rows'] = $this->p->get_total($cad);
        $config['uri_segment'] = 5;
        $this->pagination->initialize($config);
        /*         * ***************************************************************** */
        $data['pag']=$this->pagination->create_links();
        $data['activo'] = 'pedido';
        $data['contenido'] = 'admin/pedido';
        $this->load->view('plantilla_admin/plantilla',$data);
    }
   
    public function detalle($id) {
        $data['activo'] = 'pedido';
        $data['titulo']='DETALLE PEDIDO';
        $data['pedido'] = $this->p->get($id);
        $data['libro'] = $this->p->itemPedido($id);
        $data['contenido'] = 'admin/detalle_pedido';
        $this->load->view('plantilla_admin/plantilla', $data);
    }
    public function modificar($id){
        $data['activo'] = 'pedido';
        $data['titulo']='MODIFICAR PEDIDO';
        $data['pedido'] = $this->p->get($id);
        $data['estado'] = $this->p->estados();
        $data['libro'] = $this->p->itemPedido($id);
        $data['contenido'] = 'admin/modificar_pedido';
        $this->load->view('plantilla_admin/plantilla', $data);
    }
    public function eliminar($id) {
        $this->p->eliminar($id);
        $this->index();
    }
    public function eliminarItemPedido($id,$idp) {
        $this->p->eliminarItemPedido($id);
        $this->modificar($idp);
    }
    public function actualizar($idp) {
        $this->p->actualizar($idp);
        $this->index();
    }
    


}

?>
