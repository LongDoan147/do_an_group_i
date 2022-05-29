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
