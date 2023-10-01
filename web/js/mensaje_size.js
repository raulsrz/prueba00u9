$(document).ready(function() {

    var valor = document.getElementById("mensaje").value;
    /* pa ver si hay aletas nuevas*/

        if (valor=='Error, Hay Facturas utilizando este Size')
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










});


