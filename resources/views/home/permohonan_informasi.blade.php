@extends('layouts.main')

@section('container')
<br>
  <main id="main">

    @include('layouts.partials.breadcrumbs')

    <section class="inner-page">
      <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col">
                <img src="{{ asset('assets/img/Alur-Permohonan-Informasi.jpeg') }}" class="img-fluid" alt="">
            </div>
            <div class="col">
                <strong><p> Berikut ini merupakan alur permohonan informasi : </p></strong>
                <p> 1. Pemohon informasi datang ke desk layanan informasi (Ruang PPID Dinas Komunikasi dan Informatika Kota Madiun)</p>
                <p> 2. Mengisi buku tamu PPID dan formulir permohonan informasi dengan melampirkan fotocopy KTP pemohon </p>
                <p> 3. Menjelaskan maksud dan tujuan permintaan informasi yang jelas penggunaannya</p>
                <p> 4. Petugas memberi tanda bukti penerimaan permohonan informasi kepada pemohon informasi</p>
                <p> 5. Petugas memproses permintaan permohonan informasi publik sesuai dengan formulir permintaan informasi publik yang sudah ditanda tangani pemohon informasi</p>
                <p> 6. Petugas menyerahkan informasi sesuai permintaan pemohon, jika informasi termasuk dalam kategori informasi dikecualikan, PPID menyampaikan alasan sesuai dengan perundangan yang berlaku</p>
                <p> 7. Petugas memberikan tanda bukti penyerahan informasi publik kepada pemohon informasi</p>
                <p> 8. Petugas membukukan formulir dan KTP pemohon dan mencatat</p>
                
            </div>
          </div>
       
       
    
      </div>
    </section>

  </main><!-- End #main -->

 
@endsection
