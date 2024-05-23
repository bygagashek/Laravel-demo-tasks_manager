<!DOCTYPE html>
<html>
<head>
    <title>Task Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            padding: 20px;
            color: #fff;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        footer {
            background-color: #333;
            padding: 20px;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <!-- Вставьте здесь код для шапки страницы (навигационное меню и т.д.) -->
    </header>

    <main>
        <div class="container">
            @yield('content') <!-- Эта директива включит содержимое других представлений -->
        </div>
    </main>

    <footer>
        <!-- Вставьте здесь код для подвала страницы -->
    </footer>
</body>
</html>