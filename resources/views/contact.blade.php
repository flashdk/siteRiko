<!DOCTYPE html>
<html lang="en">
    @include('header')
  <div class="site-section">
    <div class="container">
      <div class="row">  
        <div class="col-md-12 col-lg-7 mb-5">
          <form class="contact-form" id="sendMessage" role="form"  method="post" action="{{ route('sendMessage')}}">
            @csrf
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Nom Complet</label>
                <input type="text" id="fullname" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror  
            </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email Address" name="email">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="subjet">Objet</label>
                <input type="text" id="subject" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Subject" name="subject">
                @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror  
            </div>
            </div>
  
  
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="5" class="form-control @error('name') is-invalid @enderror"
                  placeholder="Say hello to us"></textarea>
                  @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
              </div>
            </div>
  
            <div class="row form-group">
              <div class="col-md-12">
                <button type="submit" id="saveMessage" class="btn btn-primary py-3 px-4">Send Message</button>
              </div>
            </div>
  
          </form>
        </div>
  
        <div class="col-lg-4 ml-auto">
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Contact Info</h3>
            <p class="mb-0 font-weight-bold text-black">Address</p>
            <p class="mb-4 text-black">203 Fake St. Mountain View, San Francisco, California, USA</p>
  
            <p class="mb-0 font-weight-bold text-black">Phone</p>
            <p class="mb-4"><a href="#">+1 232 3235 324</a></p>
  
            <p class="mb-0 font-weight-bold text-black">Email Address</p>
            <p class="mb-0"><a href="#">youremail@domain.com</a></p>
  
          </div>         
        </div>
      </div>
    </div>
  </div>

  @include('footer')
</body>

</html>