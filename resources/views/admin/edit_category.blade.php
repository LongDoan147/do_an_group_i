@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa Danh Mục Sản Phẩm
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
                    <form role="form" action="{{URL::to('/update-category/'.$category_edit->category_id)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" value="{{$category_edit->category_name}}">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize: none;" rows="8" name="category_desc" id="" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$category_edit->category_desc}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="category_status" class="form-control input-sm m-bot15">

                            @if ($category_edit->category_status == 0)
                                <option value="{{$category_edit-> category_status}}" checked> Ẩn </option>   
                                <option value="{{$category_edit-> category_status}}"> Hiển Thị  </option>         
                                @else{
                                    <option value="{{$category_edit-> category_status}}"checked> Hiển Thị </option>
                                    <option value="{{$category_edit-> category_status}}"> Ẩn</option>   
                                }
                              @endif
                            </select>
                        </div>
                        <button type="submit" name="update-category" class="btn btn-info">Sửa danh mục</button>
                    </form>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection