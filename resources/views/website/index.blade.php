@include('template.header')
  <!-- ***** Header Area End ***** -->
  @if(session('pembatalan_message'))
  <div class="alert alert-success">
      {{ session('pembatalan_message') }}
  </div>

  <script>
      // Display a JavaScript alert
      alert("{{ session('pembatalan_message') }}");
  </script>
@endif

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6 style="color: #7761b7">HyCoach Indonesia</h6>
                    <h2 style="color: #7761b7">Selamat Datang Di Website</h2>
                    <p style="color: #7761b7">HyCoach Indonesia

                      Jika anda sedang mencari para Trainer, Motivator, dan Coach untuk peningkatan kapasitas SDM perusahaan atau instansi anda. Maka HyCoach Indonesia akan membantu anda dalam meningkatkan SDM yang berkualitas dan berdaya saing.
                      
                      </p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a  href="https://wa.me/6289660787591" style="color: #7761b7">Konsultasi Sekarang!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('template')}}/assets/images/slider-dec.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('template')}}/assets/images/about-dec.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>Who is DigiMedia <em>Agency</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>We hope this DigiMedia template is useful for your work. You can use this template for any purpose. You may <a rel="nofollow" href="http://paypal.me/templatemo" target="_blank">contribute a little amount</a> via PayPal to <a href="https://templatemo.com/contact" target="_blank">support TemplateMo</a> in creating new templates regularly.</p>
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="90">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            90%<br>
                            <span>Coding</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>Photoshop</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>Animation</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div id="layanan" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Layanan</h6>
            <h4>Layanan Yang Di Sediakan</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb">
                      <div class="thumb">
                        <span class="icon"><img src="{{asset('template')}}/assets/images/service-icon-01.png" alt=""></span>
                        terapi
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{asset('template')}}/assets/images/service-icon-02.png" alt=""></span>
                        Konsultasi
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{asset('template')}}/assets/images/service-icon-03.png" alt=""></span>
                        coaching
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{asset('template')}}/assets/images/service-icon-04.png" alt=""></span>
                        training
                      </div>
                    </div>
                    
                  </div>
                </div> 
                {{-- <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>SEO Analysis &amp; Daily Reports</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('template')}}/assets/images/services-image.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Healthy Food &amp; Life</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('template')}}/assets/images/services-image-02.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Car Re-search &amp; Transport</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('template')}}/assets/images/services-image-03.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Online Shopping &amp; Tracking ID</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('template')}}/assets/images/services-image-04.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Enjoy &amp; Travel</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('template')}}/assets/images/services-image.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>           --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


 


  <div id="mentor" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Pilih mentor</h6>
            <h4>Silahkan Plih Jenis Mentor Anda</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a href="{{url('jenis_mentor/Trainer')}}">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{asset('template')}}/assets/images/portfolio-01.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Trainer</h4>
                  {{-- <span>Marketing</span> --}}
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="{{url('jenis_mentor/Motivator')}}">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{asset('template')}}/assets/images/portfolio-01.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Motivator</h4>
                  {{-- <span>Marketing</span> --}}
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="{{url('jenis_mentor/Konselor & Hypnotherapist')}}">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{asset('template')}}/assets/images/portfolio-02.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Konselor & Hypnotherapist</h4>
                  {{-- <span>Marketing</span> --}}
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="{{url('jenis_mentor/Psikolog')}}">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{asset('template')}}/assets/images/portfolio-03.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Psikolog</h4>
                  {{-- <span>Marketing</span> --}}
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="{{url('jenis_mentor/Coach')}}">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{asset('template')}}/assets/images/portfolio-04.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Coach</h4>
                  {{-- <span>Marketing</span> --}}
                </div>
              </div>
              </a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>Recent News</h6>
            <h4>Check Our Blog <em>Posts</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#"><img src="{{asset('template')}}/assets/images/blog-post-01.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">SEO Analysis</span>
              <span class="date">03 August 2021</span>
              <a href="#"><h4>Lorem Ipsum Dolor Sit Amet, Consectetur Adelore
                Eiusmod Tempor Incididunt</h4></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers itii eiumod deis tempor incididunt ut labore.</p>
              <span class="author"><img src="{{asset('template')}}/assets/images/author-post.jpg" alt="">By: Andrea Mentuzi</span>
              <div class="border-first-button"><a href="#">Discover More</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="{{asset('template')}}/assets/images/blog-post-02.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">SEO Analysis</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="{{asset('template')}}/assets/images/blog-post-03.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">SEO Analysis</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="#"><img src="{{asset('template')}}/assets/images/blog-post-04.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">SEO Analysis</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   --}}

  <div id="portofolio" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Portofolio</h6>
            <h4>Portofolio Instansi</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                {{-- <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb">
                      <div class="thumb">
                        <span class="icon"><img src="{{asset('template')}}/assets/images/service-icon-01.png" alt=""></span>
                        terapi
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{asset('template')}}/assets/images/service-icon-02.png" alt=""></span>
                        Konsultasi
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{asset('template')}}/assets/images/service-icon-03.png" alt=""></span>
                        coaching
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{asset('template')}}/assets/images/service-icon-04.png" alt=""></span>
                        training
                      </div>
                    </div>
                    
                  </div>
                </div>  --}}
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Seo Analysis (Tentang HyCoach Indonesia)
                              </h4>
                                <p>  Kami adalah platform penyedia para Trainer, Motivator, dan Coach Profesional yang telah berpengalaman memberikan berbagai training, motivasi, dan coaching di perusahaan swasta, BUMN, instansi Pemerintah, dan Kementrian Republik Indonesia. HyCoach Indonesia merupakan salah satu bagian dari unit usaha PT. Hafara Aqiba Nusantara.
                            
                                </p>
                                  <h4>Adapun kelebihan kami :</h4>
                                <div class="ticks-list">
                                  <span><i class="fa fa-check"></i>Fasilitator sangat Berpengalaman</span>
                                  <span><i class="fa fa-check"></i>Memiliki Sertifikasi Kompetensi</span>
                                  <span><i class="fa fa-check"></i>Komunikatif</span>                                                                  
                                  <span><i class="fa fa-check"></i>Penyampaian Fun dan Energik</span> 
                                  <span><i class="fa fa-check"></i>Bisa Custom Materi</span>
                                </div>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p> --}}
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('template')}}/assets/images/services-image.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Healthy Food &amp; Life</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('template')}}/assets/images/services-image-02.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Car Re-search &amp; Transport</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('template')}}/assets/images/services-image-03.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Online Shopping &amp; Tracking ID</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('template')}}/assets/images/services-image-04.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Enjoy &amp; Travel</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('template')}}/assets/images/services-image.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="mentor1" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Daftar mentor</h6>
            <h4>Silahkan Plih Mentor Anda</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">

            @foreach ($mentor as $data_mentor)                
            <div class="item">
              <a href="{{url('pemesanan_mentor/'.$data_mentor->id.'/detail')}}">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{$data_mentor->upload_foto}}" style="width: 180px;height:150px" alt="">
                </div>
                <div class="down-content">
                  <h4>{{$data_mentor->nama_lengkap}}</h4>
                  {{-- <span>{{$data_mentor->alamat}}</span> --}}
                  <span>{{substr($data_mentor->alamat, 0, 70)}}</span>

                </div>
              </div>
              </a>  
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="tentang_kami" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Tentang Kami</h6>
            {{-- <h4>Get In Touch With Us <em>Now</em></h4> --}}
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form class="card" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="{{asset('template')}}/assets/images/contact-dec.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6661399774803!2d107.731973073791!3d-6.930449167835769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c338fff37819%3A0xb3d9da2e5eb7f1f6!2sPT.%20Hafara%20Aqiba%20Nusantara%20(%20Hafara%20Group%20)!5e0!3m2!1sid!2sid!4v1706006668006!5m2!1sid!2sid" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{asset('template')}}/assets/images/phone-icon.png" alt="">
                          <a href="wa.me/6289675678830" target="_blank">+6289675678830</a>
                          <a href="wa.me/6281324511570" target="_blank">+6281324511570</a>

                        </div>
                      </div>
                    </div>                    
                    <div class="col-lg-6">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{asset('template')}}/assets/images/email-icon.png" alt="">
                          <a href="#">admin@hafaragroup.com</a>
                          <a href="#">hafaraaqiba@gmail.com
                        </div>
                      </div>
                    </div>
                  
                    <div class="col-lg-12">
                      <div class="info-post">
                        <div class="icon">
                          <img style="text-align: center;margin-left:15px" src="{{asset('template')}}/assets/images/location-icon.png" alt="">
                          <a href="#">Jl. Cibolerang, Cinunuk, Kec. Cileunyi, Bandung, Jawa Barat</a>
                        </div>
                      </div>
                    </div>                  
                    <div class="col-lg-12">
                      <fieldset style="text-align: center;margin-top:20px">
                        <a href="{{url('pendaftaran_mentor')}}" class="btn btn-success" >Pendaftaran Trainer</a>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> 
  {{-- <div id="DaftarMentor" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Pendaftaran Mentor</h6>
            <h4>SIlahkan Untuk Mendaftar Menjadi Mentor</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{url('daftar_mentor/create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">                        
              <div class="col-lg-12">
                <div class="fill-form">
                  <h3>Pendaftaran Mentor</h3>
                  <div class="row">                    
                    <div class="col-lg-6">
                      <fieldset>
                        <input required type="subject" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap Dan Gelar" >
                      </fieldset>
                      <fieldset>
                        <input required type="subject" name="ttl" id="ttl" placeholder="TTL">
                      </fieldset>
                      <fieldset>
                        <input required type="subject" name="nik" id="nik" placeholder="NIK">
                      </fieldset>                    
                      <fieldset>
                        <input required type="subject" name="keahlian" id="keahlian" placeholder="Keahlian">
                      </fieldset>
                      <fieldset>
                        <span style="padding-right: 340px">Sertifikat Keahlian</span>
                        <input required type="file" name="sertifikat_keahlian" id="sertifikat_keahlian" placeholder="Sertifikat Keahlian(PDF)">
                      </fieldset>
                      <fieldset>
                        <input required type="subject" name="portofolio_kegiatan" id="portofolio_kegiatan" placeholder="Portofolio Kegiatan (text)">
                      </fieldset>
                      <fieldset>
                        <span style="padding-right: 380px">Upload Foto</span>
                        <input required type="file" name="upload_foto" id="upload_foto" placeholder="Upload photo (max 1 mb)">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input required type="subject" name="pendidikan" id="pendidikan" placeholder="Pendidikan (S1,S2,S3)">
                      </fieldset>                    
                      <fieldset>
                        <span style="padding-right: 300px;">Cuplikan video Profile</span>
                        <input required type="file" name="cuplikan_vidio_profile" id="cuplikan_vidio_profile" placeholder="Cuplikan video Profile (max 20Mb)">
                      </fieldset>
                      <fieldset>
                        <select name="jenis_mentor" required="" id="jenis_mentor" class="form-select" style="margin-top: 33px;border-radius:500px">
                          <option selected disabled style="text-align: center">--- Jenis Mentor ---</option>
                          <option value="Trainer">Trainer</option>
                          <option value="Motivator">Motivator</option>
                          <option value="Konselor & Hypnotherapist">Konselor & Hypnotherapist</option>
                          <option value="Psikolog">Psikolog</option>
                          <option value="Coach">Coach</option>
                        </select>
                      </fieldset>
                      <fieldset>
                        <input required type="subject" name="pendidikan_non_akademik" id="pendidikan_non_akademik" placeholder="Pendidikan Non Akademik">
                      </fieldset>
                      <fieldset>
                        <input required type="subject" name="ratecard" id="ratecard" placeholder="Masukan Ratecard anda">
                      </fieldset>
                      <fieldset>
                        <textarea required name="alamat" class="form-control" id="alamat" placeholder="Alamat (Kecamatan,Kota,Provinsi)"></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Submit</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>  --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $("#contact").submit(function(event) {
        event.preventDefault();

        // Create a FormData object to handle file uploads
        var formData = new FormData();

        // Append form data, including files, to FormData
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("nama_lengkap", $("#nama_lengkap").val());
        formData.append("ttl", $("#ttl").val());
        formData.append("nik", $("#nik").val());
        formData.append("alamat", $("#alamat").val());
        formData.append("pendidikan", $("#pendidikan").val());
        formData.append("pendidikan_non_akademik", $("#pendidikan_non_akademik").val());
        formData.append("keahlian", $("#keahlian").val());
        formData.append("portofolio_kegiatan", $("#portofolio_kegiatan").val());
        formData.append("jenis_mentor", $("#jenis_mentor").val());
        formData.append("ratecard", $("#ratecard").val());
        
        // Append files to FormData
        formData.append("sertifikat_keahlian", $("#sertifikat_keahlian")[0].files[0]);
        formData.append("upload_foto", $("#upload_foto")[0].files[0]);
        formData.append("cuplikan_vidio_profile", $("#cuplikan_vidio_profile")[0].files[0]);

        // Use AJAX to submit the form with FormData
        $.ajax({
            url: '{{ url('daftar_mentor/create') }}',
            type: 'POST',
            data: formData,
            contentType: false, // Don't set content type when sending FormData
            processData: false, // Don't process data (needed for FormData)
            success: function(response) {
                alert(response.message);
                location.reload();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
</script>

@include('template.footer')
