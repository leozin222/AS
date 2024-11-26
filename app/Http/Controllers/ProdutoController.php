<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produto = Produto::all();
        return view('produto.index', compact('produto'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('produto.create',compact('categorias'));
    }

    public function store(Request $request)
    {
        Produto::create($request->all());
        return redirect('produto')->with('success', 'produto created successfully.');
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.edit', compact('produto'));
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());
        return redirect('produto')->with('success', 'produto updated successfully.');
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect('produto')->with('success', 'produto deleted successfully.');
    }

}
