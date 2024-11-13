<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema</title>
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
                <a href="<?= BASE_URL ?>App?v=categories" class="menu-item">gestion de categories</a>
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
                <h2>Gestion de categorias</h2>
                <p>gestion y aministracion de categorias </p>
            </div>
            <section class="content-body">
                <div class="form-container">
                    <form id="formSend">
                        <div class="form-group">
                            <label for="txtnombre">nombre</label>
                            <input type="text" name="txtnombre" id="txtnombre" placeholder="ingrese el nombre de la categoria" required>
                        </div>
                        <div class="form-group">
                            <label for="txtdescripcion"> descripcion</label>
                            <textarea name="txtdescripcion" id="txtdescripcion"></textarea>
                        </div>
                        <div class="form-actions">
                            <button type="reset" class="btn btn-secondary">limpiar</button>
                            <button type="submit" class="btn btn-primary">registrar</button>
                        </div>

                    </form>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>nombre</th>
                                <th>descripcion</th>
                                <th>acciones</th>
                            </tr>
                        </thead>

                        <tbody id="table-body">
                           
                        </tbody>
                    </table>

                </div>
            </section>
        </div>
    </div>
    <script>
        let base_url = "<?= BASE_URL ?>";
    </script>
    <script src="<?= BASE_URL ?>App/assets/js/categories/functions_categories.js"></script>

</body>

</html>