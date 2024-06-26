<!DOCTYPE html>
<html lang="en" data-theme="valentine">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        /* Estilo adicional para la animación */
        .animated {
            animation-duration: 0.5s;
        }
    </style>
</head>

<body>
    <div class="h-screen grid place-content-center">
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure class="px-10 pt-10 max-h-80 rounded-xl">
                <img src="./images/pop.jpg" alt="Pop" class="rounded-xl max-h-64" id="imagen" />
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title" id="titulo">Hola mi Amor :3</h2>
                <p id="descripcion">Espero que te guste mucho tu regalo que hice con mucho amor y también espero que no lo hayas sospechado jajaja</p>
                <div class="card-actions">
                    <button class="btn btn-primary" id="siguiente">Siguiente</button>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="./js/main.js"></script>
</body>

</html>