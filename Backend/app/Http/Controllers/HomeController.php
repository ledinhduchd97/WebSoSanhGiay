<?php

namespace App\Http\Controllers;
use Auth;
use App\Tbl_brand;
use App\Tbl_product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Tbl_brand::all();
        $products = Tbl_product::all();
        $products_new = Tbl_product::orderBy('created_at','desc')->take(1)->first();
        // dd($products_new);
        return view('index',compact('brands','products','products_new'));
    }
    public function searchBrand(Request $request)
    {
        // dd($request->data);
        $products = Tbl_product::where('product_id_brand',$request->data)->get();
        $product = [];
        foreach ($products as $value) {
            $vl = $value->toArray();
            $vl["image"] = '{{asset('.$value->product_image_total.')}}';
            $vl["brand_name"] = $value->brand->brand_name;
            array_push($product, $vl); 
        }
        // dd($product);
        return $product;
    }
    public function getProduct(Request $request)
    {
        $products = Tbl_product::where('id',$request->data)->get();
        $product = [];
        foreach ($products as $value) {
            $vl = $value->toArray();
            $vl["brand"] = $value->brand->brand_name;
            array_push($product, $vl); 
        }
        // dd($product);
        return $product;
    }
    public function searchCompare(Request $request)
    {
        // dd($request);
        if($request->keyword != null)
        {
            $products = Tbl_product::where('product_name','like', '%'.$request->keyword.'%')->where('product_price','<', $request->price)->get();
        }
        else
        {
            $products = Tbl_product::where('product_price','<', $request->price)->get();
        }
        // dd($products);
        $product = [];
        foreach ($products as $value) {
            $vl = $value->toArray();
            $vl["brand"] = $value->brand->brand_name;
            array_push($product, $vl); 
        }
        return $product;
    }
    public function searchProduct(Request $request)
    {
        if($request->keyword != null && $request->id_brand != null)
        {
            $products = Tbl_product::where('product_id_brand',$request->id_brand)->where('product_name','like', '%'.$request->keyword.'%')->where('product_price','<', $request->price)->get();
        }
        else if($request->keyword != null && $request->id_brand == null)
        {
            $products = Tbl_product::where('product_name','like', '%'.$request->keyword.'%')->where('product_price','<', $request->price)->get();
        }
        else if($request->keyword == null && $request->id_brand == null)
        {
            $products = Tbl_product::where('product_price','<', $request->price)->get();
        }
        else if($request->keyword == null && $request->id_brand != null)
        {
            $products = Tbl_product::where('product_id_brand',$request->id_brand)->where('product_price','<', $request->price)->get();
        }
        $product = [];
        foreach ($products as $value) {
            $vl = $value->toArray();
            $vl["image"] = '{{asset('.$value->product_image_total.')}}';
            $vl["brand_name"] = $value->brand->brand_name;
            array_push($product, $vl); 
        }
        // dd($product);
        return $product;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getLogin()
    {
        if(Auth::check())
        {
            return redirect()->route('get.index.admin');
        }
        else
        {
            return view('admin.login');    
        }
    }
    public function login(Request $request)
    {
        $request->validate([
           'user_email' => 'required|email',
           'password' => 'required'
        ],
        [
            'user_email.required' => 'Vui lòng nhập email',
            'user_email.email' => 'Vui lòng nhập đúng định dạng email',
            'password.required' => 'Mật khẩu không được bỏ trống',
        ]);
        $remember = 0;
        if (!empty($request->remember)) 
        {
            $remember = 1;
        }
        if(Auth::attempt(['email' => $request->user_email, 'password' => $request->password], $remember))
        {
            return redirect()->route('get.Listuser');
        }
        else
        {
            session(['fail' => 'Đăng nhập thất bại']);
            return redirect()->route('get.Login');
        }
    }
    public function logout()
    {
        if(Auth::check())
        {
            Auth::logout();
            return redirect()->route('get.Login');            
        }
        else
            return redirect()->route('get.Login');
    }
}
