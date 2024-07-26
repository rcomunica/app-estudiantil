import { Calendar } from "@fullcalendar/core";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import axios from "axios";

var dates = [];
axios
    .get(`${document.location.origin}/api/v1/calendar`)
    .then((response) => {
        dates.push(response.data.data);
        setCalendar();
    })
    .catch((error) => {
        console.error("Error:", error);
    });

function setCalendar() {
    var fDate = [];
    for (const date of dates[0]) {
        fDate.push({
            title: date.title,
            start: date.date,
            allDay: true,
            description: date.description,
        });
    }
    console.log(fDate);
    let calendarEl = document.getElementById("calendar");
    let calendar = new Calendar(calendarEl, {
        height: "100%",
        plugins: [dayGridPlugin, timeGridPlugin],
        initialView: "dayGridMonth",
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: null,
        },
        events: fDate,
        eventClick: function (info) {
            alert(
                `Evento: ${info.event.title}\n\n${info.event.extendedProps.description}`
            );
        },
    });
    calendar.render();
}
