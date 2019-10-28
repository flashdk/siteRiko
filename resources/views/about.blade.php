<!DOCTYPE html>
<html lang="en">
@include('header')

  <div class="site-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 ml-auto order-lg-2 mb-5" data-aos="fade-up" data-aos-delay="200">
          <img src="{{Voyager::image(setting('site.imgAbout'))}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="100">
          <div class="site-section-heading text-left mb-5 w-border">
            <h2>About Riko</h2>
          </div>
          <p class="lead">{!! setting('site.about') !!}</p>
        </div>
  
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
          <h2 class="mb-5">Quelques amis</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
            officia, error reiciendis ab quod?</p>
        </div>
      </div>
      <div class="row">
        @if($friends->count())
            @foreach($friends as $friend)
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">        
                    <img src="{{Voyager::image($friend->img)}}" alt="{{$friend->name}}" class="img-fluid">
        
                    <div class="text">        
                        <h2 class="mb-2 font-weight-light h4">{{$friend->name}}</h2>
                        <span class="d-block mb-2 text-white-opacity-05">{{$friend->domaine}}</span>
                        <p class="mb-4">{!! $friend->description !!}</p>
                        <p>
                            <a href="{{$friend->facebookLink}}" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="{{$friend->tewtterLink}}" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="{{$friend->linkedLink}}" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>        
                </div>
            </div>
            @endforeach
        @endif         
      </div>
    </div>
  </div>

  @include('footer')
</body>

</html>