<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Card;
use App\Model\Client;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Exibe todos os cartões.
     */
    public function index()
    {
        $cards = Card::with('client')->latest()->paginate(10);
        return view('_admin.cards.list.index', compact('cards'));
    }

    /**
     * Mostra o formulário de criação de um novo cartão.
     */
    public function create()
    {
        $clients = Client::all();
        return view('_admin.cards.create.index', compact('clients'));
    }

    /**
     * Salva um novo cartão no banco.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_id'   => 'required|exists:clients,id',
            'card_number' => 'required|unique:cards,card_number',
            'card_name'   => 'required|string|max:255',
            'bank'        => 'required|string|max:255',
            'balance'     => 'required|numeric|min:0',
        ]);

        Card::create($request->all());

        return redirect()->route('cards.index')->with('success', 'Cartão criado com sucesso!');
    }

    /**
     * Mostra os detalhes de um cartão.
     */
    public function show(Card $card)
    {
        return view('_admin.cards.details.index', compact('card'));
    }

    /**
     * Mostra o formulário para editar um cartão.
     */
    public function edit(Card $card)
    {
        $clients = Client::all();
        return view('_admin.cards.edit.index', compact('card', 'clients'));
    }

    /**
     * Atualiza os dados de um cartão existente.
     */
    public function update(Request $request, Card $card)
    {
        $request->validate([
            'client_id'   => 'required|exists:clients,id',
            'card_number' => 'required|unique:cards,card_number,' . $card->id,
            'card_name'   => 'required|string|max:255',
            'bank'        => 'required|string|max:255',
            'balance'     => 'required|numeric|min:0',
        ]);

        $card->update($request->all());

        return redirect()->route('cards.index')->with('success', 'Cartão atualizado com sucesso!');
    }

    /**
     * Exclui um cartão.
     */
    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->route('cards.index')->with('success', 'Cartão excluído com sucesso!');
    }
}
