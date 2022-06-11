@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh mục sản phẩm
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <?php

                use Illuminate\Support\Facades\Session;

                $messgae =  Session::get('message');
                if ($messgae) {
                    echo '<span style="margin-left: 42%;text-align: center;color: red;">' . $messgae . '</span>';
                    Session::put('message', null);
                }
                ?>
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên danh mục</th>
                        <th>Mô tả danh mục</th>
                        <th>Hiển thị</th>
                        <th>Ngày thêm</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_category_product as $all_category_products)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>{{$all_category_products->category_name}}</td>
                        <td>{{$all_category_products->category_desc}}</td>
                        <td><span class="text-ellipsis">
                                <?php
                                if ($all_category_products->category_status == 0) { ?>
                                    <a href="{{URL::to('/unactive-category-product/' . $all_category_products->category_id)}}"><span style="font-size: 35px;" class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                <?php } else {
                                ?>
                                    <a href="{{URL::to('/active-category-product/' . $all_category_products->category_id)}}"><span style="font-size: 35px;" class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                <?php }
                                ?>
                            </span>
                        </td>
                        <td><span class="text-ellipsis">{{$all_category_products->created_at}}</span></td>
                        <td>
                            <a href="" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                            <a onclick="return confirm ('Bạn có chắc chắn muốn xóa')" href="{{URL::to('/delete-category-product',$all_category_products->category_id)}}" class="active" ui-toggle-class="">
                            <i class="fa fa-times text-danger text"></i></a>		
	
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
