<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Удалён <title> -->
    <@ stylesheets @>
    <style>
        /* Стили для центрирования содержимого */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        main {
            width: 100%;
            max-width: 800px; /* Ограничиваем ширину */
        }
    </style>
</head>
<body>
    <main>
        <!-- Основной контент страницы, центрированный по вертикали и горизонтали -->
        @{ +main }
    </main>
    <@ scripts @>
</body>
</html>
