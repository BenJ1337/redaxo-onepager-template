<head>
    <title>Meine Redaxo Seite</title>
    <meta charset="UTF-8">
    <meta name="author" content="Benjamin Hacker">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $('.navbar-nav a.nav-link').click(function() {
                var target = $($(this).attr('href'));
                if (target.length) {
                    $('.navbar-nav a.nav-link').removeClass('active');
                    $(this).addClass('active');
                    $([document.documentElement, document.body]).animate({
                        scrollTop: target.offset().top
                        }, 300);
                        return false;
                    }
            });
        });
    </script>
    <style>
        body, html {
            height: 100%;
        }
        main {
            padding-top: 55px;
            min-height: calc(100% - 78px);
            display: block;
        }
        footer {
            width: 100%;
            height: 78px;
            background: #343a40;
        }
        footer > div {
            width: 200px;
            display: block;
            margin: 0 auto;
        }
        footer > div > a {
            width: 100%;
            display: block;
            padding: 5px 5px;
            text-align: center;
            color: #8c9c93;
        }
        .content-section {
            padding: 15px 0;
            border-bottom: 1px dashed #222;
            height: 1200px;
            padding-top: 55px;
        }
        main .content-section:last-child {
            border: none;
        }
    </style>
</head>