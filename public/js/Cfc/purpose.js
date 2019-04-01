$(function() {

    $('[data-purpose]').on('click', addPurposeModal);

});

function addPurposeModal() {

    $('#modalAddPurpose').modal('show');
}

function changeBox() {
    var option_value = document.getElementById("purpose_id").value;

/*    var purpose_description = $(this).parent().prev().text();
    $('#purpose_description').val(purpose_description);
    */
    if (option_value == "proposito") {
        $('#modalAddPurpose').modal('show');
    }
}