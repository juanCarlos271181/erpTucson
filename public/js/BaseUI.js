class BaseUI{
    constructor(){}

    fillDropBox(id, arraydata, defaultValue, label) {
        $(id).empty();
        if (label) {
            $(id).append($('<option></option>').val(-1).text(label));
        }
        arraydata.forEach(function (e, i) {
            $(id).append($('<option></option>').val(e.key).text(e.value));
        });
        $(id + ' option[value="' + defaultValue + '"]').attr('selected', 'selected');
    }

} 