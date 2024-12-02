<?php
class Usuario {
    public $id;
    public $nombre;
    public $email;
    public $contrasena;
    public $admin;

    public function __construct($id, $nombre, $email, $contrasena, $admin) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->contrasena = $contrasena;
        $this->admin = $admin;
    }
}
?>
