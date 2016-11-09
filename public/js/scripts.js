$( document ).ready(function() {
    $('.datatable-format').DataTable({
        "paging": false,
        "ordering": false,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "language": {
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "zeroRecords": "Nenhum Registro Encontrato!",
            "lengthMenu":     "Exibir _MENU_ ",
            "sSearch": "Pesquisar",
            "info" : "Total de Registros:  _TOTAL_",
            "infoEmpty" : "",
            "infoFiltered": "",
            "paginate": {
                "previous": "Anterior",
                "next": "Proxima"

            }

        },

    });
});
