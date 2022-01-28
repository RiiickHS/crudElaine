$(document).ready(function () {
    
    var site_url  = window.location.href;
    $.ajax ({
        url: site_url+"/showGrid",
        type: "POST",
        dataType: "json",
        success: function(data){
            let posts = data.posts;
            posts = posts.map((element) => {
                let d = new Date(element.data_nascimento);
                element.data_nascimento = d.toLocaleDateString('pt-BR', {timeZone: 'UTC'})
                element.action =    `<a href="/crudi/clientes/edit/${element.cli_id}" class="btn btn-warning btn-sm"><i class='bx bx-edit-alt' ></i></a>
                                    <a href="/crudi/clientes/show/${element.cli_id}" class="btn btn-warning btn-sm"><i class='bx bx-show' ></i></a>
                                    <a href="/crudi/sessao/new/${element.cli_id}" class="btn btn-warning btn-sm"><i class='bx bx-plus' ></i></a`
                
                return  element
            });

            console.log(posts)

            $('#table_cli').DataTable({
                "data": posts,
                "columns": [
                    { "data": "nome"},
                    { "data": "cpf"},
                    { "data": "celular"},
                    { "data": "telefone_emergencia"},
                    { "data": "action"}
                ],
                dom: "lBfrtip",
                buttons: ["excel","pdf","csv"],
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

