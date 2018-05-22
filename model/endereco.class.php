<?php
class endereco extends TRecord
{
    const TABLENAME = 'endereco';
    const PRIMARYKEY = 'id';
    const IDPOLICY = 'max'; // {max, serial}
    
    /**
    * metodo construtor
    */
    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('logradouro');
        parent::addAttribute('numero'); 
        parent::addAttribute('bairro');
        parent::addAttribute('cep');
        parent::addAttribute('cidade');
        parent::addAttribute('estado');
    }


}