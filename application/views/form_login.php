<head>
    <meta charset="UTF-8">
    <title>Sign in/up Form</title>
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <style>
        #backButton {
            position: absolute;
            top: 20px;
            left: 20px;
        }
        .overlay {
  background-image: url("../assets/img/image2.gif");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  outline-width: 3px;
  outline-style: solid;
  outline-color: black;
  color: #FFFFFF;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}
    </style>
</head>
<body>
<div class="container" id="container">
    <div class="form-container sign-up-container">
    <a href="<?php echo base_url('customer/dashboard')?>"><button id="backButton" class="fas fa-arrow-left"> back </button> <!-- Added button element -->
    </a>
    <div class="form-group">
                
                </div>
        <form method="POST" action="<?php echo base_url('register/index') ?>">

            <h1>Create Account</h1>
            <div class="form-group">
                
                </div>

            <input id="nama" type="text" name="nama" placeholder="Nama" />
            <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>

            <input id="username" type="text" name="username" placeholder="Username" />
            <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>

            <input id="alamat" type="text" name="alamat" placeholder="Alamat" />
            <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>

            <input id="no_telepon" type="text" name="no_telepon" placeholder="Nomor telepon" />
            <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>

                <select class="select" id="gender" name="gender" placeholder="gender">
                    <option value="">--Pilih_Gender--</option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                </select>

            
            <input id="no_ktp" type="text" name="no_ktp" placeholder="KTP" />
            <?php echo form_error('no_ktp','<div class="text-small text-danger">','</div>') ?>

            <input id="password" type="password" name="password" placeholder="Password" />
            <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>

            <button type="submit">Register</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
    <a href="<?php echo base_url('customer/dashboard')?>"><button id="backButton" class="fas fa-arrow-left"> back </button> <!-- Added button element -->
    </a>
      <form method="POST" action="<?php echo base_url('auth/login') ?>">
            <h1>Sign in</h1>
            <div class="form-group">
                
                </div>


            <input id="username" type="username" name="username" placeholder="Username" />
                    <?php echo form_error('username','<div class="text-danger text-small">','</div>') ?>

            <input id="password" type="password" name="password" placeholder="Password" />
                    <?php echo form_error('password','<div class="text-danger text-small">','</div>') ?>      

            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
            
            <button type="submit">Login</button>

        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>
                Lakukan login sebelum kamu melanjutkan penggunaan aplikasi ini
                </p>
                <button class="ghost" id="tes2">Login</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Lakukan registrasi akun jika kamu belum mempunyai akun</p>
                <button class="ghost" id="tes">Register</button>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/script.js"></script>
</body>
