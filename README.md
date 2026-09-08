# Prospects API

API REST desarrollada con Laravel para el registro de prospectos.

## Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/rocouv/prospects_api.git
cd prospects_api
```

### 2. Cambiar a la rama correspondiente
```bash
git checkout -b fix/validacion-prospectos
```

### 2. Instalar las dependencias

```bash
composer install
```

### 3. Configurar las variables de entorno

Crear el archivo `.env` a partir de `.env.example`.

```bash
cp .env.example .env
```

Verificar que la configuración de la base de datos utilice SQLite:

```env
DB_CONNECTION=sqlite
```

### 4. Generar la clave de Laravel

```bash
php artisan key:generate
```

### 5. Crear la base de datos

Crear el archivo:
```bash
touch database/database.sqlite
```

### 6. Ejecutar las migraciones

```bash
php artisan migrate
```

### 7. Iniciar el servidor

```bash
php artisan serve
```

La API estará disponible en:

```text
http://localhost:8000
```