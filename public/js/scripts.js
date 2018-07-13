$(function(){
    $('#tableModal').modal({
        keyboard: true,
        backdrop: "static",
        show:false,
        
    }).on('show', function(){
          var getIdFromRow = $(event.target).closest('tr').data('id');
        //make your ajax call populate items or what even you need
        $(this).find('#tableDetails').html($('<b> Order Id selected: ' + getIdFromRow  + '</b>'))
    });
});