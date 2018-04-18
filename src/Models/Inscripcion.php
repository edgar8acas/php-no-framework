<?php declare(strict_types = 1);

namespace Example\Models;

class Inscripcion 
{
    protected $id;
    protected $idConvocatoria;
    protected $idUsuario;
    protected $tipo;

    public function __construct(array $array = []) {
        $this->id = isset($array['id']) ? $array['id'] : null;
        $this->idUsuario = isset($array['idUsuario']) ? $array['idUsuario'] : null;
        $this->idConvocatoria = isset($array['idConvocatoria']) ? $array['idConvocatoria'] : null;
        $this->tipo = isset($array['tipo']) ? $array['tipo'] : null;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this; #permite encadenar llamadas a la función
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
        return $this; #permite encadenar llamadas a la función
    }

    public function getIdConvocatoria() {
        return $this->idConvocatoria;
    }

    public function setIdConvocatoria($idConvocatoria) {
        $this->idConvocatoria = $idConvocatoria;
        return $this; #permite encadenar llamadas a la función
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this; #permite encadenar llamadas a la función
    }


}