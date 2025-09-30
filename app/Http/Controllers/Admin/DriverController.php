<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Lista todos os motoristas
     */
    public function index()
    {
        $drivers = Driver::latest()->paginate(10); 
        return view('_admin.drivers.list.index', compact('drivers'));
    }

    /**
     * Mostra o formulário para criar motorista
     */
    public function create()
    {
        return view('_admin.drivers.create.index');
    }

    /**
     * Salva um novo motorista
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name'              => 'required|string|max:255|unique:suppliers,name',
            'document_identification' => 'required|string|max:50|unique:drivers,document_identification',
            'id_image'               => 'required|file|mimes:pdf,doc,jpg,jpeg,png|max:4096',
            'license_image'          => 'required|file|mimes:pdf,doc,jpg,jpeg,png|max:4096',
            'license_type'           => 'required|in: Ligeiro Profissional,Pesado Profissional',
            'driver_type'           => 'required|in:Motorista Local,Motorista Interprovincial',
            'license_expiry_date'    => 'required|date',
            'phone_number'           => 'required|string|max:20',
            'gender'                 => 'nullable|in:male,female',
            'email'                  => 'required|email|unique:suppliers,email',
            'experience_years'       => 'nullable|integer|min:0',
            'address'                => 'nullable|string|max:255',
            'status'                 => 'nullable|in:active,inactive',
            'daily_price'            => 'required|numeric|min:0',
        ]);

        // Diretórios
        $uploadPath = public_path('uploads');

        if ($request->hasFile('document_identification')) {
            $fileName = time() . '_document.' . $request->bi_upload->getClientOriginalExtension();
            $request->bi_upload->move($uploadPath . '/driver/driver_document_identification', $fileName);
            $validated['document_identification'] = $fileName;
        }

        if ($request->hasFile('id_image')) {
            $fileName = time() . '_image.' . $request->id_image->getClientOriginalExtension();
            $request->id_image->move($uploadPath . '/driver/driver_id_image', $fileName);
            $validated['id_image'] = $fileName;
        }

        if ($request->hasFile('license_image')) {
            $fileName = time() . '_image.' . $request->license_image->getClientOriginalExtension();
            $request->license_image->move($uploadPath . '/driver/driver_license_image', $fileName);
            $validated['license_image'] = $fileName;
        }

        Driver::create($validated);

        return redirect()->route('drivers.index')->with('success', 'Motorista cadastrado com sucesso!');
    }

    /**
     * Mostra um motorista específico
     */
    public function show(Driver $driver)
    {
        return view('_admin.drivers.details.index', compact('driver'));
    }

    /**
     * Mostra formulário para editar motorista
     */
    public function edit(Driver $driver)
    {
        return view('_admin.drivers.edit.index', compact('driver'));
    }

    /**
     * Atualiza motorista
     */
    public function update(Request $request, Driver $driver)
    {
        $validated = $request->validate([
            'full_name'              => 'required|string|max:255|unique:suppliers,name,' . $driver->id,
            'document_identification' => 'required|string|max:50|unique:drivers,document_identification,' . $driver->id,
            'id_image'               => 'nullable|file|mimes:pdf,doc,jpg,jpeg,png|max:4096',
            'license_image'          => 'nullable|file|mimes:pdf,doc,jpg,jpeg,png|max:4096',
            'license_type'           => 'required|in: Ligeiro Profissional,Pesado Profissional',
            'driver_type'           => 'required|in:Motorista Local,Motorista Interprovincial',
            'license_expiry_date'    => 'required|date',
            'phone_number'           => 'required|string|max:20',
            'gender'                 => 'nullable|in:male,female',
            'email'                  => 'required|email|unique:suppliers,email',
            'experience_years'       => 'nullable|integer|min:0',
            'address'                => 'nullable|string|max:255',
            'status'                 => 'nullable|in:active,inactive',
            'daily_price'            => 'required|numeric|min:0',
        ]);

        // Diretórios
        $uploadPath = public_path('uploads');

        if ($request->hasFile('document_identification')) {
            $fileName = time() . '_document.' . $request->bi_upload->getClientOriginalExtension();
            $request->bi_upload->move($uploadPath . '/driver/driver_document_identification', $fileName);
            $validated['document_identification'] = $fileName;
        }

        if ($request->hasFile('id_image')) {
            $fileName = time() . '_image.' . $request->id_image->getClientOriginalExtension();
            $request->id_image->move($uploadPath . '/driver/driver_id_image', $fileName);
            $validated['id_image'] = $fileName;
        }

        if ($request->hasFile('license_image')) {
            $fileName = time() . '_image.' . $request->license_image->getClientOriginalExtension();
            $request->license_image->move($uploadPath . '/driver/driver_license_image', $fileName);
            $validated['license_image'] = $fileName;
        }

        $driver->update($validated);

        return redirect()->route('drivers.index')->with('success', 'Motorista atualizado com sucesso!');
    }

    /**
     * Elimina motorista (Soft Delete)
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();
        return redirect()->route('drivers.index')->with('success', 'Motorista removido com sucesso!');
    }
}
