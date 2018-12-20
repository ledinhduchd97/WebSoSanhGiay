<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_brand;
use App\Tbl_product;
use Auth;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Tbl_brand::all();
        return view('admin.brand.listbrand',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('admin.brand.addbrand');
    }
    public function create(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|max:100',
            'brand_code' => 'required',
            'brand_icon' => 'required|mimes:jpeg,bmp,png,jpg,gif',
            'brand_description' => 'required|max:100|min:6'
        ],
        [
            'brand_name.required' => 'Vui lòng nhập tên hãng',
            'brand_name.max' => 'Tên hãng không vượt quá 100 kí tự',
            'brand_code.required' => 'Vui lòng nhập mã của hãng',
            'brand_icon.required' => 'Vui lòng chọn icon hãng',
            'brand_icon.mimes' => 'File icon không đúng định dạng',
            'brand_description.required' => 'Vui lòng nhập mô tả hãng',
            'brand_description.max' => 'Mô tả không vượt quá 100 kí tự',
            'brand_description.min' => 'Mô tả phải lớn hơn 6 kí tự'
        ]);
        if($request->hasFile('brand_icon')){
            $ext = \File::extension($request->brand_icon->getClientOriginalName());
            $icon = uniqid(). '.' .$ext;
            $brand = Tbl_brand::create([
                'brand_name' => $request->brand_name,
                'brand_code'=> $request->brand_code,
                'brand_icon' => $request->brand_icon->move('uploadBrand',$icon),
                'brand_description' => $request->brand_description,
                'brand_id_user' => 1
            ]);
            session(['success'=>'Thêm hãng mới thành công']);
            return back();
        }
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

    public function getEdit($id)
    {
        $brand = Tbl_brand::findOrFail($id);
        return view('admin.brand.editbrand',compact('brand'));
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'brand_name' => 'required|max:100',
            'brand_code' => 'required',
            'brand_icon' => 'mimes:jpeg,bmp,png,jpg,gif',
            'brand_description' => 'required|max:100|min:6'
        ],
        [
            'brand_name.required' => 'Vui lòng nhập tên hãng',
            'brand_name.max' => 'Tên hãng không vượt quá 100 kí tự',
            'brand_code.required' => 'Vui lòng nhập mã của hãng',
            'brand_icon.mimes' => 'File icon không đúng định dạng',
            'brand_description.required' => 'Vui lòng nhập mô tả hãng',
            'brand_description.max' => 'Mô tả không vượt quá 100 kí tự',
            'brand_description.min' => 'Mô tả phải lớn hơn 6 kí tự'
        ]);
        $brand = Tbl_brand::findOrFail($id);
        if($brand)
        {
            $brand->brand_name = $request->brand_name;
            $brand->brand_code = $request->brand_code;
            $brand->brand_description = $request->brand_description;
            $brand->brand_id_user = 1;
            if($request->hasFile('brand_icon')){
                $ext = \File::extension($request->brand_icon->getClientOriginalName());
                $icon = uniqid(). '.' .$ext;   
                $brand->brand_icon = $request->brand_icon->move('uploadBrand',$icon);   
            }
            $brand->save();
            session(['success'=>'Chỉnh sửa hãng thành công']);
            return redirect()->route('get.Editbrand',['id' => $id]); 
        }  
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
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Tbl_brand::findOrFail($id);
        $products = Tbl_product::where('product_id_brand',$id)->get();
        foreach ($products as $key => $value) {
            $value->delete();
        }
        $brand->delete();
        session(['success' => 'Xóa Hãng thành công']);
        return redirect()->route('get.Listbrand');
    }
}
