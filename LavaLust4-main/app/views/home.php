<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Minishop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">09876543212</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Minishop</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.html">Shop</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="cart.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
  <style>
  @import 'bootstrap/bootstrap';
@import 'bootstrap/variables';

$font-primary: 'Open Sans',Arial, sans-serif;

$white: #fff;
$black: #000000;
// $darken: #3a4348;

$primary: #dbcc8f;


@mixin border-radius($radius) {
  -webkit-border-radius: $radius;
     -moz-border-radius: $radius;
      -ms-border-radius: $radius;
          border-radius: $radius;
}

@mixin transition($transition) {
    -moz-transition:    all $transition ease;
    -o-transition:      all $transition ease;
    -webkit-transition: all $transition ease;
    -ms-transition: 		all $transition ease;
    transition:         all $transition ease;
}


html {
	// overflow-x: hidden;
}
body {
	font-family: $font-primary;
	background: $white;
	font-size: 15px;
	line-height: 1.8;
	font-weight: 400;
	color: lighten($black,50%);
	&.menu-show {
		overflow: hidden;
		position: fixed;
		height: 100%;
		width: 100%;
	}
}
a {
	transition: .3s all ease;
	color: $primary;
	&:hover, &:focus {
		text-decoration: none;
		color: $primary;
	}
}
h1, h2, h3, h4, h5,
.h1, .h2, .h3, .h4, .h5 {
	line-height: 1.5;
	font-weight: 400;
	color: $black;
}

.text-primary {
	color: $primary!important;
}


.topper{
	font-size: 11px;
	width: 100%;
	display: block;
	text-transform: uppercase;
	letter-spacing: 1px;
	@include media-breakpoint-down(sm){
		margin-bottom: 10px;

	}
	.icon{
		span{
			color: $white;
		}
	}
	.text{
		width: calc(100% - 30px);
		color: rgba(255,255,255,1);
	}
}

.ftco-navbar-light {
	background: transparent !important;
	position: absolute;
	top: 20px;
	left: 0;
	right: 0;
	z-index: 3;
	padding: 0;
	@include media-breakpoint-down(md) {
		background: $black!important;
		position: relative;
		top: 0;
		padding: 10px 15px;
	}
	&.ftco-navbar-light-2{
		position: relative;
		top: 0;
	}

	.navbar-brand {
		color: $black;
		span{
			color: $white;
		}
		&:hover, &:focus{
			color: $black;
		}
		@include media-breakpoint-down(md){
			color: $white;
		}
	}

	.navbar-nav {
		@include media-breakpoint-down(md){
			padding-bottom: 10px;
		}
		> .nav-item {
			> .nav-link {
				font-size: 10px;
				padding-top: 1.5rem;
				padding-bottom: 1.5rem;
				padding-left: 20px;
				padding-right: 20px;
				font-weight: 400;
				color: $black;
				text-transform: uppercase;
				letter-spacing: 2px;
				&:hover {
					color: $black;
				}
				opacity: 1!important;
				@include media-breakpoint-down(md){
					padding-left: 0;
					padding-right: 0;
					padding-top: .9rem;
					padding-bottom: .9rem;
					color: rgba(255,255,255,.7);
					&:hover{
						color: $white;
					}
				}
			}

			.dropdown-menu{
				border: none;
				background: $black;
				-webkit-box-shadow: 0px 10px 34px -20px rgba(0,0,0,0.41);
				-moz-box-shadow: 0px 10px 34px -20px rgba(0,0,0,0.41);
				box-shadow: 0px 10px 34px -20px rgba(0,0,0,0.41);
				@include border-radius(0);
				.dropdown-item{
					font-size: 14px;
					color: $white;
					&:hover, &:focus{
						background: transparent;
						color: $primary;
					}
				}
			}

			
			&.ftco-seperator {
				position: relative;
				margin-left: 20px;
				padding-left: 20px;
				@include media-breakpoint-down(md) {
					padding-left: 0;
					margin-left: 0;
				}
				&:before {
					position: absolute;
					content: "";
					top: 10px;
					bottom: 10px;
					left: 0;
					width: 2px;
					background: rgba($white, .05);
					@include media-breakpoint-down(md) {
						display: none;
					}
				}
			}
			&.cta {
				> a {
					color: $black;
					@include media-breakpoint-down(sm){
						padding-left: 15px;
						padding-right: 15px;
					}
					@include media-breakpoint-down(md){
						color: $black;
						background: $primary;
					}
				}
			}
			&.active {
				> a {
					color: $black;
					@include media-breakpoint-down(md){
						color: $white;
					}
				}
			}
		}
	}
	
	.navbar-toggler {
		border: none;
		color: rgba(255,255,255,.5)!important;
		cursor: pointer;
		padding-right: 0;
		text-transform: uppercase;
		font-size: 16px;
		letter-spacing: .1em;
		&:focus{
			outline: none !important;
		}
	}
	
	&.scrolled  {
		position: fixed;
		right: 0;
		left: 0;
		top: 0;
		margin-top: -130px;
		background: $white!important;
		box-shadow: 0 0 10px 0 rgba(0,0,0,.1);
		.nav-item {
			&.active {
				> a {
					color: $primary!important;
				}
			}
			&.cta {
				> a {
					color: $black !important;
					background: $primary;
					border: none !important;
					 
					span {
						display: inline-block;
						color: $black !important;
					}
				}
				&.cta-colored {
					span {
						border-color: $primary;
					}
				}
			}
			.dropdown-menu{
				border: none;
				background: $white;
				-webkit-box-shadow: 0px 10px 34px -20px rgba(0,0,0,0.41);
				-moz-box-shadow: 0px 10px 34px -20px rgba(0,0,0,0.41);
				box-shadow: 0px 10px 34px -20px rgba(0,0,0,0.41);
				@include border-radius(0);
				.dropdown-item{
					font-size: 14px;
					color: $black;
					&:hover, &:focus{
						background: transparent;
						color: $primary;
					}
				}
				@include media-breakpoint-down(md){
					box-shadow: none;
				}
			}
		}

		.navbar-nav {
			@include media-breakpoint-down(md) {
				background: none;
				border-radius: 0px;
				padding-left: 0rem!important;
				padding-right: 0rem!important;
			}
		}

		.navbar-nav {
			@include media-breakpoint-down(sm) {
				background: none;
				padding-left: 0!important;
				padding-right: 0!important;
			}
		}

		.navbar-toggler {
			border: none;
			color: rgba(0,0,0,.5)!important;
			border-color: rgba(0,0,0,.5)!important;
			cursor: pointer;
			padding-right: 0;
			text-transform: uppercase;
			font-size: 16px;
			letter-spacing: .1em;

		}
		.nav-link {
			padding-top: .9rem!important;
			padding-bottom: .9rem!important;
			color: $black!important;
			&.active {
				color: $primary!important;
			}
		}
		&.awake {
			margin-top: 0px;
			transition: .3s all ease-out;
		}
		&.sleep {
			transition: .3s all ease-out;	
		}

		.navbar-brand {
			color: $black;
		}
	}
}

.navbar-brand {
	font-weight: 800;
	font-size: 20px;
}

.hero-wrap{
	width: 100%;
	position: relative;
	.overlay{
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		content: '';
		opacity: 0;
		width: 50%;
		background: $primary;
	}
	.slider-text{
		color: $white;
		position: relative;
		.breadcrumbs{
			text-transform: uppercase;
			font-size: 12px;
			letter-spacing: 3px;
			margin-bottom: 0;
			z-index: 99;
			font-weight: 300;
			span{
				color: rgba(0,0,0,1);
				a{
					color: $black;
				}
			}
		}

		.bread{
			font-weight: 800;
			color: $black;
			font-size: 30px;
			font-family: $font-primary;
			letter-spacing: 3px;
			text-transform: uppercase;
		}
		.btn-primary{
			border: 1px solid rgba(255,255,255,.4);
			@include border-radius(30px);
			&:hover, &:focus{
				background: $white !important;
				color: $black;
			}
		}
	}
	&.hero-bread{
		padding: 12em 0;
	}

}

  </style>
</html>