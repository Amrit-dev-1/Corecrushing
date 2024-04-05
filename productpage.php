<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product page</title>
</head>

<body>
  <div class="container-fluid">
    <!-- header -->
    <?php include 'header.php'; ?>
    <?php include 'data2.php'; ?>
    <?php
    $id = $_GET['id'];  //Output: myquery

    ?>


    <div class="product-hero">
      
      <img src="<?php echo $Prod_Banner[$id]['image'] ?>" class="d-block w-100" alt="product-banner" />

      
      <div class="row product-hero-text">
        <div class="">
          <h1> <?php echo $Prod_Banner[$id]['title'] ?></h1>
          <h3 style="color:red"> <?php echo $Prod_Banner[$id]['title'] ?></h3>
          <p style=" width: 74%; "><?php echo $Prod_Banner[$id]['description'] ?></p>
          <button href="#" class="btn inquire-now">Inquire Now</button>
        </div>
      </div>


      <div class="row" style="position: absolute; top: 40%; left:70%; transform: translate(-50%, -50%);">
        <div class="">
          <!-- <img src="https://dummyimage.com/200x200/00000/ffffff&text=Image" class="d-block w-100" alt="product-banner" /> -->
        </div>

      </div>
    </div>
    <!-- Features -->
    <div>
      <div class="row features">
        <h1>SUCCESS IN EVERY HARDNESS</h1>
        <p>Wide range of crushing for soft to very hard materials. For various materials, crushing efficiency is increased by different jaw types. </p>
        <div class="row ">
          <div class="col-md-4 features-image-div">
            <img src="https://dummyimage.com/400x600/00000/ffffff&amp;text=Image" class="d-block w-100  features-image" alt="">
          </div>
          <div class="col-md-8 features-text " id="style-4">
            <div class="features-text-div">
              <div class="image-div">
                <img src="images/Favicon-01.webp" class="d-block logo-icon" alt="product-banner" />
              </div>
              <div class="text-div">
                <h4><?php echo $successInEveryHardness[$id]['h1'] ?></h4>
                <p> <?php echo $successInEveryHardness[$id]['d1'] ?></p>
              </div>
            </div>
            <div class="features-text-div">
              <div class="image-div">
                <img src="images/Favicon-01.webp" class="d-block logo-icon" alt="product-banner" />
              </div>
              <div class="text-div">
                <h4><?php echo $successInEveryHardness[$id]['h2'] ?></h4>
                <p> <?php echo $successInEveryHardness[$id]['d2'] ?></p>
              </div>
            </div>
            <div class="features-text-div">
              <div class="image-div">
                <img src="images/Favicon-01.webp" class="d-block logo-icon" alt="product-banner" />
              </div>
              <div class="text-div">
                <h4><?php echo $successInEveryHardness[$id]['h3'] ?></h4>
                <p> <?php echo $successInEveryHardness[$id]['d3'] ?></p>
              </div>
            </div>
            <div class="features-text-div">
              <div class="image-div">
                <img src="images/Favicon-01.webp" class="d-block logo-icon" alt="product-banner" />
              </div>
              <div class="text-div">
                <h4><?php echo $successInEveryHardness[$id]['h4'] ?></h4>
                <p> <?php echo $successInEveryHardness[$id]['d4'] ?></p>
              </div>
            </div>
            <div class="features-text-div">
              <div class="image-div">
                <img src="images/Favicon-01.webp" class="d-block logo-icon " alt="product-banner" />
              </div>
              <div class="text-div">
                <h4><?php echo $successInEveryHardness[$id]['h5'] ?></h4>
                <p> <?php echo $successInEveryHardness[$id]['d5'] ?></p>
              </div>
            </div>

            <div class="features-text-div">
              <div class="image-div">
                <img src="images/Favicon-01.webp" class="d-block logo-icon " alt="product-banner" />
              </div>
              <div class="text-div">
                <h4><?php echo $successInEveryHardness[$id]['h6'] ?></h4>
                <p> <?php echo $successInEveryHardness[$id]['d6'] ?></p>
              </div>
            </div>

            <div class="features-text-div">
              <div class="image-div">
                <img src="images/Favicon-01.webp" class="d-block logo-icon " alt="product-banner" />
              </div>
              <div class="text-div">
                <h4><?php echo $successInEveryHardness[$id]['h7'] ?></h4>
                <p> <?php echo $successInEveryHardness[$id]['d7'] ?></p>
              </div>
            </div>

            <div class="features-text-div">
              <div class="image-div">
                <img src="images/Favicon-01.webp" class="d-block logo-icon " alt="product-banner" />
              </div>
              <div class="text-div">
                <h4><?php echo $successInEveryHardness[$id]['h8'] ?></h4>
                <p> <?php echo $successInEveryHardness[$id]['d8'] ?></p>
              </div>
            </div>

            <div class="features-text-div">
              <div class="image-div">
                <img src="images/Favicon-01.webp" class="d-block logo-icon " alt="product-banner" />
              </div>
              <div class="text-div">
                <h4><?php echo $successInEveryHardness[$id]['h9'] ?></h4>
                <p> <?php echo $successInEveryHardness[$id]['d9'] ?></p>
              </div>
            </div>

            <div class="features-text-div">
              <div class="image-div">
                <img src="images/Favicon-01.webp" class="d-block logo-icon " alt="product-banner" />
              </div>
              <div class="text-div">
                <h4><?php echo $successInEveryHardness[$id]['h10'] ?></h4>
                <p> <?php echo $successInEveryHardness[$id]['d10'] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Table -->

    <div class="table-data">
      <h1>Technical specification</h1>
      <p>sit amet consectetur adipisicing elit. Ex, dignissimos aspernatur assumenda corporis fugit excepturi totam optio, voluptas distinctio natus expedita. Aspernatur quia, minima amet alias nobis eius eum perspiciatis!</p>

      <div class="elementor-widget-container">
        <div class="pp-table-container">
          <table class="tablesaw">
            <colgroup>
              <col span="1" class="">
            </colgroup>
            <thead>
              <tr class="">
                <th class="tab-heading"><span class="">Model</span></th>
                <th class="tab-heading"><span class="">Name</span></th>
                <th class="tab-heading"><span class="">Name</span></th>
            </thead>
            <tbody>
              <tr>
                <td class="tab-data"><span class="">400×250</span></td>
                <td class="tab-data"><span class="">16.10</span></td>
                <td class="tab-data"><span class="">200</span></td>
              </tr>
              <tr class="even-col">
                <td class="tab-data"><span class="">16.10</span></td>
                <td class="tab-data"><span class="">400×250</span></td>
                <td class="tab-data"><span class="">200</span></td>
              </tr>
              <tr>
                <td class="tab-data "><span class="">16.10</span></td>
                <td class="tab-data "><span class="">400×250</span></td>
                <td class="tab-data "><span class="">200</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Video slider -->
    <div class="image-gallery">
      <h1>Videos</h1>
      <div class="swiper mySwiper2 ">
        <div class="swiper-wrapper w-25">
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7x3FxxEKlvY?si=3iMueLymRZe-l62O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7x3FxxEKlvY?si=3iMueLymRZe-l62O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7x3FxxEKlvY?si=3iMueLymRZe-l62O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7x3FxxEKlvY?si=3iMueLymRZe-l62O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7x3FxxEKlvY?si=3iMueLymRZe-l62O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7x3FxxEKlvY?si=3iMueLymRZe-l62O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7x3FxxEKlvY?si=3iMueLymRZe-l62O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7x3FxxEKlvY?si=3iMueLymRZe-l62O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7x3FxxEKlvY?si=3iMueLymRZe-l62O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- Galary slider -->
    <div class="image-gallery">
      <h1>Gallery</h1>
      <div class="swiper mySwiper ">
        <div class="swiper-wrapper w-25">
          <div class="swiper-slide">
            <img src="https://dummyimage.com/300x300/d2ad77/ffffff&text=Img1" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="https://dummyimage.com/300x300/d2ad77/ffffff&text=Img2" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="https://dummyimage.com/300x300/d2ad77/ffffff&text=Img3" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="https://dummyimage.com/300x300/d2ad77/ffffff&text=Img4" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="https://dummyimage.com/300x300/d2ad77/ffffff&text=Img5" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="https://dummyimage.com/300x300/d2ad77/ffffff&text=Img6" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="https://dummyimage.com/300x300/d2ad77/ffffff&text=Img7" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="https://dummyimage.com/300x300/d2ad77/ffffff&text=Img8" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="https://dummyimage.com/300x300/d2ad77/ffffff&text=Img9" class="d-block w-100" alt="1" />
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>



    <!-- cta -->

    <div class="row cta">
      <div class="col-md-6">
        <div style="text-align: center; align-item: center ">
          <h3 class="">With supporting text below</h3>
          <p class="card-text">
            With supporting text below as a natural lead-in to additional
            content.
          </p>
          <button href="#" class="btn inquire-now">Inquire Now</button>
        </div>
      </div>
      <div class="col-md-6">
        <img src="https://dummyimage.com/600x300/d2ad77/ffffff&text=cta" class="d-block w-100" alt="..." />
      </div>
    </div>
    <!-- cta end -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <!-- Image slider style -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
          delay: 3000, // Delay between slides in milliseconds
          disableOnInteraction: false, // Enable/disable autoplay on slide interaction
        },
        loop: {
          loop: true
        },
        initialSlide: 3, // Start from the third slide (index 2)
      });
    </script>
    <!-- Video slider style -->
    <script>
      var swiper = new Swiper(".mySwiper2", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 10,
          stretch: 0,
          depth: 350,
          // modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
          delay: 5000, // Delay between slides in milliseconds
          disableOnInteraction: false, // Enable/disable autoplay on slide interaction
        },
        loop: {
          loop: true
        },
        initialSlide: 3, // Start from the third slide (index 2)
        spaceBetween: 250, // Adjust this value as needed for the desired space

      });
    </script>

    <!-- footer -->
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>