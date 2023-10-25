@include('layouts.navbar')
<section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book A Order
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="" method="post">
              <div>
                <input type="text" name="name" class="form-control" placeholder="Your Name" />
              </div>
              {{-- <div>
                <input type="text" name="" class="form-control" placeholder="Phone Number" />
              </div> --}}
              <div>
                <input type="email" name="email" class="form-control" placeholder="Your Email" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              {{-- <div>
                <input type="date" class="form-control">
              </div> --}}
              <div class="btn_box">
                <button type="submit">Book Now</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Jln. windah supratman Gg III
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +62 853-6456-654
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  midguy steak house@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              midguy steak house 
            </a>
            <p>
              Midguy Steak House is the first steak house in our area!
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Open Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            09.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By Rumahwebsite Ponorogo
        </p>
      </div>
    </div>
  </footer>