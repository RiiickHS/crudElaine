$(document).ready(function () {
    
    var site_url  = window.location.href;

    
    
    $.ajax ({
        url: site_url+"/showGrid",
        type: "POST",
        dataType: "json",
        success: function(data){
            let posts = data.posts;
            posts = posts.map((element) => {
                let d = new Date(element.data_sessao);
                element.data_sessao = d.toLocaleDateString('pt-BR', {timeZone: 'UTC'})
                return element
            });
    
                    
            $('#table_sess').DataTable({
                "data": posts,
                "columns": [
                    { "data": "nome"},
                    { "data": "tipo_sessao"},
                    { "data": "data_sessao"}
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

