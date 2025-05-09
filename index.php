
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="vh-100 vw-100 d-flex justify-content-center align-items-center">
    <div class="container h-50 w-50 overflow-auto">
    <h1 class="text-center">Table OF PEOPLE</h1>
    <table class="table table-bordered table-striped table-hover">
        <thead class="bg-dark text-white">
            <tr class="">
                <th>ID</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Job</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once 'people.php'; 
            foreach ($people as $person) {
                echo "<tr>";
                echo "<td>{$person['id']}</td>";
                echo "<td>{$person['name']}</td>";
                echo "<td>{$person['sex']}</td>";
                echo "<td>{$person['job']}</td>";
                echo "<td><img src='{$person['photo']}' alt='{$person['name']}' width='50'></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>