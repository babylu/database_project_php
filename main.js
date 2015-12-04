$(function(){
    $('#username').click(function(){
        $('#overlayContant').load('./html/loginDialog.html',function(){
            $('#loginDialog').dialog({
                modal: true,
                height: 500,
                width: 700,
                zIndex: 5000,
                closeOnEscape:true,
                position: ['center','center'],
                open: function () {
                    $('.ui-dialog-titlebar-close').parent().hide();
//                    $('.ui-dialog').unbind('focus');
                }
                
            });
            $('#loginClose').click(function(){
                $('.ui-dialog').dialog('close');
            });
        });
    });
});


