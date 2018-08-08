$(function () {
    $('#select-critical_issue').on('change', onSelectCriticalIssueChange);
    $('#select-materia').on('change', onSelectMateriaChange);
    $('#select-objetivo').on('change', onSelectObjetivoChange);

});


function onSelectCriticalIssueChange() {
    console.log('Funciona Materia')
    var critical_issue_id = $(this).val();
    //console.log(critical_issue_id);

    $.get('/sise/issue/' + critical_issue_id + '/materias', function (data) {

        // for testing purpusos
        console.log(data);
        console.log(data.length);

        var html_select = '<option value="">Escoja</option>';
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
        console.log(data.length);

        var html_select = '<option value="">Escoja</option>';
        for (var i = 0; i < data.length; ++i) {
            html_select += '<option value="' + data[i].id + '">' + data[i].code + '</option>';
            $('#select-objetivo').html(html_select);
        }
    });


}


function onSelectObjetivoChange() {
    console.log('Funciona Indicadores')

    var objetivo_id  = $(this).val();

    /*if(!objetivo_id)
    {
        $('#select-objetivo').html('<option value="">Seleccione Objetivo</option>');
        return;
    }*/

    $.get('/sise/objetivo/'+objetivo_id+'/indicadores', function (data) {

        console.log(data);
        console.log(data.length);

        var html_select = '';
        for (var i = 0; i < data.length; ++i){
            html_select += '<tr><td><input type="text" class="form-control" name=""></td><td>'+data[i].code+'</td><td>'+data[i].description+'</td></tr>'
            //html_select += '<option value="'+data[i].code+'">'+data[i].description+'</option>\n'
            $('#select-indicador').html(html_select);
        }
    });
}

