document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['interaction', 'dayGrid', 'timeGrid'],
        selectable: true,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        dateClick: function (info) {
            alert('clicked ' + info.dateStr);
        },
        select: function (info) {
            alert('selected ' + info.startStr + ' to ' + info.endStr);
        }
    });

    calendar.render();
});
