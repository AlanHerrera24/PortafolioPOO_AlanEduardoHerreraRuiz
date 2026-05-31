<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Inventario - Captura</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 20px;
            color: #d6d9e6;

            background-image:
                linear-gradient(rgba(10,10,15,0), rgba(10,10,15,0.85)),
                url(gmk2.png);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            background-attachment: fixed;

            background-color: #13140D;
        }

        .producto {
            margin-bottom: 15px;
            padding: 15px;
            border: 1px solid #4b5675;
            background: linear-gradient(to right, #252b3b, #31384d);
            border-left: 6px solid #f5c542; /* amarillo Titans */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            transition: 0.3s;
        }

        button {
            padding: 10px 15px;
            background: linear-gradient(to right, #f5c542, #d9a400);
            color: #1b1f2b;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 3px 8px rgba(245, 197, 66, 0.3);
        }
    </style>
</head>
<body>
    <h2>Registro de Inventario</h2>
    <form action="procesar.php" method="POST">
        
        <div class="producto">
            <label>Producto 1:</label>
            <input type="text" name="productos[]" required>
            <label>Precio ($):</label>
            <input type="number" name="precios[]" step="0.01" min="0" required>
        </div>

        <div class="producto">
            <label>Producto 2:</label>
            <input type="text" name="productos[]" required>
            <label>Precio ($):</label>
            <input type="number" name="precios[]" step="0.01" min="0" required>
        </div>

        <div class="producto">
            <label>Producto 3:</label>
            <input type="text" name="productos[]" required>
            <label>Precio ($):</label>
            <input type="number" name="precios[]" step="0.01" min="0" required>
        </div>

        <div class="producto">
            <label>Producto 4:</label>
            <input type="text" name="productos[]" required>
            <label>Precio ($):</label>
            <input type="number" name="precios[]" step="0.01" min="0" required>
        </div>

        <div class="producto">
            <label>Producto 5:</label>
            <input type="text" name="productos[]" required>
            <label>Precio ($):</label>
            <input type="number" name="precios[]" step="0.01" min="0" required>
        </div>

        <button type="submit">Procesar Inventario</button>
    </form>
</body>
</html>