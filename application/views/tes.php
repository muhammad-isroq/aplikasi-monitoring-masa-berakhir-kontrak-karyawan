<nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">

      <ul class="navbar-nav" data-widget="tree">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="<?=base_url('Dashboard');?>" class="nav-link">Home</a>
      </li>    
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="" class="nav-link"><i class="fi fi-rr-user p-2"></i>Selamat datang <?php echo  $this->session->userdata('username');?></a>
  </li>
  <li class="nav-item">
      <a href="#" id="logout-link" class="nav-link"><i class="fi fi-rr-sign-out-alt p-2"></i>Logout</a>
  </li>
</ul>
</nav>


<script>
        document.getElementById('logout-link').addEventListener('click', function(event) {
          event.preventDefault();
          Swal.fire({
            title: 'Yakin ingin logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, logout',
            cancelButtonText: 'Tidak, tetap disini'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "<?=base_url('Auth/logout');?>";
            }
          });
        });
      </script>