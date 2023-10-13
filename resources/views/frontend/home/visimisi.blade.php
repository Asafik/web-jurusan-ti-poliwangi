@extends('frontend.layouts.app')

@section('content')

<section class="page-header-section ptb-120 gradient-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center text-white">
                    <h2 class="text-white">Visi & Misi Jurusan</h2>
                    <p class="lead">Bisnis Dan Infomatika Politeknik Negeri Banyuwangi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-header-section ptb-100">
   
<style>

[title~="dimyati"] {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
h4 {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: #0c0c0b;
}

p{
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   font-size: 17px;

}
</style>



  <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="zoom-in">
                    <img src="storage/images/logo.png" title="ti" width="80%">
                </div>
                <div class="col-lg-6 d-flex flex-column " data-aos="fade-left">
                    <div class="content pt-4 pt-lg-0">
                        <div style="text-align: justify;">
                            <h4 style="text-align: center;">Visi</h4>
                            <p>Menjadi jurusan teknik informatika yang unggul dan terkemuka untuk menunjang kebutuhan pasar global pada tahun 2027.</p>
                            <h4  style="text-align: center;">Misi</h4>
                            <ul style="list-style-type: number; margin: 20px;">
                                <li>Menghasilkan lulusan yang memiliki karakteristik berpengetahuan secara utuh, memiliki kemampuan untuk belajar dan beradaptasi, ketajaman bisnis, pengelolaan waktu, kemampuan interpersonal, serta menjunjung tinggi nilai-nilai Pancasila.</li>
                                <li>Berperan aktif dalam pengembangan dan peningkatan sistem pendidikan politeknik di Indonesia bidang teknologi informasi.</li>
                                <li>Aktif menyelenggarakan kegiatan tri dharma perguruan tinggi secara efektif, efisien dan akuntabel.</li>
                                <li>Menghasilkan produk-produk inovatif menggunakan teknologi informasi.</li>   
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
</section>
@endsection
