<?php
    $currpage = getCurrentPage();
?>
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li<?php if(empty($currpage) || $currpage == 'index.php') echo ' class="active"' ?>><a href="<?php echo URL; ?>"><i class="fa fa-home"></i> <span>Accueil</span></a></li>
        <li<?php if($currpage == 'calendar') echo ' class="active"' ?>><a href="<?php echo URL; ?>calendar"><i class="fa fa-calendar"></i> <span>Calendrier</span></a></li>
        <li<?php if($currpage == 'patients') echo ' class="active"' ?>><a href="<?php echo URL; ?>patients"><i class="fa fa-briefcase"></i> <span>Patients</span></a></li>        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>