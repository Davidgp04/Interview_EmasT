
## Requisitos previos

- **XAMPP**: Versión 8.1 o superior (https://www.apachefriends.org/es/download.html)
- **Composer**: Última versión estable (https://getcomposer.org/)
- **Git**

---

## Configuración inicial

1. **Clonar el repositorio**:
   ```bash
   git clone https://github.com/Davidgp04/Interview_EmasT.git
   cd Interview_EmasT
   ```

2. **Instalar dependencias**:
   ```bash
   composer install
   ```

3. **Configurar entorno**:
   ```bash
   copy .env.example .env
   ```

4. **Configurar base de datos**:
   - Iniciar XAMPP y activar Apache y MySQL
   - Crear la base de datos `library` en phpMyAdmin

---

## Configuración del archivo .env

Editar el archivo `.env` con estos valores esenciales:

```env
APP_NAME=ScaledHangar
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library
DB_USERNAME=root
DB_PASSWORD=
```

## Comandos de instalación

Ejecutar en orden:

```bash
php artisan key:generate
php artisan storage:link 
php artisan migrate
```

---


## Acceso al sistema

```bash
php artisan serve
```

- **URL local**: http://127.0.0.1:8000
- **Credenciales iniciales** (si se usa la base de datos que está en el proyecto y la importa mediante phpMyAdmin):
  - Admin: admin@mail.com / admin123
---



   ![image](https://github.com/user-attachments/assets/f66386e5-3064-460a-80c2-f51921647383)

