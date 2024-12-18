<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed; top: 0; bottom: 0; left: 0; overflow-y: auto;">
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets/img/online.png') ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $this->session->userdata('username'); ?></a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Dashboard -->
        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == 'Dashboard') ? 'active' : ''; ?>" href="<?= base_url('Dashboard'); ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Pegawai Episi -->
        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == 'PegawaiEpisi') ? 'active' : ''; ?>" href="<?= base_url('PegawaiEpisi'); ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>Pegawai Episi</p>
          </a>
        </li>

        <!-- Pegawai Wisesa -->
        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == 'PegawaiWisesa') ? 'active' : ''; ?>" href="<?= base_url('PegawaiWisesa'); ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>Pegawai Wisesa</p>
          </a>
        </li>

        <!-- PTT Poject -->
        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == 'PttProject') ? 'active' : ''; ?>" href="<?= base_url('PttProject'); ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>PTT Project</p>
          </a>
        </li>

        <!-- PTT Reguler -->
        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == 'PttReguler') ? 'active' : ''; ?>" href="<?= base_url('PttReguler'); ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>PTT Reguler</p>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</aside>
