$(document).ready(function () {
    $("#name").keyup(function () {
        var user = $(this).val()
        var kq = user.trim()
        $.post("./Ajax/CheckUsername", { un: kq }, function (data) {
            $("#messageUn").html(data)
        });
    })
}); 