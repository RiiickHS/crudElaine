$(document).ready(function () {
    
    var site_url  = window.location.href;
    $.ajax ({
        url: site_url+"/fatValores",
        type: "POST",
        dataType: "json",
        success: function(data){
            console.log(data);
            let posts = data.posts;
            posts = posts.map((element) => {
                let d = new Date(element.data_sessao);
                element.data_sessao = d.toLocaleDateString('pt-BR', {timeZone: 'UTC'})
                return  element
            });

            $('#table_fat').DataTable({
                "data": posts,
                "columns": [
                    { "data": "nome"},
                    { "data": "valor_sessao"},
                    { "data": "data_sessao"}
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

