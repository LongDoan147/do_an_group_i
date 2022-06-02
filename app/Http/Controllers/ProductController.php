<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class ProductController extends Controller
{

    public function detail_product()
    {
        return view('detail_product');
    }

    public function add_product()
    {
        $cate_product = DB::table('tbl_category')->orderby('category_id', 'desc')->get();
        return view('admin.add_product')->with('cate_product', $cate_product);
    }

    public function all_product()
    {
        $all_product = DB::table('tbl_product')->join('tbl_category', 'tbl_category.category_id', '=', 'tbl_product.category_id')->orderBy('product_id', 'desc')->get();
        $manager_product = view('admin.all_product')->with('all_product', $all_product);
        return view('admin_layout')->with('admin.all_product', $manager_product);
    }

    public function save_product(Request $request)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_image'] = $request->product_image;
        $data['product_content'] = $request->product_content;
        $data['product_desc'] = $request->product_desc;
        $data['category_id'] = $request->product_cate;
        $data['product_status'] = $request->product_status;

        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_imgae = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_imgae));
            $new_image = $name_image . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads', $new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message', 'Thêm sản phẩm thành công');
            return redirect::to('add-product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        Session::put('message', 'Thêm sản phẩm thành công');
        return redirect::to('add-product');
    }

    public function active_product($product_id)
    {
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 0]);
        Session::put('message', ' Không hiển thị sản phẩm');
        return Redirect::to('all-product');
    }
    public function unactive_product($product_id)
    {
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 1]);
        Session::put('message', 'hiển thị sản phẩm');
        return Redirect::to('all-product');
    }
  public function update($product_id){
      $product =  DB::table('tbl_product')->where('product_id', $product_id)->first();
    //    $cate_product = DB::table('tbl_category')->orderby('category_id', 'desc')->get();
       $cate_product = DB::table('tbl_product')->join('tbl_category', 'tbl_category.category_id', '=', 'tbl_product.category_id')->get();
     
      return view('admin.update_product')->with('cate_product', $cate_product)->with('product',$product );
    //   return view('admin.update_product',compact($cate_product,$product));
  }
public function update_end(Request $request,$id){
    $data = array();
    $data['product_name'] = $request->product_name;
    $data['product_price'] = $request->product_price;
    $data['product_image'] = $request->product_image;
    $data['product_content'] = $request->product_content;
    $data['product_desc'] = $request->product_desc;
    $data['category_id'] = $request->product_cate;
    $data['product_status'] = $request->product_status;

    $get_image = $request->file('product_image');
    if ($get_image) {
        $get_name_imgae = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_imgae));
        $new_image = $name_image . '.' . $get_image->getClientOriginalExtension();
        $get_image->move('public/uploads', $new_image);
        $data['product_image'] = $new_image;
        DB::table('tbl_product')->update($data);
        Session::put('message', 'Sửa sản phẩm thành công');
        return redirect::to('update-product');
    }
    $data['product_image'] = '';
    DB::table('tbl_product')->insert($data);
    Session::put('message', 'Sửa sản phẩm thành công');
    return redirect::to('update-product');
}
}
