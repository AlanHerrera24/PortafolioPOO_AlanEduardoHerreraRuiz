<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de Inventario</title>
    <style>
        body {
            font-family: 'Trebuchet MS', sans-serif;
            margin: 20px;
            background: linear-gradient(to bottom, #050507, #1a1d33, #2d2448);
            color: #d8d0ff;
        }

        table {
            border-collapse: collapse;
            width: 55%;
            margin-bottom: 20px;
            background-color: rgba(18, 22, 40, 0.92);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(110, 80, 180, 0.35);
        }

        th, td {
            border: 1px solid #4c4670;
            padding: 12px;
            text-align: left;
        }

        th {
            background: linear-gradient(to right, #2d2f5f, #5d4aa8);
            color: #f6e96b;
            font-size: 16px;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background-color: #242845;
        }

        tr:hover {
            background-color: #3a2f5e;
            transition: 0.3s;
        }

        .resumen {
            background: linear-gradient(to right, #232742, #3c2f63);
            padding: 18px;
            border-radius: 12px;
            width: 55%;
            box-sizing: border-box;
            box-shadow: 0 4px 10px rgba(90, 70, 160, 0.35);
            border-left: 6px solid #f6e96b;
        }

        .btn-volver {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 18px;
            background: linear-gradient(to right, #7b1e2b, #5d4aa8);
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
            box-shadow: 0 3px 8px rgba(123, 30, 43, 0.4);
        }

        .btn-volver:hover {
            background: linear-gradient(to right, #a62d3d, #7a63d1);
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <h2>Reporte Final de Inventario</h2>

    <table>
        <tr>
            <th>Producto</th>
            <th>Precio Unitario</th>
        </tr>
        <?php
        // Iteramos sobre los arreglos para imprimir cada fila de la tabla
        for ($i = 0; $i < $cantidad; $i++) {
            echo "<tr>";
            // htmlspecialchars evita inyecciones de codigo HTML malicioso
            echo "<td>" . htmlspecialchars($productos[$i]) . "</td>"; 
            // number_format da formato de moneda con 2 decimales
            echo "<td>$" . number_format($precios[$i], 2) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <div class="resumen">
        <h3>Métricas de Venta</h3>
        <p><strong>Total del inventario:</strong> $<?php echo number_format($total_venta, 2); ?></p>
        <p><strong>Precio promedio:</strong> $<?php echo number_format($promedio, 2); ?></p>
        <p><strong>Producto más caro:</strong> <?php echo htmlspecialchars($producto_caro); ?> ($<?php echo number_format($precio_maximo, 2); ?>)</p>
        <p><strong>Producto más barato:</strong> <?php echo htmlspecialchars($producto_barato); ?> ($<?php echo number_format($precio_minimo, 2); ?>)</p>
    </div>

    <a href="index.php" class="btn-volver">Volver al Registro</a>

</body>
</html>