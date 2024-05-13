<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/sahyog-logo/sahyog-mart-favicon-white.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over ₹999
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="login.php" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25 translate-button" onclick="toggleTranslation()">
							हिन्दी
						</a>
						
						<div id="translation" class="translation-container" style="display: none;">
							<!-- Google Translate Element will be placed here -->
						</div>
						
						<script>
						function toggleTranslation() {
							var translationContainer = document.getElementById("translation");
							if (translationContainer.style.display === "none") {
								translationContainer.style.display = "block";
								googleTranslateElementInit(); // Initialize translation when shown
							} else {
								translationContainer.style.display = "none";
							}
						}
						
						function googleTranslateElementInit() {
							var select = document.querySelector(".goog-te-combo");
							if (select) {
								select.style.display = "block";
							}
							
							new google.translate.TranslateElement({
								pageLanguage: 'en',
								includedLanguages: 'en,hi',
								layout: google.translate.TranslateElement.InlineLayout.SIMPLE
							}, 'translation');
						}
						</script>
						
						<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/sahyog-logo/logo-no-background.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.html">Home</a>
							</li>

							<li class="active-menu">
								<a href="product.php">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="features.html">Features</a>
							</li>

							<li>
								<a href="blog.html">Blog</a>
							</li>

							<li>
								<a href="about.html">About</a>
							</li>

							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/sahyog-logo/logo-no-background.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over ₹999
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25 translate-button" onclick="toggleTranslation()">
							हिन्दी
						</a>
						
						<div id="translation" class="translation-container" style="display: none;">
							<!-- Google Translate Element will be placed here -->
						</div>
						
						<script>
						function toggleTranslation() {
							var translationContainer = document.getElementById("translation");
							if (translationContainer.style.display === "none") {
								translationContainer.style.display = "block";
								googleTranslateElementInit(); // Initialize translation when shown
							} else {
								translationContainer.style.display = "none";
							}
						}
						
						function googleTranslateElementInit() {
							var select = document.querySelector(".goog-te-combo");
							if (select) {
								select.style.display = "block";
							}
							
							new google.translate.TranslateElement({
								pageLanguage: 'en',
								includedLanguages: 'en,hi',
								layout: google.translate.TranslateElement.InlineLayout.SIMPLE
							}, 'translation');
						}
						</script>
						
						<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
				</li>

				<li>
					<a href="product.php">Shop</a>
				</li>

				<li>
					<a href="features.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

	 <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Cart
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>
            
            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    <!-- Cart items will be added dynamically here -->
                </ul>
                
                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: ₹<span id="cart-total">0.00</span>
                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="#" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            View Cart
                        </a>

                        <a href="#" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Check Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    const products = [
        { id: 1, name: "Mast & Harbour T-shirt", price: 399, image: "images/product-01.jpg" },
        { id: 2, name: "Herschel supply", price: 524, image: "images/product-02.jpg" },
        { id: 3, name: "Sustainable Casual Shirt", price: 892, image: "images/product-03.jpg" },
        { id: 4, name: "Classic Trench Coat", price: 1499, image: "images/product-04.jpg" },
        { id: 5, name: "Front Pocket Jumper", price: 1199, image: "images/product-05.jpg" },
        { id: 6, name: "APPLE Watch", price: 89900, image: "images/product-06.jpg" },
        { id: 7, name: "VAN HEUSEN", price: 3999, image: "images/product-07.jpg" },
        { id: 8, name: "Elegant Diamond", price: 4099, image: "images/product-08.jpg" },
        { id: 9, name: "Converse All Star Chuck Taylor", price: 949, image: "images/product-09.jpg" },
        { id: 10, name: "ELLE US Women Top", price: 489, image: "images/product-10.jpg" },
        { id: 11, name: "Vintage Tommy Hilfiger Denim", price: 3799, image: "images/product-11.jpg" },
        { id: 12, name: "Nike's Women Pink Shoes", price: 13327, image: "images/product-12.jpg" },
        { id: 13, name: "Women's Denim Jackets", price: 4559, image: "images/product-13.jpg" },
        { id: 14, name: "Rose Top", price: 299, image: "images/product-14.jpg" },
        { id: 15, name: "Mini Silver Mesh Watch", price: 2498, image: "images/product-15.jpg" },
        { id: 16, name: "Cotton Black Plain T-Shirt", price: 777, image: "images/product-16.jpg" }
    ];

    const cart = [];

    function addToCart(productId) {
        const product = products.find(product => product.id === productId);

        if (product) {
            const existingProduct = cart.find(item => item.id === productId);

            if (existingProduct) {
                existingProduct.quantity++;
            } else {
                cart.push({ ...product, quantity: 1 });
            }

            displayCart();
        } else {
            console.error(`Product with ID ${productId} not found.`);
        }
    }

    function displayCart() {
        const cartItemsElement = document.getElementById("cart-items");
        const cartTotalElement = document.getElementById("cart-total");
        let cartItemsHTML = "";
        let total = cart.reduce((acc, item) => acc + item.price * item.quantity, 0);

        cart$@$v=v1.16$@$.forEach(({ name, price, image, quantity }) => {
            cartItemsHTML += `
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="${image}" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            ${name}
                        </a>

                        <span class="header-cart-item-info">
                            ${quantity} x ₹${price}
                        </span>
                    </div>
                </li>
            `;
        });

        cartTotalElement.textContent = total.toFixed(2);
        cartItemsElement.innerHTML = cartItemsHTML;
    }

    // Display products in cart when the page loads
    displayCart();
</script>

	
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						Women
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Men
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
						Bag
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
						Shoes
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
						Watches
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".accessories">
						Accessories
					</button>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
				</div>
				

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularity
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Average rating
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Newness
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$0.00 - $50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$50.00 - $100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$100.00 - $150.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$150.00 - $200.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$200.00+
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Black
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Blue
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Grey
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Green
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Red
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										White
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-01.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-1.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-1.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Mast & Harbour T-shirt
								</a>

								<span class="stext-105 cl3">
									₹399
								</span>
							</div>


							<div class="block2-txt-child2 flex-r p-t-3">
                        <button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
                            </div>
                         
                        
						</div>
						<script>
							// Function to add product to cart
							function addToCart(productId) {
								// Find the product with the given ID
								var product = products.find(function(item) {
									return item.id === productId;
								});
						
								if (product) {
									// Add the product to the cart
									cart.push(product);
									
									// Update the cart display
									displayCart();
								} else {
									console.error("Product with ID " + productId + " not found.");
								}
							}
						</script>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-02.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-2.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-2.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Herschel supply
								</a>

								<span class="stext-105 cl3">
									₹524
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(2)">
                                    Add to Cart
                                    <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                                </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-03.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-3.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-3.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Sustainable Casual Shirt
								</a>

								<span class="stext-105 cl3">
									₹892
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
                        <button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>

						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-04.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-4.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-4.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Classic Trench Coat
								</a>

								<span class="stext-105 cl3">
									₹1499
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-05.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-5.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-5.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Front Pocket Jumper
								</a>

								<span class="stext-105 cl3">
									₹1,199
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches isotope-item men isotope-item women isotope-item accessories">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-06-p3.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-6.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-6.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									
									APPLE Watch
								</a>

								<span class="stext-105 cl3">
									₹89,900
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-07.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-7.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-7.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									VAN HEUSEN
								</a>

								<span class="stext-105 cl3">
									₹3,999
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item bag isotope-item women isotope-item accessories">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-08-p3.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-8.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-8-p3.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Elegant Diamond
								</a>

								<span class="stext-105 cl3">
									₹4,099
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes isotope-item men isotope-item accessories">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-09.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-9.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-9.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Converse All Star Chuck Taylor
								</a>

								<span class="stext-105 cl3">
									₹949
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-10.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-10.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-10.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									ELLE US Women Top
								</a>

								<span class="stext-105 cl3">
									₹489
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-11.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-11.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-11.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Vintage Tommy Hilfiger Denim
								</a>

								<span class="stext-105 cl3">
									₹3,799
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women isotope-item shoes isotope-item accessories">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-12.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-12.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Nike's Women Pink Shoes
								</a>

								<span class="stext-105 cl3">
									₹13,327
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-13.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-13.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-13.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Women's Denim Jackets
								</a>

								<span class="stext-105 cl3">
									₹4559
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-14.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-14.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-14.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Rose Top
								</a>

								<span class="stext-105 cl3">
									₹299
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches isotope-item men isotope-item women isotope-item accessories">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-15.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-15.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-15.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Mini Silver Mesh Watch
								</a>

								<span class="stext-105 cl3">
									₹2,498
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/product-16.jpg" alt="IMG-PRODUCT">

							<a href="product-detail-16.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Product Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail-16.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Cotton Black Plain T-Shirt
								</a>

								<span class="stext-105 cl3">
										₹777
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							<button class="btn-show-cart flex-c-m stext-101 cl0 size-100 bg1 bor1 hov-btn1 p-2 trans-04 js-show-cart" onclick="addToCart(1)">
                          Add to Cart
                        <img src="images/icons/sahyog-logo/sahyog-mart-favicon-white.png" alt="Icon" style="width: 20px; height: 20px;">
                         </button>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php
    // Get the cart cookie
    $cartCookie = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : '[]';

    // Decode the cart cookie from a JSON string into an array
    $cart = json_decode($cartCookie, true);

    // Encode the cart array as a JSON string
    $cartJson = json_encode($cart);

    // Output the JSON string
    echo $cartJson;
?>


			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="features.html" href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>
		</div>
	</div>
		

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Watches
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>