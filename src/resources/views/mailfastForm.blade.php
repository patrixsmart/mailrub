<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MailFast Easy</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.Laravel = { csrfToken: '{{ csrf_token() }}'}</script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-white shadow-lg p-3 rounded mt-auto">

                <div class="card ">
                    <div class="card-header text-center">
                        <h3>PatriXsmarT <span style="font-family:cursive">Mailfast</span></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('mailfast-send')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="subject" class=" ">Subject Of The E-mail</label>
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject Of The E-mail" required>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="">E-mail Address</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="A Valid Email Address" required>
                                </div>

                                <div class="form-group">
                                    <label for="message" class=" ">Body Of E-mail</label>
                                    <textarea name="message" id="article-ckeditor" class="form-control" placeholder="Write the body of the mail here" required></textarea>
                                </div>

                                <div class="custom-file">
                                    <input id="logo" name='file' type="file" class="custom-file-input">
                                    <label for="logo" class="custom-file-label text-truncate">Attach A File To the Email</label>
                                </div>

                                <input type="submit" class="btn btn-primary mt-3" value="Submit">
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        mailfast@patrixsmart.com
                    </div>
                </div>

        </div>
    </div>
</div>


    <!-- Scripts -->
    <script src="{{asset('js/app.js')}}" ></script>
      
 
    <!--ckeditor-->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <!--End of ckeditor--> 


    <script>
        $('.custom-file-input').on('change', function() { 
        let fileName = $(this).val().split('\\').pop(); 
        $(this).next('.custom-file-label').addClass("selected").html(fileName); 
        });
    </script>

</body>
</html>

