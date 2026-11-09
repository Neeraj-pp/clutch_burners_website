# Clutch Burners Website

A Laravel website for Clutch Burners. The application provides public-facing Home, Gallery, and Contact pages, together with an authenticated admin area for managing website content.

## Features

### Public website
- Home page
- Gallery page
- Contact page
- Contact/query submission endpoint

### Admin area
- Admin login and logout
- Authenticated admin dashboard
- Edit and update home page content
- Manage gallery content and delete gallery images
- Edit and update contact page content

The route definitions and controllers are the source of truth for the available behavior. Email delivery and file-storage integrations should be configured and tested for the target environment.

## Technology

- PHP 8.1+
- Laravel 10
- Laravel Blade
- Laravel Breeze (development dependency)
- Vite
- Tailwind CSS
- Composer
- Node.js and npm

## Getting Started

### Prerequisites

Install PHP 8.1 or later with Laravel's required extensions, Composer, Node.js, npm, and a database supported by the project's Laravel configuration.

### 1. Clone the repository

    git clone https://github.com/Neeraj-pp/clutch_burners_website.git
    cd clutch_burners_website

### 2. Install dependencies

    composer install
    npm install

### 3. Configure environment

Copy .env.example to .env:

    cp .env.example .env

On Windows Command Prompt:

    copy .env.example .env

Generate the application key:

    php artisan key:generate

Configure the database connection and any required mail or storage settings in .env. Do not commit real credentials or private keys.

### 4. Prepare the database

Create the configured database, then run:

    php artisan migrate

### 5. Build frontend assets

For development:

    npm run dev

For a production asset build:

    npm run build

### 6. Start the Laravel server

In a separate terminal:

    php artisan serve

Open the local URL printed by Artisan (typically http://127.0.0.1:8000).

## Routes

The current routes/web.php defines these application routes:

| Method | Path | Purpose |
| --- | --- | --- |
| GET | / | Public home page |
| GET | /gallery | Public gallery |
| GET | /contact | Public contact page |
| POST | /submit-query | Submit a contact query |
| GET | /admin/login | Admin login form |
| POST | /admin/login | Process admin login |
| POST | /admin/logout | Admin logout |
| GET | /admin/dashboard | Admin dashboard (authenticated) |
| GET / POST | /admin/edit-home, /admin/update-home | Manage home page content |
| GET / POST | /admin/edit-gallery, /admin/update-gallery | Manage gallery content |
| DELETE | /admin/delete-gallery-image/{id} | Delete a gallery image |
| GET / POST | /admin/edit-contact, /admin/update-contact | Manage contact page content |

Use php artisan route:list to inspect the full route table and middleware in your local environment.

## Project Structure

| Path | Responsibility |
| --- | --- |
| app/Http/Controllers | Public pages, admin actions, and contact-query handling |
| resources/views | Blade templates and page layouts |
| routes/web.php | Public and admin web routes |
| routes/auth.php | Authentication routes |
| database/migrations | Database schema |
| tests | Laravel feature and unit tests |
| vite.config.js | Frontend asset build configuration |
| tailwind.config.js | Tailwind CSS configuration |

## Useful Commands

    php artisan route:list
    php artisan migrate:status
    php artisan test
    php artisan config:clear
    php artisan cache:clear

## Deployment Checklist

- Set APP_ENV=production and APP_DEBUG=false.
- Configure secure database credentials, mail delivery, and file storage.
- Run migrations through the deployment process.
- Build assets with npm run build.
- Ensure the web server document root points to Laravel's public directory.
- Protect admin routes with appropriate authentication and authorization.
- Validate gallery uploads, including file types and sizes.
- Verify gallery image storage and contact-form delivery in the deployed environment.

## Testing

Run the existing automated tests:

    php artisan test

Manual verification should cover public navigation, contact submissions, admin authentication, content updates, gallery operations, and authorization for every admin endpoint.

## Author

**Neeraj P P** · [GitHub](https://github.com/Neeraj-pp)

## License

No project-specific license file was identified in the repository. Contact the repository owner before reusing or redistributing this project's code.
