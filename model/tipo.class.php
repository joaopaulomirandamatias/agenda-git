<?php
class tipo extends TRecord
{
    const TABLENAME = 'tipo';
    const PRIMARYKEY = 'id';
    const IDPOLICY = 'max'; // {max, serial}
    
    /**
    * metodo construtor
    */
    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('tipo');
        
    }


}