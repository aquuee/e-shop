<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create product</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Интернет-магазин</h1>
    </header>
    <main>
        <div class="container mx-auto">
            <form action="">
                <input type="text" name="title" id="title" placeholder="Название продукта" required>
                <input type="number" name="price" id="price" placeholder="Цена продукта" required>
                <textarea name="description" id="description" placeholder="Описание продукта" required></textarea>
                <input type="submit" value="Создать";>
            </form>
        </div>
    </main>
</body>
</html>