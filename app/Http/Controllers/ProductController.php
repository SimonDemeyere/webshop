<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Stripe;
use Session;
use App\Cart;
use App\Category;
use App\Comment;
use App\Http\Requests\ProductRequest;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
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
        $products = Product::with('photos')->paginate(10);

        return view('admin.products.index', compact('products'));
    }


    public function getAddToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function removeFromCart(Request $request, $id)
    {
        $cart = Session::get('cart');

        $cart->totalPrice = $cart->totalPrice - $cart->items[$id]['price'];

        if(count($cart->items) == 1) {
            Session::forget('cart');
        } else {
            unset($cart->items[$id]);
            $cart->totalQty--;
        }

        return redirect()->back();
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('checkout', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
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

    public function checkout(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => Session::get('cart')->totalPrice * 100,
            "currency" => "eur",
            "source" => $request->stripeToken,
            "description" => "Order"
        ]);

        $order = new Order();
        $order->user_id = Auth()->user()->id;
        $order->payment_amount = Session::get('cart')->totalPrice;
        $order->save();

        $lastOrder = Order::latest()->first();

        $products = Session::get('cart')->items;

        foreach($products as $product) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $lastOrder->id;
            $orderDetail->product_id = $product['item']['id'];
            $orderDetail->price = $product['item']['price'];
            $orderDetail->qty = $product['qty'];

            $orderDetail->save();
        }

        Session::forget('cart');

        return back();
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
        $photos = array();

        $product->name = trim($request->name);
        $product->description = trim($request->description);
        if($request->short_description) {
            $product->short_description = trim($request->short_description);
        }
        $product->price = trim((int)$request->price);
        $product->category_id = trim($request->category);

        if($request->has('file')) {
            foreach($request->file as $file) {
                $photo = new Photo();

                $image_name = Str::slug($file->getClientOriginalName() . '_' . time());
                $folder = 'images/products/';
                $tmp_path = $folder . $image_name . '.' . $file->getClientOriginalExtension();

                $this->uploadOne($file, $folder, 'public', $image_name);

                $photo->src = $tmp_path;

                $photos[] = $photo;
            }
        }

        $product->save();
        $product = Product::latest('created_at')->first();

        foreach($photos as $photo) {
            $photo->product_id = $product->id;
            $photo->save();
        }

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
        $related_products = Product::with('photos')->where('category_id', '=', $product->category_id)->inRandomOrder()->limit(4)->get();
        $comments = Comment::where('product_id', '=', $id)->orderBy('created_at', 'desc')->get();

        return view('detail', compact('product', 'comments', 'related_products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('category')->get();

        return view('admin.products.edit', compact('product', 'categories'));
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
        if($product->photos && File::exists('assets/' . $product->photos->src)) {
            $image = public_path( 'assets/' . $product->photos->src );
            if(File::exists($image)) {
                unlink($image);
            }
            $product->photos->delete();
        }
        $product->delete();
        return redirect('/admin/products');
    }
}
