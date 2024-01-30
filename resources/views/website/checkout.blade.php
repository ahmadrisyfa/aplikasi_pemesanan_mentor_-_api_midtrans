{{-- @include('template.header') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    

  <div class="container">
    <div class="card card-body mt-5">

      <section class="section profile">
        <div class="row">
            <div class="col-lg-12">   

                          <div class="col-lg-6 offset-lg-3" style="text-align: center">
                            <div class="section-heading">
                              <h6>Pembayaran Pemesanan Mentor</h6>
                              {{-- <a href="{{url('invoice/'.$data->id)}}" target="_blank" class="btn btn-info main-button" style="text-align: center">Cetak Pemesanan</a> --}}

                              <button  id="pay-button" class="btn btn-success main-button" style="text-align: center">Bayar</button>
                            </div>
                          </div>      
                            <input required style="display: none" type="subject" name="jam" id="jam" placeholder="Masukan Jam Metting Anda Anda">                                                        
              </div>
        </div>
      </section>
    </div>
  </div>



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
{{-- @include('template.footer') --}}
</body>
</html>

  