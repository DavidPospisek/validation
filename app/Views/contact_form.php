<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ukol</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <style>
    .container {
      max-width: 300px;
    }
    .jumbotron{
    background-color:#00FFFF;
}
  </style>

</head>
<body>
<body style="background-color: darkmagenta;">
    <div><br>&nbsp</div>
  <div class="container  mt-4">
      <div class="jumbotron">
          <div class="text-center"><h4>Zaregistruj se!</h4></div>
    <?php $validation = \Config\Services::validation(); ?>
    <form method="post" action="<?php echo base_url('public/Stranka/Validace') ?>">
     
    <div class="form-group">  <div class="text-center">    <label><b>Jméno:</b></label> </div>
        <input type="text" name="jmeno" class="form-control" required="">
       
        <?php if($validation->getError('jmeno')){?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('jmeno');?>
            </div>
        <?php }?>
      </div>
        
      <div class="form-group"> <div class="text-center">      <label><b>Příjmení:</b></label> </div>
        <input type="text" name="prijmeni" class="form-control" required="">


        <?php if($validation->getError('prijmeni')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('prijmeni'); ?>
            </div>
        <?php }?>
      </div>
        
    
      <div class="form-group"> <div class="text-center">        <label><b>Telefon:</b></label> </div>
     <input type="text" name="telefon" class="form-control" required="">

       

        <?php if($validation->getError('telefon')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('telefon'); ?>
            </div>
        <?php }?>
      </div>
        
       
      <div class="form-group">  <div class="text-center">     <label><b>Email:</b></label> </div>
        <input type="text" name="email" class="form-control" required="">

      

        <?php if($validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
      </div>
      <div class="form-group">
          <div class="text-center" <a class="nav-link text-dark"><a/>"<button type="submit" class="btn btn-primary btn">Registrovat se</button></div>
   </div>
 </form>
  </div>
  </div>
</body>
</html>