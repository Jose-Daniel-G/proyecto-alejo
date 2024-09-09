@extends('layouts.master')
@include('layouts.inc.nav')
@section('content')
    <section class="container mt-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-6">
                    <form action="{{ route('tasks.store') }}" method="POST" class="form-container">
                        @csrf
                        <h2 class="text-center bg-dark p-2 text-white">Add Task Listing</h2>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                placeholder="Enter Title">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-dark btn-block save_btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('javascript')
    <script>
        $(document).ready(function() {
            $('.save_btn').on('click', function(e) {
                // $.ajaxSetup({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     }
                // });
                var token = $('meta[name="csrf-token"]').attr('content');
                // event.preventDefault();
                var title = $('#title').val();
                var description = $('#description').val();
                const form = $(this).parents('form');

                $(form).validate({
                    rules: {
                        title: {
                            required: true
                        },
                    },
                    message: {
                        title: "Please enter title"
                    },
                    submitHandler: function() {
                        var formData = new FormData(form[0]);
                        $.ajax({
                            method: "POST",
                            // url: "save_task",
                            url: "{{ route('tasks.store') }}", // Cambia la URL para coincidir con tu ruta
                            data: formData,
                            headers: {
                                'X-CSRF-TOKEN': token
                            },
                            processData: false,
                            contentType: false,
                            success: function(data) {
                                console.log(data);
                                if (data.status) {
                                    $("#notifDiv").fadeIn();
                                    $("#notifDiv").css('background', 'green');
                                    $("#notifDiv").text(data.message);
                                    setTimeout(() => {
                                        $("#notifDiv").fadeOut();
                                    }, 3000);
                                    $('[name="title"]').val('');
                                    $('textarea[name="description"]').val('');
                                } else {
                                    $("#notifDiv").fadeIn();
                                    $("#notifDiv").css('background', 'red');
                                    $("#notifDiv").text('Something went wrong');
                                    setTimeout(() => {
                                        $("#notifDiv").fadeOut();
                                    }, 3000);
                                }
                            },
                            error: function(err) {
                                console.log(err);
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
