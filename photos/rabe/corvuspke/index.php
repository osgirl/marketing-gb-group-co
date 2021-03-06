<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Corvus PKE Photos - GB Group Marketing Tools &amp; Brand Assets - Grégoire Besson, Rabe, Agriway</title>
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
                <h1>Corvus PKE</h1>
                <br>
                <div class="row">
                    <?php
                    $arr = array(
                    "corvus-pke-00001.jpg",
                    "corvus-pke-00002.jpg",
                    "corvus-pke-00003.jpg",
                    "corvus-pke-00004.jpg",
                    "corvus-pke-00005.jpg",
                    "corvus-pke-00006.jpg",
                    "corvus-pke-00007.jpg",
                    "corvus-pke-00008.jpg",
                    "corvus-pke-00009.jpg",
                    "corvus-pke-00010.jpg",
                    "corvus-pke-00011.jpg",
                    "corvus-pke-00012.jpg",
                    "corvus-pke-00013.jpg",
                    "corvus-pke-00014.jpg",
                    "corvus-pke-00015.jpg",
                    "corvus-pke-00016.jpg",
                    "corvus-pke-00017.jpg",
                    "corvus-pke-00018.jpg",
                    "corvus-pke-00019.jpg",
                    "corvus-pke-00020.jpg"
                    );
                    foreach ($arr as $value) {
                        echo "
                        <div class=\"col-3\">\n
                            <div class=\"card\" style=\"margin-bottom: 2rem;\">\n
                                <div class=\"ratio\" style=\"background-image: url(https://marketing.cellar.services.clever-cloud.com/photos/rabe/small/".$value.");\"></div>\n
                                <p class=\"text-center\" style=\"margin: 0; padding: 0.5rem; font-size:0.7rem;\"><small>".$value."</small></p>
                                <a class=\"text-center\" href=\"https://marketing.cellar.services.clever-cloud.com/photos/rabe/original/".$value."\" download target=\"_blank\"><small style=\"font-weight: bold; padding-bottom: 0.5rem; display: block;\">Download &darr;</small></a>\n
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