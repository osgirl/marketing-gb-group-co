<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Explor Photos - GB Group Marketing Tools &amp; Brand Assets - Grégoire Besson, Rabe, Agriway</title>
    <meta name="description" content="">
    <meta name="author" content="GB Group">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext|Kanit:500" rel="stylesheet">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108104860-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-108104860-7');
    </script>

  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="https://marketing.gb-group.co">Back to homepage</a>
                <br>
                <br>
                <h1>Explor</h1>
                <br>
                <div class="row">
                    <?php
                    $arr = array(
                    "explor-00001.jpg",
                    "explor-00008.jpg",
                    "explor-00009.jpg",
                    "explor-00010.jpg",
                    "explor-00011.jpg",
                    "explor-00013.jpg",
                    "explor-00014.jpg",
                    "explor-00017.jpg",
                    "explor-00018.jpg",
                    "explor-00019.jpg",
                    "explor-00020.jpg",
                    "explor-00021.jpg",
                    "explor-00022.jpg",
                    "explor-vostok-00001.jpg",
                    "explor-vostok-00002.jpg",
                    "explor-vostok-00003.jpg",
                    "explor-vostok-00004.jpg",
                    "explor-vostok-00005.jpg",
                    "explor-vostok-00006.jpg",
                    "explor-vostok-00007.jpg",
                    "explor-vostok-00008.jpg",
                    "explor-vostok-00009.jpg",
                    "explor-vostok-00010.jpg",
                    "explor-vostok-00011.jpg",
                    "explor-vostok-00012.jpg",
                    "explor-vostok-00013.jpg",
                    "explor-vostok-00014.jpg",
                    "explor-vostok-00015.jpg"
                    );
                    foreach ($arr as $value) {
                        echo "
                        <div class=\"col-3\">\n
                            <div class=\"card\" style=\"margin-bottom: 2rem;\">\n
                                <div class=\"ratio\" style=\"background-image: url(https://marketing.cellar.services.clever-cloud.com/photos/gregoire-besson/small/".$value.");\"></div>\n
                                <p class=\"text-center\" style=\"margin: 0; padding: 0.5rem; font-size:0.7rem;\"><small>".$value."</small></p>
                                <a class=\"text-center\" href=\"https://marketing.cellar.services.clever-cloud.com/photos/gregoire-besson/original/".$value."\" download target=\"_blank\"><small style=\"font-weight: bold; padding-bottom: 0.5rem; display: block;\">Download &darr;</small></a>\n
                            </div>\n
                        </div>\n
                        \n
                        ";}
                    ?>
                </div>
            </div>    
        </div>
    </div>
    
  </body>
</html>