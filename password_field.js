
    $("#passwordfield").on("keyup", function(){
        if($(this).val())
        $(".glyphicon-eye-open").show();
        else
        $(".glyphicon-eye-open").hide();
    });

    $(".glyphicon-eye-open").mousedown(function(){
        $("#passwordfield").attr('type','text');
    }).mouseup(function(){
        $("#passwordfield").attr('type','password');
    }).mouseout(function(){
        $("#passwordfield").attr('type','password');
    })