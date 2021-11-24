@extends('layouts.main')

@section('container')
<br>
  <main id="main">

    @include('layouts.partials.breadcrumbs')

    <section class="inner-page">
      <div class="container" data-aos="fade-up">
      <strong>  <p> a. Berdasarkan Jenis Kelamin </p> </strong>
      <table class="table">
        <tbody>
          <tr>
            <td>Laki-Laki</td>
            <td>53</td>
          </tr>
          <tr>
            <td>Perempuan</td>
            <td>24</td>
          </tr>
          <tr> 
            <td><strong>Jumlah</strong></td>
            <td><strong>77</strong></td>
          </tr>
        </tbody>
      </table>
      <br>
      <strong>  <p> b. Berdasarkan Eselon </p></strong> 
        <table class="table">
            <tbody>
              <tr>
                <td>Eselon II</td>
                <td>0</td>
              </tr>
              <tr>
                <td>Eselon III</td>
                <td>2</td>
              </tr>
              <tr>
                <td>Eselon IV</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Staff PNS</td>
                <td>34</td>
              </tr>
              <tr>
                <td>Tenaga Kontrak</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Tenaga Upahan</td>
                <td>39</td>
              </tr>
              <tr> 
                <td><strong>Jumlah</strong></td>
                <td><strong>77</strong></td>
              </tr>
            </tbody>
          </table>
          <br>

        <strong>   <p> c. Berdasarkan Golongan </p></strong> 
            <table class="table">
                <tbody>
                  <tr>
                    <td>Golongan IV</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>Golongan III</td>
                    <td>21</td>
                  </tr>
                  <tr>
                    <td>Golongan II</td>
                    <td>8</td>
                  </tr>
                  <tr>
                    <td>Tenaga Kontrak</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Tenaga Upahan</td>
                    <td>39</td>
                  </tr>
                  <td><strong>Jumlah</strong></td>
                  <td><strong>77</strong></td>
                </tbody>
              </table>
              <br>

            <strong>   <p> d. Berdasarkan Pendidikan Terakhir </p></strong> 
                <table class="table">
                    <tbody>
                      <tr>
                        <td>Magister / S2</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>Sarjana / Diploma IV</td>
                        <td>29</td>
                      </tr>
                      <tr>
                        <td>Diploma III / Diploma I</td>
                        <td>18</td>
                      </tr>
                      <tr>
                        <td>SLTA</td>
                        <td>25</td>
                      </tr>
                      <tr>
                        <td>SLTP</td>
                        <td>1</td>
                      </tr>
                      <td><strong>Jumlah</strong></td>
                      <td><strong>77</strong></td>
                    </tbody>
                  </table>
                  <br>
      </div>
    </section>

  </main><!-- End #main -->

 
@endsection
