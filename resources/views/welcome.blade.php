<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('header')

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Prestation à venir</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
              officia, error reiciendis ab quod?</p>
          </div>
        </div>
        <div class="row">
            @if($posts->count())
                @foreach($posts as $post)
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="#" class="unit-9">
                        <div class="image" style="background-image: url('{{Voyager::image($post->attachment)}}');"></div>
                        <div class="unit-9-content">
                            <h2>{{$post->title}}</h2>
                            <span>{{$post->eventDate}}</span>
                            <span>{{$post->presentBy}}</span>
                        </div>
                        </a>
                    </div>
                @endforeach
            @endif        
        </div>
      </div>
    </div>

    <div class="site-section">

      <div class="container">

        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
            <h2 class="mb-5">Featured Podcasts</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
          </div>
        </div>
        
        <div class="site-block-retro d-block d-md-flex">

          <a href="#" class="col1 unit-9 no-height" data-aos="fade-up" data-aos-delay="100">
            <div class="image" style="background-image: url('assets/images/img_2.jpg');"></div>
            <div class="unit-9-content">
              <h2>Classic Songs For Classic People</h2>
              <span>Friday 1:00pm &mdash; 2:30pm</span>
            </div>
          </a>

          <div class="col2 ml-auto">

            <a href="#" class="col2-row1 unit-9 no-height" data-aos="fade-up" data-aos-delay="200">
              <div class="image" style="background-image: url('assets/images/img_3.jpg');"></div>
              <div class="unit-9-content">
                <h2>Classic Songs For Classic People</h2>
                <span>Friday 1:00pm &mdash; 2:30pm</span>
              </div>
            </a>

            <a href="#" class="col2-row2 unit-9 no-height" data-aos="fade-up" data-aos-delay="300">
              <div class="image" style="background-image: url('assets/images/img_1.jpg');"></div>
              <div class="unit-9-content">
                <h2>Classic Songs For Classic People</h2>
                <span>Friday 1:00pm &mdash; 2:30pm</span>
              </div>
            </a>

          </div>

        </div>
        
      </div>
    </div>
    
    <div class="site-section bg-dark">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
            <h2 class="mb-5">Nos &amp; Evenements</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <a href="single.html"><img src="assets/images/img_4.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <a href="single.html"><img src="assets/images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <a href="single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('footer')
    </body>
</html>
