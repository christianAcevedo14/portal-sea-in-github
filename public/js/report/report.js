
$(function () {
    $('#select-critical_issue').on('change', onSelectCriticalIssueChange);
});



function onSelectCriticalIssueChange() {
    var critical_issue_id  = $(this).val();

    if(!critical_issue_id)
    {
        $('#select-materia').html('<option value="">Seleccione Materia</option>');
        return;
    }

    $.get('/sise/issue/'+critical_issue_id+'/materias', function (data) {
        var html_select = '<option value="">Seleccione Materia</option>';
        for (var i = 0; i < data.length; ++i){
            html_select += '<option value="'+data[i].code+'">'+data[i].description+'</option>\n'
            $('#select-materia').html(html_select);

        }

            });
}

