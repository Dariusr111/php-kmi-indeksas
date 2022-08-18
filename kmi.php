<!--Pasiekiame pasileidus Apache, per http://localhost/php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kūno masės indekso skaičiuoklė (KMI)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <a href="/pask-1/kmi.php">Atgal</a>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">Kūno masės indekso skaičiuoklė (KMI)</div>
                    <div class="card-body">
                        <form action="kmi-out.php" method="post">
                            <div class="mb-3">
                                <label for="" class="form-label">Centimetrai:</label>
                                <input type="text" name="cm" value="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kilogramai:</label>
                                <input type="text" name="kg" value="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Skaičiuoti</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>