# edoc-health


This portfolio project is a web application built using the Laravel framework, designed to demonstrate the capabilities of modern web development. It is set up to run locally using XAMPP, which provides an Apache server with PHP and MySQL.

The web app manages medical appointments efficiently in a doctor’s office.

- **Author** : Salma Jeghloul.
- **Project** : Webstack - Portfolio Project.

## Key Features

- Enable patients to book medical appointments easily.
- Enable application administrators to track appointments and manage doctors and patients.
- Manage a database that will be a more efficient, secure and confidential place to store all information about patients and their appointments.
- User authentication.
- CRUD operations.
- Responsive design.
- Secure user sessions.

## System Requirements

- **PHP Version**: 8.0 or higher
- **Laravel Framework Version**: 11.7.0
- **MySQL Version**: 8.0 or higher
- **XAMPP Version**: Latest version (includes Apache and MySQL)

## Installation

Follow these steps to set up the project on your local machine:

**1. Install XAMPP**
   - Download and install XAMPP from [Apache Friends](https://www.apachefriends.org/index.html).
   - Start the Apache and MySQL modules from the XAMPP control panel.

**2. Clone the Repository**

```bash
git clone https://github.com/tekna28/edoc-health.git
```

**3. Navigate to the Project Directory**

```bash
cd edoc-health
```

**4. Install Composer**
- Ensure you have Composer installed. If not, download it from [getcomposer.org](https://getcomposer.org/download).

**5. Install Dependencies**

```bash
composer install
```

**6. Set Database Configuration**
- Open the `.env` file and configure your database settings:

  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=your_database_name
  DB_USERNAME=root
  DB_PASSWORD=
  ```
**7. Run Migrations**

```bash
php artisan migrate --seed
```

**8. Start the Application**

- You can run the application using:

```bash
php artisan serve --host=localhost --port=8000
```

- Access it by navigating to `http://localhost:8000` in your web browser.

## Usage

Once the application is running, you can register a new user, log in, and explore the features provided by the application.

## Contributing

If you would like to contribute to this project, please fork the repository and submit a pull request with your changes.

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.
