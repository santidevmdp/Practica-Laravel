$(function(){
    /*********************TABLE-MODAL*/
    $('#tableModal').modal({
        keyboard: true,
        backdrop: "static",
        show:false,
        
    }).on('show', function(){
          var getIdFromRow = $(event.target).closest('tr').data('id');
        //make your ajax call populate items or what even you need
        $(this).find('#tableDetails').html($('<b> Order Id selected: ' + getIdFromRow  + '</b>'))
    });
    //END TABLE_MODAL

    /********************* LIST GRID VIEW */
    // Get the elements with class="column"
    var elements = document.getElementsByClassName("column");

    // Declare a loop variable
    var i;

    // List View
    function listView() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.width = "100%";
        }
    }

    // Grid View
    function gridView() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.width = "50%";
        }
    }
        //END LIST GRID VIEW

    /**********************VIEW TABLE ROW */
    $('.tbody .tr').on('click',function() {
        var dato = ($(this).data("id"));

    });

});