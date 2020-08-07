<!DOCTYPE html>
<html lang="en">
<?php
require 'header.php';
?>


<head>

    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="en" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Image-Uploader is a simple jQuery Drag & Drop Image Uploader plugin made to be used in forms, withot AJAX." />
    <meta name="keywords" content="image, upload, uploader, image-uploader, jquery, gallery, file, form, static" />
    <meta name="author" content="Christian Bayer" />
    <meta name="copyright" content="© 2019 - Christian Bayer" />
    <meta property="og:url" content="https://christianbayer.github.io/image-uploader/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Image-Uploader" />
    <meta property="og:description" content="Image-Uploader is a simple jQuery Drag & Drop Image Uploader plugin made to be used in forms, withot AJAX." />
    <meta property="og:image" content="https://github.githubassets.com/images/modules/logos_page/GitHub-Logo.png" />

    <title>Image-Uploader</title>

    <link rel="stylesheet" href="dist/image-uploader.min.css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Montserrat:300,400,500,600,700|Source+Code+Pro&display=swap" rel="stylesheet">


</head>

<body>

    <div class="container">


        <h4><a>Publish a new Advert
            </a></h4>
        <div class="card-panel">

            <form action="process.php" method="post" id="adform" enctype="multipart/form-data">



                <label>
                    <h6> <b>Select a category *</b> </h6>
                </label>
                <div class="input-field">
                    <select name="id_category" required="required">
                        <option value="">Choose category...</option>
                        <?php
                        echo displayCategories("");
                        ?>
                    </select>
                </div>
                <label>
                    <h6>
                        Where is the advertisment located ?</b>
                    </h6>
                    <h6> <b>State *</b> </h6>
                </label>
                <div class="input-field">
                    <select name="location" required="required">
                        <option value="">Choose location...</option>
                        <?php
                        echo displayCounties("");
                        ?>
                    </select>
                </div>
                <label>
                    <h6> <b>District *</b> </h6>
                </label>
                <div class="input-field">

                    <select name="location" required="required">
                        <option value="">Choose location...</option>
                        <?php
                        echo displayCounties("");
                        ?>
                    </select>
                </div>
        </div>

        <div class="card-panel lighten-3">

            <input type="hidden" name="formname" value="adform" readonly="readonly" />
            <label>
                <h6> <b>Title of the Advert *</b> (Name/title of what you are advertising e.g Samsung S9 , Lexus Jeep , 3 bedroom flat house,etc) </h6>
            </label>
            <div class="input-field">
                <input type="text" name="title" maxlength="20" required="required" />
            </div>
            <label>
                <h6> <b>Price *</b> (in US-Dollars Only) </h6>
            </label>

            <div class="input-field">
                <input type="number" name="price" required="required" />
            </div>
        </div>


        <div class="card-panel">

            <label>
                <h6> <b>Transaction type *</b> </h6>
            </label>
            <div class="input-field">
                <select name="ad_type" required="required">
                    <option value="">Choose type...</option>
                    <option value="S">Sell</option>
                    <option value="W">Buy</option>
                </select>
            </div>
            <label>
                <h6> <b>Contact method *</b> </h6>
            </label>
            <div class="input-field">

                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="contact_byphone" value="1" />
                        <span>Phone</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="message_center" value="1" />
                        <span>Email</span>
                    </label>
                </p>
            </div>

            <label>
                <h6> <b>Add image *</b> (please take a clear image, advisable to upload more than one images) </h6>
            </label>
            <div class="file-field input-field">

                <div class="input-field">
                    <label class="active">Photos</label>
                    <div class="input-images-1" style="padding-top: .5rem;"></div>
                </div>

            </div>
            <label>
                <h6> <b>Description *</b>(Breif description of what you are advertising) </h6>
            </label>
            <textarea name="description" required="required" class="materialize-textarea"> </textarea>

            <center> <button type="submit" class="btn">Place Ad</button> </center>
            </form>
        </div>
    </div>






    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="dist/image-uploader.min.js"></script>

    <script>
        $(function() {

            $('.input-images-1').imageUploader();

            let preloaded = [{
                    id: 1,
                    src: 'https://picsum.photos/500/500?random=1'
                },
                {
                    id: 2,
                    src: 'https://picsum.photos/500/500?random=2'
                },
                {
                    id: 3,
                    src: 'https://picsum.photos/500/500?random=3'
                },
                {
                    id: 4,
                    src: 'https://picsum.photos/500/500?random=4'
                },
                {
                    id: 5,
                    src: 'https://picsum.photos/500/500?random=5'
                },
                {
                    id: 6,
                    src: 'https://picsum.photos/500/500?random=6'
                },
            ];

            $('.input-images-2').imageUploader({
                preloaded: preloaded,
                imagesInputName: 'photos',
                preloadedInputName: 'old'
            });

            $('form').on('submit', function(event) {

                // Stop propagation
                event.preventDefault();
                event.stopPropagation();

                // Get some vars
                let $form = $(this),
                    $modal = $('.modal');

                // Set name and description
                $modal.find('#display-name span').text($form.find('input[id^="name"]').val());
                $modal.find('#display-description span').text($form.find('input[id^="description"]').val());

                // Get the input file
                let $inputImages = $form.find('input[name^="images"]');
                if (!$inputImages.length) {
                    $inputImages = $form.find('input[name^="photos"]')
                }

                // Get the new files names
                let $fileNames = $('<ul>');
                for (let file of $inputImages.prop('files')) {
                    $('<li>', {
                        text: file.name
                    }).appendTo($fileNames);
                }

                // Set the new files names
                $modal.find('#display-new-images').html($fileNames.html());

                // Get the preloaded inputs
                let $inputPreloaded = $form.find('input[name^="old"]');
                if ($inputPreloaded.length) {

                    // Get the ids
                    let $preloadedIds = $('<ul>');
                    for (let iP of $inputPreloaded) {
                        $('<li>', {
                            text: '#' + iP.value
                        }).appendTo($preloadedIds);
                    }

                    // Show the preloadede info and set the list of ids
                    $modal.find('#display-preloaded-images').show().html($preloadedIds.html());

                } else {

                    // Hide the preloaded info
                    $modal.find('#display-preloaded-images').hide();

                }

                // Show the modal
                $modal.css('visibility', 'visible');
            });

            // Input and label handler
            $('input').on('focus', function() {
                $(this).parent().find('label').addClass('active')
            }).on('blur', function() {
                if ($(this).val() == '') {
                    $(this).parent().find('label').removeClass('active');
                }
            });

            // Sticky menu
            let $nav = $('nav'),
                $header = $('header'),
                offset = 4 * parseFloat($('body').css('font-size')),
                scrollTop = $(this).scrollTop();

            // Initial verification
            setNav();

            // Bind scroll
            $(window).on('scroll', function() {
                scrollTop = $(this).scrollTop();
                // Update nav
                setNav();
            });

            function setNav() {
                if (scrollTop > $header.outerHeight()) {
                    $nav.css({
                        position: 'fixed',
                        'top': offset
                    });
                } else {
                    $nav.css({
                        position: '',
                        'top': ''
                    });
                }
            }
        });
    </script>

</body>

<?php
include 'footer.php';
?>

</html>