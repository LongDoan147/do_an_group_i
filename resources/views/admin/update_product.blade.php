@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa Sản Phẩm
            </header>
            <div class="panel-body">
                <?php

                use Illuminate\Support\Facades\Session;

                $messgae =  Session::get('message');
                if ($messgae) {
                    echo '<span style="margin-left: 42%;text-align: center;color: red;">' . $messgae . '</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="position-center">
                    <form role="form" action="{{route('product.update_end',['id' => $product->product_id])}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="{{$product->product_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm" value="{{$product->product_price}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            
                            <div class="col-md-12">
                                <br>
                                <div class="row">
                                    <img src="../public/uploads/{{$product->product_image}}" alt="" height="200" width="200">
                                </div>
                                <br>
                            </div>
                            
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">


                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea style="resize: none;" rows="8" name="product_desc" id="" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mô tả sản phẩm">{{$product->product_desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                            <textarea style="resize: none;" rows="8" name="product_content" id="" type="password" class="form-control" id="exampleInputPassword1" placeholder="Nội dung sản phẩm">{{$product->product_content}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $cate_products)
                                <option value="{{$cate_products->category_id}}">
                                    {{$cate_products->category_name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                             <!-- <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option> -->
                                <option value="{{$product-> product_status}}">
                                    {{$product->product_status}}
                                  
                                </option>
                             
                              
                            </select>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection