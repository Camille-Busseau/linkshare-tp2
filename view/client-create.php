<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau.elle utilisateur.trice</title>
    <style>
        input{
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <main>

        <h1>Nouveau.elle utilisateur.trice</h1>
        <form action="../client/store" method="post">
            <label> Username
            <input type="text" name="nom">
            </label>

            <label> Liens
            <select name="ville_id">
            {% for link in links %}
            <option value="{{ link.linkId }}">{{ link.link }}</option>
            {% endfor %}
            </select>
            </label>
            <input type="submit">
        </form>
    </main>
</body>
</html>