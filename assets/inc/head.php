
    <?php $version = file_get_contents('version.txt'); ?>

    <?php
        header('Content-Type: text/html; charset=utf-8');
        if (isset($_GET["send"]) && $_GET["send"] == "done") {
            echo "<script> alert('Благодарим за запрос! Мы свяжемся с Вами в ближайшее время!'); window.location.replace('http://' + location.host); </script>";
        }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="/favicon.png" />
    <link rel="icon" type="image/png" href="/favicon.png" />

    <link rel="stylesheet" href="/style.css?v=<?=$version?>">

    <!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/style.css?v=<?=$version?>" type="text/css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css?v=<?=$version?>">
    <link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css?v=<?=$version?>">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/js/jquery.browser.min.js?v=<?=$version?>"></script>
    <script src="/js/bootstrap.min.js?v=<?=$version?>"></script>
    <script src="/js/bootstrap-tooltip.js?v=<?=$version?>"></script>
    <script src="/js/prettyPhoto.js?v=<?=$version?>"></script>
    <script src="/js/jquery.localscroll.js?v=<?=$version?>"></script>
    <script src="/js/jquery.scrollto.js?v=<?=$version?>"></script>
    <script src="/js/jquery.cookie.js?v=<?=$version?>"></script>
    <script src="/js/script.js?v=<?=$version?>"></script>
    <script src="/js/library.js?v=<?=$version?>"></script>
    <script src="/js/retina.js?v=<?=$version?>"></script>
    <script type="text/javascript" src="/js/timer.js?v=<?=$version?>"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-3655090-25', 'auto');
      ga('send', 'pageview');

    </script>

    <?php if (isset($_GET['presentation'])) { ?>
        <script>$(function(){
            $('#know-more-btn').trigger('click');
        })</script>
    <?php } ?>