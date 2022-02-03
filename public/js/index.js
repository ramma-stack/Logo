$(document).ready(function () {

    $('#user_logout').on('click', function () {
        $('#logout').slideToggle('fast');
    });

    $('#checkBtn').on('click', function () {
        console.log("hello");
        var color = $('#colors :checkbox');
        color.change(function () {
            if (color.is(':checked')) {
                color.removeAttr('required');
            } else {
                color.attr('required', 'required');
            }
        });

        var size = $('#sizes :checkbox');
        size.change(function () {
            if (size.is(':checked')) {
                size.removeAttr('required');
            } else {
                size.attr('required', 'required');
            }
        });

    });

    $('#decrement').on('click', function () {
        var value = parseInt($("input[type='number']").val()) - 1;
        if (value < 1) {
            alert("This Value Must Larger Than One!");
        } else {
            $("input[type='number']").val(value);
        }
    });
    $('#increment').on('click', function () {
        var value = parseInt($("input[type='number']").val()) + 1;
        $("input[type='number']").val(value);
        console.log("hello");
    });

});
