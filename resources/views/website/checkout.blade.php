@include('template.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}"></script>
</head>
<body>
    

  <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
  

<div id="DaftarMentor" class="contact-us section">
    <div class="container">
      <div class="row">
{{-- <div id="snap-container"></div> --}}

        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Pembayaran Pemesanan Mentor</h6>
            <h4>Silahkan Selesaikan Pembayaran Anda</h4>
            {{-- @if(session()->has('LoginError'))
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                        {{ session('LoginError') }}
            </div>
          @endif  --}}
          @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
              <i class="bi bi-check-circle me-1"></i>
                      {{ session('message') }}
          </div>
          @endif 
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact">
            <div class="row">                        
              <div class="col-lg-12">
                <div class="fill-form">
                  <h3 style="color: #837CE6;margin-bottom:30px">Detail Mentor Yang Anda Pesan</h3>
                  <div class="row">                    
                    <div class="col-lg-6">
                        <span><b>Nama Lengkap: </b>{{$data->nama}}</span> <br><br>
                        <span><b>Keahlian: </b>{{$data->keahlian}}</span> <br><br>
                        <span><b>Pendidikan: </b>{{$data->pendidikan}}</span> <br><br>
                        <span><b>Portofolio: </b>{{$data->portofolio}}</span> <br><br>
                        <span><b>Vidio profile: <br></b><video src="{{$data->vidio_profile}}" width="400" height="300" controls>Your browser does not support the video tag.</video></span> <br><br>                        
                      </div>                    
                      <div class="col-lg-6">
                        <span><b>Harga: </b>{{ 'Rp. ' . number_format($data->harga, 0, ',', '.') }}</span> <br><br>
                        <span><b>Jenis: </b>{{$data->jenis}}</span> <br><br>
                        <span><b>Alamat: </b>{{$data->alamat}}</span> <br><br>
                        <span><b>Foto Mentor: <br> </b><img src="{{$data->photo}}" style="max-width: 300px; max-height: 300px;" alt=""></span> <br><br>
                    </div>   
                    <div class="col-lg-12">                        
                            <fieldset>
                              <input required type="subject" name="jam" id="jam" placeholder="Masukan Jam Metting Anda Anda">
                            </fieldset>                            
                            
                            <div class="col-lg-12">
                              <fieldset>
                                  <button  id="pay-button" class="main-button">Submit</button>
                            </fieldset>
                            </div>
                        </div>
                  </div>
                </div>
            </div>
            </div>
        </form>
        </div>
      </div>
</div>


{{-- <button id="pay-button">Pay!</button> --}}

<!-- @TODO: You can add the desired ID as a reference for the embedId parameter. -->

<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{$snapToken}}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
          alert("payment success!"); console.log(result);
        },
        onPending: function(result){
          /* You may add your own implementation here */
          alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
          alert("payment failed!"); console.log(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
  </script>
@include('template.footer')
</body>
</html>

  