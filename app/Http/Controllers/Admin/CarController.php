<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Brand;
use App\Model\Models;
use App\Model\Color;
use App\Model\Fuel;
use App\Model\Supplier;
use App\Model\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    /**
     * Lista todos os carros
     */
    public function index()

    {
        
        $cars = Car::with(['brand', 'color', 'fuel', 'models'])->get();
        return view('admin.cars.car.index', compact('cars'));
    }


    /**
     * Mostra o formulário de criação
     */
    public function create()
    {
        $brands = Brand::all();
        $models = Models::all();
        $colors = Color::all();
        $fuels  = Fuel::all();
        $suppliers = Supplier::all(); // Adicionando fornecedores para o formulário

        return view('admin.cars.carCreate.index', compact('brands', 'models', 'colors', 'fuels', 'suppliers'));  
    }


    /**
     * Salva um novo carro
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'chassi'            => 'required|string|unique:cars,chassi',
            'category'          => 'required|in:Luxury,Standard,Economy',
            'models_id'         => 'required|exists:models,id',
            'color_id'          => 'required|exists:colors,id',
            'brand_id'          => 'required|exists:brands,id',
            'fuel_id'           => 'required|exists:fuels,id',
            'supplier_id'      => 'nullable|exists:suppliers,id',
            'mileage'          => 'nullable|integer|min:0',
            'number_of_doors'   => 'nullable|integer|min:1|max:10',
            'number_of_seats'  => 'nullable|integer|min:1|max:20',
            'engine'           => 'nullable|string|max:100',
            'transmission'     => 'required|in:Manual,Automático',
            'manufacture_date' => 'required|integer|between:2010,' . now()->year,
            'registration_date' => 'required|date',
            'observations'      => 'nullable|string',
            'license_plate'     => 'required|string|unique:cars,license_plate',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'car_insurance'     => 'nullable|string',
            'car_insurance_upload' => 'nullable|mimes:pdf|max:4096',
            'car_document'      => 'required|string|max:255',  
            'car_document_upload' => 'nullable|mimes:pdf|max:4096',
            'inspection_date'   => 'nullable|date',
            'inspection_document_upload' => 'nullable|mimes:pdf|max:4096',
            'price'             => 'required|numeric|min:0',
            'status'            => 'required|in:available,reserved,rented,maintenance,unavailabe',
            'interior_image' => 'nullable|file|mimes:jpeg,png,jpg|max:4096',
            'lateral_image' => 'nullable|file|mimes:jpeg,png,jpg|max:4096',
            'exterior_image' => 'nullable|file|mimes:jpeg,png,jpg|max:4096',
            'type_car' => 'required|in:sedan,suv,compact,station_wagon,sports_car,minivan,compact_suv,coupe,sports_coupe',

        ]);

        // Diretórios
        $uploadPath = public_path('uploads');

        if ($request->hasFile('image')) {
            $fileName = time() . '_image.' . $request->image->getClientOriginalExtension();
            $request->image->move($uploadPath . '/car/car_images', $fileName);
            $validated['image'] = $fileName;
        }
        
         // Processar uploads de imagens adicionais
        $additionalImageFields = ['interior_image', 'lateral_image', 'exterior_image'];
        foreach ($additionalImageFields as $field) {
            if ($request->hasFile($field)) {
                $fileName = time() . "_{$field}." . $request->file($field)->getClientOriginalExtension();
                $request->file($field)->move($uploadPath . '/car/car_others_image', $fileName);
                $validated[$field] = 'uploads/car/car_others_image/' . $fileName; // Salvar caminho relativo
            }
         }
       
        if ($request->hasFile('car_insurance_upload')) {
            $fileName = time() . '_insurance.' . $request->car_insurance_upload->getClientOriginalExtension();
            $request->car_insurance_upload->move($uploadPath . '/car/insurance_documents', $fileName);
            $validated['car_insurance_upload'] = $fileName;
        }

        if ($request->hasFile('car_document_upload')) {
            $fileName = time() . '_document.' . $request->car_document_upload->getClientOriginalExtension();
            $request->car_document_upload->move($uploadPath . '/car/car_documents', $fileName);
            $validated['car_document_upload'] = $fileName;
        }

        if ($request->hasFile('inspection_document_upload')) {
            $fileName = time() . '_inspection.' . $request->inspection_document_upload->getClientOriginalExtension();
            $request->inspection_document_upload->move($uploadPath . '/car/inspection_documents', $fileName);
            $validated['inspection_document_upload'] = $fileName;
        }

        Car::create($validated);

        return redirect()->route('cars.index')->with('success', 'Carro criado com sucesso!');
    }


    /**
     * Mostra os detalhes de um carro
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        $car->load(['brand', 'models', 'color', 'fuel']);
        return view('admin.cars.carView.index', compact('car'));
    }

    /**
     * Mostra o formulário de edição
     */
    public function edit($id)
{
    $car    = Car::findOrFail($id);
    $brands = Brand::all();
    $models = Models::all();
    $colors = Color::all();
    $fuels  = Fuel::all();
    $suppliers = Supplier::all();

    return view('admin.cars.carEdit.index', compact('car', 'brands', 'models', 'colors', 'fuels', 'suppliers'));
}


    /**
     * Atualiza um carro
     */
    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $validated = $request->validate([
            'category'          => 'required|in:Luxury,Standard,Economy',
            'models_id'         => 'required|exists:models,id',
            'color_id'          => 'required|exists:colors,id',
            'brand_id'          => 'required|exists:brands,id',
            'fuel_id'           => 'required|exists:fuels,id',
            'supplier_id'       => 'nullable|exists:suppliers,id',
            'mileage'           => 'nullable|integer|min:0',
            'number_of_doors'   => 'nullable|integer|min:1|max:10',
            'number_of_seats'   => 'nullable|integer|min:1|max:20',
            'engine'            => 'nullable|string|max:100',
            'transmission'      => 'required|in:Manual,Automático',
            'manufacture_date'  => 'required|integer|between:2010,' . now()->year,
            'registration_date' => 'required|date',
            'observations'      => 'nullable|string',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,pdf|max:4096',
            'car_insurance'     => 'nullable|string',
            'car_insurance_upload' => 'nullable|mimes:pdf',
            'car_document'      => 'required|string|max:255',
            'car_document_upload' => 'nullable|mimes:pdf,doc,docx',
            'inspection_date'   => 'nullable|date',
            'inspection_document_upload' => 'nullable|mimes:pdf,doc,docx',
            'price'             => 'required|numeric|min:0',
            'status'            => 'required|in:available,reserved,rented,maintenance,unavailabe',
            'interior_image' => 'nullable|file|mimes:jpeg,png,jpg|max:4096',
            'lateral_image' => 'nullable|file|mimes:jpeg,png,jpg|max:4096',
            'exterior_image' => 'nullable|file|mimes:jpeg,png,jpg|max:4096',
            'type_car' => 'required|in:sedan,suv,compact,station_wagon,sports_car,minivan,compact_suv,coupe,sports_coupe',

        ]);


        $uploadPath = public_path('uploads');

        if ($request->hasFile('image')) {
            $fileName = time() . '_image.' . $request->image->getClientOriginalExtension();
            $request->image->move($uploadPath . '/car/car_images', $fileName);
            $validated['image'] = $fileName;
        }

        // Processar uploads de imagens adicionais
        $additionalImageFields = ['interior_image', 'lateral_image', 'exterior_image'];
        foreach ($additionalImageFields as $field) {
        if ($request->hasFile($field)) {
            $fileName = time() . "_{$field}." . $request->file($field)->getClientOriginalExtension();
            $request->file($field)->move($uploadPath . '/car/car_others_image', $fileName);
            $validated[$field] = 'uploads/car/car_others_image/' . $fileName;
        }
    }

        if ($request->hasFile('car_insurance_upload')) {
            $fileName = time() . '_insurance.' . $request->car_insurance_upload->getClientOriginalExtension();
            $request->car_insurance_upload->move($uploadPath . '/car/insurance_documents', $fileName);
            $validated['car_insurance_upload'] = $fileName;
        }

        if ($request->hasFile('car_document_upload')) {
            $fileName = time() . '_document.' . $request->car_document_upload->getClientOriginalExtension();
            $request->car_document_upload->move($uploadPath . '/car/car_documents', $fileName);
            $validated['car_document_upload'] = $fileName;
        }

        if ($request->hasFile('inspection_document_upload')) {
            $fileName = time() . '_inspection.' . $request->inspection_document_upload->getClientOriginalExtension();
            $request->inspection_document_upload->move($uploadPath . '/car/inspection_documents', $fileName);
            $validated['inspection_document_upload'] = $fileName;
        }

        $car->update($validated);

        return redirect()->route('cars.index')->with('success', 'Carro atualizado com sucesso!');
    }


    /**
     * Remove um carro
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        if ($car->image) {
            Storage::disk('public')->delete($car->image);
        }

        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Carro removido com sucesso!');
    }
}