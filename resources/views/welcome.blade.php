<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Welcome to Fashol Task</title>
 <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}" />
</head>

<body>
 <div id="app"></div>
 <!-- BEGIN: JS Assets-->
 <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
 </script>
 <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
 <script src="{{ mix('dist/js/app.js') }}"></script>
 <script src="{{ mix('vue-app.js') }}"></script>
 <!-- END: JS Assets-->
</body>

</html>