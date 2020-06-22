<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Http\Requests\ProductRequest;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    use UploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('category')
            ->whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = trim($request->name);
        $product->description = trim($request->description);
        if($request->short_description) {
            $product->short_description = trim($request->short_description);
        }
        $product->price = trim((int)$request->price);
        $product->category_id = trim($request->category);

        if($request->has('file')) {
            dd($request->file('file'));
            foreach($request->file('file') as $file) {
                $file_name = Str::slug($file->getClientOriginalName() . '_' . time());
                $folder = 'images/products';
                $tmp_path = $folder . $file_name . '.' . $file->getClientOriginalExtension();

                $this->uploadOne($file, $folder, 'public', $file_name);

                $files[] = $tmp_path;
            };
            $photo = new Photo();
            $photo->src = json_encode($files);
        }

        $product->save();
        $product = Product::latest('created_at')->first();
        $photo->product_id = $product->id;
        $photo->save();

        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $id)
    {
        $product = Product::findOrFail($id);
        $comments = Comment::where('product_id', '=', $id)->orderBy('created_at', 'desc')->get();

        return view('detail', compact('product', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
