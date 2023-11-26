@include('template.header')


<div id="DaftarMentor" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Registrasi</h6>
            <h4>SIlahkan Registrasi</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{url('register')}}" method="post">
            @csrf 
            <div class="row">                        
              <div class="col-lg-12">
                <div class="fill-form">
                  <h3>Registrasi Website</h3>
                  <div class="row">                    
                    <div class="col-lg-12">
                      <fieldset>
                        <input required type="name" name="name" id="name" placeholder="Masukan Nama Anda">
                      </fieldset>
                      <fieldset>
                        <input required type="email" name="email" id="email" placeholder="Masukan Email Anda">
                      </fieldset>
                      <fieldset>
                        <input required type="subject" name="password" id="password" placeholder="Masukan password Anda">
                      </fieldset>                     
                    </div>                    
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Submit</button>
                        <span>Sudah punya Akun?<a href="{{url('login')}}"> Silahkan Login</a></span>
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
