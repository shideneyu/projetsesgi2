<!DOCTYPE html>
<?php
  const APPID = "906203566106850";
  const = "24082c36b988a2465f02fe537021a945";
?>

<html>
  <head>
	<meta charset="UTF-8">
    <title>Titre de ma page</title>
    <meta name="description" content="contenu de ma page">
  <body>
   <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '906203566106850',
          xfbml      : true,
          version    : 'v2.3'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
	HELLO !!
	<div
	  class="fb-like"
	  data-share="true"
	  data-width="450"
	  data-show-faces="true">
	</div>
  </body>
  </head>
</html>
