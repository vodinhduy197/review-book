function follow_or_unfollow(idBook, idBookmart, action, getConfirm) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    if ( action == "following") {
        if (confirm(getConfirm)) {
            $.ajax({
                url: "http://127.0.0.1:8000/follow",
                type: "POST",
                cache: false,
                data: {
                    "book_id": idBook, _token: $('meta[name="csrf-token"]').attr('content'),
                },
                success: function(data){
                    $('.active'+idBook).html(data);
                },
                error: function (data){
                    alert('Lỗi đã xảy ra');
                }
            });
        }
    } else {
        if (confirm(getConfirm)) {
            $.ajax({
                url: 'http://127.0.0.1:8000/unfollow/'+idBookmart+'/'+idBook,
                type: "delete",
                cache: false,
                data: {
                    "id": idBookmart, "book_id": idBook, _token: $('meta[name="csrf-token"]').attr('content'),
                },
                success: function(data){
                    $('.active'+idBook).html(data);
                },
                error: function (data){
                    alert('Lỗi đã xảy ra');
                }
            });
        }
    }

    return false;
}
