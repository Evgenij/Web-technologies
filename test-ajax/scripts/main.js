$(document).ready(function () {
    $('#list-users').change(function () {
        $.ajax({
            type: "POST",
            url: "../showPosts.php",
            data: "idUser=" + $("#list-users").val(),
            success: function (data) {
                $(".content").html(data);
            }
        });
        return false;
    });
});