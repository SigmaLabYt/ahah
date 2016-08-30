
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Droits &copy; 2016-2017 <a href="http://sigma-labo.com">Sigma Labo</a>.</strong> Tous les droits résérvés.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootbox.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/fullcalendar/fullcalendar.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Cases page scripts -->
<script>
  $(function () {
    $('#casesTable').DataTable( {
        "language": {
            "info": "Afficher la page _PAGE_ de _PAGES_",
            "search": "Rechercher:",
            "sLengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments par page",
            "oPaginate": {
                "sFirst":      "Premier",
                "sPrevious":   "Pr&eacute;c&eacute;dent",
                "sNext":       "Suivant",
                "sLast":       "Dernier"
            }
        }
    } );
  });
</script>
<!-- Calendar page scripts -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        });

      });
    }

    ini_events($('#external-events div.external-event'));

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
      //default events
        // Get events from database or JSON
      /*events: [
        {
          title: 'All Day Event',
          start: new Date(y, m, 1),
          backgroundColor: "#f56954", //red
          borderColor: "#f56954" //red
        },
        {
          title: 'Long Event',
          start: new Date(y, m, d - 5),
          end: new Date(y, m, d - 2),
          backgroundColor: "#f39c12", //yellow
          borderColor: "#f39c12" //yellow
        },
        {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false,
          backgroundColor: "#0073b7", //Blue
          borderColor: "#0073b7" //Blue
        },
        {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false,
          backgroundColor: "#00c0ef", //Info (aqua)
          borderColor: "#00c0ef" //Info (aqua)
        },
        {
          title: 'Birthday Party',
          start: new Date(y, m, d + 1, 19, 0),
          end: new Date(y, m, d + 1, 22, 30),
          allDay: false,
          backgroundColor: "#00a65a", //Success (green)
          borderColor: "#00a65a" //Success (green)
        },
        {
          title: 'Click for Google',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'http://google.com/',
          backgroundColor: "#3c8dbc", //Primary (light-blue)
          borderColor: "#3c8dbc" //Primary (light-blue)
        }
      ],*/
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar !!!
      drop: function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);

        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        copiedEventObject.backgroundColor = $(this).css("background-color");
        copiedEventObject.borderColor = $(this).css("border-color");

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

        $(this).remove();
        

      }
    });

    /* ADDING EVENTS */
    var currColor = "#3c8dbc"; //Red by default
    //Color chooser button
    var colorChooser = $("#color-chooser-btn");
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      //Save color
      currColor = $(this).css("color");
      //Add color effect to button
      $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
    });
    $("#add-new-event").click(function (e) {
      e.preventDefault();
      //Get value and make sure it is not null
      var val = $("#new-event").val();
      if (val.length == 0) {
        return;
      }

      //Create events
      var event = $("<div />");
      event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);

      //Add draggable funtionality
      ini_events(event);

      //Remove event from text input
      $("#new-event").val("");
    });
      
    /*** Saved Events Modify/Delete ****/
       
        /*$(".trash").droppable({
            activeClass : "trash-highlight",
            accept : ".ui-draggable",
            drop: function( event, ui ) {

                ui.draggable.remove();
            }
        });*/
      
        function showSuccess(){
            $('.success-float').addClass('success-show');
            setTimeout("$('.success-float').removeClass('success-show');", 1000);
        }
      
        $(document).on('click', '.external-event, .fc-event', function(){  
            var defEventName = $(this).text();
            var elm = $(this);
            bootbox.dialog({
              title: defEventName,
              message: '<div class="row"><div class="col-md-12"><input id="eventname" type="text" placeholder="'+defEventName+'" class="form-control input-md"></div></div>',
              buttons: {
                success: {
                  label: "Sauvegarder",
                  className: "btn-success",
                  callback: function() {
                    var newEventName = $("#eventname").val();
                    if(newEventName.length == 0) newEventName = $("#eventname").attr("placeholder");
                    showSuccess();
                    elm.text(newEventName);
                  }
                },
                danger: {
                  label: "Supprimer",
                  className: "btn-danger",
                  callback: function() {
                    bootbox.confirm("Vous êtes sur ?", function(result) {
                      if(result){
                          showSuccess();
                          elm.remove();
                      }
                    }); 
                  }
                },
              }
            });
            $("body").css("padding-right","0");
        });
      
    /*** /Saved Events Modify/Delete ****/
      
  });
</script>

<!-- Index Page scripts -->
<script>
    $(document).ready(function(){
        //load last 5 messages from db
        var lastmsgtime = 0; // get it from db
        var directChatHeight = $('.direct-chat-messages').height();
        $('.direct-chat-messages').bind('DOMNodeInserted', function(){
            directChatHeight = $(this)[0].scrollHeight;
        });
        $(".direct-chat-form").on('submit', function(){
            var input = $("input", this);
            var msg = input.val();
            if(msg !== ""){
                var htmlwithtime = '<div class="direct-chat-msg right"><div class="direct-chat-info clearfix"><span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span></div><div style="margin:0 2px 0 15px!important;" class="direct-chat-text">'+msg+'</div></div>';
                var defhtml = '<div class="direct-chat-msg right"><div class="direct-chat-info clearfix"></div><div style="margin:0 2px 0 15px!important;" class="direct-chat-text">'+msg+'</div></div>'
                var dt = new Date();

                $(".direct-chat-messages").append(defhtml);
                input.val("");
                // scrolling
                $('.direct-chat-messages').scrollTop(directChatHeight);
                //store msg into db
            }
            return false;
        });
    });
</script>
</body>
</html>
