<?php
?>

<div class="resume-date">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
<!-- 
<button type="button" class="btn warm-flame-gradient" onclick="location.href='{{url('adminPage')}}'">
  page로
</button> -->
<div id='calendar' style="color:black;"></div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>

    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($tasks as $task)
                {
                    title : '{{ $task->title }}',
                    start : '{{ $task->date }}',
                    url : '{{ route('tasks.show', $task->id) }}'
                },
                @endforeach
            ]
        })
    });
</script>

</div>

