$(document).ready(function(e){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        "columnDefs": [
            { "width": "120px", "targets": 3 },
            { "width": "100px", "targets": 2 },
            { "width": "40px", "targets": 0 }
          ]
    });
    $("#example2").DataTable({
        "responsive": true,
        "autoWidth": false,
        "columnDefs": [
            { "width": "50px", "targets": 4 },
            { "width": "50%", "targets":3 },
            { "width": "30px", "targets": 0 }
          ]
    });

    function get_data(){
        $("#example1").dataTable().fnClearTable();
        $.ajax({
            type: 'GET',
            url: '/causeDetails',
            success: function(response){
                if(response.statuscode == 200){
                    srno = 0;
                    console.log(response.data)
                    $.each(response['data'], function(index, value){
                        $('#example1').dataTable().fnAddData([
                            ++srno,
                            value.cause_title,
                            '<a href="#" class="btn btn-success view-record ml-2" data-record_id="'+value.cause_id+'"><i class="fa fa-eye"></i></a>',
                            '<a href="/admin/causes/'+value.cause_id+'" class="btn btn-primary edit-record" data-record_id="'+value.cause_id+'"><i class="fa fa-edit"></i></a>'+
                            '<a href="#" class="btn btn-danger delete-record ml-2" data-record_id="'+value.cause_id+'"><i class="fa fa-trash"></i></a>'
                        ])
                    })
                }
            },
            error: function (error) {

            }
        })
    }
    get_data()
    pre_cause_id = ''
    $(document).on('click', '.delete-record', function(e){
        e.preventDefault()
        cause_id = $(this).data("record_id")

        bootbox.confirm("This will delete the cause permanently.", function(result){
            if(result){
                $.ajax({
                    type: 'POST',
                    url: '/deleteCause',
                    data: {cause_id:cause_id, '_token': CSRF_TOKEN},
                    success: function(response){
                        if(response.statuscode == 200){
                            toastr.success(response.message)
                            get_data()
                        }
                    },
                    error: function (error) {
                        toastr.error('Something went wront! please try again later.')
                    }
                })
            }
        });
    })
    $(document).on('click', '.view-record', function(e){
        id=$(this).data('record_id')
        pre_cause_id = id;
        $('#modal-lg').modal('show')
        $("#example2").dataTable().fnClearTable();
        $.ajax({
            type: 'POST',
            url: '/causeResponse',
            data: {'_token': CSRF_TOKEN,id:id},
            success: function(response){
                if(response.statuscode == 200){
                    srno = 0;
                    console.log(response.data)
                    $.each(response['data'], function(index, value){
                        $('#example2').dataTable().fnAddData([
                            ++srno,
                            value.name,
                            value.emailid,
                            value.message,
                            '<a href="#" class="btn btn-danger delete-record-rd ml-2" data-record_id="'+value.contact_id+'"><i class="fa fa-trash"></i></a>',
                        ])
                    })
                }
            },
            error: function (error) {

            }
        })
    })
    $(document).on('click', '.delete-record-rd', function(e){
        e.preventDefault()
        cause_id = $(this).data("record_id")
        bootbox.confirm("This will delete the comment permanently.", function(result){
            if(result){
                $.ajax({
                    type: 'POST',
                    url: '/deleteCausecomment',
                    data: {cause_id:cause_id, '_token': CSRF_TOKEN},
                    success: function(response){
                        if(response.statuscode == 200){
                            toastr.success(response.message)
                            $.ajax({
                                type: 'POST',
                                url: '/causeResponse',
                                data: {'_token': CSRF_TOKEN,id:pre_cause_id},
                                success: function(response){
                                    if(response.statuscode == 200){
                                        $("#example2").dataTable().fnClearTable();
                                        srno = 0;
                                        console.log(response.data)
                                        $.each(response['data'], function(index, value){
                                            $('#example2').dataTable().fnAddData([
                                                ++srno,
                                                value.name,
                                                value.emailid,
                                                value.message,
                                                '<a href="#" class="btn btn-danger delete-record-rd ml-2" data-record_id="'+value.contact_id+'"><i class="fa fa-trash"></i></a>',
                                            ])
                                        })
                                    }
                                },
                                error: function (error) {

                                }
                            })
                        }
                    },
                    error: function (error) {
                        toastr.error('Something went wront! please try again later.')
                    }
                })
            }
        });
    })
})

