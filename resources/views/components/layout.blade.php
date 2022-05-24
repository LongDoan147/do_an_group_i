<div class="module1">
        <nav class="navbar">
            <div class="container">
                <a href="">
                    <h1>Razzi.</h1>
                </a>
                <ul>
                    <li><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-user"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                </ul>
            </div>
        </nav>

        <div class="pic">
            <img src="{{asset('image/home-5-slider.jpg')}}" alt="">
            <div class="better">
                <h2>Better Things In <br>
                    A Better Way </h2>
                <a href="">Shop Womens </a> <a href="" class="right">Shop Mens </a>
            </div>
        </div>


    </div>
    <script>
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', fixed_nav);

        function fixed_nav() {
            if (window.scrollY > navbar.offsetHeight) {
                navbar.classList.add('active');
            } else {
                navbar.classList.remove('active');
            }
        }
    </script>
