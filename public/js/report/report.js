$(function () {
    $('#select-critical_issue').on('change', onSelectCriticalIssueChange);
    $('#select-materia').on('change', onSelectMateriaChange);
});


function onSelectCriticalIssueChange() {
    console.log('Funciona Materia')
    var critical_issue_id = $(this).val();
    //console.log(critical_issue_id);

    $.get('/sise/issue/' + critical_issue_id + '/materias', function (data) {

        // for testing purpusos
        console.log(data);
        console.log(data.length);

        var html_select = '<option value="">Seleccione Materia</option>';
        for (var i = 0; i < data.length; ++i) {
            html_select += '<option value="' + data[i].code + '">' + data[i].description + '</option>';
            $('#select-materia').html(html_select);

        }
    });


}

function onSelectMateriaChange() {
    console.log('Funciona Objetivo')
    var materia_id = $(this).val();

    $.get('/sise/materia/' + materia_id + '/objetivos', function (data) {

        console.log(data);
    });


}


/*function onSelectCriticalIssueChange() {
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
}*/

