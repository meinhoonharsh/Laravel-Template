@extends('layouts.app')


@section('styles')
  <style> 
  /* Custom CSS for Page Here */
    :root{
    --fc-list-event-hover-bg-color:  #181c28;
   }
    .fc-direction-ltr{
      background: #181c28;
    }
    a.fc-col-header-cell-cushion{
      color: aliceblue;
    }
    .fc .fc-daygrid-day-number{
      color: aliceblue;
      padding-right:10px ;
    }
    .fc .fc-button .fc-icon {
      color:#181c28 ;
    }
    .fc .fc-toolbar-title {
      padding: 20px;
    }
    .fc-daygrid-day-events:before{
      background: aliceblue;
    }
    .fc .fc-daygrid-day.fc-day-today {
    /* background-color: rgba(255, 220, 40, 0.15); */
     background: rgba(0,0,255,0.2);
  }
  .fc-theme-standard .fc-popover-header{
    background:#181c28;
    color: #ccc;
  }
  .fc-popover-body{
    background: #181c28;
  }
  .fc-direction-ltr .fc-button-group > .fc-button{
    color:#1a252f;
  }
  .fc-dayGridWeek-button .fc-button-active{
    color: #ccc;
  }
  .fc-direction-ltr:hover{
    color: #fff;
  }
  .fc-list-event-title{
    color: var(--primarycolor);
  }
  .fc .fc-button-group > .fc-button:focus, .fc .fc-button-group > .fc-button:active, .fc .fc-button-group > .fc-button.fc-button-active{
    background: #5a6980;
  }
  .fc-theme-standard .fc-list-day-cushion {
    background: var(--darkbgcolor);
  }
   .fc-list-event-time{
    color: var(--primarycolor);
   }
   .fc-event-list: hover{
      background: var(--darkbgcolor);
   }
   .fc .fc-button-group .fc-button:hover {
      background:#5a6980;
      color: #fff;
   }
   .fc .fc-button-group .fc-button,.fc-icon {
      background:transparent;
      color: #fff !important;
   }
  </style>
@endsection


@section('scripts')
  <script> 

    var lectures = JSON.parse( `{!! json_encode($lectures) !!}` );
    var tasks = JSON.parse( `{!! json_encode($tasks) !!}` );
    lectures.map(function(event){
      event.title = event.name;
      event.start = event.date.substring(0,10);
      event.color = 'var(--warning)';

      });
    tasks.map(function(event){
      event.title = event.name;
      event.start = event.submissiondate.substring(0,10);
      event.color = 'var(--danger)';
      });

      var events = [...lectures,...tasks]
    console.log( events );
    // Custom JS for Page Here 
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prevYear,prev,next,nextYear today',
        center: 'title',
        right: 'dayGridMonth,dayGridWeek,dayGridDay,listWeek'
      },
      initialDate: '2021-08-12',
      navLinks: true, // can click day/week names to navigate views
      // editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: events,
    });

    calendar.render();
  });


  </script>
@endsection

@section('content')
<div class="p5">
  
</div>
<div id='calendar'></div>
@endsection