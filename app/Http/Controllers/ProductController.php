<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
         
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {  
        $categories =  Category::select('id','title')->get();
        $brands =  Brand::select('id','title')->get();

        return view('products.create', compact('categories' , 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            //'productCode' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'model' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);

        //$id_category = $request->input('category_id') ;
        //$request->request->add(['productCode' => 'value']);

        $data = $request->all();
        $data['productCode'] = Product::generateCode();
        Product::create($data);

         return redirect('products')->with('success', 'Product created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories =  Category::select('id','title')->get();
        $brands =  Brand::select('id','title')->get();
        return view('products.edit', compact('product','categories' , 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
    

        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'model' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);

        $product->update($request->all());
        return redirect('products')->with('success','Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Product $product)
    {
        
        $product->delete();
        return redirect('products')
                        ->with('success','Product deleted successfully');

      
    }

    public function search(Request $request){
       
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('brand_id', 'LIKE', "%{$search}%")

            ->get();

        return view('products.index', compact('products'));
    }
}
