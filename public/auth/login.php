<head>
    <title>ScriptiO - Sign in</title>
    <link rel="stylesheet" href="./assets/css/login.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">
</head>
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden reset-space">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight code">
          The best offer <br />
          <span style="color: hsl(218, 81%, 75%)">for your business</span>
        </h1>
        <p class="mb-4 opacity-70 code">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="post">
              <!-- Email input -->
              <div class="form-outline mb-2">
                <input type="email" id="form3Example3" class="form-control"  placeholder="Email address" name="email"/>
                <label class="form-label" for="form3Example3"></label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-1">
                <input type="password" id="form3Example4" class="form-control" placeholder="Password" name="user_password"/>
                <label class="form-label" for="form3Example4"></label>
              </div>

                <figure id="message" style='display:none;'>
                    <p class=" red">wrong password or username</p>
                </figure>

              <!-- Forgot pass -->
                <a href="/reset-password"><p class="text-left italic">Forgot password</p></a>
                
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-2" name="login">
                Sign in
              </button>

              <!-- login buttons -->
              <div class="text-center">
                <p>or sign in with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>