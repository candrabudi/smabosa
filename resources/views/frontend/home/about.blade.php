<section class="about-us section" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="about-left">
                    <div class="about-title align-left">
                        <span class="wow fadeInDown" data-wow-delay=".2s">Apa itu Smabosa Bopkri 1 Yogyakarta</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">{{ $about->title ?? '' }}</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">{{ $about->short_desc ?? '' }}</p>
                        <div class="button wow fadeInUp" data-wow-delay="1s">
                            <a href="about-us.html" class="btn mt-2">Peserta Didik</a>
                            <a href="about-us.html" class="btn mt-2">Guru</a>
                            <a href="about-us.html" class="btn mt-2">Bosa-ais</a>
                            <a href="about-us.html" class="btn mt-2">Fasilitas</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-right wow fadeInRight" data-wow-delay=".4s">
                    <img src="{{ !empty($about) ? asset('images/about/'.$about->thumbnail) : 'https://user-images.githubusercontent.com/43302778/106805462-7a908400-6645-11eb-958f-cd72b74a17b3.jpg' }}" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>