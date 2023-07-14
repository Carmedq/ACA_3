<?php
class Libro {
    private $titulo;
    private $autor;
    private $genero;
    private $anioPublicacion;

    public function __construct($titulo, $autor, $genero, $anioPublicacion) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->anioPublicacion = $anioPublicacion;
    }

    // Métodos getters y setters

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function getAnioPublicacion() {
        return $this->anioPublicacion;
    }

    public function setAnioPublicacion($anioPublicacion) {
        $this->anioPublicacion = $anioPublicacion;
    }
}
