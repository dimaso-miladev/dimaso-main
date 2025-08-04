# Vigo App

>  Dimaso
> @auhthor: Nguyen Binh

## Features

- Laravel 8
- Vue + VueRouter + Vuex + VueI18n + ESlint
- Pages with dynamic import and custom layouts
- Login, register, email verification and password reset
- Authentication with JWT
- Socialite integration
- Bootstrap 5 + Font Awesome 5

## Installation

- Edit `.env` and set your database connection details
- (When installed via git clone or download, run `php artisan key:generate` and `php artisan jwt:secret`)
- `php artisan migrate`
- `npm install`

## Usage

#### Development

```bash
npm run dev
```

#### Production

```bash
npm run build
```

## Socialite

This project comes with GitHub as an example for [Laravel Socialite](https://laravel.com/docs/5.8/socialite).

To enable the provider create a new GitHub application and use `https://example.com/api/oauth/github/callback` as the Authorization callback URL.

Edit `.env` and set `GITHUB_CLIENT_ID` and `GITHUB_CLIENT_SECRET` with the keys form your GitHub application.

For other providers you may need to set the appropriate keys in `config/services.php` and redirect url in `OAuthController.php`.

## Email Verification

To enable email verification make sure that your `App\User` model implements the `Illuminate\Contracts\Auth\MustVerifyEmail` contract.

## Testing

```bash
# Run unit and feature tests
vendor/bin/phpunit

# Run Dusk browser tests
php artisan dusk
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.


## Setup if your codding in idx workspace

### Part 1: Setting up NVM (Node Version Manager)

NVM allows you to install and switch between different Node.js versions. This is crucial for ensuring all team members use the same Node.js version for frontend asset compilation and related tasks.

**Step 1: Open Terminal**

In the Project IDX interface, open the Terminal window (usually located at the bottom of the screen).

**Step 2: Run the NVM Installation Script**

Paste and run the following command in the terminal to download and install NVM.

```bash
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.7/install.sh | bash
```

**Step 3: Activate NVM**

After installation, you need to reload your terminal configuration so that the `nvm` command is available.

```bash
source ~/.bashrc
```

**Step 4: Verify Installation**

To confirm NVM was installed successfully, run:

```bash
nvm --version
```

If you see a version number (e.g., 0.39.7) displayed, you have succeeded.

**Step 5: Install and Use the Project's Node.js Version**

We will use Node.js version 18 for this project.

Install Node.js version 18:

```bash
nvm install 18
```

Use the newly installed version:

```bash
nvm use 18
```

**(Recommended)** Set version 18 as the default so you don't need to re-run `nvm use` every time you open a new terminal:

```bash
nvm alias default 18
```

### Part 2: Configuring Laravel to Use SQLite

To simplify the development process, we will use SQLite instead of MySQL. SQLite does not require a separate database server and stores all data in a single file within the project.

**Step 1: Edit the `.env` File**

Open the `.env` file at the root of your project.
Find the database configuration lines for MySQL:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Delete or comment out these lines and replace them with the configuration for SQLite:

```dotenv
DB_CONNECTION=sqlite
```

**Step 2: Create the SQLite Database File**

Laravel needs a file to work with. Create this file in the terminal:

```bash
touch database/database.sqlite
```

This command will create an empty file named `database.sqlite` in the `database/` directory.

**Step 3: Clear Configuration Cache (Important Step)**

After changing the `.env` file, you must clear the configuration cache for Laravel to recognize the changes.

```bash
php artisan config:clear
```

### Part 3: Completing Installation and Running the Project

Your environment is now almost ready. Perform the final steps.

**Step 1: Install Dependencies**

```bash
# Install Composer packages (backend)
composer install

# Install NPM packages (frontend)
npm install
```


