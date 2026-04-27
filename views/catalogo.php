<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mini E-commerce</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background-color: #f8f9fa;
}

.card {
    border-radius: 10px;
}

.card:hover {
    transform: scale(1.03);
    transition: 0.3s;
}

.card img {
    height: 200px;
    object-fit: contain;
}
</style>

</head>

<body>

<!-- HEADER -->
<header class="bg-white text-black py-3 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        
        <!-- Logo izquierdo -->
        <div style="width:120px; height:65px; display:flex; align-items:center; justify-content:center;">
            <img src="/ECOMMERCE/img/logotecnm.png" alt="Logo TecNM" style="max-width:100%; max-height:100%;">
        </div>

        <!-- Título -->
        <h5 class="text-center m-0">
            <b>Tecnológico Nacional de México - Campus Pachuca</b>
        </h5>

        <!-- Logo derecho -->
        <div style="width:120px; height:65px; display:flex; align-items:center; justify-content:center;">
            <img src="/ECOMMERCE/img/logoitp.png" alt="Logo ITP" style="max-width:100%; max-height:100%;">
        </div>

    </div>
</header>

<!-- CONTENIDO -->
<div class="container my-5">

    <h1 class="text-center mb-5">Mini E-commerce</h1>

    <div class="row g-4">

        <?php foreach ($productos as $producto): ?>

        <div class="col-md-4">
            <div class="card shadow-sm h-100 text-center">

                <!-- Imagen del producto -->
                <img src="/ECOMMERCE/<?php echo $producto['imagen']; ?>" 
                     class="card-img-top p-3" 
                     alt="producto">

                <!-- Contenido -->
                <div class="card-body">

                    <h5 class="card-title">
                        <?php echo $producto['nombre']; ?>
                    </h5>

                    <p class="text-muted small">
                        <?php echo $producto['descripcion']; ?>
                    </p>

                    <h5 class="fw-bold">
                        $<?php echo number_format($producto['precio'], 2); ?>
                    </h5>

                </div>

            </div>
        </div>

        <?php endforeach; ?>

    </div>

</div>

<!-- FOOTER -->
<footer class="bg-light text-center py-3 mt-5">
    <small>
        Copyright 2026 - TECNM Pachuca - Negocios Electrónicos 2 - Vargas Meneses Derek Alejandro
    </small>
</footer>

</body>
</html>