function getRate(getConfirm, getAlert) {
    var check = confirm(getConfirm);
    if(check) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            url: "http://127.0.0.1:8000/rate",
            type: "POST",
            cache: false,
            data: {
                rating: $("input[name='rating']:checked").val(),
                user_id: $("input[name='user_id']").val(),
                book_id: $("input[name='book_id']").val(),
                _token: $('meta[name="csrf-token"]').attr('content'),
            },
            success: function(data){
                $('#alert-rating').hide();
                $("input[name='rating']").attr("disabled", true);
                $('#submit-rating-button').hide();
                alert(getAlert);
            },
            error: function (data){
                $('#alert-rating').empty();
                $.each(data.responseJSON.errors, function(key, value){
                    $('#alert-rating').show();
                    $('#alert-rating').append('<li>'+value+'</li>');
                });
            }
        });
    }
    
}
