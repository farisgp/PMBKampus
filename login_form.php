<?php
require_once 'models/Member.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- CUSTOM CSS -->
<link href="css/style.css" rel="stylesheet"><!-- Section: Design Block -->
<section class=" text-center text-lg-start">
    <style>
    .rounded-t-5 {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
        .rounded-tr-lg-0 {
            border-top-right-radius: 0;
        }

        .rounded-bl-lg-5 {
            border-bottom-left-radius: 0.5rem;
        }
    }
    </style>
</section>
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>
          <form method="POST" action="member_controller.php" >
            <div class="form-outline mb-4">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control form-control-lg"/>
              
            </div>

            <div class="form-outline mb-4">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control form-control-lg"/>
            </div>
            <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>