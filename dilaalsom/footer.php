<!-- Footer -->
  <footer class="section teal darken-2 white-text">
  
  <!-- Section: Contact -->
  <section id="contact" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="card-panel teal white-text center">
            
            <h5>Contact Us For an advert booking</h5>
			 <a href="advert.html" class="white-text">
            <i class="material-icons">email</i>
            </a>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium fugit tempore hic enim possimus
              lorem ets.</p>
            <i class="material-icons center white-text">location_on</i><br>
            <p><h5>DilaalSOm Agency</h5>
            111 South Circular Road, Kismayo, Somalia</p>  
          </div>
          
        </div>
        <div class="col s12 m6">
          <div class="card-panel lighten-3">
            <h5 class="teal-text">Message Us</h5>
            <div class="input-field">
			  <i class="material-icons teal-text">person</i>
              <input type="text" placeholder="Name">
            </div>
            <div class="input-field">
              <i class="material-icons teal-text">mail</i>
              <input type="text" placeholder="Message">
            </div>
			<!--div class="input-field">
              <input type="text" placeholder="Password">
            </div-->
                  
            <input type="submit" value="Send" class="btn">
          </div>
        </div>
      </div>
    </div>
  </section>

  
  
     <!-- Section: Follow -->
  <section class="section section-follow teal darken-2 white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h4>Follow DilaalSom</h4>
          <p>Follow us on social media for special offers on adverts for gold sellers</p>
          <a href="https://www.facebook.com/" class="white-text">
            <i class="fab fa-facebook fa-2x"></i>
          </a>
          <a href="https://twitter.com/" class="white-text">
            <i class="fab fa-twitter fa-2x"></i>
          </a>
          <a href="https://www.instagram.com" class="white-text">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
          <!--a href="https://plus.google.com/discover" class="white-text">
            <i class="fab fa-google-plus fa-2x"></i>
          </a>
          <a href="https://www.pinterest.ie/" class="white-text">
            <i class="fab fa-pinterest fa-2x"></i>
          </a-->
        </div>
      </div>
    </div>
  </section>
  
    <p class="flow-text center">DilaalSom &copy; <?php echo date("Y") ?> </p>
	<!--h4>Sitemap</h4>

          <a href="sitemap.html" class="white-text">
            <i class="fa fa-database fa-2x"></i>
          </a-->
          <!--div class="col m3 s6">
          <a href=""><img src="img/dilaal-logo.png" style=""></a> 
		  </div-->	
  </footer>

   <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
  	  $(document).ready(function(){
    $('select').formSelect();
  });

    $('.dropdown-trigger').dropdown();
  </script>
  <script>
    
      $(document).ready(function() {
        $(".firstmg").click(function() {
          $("#infodet").toggle();
        });
        });
        
        
        $(document).ready(function() {
        $(".ph").click(function() {
          $(".phnum").toggle();
        });
        });
      
    </script>

     <script>
    // Sidenav
    const sideNav = document.querySelector('.sidenav');
    M.Sidenav.init(sideNav, {});

    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000
    });

    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});

  </script>
  </body>
</html>
