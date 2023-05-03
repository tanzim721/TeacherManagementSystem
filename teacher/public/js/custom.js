// visitor table 



// $(document).ready(function(){
//     $('#VisitorDt').DataTable();
//     $('.dataTables_length').addClass('bs-select');
// });


// function getServicesData(){
//     axios.get('/getServicesData')

//     .than(function(response){
    
//         if(response.status==200){
    
//             $('#mainDiv').removeClass('d-none')
//             $('#loadergDiv').addClass('d-none')
    
//             var jsonData = response.data;
    
//             $.each(jsonData,function(i,item){
//                 $('<tr>').html(
//                         "<td> <img style='width: 50px; height:50px' class='card-img-top' src="+jsonData[i].service_img+"> </td>"+
//                         "<td> "+jsonData[i].service_name+" </td>"+
//                         "<td> "+jsonData[i].service_des+" </td>"+
//                         "<td> <a href='' class='btn btn-sm btn-primary' title='Edit'><i class='fa fa-edit'></i></a> </td>"+
//                         "<td> <a href='' class='btn btn-sm btn-danger' title='Delete'><i class='fa fa-trash'></i></a> </td>"
//                 ).append('#service_table');
//             });
//         }
//         else{
//             $('#loaderDiv').addClass('d-none')
//             $('#WrongDiv').removeClass('d-none')

//         }
        
//     })
//     .catch(function(error){
//         $('#loaderDiv').addClass('d-none')
//         $('#WrongDiv').removeClass('d-none')
//     });
// }

// $(function () {
//     $('[data-toggle="tooltip"]').tooltip();
// });

 
// Treeview Initialization
// $(document).ready(function() {
//     $('.treeview').mdbTreeview();
//   });


// $(document).ready(function () {
//     var SITEURL = "{{ url('/tasks-schedule')}}";
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     var calendar = $('#full_calendar_events').fullCalendar({
//         editable: true,
//         editable: true,
//         events: SITEURL + "/tasks-schedule",
//         displayEventTime: true,
//         eventRender: function (event, element, view) {
//             if (event.allDay === 'true') {
//                 event.allDay = true;
//             } else {
//                 event.allDay = false;
//             }
//         },
//         selectable: true,
//         selectHelper: true,
//         select: function (event_start, event_end, allDay) {
//             var event_name = prompt('Event Name:');
//             if (event_name) {
//                 var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
//                 var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
//                 $.ajax({
//                     url: SITEURL + "/tasks-schedule/store",
//                     data: {
//                         event_name: event_name,
//                         event_start: event_start,
//                         event_end: event_end,
//                         type: 'create'
//                     },
//                     type: "POST",
//                     success: function (data) {
//                         displayMessage("Event created.");
//                         calendar.fullCalendar('renderEvent', {
//                             id: data.id,
//                             title: event_name,
//                             start: event_start,
//                             end: event_end,
//                             allDay: allDay
//                         }, true);
//                         calendar.fullCalendar('unselect');
//                     }
//                 });
//             }
//         },
//         eventDrop: function (event, delta) {
//             var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
//             var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
//             $.ajax({
//                 url: SITEURL + '/tasks-schedule/store',
//                 data: {
//                     title: event.event_name,
//                     start: event_start,
//                     end: event_end,
//                     id: event.id,
//                     type: 'edit'
//                 },
//                 type: "POST",
//                 success: function (response) {
//                     displayMessage("Event updated");
//                 }
//             });
//         },
//         eventClick: function (event) {
//             var eventDelete = confirm("Are you sure?");
//             if (eventDelete) {
//                 $.ajax({
//                     type: "POST",
//                     url: SITEURL + '/tasks-schedule/store',
//                     data: {
//                         id: event.id,
//                         type: 'delete'
//                     },
//                     success: function (response) {
//                         calendar.fullCalendar('removeEvents', event.id);
//                         displayMessage("Event removed");
//                     }
//                 });
//             }
//         }
//     });
// });
// function displayMessage(message) {
//     toastr.success(message, 'Event');            
// }


//for side menu nav bar...............
// $(".youButton").click(function(){
//     $(".prudent").toggle()
// });
    