<x-filament::page>
    <div
        x-data="timetableCalendar()"
        x-init="init()"
        class="bg-white rounded-xl p-4"
    >
        <div id="calendar"></div>
    </div>
</x-filament::page>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>

<script>
function timetableCalendar() {
    return {
        calendar: null,

        init() {
            this.calendar = new FullCalendar.Calendar(
                document.getElementById('calendar'),
                {
                    initialView: 'timeGridWeek',
                    allDaySlot: false,
                    slotMinTime: '08:00:00',
                    slotMaxTime: '15:00:00',
                    editable: true,
                    selectable: true,
                    events: '/api/timetable',

                    eventDrop: this.onEventChange,
                    eventResize: this.onEventChange,
                }
            );

            this.calendar.render();
        },

        onEventChange(info) {
            fetch('/api/timetable/' + info.event.id, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                },
                body: JSON.stringify({
                    start_time: info.event.startStr,
                    end_time: info.event.endStr,
                }),
            });
        }
    }
}
</script>
@endpush
