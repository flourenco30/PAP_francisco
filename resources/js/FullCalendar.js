import axios from 'axios';
import { Calendar } from '@fullcalendar/core'
import dayGridPlugin from '@fullcalendar/daygrid';
import moment from 'moment'

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    axios.get('/api/agendamentos')
    .then(res => {

        const colors = [
            "#0564ff",
            "#fc9f9f",
            "#fff95e",
            "#5eff88",
            "#5effff",
            "#cecece",
            "#5881c4",
            "#c458b1",
            "#bc8787",

        ];

        const data = res.data.map(agendamento => ({
            title: agendamento['servico']['nome'] ? agendamento['servico']['nome']+" - "+agendamento['user']['email'] : `Custom #${agendamento['servico_custom_id']+" - "+agendamento['user']['email    ']}`,
            start: moment(`${ agendamento['Data'] } ${ agendamento['Hora'] }`).toISOString(),
            end: moment(`${ agendamento['Data'] } ${ agendamento['Hora'] }`).add(1, 'hour').toISOString(),
            color: agendamento['servico']['nome'] ? "#66d3ff":"#f9fc4b"
        }));


        var calendar = new Calendar(calendarEl, {
            plugins: [ dayGridPlugin ],
            events: data,
            locale: 'pt'
          });
        
          calendar.render();
    })
  
  });