<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Helios Photos - GB Group Marketing Tools &amp; Brand Assets - Grégoire Besson, Rabe, Agriway</title>
    <meta name="description" content="">
    <meta name="author" content="GB Group">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext|Kanit:500" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">

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
                <h1>Helios</h1>
                <br>
                <div class="row">
                    <?php
                    $arr = array(
                    "helios-mono-00001.JPG",
                    "helios-mono-00002.JPG",
                    "helios-mono-00003.JPG",
                    "helios-mono-00004.JPG",
                    "helios-mono-00005.JPG",
                    "helios-mono-00006.JPG",
                    "helios-mono-00007.JPG",
                    "helios-mono-00008.JPG",
                    "helios-mono-00009.JPG",
                    "helios-mono-00010.JPG",
                    "helios-mono-00011.JPG",
                    "helios-mono-00012.JPG",
                    "helios-mono-00013.JPG",
                    "helios-mono-00014.JPG",
                    "helios-mono-00015.JPG"
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