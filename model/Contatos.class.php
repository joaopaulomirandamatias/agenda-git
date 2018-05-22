<?php
class Contatos extends TRecord
{
    const TABLENAME = 'contatos';
    const PRIMARYKEY = 'id';
    const IDPOLICY = 'max'; // {max, serial}
    
    /**
    * metodo construtor
    */
    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('nome');
        parent::addAttribute('numero_contato'); //numero no banco de dados
        parent::addAttribute('id_tipo');
    }


}