<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pendaftaran Trainer</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="card card-body mt-5">
		<section class="section profile">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading">
					<h2 style="color: #837CE6;text-align:center">Silahkan Untuk Mendaftar Menjadi Trainer</h2>
				</div>
				<form id="contact">
					<div class="row">
						<div class="col-lg-12">
							<div class="fill-form">
								<h3 style="text-align: center">Pendaftaran Trainer</h3>
								<div class="row">
									<div class="col-lg-12">
										<div class="accordion accordion-flush" id="accordionFlushExample">
											<div class="accordion-item">
                        <div>
                          <hr>                          
                          <h6>Form Pendaftaran Trainer</h6>
													<div class="accordion-body">
														<div class="form-floating mb-3">
															<input class="form-control" required type="subject" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap Dan Gelar">
															<label for="floatingInput">Nama Lengkap Dan Gelar</label>
														</div>
														<div class="form-floating mb-3">
															<input class="form-control" required type="email" name="email" id="email" placeholder="Email">
															<label for="floatingInput">Email</label>
														</div>
														<div class="form-floating mb-3">
															<input class="form-control" required type="subject" name="ttl" id="ttl" placeholder="TTL">
															<label for="floatingInput">Tempat Tanggal Lahir</label>
														</div>
														<div class="form-floating mb-3">
                              <input class="form-control" required type="subject" name="nik" id="nik" placeholder="NIK" pattern="[0-9]{16}">
															<label for="floatingInput">Nik</label>
                              <span for="floatingInput" style="color: red;">NIK harus terdiri dari 16 digit.</span>
														</div>
														<div class="form-floating mb-3">
															<input class="form-control" required type="subject" name="keahlian" id="keahlian" placeholder="Keahlian">
															<label for="floatingInput">Keahlian</label>
														</div>
														<div class="form-floating mb-3">
															<input class="form-control" required type="file" name="sertifikat_keahlian" id="sertifikat_keahlian" multiple placeholder="Sertifikat Keahlian">
															<label for="floatingInput">Sertifikat Keahlian</label>
														</div>
														<div class="form-floating mb-3">
															<input class="form-control" required type="subject" name="portofolio_kegiatan" id="portofolio_kegiatan" placeholder="Portofolio Kegiatan (text)">
															<label for="floatingInput">Portofolio Kegiatan</label>
														</div>
														<div class="form-floating mb-3">
															<input class="form-control" required type="file" name="upload_foto" id="upload_foto" placeholder="Upload photo (max 1 mb)">
															<label for="floatingInput">Upload Foto</label>
														</div>
														<div class="form-floating mb-3">
															<input class="form-control" required type="subject" name="pendidikan" id="pendidikan" placeholder="Pendidikan (S1,S2,S3)">
															<label for="floatingInput">Pendidikan</label>
														</div>
														<div class="form-floating mb-3">
															<input class="form-control" required type="file" name="cuplikan_vidio_profile" id="cuplikan_vidio_profile" placeholder="Cuplikan video Profile (max 20Mb)">
															<label for="floatingInput">Cuplikan video Profile</label>
														</div>
														<div class=" mb-3">
														<label for="floatingInput mb-3">Jenis Trainer</label> <br>
														<input type="checkbox" style="width: 20px;" id="jenis_mentor[]" value="Trainer">Trainer</label>
														<label>
														<input type="checkbox" style="width: 20px;" id="jenis_mentor[]" value="Motivator">Motivator</label>
														<label>
														<input type="checkbox" style="width: 20px;" id="jenis_mentor[]" value="Psikolog">Psikolog</label>
														<label>
														<input type="checkbox" style="width: 20px;" id="jenis_mentor[]" value="Coach">Coach</label>
														<label>
														<input type="checkbox" style="width: 20px;" id="jenis_mentor[]" value="Konselor & Hypnotherapist">Konselor & Hypnotherapist</label>
                            </div>
														<div class="form-floating mb-3">
															<input class="form-control" required type="subject" name="pendidikan_non_akademik" id="pendidikan_non_akademik" placeholder="Pendidikan Non Akademik">
															<label for="floatingInput">Pendidikan Non Akademik</label>
														</div>
														<div class="form-floating mb-3">
															<input class="form-control" required type="number" name="tarif" id="tarif" placeholder="Masukan tarif anda">
															<label for="floatingInput">Tarif</label>
														</div>
														<div class="form-floating mb-3">
															<textarea required name="alamat" class="form-control" id="alamat" placeholder="Alamat (Kecamatan,Kota,Provinsi)"></textarea>
															<label for="floatingInput">Alamat (Kecamatan,Kota,Provinsi)</label>
														</div>
                            <div class="col-lg-12">
                              <div class="form-floating mb-3">
                              <button type="submit" id="form-submit" class="btn btn-success main-button ">Submit</button>
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
				</form>
				</div>
			</div>
			</section>
	</div>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
    $("#contact").submit(function(event) {
        event.preventDefault();
        // Create a FormData object to handle file uploads
        var formData = new FormData();
        // Append form data, including files, to FormData
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("nama_lengkap", $("#nama_lengkap").val());
        formData.append("email", $("#email").val());
        formData.append("ttl", $("#ttl").val());
        formData.append("nik", $("#nik").val());
        formData.append("alamat", $("#alamat").val());
        formData.append("pendidikan", $("#pendidikan").val());
        formData.append("pendidikan_non_akademik", $("#pendidikan_non_akademik").val());
        formData.append("keahlian", $("#keahlian").val());
        formData.append("portofolio_kegiatan", $("#portofolio_kegiatan").val());
        var selectedMentorTypes = [];
        $('input[id="jenis_mentor[]"]:checked').each(function() {
            selectedMentorTypes.push($(this).val());
        });
        formData.append("jenis_mentor", selectedMentorTypes);
        formData.append("tarif", $("#tarif").val());
        // formData.append("sertifikat_keahlian", $("#sertifikat_keahlian")[0].files[0]);
        var sertifikatFiles = $("#sertifikat_keahlian")[0].files;
        for (var i = 0; i < sertifikatFiles.length; i++) {
            formData.append("sertifikat_keahlian[]", sertifikatFiles[i]);
        }
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
                // location.reload();
                window.location.href = '{{ url('/') }}';
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
  </script>
	</body>
	</html>