<!DOCTYPE html>
<html>
<head>
    <title><?= $item['id'] ?></title>
</head>
<body>
<main>
    <h1>Item <?= $item['title'] ?></h1>
    <ul>
        <li>Id : <?= $item['id'] ?></li>
    </ul>
    <a href='/items'>Back to items list</a>
    <br/>
    <a href="/categories">Go to the categories list</a>
</main>
</body>
</html>