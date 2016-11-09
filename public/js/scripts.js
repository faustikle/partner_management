$( document ).ready(function() {
      $('.datatable-format').DataTable();
      $('.datepicker').datepicker({
        autoclose: true,
        dateFormat: 'dd/mm/yy'
      });

    $('.datatable-format').DataTable({
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
        "initComplete": function () {
            var api = this.api();
            api.$('td.click-search').click( function () {
                api.search( $(this).text().trim()).draw();
            } );
        }
    });
});
