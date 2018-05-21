<?php

class Contatos extends TPage
{
    private $form;
    private $tabela;
    function __construct()
    {
        parent::__construct();
        
        $this->form = new TForm();
        $this->form->style = 'tform';
        $this->tabela = new TTable;
        $nome = new TEntry('nome');
        $Lnome = new TLabel('Nome:');
        $this->tabela->addRowSet($Lnome,$nome);
        
        $this->form->add($this->tabela);
                       
        parent::add($this->form);    
        
              
                     
    }
    
}
