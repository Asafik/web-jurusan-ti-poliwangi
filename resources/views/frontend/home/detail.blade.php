@extends('frontend.layouts.app')

@section('content')

<section class="page-header-section ptb-120 gradient-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center text-white">
                    <h2 class="text-white">Detail Dosen</h2>
                    <p class="lead">Jurusan Bisnis Dan Infomatika Politeknik Negeri Banyuwangi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-header-section ptb-100">
  
<style>




.tbody,tr,td{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  color: #020529;
  background-color: teal;
  font-weight: bold;
  font-size: 18px;
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
}


</style>
        
                
<!-- aboutme -->
<section id="aboutme">
    <div class="container">
      <div class="row">

        <div class="card">
            <img src="{{ asset('storage/images/employees/' . $data->image) }}" width="300px"class="rounded-cicle">
          <div class="container">
            <h4><b>{{ $data->name }}</b></h4> 
          </div>
        </div>

        <div class="col-md-6">
          <div class="container">
            <table class="table table-stripped">
              <tbody>
                <tr>
                  <td>Nama     :</td>
                  <td>{{ $data->name }}</td>
                </tr>
                <tr>
                  <td>Nomor Identitas     :</td>
                  <td>{{ $data->identity_number }}</td>
                </tr>
                <tr>
                  <td>Jenis Kelamin    :</td>
                  <td>{{ $data->gender }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
</section>
@endsection


