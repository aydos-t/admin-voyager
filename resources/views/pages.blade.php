<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pages</title>
</head>
<body>
    <?php
        $page = TCG\Voyager\Models\Page::first();
    ?>
    @can('browse', $page)
        <h1>Вы получили доступ к страницу 'Pages'</h1>
    @else
        <h1>У вас нет разрешения на это страницу</h1>
    @endcan
</body>
</html>