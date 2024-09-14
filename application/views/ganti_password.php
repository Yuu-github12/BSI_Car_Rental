<style>
    .form-group label {
      font-size: 18px;
    }
    
    .form-control {
      height: 50px;
      font-size: 16px;
    }
    
    .btn-primary {
      font-size: 18px;
      padding: 10px 20px;
      background-color: #dc3545;
      border-color: #dc3545;
    }
    
    .btn-primary:hover {
      background-color: #c82333;
      border-color: #c82333;
    }
    
    .back-button {
      margin-top: 20px;
      text-align: center;
    }
    
    .back-button a {
      color: #dc3545;
      font-size: 14px;
    }
    
    .back-button a:hover {
      color: #c82333;
    }
  </style>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

            <div class="card card-danger">

              <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('auth/ganti_password_aksi') ?>">
                  <div class="form-group">
                    <label for="pass_baru">Password Baru</label>
                    <input id="pass_baru" type="password" class="form-control" name="pass_baru" tabindex="1" autofocus>
                    <?php echo form_error('pass_baru','<div class="text-danger text-small">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <label for="ulang_pass">Ulangi Password</label>
                    <input id="ulang_pass" type="password" class="form-control" name="ulang_pass" tabindex="2">
                    <?php echo form_error('ulang_pass','<div class="text-danger text-small">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Ganti Password
                    </button>
                  </div>
                </form>
              </div>
            </div>

            <div class="back-button">
              <a href="<?php echo base_url('admin/dashboard')?>">Back to Dashboard</a>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>
</body>
