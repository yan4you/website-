@extends('layouts.app')

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
                <button type="submit">
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>