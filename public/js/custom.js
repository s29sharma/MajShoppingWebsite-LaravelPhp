
$(document).ready( function () {

    var openAllPanels = function(aId) {
        console.log("setAllPanelOpen");
        $(aId + ' .panel-collapse:not(".in")').collapse('show');
    };
    var closeAllPanels = function(aId) {
        console.log("setAllPanelclose");
        $(aId + ' .panel-collapse.in').collapse('hide');
    };

    $(".toggle-accordion").click(function() {
        var accordionId = $(this).attr('id'),
            numPanelOpen = $(accordionId + ' .collapse.in').length;

        $(this).toggleClass("active");

        if (numPanelOpen === 0) {
            openAllPanels(accordionId);
        } else {
            closeAllPanels(accordionId);
        }
    });


});





$('#thumbs img').click(function(){
    $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
    $('#description').html($(this).attr('alt'));
});


    $(document).ready( function() {

        $('#largeImage').hover(
            function () {
                $(this).addClass('transition');
            },
            function () {
                $(this).removeClass('transition');
            });

    });

$( function() {
    node1=document.getElementById('lower-value');
    node2=document.getElementById('upper-value');
    $( "#nonlinear" ).slider({
        range: true,
        min: 0,
        max: 10000,
        values: [ 0, 10000 ],
        slide: function( event, ui ) {
            $("#lower-value").val(ui.values[0]);
            $("#upper-value").val(ui.values[1]);
        }
    });
} );




