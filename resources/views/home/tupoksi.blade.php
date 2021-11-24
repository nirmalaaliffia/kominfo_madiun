@extends('layouts.main')

@section('container')
<br>
  <main id="main">

    @include('layouts.partials.breadcrumbs')

    <section class="inner-page">
      <div class="container" data-aos="fade-up">
        <div class="card border-0" style="display:auto; text-align:center; align:center;">
            <iframe src="{{asset('assets/img/file/URAIAN-TUGAS-DAN-FUNGSI-DINAS-KOMUNIKASI-DAN-INFORMATIKA-KOTA-MADIUN.pdf')}}"
                style="width:80%;height:600px;margin: 0 auto;"></iframe>
            <div class="card-body">
                <a href="{{asset('assets/img/file/URAIAN-TUGAS-DAN-FUNGSI-DINAS-KOMUNIKASI-DAN-INFORMATIKA-KOTA-MADIUN.pdf')}}" download><button type="button"
                        class="btn btn-xs btn-success">
                        <i class="bx bx-download"></i> Unduh File
                    </button></a> <br>


            </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

 
@endsection
