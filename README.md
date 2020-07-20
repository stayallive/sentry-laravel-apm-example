## Sentry Laravel APM example application

Want to check out Sentry APM on some example application designed to show off the APM integration in Laravel?

You've come to the right place. This TODO application was built from the ground up to be somewhat interesting performance wise.

If you are looking at this application to learn how to built an Laravel app, please don't. Some code in this is built to showcase APM features and is not how you should write your Laravel code.

### Getting started

To start I expect you've installed Laravel before and know a little how it works so concepts as `composer` and `npm` should not sound new.

---

Clone this repository:

```bash
git clone https://github.com/stayallive/sentry-laravel-apm-example.git
```

Move into the directory:

```bash
cd sentry-laravel-apm-example
```

Install the Node dependencies and built the JavaScript and CSS sources:

```bash
npm install && npm run dev
```

Install the Composer dependencies:

```bash
composer install
```

Copy the example `.env` file, generate a `APP_KEY` and fill out the database information:

```bash
cp .env.example .env
php artisan key:generate
# edit the .env file with your favourite editor and modify the database connection info
```

Add your Sentry DSN to the `.env`:

```bash
# edit the .env file with your favourite editor and set the SENTRY_LARAVEL_DSN with your DSN from the Sentry interface
```

Migrate the database tables:

```bash
php artisan migrate
```

Run the app:

```bash
php artisan serve
```

Nice, you should be greeted by a Laravel application and you should be able to register an account to get into the application (the registration is just to seed the database, all data stays on your machine and no e-mail validation is required).
