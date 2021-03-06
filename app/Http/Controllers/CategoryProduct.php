<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;

session_start();

class CategoryProduct extends Controller
{
    public function add_category_product(){
        return view('admin.add_category_product');
    }
    public function all_category_product(){
        $all_category_product = DB::table('tbl_category')->paginate(2);
        $manager_product = view('admin.all_category_product')->with('all_category_product', $all_category_product);
        return view('admin_layout')->with('admin.all_category_product', $manager_product);
    }
    public function save_category_product(Request $request){
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category')->insert($data);
        Session::put('message', 'thêm danh mục sản phẩm thành công');
        return redirect::to('add-category-product');
    }

    public function active_category_product($category_id)
    {
        DB::table('tbl_category')->where('category_id', $category_id)->update(['category_status' => 0]);
        Session::put('message', ' Không hiển thị sản phẩm');
        return Redirect::to('all-category-product');
    }
    public function unactive_category_product($category_id)
    {
        DB::table('tbl_category')->where('category_id', $category_id)->update(['category_status' => 1]);
        Session::put('message', 'hiển thị sản phẩm');
        return Redirect::to('all-category-product');
    }
   
  public function edit_category($category_id){
          $category= Category::all();
         $category_edit = Category::find($category_id);  
         return view('admin.edit_category')->with(compact('category_edit','category'));  
        
  }
  public function update_category(Request $request,$category_id){
   $category = Category::find($category_id);   
   $category ->category_name = $request['category_name'];   
   $category ->category_desc = $request['category_desc'];
   $category ->category_status = $request['category_status'];
  
   $category->save();
   return redirect::to('all-category-product')->with('success','update thanh cong');
  }
}
