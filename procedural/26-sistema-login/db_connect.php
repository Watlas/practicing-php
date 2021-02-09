<?php

/*
 * Autor     : Viniciusalopes (Vovolinux) <suporte@vovolinux.com.br>
 * Finalidade: Conexão e manipulação de dados do banco
 */

/**
 * Description of Bd
 *
 * @author vovostudio
 */

class BdConn {
    # Atributos
    #BANCO DEBIAN-DEV
    #private static $host = '192.168.15.10';
    #
    #
    #BANCO LOCAWEB
    private static $host = 'localhost';
    private static $banco = 'sistemlogin';
    private static $usuario = 'postgres';
    private static $senha = '171717';
    private static $conexao;


    # Construtor

    function __construct() {
        self::$conexao = self::getConexao();
    }

    # Método que retorna a conexão

    private static function getConexao() {
        try {
            $conexao = new PDO('pgsql:host=' . self::$host . ';dbname=' . self::$banco . '', '' . self::$usuario . '', '' . self::$senha . '');
            $conexao->exec("SET CHARACTER SET utf8"); // Sets encoding UTF-8
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;
        } catch (PDOException $erro) {
            throw new Exception($erro->getMessage());
        }
    }

    # Método para SELECT

    /**
     * @param STRING $query Query que será executada no banco
     * @param ARRAY $parametros Parametros utilizados na $query
     * @throws Exceções PDO
     */
    static function consulta($query, $parametros) {
        try {
            $comando = self::$conexao->prepare($query);
            $comando->execute($parametros);

            $colecao = NULL;
            while ($linha = $comando->fetch(PDO::FETCH_OBJ)) {
                $colecao[] = $linha;
            }
            return $colecao;
        } catch (PDOException $erro) {
            throw new Exception($erro->getMessage() . "<hr> Query utilizada: " . $query);
        }
    }

    # Funcao / Método para INSERT, DELETE e UPDATE
    /**
     *
     * @param type $query STRING com a query que será executada no banco
     * @param type $parametros ARRAY com os parametros utilizados na $query
     * @throws Exceções PDO
     */

    static function executa($query, $parametros) {
        try {
            $comando = self::$conexao->prepare($query);
            $comando->execute($parametros);
        } catch (PDOException $erro) {
            throw new Exception($erro->getMessage() . "<hr> Query utilizada: " . $query);
        }
    }

}