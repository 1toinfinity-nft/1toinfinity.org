<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/build/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    @vite('resources/css/app.css')
    @inertiaHead
</head>

<body>

    @inertia
    @routes
    @vite('resources/js/app.js')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1WX7JE72FN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-1WX7JE72FN');
    </script>
</body>

</html>