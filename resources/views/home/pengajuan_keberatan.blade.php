@extends('layouts.main')

@section('container')
<br>
  <main id="main">

    @include('layouts.partials.breadcrumbs')

    <section class="inner-page">
      <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col">
                <img src="{{ asset('assets/img/Alur-Keberatan.jpeg') }}" class="img-fluid" alt="">
            </div>
            <div class="col">
              <strong> <p> Keterangan : </p></strong>

               <p> 1. Pemohon mengajukan permohonan keberatan ke atasan PPID</p>
               <p> 2. Diterima di meja layanan informasi</p>
               <p> 3. Petugas PPID menulis dalam formulir permohonan keberatan meliputi kelengkapan administrasi : identittas pemohon dan alasan pemohon</p>
               <p> 4. Petugas meminta bukti permohonan informasi publik dan kelengkapannya</p>
               <p> 5. Jika persyaratan sudah terpenuhi, pemohon dipersilahkan menandatangani formulir permohonan keberatan, selanjutnya petugas menandatangani dan menulis nomor registrasi</p>
               <p> 6. Petugas menyampaikan formulir keberatan kepada pemohon dan atasan PPID serta mengarsipnya</p>
               <p> 7. Atasan PPID selama 30 hari kerja berhak memberi tanggapan / jawaban</p>
               <p> 8. Jika pemohon sudah puas dengan tanggapan yang diberikan, keberatan selesai</p>
               <p> 9. Jika pemohon tidak puas dengan tanggapan yang diberikan, maka mengajukan sengketa informasi ke Komisi Informasi (KI) selambat-lambatnya 14 hari kerja sejak mendapat tanggapan.</p>
                
            </div>
          </div>
       
       
    
      </div>
    </section>

  </main><!-- End #main -->

 
@endsection
