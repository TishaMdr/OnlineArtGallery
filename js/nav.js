const creatNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
    <div class="nav"> 
        <div class="brandlogo"><h1>TheArtAge</h1></div>
<!-- <img src="img/art.png" class="brandlogo"> -->
            <div class="nav-items">
                <div class="search">
                    <input type="text"class="search-box" type="search" placeholder="Search product">
                        <button class="btn">Search</button>
                </div>
                <a href="#"><img src="img/shopping-cart.png"></a>
                <a href="#"><img src="img/account.png"></a>

            </div>
        </div>
        <ul class="links-container">
            <li class="link-items"><a href="#" class="link">Home</a></li>
            <li class="link-items"><a href="#" class="link">About us</a></li>
            <li class="link-items"><a href="#" class="link">Art Category</a></li>
        </ul>
    `;
}

creatNav();