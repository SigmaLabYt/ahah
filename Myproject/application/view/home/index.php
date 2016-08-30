  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Accueil
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- TO DO List -->
          <div class="row">
              <div class="col-md-12">
                  <div class="box box-primary">
                    <div class="box-header">
                      <i class="ion ion-clipboard"></i>

                      <h3 class="box-title">Aujourd'hui</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <ul class="todo-list">
                        <li>
                          <div class="time pull-left">10:18</div>
                          <span class="text">Rendez-vous avec client</span>
                        </li>
                        <li>
                          <div class="time pull-left">12:30</div>
                          <span class="text">aller au tribunal</span>
                        </li>
                      </ul>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
              </div>
          </div>
        
          <div class="row">
            <div class="col-md-3">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>150</h3>

                      <p>Client</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user"></i>
                    </div>
                    <a href="clients.php" class="small-box-footer">
                      Ouvrir <i class="fa fa-arrow-circle-right"></i>
                    </a>
                  </div>
            </div>
            <div class="col-md-3">
                <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3>283</h3>

                      <p>Procès</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-briefcase"></i>
                    </div>
                    <a href="cases.php" class="small-box-footer">
                      Ouvrir <i class="fa fa-arrow-circle-right"></i>
                    </a>
                  </div>
            </div>
            <div class="col-md-6 pull-right">
              <!-- DIRECT CHAT PRIMARY -->
              <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Secretaire</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages"></div>
                  <!--/.direct-chat-messages-->
                    
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <form action="#" method="post" class="direct-chat-form">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Tapez un message ..." class="form-control">
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-flat">Send</button>
                          </span>
                    </div>
                  </form>
                </div>
                <!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->
        </div>
              
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->