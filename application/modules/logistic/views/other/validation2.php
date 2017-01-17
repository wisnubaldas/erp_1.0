<script src="<?php echo base_url();?>asset/validation/jquery-2.1.3.js"></script>

<script src="<?php echo base_url();?>asset/validation/materialize.min.js"></script>

    <!-- altair admin -->
<link rel="stylesheet" href="<?php echo base_url();?>asset/validation/materialize.min.css">

<style>
/* fallback */
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: local('Material Icons'), local('MaterialIcons-Regular'), url(https://fonts.gstatic.com/s/materialicons/v18/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -webkit-font-feature-settings: 'liga';
  -webkit-font-smoothing: antialiased;
}
/* label color */

.input-field label {
  color: #000;
}


/* label focus color */

.input-field input[type=text]:focus + label {
  color: #000;
}


/* label underline focus color */

.input-field input[type=text]:focus {
  border-bottom: 1px solid #000;
  box-shadow: 0 1px 0 0 #000;
}


/* valid color */

.input-field input[type=text].valid {
  border-bottom: 1px solid #000;
  box-shadow: 0 1px 0 0 #000;
}


/* invalid color */

.input-field input[type=text].invalid {
  border-bottom: 1px solid #000;
  box-shadow: 0 1px 0 0 #000;
}


/* icon prefix focus color */

.input-field .prefix.active {
  color: #000;
}

.input-field {
  color: orange;
}
</style>

<div class="row">
  <form class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
        <label for="first_name">First Name</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="text" class="validate">
        <label for="last_name">Last Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
        <label for="disabled">Disabled</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="password" type="password" class="validate">
        <label for="password">Password</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="email" type="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>
  </form>
</div>