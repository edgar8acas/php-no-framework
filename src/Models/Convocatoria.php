<?php declare(strict_types = 1);

namespace Example\Models;

class Convocatoria
{
    protected $id;
    protected $nombre;
    protected $texto;

    public function __construct(array $array = []) {
        $this->id = isset($array['id']) ? $array['id'] : null;
        $this->nombre = isset($array['nombre']) ? $array['nombre'] : null;
        $this->texto = isset($array['texto']) ? $array['texto'] : null;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this; #permite encadenar llamadas a la función
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this; #permite encadenar llamadas a la función
    }

    public function getTexto() {
        return $this->texto;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
        return $this; #permite encadenar llamadas a la función
    }


}