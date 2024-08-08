<?php
class usuario{

    private $db;
    public function __construct(){
        $this->db = new Base;
    }

    public function verificarUsuario($datosUsuario){
        $this->db->query('SELECT * FROM usuarios WHERE usuario = :user');
        $this->db->bind(':user', $datosUsuario['usuario']);
        $fila = $this->db->register();
        if($this->db->rowCount()){
            return false;
        }else{
            return true;
        }
    }

    public function register($datosUsuario){
        $this->db->query('INSERT INTO usuarios (idPrivilegio, correo, usuario, contrasena) VALUES (:privilegio, :correo, :usuario, :contrasena)');
        $this->db->bind(':privilegio', $datosUsuario['privilegios']);
        $this->db->bind(':correo', $datosUsuario['email']);
        $this->db->bind(':usuario', $datosUsuario['usuario']);
        $this->db->bind(':contrasena', $datosUsuario['contrasena']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
        

    }
}
?>