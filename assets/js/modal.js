
// Tampil Modal Petugas
 $(document).ready(function(){
    $('#myModal').on('show.bs.modal', function (e){
      
      var rowid = $(e.relatedTarget).data('id');
      $.ajax({
        type:'post',
        url:'content/modal/modal_pgw.php',
        data: 'rowid='+rowid,
        success: function(data){
          $('.fatched-data').html(data)
        }
      });
    });

  });

  
// Tampil Modal Golongan
 $(document).ready(function(){
  $('#myModal2').on('show.bs.modal', function (e){
    
    var rowid = $(e.relatedTarget).data('id');
    $.ajax({
      type:'post',
      url:'content/modal/modal_gol.php',
      data: 'rowid='+rowid,
      success: function(data){
        $('.fatched-data2').html(data)
      }
    });
  });

});

// Tampil Modal Golongan
$(document).ready(function(){
  $('#myModal3').on('show.bs.modal', function (e){
    
    var rowid = $(e.relatedTarget).data('id');
    $.ajax({
      type:'post',
      url:'content/modal/modal_jab.php',
      data: 'rowid='+rowid,
      success: function(data){
        $('.fatched-data3').html(data)
      }
    });
  });

});

// Tampil Modal Golongan
$(document).ready(function(){
  $('#myModal4').on('show.bs.modal', function (e){
    
    var rowid = $(e.relatedTarget).data('id');
    $.ajax({
      type:'post',
      url:'content/modal/modal_absen.php',
      data: 'rowid='+rowid,
      success: function(data){
        $('.fatched-data4').html(data)
      }
    });
  });

});


// Tampil Modal petugas
$(document).ready(function(){
  $('#myModal5').on('show.bs.modal', function (e){
    
    var rowid = $(e.relatedTarget).data('id');
    $.ajax({
      type:'post',
      url:'content/modal/modal_petugas.php',
      data: 'rowid='+rowid,
      success: function(data){
        $('.fatched-data5').html(data)
      }
    });
  });

});