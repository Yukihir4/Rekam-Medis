<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="header">MENU</li>

      <!-- Optionally, you can add icons to the links -->
      <li <?php if ($page == 'dashboard') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Dashboard'); ?>">
          <i class="fa fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>


      <li <?= $this->uri->segment(1) == 'Pasien' ? 'class="active"' : '' ?>>
        <a href="<?php echo base_url('Pasien'); ?>">
          <i class="fa fa-user-plus">
          </i> Pasien</a>
      </li>

      <li class="treeview <?= $this->uri->segment(1) == 'Dokter' || $this->uri->segment(1) == 'Poli' || $this->uri->segment(1) == 'Obat' ? 'active' : '' ?>">
        <a href="#">
          <i class="fa fa-bank"></i> <span>Rumah Sakit</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>

        <ul class="treeview-menu">
          <li <?= $this->uri->segment(1) == 'Dokter' ? 'class="active"' : '' ?>>
            <a href="<?php echo base_url('Dokter'); ?>">
              <i class="fa fa-user-plus">
              </i> Dokter</a>
          </li>

          <li <?= $this->uri->segment(1) == 'Poli' ? 'class="active"' : '' ?>>
            <a href="<?php echo base_url('Poli'); ?>">
              <i class="fa fa-bank">
              </i> Poliklinik</a>
          </li>

          <li <?= $this->uri->segment(1) == 'Obat' ? 'class="active"' : '' ?>>
            <a href="<?php echo base_url('Obat'); ?>">
              <i class="fa fa-building-o">
              </i> Obat</a>
          </li>
        </ul>
      </li>

      <li <?= $this->uri->segment(1) == 'Pemeriksaan' ? 'class="active"' : '' ?>>
        <a href="<?php echo base_url('Pemeriksaan'); ?>">
          <i class="fa fa-building-o">
          </i> Laporan Pemeriksaan</a>
      </li>

      <li class="header">SETTINGS</li>
      <li <?php if ($page == 'account') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Account'); ?>">
          <i class="fa fa-wrench"></i>
          <span>Account Settings</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('Auth/logout'); ?>">
          <i class="fa fa-sign-out"></i>
          <span>Exit</span>
        </a>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>