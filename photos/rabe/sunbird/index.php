<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sunbird Photos - GB Group Marketing Tools &amp; Brand Assets - Grégoire Besson, Rabe, Agriway</title>
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
                <h1>Sunbird</h1>
                <br>
                <div class="row">
                    <?php
                    $arr = array(
                    "sunbird-00001.jpg",
                    "sunbird-00002.jpg",
                    "sunbird-00003.jpg",
                    "sunbird-00004.jpg",
                    "sunbird-00005.jpg",
                    "sunbird-00006.jpg",
                    "sunbird-00007.jpg",
                    "sunbird-00008.jpg",
                    "sunbird-00009.jpg",
                    "sunbird-00010.jpg",
                    "sunbird-00011.jpg",
                    "sunbird-00012.jpg",
                    "sunbird-00013.jpg",
                    "sunbird-00014.jpg",
                    "sunbird-00015.jpg",
                    "sunbird-00016.jpg",
                    "sunbird-00017.jpg",
                    "sunbird-00018.jpg",
                    "sunbird-00019.jpg",
                    "sunbird-00020.jpg",
                    "sunbird-00021.jpg",
                    "sunbird-00022.jpg",
                    "sunbird-00023.jpg",
                    "sunbird-00024.jpg",
                    "sunbird-00025.jpg",
                    "sunbird-00026.jpg",
                    "sunbird-00027.jpg",
                    "sunbird-00028.jpg",
                    "sunbird-00029.jpg",
                    "sunbird-00030.jpg",
                    "sunbird-00031.jpg"
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