<?php

namespace App\Http\Controllers;
use App\User;
use App\Tbl_product;
use App\Tbl_brand;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('user_level','<>',1)->get();
        return view('admin.user.listuser',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('admin.user.adduser');
    }
    public function create(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'user_level' => 'required',
            'user_status' => 'required',
            'user_password' => 'required',
            'user_password_cf' => 'required|same:user_password'
        ],
        [
            'user_name.required' => 'Vui lòng nhập tên user',
            'user_email.required' => 'Vui lòng nhập email',
            'user_level.required' => 'Vui chọn cấp bậc cho user',
            'user_status.required' => 'Vui chọn trạng thái cho user',
            'user_password.required' => 'Vui nhập password',
            'user_password_cf.required' => 'Vui nhập password nhắc lại',
            'user_password_cf.same' => 'Nhắc lại mật khẩu không khớp',
        ]);
        $user = User::create([
            'user_name' => $request->user_name,
            'email' => $request->user_email,
            'user_level' => $request->user_level,
            'user_status' => $request->user_status,
            'password' => $request->user_password,
            'user_email_verified_at' => str_random(40),
        ]);
        session(['success' => 'Thêm mới User thành công']);
        return redirect()->route('get.Adduser');
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
        $user = User::findOrFail($id);
        return view('admin.user.edituser',compact('user'));
    }
    public function edit(Request $request, $id)
    {
        $request->validate([
            'user_name' => 'required',
            'user_level' => 'required',
            'user_status' => 'required',
        ],
        [
            'user_name.required' => 'Vui lòng nhập tên user',
            'user_level.required' => 'Vui chọn cấp bậc cho user',
            'user_status.required' => 'Vui chọn trạng thái cho user',
        ]);
        $user = User::findOrFail($id);
        $user->user_name = $request->user_name;
        $user->user_level = $request->user_level;
        $user->user_status = $request->user_status;
        $user->save();
        session(['success' => 'Chỉnh sửa User thành công']);
        return redirect()->route('get.Edituser',['id'=>$id]);
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
        $user = User::findOrFail($id); 
        $brands = Tbl_brand::where('brand_id_user',$id)->get();
        foreach ($brands as $value_brand) {
            $products = Tbl_product::where('product_id_brand',$value_brand->id)->get();
            foreach ($products as $value_product) {
               $value_product->delete();
            }
            $value_brand->delete();
        }
        $products = Tbl_product::where('product_id_user',$id)->get();
        foreach ($products as $value_product) {
            $value_product->delete();
        }
        $user->delete();
        session(['success' => 'Xóa User thành công']);
        return redirect()->route('get.Listuser');
    }
}
