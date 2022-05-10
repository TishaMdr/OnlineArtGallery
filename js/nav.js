const creatNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
    <div class="nav"> 
        <div class="brandlogo"><h1>The<span>Art</span>Age</h1></div>
            <div class="nav-items">
                <div class="search">
                    <input type="text"class="search-box" type="search" placeholder="Search product">
                        <button class="btn">Search</button>
                </div>
                <a href="#"><img src="img/cart.png"></a>
                <a href="admin/login.php"><img src="img/user.png"></a>

            </div>
        </div>
        <ul class="links-container">
            <li class="link-items"><a href="#" class="link">Home</a></li>
            <li class="link-items"><a href="aboutus.html" class="link">About us</a></li>
            <li class="link-items"><a href="#" class="link">Art Category</li>
        </ul>
    `;
}

creatNav();