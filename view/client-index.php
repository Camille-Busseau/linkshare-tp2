<!-- <?php
// require_once "class/Crud.php";

// $Crud = new Crud;

// $client = $Crud->select("client", "username", "DESC");

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des usager.ères</title>
</head>
<body>
    <main>
        <section>
            <h1>Profils Actifs</h1>
            <h2>{{ client_list }}</h2>
            <a href="{{ path }}client/create">Ajouter</a>

            <table>
                <thead>
                    <tr>
                        <th>Nom d'utilisateur.trice</th>
                        <th>Mot de passe</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    {% for client in clients %}
                    <tr>
                        <td>{{ client.username }}</td>
                        <td>{{ client.password }}</td>
                        <td><a href="client/show/{{ client.id}}">Vue</a></td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>