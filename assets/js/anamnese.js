$(document).ready(function () {
    
    var site_url  = window.location.href;
    $.ajax ({
        url: site_url+"/showGrid",
        type: "POST",
        dataType: "json",
        success: function(data){
            let posts = data.posts;
            posts = posts.map((element) => {
                return  {
                            "cli_id": element.cli_id,
                            "nome": element.nome,
                            "cpf": element.cpf,
                            "action" : `<a href="/crudi/anamnese/edit/${element.cli_id}" class="btn btn-warning btn-sm"><i class='bx bx-edit-alt' ></i></a>
                                        <a href="/crudi/anamnese/show/${element.cli_id}" class="btn btn-warning btn-sm"><i class='bx bx-show' ></i></a>
                                        <a href="/crudi/anamnese/new/${element.cli_id}" class="btn btn-warning btn-sm"><i class='bx bx-plus' ></i></a>`
                        };
            });

            $('#table_anam').DataTable({
                "data": posts,
                "columns": [
                    { "data": "nome"},
                    { "data": "cpf"},
                    { "data": "action"}

                ],
                responsive: true,
                "language": {
                    "sSearch": "Pesquisar",
                    "infoEmpty": "Sem Registro",
                    "zeroRecords": "Sem Registro",
                    "lengthMenu": "Exibe _MENU_ registros",
                },
                  

            });
        }
        
    });


});

