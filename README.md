# 🏥 La Nueva EPS - Backend API

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Docker-20.10+-2496ED?style=for-the-badge&logo=docker&logoColor=white" alt="Docker">
  <img src="https://img.shields.io/badge/PostgreSQL-14+-4169E1?style=for-the-badge&logo=postgresql&logoColor=white" alt="PostgreSQL">
</p>

## 📋 Descripción

Backend RESTful API construido con Laravel para el sistema de gestión de citas médicas de La Nueva EPS. Proporciona endpoints para la administración de usuarios, afiliados, médicos, tipos de citas y agendamiento de consultas médicas.

## 🚀 Características

- ✅ **Autenticación JWT** - Sistema seguro de autenticación con tokens
- ✅ **CRUD Completo** - Gestión de usuarios, afiliados, citas y tipos de citas
- ✅ **API RESTful** - Endpoints bien estructurados siguiendo estándares REST
- ✅ **Dockerizado** - Configuración completa con Docker y Docker Compose
- ✅ **Base de datos PostgreSQL** - Sistema de base de datos relacional robusto
- ✅ **Migraciones y Seeders** - Datos de prueba pre-configurados
- ✅ **CORS habilitado** - Configurado para trabajar con frontend

## 🛠️ Tecnologías

| Tecnología | Versión | Descripción |
|------------|---------|-------------|
| Laravel | 11.x | Framework PHP para backend |
| PHP | 8.2+ | Lenguaje de programación |
| PostgreSQL | 14+ | Base de datos |
| Docker | 20.10+ | Contenedorización |
| Composer | 2.x | Gestor de dependencias PHP |
| JWT Auth | 2.x | Autenticación con tokens |

## 📦 Requisitos Previos

Antes de comenzar, asegúrate de tener instalado:

- [Docker](https://www.docker.com/get-started) (v20.10 o superior)
- [Docker Compose](https://docs.docker.com/compose/install/) (v2.0 o superior)
- Git

## 🔧 Instalación y Configuración

### 1. Clonar el repositorio

```bash
git clone https://github.com/tu-usuario/la-nueva-eps-backend.git
cd la-nueva-eps-backend
```

### 2. Configurar variables de entorno

Copia el archivo de ejemplo y configura tus variables:

```bash
cp .env.example .env
```

Edita el archivo `.env` con tu configuración:

```env
APP_NAME="La Nueva EPS"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=mi_api_db
DB_USERNAME=postgres
DB_PASSWORD=secret

JWT_SECRET=
```

### 3. Construir y levantar los contenedores

```bash
# Construir las imágenes de Docker
docker-compose build

# Levantar los contenedores en segundo plano
docker-compose up -d
```

### 4. Instalar dependencias de Composer

```bash
docker-compose exec app composer install
```

### 5. Generar claves de la aplicación

```bash
# Generar APP_KEY
docker-compose exec app php artisan key:generate

# Generar JWT_SECRET
docker-compose exec app php artisan jwt:secret
```

### 6. Ejecutar migraciones y seeders

```bash
# Ejecutar migraciones
docker-compose exec app php artisan migrate

# Ejecutar seeders (datos de prueba)
docker-compose exec app php artisan db:seed
```

### 7. Verificar que todo funciona

Visita: [http://localhost:8000/api/users](http://localhost:8000/api/users)

Si ves la lista de usuarios, ¡todo está funcionando correctamente! 🎉

## 🐳 Comandos Docker Útiles

```bash
# Levantar contenedores
docker-compose up -d

# Detener contenedores
docker-compose down

# Ver logs
docker-compose logs -f

# Acceder al contenedor de la aplicación
docker-compose exec app bash

# Acceder a PostgreSQL
docker-compose exec postgres psql -U postgres -d mi_api_db

# Ejecutar comandos de Artisan
docker-compose exec app php artisan [comando]

# Ejecutar Composer
docker-compose exec app composer [comando]

# Reiniciar contenedores
docker-compose restart

# Ver estado de los contenedores
docker-compose ps
```

### 🗄️ Comandos PostgreSQL Útiles

```bash
# Conectar a la base de datos
docker-compose exec postgres psql -U postgres -d mi_api_db

# Listar tablas
\dt

# Describir estructura de una tabla
\d nombre_tabla

# Ver datos de una tabla
SELECT * FROM users;

# Salir de psql
\q

# Hacer backup de la base de datos
docker-compose exec postgres pg_dump -U postgres mi_api_db > backup.sql

# Restaurar backup
docker-compose exec -T postgres psql -U postgres mi_api_db < backup.sql
```

## 📡 Endpoints de la API

### Autenticación

| Método | Endpoint | Descripción |
|--------|----------|-------------|
| POST | `/api/login` | Iniciar sesión |
| POST | `/api/register` | Registrar nuevo usuario |
| POST | `/api/logout` | Cerrar sesión |

### Usuarios

| Método | Endpoint | Descripción |
|--------|----------|-------------|
| GET | `/api/users` | Listar todos los usuarios |
| GET | `/api/users/{id}` | Obtener un usuario específico |
| POST | `/api/users` | Crear nuevo usuario |
| PUT | `/api/users/{id}` | Actualizar usuario |
| DELETE | `/api/users/{id}` | Eliminar usuario |

### Afiliados

| Método | Endpoint | Descripción |
|--------|----------|-------------|
| GET | `/api/affiliates` | Listar todos los afiliados |
| GET | `/api/affiliates/{id}` | Obtener un afiliado específico |
| POST | `/api/affiliates` | Crear nuevo afiliado |
| PUT | `/api/affiliates/{id}` | Actualizar afiliado |
| DELETE | `/api/affiliates/{id}` | Eliminar afiliado |

### Citas

| Método | Endpoint | Descripción |
|--------|----------|-------------|
| GET | `/api/quotas` | Listar todas las citas |
| GET | `/api/quotas/{id}` | Obtener una cita específica |
| POST | `/api/quotas` | Crear nueva cita |
| PUT | `/api/quotas/{id}` | Actualizar cita |
| DELETE | `/api/quotas/{id}` | Eliminar cita |

### Tipos de Citas

| Método | Endpoint | Descripción |
|--------|----------|-------------|
| GET | `/api/appointments` | Listar tipos de citas |
| GET | `/api/appointments/{id}` | Obtener un tipo de cita |
| POST | `/api/appointments` | Crear tipo de cita |
| PUT | `/api/appointments/{id}` | Actualizar tipo de cita |
| DELETE | `/api/appointments/{id}` | Eliminar tipo de cita |

## 🗄️ Estructura de la Base de Datos

### Tablas Principales

- **users** - Usuarios del sistema (admin, médicos, secretarios)
- **roles** - Roles de usuario
- **affiliates** - Afiliados/Pacientes
- **citas** - Citas médicas agendadas
- **types_appointments** - Tipos de citas disponibles

### Relaciones

```
users (1) ─── (N) citas [como médico]
users (1) ─── (N) citas [como creador]
affiliates (1) ─── (N) citas [como paciente]
types_appointments (1) ─── (N) citas
roles (1) ─── (N) users
```

## 👥 Usuarios de Prueba (Seeders)

Después de ejecutar los seeders, tendrás estos usuarios disponibles:

| Email | Password | Rol | Descripción |
|-------|----------|-----|-------------|
| admin@example.com | password | Admin | Administrador del sistema |
| medico@example.com | password | Médico | Médico de prueba |
| secretario@example.com | password | Secretario | Secretario de prueba |

## 🔐 Autenticación

La API usa JWT (JSON Web Tokens) para autenticación:

```bash
# 1. Login para obtener token
POST /api/login
{
  "email": "admin@example.com",
  "password": "password"
}

# Respuesta:
{
  "token": "eyJ0eXAiOiJKV1QiLCJhbGc...",
  "user": { ... }
}

# 2. Usar el token en las peticiones
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGc...
```

## 🧪 Testing

```bash
# Ejecutar tests
docker-compose exec app php artisan test

# Ejecutar tests con coverage
docker-compose exec app php artisan test --coverage
```

## 📝 Comandos Artisan Útiles

```bash
# Limpiar caché
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan route:clear

# Refrescar base de datos
docker-compose exec app php artisan migrate:fresh --seed

# Crear nueva migración
docker-compose exec app php artisan make:migration create_tabla_name

# Crear nuevo controlador
docker-compose exec app php artisan make:controller NombreController

# Crear nuevo modelo
docker-compose exec app php artisan make:model NombreModelo
```

## 🐛 Troubleshooting

### Problema: Error de permisos en storage/logs

```bash
docker-compose exec app chmod -R 777 storage bootstrap/cache
```

### Problema: No se puede conectar a la base de datos

1. Verifica que el contenedor PostgreSQL esté corriendo:
```bash
docker-compose ps
```

2. Verifica las credenciales en `.env`:
```env
DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=mi_api_db
DB_USERNAME=postgres
DB_PASSWORD=secret
```

3. Reinicia los contenedores:
```bash
docker-compose down
docker-compose up -d
```

### Problema: Tabla no existe

Ejecuta las migraciones nuevamente:
```bash
docker-compose exec app php artisan migrate:fresh --seed
```

## 📚 Documentación Adicional

- [Laravel Documentation](https://laravel.com/docs)
- [Docker Documentation](https://docs.docker.com)
- [JWT Auth Documentation](https://jwt-auth.readthedocs.io)

---

⭐️ Si este proyecto te fue útil, considera darle una estrella en GitHub!
