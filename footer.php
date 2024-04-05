<div class="container contact-us">
    <div class="row">
      <div class="col-md-6 contact-us-one" >
      <h2>CONNECT WITH US</h2> 
       <div style="display: flex;"><p><b>HEAD OFFICE: </b></p> </div> 
       <div> <p>104, Terminal 9, Near Vile Parle Police Station, Nehru Road, Vile Parle (East), Mumbai – 400 057, Maharashtra, India.</p></div> <br>

       <div style="display: flex;"><p><b>For India sales and service:</b></p> </div> 
       <div> <p>Email: bpa@crushersagarwalla.com</p></div>
       <div> <p>Contact : +91-8960375650, +91-8858888865</p></div>

       <div><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d120625.03232534994!2d72.82365768161662!3d19.12816495542504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d19.190559999999998!2d72.9549033!4m5!1s0x3be7c9b3bdec7b01%3A0xdf289e3f9e855a4c!2s104%2C%20Terminal%209%2C%20Near%20Vile%20Parle%20Police%20Station%2C%20Nehru%20Road%2C%20Vile%20Parle%20(East)%2C%20Mumbai%20%E2%80%93%20400%20057%2C%20India.!3m2!1d19.0961486!2d72.85519!5e0!3m2!1sen!2sin!4v1711626946668!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      </div>
      <div class="col-md-6 contact-us-two">
        <h2>Contact Form</h2>
        <form>
        <div class="form-group enq-form">
            <select class="" id="country" aria-label="Country Select" required>
              <option value="">Select city</option>
              <option value="AF">Afghanistan</option>
              <option value="AX">Åland Islands</option>
              <option value="AL">Albania</option>
              </select>
          </div>
          <div class="form-group enq-form">
            <input type="text"  id="name" placeholder="Enter your name" required>
            <input type="tel"  id="c_name" placeholder="Enter company name" required>
          </div>
          <div class="form-group enq-form">
            <input type="tel"  id="contact_no" placeholder="Enter your Phone" required>
            <input type="email"  id="mail" placeholder="Enter your Email" required>
          </div>

          <div class="form-group enq-form">
            <textarea class="form-control" id="address" rows="3" placeholder="Enter your address" required></textarea>
          </div>
          <div class="form-group enq-form">
            <textarea class="form-control" id="question" rows="3" placeholder="Write your question here"></textarea>
          </div>
          <div class="form-group enq-form form-check">
            <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
            <label class="form-check-label" for="agree">I agree to terms and conditions</label>
          </div>
          <button type="submit" class="btn" disabled>Submit</button>
        </form>
      </div>
    </div>
  </div>

<script>
    var Slider = (function() {
    var initSlider = function() {
        var dir = $("html").attr("dir");
        var swipeHandler = new Hammer(document.getElementById("slider"));
        swipeHandler.on('swipeleft', function(e) {
            if (dir == "rtl")
                $(".arrow-left").trigger("click");
            else
                $(".arrow-right").trigger("click");
        });

        swipeHandler.on('swiperight', function(e) {
            if (dir == "rtl")
                $(".arrow-right").trigger("click");
            else
                $(".arrow-left").trigger("click");
        });

        $(".arrow-right , .arrow-left").click(function(event) {
            var nextActiveSlide = $(".slide.active").next();

            if ($(this).hasClass("arrow-left"))
                nextActiveSlide = $(".slide.active").prev();

                if (nextActiveSlide.length === 0) {
                // Handle loop for next slide
                nextActiveSlide = $(this).hasClass("arrow-left") ? $(".slide").last() : $(".slide").first();
             
            }

            var nextActiveIndex = nextActiveSlide.index();
            $(".dots span").removeClass("active");
            $($(".dots").children()[nextActiveIndex]).addClass("active");

            updateSlides(nextActiveSlide);
        });

        $(".dots span").click(function(event) {
            var slideIndex = $(this).index();
            var nextActiveSlide = $($(".slider").children()[slideIndex]);
            $(".dots span").removeClass("active");
            $(this).addClass("active");

            updateSlides(nextActiveSlide);
        });

        var updateSlides = function(nextActiveSlide) {
            var nextActiveSlideIndex = $(nextActiveSlide).index();

            $(".slide").removeClass("prev-1");
            $(".slide").removeClass("next-1");
            $(".slide").removeClass("active");
            $(".slide").removeClass("prev-2");
            $(".slide").removeClass("next-2");

            nextActiveSlide.addClass("active");

            nextActiveSlide.prev().addClass("prev-1");
            nextActiveSlide.prev().prev().addClass("prev-2");
            nextActiveSlide.addClass("active");
            nextActiveSlide.next().addClass("next-1");
            nextActiveSlide.next().next().addClass("next-2");
        }

       
    }
    return {
        init: function() {
            initSlider();
        }
    }
})();

$(function() {
    Slider.init();
});

</script>