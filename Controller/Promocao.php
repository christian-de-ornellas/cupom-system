<?php

/**
 * Description of Promocao
 *
 * HTML5 & PHP - ELETRONIC -
  ANALISTA DESENVOLVEDOR  -CHRISTIAN DE ORNELLAS POSSIDONIO now
 */
require_once'Crud.php';

class Promocao extends Crud {

    protected $table = 'promocoes';
    private $promocao;
    private $data;
    private $hora;

    function getPromocao() {
        return $this->promocao;
    }

    function getData() {
        return $this->data;
    }

    function getHora() {
        return $this->hora;
    }

    function setPromocao($promocao) {
        $this->promocao = $promocao;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

        public function insert() {

        $sql = "INSERT INTO $this->table (promocao,data,hora)values(:promocao, :data, :hora)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':promocao', $this->promocao);
        $stmt->bindParam(':data', $this->data);
        $stmt->bindParam(':hora', $this->hora);
        return $stmt->execute();
    }

    public function update($id) {

        $sql = " UPDATE $this->table SET promocao = :promocao";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':promocao', $this->promocao);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}
