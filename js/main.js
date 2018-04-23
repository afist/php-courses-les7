$(".btn-main").click(function(event){
    event.preventDefault();

    var serializedData = $(this).parent().parent().serialize();
    $(this).css("display","none");
    request = $.ajax({
        url: "form-send.php",
        type: "post",
        data: serializedData,
        success(a){
            $('#question').html(a);

        }
    });

})


$(".btn-form").click(function(event){
    event.preventDefault();
    var serializedData = $("#form").serialize();

    request = $.ajax({
        url: "form-send.php",
        type: "post",
        data: serializedData,
        success(a){
            $('.hi').html(a);

        }
    });

})