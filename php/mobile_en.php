<style>
    /* Mobile Header */
    .navbar.mobile {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
    }

    .logo img {
        max-width: 200px;
    }

    .hamburger-menu {
        padding: 15px 15px;
        background-color: #ff5c5c;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 24px;
    }

    /* Mobile Menu Layer */
    .navLayer {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: white;
        z-index: 9999;
        flex-direction: column;
        justify-content: space-between;
        padding: 20px;
    }

    .navLayer.active {
        display: flex;
    }

    .navbar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .closeBtn {
        font-size: 30px;
        cursor: pointer;
    }

    .nav-items {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .nav-items li {
        margin: 20px 0;
    }

    .nav-items li a {
        display: block;
        padding: 10px 20px;
        border-radius: 10px;
        background-color: #fff;
        color: #ff5c5c;
        font-weight: bold;
        text-decoration: none;
        font-size: 16px;
        text-align: center;
        border: 1px solid #ff5c5c;
        transition: background-color 0.3s ease;
    }

    .nav-items .active {
        background-color: #ff5c5c;
        color: white;
    }

    /* Language Switch */
    .lang-switch {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .lang-btn {
        background-color: #fff;
        color: #ff5c5c;
        border: 1px solid #ff5c5c;
        padding: 10px 20px;
        border-radius: 50px;
        margin: 0 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .lang-btn.active,
    .lang-btn:hover {
        background-color: #ff5c5c;
        color: white;
    }

    .navbar.desktop {
        display: flex;
    }

    .navbar.mobile {
        display: none;
    }

    /* Responsive Styles Header */
    @media (max-width: 768px) {
        .navbar.desktop {
            display: none;
        }

        .navbar.mobile {
            display: flex;
        }
    }

    /* Utility classes */
    .text-center {
        text-align: center;
    }


    .hamburger-menu {
        padding: 10px 10px;
        background-color: #ff5c5c;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn {
        padding: 10px 20px;
        background-color: #ff5c5c;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-login {
        padding: 10px 20px;
        background-color: #f5f5f5;
        color: #ff5c5c;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<!-- Mobile Navbar -->
<div class="navbar mobile">
    <div class="menu-icon navA" onclick="toggleMenu()">
        <button class="hamburger-menu" id="btn-hamburger">☰</button>
    </div>
    <div class="logo">
        <img src="../images/logo.png" width="200" alt="Brick Shop Logo">
        <!-- <a href="#" class="btn">Login</a>
                <a href="#" class="btn">Sign Up</a> -->
    </div>
</div>

<!-- Mobile Menu Layer -->
<div class="navLayer" id="nav-menu">
    <div class="navbar-header">
        <img src="../images/logo.png" width="200" alt="Brick Shop Logo">
        <span class="closeBtn" onclick="toggleMenu()">X</span>
    </div>
    <ul class="nav-items">
        <li><a href="#" class="active">Our Story</a></li>
        <li><a href="#">Our Products</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Sign Up</a></li>
        <li><a href="#">Login</a></li>
    </ul>

    <!-- Language Switch -->
    <div class="lang-switch">
        <button class="lang-btn">EN</button>
        <button class="lang-btn active">VN</button>
    </div>
</div>

<script>
    function toggleMenu() {
        var navLayer = document.getElementById("nav-menu");
        navLayer.classList.toggle("active");
    }
</script>