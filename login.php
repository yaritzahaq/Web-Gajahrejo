</head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style>
   body {
      padding-top: 4.2rem;
      padding-bottom: 4.2rem;
      background: rgba(0, 0, 0, 0.76);
   }

   a {
      text-decoration: none !important;
   }

   .myform {
      position: relative;
      display: -ms-flexbox;
      display: flex;
      padding: 1rem;
      -ms-flex-direction: column;
      flex-direction: column;
      width: 100%;
      pointer-events: auto;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 1.1rem;
      outline: 0;
      max-width: 500px;
   }

   .tx-tfm {
      text-transform: uppercase;
   }

   .mybtn {
      border-radius: 50px;
   }

   .login-or {
      position: relative;
      color: #aaa;
      margin-top: 10px;
      margin-bottom: 10px;
      padding-top: 10px;
      padding-bottom: 10px;
   }

   .span-or {
      display: block;
      position: absolute;
      left: 50%;
      top: -2px;
      margin-left: -25px;
      background-color: #fff;
      width: 50px;
      text-align: center;
   }

   .hr-or {
      height: 1px;
      margin-top: 0px !important;
      margin-bottom: 0px !important;
   }

   form .error {
      color: #ff0000;
   }

   #second {
      display: none;
   }
</style>

<head>

<body style="background-image: url('images/bg_admin.jpg'); background-size: cover;">
   <div class="container">
      <div class="row">
         <div class="col-md-5 mx-auto">
            <div id="first">
               <div class="myform form ">
                  <div class="logo mb-3">
                     <div class="col-md-12 text-center">
                        <h1>Selamat Datang Admin</h1>
                     </div>
                  </div>
                  <form action="proses.php" method="post">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan username" autocomplete="off" required oninvalid="this.setCustomValidity('Username tidak boleh kosong')" oninput="setCustomValidity('')">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan password" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')" oninput="setCustomValidity('')">
                     </div>
                     <div class="form-group">
                        <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                     </div>
                     <div class="col-md-12 text-center ">
                        <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
</body>