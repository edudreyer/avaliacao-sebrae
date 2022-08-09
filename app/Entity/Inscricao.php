<?php
namespace App\Entity;
use \App\Db\Database;
use \PDO;

class Inscricao {
    public $codigo;
    public $codigo_palestra;
    public $nome;
    public $cpf;
    public $data_nascimento;
    public $telefone;
    public $cep;
    public $logradouro;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $uf;


    public function cadastrar() {
        $obDatabase = new Database('inscricoes');
        $this->id = $obDatabase->insert([
            'codigo_palestra' => $this->codigo_palestra,
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'data_nascimento' => $this->data_nascimento,
            'telefone' => $this->telefone,
            'cep' => $this->cep,
            'logradouro' => $this->logradouro,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'uf' => $this->uf,
        ]);

        //RETORNA SUCESSO
        return true;
    }   
    
}