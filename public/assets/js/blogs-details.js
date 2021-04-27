$(document).ready(function(e){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


    $('#commentform').submit(function(e){
        e.preventDefault()
        cname = $('#comment_name').val()
        cemail = $('#comment_email').val()
        cmsg = $('#comment_msg').val()
        blog_id = $('#blog_id').val()
        var tdate = new Date();
        var cdate = tdate.toString().substring(0,15)
        if(cname != '' || cemail != '' || cmsg != ''){
            $.ajax({
                type: 'POST',
                url: '/blogsComment',
                dataType: 'json',
                data: {cname:cname, cemail:cemail, cmsg:cmsg, blog_id:blog_id, cdate:cdate, '_token':  CSRF_TOKEN},
                success: function(response){
                    if(response.statuscode == 200){
                        $('#comment_err_msg').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+response.message+'</div>')
                        $('#comments_section').append('<li>'+
                            '    <div class="media comment-author bg-lighter p-20"> <a class="media-left" href="#"><img class="img-thumbnail" src="http://placehold.it/75x75" alt=""></a>'+
                            '        <div class="media-body">'+
                            '        <h5 class="media-heading comment-heading">'+cname+'</h5>'+
                            '        <div class="comment-date">'+cdate+'</div>'+
                            '        <p>'+cmsg+'</p>'+
                            '        </div>'+
                            '    </div>'+
                            '</li>')
                            $('#comment_name').val('')
                            $('#comment_email').val('')
                            $('#comment_msg').val('')
                            var abc = setInterval(function(e){
                                $('#comment_err_msg').html('')
                                clearInterval(abc)
                            }, 10000)
                    }
                    else{
                        $('#comment_err_msg').html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+response.message+'</div>')
                        var abc = setInterval(function(e){
                            $('#comment_err_msg').html('')
                            clearInterval(abc)
                        }, 10000)
                    }
                },
                error: function (error) {
                    $('#comment_err_msg').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Something went wrong!</div>')
                    var abc = setInterval(function(e){
                        $('#comment_err_msg').html('')
                        clearInterval(abc)
                    }, 10000)
                }
            })
        }

    })

    $('#likes_count').click(function(e){
        e.preventDefault()
        val = $(this).text()
        blog_id = $('#blog_id').val()

        $(this).children('span').html(parseInt(val) + 1)
        $.ajax({
            type: 'POST',
            url: '/blogLikes',
            dataType: 'json',
            data: {val: parseInt(val) + 1, id:blog_id, '_token':  CSRF_TOKEN},
            success: function(response){
                console.log('success')
                $('#likes_count').html('<i class="text-white fa fa-thumbs-o-up"></i>' + (parseInt(val)+ 1) + '<br>Likes')
            },
            error: function (error) {
                alert('something went wrong!')
            }
        })
    })
})
