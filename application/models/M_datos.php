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
      $sql = "SELECT c.Id,
                     p.Nombres as pais1, 
                     P.img as img1, 
                     pai.Nombres as pais2, 
                     pai.img AS img2,
                     DATE_FORMAT(c.fecha, '%d/%m/%Y') AS fecha,
                     DATE_FORMAT(c.fecha, '%d %M, %Y - %H : %i') AS fecha_juego,
                     DATE_FORMAT(c.fecha, '%d/%m/%Y %H:%i') AS fecha_verif,
                     c.grupo,
                     c.res_pais
                FROM contrincantes c
          INNER JOIN paises p
                  ON p.Id = c.id_pais1
          INNER JOIN paises pai
                  ON pai.Id = c.id_pais2";
      $result = $this->db->query($sql);
      return $result->result();
    }
    function getDatosAnotaciones($name_user){
      $sql = "SELECT a.* 
                FROM anotaciones a
               WHERE a.name_user = ?";
      $result = $this->db->query($sql, array($name_user));
      return $result->result();
    }
    function getEliminatorias(){
      $sql = "SELECT c.Id,
                     p.e_nombres as pais1, 
                     P.e_img as img1, 
                     pai.e_nombres as pais2, 
                     pai.e_img AS img2,
                     DATE_FORMAT(c.e_fecha, '%d/%m/%Y') AS fecha,
                     DATE_FORMAT(c.e_fecha, '%d %M, %Y - %H : %i') AS fecha_juego,
                     DATE_FORMAT(c.e_fecha, '%d/%m/%Y %H:%i') AS fecha_verif,
                     c.e_grupo,
                     c.res_e,
                     c.estadio
                FROM eliminatorias c
          INNER JOIN pais_elim p
                  ON p.Id = c.e_pais1
          INNER JOIN pais_elim pai
                  ON pai.Id = c.e_pais2";
      $result = $this->db->query($sql);
      return $result->result();
    }
    function getDatosAnotacionesElim($name_user){
      $sql = "SELECT a.* 
                FROM anotaciones_elim a
               WHERE a.user_e = ?";
      $result = $this->db->query($sql, array($name_user));
      return $result->result();
    }
    function getSumUser($name_user){
        $sql = "SELECT SUM(a.puntos) AS puntos
                  FROM anotaciones a
                 WHERE name_user = ?";
        $result = $this->db->query($sql, array($name_user));
        return $result->result();
      }
      function getRankingPuntos(){
        $sql = "SELECT * FROM personas";
        $result = $this->db->query($sql);
        return $result->result();
      }
      function getExistentes($nombre, $email){
        $sql = "SELECT count(p.Nombre) AS existe
                  FROM personas p
                 WHERE p.Nombre LIKE '%".$nombre."%'
                   AND p.Correo LIKE '".$email."'";
        $result = $this->db->query($sql);
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