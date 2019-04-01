$(function() {

    $('[data-purpose]').on('click', addPurposeModal);

});

function addPurposeModal() {

    $('#modalAddPurpose').modal('show');
}

function changeBox() {
    var option_value = document.getElementById("purpose_id").value;
    if (option_value == "proposito") {
        $('#modalAddPurpose').modal('show');
    }
}