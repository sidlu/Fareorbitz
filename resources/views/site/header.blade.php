<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <meta property="og:title" content="Fareorbitz" />
   <meta property="og:site_name" content="Fareorbitz" />
   <title>Fareorbitz</title>
   <base href="/">
   <meta name="robots" content="noindex,nofollow" />
   <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
   <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}" />
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175030903-1"></script>
   <script type="text/javascript">
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-175030903-1');
   </script>
   <script>
      gtag('config', 'AW-592680810/jkbVCILmtcIDEOquzpoC', {
         'phone_conversion_number': '+1 888-926-8555'
      });
   </script>
</head>

<body>
   <header class="header-area">
      <div class="header-menu-wrapper padding-right-100px padding-left-100px">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="menu-wrapper">
                     <div class="logo">
                        <a href="/">
                           <img src="{{ asset('images/logo-dark.png') }}" alt="logo">
                        </a>
                     </div>
                     <div class="main-menu-content">
                        <ul>
                           <li class="sm-none notMobile"><a href="tel:+1-888-926-8555" class="text-color-1"><i class="la la-phone mr-1"></i>&nbsp;&nbsp; +1-888-926-8555</a></li>
                           <li class="sm-none notMobile"><a href="mailto:promotionalfare@fareorbitz.com" class="text-color-1"><i class="la la-envelope mr-1"></i>&nbsp;&nbsp; promotionalfare@fareorbitz.com</a></li>
                           <li>
                              <button class="btn-bars sm-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                 <i class="la la-align-right"></i>
                              </button>
                              <a href="tel:+1-888-926-8555" class="btn-bars bars-sm btn btn-primary btn-sm d-md-none text-white">
                                 <i class="la la-times"></i>
                              </a>
                           </li>
                        </ul>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                           <div class="offcanvas-header">
                              <div id="offcanvasRightLabel">
                                 <img src="{{ asset('images/logo_white.png') }}" alt="logo">
                              </div>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="la la-times"></i></button>
                           </div>
                           <div class="offcanvas-body">
                              <ul class="list-unstyled">
                                 <li><a href="/" title="home">Home</a></li>
                                 <!-- <li><a href="{{ url('about-us') }}" title="About us">About Us</a></li> -->
                                 <li><a href="/" title="Flights">Flights</a></li>
                                 <li><a href="{{ route('hotels') }}" title="Flights">Hotels</a></li>
                                 <li><a href="{{ url('holiday-packages') }}" title="Holiday Packages">Holiday Packages</a></li>
                                 <li><a href="{{ route('visa') }}" title="Visa">Visa</a></li>
                                 <li><a href="{{ url('contact-us') }}" title="contact us">Contact Us</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>