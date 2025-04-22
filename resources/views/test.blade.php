<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Hola Cynthia!</title>
</head>
<body>
    <h1>🎉 ¡Tu sitio Laravel funciona perfecto! 🎉</h1>
    <p>Ahora sí puedes agregar todo lo que quieras 😄</p>
</body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleBtn = document.getElementById("menu-toggle");
        const menu = document.querySelector(".mobile-menu .smartdev_menu");

        if (toggleBtn) {
            toggleBtn.addEventListener("click", function () {
                menu.classList.toggle("active");
            });
        }

        // Activar scrollToFixed solo si está disponible
        if (typeof $.fn.scrollToFixed === 'function') {
            $('.scroll_fixed').scrollToFixed({
                preFixed: function () {
                    $(this).addClass('prefix');
                },
                postFixed: function () {
                    $(this).addClass('postfix').removeClass('prefix');
                }
            });
        } else {
            console.warn('scrollToFixed no está cargado correctamente');
        }
    });
</script>

