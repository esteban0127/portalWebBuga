<?php

namespace FSstudio\model\base;

use FStudio\fsmodel as model;
use FStudio\myConfig as config;



/**
 * Description of pqrsfBaseTable
 *
 * @author Usuario
 */
class pqrsfBaseTable extends model{
      const ID = 'pqrsf_id';
    const USUARIO_ID= 'usu_id';
    const ESTADO_ID= 'est_id';
    const MENSAJE = 'pqrsf_mensaje';
    const CREATED = 'pqrsf_created_at';
    const UPDATE = 'pqrsf_update_at';
    const DELETE = 'pqrsf_delete_at';
    
       /** 
     * Configuracion del sistema
     * @var config
     */

    protected $config;
    private $pqrsf_id;
    private $usu_id;
    private $est_id;
    private $pqrsf_mensaje;
    private $pqrsf_cretaed_at;
    private $pqsrf_update_at;
    private $pqrsf_delete_at;
    
    
       public function _construct(config $config, $id = null, $mensaje = null, $update = null, $delete = null, $created =null) {
        $this->config = $config;
        $this->pqrsf_id = $id;
        $this->pqrsf_mensaje = $mensaje;
        $this->pqsrf_update_at = $update;
        $this->pqrsf_delete_at = $delete;
        $this->pqrsf_cretaed_at = $created;
    
}
    
   
    
    public function getId(){
        return $this->pqsrf_id;
    }
    
    public function getUsu(){
        return $this->usu_id;
    }
    
    public function getEst(){
        return $this->est_id;
    }
    
    public function getMensaje(){
        return $this->pqrsf_mensaje;
    }
    
    public function getCreated(){
        return $this->pqsrf_created_at;
    }
    
    public function getUpdate_at(){
        return $this->pqsrf_update_at;
    }
    
    public function getDelete_at(){
        return $this->pqsrf_delete_at;
    }
    
      public function setId($id){
       $this->id = $id;
    }
    
      public function setUsuId($usu_id){
       $this->Usu_id = $usu_id;
    }
      public function setEstId($est_id){
       $this->est_id = $est_id;
    }
      public function setPqrsfMensaje($pqrsf_mensaje){
       $this->pqsrf_mensaje = $pqrsf_mensaje;
    }
      public function setCreatedAt($pqrsf_created_at){
       $this->created_at = $pqrsf_created_at;
    }
      public function setUpdateAt($pqrsf_update_at){
       $this->update_at = $pqrsf_update_at;
    }
      public function setDeleteAt($pqrsf_delete_at){
       $this->delete_at = $pqrsf_delete_at;
    }
}


