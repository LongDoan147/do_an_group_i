<div class="module2">
        <!-- Item slider-->

        <div class="container">
            <h1 style="text-align: center; margin-top: 4%;">Sản Phẩm Liên Quan</h1>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#"><img src="https://i0.wp.com/demo4.drfuri.com/razzi5/wp-content/uploads/sites/20/2021/06/a001.jpg?resize=370%2C432&ssl=1" class="img-responsive center-block"></a>
                                    <h4 class="text-center">Women's Flexy Flat</h4>
                                    <h5 class="text-center">$49.90</h5>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#"><img src="https://i0.wp.com/demo4.drfuri.com/razzi5/wp-content/uploads/sites/20/2021/06/b001.jpg?resize=370%2C432&ssl=1" class="img-responsive center-block"></a>
                                    <h4 class="text-center">Floral Print Scart</h4>
                                    <h5 class="text-center">$49.90</h5>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#"><img src="https://i0.wp.com/demo4.drfuri.com/razzi5/wp-content/uploads/sites/20/2021/06/c001.jpg?resize=370%2C432&ssl=1" class="img-responsive center-block"></a>
                                    <h4 class="text-center">Short Sleeve Shirt</h4>
                                    <h5 class="text-center">$29.90</h5>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#"><img src="https://i0.wp.com/demo4.drfuri.com/razzi5/wp-content/uploads/sites/20/2021/06/d001.jpg?resize=370%2C432&ssl=1" class="img-responsive center-block"></a>
                                    <h4 class="text-center">Women's Tote bags</h4>
                                    <h5 class="text-center">39.90</h5>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#"><img src="https://i0.wp.com/demo4.drfuri.com/razzi5/wp-content/uploads/sites/20/2021/06/e0001.jpg?resize=370%2C432&ssl=1" class="img-responsive center-block"></a>
                                    <h4 class="text-center">Men's Polo Shirt</h4>
                                    <h5 class="text-center">$59.90</h5>
                                </div>
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


