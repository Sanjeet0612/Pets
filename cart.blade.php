  @include('layout.header')
  <section id="banner" class="py-3" style="background: #F9F3EC;">
    <div class="container">
      <div class="hero-content py-1 my-3">
        <h2 class="display-1 mt-3 mb-0">Cart</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="#">Home</a>
          <a class="breadcrumb-item nav-link" href="#">Pages</a>
          <span class="breadcrumb-item active" aria-current="page">Cart</span>
        </nav>
      </div>
    </div>
  </section>

  <section id="cart" class="my-5 py-5">
    <div class="container">
      <div class="row g-md-5">
        <div class="col-md-8 pe-md-5">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="card-title text-uppercase">Product</th>
                <th scope="col" class="card-title text-uppercase">Quantity</th>
                <th scope="col" class="card-title text-uppercase">Subtotal</th>
                <th scope="col" class="card-title text-uppercase"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row" class="py-4">
                  <div class="cart-info d-flex flex-wrap align-items-center ">
                    <div class="col-lg-3">
                      <div class="card-image">
                        <img src="{{url('/assets')}}/images/item1.jpg" alt="cloth" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card-detail ps-3">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none">Grey Hoodie</a>
                        </h5>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="input-group product-qty align-items-center w-50">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity"
                      class="form-control input-number text-center p-2 mx-1" value="1">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="total-price">
                    <span class="secondary-font fw-medium">$150.00</span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="cart-remove">
                    <a href="#">
                      <svg width="24" height="24">
                        <use xlink:href="#trash"></use>
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td scope="row" class="py-4">
                  <div class="cart-info d-flex flex-wrap align-items-center ">
                    <div class="col-lg-3">
                      <div class="card-image">
                        <img src="{{url('/assets')}}/images/item9.jpg" alt="cloth" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card-detail ps-3">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none">Dog Food</a>
                        </h5>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="input-group product-qty align-items-center w-50">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity"
                      class="form-control input-number text-center p-2 mx-1" value="1">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="total-price">
                    <span class="secondary-font fw-medium">$90.00</span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="cart-remove">
                    <a href="#">
                      <svg width="24" height="24">
                        <use xlink:href="#trash"></use>
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td scope="row" class="py-4">
                  <div class="cart-info d-flex flex-wrap align-items-center ">
                    <div class="col-lg-3">
                      <div class="card-image">
                        <img src="{{url('/assets')}}/images/item5.jpg" alt="cloth" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card-detail ps-3">
                        <h5 class="card-title">
                          <a href="#" class="text-decoration-none">Cat Home</a>
                        </h5>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="input-group product-qty align-items-center w-50">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity"
                      class="form-control input-number text-center p-2 mx-1" value="1">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="total-price">
                    <span class="secondary-font fw-medium">$260.00</span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="cart-remove">
                    <a href="#">
                      <svg width="24" height="24">
                        <use xlink:href="#trash"></use>
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
        <div class="col-md-4">
          <div class="cart-totals">
            <h2 class="pb-4">Cart Total</h2>
            <div class="total-price pb-4">
              <table cellspacing="0" class="table text-uppercase">
                <tbody>
                  <tr class="subtotal pt-2 pb-2 border-top border-bottom">
                    <th>Subtotal</th>
                    <td data-title="Subtotal">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          <span class="price-currency-symbol">$</span>1,500.00
                        </bdi>
                      </span>
                    </td>
                  </tr>
                  <tr class="order-total pt-2 pb-2 border-bottom">
                    <th>Total</th>
                    <td data-title="Total">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          <span class="price-currency-symbol">$</span>1,500.00</bdi>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="button-wrap row g-2">
              <div class="col-md-6"><button class="btn btn-dark btn-lg rounded-1 fs-6 p-3 w-100">Update Cart</button>
              </div>
              <div class="col-md-6"><button class="btn btn-dark btn-lg rounded-1 fs-6 p-3 w-100">Continue To
                  Shop</button></div>
              <div class="col-md-12"><a href="{{url('/checkout')}}"
                  class="btn btn-primary p-3 text-uppercase rounded-1 w-100">Proceed to checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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

  <section id="service">
    <div class="container pt-5 mt-5">
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