// Call the dataTables jQuery plugin
// $(document).ready(function() {
//   $('#dataTable').DataTable();
// });

$(document).ready(function() {
  $('#dataTable').DataTable( {
    "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]]
  } );
} );

$(document).ready(function() {
  $('#dataKegiatan').DataTable( {
    "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]],
    "order": [[ 3, "desc" ]]
  } );
} );

// $(document).ready(function() {
//   $('#dataPegawai').DataTable( {
//     "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]],
//     "order": [[ 0, "asc" ]]
//   } );
// } );

//datatable dataPegawai daftar pegawai
$(document).ready(function(){
  // Setup - add a text input to each footer cell
  $('#dataPegawai tfoot th').each( function () {
    var title = $(this).text();
    $(this).html( '<input type="text" placeholder="'+title+'" />' );
  } );

  // untuk keterangan zona waktu
  var dtt = new Date();
  var ntimezone = parseInt(dtt.getTimezoneOffset());
  var ntimezone = ntimezone * -1 / 60;
  var wib = 7;
  var wita = 8;
  var wit = 9;
  if (ntimezone == wib ) {
    ntimezone = "WIB (Waktu Indonesia Bagian Barat)";
  } else if (ntimezone == wita) {
    ntimezone = "WITA (Waktu Indonesia Bagian Tengah)";
  } else if (ntimezone == wit) {
    ntimezone = "WIT (Waktu Indonesia Bagian Timur)";
  } else {
    ntimezone = "";
  }

  // untuk tanggal cetak / print
  var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "Desember"];
  var dtt = "Dicetak pada "+dtt.getDate()+" "+months[dtt.getMonth()]+" "+dtt.getFullYear()+" Pukul "+dtt.getHours()+":"+dtt.getMinutes()+" "+ntimezone;

  // DataTable
  var table = $('#dataPegawai').DataTable({
    // lengthChange: false,
    // buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
    "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]],
    "order": [[ 0, "asc" ]],
    "columns": [
      { "width": "2%", },
      { "width": "15%" },
      { "width": "15%" },
      { "width": "35%" },
      { "width": "33%" }
    ],
    columnDefs: [
      { responsivePriority: 5, targets: 0 },
      { responsivePriority: 1, targets: 1 },
      { responsivePriority: 4, targets: 2 },
      { responsivePriority: 2, targets: 3 },
      { responsivePriority: 3, targets: 4 }
    ],
    dom: 'Bfrtip',
    buttons: [
      {
        extend: 'print',
        autoPrint: false,
        messageTop: dtt,
        className: 'btn btn-info'
      },
      {
        extend: 'pdf',
        className: 'btn btn-info'
      },
      {
        extend: 'excel',
        className: 'btn btn-info'
      },
      {
        extend: 'colvis',
        className: 'btn btn-info'
      }
    ],
    "responsive": true,
    initComplete: function () {
        // Apply the search
        this.api().columns().every( function () {
            var that = this;

            $( 'input', this.footer() ).on( 'keyup change clear', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    }
  });
});