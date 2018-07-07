//Particular
function createParticular(data){
    $.ajax({
        url: '/particular',
        type: 'post',
        data: data,
        success: function(response, statusMessage, responseStatus) {
            if(responseStatus['status']==200){
                alert('El usuario ha sido creado exitosamente');
                window.open('/','_self');
            }else{
                alert('Something is wrong :(');
            }
        }
    });
}

//Empresa
function createEmpresa(data){
    $.ajax({
        url: '/empresa',
        type: 'post',
        data: data,
        success: function(response, statusMessage, responseStatus) {
            if(responseStatus['status']==200){
                alert('El usuario ha sido creado exitosamente');
                window.open('/','_self');
            }else{
                alert('Something is wrong :(');
            }
        }
    });
}

function createCliente(data){
    $.ajax({
        url: '/cliente',
        type: 'post',
        data: data,
        success: function(response, statusMessage, responseStatus) {
            if(responseStatus['status']==200){
                alert('El usuario ha sido creado exitosamente');
                window.open('/','_self');
            }else{
                alert('Something is wrong :(');
            }
        }
    });
}
