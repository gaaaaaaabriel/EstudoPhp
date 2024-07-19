<?php

//quando se crio uma interface, e implemento ela em uma alguma classe,
//é obrigatorio eu implementar as funções que essa interface tem.

interface Crud{
    public function create();
    public function read();
    public function updade();
    public function delete();

}

class Noticia implements Crud{

    public function create(){

    }
    public function read(){

    }
    public function updade(){

    }
    public function delete(){

    }

}