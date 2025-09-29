<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Brand; // Import the Brand model


class BrandController extends Controller
{
    //
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.brandCreate.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'description' => 'nullable|string|max:1000',
            'date' => 'nullable|date',
        ]);

        // Diretórios
        $uploadPath = public_path('uploads');

        if ($request->hasFile('image')) {
            $fileName = time() . '_image.' . $request->image->getClientOriginalExtension();
            $request->image->move($uploadPath . '/brand/brand_logo', $fileName);
            $validated['image'] = $fileName;
        }

        Brand::create($validated);

        return redirect()->route('brands.index')->with('success', 'Marca criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        $brand = Brand::findOrFail($brand->id);
        return view('admin.brands.brandView.index', compact('brand')); // Caminho diferente para view única
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function edit(Brand $brand)
    {
        //
        return view('admin.brands.brandEdit.index', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $brand = Brand::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'description' => 'nullable|string|max:1000',
            'date' => 'nullable|date',
        ]);

        // Diretórios
        $uploadPath = public_path('uploads');

        if ($request->hasFile('image')) {
            $fileName = time() . '_image.' . $request->image->getClientOriginalExtension();
            $request->image->move($uploadPath . '/brand/brand_logo', $fileName);
            $validated['image'] = $fileName;
        }

        $brand->update([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('brands.index')->with('success', 'Marca atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Marca removida com sucesso!');
        //

    }
}
