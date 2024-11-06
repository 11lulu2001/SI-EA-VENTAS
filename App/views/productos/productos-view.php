<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Productos</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>App/assets/css/style.css">
</head>

<body>
    <div class="dashboard-container">
        <!-- Barra lateral de menú -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Sistema</h2>
            </div>
            <nav class="menu">
                <a href="#" class="menu-item">Inicio</a>
                <a href="<?= BASE_URL ?>App?v=categories" class="menu-item">Gestión de Categorías</a>
                <a href="<?= BASE_URL ?>App?v=products" class="menu-item">Gestión de Productos</a>
                <a href="#" class="menu-item">Reportes</a>
                <a href="#" class="menu-item">Configuración</a>
            </nav>
        </aside>

        <!-- Contenido principal -->
        <div class="main-content">
            <!-- Barra de navegación superior -->
            <header class="topbar">
                <h1 class="system-name">Nombre del Sistema</h1>
                <button class="logout-button" onclick="logout()">Cerrar Sesión</button>
            </header>

            <!-- Vista principal del sistema -->
            <div class="content-view">
                <h2>Gestión de Productos</h2>
                <p>Gestión y administración de productos</p>
            </div>

            <!-- Formulario y tabla de productos -->
            <section class="content-body">
                <!-- Formulario de productos -->
                <div class="form-container">
                    <form action="">
                        <div class="form-group">
                            <label for="txtnombre">Nombre del Producto</label>
                            <input type="text" name="txtnombre" id="txtnombre" placeholder="Ingrese el nombre del producto" required>
                        </div>
                        <div class="form-group">
                            <label for="txtdescripcion">Descripción</label>
                            <textarea name="txtdescripcion" id="txtdescripcion" placeholder="Descripción del producto"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="idcategoria">Categoría</label>
                            <select name="idcategoria" id="idcategoria">
                                <option value="">Seleccione una categoría</option>
                                <!-- Opciones dinámicas de categorías -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="costoprecio">Costo Precio</label>
                            <input type="number" name="costoprecio" id="costoprecio" placeholder="Ingrese el costo" required>
                        </div>
                        <div class="form-group">
                            <label for="precioventa">Precio de Venta</label>
                            <input type="number" name="precioventa" id="precioventa" placeholder="Ingrese el precio de venta" required>
                        </div>
                        <div class="form-group">
                            <label for="descuento">Descuento (%)</label>
                            <input type="number" name="descuento" id="descuento" placeholder="Ingrese el porcentaje de descuento">
                        </div>
                        <div class="form-actions">
                            <button type="reset" class="btn btn-secondary">Limpiar</button>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>

                <!-- Tabla de productos -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Categoría</th>
                                <th>Costo Precio</th>
                                <th>Precio de Venta</th>
                                <th>Descuento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Datos de productos dinámicos -->
                            <tr>
                                <td>01</td>
                                <td>Producto A</td>
                                <td>Descripción del producto A</td>
                                <td>Categoría A</td>
                                <td>$100.00</td>
                                <td>$150.00</td>
                                <td>10%</td>
                                <td>
                                    <button class="btn-action edit">Editar</button>
                                    <button class="btn-action delete">Eliminar</button>
                                </td>
                            </tr>
                            <!-- Más productos -->
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <script>
        let base_url = "<?= BASE_URL ?>";
    </script>
    <script src="<?= BASE_URL ?>App/assets/js/js main.js"></script>

</body>

</html>
