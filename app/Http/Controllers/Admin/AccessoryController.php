<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Accessory;
use Illuminate\Support\Facades\File;

class AccessoryController extends Controller
{
    /**
     * Exibe a lista de acessórios
     */
    public function index()
    {
        $accessories = Accessory::orderBy('id', 'desc')->get();
        return view('_admin.accessories.list.index', compact('accessories'));
    }

    /**
     * Mostra o formulário de criação
     */
    public function create()
    {
        return view('_admin.accessories.create.index');
    }

    /**
     * Armazena um novo acessório no banco de dados
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|max:255',
            'description' => 'nullable|max:65500',
            'price'       => 'required|numeric|min:0',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'number'      => 'nullable|max:255',
            'whatsapp'    => 'nullable|max:20',
        ]);

        // Upload da imagem
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/accessories'), $imageName);
        }

        Accessory::create([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'image'       => $imageName,
            'number'      => $request->number,
            'whatsapp'    => $request->whatsapp,
        ]);

        return redirect()->route('accessories.index')->with('success', 'Acessório criado com sucesso!');
    }

    /**
     * Exibe um acessório específico
     */
    public function show($id)
    {
        $accessory = Accessory::findOrFail($id);
        return view('_admin.accessories.details.index', compact('accessory'));
    }

    /**
     * Mostra o formulário de edição
     */
    public function edit($id)
    {
        $accessory = Accessory::findOrFail($id);
        return view('_admin.accessories.edit.index', compact('accessory'));
    }

    /**
     * Atualiza um acessório existente
     */
    public function update(Request $request, $id)
    {
        $accessory = Accessory::findOrFail($id);

        $request->validate([
            'name'        => 'required|max:255',
            'description' => 'nullable|max:65500',
            'price'       => 'required|numeric|min:0',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'number'      => 'nullable|max:255',
            'whatsapp'    => 'nullable|max:20',
        ]);

        // Atualizar imagem se houver nova
        if ($request->hasFile('image')) {
            if ($accessory->image && file_exists(public_path('uploads/accessories/' . $accessory->image))) {
                unlink(public_path('uploads/accessories/' . $accessory->image));
            }

            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/accessories'), $imageName);
            $accessory->image = $imageName;
        }

        $accessory->update([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'image'       => $accessory->image,
            'number'      => $request->number,
            'whatsapp'    => $request->whatsapp,
        ]);

        return redirect()->route('accessories.index')->with('success', 'Acessório atualizado com sucesso!');
    }

    /**
     * Remove (soft delete) um acessório
     */
    public function destroy($id)
    {
        $accessory = Accessory::findOrFail($id);
        $accessory->delete();

        return redirect()->route('accessories.index')->with('success', 'Acessório removido com sucesso!');
    }

    /**
     * Restaura um acessório removido (Soft Delete)
     */
    public function restore($id)
    {
        $accessory = Accessory::onlyTrashed()->findOrFail($id);
        $accessory->restore();

        return redirect()->route('accessories.index')->with('success', 'Acessório restaurado com sucesso!');
    }

    /**
     * Exclui permanentemente um acessório
     */
    public function forceDelete($id)
    {
        $accessory = Accessory::onlyTrashed()->findOrFail($id);

        if ($accessory->image && file_exists(public_path('uploads/accessories/' . $accessory->image))) {
            unlink(public_path('uploads/accessories/' . $accessory->image));
        }

        $accessory->forceDelete();

        return redirect()->route('accessories.index')->with('success', 'Acessório excluído permanentemente!');
    }
}
