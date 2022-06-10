@extends('home')
@section('module8')
<div class="module8">
    @foreach($details_product as $details_products)
    <div class="container">
        <div class="top">
            <div class="row">
                <div class="col-md-6">
                    <img src="/public/uploads/{{$details_products->product_image}}" alt="" width="100%">
                </div>
                <div class="col-md-6">
                    <div class="boo">
                        <a href="#">Boots</a>
                    </div>
                    <h1>{{$details_products->product_name}}</h1>
                    <div class="pri">
                        <p class="price">${{$details_products->product_price}}</p>
                        <div class="stock">(ln stock)</div>
                    </div>
                    <div class="desi">
                        <p>{{$details_products->product_content}}</p>
                    </div>

                    <div class="add">
                        <label></label>
                        <input type="number" min="1" value="1">

                        <button type="button" class="btn btn-dark">Add To Card <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                    </div>
                    <div class="wish">
                        <button type="button" class="btn btn-outline-secondary" disabled>WishList <i class="fa-solid fa-heart"></i></button>
                    </div>
                    <div class="cate">
                        <span>Categories: {{$details_products->category_name}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Description')">Description</button>
                <button class="tablinks" onclick="openCity(event, 'Reviews ')">Reviews </button>
            </div>

            <div id="Description" class="tabcontent">
                <p>{{$details_products->product_desc}}</p>
            </div>

            <div id="Reviews " class="tabcontent">
                <h3>Paris</h3>
                <p>Paris is the capital of France.</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
