<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Client;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    //
    public function index()
    {
        $clients = Client::all(); // <- Aqui
        return view('admin.clients.client.index', compact('clients'));
    }


    public function create()
    {
        return view('admin.clients.clientCreate.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'                   => 'required|string|max:255|unique:clients,name',
            'email'                  => 'required|email|unique:clients,email',
            'phone'                  => 'nullable|string|max:20',
            'bi'                     => 'nullable|string|max:50',
            'bi_upload'              => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'driver_license'         => 'nullable|string|max:20|unique:clients,driver_license',
            'driver_license_upload'  => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'address'                => 'nullable|string|max:255',
        ]);

        // Diretórios
        $uploadPath = public_path('uploads');

        if ($request->hasFile('driver_license_upload')) {
            $fileName = time() . '_document.' . $request->driver_license_upload->getClientOriginalExtension();
            $request->driver_license_upload->move($uploadPath . '/client/driver_license_upload', $fileName);
            $validated['driver_license_upload'] = $fileName;
        }

        if ($request->hasFile('bi_upload')) {
            $fileName = time() . '_document.' . $request->bi_upload->getClientOriginalExtension();
            $request->bi_upload->move($uploadPath . '/client/client_bi_upload', $fileName);
            $validated['bi_upload'] = $fileName;
        }

        Client::create($validated);

        return redirect()->route('clients.index')->with('success', 'Fornecedor criado com sucesso!');
    }

    public function show($id)
    {
        $client = Client::find($id); 
        return view('admin.clients.clientView.index', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.clients.clientEdit.index', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $validated = $request->validate([
            'name'                   => 'required|string|max:255|unique:clients,name,' . $client->id,
            'email'                  => 'required|email|unique:clients,email,' . $client->id,
            'phone'                  => 'nullable|string|max:20',
            'bi'                     => 'nullable|string|max:50',
            'bi_upload'              => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'driver_license'         => 'nullable|string|max:20|unique:clients,driver_license,' . $client->id,
            'driver_license_upload'  => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'address'                => 'nullable|string|max:255',
        ]);

        // Diretórios
        $uploadPath = public_path('uploads');

        if ($request->hasFile('driver_license_upload')) {
            $fileName = time() . '_document.' . $request->driver_license_upload->getClientOriginalExtension();
            $request->driver_license_upload->move($uploadPath . '/client/driver_license_upload', $fileName);
            $validated['driver_license_upload'] = $fileName;
        }

        if ($request->hasFile('bi_upload')) {
            $fileName = time() . '_document.' . $request->bi_upload->getClientOriginalExtension();
            $request->bi_upload->move($uploadPath . '/client/client_bi_upload', $fileName);
            $validated['bi_upload'] = $fileName;
        }

        $client->update($validated);

        return redirect()->route('clients.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);

        // Apagar arquivos
        if ($client->driver_license_upload) {
            Storage::disk('public')->delete($client->driver_license_upload);
        }
        if ($client->bi_upload) {
            Storage::disk('public')->delete($client->bi_upload);
        }

        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente removido com sucesso!');
    }
}
