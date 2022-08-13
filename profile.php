<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">




    <!-- Favicons -->
    <link href="Home2/assets/img/favicon.png" rel="icon">
    <link href="Home2/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="Home2/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="Home2/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Home2/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="Home2/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Home2/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="Home2/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="Home2/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="Home2/assets/css/style.css" rel="stylesheet">
</head>


<body>
    <!-- Header -->
    <header id="header" class="fixed-top " style="background-color:rgba(67, 96, 146, 0.9) ;">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="#">
                <img src="assets/logo-removebg-preview.png" width="80" height="80" alt="" style="margin-right: 10%;">
            </a>
            <h1 class="logo me-auto"><a href="index.html">Startup Guider</a></h1>

            <nav id="navbar" class="navbar">


                <ul>
                    <li>
                        <a class="nav-link scrollto">
                            <form class="navbar-form navbar-left" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="searchbar" name="searchbar" placeholder="Search" autocomplete="off" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-light" type="submit" name="searchBtn" id="searchBtn">
			    				<i class="glyphicon glyphicon-search"></i>
			    			</button>
                                    </div>
                                </div>

                                <div class="countryList" style="position: absolute;width: 235px;z-index: 1001;"></div>
                            </form>
                        </a>
                    </li>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link   scrollto" href="#invest">Invest</a></li>

                    <li class="dropdown"><a href="#"><span><img src="assets/1.png" alt="" width="30px" height="30px"></span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Details</a></li>
                            <!-- <li><a href="#">Drop Down 2</a></li> -->
                            <!--  Use to create dropdown options  -->
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!--end of navbar-->

    <!--end of navbar-->
    <br>
    <br>
    <br>
    <br>
    <br>

    <div>
        <h3 style="margin-left: 39%;">profile details</h3>
    </div>
    <br>
    <br>
    <div>
        <img src="avatar/1660417058.png" alt="" height="100" width="100" style="border-radius: 50%; margin-left: 41%;">
    </div>
    <br>
    <!--table used for profile display-->
    <div style="margin-left: 37%;">
        <table class="table table-borderless table-responsive">
            <thead>
                <tr>
                    <th scope="col">Name:</th>
                    <th scope="col">John Smith</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">email:</th>
                    <th scope="col">email@gmail.com</th>
                </tr>
                <tr>
                    <th scope="col">Birth date:</th>
                    <th scope="col">12-01-2002</th>
                </tr>
                <tr>
                    <th scope="col">Gender:</th>
                    <th scope="col">Male</th>
                </tr>
                <tr>
                    <th scope="col">City:</th>
                    <th scope="col">Mumbai</th>
                </tr>
                <tr>
                    <th scope="col">pincode:</th>
                    <th scope="col">400 001</th>
                </tr>
                <tr>
                    <th scope="col">State:</th>
                    <th scope="col">Maharashtra</th>
                </tr>
                <tr>
                    <th scope="col">Country:</th>
                    <th scope="col">India</th>
                </tr>
            </tbody>
        </table>

    </div>




    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container footer-bottom clearfixcontainer footer-bottom clearfix">
            <!-- footer-top -->
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Startup Guider</h3>
                        <p>
                            St. Francis Institute of Technology<br> Mount Poisar, Mumbai-64<br> India
                            <br><br>
                            <strong>Phone: </strong> +91-9136752443<br>
                            <strong>Email: </strong>vaibhavhbaliya@student.sfit.ac.in<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Do follow us on our social media handles for fast updates!</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter" style="font-size: 28px;"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook" style="font-size: 28px;"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram" style="font-size: 28px;"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="Home2/assets/vendor/aos/aos.js"></script>
    <script src="Home2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Home2/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="Home2/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="Home2/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="Home2/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="Home2/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="Home2/assets/js/main.js"></script>

</body>

</html>

<script>

$(document).ready(function(){

    /*$('.dropdown-menu').click(function(e) {
        e.stopPropagation();
    });*/

    $('#searchbar').keyup(function(){

        var query = $(this).val();
        if(query != '')
        {
            $.ajax({
                url:"search_action.php",
                method:"POST",
                data:{query:query},
                success:function(data)
                {
                    $('.countryList').html(data);
                }
            });
        }
        else
        {
            $('.countryList').html('');
        }

    });

    $(document).on('click', '.list-group-item', function(){
        $('#searchbar').val($.trim($(this).text()));
        //$('#countryList').fadeOut();
        $('.countryList').html('');

    });

    
    var is_open = 'no';

    $('#friend_request_area').click(function(){
        if(is_open == 'no')
        {
           load_friends_request_list_data();
           is_open = 'yes';
        }
    });

    function count_un_seen_friend_request()
    {
        var action = 'count_un_seen_friend_request';

        $.ajax({
            url:"friend_action.php",
            method:"POST",
            data:{action:action},
            success:function(data)
            {
                if(data > 0)
                {
                    $('#unseen_friend_request_area').html('<span class="label label-danger">'+data+'</span>');
                    is_open = 'no';
                }
            }
        })
    }   

    setInterval(function(){
        count_un_seen_friend_request();
    }, 5000);

    function load_friends_request_list_data()
    {
        var action = 'load_friend_request_list';
        $.ajax({
            url:"friend_action.php",
            method:"POST",
            data:{action:action},
            beforeSend:function()
            {
                $('#friend_request_list').html('<li align="center"><i class="fa fa-circle-o-notch fa-spin"></i></li>');
            },
            success:function(data)
            {
                $('#friend_request_list').html(data);
                remove_friend_request_number();
            }
        })
    }   

    function remove_friend_request_number()
    {
        $.ajax({
            url:"friend_action.php",
            method:"POST",
            data:{action:'remove_friend_request_number'},
            success:function(data)
            {
                $('#unseen_friend_request_area').html('');
            }
        })
    }

    $('.dropdown-menu').click(function(event){

        event.preventDefault();

        var request_id = event.target.getAttribute('data-request_id');

        if(request_id > 0)
        {
            $.ajax({
                url:"friend_action.php",
                method:"POST",
                data:{request_id:request_id, action:'accept_friend_request'},
                beforeSend:function()
                {
                    $('#accept_friend_request_button_'+request_id).attr('disabled', 'disabled');
                    $('#accept_friend_request_button_'+request_id).html('<i class="fa fa-circle-o-notch fa-spin"></i> wait...');
                },
                success:function()
                {
                    load_friends_request_list_data();
                }
            })
        }

        return false;

    });

    $('#friends_list').html('<div align="center" style="line-height:200px;"><i class="fa fa-circle-o-notch fa-spin"></i></div>');

    setTimeout(function(){
        load_friends();
    }, 5000);

    function load_friends(query = '')
    {
        $.ajax({
            url:"friend_action.php",
            method:"POST",
            data:{action:'load_friends', query:query},
            success:function(data)
            {
                $('#friends_list').html(data);
            }
        });
    }

    $(document).on('keyup', '#search_friend', function(){
        var search_value = $('#search_friend').val();
        if(search_value != '')
        {
            load_friends(search_value);
        }
        else
        {
            load_friends();
        }
    });

    $('#share_button').click(function(){
        var content = $('#content_area').html();

        var action = $('#share_button').data('action');

        var post_id = $('#share_button').data('post_id');

        $.ajax({
            url:"post_action.php",
            method:"POST",
            data:{content:content, action:action, post_id:post_id},
            dataType:"JSON",
            beforeSend:function()
            {
                $('#share_button').attr('disabled', 'disabled');
                $('#share_button').html('<i class="fa fa-circle-o-notch fa-spin"></i> Post');
            },
            success:function(data)
            {
                $('#share_button').attr('disabled', false);
                $('#share_button').html('Post');
                $('#content_area').html('');
                $('#temp_url_content').remove();
                $('#timeline_area').append('<div id="last_post_details"><div align="center" style="font-size:36px; color:#ccc"><i class="fa fa-circle-o-notch fa-spin"></i></div></div>');

                if(action == 'update')
                {
                    setTimeout(function(){
                        $('#last_post_details').html(make_post(data.content, data.user_image, data.user_name));

                        $('#'+data.temp_id).imagesGrid({
                            images:data.media_array
                        });

                    }, 5000);
                }
                else
                {
                    setTimeout(function(){
                        $('#last_post_details').html(make_post(data.content, data.user_image, data.user_name));
                    }, 5000);
                }
            }
        })
    });

    function make_post(content, user_image, user_name)
    {
        html = `
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-9">
                        `+user_image+`&nbsp;<a href="#"><b>`+user_name+`</b></a> <span class="text-muted">has share post</span>
                    </div>
                </div>
            </div>
            <div class="panel-body" style="font-size:20px;">
                `+content+`
            </div>
        </div>
        `;

        return html;
    }

    $('#content_area').keyup(function(){
        var content = $('#content_area').html();

        var regex = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;

        var url = content.match(regex);

        if(url != null)
        {
            if(url.length > 0)
            {
                $.ajax({
                    url:"post_action.php",
                    method:"POST",
                    data:{action:'load_url_content', url:url},
                    dataType:"json",
                    beforeSend:function()
                    {
                        $('#content_area').append('<div id="temp_url_content"></div>');
                    },
                    success:function(data)
                    {
                        var html = `
                        <a href="`+data.link+`" target="_blank">
                            <div style="background-color:#f9f9f9">
                                `+data.media+`
                                <h3 style="color:#888">`+data.title+`</h3>
                                <p class="text-muted">`+data.description+`</p>
                            </div>
                        </a>
                        `;
                        $('#temp_url_content').html(html);
                    }
                })
            }
        }
        return false;
    });

    $('#multiple_files').on('change', function(){

        var form_data = new FormData();

        var file_input = $('#multiple_files');

        var total_files = file_input[0].files.length;

        for(var count = 0; count < total_files; count++)
        {
            var file_name = file_input[0].files[count].name;

            var extension = file_name.split('.').pop().toLowerCase();

            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
            {
                alert('Invalid Image File');

                $('#multiple_files').val('');

                return false;
            }

            var file_size = file_input[0].files[count].size;

            if(file_size > 1000000)
            {
                alert('Image size Very Big');

                $('#multiple_files').val('');

                return false;
            }

            form_data.append('files[]', file_input[0].files[count]);
        }

        $.ajax({
            url:"upload.php",
            type:"POST",
            data:form_data,
            dataType:"json",
            contentType:false,
            processData:false,
            beforeSend:function(){
                $('#share_button').attr('disabled', 'disabled');

                $('#content_area').after('<div id="temp_url_content"><div align="center" style="font-size:36px; color:#ccc"><i class="fa fa-circle-o-notch fa-spin"></i></div></div>');
            },
            success:function(data)
            {
                $('#share_button').attr('disabled', false);
                $('#share_button').attr('data-post_id', data.post_id);
                $('#share_button').attr('data-action', 'update');
                $('#temp_url_content').html(data.html_data);
            }
        })
    });

    $(document).on('click', '.close', function(){

        var media_id = $(this).data('media_id');

        var path = $(this).data('path');

        $.ajax({
            url:"upload.php",
            method:"POST",
            data:{media_id:media_id, path:path, action:'remove_media'},
            success:function()
            {
                $('#media-'+media_id).fadeOut('slow');
            }
        });
    });

});

</script>