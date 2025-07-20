<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.css')
</head>

<body>

    @include('home.header')


    <div class="item-details-page">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h2>View Details <em>For Item</em> Here.</h2>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="left-image">
              <img src="assets/images/banner.png" alt="" style="border-radius: 20px;">
            </div>
          </div>
          <div class="col-lg-5 align-self-center">
            <h4>The Greatest Book</h4>
            <span class="author">
              <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
              <h6>Liberty Artist</h6>
            </span>
            <p>Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="row">
              <div class="col-3">
                <span class="bid">
                  Available<br><strong>10</strong><br>
                </span>
              </div>
              
              <div class="col-5">
                <span class="ends">
                  Total Quantity<br><strong>20</strong><br>
                </span>
              </div>
            </div>
            
          </div>
          
    </div>
      </div>
        </div>
   

    @include('home.footer')
    
</body>

</html>
