// visitor table 
$(document).ready(function(){
    $('#VisitorDt').DataTable();
    $('.dataTables_length').addClass('bs-select');
});


function getServicesData(){
    axios.get('/getServicesData')

    .than(function(response){
    
        if(response.status==200){
    
            $('#mainDiv').removeClass('d-none')
            $('#loadergDiv').addClass('d-none')
    
            var jsonData = response.data;
    
            $.each(jsonData,function(i,item){
                $('<tr>').html(
                        "<td> <img style='width: 50px; height:50px' class='card-img-top' src="+jsonData[i].service_img+"> </td>"+
                        "<td> "+jsonData[i].service_name+" </td>"+
                        "<td> "+jsonData[i].service_des+" </td>"+
                        "<td> <a href='' class='btn btn-sm btn-primary' title='Edit'><i class='fa fa-edit'></i></a> </td>"+
                        "<td> <a href='' class='btn btn-sm btn-danger' title='Delete'><i class='fa fa-trash'></i></a> </td>"
                ).append('#service_table');
            });
        }
        else{
            $('#loaderDiv').addClass('d-none')
            $('#WrongDiv').removeClass('d-none')

        }
        
    })
    .catch(function(error){
        $('#loaderDiv').addClass('d-none')
        $('#WrongDiv').removeClass('d-none')
    });
}

// $(function () {
//     $('[data-toggle="tooltip"]').tooltip();
// });


// Treeview Initialization
// $(document).ready(function() {
//     $('.treeview').mdbTreeview();
//   });

