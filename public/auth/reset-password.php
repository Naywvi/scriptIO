<head>
    <title>ScriptiO - Reset your password</title>
    <link rel="stylesheet" href="./assets/css/reset-password.css" />
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
        <div id="radius-shape-3" class="position-absolute shadow-5-strong"></div>
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="post">

              

              <!-- Email input -->
              <div class="form-outline mb-2">
                <input type="email" id="email" name="reset-email" class="form-control"  placeholder="Email address"/>
                <label class="form-label" for="email"></label>
              </div>
              <!-- Password input -->
              <div class="form-outline mb-2">
                <input type="password" id="password" name="password" class="form-control" placeholder="Username"/>
                <label class="form-label" for="password"></label>
              </div>

              
              <figure id="message_valid" style='display:none;'>
                <p class="green">mail send successfully</p>
              </figure>
              
              <figure id="message_error" style='display:none;'>
                <p class="red">username or email are already use</p>
              </figure>
              

              <!-- Forgot pass -->
                <a href="signin"><p class="text-left italic">Return to sign in</p></a>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-2" name="reset-password">
                Reset password
              </button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>