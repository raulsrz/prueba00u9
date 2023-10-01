$(document).ready(function() {

    var valor = document.getElementById("mensaje").value;
    /* pa ver si hay aletas nuevas*/
    if (valor=='Empresa Eliminada Correctamente')
    {
        /*lo cree para el cartel de alertas*/
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success( valor );

        }, 1300);

    }
    else
    {
        if (valor=='Error, Hay Profesores vinculados a esta Empresa')
        {
            /*lo cree para el cartel de alertas*/
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.error( valor );

            }, 1300);

        }
        else
        {
            /*lo cree para el cartel de alertas*/
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success( valor );

            }, 1300);


        }
    }








});


