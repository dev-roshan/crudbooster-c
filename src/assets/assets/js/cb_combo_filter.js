$(document).ready(function(){
    $("#advanced_filter_modal").on('shown.bs.modal', function () {
        const combocount=parseInt($("#combocount").text());
        const combonames=$("#combonames").text().split(',');
            for (i = 1; i <= combocount; i++) { 
                var ele_name=combonames[i];
                $('#'+ele_name).selectize();
            }
    });


    
});
