
function generateCodeEntity() {
    const a = 'àáäâãèéëêìíïîòóöôùúüûñçßÿœæŕśńṕẃǵǹḿǘẍźḧ·/_,:;'
    const b = 'aaaaaeeeeiiiioooouuuuncsyoarsnpwgnmuxzh------'
    const p = new RegExp(a.split('').join('|'), 'g')
    var Text = $("#entity_field_name").val().toLowerCase()
        .replace(p, c => b.charAt(a.indexOf(c)))
        .replace(/ /g, '_')
        .replace(/[^\w-]+/g, '');

    $("#entity_field_code").val(Text);
}