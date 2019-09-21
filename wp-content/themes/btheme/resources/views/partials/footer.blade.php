{{--<footer class="content-info">--}}
  {{--<div class="container">--}}
    {{--@php dynamic_sidebar('sidebar-footer') @endphp--}}
  {{--</div>--}}
{{--</footer>--}}
<footer>
  <div class="container">
    <div class="row ">
      <div class="footer-content mt-5  offset-5">
        <a href="https://www.barkingbird.com.au/">
          <img
                  class="img-responsive footer-logo-img mt-3"
                  src="https://www.barkingbird.com.au/assets/images/logos/horizontal.svg"
                  alt="Barking Bird"
          />
        </a>
      </div>
      <!--./footer-content-->
    </div>
    <!--/.row-->

    <div class="row">
      <h5 class="mt-3 subtitle  offset-4 mt-5" style="">
        <i>Register here to be the first to find out...</i>
      </h5>
    </div>
    <!--/.row-->
    <form
            class="mt-5 register-form"
            role="form"
            action="ajax.php"
            method="post"
    >
      <div class="form-row">
        <div class="col-sm-3 offset-3">
          <input
                  type="text"
                  name="fName"
                  placeholder="First Name*"
                  value=""
                  id="fname"
                  class="fname form-control"
                  required
          />
        </div>

        <div class="col-sm-3">
          <input
                  type="text"
                  name="lName"
                  placeholder="Last Name*"
                  value=""
                  id="lname"
                  class="lname form-control"
                  required
          />
        </div>
      </div>
      <!--/.form-row-->

      <div class="form-row mt-2">
        <div class="col-sm-6 offset-3">
          <input
                  type="email"
                  name="email"
                  placeholder="Email*"
                  id="user_email"
                  class="email form-control"
                  required
          />
        </div>
      </div>

      <div class="form-row mt-2">
        <div class="col-sm-3 offset-3">
          <input
                  type="text"
                  name="phone"
                  placeholder="Phone*"
                  id="user_phone"
                  class="phone form-control"
                  required
          />
        </div>

        <div class="col-sm-3">
          <select
                  name="hearfrome"
                  id="hearfrom"
                  class="hearfrom form-control"
          >
            <option disabled selected>
              How did you hear about us?*</option
            >
            <option value="fb">Facebook</option>
            <option value="google">Google</option>
            <option value="tw">Twitter</option>
          </select>
        </div>
      </div>
      <!--/.form-row-->

      <div class="form-row mt-3">
        <div class="offset-sm-4 privacy">
          <p class="text-sm-center">
            This site is protected by reCAPTCHA and Google
            <a
                    href="https://policies.google.com/privacy?hl=en-US"
            >Privacy Policy</a
            >
            and
            <a
                    href="https://policies.google.com/terms?hl=en-US"
            >Terms of Service</a
            >
            apply.
          </p>
        </div>
      </div>
      <!--/.form-row  -->
    </form>
    <div class=" form-row">
      <button class="offset-5 btn-create-user">Submit</button>
    </div>

    <div class="alt-contact text-center mt-4">
      <h6>Alternative please contact</h6>
      <p>1300 000 000</p>
      <h6>Visit us at the Sales Office</h6>
      <p>123 Fake St, Melbourne</p>
      <p>Friday -Sunday 11.00am to 5.00pm</p>
      <a
              style="display: block"
              href="https://www.barkingbird.com.au/"
      >
        <img
                class="img-responsive footer-logo-img mt-3"
                src="https://www.barkingbird.com.au/assets/images/logos/horizontal.svg"
                alt="Barking Bird"
        />
      </a>

      <div class="alt-contact-link mt-5">
        <a href="">Disclaimer</a> <span>|</span>
        <a href="">Privacy Policy</a>
      </div>
    </div>
  </div>
  <!--/.container-->
</footer>