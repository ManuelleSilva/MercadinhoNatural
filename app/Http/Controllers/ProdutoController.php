<?php
namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
            'descricao' => 'nullable|string',
        ]);

        Produto::create($request->all());

        return redirect()->route('produtos.create')->with('success', 'Produto cadastrado com sucesso!');
    }
}
