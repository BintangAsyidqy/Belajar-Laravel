@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Temukan keindahan wisata Bogor, dari pegunungan hingga tempat rekreasi keluarga. Nikmati pemandangan alam, kuliner, dan budaya khas Kota Hujan.">
    <title>Wisata Bogor - Kota Hujan yang Memikat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

.hero {
    position: relative;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.hero h1, .hero p {
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
}

    </style>
</head>
<body>

    <section class="hero bg-light text-center text-white" style="background-image: url('assets/img/tugu.jpeg'); background-size: cover; height: 100vh;">
        <div class="container d-flex align-items-center justify-content-center" style="height: 100%;">
            <div>
                <h1 class="display-4">Nikmati Pesona Wisata Bogor</h1>
                <p class="lead">Kota Hujan yang Memikat dengan Sejuta Keindahan Alam</p>
                <a href="#destinasi" class="btn btn-primary btn-lg">Jelajahi Sekarang</a>
            </div>
        </div>
    </section>

    <section id="destinasi" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Destinasi Wisata Populer di Bogor</h2>
                <p>Temukan tempat-tempat menarik untuk dikunjungi di Kota Hujan</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/kebun.jpeg" class="card-img-top" alt="Kebun Raya Bogor">
                        <div class="card-body">
                            <h5 class="card-title">Kebun Raya Bogor</h5>
                            <p class="card-text">Jelajahi taman botani terbesar di Indonesia dengan berbagai koleksi flora eksotis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/puncak.jpg" class="card-img-top" alt="Puncak Bogor">
                        <div class="card-body">
                            <h5 class="card-title">Puncak Bogor</h5>
                            <p class="card-text">Nikmati pemandangan pegunungan yang menakjubkan dan udara sejuk di Puncak.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/curug.jpeg" class="card-img-top" alt="Curug Cilember">
                        <div class="card-body">
                            <h5 class="card-title">Curug Cilember</h5>
                            <p class="card-text">Rasakan kesegaran air terjun di Curug Cilember yang dikelilingi hutan alami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection