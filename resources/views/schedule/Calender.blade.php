<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="openMarket">
    <div class="my-auto">
        <h3 class="openMarket mb-1">Slime Open Market Calendar</h3>
        <div class="resume-item d-flex flex-column flex-md-row mb-3">
            <div class="resume-content mr-auto col-12">
                <?php
                ?>

                <div class="resume-date">
                    <link rel='stylesheet'
                        href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
                    <!-- 
<button type="button" class="btn warm-flame-gradient" onclick="location.href='{{url('adminPage')}}'">
  page로
</button> -->
                    <div id='calendar'></div>

                    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'>
                    </script>
                    <script>
                        $(document).ready(function () {
                            // page is now ready, initialize the calendar...
                            $('#calendar').fullCalendar({
                                // put your options and callbacks here
                                events: [
                                    @foreach($tasks as $task) {
                                        title: '{{ $task->name }}',
                                        start: '{{ $task->task_date }}',
                                        url: '{{ route('
                                        tasks.edit ', $task->id) }}'
                                    },
                                    @endforeach
                                ]
                            })
                        });

                    </script>
                </div>
                
            </div>
        </div>
    </div>
</section>
