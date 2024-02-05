
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>DigiMedia - Creative SEO HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('template')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/templatemo-digimedia-v1.css">
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/animated.css">
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/owl.css">
    <style>
      .floating {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
        }

        .fab-icon {
        margin-top: 16px;
        }
    </style>
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  {{-- <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i>digimedia@company.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>010-020-0340</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{url('/')}}" class="logo">
              <img src="{{asset('template')}}/assets/images/logo-v1.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#layanan">Layanan</a></li>
              <li class="scroll-to-section"><a href="#mentor">Pilih Trainer</a></li> 
              <li class="scroll-to-section"><a href="#portofolio">Portofolio</a></li>
              <li class="scroll-to-section"><a href="#tentang_kami">Tentang Kami</a></li>
              {{-- <li class="scroll-to-section"><a href="{{url('pembatalan')}}">Pembatalan</a></li> --}}

              {{-- <li class="scroll-to-section"><a href="#DaftarMentor">Daftar Mentor</a></li>  --}}
              @auth
                @if (auth()->user()->is_admin == 1)                  
                    <li class="scroll-to-section"><a href="{{url('admin/tambah_mentor')}}">Tambah Mentor</a></li> 
                @endif
                {{-- <li class="scroll-to-section"><a href="{{url('logout')}}">Log Out</a></li>  --}}
              @endauth

              <li style="display: none" class="scroll-to-section"><div class="border-first-button"><a href="#contact">Free Quote</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <a href="https://wa.me/6289660787591" class="floating" target="_blank">
    <i class="fa fa-whatsapp fab-icon"></i>
    </a>