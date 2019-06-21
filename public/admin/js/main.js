$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
	
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    
    $('#submit').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url:"http://127.0.0.1:8000/adminpanel/changePassword",
            method: 'post',
            data: {
                oldPassword: $('#oldPassword').val(),
                newPassword: $('#newPassword').val(),
                comfirmPassword: $('#comfirmPassword').val(),
                _token: $('meta[name="csrf-token"]').attr('content'),
            },
            success: function(data){
                $('#clear')[0].reset();
                alert('Change password Success!!');
            },
            error: function (data){
                $('#clear')[0].reset();
                $('.alert-danger').empty();
                $.each(data.responseJSON.errors, function(key, value){
                    $('.alert-danger').show();
                    $('.alert-danger').append('<li>'+value+'</li>');
                });
            }
        });
    });
    
    $('.bd-example-modal-sm').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('idbook')
        var code = ''
        $.ajax({
            type : 'GET',
            url : 'http://127.0.0.1:8000/adminpanel/dashboard/userFollowBook/'+id,
            success: function (response){
                for(var i = 0; i < response.data.length; i++)
                {
                    var item = response.data[i];
                    var avatar = item.avatar;
                    var url =  '../storage/admin/accounts/'+avatar;
                    code += `<p><img src="`+url+`" class="config-img set-avatar"/>`+item.full_name+`</p>`;
                }
                $('.list-user').html(code);
            }, error: function (response) {
                alert('Whoop! Some thing wrong...');
            }
        })
    });
});

function checkDel(id) {
    var check = confirm('Are you sure you want to delete this item?');

    if (check) {
        $('#delForm-' + id).submit()
    }
}
