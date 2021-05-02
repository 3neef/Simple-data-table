<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

   <script>
     if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
         document.querySelector('html').classList.add('dark')
     } else if (localStorage.theme === 'dark') {
         document.querySelector('html').classList.add('dark')
     }
 </script>

    <title>Mazin</title>
</head>
<body class="bg-gray-50 dark:bg-green-700">
@include('partial.nav')
	




@include('partial.side')
<script>
  document.getElementById('switch').addEventListener('click', function() {
      let htmlClasses = document.querySelector('html').classList;
      if(localStorage.theme == 'dark') {
          htmlClasses.remove('dark');
          localStorage.removeItem('theme')
      } else {
          htmlClasses.add('dark');
          localStorage.theme = 'dark';
      }
  });
</script>
</body>
</html>