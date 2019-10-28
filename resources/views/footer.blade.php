<div class="bg-primary" data-aos="fade">
  <div class="container">
    <div class="row">
      <a href="{{ setting('reseaux-sociaux.facebbook') }}" class="col-3 text-center py-4 social-icon d-block"><span
          class="icon-facebook text-white"></span></a>
      <a href="{{ setting('reseaux-sociaux.twitter') }}" class="col-3 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
      <a href="{{ setting('reseaux-sociaux.linkedin') }}" class="col-3 text-center py-4 social-icon d-block"><span
          class="icon-linkedin text-white"></span></a>
      <a href="{{ setting('reseaux-sociaux.youtube') }}" class="col-3 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
    </div>
  </div>
</div>
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Riko</h3>
              <p>{!! Str::limit(setting('site.about'), 120) !!}</p>
            </div>
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Subscribe</h3>
              <form action="{{route('newsLetter')}}"  role="form" method="post" class="site-block-subscribe">
                @csrf
                <div class="input-group mb-3">
                  <input type="email" class="form-control border-secondary text-white bg-transparent @error('email') is-invalid @enderror" placeholder="Enter your email"
                    aria-label="Enter Email" aria-describedby="button-addon2" name="email">
                    @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                  <div class="input-group-append">
                    <button class="btn btn-primary rounded-top-right-0" type="submit" id="button-addon2">Subscribe</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-12 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="{{route('index')}}">Acceuil</a></li>
                  <li><a href="{{route('event')}}">Evenements</a></li>
                  <li><a href="{{route('about')}}">About</a></li>
                  <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
              </div>             
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                  <a href="{{ setting('reseaux-sociaux.facebbook') }}" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="{{ setting('reseaux-sociaux.twitter') }}" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="{{ setting('reseaux-sociaux.linkedin') }}" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                  <a href="{{ setting('reseaux-sociaux.youtube') }}" class="pl-3 pr-3"><span class="icon-youtube"></span></a>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Watch Live Streaming</h3>

              <div class="block-16">
                <figure>
                  <img src="{{Voyager::image(setting('site.describeVideo'))}}" alt="Image placeholder" class="img-fluid rounded">
                  <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                </figure>
              </div>

            </div>

            

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/mediaelement-and-player.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/circleaudioplayer.js"></script>

  <script src="assets/js/main.js"></script>
    
