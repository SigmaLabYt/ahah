<?php

    $currpage = getCurrentPage();

?>
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li<?php if($currpage == 'index.php') echo ' class="active"' ?>><a href="index.php"><i class="fa fa-home"></i> <span>Accueil</span></a></li>
        <li<?php if($currpage == 'calendar.php') echo ' class="active"' ?>><a href="calendar.php"><i class="fa fa-calendar"></i> <span>Calendrier</span></a></li>
        <li<?php if($currpage == 'cases.php') echo ' class="active"' ?>><a href="cases.php"><i class="fa fa-briefcase"></i> <span>Proc&egrave;s</span></a></li>        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>