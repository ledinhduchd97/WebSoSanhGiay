<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_product;
use App\Tbl_brand;
use Auth;
// use Sunra\PhpSimple\HtmlDomParser;
use GuzzleHttp\Client;
use App\Http\Requests\ReceptionStoreHISRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = (new Tbl_product)->newQuery();  
        $brands = Tbl_brand::all();
        if($request->brand != null)
        {
            $products = $products->where('product_id_brand',$request->brand);
        }

        if($request->name_product != null)
        {
            $products = $products->where('product_name','like', '%'.$request->name_product.'%');
        }
        $products = $products->paginate(12);
        // dd($products);
        return view('admin.product.listproduct',compact('products','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        $brands = Tbl_brand::all();
        return view('admin.product.addproduct',compact('brands'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_id_brand' => 'required',
            'product_code' => 'required',
            'product_price' => 'required',
            'product_year_birth' => 'required',
            'product_weight' => 'required',
            'product_made_in' => 'required',
            'product_outsole' => 'required',
            'product_insole' => 'required',
            'product_toe' => 'required',
            'product_tongue' => 'required',
            'product_vamp' => 'required',
            'product_quater' => 'required',
            'product_lacing' => 'required',
            'product_topline' => 'required',
            'product_shoelace' => 'required',
            'product_lining' => 'required',
            'product_technology' => 'required',
            'product_status' => 'required',
        ]
        ,
        [
            'product_name.required' => 'Vui lòng nhập tên sản phẩm',
            'product_id_brand.required' => 'Vui lòng chọn hãng tên sản phẩm',
            'product_code.required' => 'Vui lòng nhập mã sản phẩm',
            'product_price.required' => 'Vui lòng nhập giá sản phẩm',
            'product_year_birth.required' => 'Vui lòng nhập năm ra mắt sản phẩm',
            'product_weight.required' => 'Vui lòng nhập cân nặng sản phẩm',
            'product_made_in.required' => 'Vui lòng nhập nơi sản xuất sản phẩm',
            'product_outsole.required' => 'Vui lòng nhập thông tin đế ngoài',
            'product_insole.required' => 'Vui lòng nhập thông tin đế trong',
            'product_toe.required' => 'Vui lòng nhập thông tin mũi giày',
            'product_tongue.required' => 'Vui lòng nhập thông tin lưỡi gà',
            'product_vamp.required' => 'Vui lòng nhập thông tin thân giày trước',
            'product_quater.required' => 'Vui lòng nhập thông tin thân giày sau',
            'product_lacing.required' => 'Vui lòng nhập thông tin mui giày',
            'product_topline.required' => 'Vui lòng nhập thông tin cổ giày',
            'product_shoelace.required' => 'Vui lòng nhập thông tin dây giày',
            'product_lining.required' => 'Vui lòng nhập thông tin lớp lót',
            'product_technology.required' => 'Vui lòng nhập thông tin công nghệ',
            'product_status.required' => 'Vui lòng chọn trạng thái',
            'product_image_total.mimes' => 'Vui lòng chọn đúng định dạng ảnh'
        ]);
        if($request->hasFile('product_image_total'))
        {
            $total = \File::extension($request->product_image_total->getClientOriginalName());
            $product_image_total = uniqid(). '.' .$total;
            $product = Tbl_product::create([
            'product_name' => $request->product_name,
            'product_id_brand'=> $request->product_id_brand,
            'product_code' => $request->product_code,
            'product_price' => $request->product_price,
            'product_year_birth' => $request->product_year_birth,
            'product_weight' => $request->product_weight,
            'product_made_in' => $request->product_made_in,
            'product_outsole' => $request->product_outsole,
            'product_insole' => $request->product_insole,
            'product_toe' => $request->product_toe,
            'product_tongue' => $request->product_tongue,
            'product_vamp' => $request->product_vamp,
            'product_quater' => $request->product_quater,
            'product_lacing' => $request->product_lacing,
            'product_topline' => $request->product_topline,
            'product_shoelace' => $request->product_shoelace,
            'product_lining' => $request->product_lining,
            'product_technology' => $request->product_technology,
            'product_status' => $request->product_status,
            'product_id_user' => Auth::id(),
            'product_image_total' => $request->product_image_total->move('uploadProduct',$product_image_total),
            
        ]);
            session(['success'=>'Thêm sản phẩm thành công']);
            return redirect()->route('get.Addproduct');
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
        $product = Tbl_product::findOrFail($id);
        return view('admin.product.detailproduct',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $brands = Tbl_brand::all();
        $product = Tbl_product::findOrFail($id);
        // dd($product);
        return view('admin.product.editproduct',compact('product','brands'));
    }
    public function edit(Request $request, $id)
    {
        if(Tbl_product::findOrFail($id))
        {
            $product = Tbl_product::findOrFail($id);
            $request->validate([
            'product_name' => 'required',
            'product_id_brand' => 'required',
            'product_code' => 'required',
            'product_price' => 'required',
            'product_year_birth' => 'required',
            'product_weight' => 'required',
            'product_made_in' => 'required',
            'product_outsole' => 'required',
            'product_insole' => 'required',
            'product_toe' => 'required',
            'product_tongue' => 'required',
            'product_vamp' => 'required',
            'product_quater' => 'required',
            'product_lacing' => 'required',
            'product_topline' => 'required',
            'product_shoelace' => 'required',
            'product_lining' => 'required',
            'product_technology' => 'required',
            'product_status' => 'required',
            'product_image_total' => 'mimes:jpeg,bmp,png,jpg,gif'
        ]
        ,
        [
            'product_name.required' => 'Vui lòng nhập tên sản phẩm',
            'product_id_brand.required' => 'Vui lòng chọn hãng tên sản phẩm',
            'product_code.required' => 'Vui lòng nhập mã sản phẩm',
            'product_price.required' => 'Vui lòng nhập giá sản phẩm',
            'product_year_birth.required' => 'Vui lòng nhập năm ra mắt sản phẩm',
            'product_weight.required' => 'Vui lòng nhập cân nặng sản phẩm',
            'product_made_in.required' => 'Vui lòng nhập nơi sản xuất sản phẩm',
            'product_outsole.required' => 'Vui lòng nhập thông tin đế ngoài',
            'product_insole.required' => 'Vui lòng nhập thông tin đế trong',
            'product_toe.required' => 'Vui lòng nhập thông tin mũi giày',
            'product_tongue.required' => 'Vui lòng nhập thông tin lưỡi gà',
            'product_vamp.required' => 'Vui lòng nhập thông tin thân giày trước',
            'product_quater.required' => 'Vui lòng nhập thông tin thân giày sau',
            'product_lacing.required' => 'Vui lòng nhập thông tin mui giày',
            'product_topline.required' => 'Vui lòng nhập thông tin cổ giày',
            'product_shoelace.required' => 'Vui lòng nhập thông tin dây giày',
            'product_lining.required' => 'Vui lòng nhập thông tin lớp lót',
            'product_technology.required' => 'Vui lòng nhập thông tin công nghệ',
            'product_status.required' => 'Vui lòng chọn trạng thái',
            'product_image_total.mimes' => 'Vui lòng chọn đúng định dạng ảnh'
        ]);
            $product->product_name = $request->product_name;
            $product->product_id_brand = $request->product_id_brand;
            $product->product_code = $request->product_code;
            $product->product_price = $request->product_price;
            $product->product_year_birth = $request->product_year_birth;
            $product->product_weight = $request->product_weight;

            $product->product_made_in = $request->product_made_in;
            $product->product_outsole = $request->product_outsole;
            $product->product_insole = $request->product_insole;
            $product->product_toe = $request->product_toe;
            $product->product_tongue = $request->product_tongue;
            $product->product_vamp = $request->product_vamp;

            $product->product_quater = $request->product_quater;
            $product->product_lacing = $request->product_lacing;
            $product->product_topline = $request->product_topline;
            $product->product_shoelace = $request->product_shoelace;
            $product->product_lining = $request->product_lining;
            $product->product_technology = $request->product_technology;
            if($request->hasFile('product_image_total'))
            {
                $total = \File::extension($request->product_image_total->getClientOriginalName());
                $product_image_total = uniqid(). '.' .$total;
                $product->product_image_total = $request->product_image_total->move('uploadProduct',$product_image_total);
            }
            $product->save();
            session(['success'=>'Chỉnh sửa sản phẩm thành công']);
            return redirect()->route('post.Editproduct',['id'=>$id]);
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
        $product = Tbl_product::findOrFail($id);
        $product->delete();
        session(['success' => 'Xóa Sản Phẩm thành công']);
        return redirect()->route('get.Listproduct');
    }
    public function autosaving()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://sosanhgiay123.000webhostapp.com/api/autosaving');
        $data = json_decode($res->getBody());
        foreach($data as $value) 
        {
            $product_real = Tbl_product::where('product_name',$value->name)->first();
            if(!isset($product_real))
            {
               $product = Tbl_product::create([
                    'product_name' => $value->name,
                    'product_id_brand'=> $value->brand_id,
                    'product_code' => 'Đang cập nhập',
                    'product_price' => 100,
                    'product_year_birth' => 'Đang cập nhập',
                    'product_weight' => 'Đang cập nhập',
                    'product_made_in' => 'Đang cập nhập',
                    'product_outsole' => 'Đang cập nhập',
                    'product_insole' => 'Đang cập nhập',
                    'product_toe' => 'Đang cập nhập',
                    'product_tongue' => 'Đang cập nhập',
                    'product_vamp' => 'Đang cập nhập',
                    'product_quater' => 'Đang cập nhập',
                    'product_lacing' => 'Đang cập nhập',
                    'product_topline' => 'Đang cập nhập',
                    'product_shoelace' => 'Đang cập nhập',
                    'product_lining' => 'Đang cập nhập',
                    'product_technology' => 'Đang cập nhập',
                    'product_status' => 1,
                    'product_id_user' => 1,
                    'product_image_total' => $value->img,      
                ]); 
            }       
        }
        return redirect()->route('get.Listproduct');
    }
    // public function autosaving()
    // {
    //     $offset = 'https://drake.vn/';
    //     $document = HtmlDomParser::file_get_html($offset);
    //     foreach($document->find('div.second_img') as $item){
    //         $img = $item->find('img');
    //         $link_img = $img[0]->attr['src'];
    //         $name_product = $img[0]->attr['title']; //lấy tên sản phẩm
    //         $brand = explode("/",$link_img);
    //         $brand_id = 0;
    //         //lấy id hãng cho sản phẩm
    //         if($brand[6] == "Converse")
    //         {
    //             $brand_id = 3;
    //         }
    //         else if ($brand[6] == "Vans")
    //         {
    //             $brand_id = 4;
    //         }
    //         else
    //         {
    //             $brand_id = 3; // tạm thời như vậy
    //         }
    //         $product_real = Tbl_product::where('product_name',$name_product)->first();
    //         if(!isset($product_real))
    //         {
    //            $product = Tbl_product::create([
    //                 'product_name' => $name_product,
    //                 'product_id_brand'=> $brand_id,
    //                 'product_code' => 'Đang cập nhập',
    //                 'product_price' => 100,
    //                 'product_year_birth' => 'Đang cập nhập',
    //                 'product_weight' => 'Đang cập nhập',
    //                 'product_made_in' => 'Đang cập nhập',
    //                 'product_outsole' => 'Đang cập nhập',
    //                 'product_insole' => 'Đang cập nhập',
    //                 'product_toe' => 'Đang cập nhập',
    //                 'product_tongue' => 'Đang cập nhập',
    //                 'product_vamp' => 'Đang cập nhập',
    //                 'product_quater' => 'Đang cập nhập',
    //                 'product_lacing' => 'Đang cập nhập',
    //                 'product_topline' => 'Đang cập nhập',
    //                 'product_shoelace' => 'Đang cập nhập',
    //                 'product_lining' => 'Đang cập nhập',
    //                 'product_technology' => 'Đang cập nhập',
    //                 'product_status' => 1,
    //                 'product_id_user' => 1,
    //                 'product_image_total' => $link_img,      
    //             ]); 
    //         }      
    //     }
    //     return redirect()->route('get.Listproduct');
    // }
    // public function apiSaving()
    // {
    //     $offset = 'https://drake.vn/';
    //     $document = HtmlDomParser::file_get_html($offset);
    //     $product = [];
    //     foreach($document->find('div.second_img') as $item){
    //         $img = $item->find('img');
    //         $link_img = $img[0]->attr['src'];
    //         $value = [];
    //         $value['img'] = $link_img;
            
    //         $name_product = $img[0]->attr['title']; //lấy tên sản phẩm
    //         $value['name'] = $name_product;

    //         $brand = explode("/",$link_img);
    //         $brand_id = 0;
    //         //lấy id hãng cho sản phẩm
    //         if($brand[6] == "Converse")
    //         {
    //             $brand_id = 3;
    //             $value['brand_id'] = $brand_id;
    //         }
    //         else if ($brand[6] == "Vans")
    //         {
    //             $brand_id = 4;
    //             $value['brand_id'] = $brand_id;
    //         }
    //         else
    //         {
    //             $brand_id = 3; // tạm thời như vậy
    //             $value['brand_id'] = $brand_id;
    //         }
    //         array_push($product, $value);
    //     }
    //     // dd($product);
    //     return $product;

    // }
}