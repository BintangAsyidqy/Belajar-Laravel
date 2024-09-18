@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sejarah Kota Bogor dari zaman kerajaan hingga modern. Temukan perjalanan panjang Kota Hujan yang penuh dengan keindahan sejarah dan budaya.">
    <title>Sejarah Kota Bogor - Perjalanan Kota Hujan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
.hero {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.hero h1, .hero p {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
}

    </style>
</head>
<body>

    <section class="hero bg-dark text-center text-white" style="background-image: url('assets/img/istana.jpeg'); background-size: cover; height: 80vh;">
        <div class="container d-flex align-items-center justify-content-center" style="height: 100%;">
            <div>
                <h1 class="display-4">Sejarah Kota Bogor</h1>
                <p class="lead">Perjalanan Kota Hujan dari Masa ke Masa</p>
                <a href="#sejarah" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>

    <section id="sejarah" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Sejarah Kota Bogor</h2>
                <p>Menelusuri perjalanan panjang Kota Bogor dari masa lalu hingga kini.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Masa Kerajaan</h3>
                    <p>Kota Bogor telah dikenal sejak masa Kerajaan Pajajaran. Pada abad ke-15, daerah ini menjadi pusat kekuasaan Kerajaan Sunda yang megah, dengan Prabu Siliwangi sebagai salah satu raja terkenal yang memerintah wilayah ini.</p>
                </div>
                <div class="col-md-6">
                    <h3>Era Kolonial</h3>
                    <p>Pada abad ke-17, Bogor mulai berkembang di bawah pemerintahan kolonial Belanda. Gubernur Jenderal Belanda, Gustaaf Willem van Imhoff, mendirikan Istana Bogor pada tahun 1745, yang menjadi simbol kekuasaan kolonial di Jawa Barat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Pasca Kemerdekaan</h3>
                    <p>Setelah Indonesia merdeka pada tahun 1945, Bogor berkembang menjadi kota pendidikan dan ilmu pengetahuan. Kota ini menjadi rumah bagi Institut Pertanian Bogor (IPB) dan berkembang sebagai salah satu kota pendidikan terbaik di Indonesia.</p>
                </div>
                <div class="col-md-6">
                    <h3>Bogor Modern</h3>
                    <p>Saat ini, Bogor terkenal sebagai kota wisata dan budaya, dengan berbagai destinasi menarik seperti Kebun Raya Bogor, Istana Bogor, dan Puncak yang menjadi tujuan wisatawan dari berbagai daerah.</p>
                </div>
            </div>
        </div>
    </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection