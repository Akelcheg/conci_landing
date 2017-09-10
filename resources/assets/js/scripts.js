$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#get-started-send").click(function () {
        $.post("get-started",
            $("#get-started-form").serialize(), function (data) {

                $("p.error").hide();

                if (data['status'] == 0) {
                    $(".error").show();
                    $(".error").text(data['message']);

                } else {
                    $("p.error").hide();
                    $("#get-started-form").find("input[type=text], textarea").val("");
                    $('#get-started-modal').modal('hide');
                    $("#dancing-modal").modal();
                }


            });
    });

    $('#phone_number').mask('(000) 000-0000');
});