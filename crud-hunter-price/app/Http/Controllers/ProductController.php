<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //METODO PARA GUARDAR
        $products = new Product;
     // PARA CORREGIR    $products->id = $request->input('id_product');
        $products->product_name = $request->input('product_name');
        $products->product_picture = $request->input('product_picture');
        $products->product_weight = $request->input('product_weight');
     // PARA CORREGIR   $products->product_picture = $request->input('id_product_category');
        $products->save();
        return redirect()->back();

    }

      public function update(Request $request, $id)
    {
        //
        //METODO PARA EDITAR
        $products = Product::find($id);
    // PARA CORREGIR     $products->id = $request->input('id_product');
        $products->product_name = $request->input('product_name');
        $products->product_picture = $request->input('product_picture');
        $products->product_weight = $request->input('product_weight');
     // PARA CORREGIR    $products->product_picture = $request->input('id_product_category');
        $products->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // CAMBIAR STAUTRS EN VEZ DE ELIMINAR
        $products = Product::find($id);
        $products->delete();
        return redirect()->back();
    }
}
