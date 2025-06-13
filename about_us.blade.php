 @include('layout.header')
 <section id="banner" class="py-3" style="background: #F9F3EC;">
    <div class="container">
      <div class="hero-content py-1 my-3">
        <h2 class="display-1 mt-3 mb-0">About <span class="text-primary">Us</span> </h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="#">Home</a>
          <a class="breadcrumb-item nav-link" href="#">Pages</a>
          <span class="breadcrumb-item active" aria-current="page">About Us</span>
        </nav>
      </div>
    </div>
  </section>

  <div class="my-5 py-5">
    <div class="container">
      <div class="row ">
        <div class="col-md-6 my-4 pe-5">
          <h2 class="">How Waggy Started </h2>
          <p>In commodo auctor eget congue sit. Ultrices eget pretium sit euismod mi id. Risus, aliquam odio
            posuere ac in in nisl sed augue. Porta aenean egestas malesuada in pulvinar enim viverra.</p>
          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 py-2 px-4">
            Read Blog
            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
              <use xlink:href="#arrow-right"></use>
            </svg></a>
        </div>
        <div class="col-md-6 my-4 ">
          <h2 class="">More About Us </h2>
          <p>In commodo auctor aenean egestas malesuada in pulvinar enim viverra.</p>
          <p class="m-0"> <span class="text-primary">✓</span> Porta aenean egestas malesuada in pulvinar enim
            viverra.</p>
          <p class="m-0"> <span class="text-primary">✓</span> Porta aenean egestas malesuada in pulvinar enim
            viverra.</p>
          <p class="m-0"> <span class="text-primary">✓</span> Porta aenean egestas malesuada in pulvinar enim
            viverra.</p>
          <p class="m-0"> <span class="text-primary">✓</span> Porta aenean egestas malesuada in pulvinar enim
            viverra.</p>

        </div>
      </div>
    </div>
  </div>

  <div class="my-5 pb-5">
    <div class="container">
      <div class="row ">
        <div class="col-md-6">
          <h2 class="display-4">You can buy best pet products from Waggy. </h2>
        </div>
        <div class="col-md-6">
          <p>Aliquet nunc vitae interdum mauris pretium lectus mauris viverra ornare quam diam felis. Ultrices
            eget pretium sit euismod mi id risus, aliquam odio posuere ac in in nisl sed augue. Porta aenean
            egestas malesuada in pulvinar enim viverra. ipsum dolor sit amet consectetur. Ipsum ipsum ut
            pulvinar ipsum cras metus purus mattis integer. Tellus ipsum viverra semper quisque eget nisl
            vel congue consectetur. </p>
          <p>Ultrices eget pretium sit euismod mi id risus, aliquam odio posuere ac in in nisl sed augue. Porta aenean
            egestas malesuada in pulvinar enim viverra. ipsum dolor sit amet consectetur. Ipsum ipsum ut
            pulvinar ipsum cras metus purus mattis integer. Tellus ipsum viverra semper quisque eget nisl
            vel congue consectetur. </p>

        </div>
      </div>
    </div>
  </div>

  <section id="register" style="background: url('{{url('/assets')}}/images/background-img.png') no-repeat;">
    <div class="container ">
      <div class="row my-5 py-5">
        <div class="offset-md-3 col-md-6 my-5 ">
          <h2 class="display-3 fw-normal text-center">Get 20% Off on <span class="text-primary">first Purchase</span>
          </h2>
          <form>
            <div class="mb-3">
              <input type="email" class="form-control form-control-lg" name="email" id="email"
                placeholder="Enter Your Email Address">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control form-control-lg" name="email" id="password1"
                placeholder="Create Password">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control form-control-lg" name="email" id="password2"
                placeholder="Repeat Password">
            </div>

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-dark btn-lg rounded-1">Register it now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section id="latest-blog" class="my-5">
    <div class="container py-5 my-5">
      <div class="row mt-5">
        <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
          <h2 class="display-3 fw-normal">Latest Blog Post</h2>
          <div>
            <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
              Read all
              <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                <use xlink:href="#arrow-right"></use>
              </svg></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 my-4 my-md-0">
          <div class="z-1 position-absolute rounded-3 m-2 px-3 pt-1 bg-light">
            <h3 class="secondary-font text-primary m-0">20</h3>
            <p class="secondary-font fs-6 m-0">Feb</p>

          </div>
          <div class="card position-relative">
            <a href="single-post.html"><img src="{{url('/assets')}}/images/blog1.jpg" class="img-fluid rounded-4" alt="image"></a>
            <div class="card-body p-0">
              <a href="single-post.html">
                <h3 class="card-title pt-4 pb-3 m-0">10 Reasons to be helpful towards any animals</h3>
              </a>

              <div class="card-text">
                <p class="blog-paragraph fs-6">At the core of our practice is the idea that cities are the incubators of
                  our greatest
                  achievements, and the best hope for a sustainable future.</p>
                <a href="single-post.html" class="blog-read">read more</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4 my-4 my-md-0">
          <div class="z-1 position-absolute rounded-3 m-2 px-3 pt-1 bg-light">
            <h3 class="secondary-font text-primary m-0">21</h3>
            <p class="secondary-font fs-6 m-0">Feb</p>

          </div>
          <div class="card position-relative">
            <a href="single-post.html"><img src="{{url('/assets')}}/images/blog2.jpg" class="img-fluid rounded-4" alt="image"></a>
            <div class="card-body p-0">
              <a href="single-post.html">
                <h3 class="card-title pt-4 pb-3 m-0">How to know your pet is hungry</h3>
              </a>

              <div class="card-text">
                <p class="blog-paragraph fs-6">At the core of our practice is the idea that cities are the incubators of
                  our greatest
                  achievements, and the best hope for a sustainable future.</p>
                <a href="single-post.html" class="blog-read">read more</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4 my-4 my-md-0">
          <div class="z-1 position-absolute rounded-3 m-2 px-3 pt-1 bg-light">
            <h3 class="secondary-font text-primary m-0">22</h3>
            <p class="secondary-font fs-6 m-0">Feb</p>

          </div>
          <div class="card position-relative">
            <a href="single-post.html"><img src="{{url('/assets')}}/images/blog3.jpg" class="img-fluid rounded-4" alt="image"></a>
            <div class="card-body p-0">
              <a href="single-post.html">
                <h3 class="card-title pt-4 pb-3 m-0">Best home for your pets</h3>
              </a>

              <div class="card-text">
                <p class="blog-paragraph fs-6">At the core of our practice is the idea that cities are the incubators of
                  our greatest
                  achievements, and the best hope for a sustainable future.</p>
                <a href="single-post.html" class="blog-read">read more</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="service">
    <div class="container py-5 my-5">
      <div class="row g-md-5 pt-4">
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:shopping-cart"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">Free Delivery</h3>
            <div class="card-text">
              <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:user-check"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">100% secure payment</h3>
            <div class="card-text">
              <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:tag"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">Daily Offer</h3>
            <div class="card-text">
              <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:award"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">Quality guarantee</h3>
            <div class="card-text">
              <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  
    @include('layout.footer')