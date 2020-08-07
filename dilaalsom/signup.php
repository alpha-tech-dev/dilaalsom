<?php
include('header.php');
?>

<!-- Section: Contact -->
<section id="contact" class="section section-contact scrollspy">
  <div class="container">
    <div class="row">

      <div class="col s12 m6 offset-m3">
        <div class="card-panel white lighten-3">
          <form action="process.php" method="post" id="signup">
            <h5>Sign up</h5>
            <div class="input-field">
              <input type="hidden" name="formname" value="signup" readonly="readonly" />
            </div>
            <div class="input-field">
              <i class="material-icons teal-text">person</i>
              <input type="text" name="firstname" placeholder="First Name">
            </div>
            <div class="input-field">
              <i class="material-icons teal-text">person_outline</i>
              <input type="text" name="lastname" placeholder="Last Name">
            </div>
            <div class="input-field">
              <i class="material-icons teal-text">mail</i>
              <input type="text" name="email" placeholder="Email">
            </div>
            <div class="input-field">
              <i class="material-icons teal-text">phone</i>
              <input type="tel" id="phone" name="phone" placeholder="Phone number(opmali only)">
              <div>
                <select name="county">
                  <option value="">Select your county</option>
                  <?php
                  echo displayCounties("");
                  ?>
                </select>
              </div>
              <div class="input-field">
                <i class="material-icons teal-text">lock</i>
                <input type="password" name="password" placeholder="Password">
              </div>
              <div class="input-field">
                <i class="material-icons teal-text">lock</i>
                <input type="password" name="password2" placeholder="Re-Enter-Password">
              </div>

              <input type="submit" value="Sign Up" class="btn">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include('footer.php');
?>