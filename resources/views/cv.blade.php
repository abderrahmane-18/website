<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/lottie-web@5.7.14/build/player/lottie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"></script>
</head>
<body>
  <div x-data="{ lottie: null }" x-init="lottie = lottie.loadAnimation({
    container: $el, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'D:\web\laravel\public\Animation.json' // the path to the animation json
  })">
  </div>
</body>
</html>