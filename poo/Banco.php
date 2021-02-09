<?php


abstract class Banco
{
    protected $saldo;
    protected $limite;
    protected $juros;

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }

    /**
     * @return mixed
     */
    public function getLimite()
    {
        return $this->limite;
    }

    /**
     * @param mixed $limite
     */
    public function setLimite($limite): void
    {
        $this->limite = $limite;
    }

    /**
     * @return mixed
     */
    public function getJuros()
    {
        return $this->juros;
    }

    /**
     * @param mixed $juros
     */
    public function setJuros($juros): void
    {
        $this->juros = $juros;
    }

    abstract protected function Sacar();

}
class Itau extends Banco{



    protected function Sacar()
    {
        // TODO: Implement Sacar() method.
    }
}
class Nu extends Banco{

    protected function Sacar()
    {
        // TODO: Implement Sacar() method.
    }
}