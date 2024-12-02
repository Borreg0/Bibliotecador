<?php
class Libro {
    public $libro_id;
    public $titulo;
    public $autor;
    public $estado;

    public function __construct($libro_id, $titulo, $autor, $estado) {
        $this->libro_id = $libro_id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->estado = $estado;
    }
}
?>
