# TÁCTIKA | War Room (Skeleton)

Este repositorio contiene una base mínima para comenzar el desarrollo del sistema indicado en la solicitud. Incluye:

- Estructura de carpetas para módulos.
- Conexión básica a MySQL (ver `config/config.php`).
- Generador y validador de licencias de ejemplo en `license_server/`.
- Pantallas mínimas de login y dashboard usando Tailwind CSS vía CDN.

## Instalación

1. Crear una base de datos MySQL llamada `tactika` y una tabla `licenses`:

```sql
CREATE TABLE licenses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  domain VARCHAR(255) NOT NULL,
  token VARCHAR(64) NOT NULL,
  type VARCHAR(20),
  expires_at DATETIME
);
```

2. Ajustar credenciales en `config/config.php`.
3. Colocar el proyecto en un servidor con PHP 7+
4. Acceder a `license_server/` para generar licencias.

Esta es solo una base de referencia; cada módulo requiere desarrollo adicional según las necesidades reales.
