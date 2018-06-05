<?php

class M_datos extends  CI_Model{
    function __construct(){
        parent::__construct();
    }
    function insertarDatos($arrayInsert, $tabla){
      $this->db->insert($tabla, $arrayInsert);
      $sol = $this->db->insert_id();
      if($this->db->affected_rows() != 1){
          throw new Exception('Error al insertar');
          $data['error'] = EXIT_ERROR;
      }
      return array("error" => EXIT_SUCCESS, "msj" => MSJ_INS, "Id" => $sol);
    }
    function updateDatos($arrayData, $id, $tabla){
      $this->db->where('Id'  , $id);
      $this->db->update($tabla, $arrayData);
      if ($this->db->trans_status() == false){
          throw new Exception('No se pudo actualizar los datos');
      }
      return array('error' => EXIT_SUCCESS,'msj' => MSJ_UPT);
    }
    /*function deleteDatos($id_dato){
      $sql = "DELETE FROM cards WHERE Id = ?";
      $result = $this->db->query($sql, array($id_dato));
      return $result;
    }*/
    function getVersus(){
      $sql = "SELECT p.Nombres as pais1, 
                     P.img as img1, 
                     pai.Nombres as pais2, 
                     pai.img AS img2
                FROM contrincantes c
          INNER JOIN paises p
                  ON p.Id = c.id_pais1
          INNER JOIN paises pai
                  ON pai.Id = c.id_pais2";
      $result = $this->db->query($sql);
      return $result->result();
    }
    function getDatosPaises($id_pais){
      $sql = "SELECT p.* 
                FROM paises p
               WHERE Id = ?";
      $result = $this->db->query($sql, array($id_pais));
      return $result->result();
    }
    /*function getIdByNameCate($cate){
      $sql = "SELECT c.Id
                FROM categorias c
               WHERE (c.Nombre LIKE '%".$cate."%')";
      $result = $this->db->query($sql);
      return $result->row()->Id;
    }*/
}