<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    
    {{-- Bootstrap core CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">


    <script>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display : none;
      }
    </script>
  </head>
  <body>
    
@include('layouts.header')

<div class="container-fluid">
  <div class="row">
    @include('layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('container')

    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      
      {{-- <script src="/js/script.js"></script> --}}

      <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            console.log(`Code matched = ${decodedText}`, decodedResult);
            // document.getElementById('result').value = decodedText;

            // let id = decodedText;
            window.location.href = "/items/search/" + decodedText
            // html5QrcodeScanner.clear();
            
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            // console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader",
            { fps: 10, qrbox: {width: 250, height: 250} },
            /* verbose= */ false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>

    
  </body>
</html>
