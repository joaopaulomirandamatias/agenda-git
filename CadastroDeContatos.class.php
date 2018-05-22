<?php

class CadastroDeContatos extends TPage
{
    private $form;
    private $tabela;
    function __construct()
    {
        parent::__construct();        
        $this->form = new TForm();
        $this->form->class = 'tform';
        $this->tabela = new TTable;
        $id = new TEntry('id');
        $id->setEditable(FALSE);
        $nome = new TEntry('nome');
        $tipo = new TDBCombo('id_tipo', 'agenda', 'tipo', 'id', 'tipo'); 
        $numero_contato = new TEntry('numero_contato'); //Adicionando o número
        $this->tabela->addRowSet(new TLabel('Id: '),$id);       
        $this->tabela->addRowSet(new TLabel('Nome: '),$nome);
        $this->tabela->addRowSet(new TLabel('Tipo: '),$tipo);
        $this->tabela->addRowSet(new TLabel('Contato: '),$numero_contato); //Criando a Label do número         
       //Cadastro do endereco
        $logradouro = new TEntry('logradouro');
        $this->tabela->addRowSet(new TLabel('Logradouro: '),$logradouro);
        $numero = new TEntry('numero');
        $this->tabela->addRowSet(new TLabel('Numero: '),$numero);
        $bairro = new TEntry('bairro');
        $this->tabela->addRowSet(new TLabel('Bairro: '),$bairro);
        $cep = new TEntry('cep');
        $this->tabela->addRowSet(new TLabel('CEP: '),$cep);
        $cidade = new TEntry('cidade');
        $this->tabela->addRowSet(new TLabel('Cidade: '),$cidade);
        $estado = new TEntry('estado');
        $this->tabela->addRowSet(new TLabel('Estado: '),$estado);
       
       
        $butao1 = new TButton('Salvar');
        $butao1->setImage('fa:fas fa-save blue size 30px');
        $butao1->setLabel('Salvar');
        $butao2 = new TButton('Limpar');
        $butao2->setLabel('Limpar');
        
        $butao1->setAction(new TAction(array($this, 'onSalvar')));
        $this->tabela->addRowSet($butao1, $butao2);
        $this->form->setFields(array($id, $nome, $numero_contato, $logradouro, $numero,  $bairro, $cep, $cidade, $estado, $butao1, $tipo, $butao2)); //Numero adicionado ao array
                 
        $this->form->add($this->tabela);
                     
        parent::add($this->form);    
              
                     
    }
   
    
    public function onSalvar()
    {
     try{
           TTransaction::open('agenda');
           $dados = $this->form->getData('Contatos','endereco'); //pessoa
           $dados->store();
           new TMessage('info','Dados armazenados com sucesso!');
           $this->form->setData($dados);
                      
           TTransaction::close();
        
            }catch(Exception $e)
            {
                new TMessage('erro', $e->getMessage());
    
    
         
         
    }
    
   }
}