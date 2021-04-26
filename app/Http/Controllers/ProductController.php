<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use\App\Models\Cart;

use\App\Models\Order;
use Auth;

use\Illuminate\Support\Facades\DB;

use Session;

class ProductController extends Controller
{
    //
    function index()
    {
    if(Session::get('user')['id']==1){
        return redirect()->route('order.list');
    }
        $data =Product::all();
        return view ('product',['products' =>$data]);
    }

    function detail($id)
    {
        $data= Product::find($id);
        return view ('detail',['product' =>$data]);
    }

    function search(Request $req)
    {
        $data=product:: where('name', 'like','%'.$req->input('query').'%')->get() ;
        return view('search',['products' =>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId=session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cartlist()
    {
        $userId=session::get('user')['id'];
        $products=DB::table('cart')
        ->join('products','cart.product_id','=', 'products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view ('cartlist',['products' =>$products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow()
    {
        $userId=session::get('user')['id'];
        $total=$products=DB::table('cart')
        ->join('products','cart.product_id','=', 'products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view ('ordernow',['total' =>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId=session::get('user')['id'];
        $allCart=Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart)
        {
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        return redirect('/');

    }

    function myOrders()
    {
        $userId=session::get('user')['id'];
        $orders=DB::table('orders')
        ->join('products','orders.product_id','=', 'products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view ('myorders',['orders' =>$orders]);
    }

    function addProduct(){
        return view('addproduct');
    }

    function storeProduct(Request $request){
        $product = new Product();
        if($request->hasfile('gallery')){
            $filenamewithExt=$request->file('gallery')->getClientOriginalName();
            $filename =pathinfo($filenamewithExt, PATHINFO_FILENAME);
            $extension = $request->file('gallery')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path=$request->file('gallery')->storeAs('public/uploads',$fileNameToStore);
            $product->gallery=$fileNameToStore;
        }
        else{
                 $product->gallery="Null";
        }

        $product->name=$request->input('name');
        $product->category=$request->input('category');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->save();
    }

    function orderlist(){
        $orders=Order::all()->where('status','pending');
        $arr=[];
        foreach($orders as $order){
            $product= Product::find($order->product_id);
            array_push($arr, ['order' => $order, 'product' => $product]);
        }


        return view('orderlist',['orders'=>$arr]);
    }


    function orderComplete($id){

            $order = Order::find($id);
            $order->status='Delivered';
            $order->save();

            return redirect()->route('order.list');


    }

    function orderCancel($id){
            $order = Order::find($id);
            $order->status='Cancelled';
            $order->save();
            return redirect()->route('order.list');


    }

}
