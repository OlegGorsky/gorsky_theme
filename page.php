<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@{ title | def('Default Title') }</title>
    <@ stylesheets @>
</head>
<body>
    <main>
        <h1>@{ title }</h1>
        <!-- Основной контент страницы -->
        @{ +main }
    </main>
    <@ scripts @>
</body>
</html>
