# Simple App

## What inside?

- Login
- Signup
- Register user

User level

- user
- admin

## Setup

### 1. Installation

### Download Repo

Clone or download this reposity.

```bash
git clone https://github.com/
```

### Initial setup

Install dependencies. Go to `public` folder then install.

```bash
cd public
npm install
```

Run command `npx tailwindcss -i ./style/input.css -o ./dist/output.css --watch` to generate css file.

### 2. Database

Create a new MySQL database using Laragon or XAMPP named simple_app.

Create a copy of `env` file and name it to `.env`

Uncomment & change the value. Follow code bellow:

```env
#--------------------------------------------------------------------
# ENVIRONMENT
#--------------------------------------------------------------------

CI_ENVIRONMENT = development

#--------------------------------------------------------------------
# APP
#--------------------------------------------------------------------

app.baseURL = 'http://simple-app.com/'
# If you have trouble with `.`, you could also use `_`.
# app_baseURL = ''
# app.forceGlobalSecureRequests = false
# app.CSPEnabled = false

#--------------------------------------------------------------------
# DATABASE
#--------------------------------------------------------------------

database.default.hostname = localhost
database.default.database = simple_app
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306

```

```php
php spark migrate --all
```
