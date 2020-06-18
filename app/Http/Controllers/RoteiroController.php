<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoteiroController extends Controller
{

    public function index()
    {
        $roteiros = ['Roteiro 01', 'Roteiro 02', 'Roteiro 03', 'Roteiro 04', 'Roteiro 05'];
        return  $roteiros;
    }
    public function show($id)
    {
        return "Listando um Roteiro de Viagem: {$id}";
    }

    public function create()
    {
        return 'Criando Roteiros de Viagens';
    }

    public function edit($id)
    {
        return "Formulário para editar o Roteiro de Viagens: {$id}";
    }

    public function store()
    {
        return 'Exibindo Roteiros de Viagens';
    }    

    public function update($id)
    {
        return "Editando o Roteiro de Viagens: {$id}";
    }

    public function destroy($id)
    {
        return "Excluindo Roteiros de Viagens: {$id}";
    }

    
    

}