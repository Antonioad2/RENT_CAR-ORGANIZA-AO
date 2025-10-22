<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Offer;
use Illuminate\Support\Facades\File;

class OfferController extends Controller
{
    /**
     * Exibe a lista de ofertas
     */
    public function index()
    {
        $offers = Offer::orderBy('id', 'desc')->get();
        return view('_admin.offers.list.index', compact('offers'));
    }

    /**
     * Mostra o formulário de criação
     */
    public function create()
    {
        return view('_admin.offers.create.index');
    }

    /**
     * Armazena uma nova oferta no banco de dados
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:1000',
            'subtitle' => 'required|max:10000',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|max:65500',
            'offer_date' => 'required|date',
        ]);

        // Upload da imagem
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/offers'), $imageName);
        }

        Offer::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $imageName,
            'description' => $request->description,
            'offer_date' => $request->offer_date,
        ]);

        return redirect()->route('offers.index')->with('success', 'Oferta criada com sucesso!');
    }

    /**
     * Exibe uma oferta específica
     */
    public function show($id)
    {
        $offer = Offer::findOrFail($id);
        return view('_admin.offers.details.index', compact('offer'));
    }

    /**
     * Mostra o formulário de edição
     */
    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
        return view('_admin.offers.edit.index', compact('offer'));
    }

    /**
     * Atualiza uma oferta existente
     */
    public function update(Request $request, $id)
    {
        $offer = Offer::findOrFail($id);

        $request->validate([
            'title' => 'required|max:1000',
            'subtitle' => 'required|max:10000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|max:65500',
            'offer_date' => 'required|date',
        ]);

        // Atualizar imagem, se enviada
        if ($request->hasFile('image')) {
            if ($offer->image && file_exists(public_path('uploads/offers/' . $offer->image))) {
                unlink(public_path('uploads/offers/' . $offer->image));
            }

            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/offers'), $imageName);
            $offer->image = $imageName;
        }

        $offer->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'offer_date' => $request->offer_date,
            'image' => $offer->image,
        ]);

        return redirect()->route('offers.index')->with('success', 'Oferta atualizada com sucesso!');
    }

    /**
     * Remove (soft delete) uma oferta
     */
    public function destroy($id)
    {
        $offer = Offer::findOrFail($id);
        $offer->delete();

        return redirect()->route('offers.index')->with('success', 'Oferta removida com sucesso!');
    }

    /**
     * Restaura uma oferta removida (Soft Delete)
     */
    public function restore($id)
    {
        $offer = Offer::onlyTrashed()->findOrFail($id);
        $offer->restore();

        return redirect()->route('offers.index')->with('success', 'Oferta restaurada com sucesso!');
    }

    /**
     * Exclui permanentemente uma oferta
     */
    public function forceDelete($id)
    {
        $offer = Offer::onlyTrashed()->findOrFail($id);

        if ($offer->image && file_exists(public_path('uploads/offers/' . $offer->image))) {
            unlink(public_path('uploads/offers/' . $offer->image));
        }

        $offer->forceDelete();

        return redirect()->route('offers.index')->with('success', 'Oferta excluída permanentemente!');
    }
}
