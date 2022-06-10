@extends('home')
@section('module2')
<div class="module2">
    <!-- Item slider-->
    <div class="container">
        <h1 style="text-align: center; margin-top: 4%;">Best Sellers</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                    <div class="carousel-inner">

                        <div class="item active">
                            @foreach($all_products as $all_product)
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="{{URL::to('/detail-product/' . $all_product->product_id)}}"><img src="public/uploads/{{$all_product->product_image}}" class="img-responsive center-block"></a>
                                <h4 class="text-center">{{$all_product->product_name}}</h4>
                                <h5 class="text-center">${{$all_product->product_price}}</h5>
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <!-- left,right control -->
                    <div id="slider-control">
                        <a class="left carousel-control" href="#itemslider" data-slide="prev"><i class="fa-solid fa-circle-chevron-left" style="font-size: 50px; margin-top: 297%; margin-left: -235%;"></i></a>
                        <a class="right carousel-control" href="#itemslider" data-slide="next"><i class="fa-solid fa-circle-chevron-right" style="font-size: 50px; margin-top: 259%; margin-right: -235%;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Item slider end-->
</body>
<script type="text/javascript">
    $(document).ready(function() {

        $('#itemslider').carousel({
            interval: 3000
        });

        $('.carousel-showmanymoveone .item').each(function() {
            var itemToClone = $(this);

            for (var i = 1; i < 4; i++) {
                itemToClone = itemToClone.next();

                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }

                itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-" + (i))
                    .appendTo($(this));
            }
        });
    });
</script>
@endsection
