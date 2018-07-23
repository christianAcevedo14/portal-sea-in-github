function loadZips(select)
{
    var city_id = select.value;
    var zipcode_select = $('#zipcode_id');

    if(city_id) {
        var root = document.location.hostname;
        var request_url = 'http://' + root + '/api/cities/' + city_id + '/zipcodes';

        $.ajax({
            url: request_url,
            type: 'GET',
            dataType: 'json',
            beforeSend: function(){
                waitingDialog.show('', {
                    headerText: 'Cargando códigos postales',
                    dialogSize: 'sm',
                    progressType: 'success'
                });
            },
            success:function(data) {
                zipcode_select.empty();
                zipcode_select.append('<option selected disabled>Selecciona un código postal</option>');
                $.each(data, function (key, value) {
                    zipcode_select.append('<option value="' + value.id + '">' + value.description + '</option>');
                });
                zipcode_select.selectpicker('refresh');
            },
            complete: function(){
                waitingDialog.hide();
            }
        });
    } else {
        zipcode_select.empty();
        zipcode_select.selectpicker('refresh');
    }
}