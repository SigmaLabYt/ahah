  <!-- =============================================== -->

    <div class="patientDetailsPage">
        <section class="content-header">
            <h1>
                <?php echo $patient->__getFname(); ?>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-6">
                    <div class="list-group">
                      <a href="" class="list-group-item active"><?php echo $patient->__getLname(); ?></a>
                      <?php
                        foreach($familyDetails->__getFamilyMembers() as $member){
                      ?>
                            <a href="" class="list-group-item"><?php echo $member->__getLname(); ?></a>
                      <?php
                        }  
                      ?>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>

<script type="text/javascript">

    $(function (){
        $('.patientDetailsPage').addClass('content-show');
        $('.patientDetailsPage').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
            $(this).css('position','static');
        });
    });

</script>