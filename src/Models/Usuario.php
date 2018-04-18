<?php declare(strict_types = 1);

namespace Example\Models;

class Usuario
{
    protected $id;
    protected $nombre;
    protected $email;
    protected $password;
    protected $tipo;

    public function __construct(array $array = []) {
        $this->id = isset($array['id']) ? $array['id'] : null;
        $this->nombre = isset($array['nombre']) ? $array['nombre'] : null;
        $this->email = isset($array['email']) ? $array['email'] : null;
        $this->password = isset($array['password']) ? $array['password'] : null;
        $this->tipo = isset($array['tipo']) ? $array['tipo'] : null;
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
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }
}

