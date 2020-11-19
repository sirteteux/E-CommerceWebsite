<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="../guide.pdf" class="flex-c-m trans-04 p-lr-25" download>
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Donate For A Cause
						</a>

						<a href="AdminAccountEdit.php" class="flex-c-m p-lr-10 trans-04">
							User Database
						</a>

						<a href="AdminProductEdit.php" class="flex-c-m trans-04 p-lr-25">
							Product Database
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo-01.jpg" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="AdminHome.html">Home</a>
							</li>

							<li>
								<a href="AdminProduct.html">Shop</a>
							</li>

							<li>
								<a href="AdminBlog.html">Blog</a>
							</li>

							<li class="active-menu">
								<a href="AdminAbout.html">About</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
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
				<a href="AdminHome.html"><img src="images/icons/logo-01.jpg" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
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
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="../guide.pdf" class="flex-c-m p-lr-10 trans-04" download>
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Donate For A Cause
						</a>


						<a href="AdminAccountEdit.php" class="flex-c-m p-lr-10 trans-04">
							User Database
						</a>

						<a href="AdminProductEdit.php" class="flex-c-m trans-04 p-lr-25">
							Product Database
						</a>

						<!-- ID of the user should appear here-->
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="AdminHome.html">Home</a>
				</li>

				<li>
                    <a href="AdminProduct.html">Shop</a>
                </li>

                <li>
                    <a href="AdminBlog.html">Blog</a>
                </li>

                <li>
                    <a href="AdminAbout.html">About</a>
                </li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

 <div class="container">   
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">Cart Details</div>
      <div class="col-md-6" align="right">
       <button type="button" name="clear_cart" id="clear_cart" class="btn btn-warning btn-xs">Clear</button>
      </div>
     </div>
    </div>
    <div class="panel-body" id="shopping_cart">

    </div>
   </div>

   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">Product List</div>
      <div class="col-md-6" align="right">
       <button type="button" name="add_to_cart" id="add_to_cart" class="btn btn-success btn-xs">Add to Cart</button>
      </div>
     </div>
    </div>
    <div class="panel-body" id="display_item">

    </div>
   </div>
  </div>
 </body>
</html>

<script>  
$(document).ready(function(){

 load_product();

 load_cart_data();
    
 function load_product()
 {
  $.ajax({
   url:"fetch_item.php",
   method:"POST",
   success:function(data)
   {
    $('#display_item').html(data);
   }
  });
 }

 function load_cart_data()
 {
  $.ajax({
   url:"fetch_cart.php",
   method:"POST",
   success:function(data)
   {
    $('#shopping_cart').html(data);
   }
  });
 }

 $(document).on('click', '.select_product', function(){
  var product_id = $(this).data('product_id');
  if($(this).prop('checked') == true)
  {
   $('#product_'+product_id).css('background-color', '#f1f1f1');
   $('#product_'+product_id).css('border-color', '#333');
  }
  else
  {
   $('#product_'+product_id).css('background-color', 'transparent');
   $('#product_'+product_id).css('border-color', '#ccc');
  }
 });

 $('#add_to_cart').click(function(){
  var product_id = [];
  var product_name = [];
  var product_price = [];
  var action = "add";
  $('.select_product').each(function(){
   if($(this).prop('checked') == true)
   {
    product_id.push($(this).data('product_id'));
    product_name.push($(this).data('product_name'));
    product_price.push($(this).data('product_price'));
   }
  });

  if(product_id.length > 0)
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{product_id:product_id, product_name:product_name, product_price:product_price, action:action},
    success:function(data)
    {
     $('.select_product').each(function(){
      if($(this).prop('checked') == true)
      {
       $(this).attr('checked', false);
       var temp_product_id = $(this).data('product_id');
       $('#product_'+temp_product_id).css('background-color', 'transparent');
       $('#product_'+temp_product_id).css('border-color', '#ccc');
      }
     });

     load_cart_data();
     alert("Item has been Added into Cart");
    }
   });
  }
  else
  {
   alert('Select atleast one item');
  }

 });

 $(document).on('click', '.delete', function(){
  var product_id = $(this).attr("id");
  var action = 'remove';
  if(confirm("Are you sure you want to remove this product?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{product_id:product_id, action:action},
    success:function()
    {
     load_cart_data();
     alert("Item has been removed from Cart");
    }
   })
  }
  else
  {
   return false;
  }
 });

 $(document).on('click', '#clear_cart', function(){
  var action = 'empty';
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function()
   {
    load_cart_data();
    alert("Your Cart has been clear");
   }
  });
 });
    
});


function validateSearch(){
		var str = document.forms["searchForm"]["search"].value;

		if (str.trim() == ""){
			return false;
		}
		$("#searchForm").submit(function(e) {
			e.preventDefault();
		});
	}
	
function showResult() {
    var str = document.forms["searchForm"]["search"].value;
	$.ajax({
   url:"fetch_item.php",
   method:"POST",
   data:{criteria:str},
   success:function(data)
   {
    document.getElementById("closeBtn").click();
    $('#display_item').html(data);
   }
  });
}
</script>
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
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
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
