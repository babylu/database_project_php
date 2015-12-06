
$(function(){
    $('#viewEmp').show();
    $('#addEmp').hide();
    $('#modifyEmp').hide();
    $('#view').click(function(){
        $('#viewEmp').show();
        $('#addEmp').hide();
        $('#modifyEmp').hide();
    });
    $('#add').click(function(){
        $('#addEmp').show();
        $('#modifyEmp').hide();
        $('#viewEmp').hide();
    });
    $('#modify').click(function(){
        $('#modifyEmp').show();
        $('#addEmp').hide();
        $('#viewEmp').hide();
    });
    
});



