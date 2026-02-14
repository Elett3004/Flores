<div align="center">

# 🌸 Proyecto Flores 🌸
### Sistema de Gestión de Pedidos con Laravel

<img src="https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12">
<img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2+">
<img src="https://img.shields.io/badge/PostgreSQL-13+-4169E1?style=for-the-badge&logo=postgresql&logoColor=white" alt="PostgreSQL">
<img src="https://img.shields.io/badge/TailwindCSS-3-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="Tailwind CSS">

[![GitHub](https://img.shields.io/badge/GitHub-Elett3004/Flores-FF69B4?style=for-the-badge&logo=github)](https://github.com/Elett3004/Flores.git)

---

</div>

## 📖 Descripción del Proyecto

Este proyecto es una **aplicación web elegante** desarrollada con **Laravel 12** para la gestión de pedidos florales. Cuenta con un sistema CRUD completo, diseño responsivo con gradientes rosados, y una interfaz moderna utilizando **TailwindCSS** y **Vite**. 

### ✨ Características Principales

- 🌹 **CRUD Completo** de productos/pedidos
- 🎨 **Diseño Moderno** con gradientes rosados y morados
- 📱 **Responsive Design** para todos los dispositivos
- 🔍 **Filtros** de productos activos
- 📊 **Paginación** integrada
- ⚡ **Vite** para compilación rápida de assets
- 🗄️ **PostgreSQL** como base de datos

---

## 💻 Requisitos del Sistema

Asegúrate de tener instaladas las siguientes herramientas:

| Herramienta | Versión Requerida | Comando de Verificación |
|-------------|-------------------|-------------------------|
| 🐘 **PHP** | >= 8.2 | `php -v` |
| 📦 **Composer** | >= 2.0 | `composer -V` |
| 🟢 **Node.js** | >= 22 | `node -v` |
| 📦 **NPM** | >= 10 | `npm -v` |
| 🐘 **PostgreSQL** | >= 13 | `psql --version` |

---

## 🚀 Instalación Paso a Paso

### 1️⃣ Clonar o Descomprimir el Proyecto

```bash
# Si es un archivo ZIP
unzip Flores.zip
cd Flores

# O si clonas desde GitHub
git clone https://github.com/Elett3004/Flores.git
cd Flores
```

### 2️⃣ Instalar Dependencias de PHP

```bash
composer install
```

### 3️⃣ Configurar Variables de Entorno

```bash
# Copiar el archivo de ejemplo
cp .env.example .env

# Generar la clave de la aplicación
php artisan key:generate
```

### 4️⃣ Configurar PostgreSQL

Edita el archivo `.env` con tus credenciales de PostgreSQL:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=flores
DB_USERNAME=postgres
DB_PASSWORD=tu_password    # Normalmente es 12345678
```

> **⚠️ Importante:** Debes crear la base de datos `flores` antes de ejecutar las migraciones.

### 5️⃣ Crear la Base de Datos

Abre la consola de PostgreSQL y ejecuta:

```bash
# Conectarse a PostgreSQL
psql -U postgres

# Dentro de la consola PostgreSQL
CREATE DATABASE flores;
\q
```

### 6️⃣ Ejecutar Migraciones

Este comando creará todas las tablas necesarias:

```bash
php artisan migrate
```

Si deseas poblar la base de datos con datos de prueba:

```bash
php artisan migrate --seed
```

### 7️⃣ Instalar Dependencias Frontend

```bash
npm install
```

### 8️⃣ Compilar Assets (CSS y JS)

**Modo desarrollo** (recomendado para trabajar):
```bash
npm run dev
```

**Modo producción** (para desplegar):
```bash
npm run build
```

---

## 🎯 Ejecutar el Proyecto

### Opción 1: Ejecución Simple

```bash
php artisan serve
```

Luego abre en tu navegador: **http://127.0.0.1:8000**

### Opción 2: Ejecución Recomendada (2 Terminales)

Para desarrollo activo, usa **dos terminales simultáneamente**:

**Terminal 1** - Servidor Laravel:
```bash
php artisan serve
```

**Terminal 2** - Compilador Vite (Hot Reload):
```bash
npm run dev
```

> 💡 **Tip:** Con esta configuración, los cambios en CSS/JS se reflejarán automáticamente sin recargar.

---

## 📂 Estructura del Proyecto

```
Flores/
├── 🌹 app/
│   ├── Http/Controllers/     # Controladores (ProductoController)
│   └── Models/               # Modelos (Producto, User)
├── 🗄️ database/
│   ├── migrations/           # Migraciones de base de datos
│   ├── factories/            # Factories para testing
│   └── seeders/              # Seeders de datos
├── 🎨 resources/
│   ├── css/                  # Estilos TailwindCSS
│   ├── js/                   # JavaScript
│   └── views/                # Vistas Blade
│       └── productos/        # CRUD de productos
├── 🛣️ routes/
│   └── web.php              # Rutas web
└── ⚙️ config/               # Archivos de configuración
```

---

## 🌐 Rutas Disponibles

| Método | Ruta | Acción | Descripción |
|--------|------|--------|-------------|
| GET | `/` | index | Página principal (lista de productos) |
| GET | `/productos` | index | Lista de productos activos |
| GET | `/productos/create` | create | Formulario de creación |
| POST | `/productos` | store | Guardar nuevo producto |
| GET | `/productos/{id}/edit` | edit | Formulario de edición |
| PUT | `/productos/{id}` | update | Actualizar producto |
| DELETE | `/productos/{id}` | destroy | Eliminar producto (soft delete) |

---

## 🎨 Tecnologías Utilizadas

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)

</div>

---

## 🐛 Solución de Problemas

### Error: "Base de datos no encontrada"
```bash
# Verifica que la base de datos esté creada
psql -U postgres -c "\l" | grep flores
```

### Error: "npm run dev no funciona"
```bash
# Reinstala las dependencias
rm -rf node_modules package-lock.json
npm install
npm run dev
```

### Error: Permisos en storage/bootstrap
```bash
# En Linux/Mac
chmod -R 775 storage bootstrap/cache

# En Windows (como administrador)
icacls storage /grant Everyone:(OI)(CI)F /T
icacls bootstrap/cache /grant Everyone:(OI)(CI)F /T
```

### Error: Extensión PDO PostgreSQL no habilitada
```bash
# Error común: "could not find driver" o "PDO_PGSQL extension not enabled"

# Solución en Windows:
# 1. Abre el archivo php.ini (busca la ubicación con: php --ini)
# 2. Busca las siguientes líneas y descoméntalas (quita el ;):
;extension=pdo_pgsql
;extension=pgsql

# Deben quedar así:
extension=pdo_pgsql
extension=pgsql

# 3. Guarda el archivo y reinicia el servidor
# 4. Verifica que esté habilitado:
php -m | grep pgsql

# Solución en Linux/Mac:
sudo apt-get install php-pgsql  # Ubuntu/Debian
brew install php@8.2-pgsql      # Mac con Homebrew

# Verifica la instalación:
php -m | grep pdo_pgsql
```

---

## 📝 Comandos Útiles

```bash
# Limpiar caché de Laravel
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Resetear base de datos
php artisan migrate:fresh --seed

# Ver rutas disponibles
php artisan route:list

# Modo mantenimiento
php artisan down
php artisan up
```

<div align="center">

## 💖 Hecho con amor y flores 💖

### 🌸 Proyecto Flores - 2026 🌸

*Si te gusta este proyecto, no olvides darle una ⭐ en GitHub*

[![GitHub](https://img.shields.io/badge/Elett3004-FF69B4?style=for-the-badge&logo=github)](https://github.com/Elett3004)

</div>