<?php
include('header.php');
?>


<!-- Section: Contact -->
<section id="contact" class="section section-contact scrollspy">
  <div class="container">
    <div class="row">

      <!-- our additions for styling purpose-->
      <!--div class="col m3">
  			
        </div-->

      <div class="col s12 offset-m3 m6">

        <!-- changed color to light green for readerbility purpose-->
        <div class="card-panel gray lighten-3">
          <form action="process.php" method="post" id="login">
            <h5>Log in</h5>
            <div class="input-field">
              <input type="hidden" name="formname" value="login" readonly="readonly" />
            </div>
            <div class="input-field">
              <!--label>Email</label-->
              <i class="material-icons teal-text">mail</i>
              <input type="text" name="email" placeholder="Email">
            </div>
            <div class="input-field">
              <!--label>Password</label-->
              <i class="material-icons teal-text">lock</i>
              <input type="text" name="password" placeholder="Password">
            </div>

            <input type="submit" value="Login" class="btn">
          </form>
        </div>
      </div>

      <!-- our addition for styling purpose-->
      <div class="col m3">

      </div>


    </div>
  </div>
</section>
<?php
include('footer.php');
?>