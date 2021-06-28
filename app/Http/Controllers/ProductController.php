<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller ;
use App\Http\Requests\FormProductRequest;
use App\Models\Brand;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        $types = Type::all();
        $brands = Brand::all();
        return view('backend.admin.home', ['products' => $products, 'types' => $types, 'brands' => $brands]);

    }

    public function store(FormProductRequest $request)
    {
        $product = new Product();
        $product->fill($request->all());


        if ($request->hasFile('image')) {
            $fileExtension = $request->image->getClientOriginalExtension();
            $fileName = hexdec(uniqid('', false));

            $product->image = "$fileName.$fileExtension";

            $request->file('image')->storeAs('public/img/product/', $product->image);
        }


        $product->save();

        $products = Product::all();
        foreach ($products as $product){
            $product->brands;
            $product->types;
        }
        return response()->json(['products' => $products]);
    }

    public function delete($id)
    {
            DB::beginTransaction();

            $product = Product::find($id);
            $product->delete();
            DB::commit();

            $products = Product::all();
            return response()->json(['products' => $products, 'code' => 200]);

    }


    public function edit($id)
    {
        $product = new Product();
        $types = Type::all();
        $brands = Brand::all();
        return view('backend.admin.edit', ['product' => Product::findOrFail($id), 'types' => $types, 'brands' => $brands]);

    }


    public function update(FormProductRequest $request , $id)
    {
        $product = Product::findOrFail($id);
        $types = Type::all();
        $brands = Brand::all();
        $product->fill($request->all());

        if ($request->hasFile('image')) {
            $fileExtension = $request->image->getClientOriginalExtension();
            $fileName = hexdec(uniqid('', false));

            $product->image = "$fileName.$fileExtension";

            $request->file('image')->storeAs('public/img/product/', $product->image);
        }

        $product->save();

        $products = Product::paginate(5);
        foreach ($products as $product){
            $product->brands;
            $product->types;
        }

        return view('backend.admin.home', ['products' => $products, 'types' => $types, 'brands' => $brands])->with('success', 'Cập nhật thành công!');
    }





    public function t()
    {
        $products = Product::paginate(10);
        $types = Type::all();
        $brands = Brand::all();
        return view('frontend.user.home', ['products' => $products, 'types' => $types, 'brands' => $brands]);
    }
    public function login()
    {
        return view('login');
    }



}

