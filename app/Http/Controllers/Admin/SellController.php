<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Sell;
use Illuminate\Support\Facades\File;

class SellController extends Controller
{
    /**
     * Exibe a lista de vendas
     */
    public function index()
    {
        $sells = Sell::orderBy('id', 'desc')->get();
        return view('_admin.sells.list.index', compact('sells'));
    }

    /**
     * Mostra o formulário de criação
     */
    public function create()
    {
        return view('_admin.sells.create.index');
    }

    /**
     * Armazena uma nova venda no banco de dados
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:65500',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'number' => 'nullable|string|max:50',
            'whatsapp' => 'nullable|string|max:20',
        ]);

        // Upload da imagem
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/sells'), $imageName);
        }

        Sell::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
            'number' => $request->number,
            'whatsapp' => $request->whatsapp,
        ]);

        return redirect()->route('sells.index')->with('success', 'Venda criada com sucesso!');
    }

    /**
     * Exibe uma venda específica
     */
    public function show($id)
    {
        $sell = Sell::findOrFail($id);
        return view('_admin.sells.details.index', compact('sell'));
    }

    /**
     * Mostra o formulário de edição
     */
    public function edit($id)
    {
        $sell = Sell::findOrFail($id);
        return view('_admin.sells.edit.index', compact('sell'));
    }

    /**
     * Atualiza uma venda existente
     */
    public function update(Request $request, $id)
    {
        $sell = Sell::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:65500',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'number' => 'nullable|string|max:50',
            'whatsapp' => 'nullable|string|max:20',
        ]);

        // Atualizar imagem, se enviada
        if ($request->hasFile('image')) {
            // Remove a imagem antiga
            if ($sell->image && File::exists(public_path('uploads/sells/' . $sell->image))) {
                File::delete(public_path('uploads/sells/' . $sell->image));
            }

            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/sells'), $imageName);
            $sell->image = $imageName;
        }

        $sell->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'number' => $request->number,
            'whatsapp' => $request->whatsapp,
            'image' => $sell->image ?? $sell->getOriginal('image'), // mantém a atual se não houver nova
        ]);

        return redirect()->route('sells.index')->with('success', 'Venda atualizada com sucesso!');
    }

    /**
     * Remove (soft delete) uma venda
     */
    public function destroy($id)
    {
        $sell = Sell::findOrFail($id);
        $sell->delete();

        return redirect()->route('sells.index')->with('success', 'Venda removida com sucesso!');
    }

    /**
     * Restaura uma venda removida (Soft Delete)
     */
    public function restore($id)
    {
        $sell = Sell::onlyTrashed()->findOrFail($id);
        $sell->restore();

        return redirect()->route('sells.index')->with('success', 'Venda restaurada com sucesso!');
    }

    /**
     * Exclui permanentemente uma venda
     */
    public function forceDelete($id)
    {
        $sell = Sell::onlyTrashed()->findOrFail($id);

        // Remove a imagem do disco
        if ($sell->image && File::exists(public_path('uploads/sells/' . $sell->image))) {
            File::delete(public_path('uploads/sells/' . $sell->image));
        }

        $sell->forceDelete();

        return redirect()->route('sells.index')->with('success', 'Venda excluída permanentemente!');
    }
}