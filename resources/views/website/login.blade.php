@include('template.header')


<div id="DaftarMentor" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Login</h6>
            <h4>SIlahkan Login</h4>
            @if(session()->has('LoginError'))
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                        {{ session('LoginError') }}
            </div>
          @endif 
          @if(session()->has('berhasil_registrasi'))
          <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
              <i class="bi bi-check-circle me-1"></i>
                      {{ session('berhasil_registrasi') }}
          </div>
          @endif 
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{url('login')}}" method="post">
            @csrf 
            <div class="row">                        
              <div class="col-lg-12">
                <div class="fill-form">
                  <h3>Login Website</h3>
                  <div class="row">                    
                    <div class="col-lg-12">
                      <fieldset>
                        <input required type="subject" name="email" id="email" placeholder="Masukan Email Anda">
                      </fieldset>
                      <fieldset>
                        <input required type="password" name="password" id="password" placeholder="Masukan password Anda">
                      </fieldset>                     
                    </div>                    
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Submit</button>
                        {{-- <span>Belum punya Akun?<a href="{{url('register')}}"> Silahkan Registrasi</a></span> --}}
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

  @include('template.footer')
