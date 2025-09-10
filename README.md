# School Project (2023): Simple Web Blog

A simple web blog written in PHP, using Composer for dependency management.  
This project was completed as part of a school assignment in 2023.

> **Note:** This project will not continue its development.

## Features

- User-friendly blog interface
- Create, edit, and delete posts
- Display blog posts with author and date
- Responsive design with CSS
- MVC structure for easy maintenance
- Composer-powered package management

## Technologies Used

- **PHP** (87.1%)
- **CSS** (12.9%)
- **Composer** for PHP package management

## Getting Started

### Prerequisites

- PHP >= 7.4
- Composer installed
- Web server (Apache, Nginx, etc.)

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/mehdirexon/simple-web-blog.git
   cd simple-web-blog
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Configure your web server:**
   - Point your server's document root to the `public/` directory if present.
   - Ensure `.htaccess` is enabled for pretty URLs (if using Apache).

4. **Setup database (if required):**
   - Create a database for the blog.
   - Update configuration files with your DB credentials (see below).

### Configuration

Update any configuration files such as `.env` or `/config` to match your environment.  
Example `.env` variables:
```
DB_HOST=localhost
DB_NAME=your_db_name
DB_USER=your_db_user
DB_PASS=your_db_password
```

### Running Locally

If you have PHP installed, you can run the built-in server for local development:

```bash
php -S localhost:8000 -t public
```

Then open [http://localhost:8000](http://localhost:8000) in your browser.

## Folder Structure

```
simple-web-blog/
├── public/        # Publicly accessible files (index.php, assets)
├── src/           # Application source code (controllers, models, views)
├── config/        # Configuration files
├── vendor/        # Composer dependencies
├── composer.json  # Composer config
└── README.md      # Project documentation
```

## Usage

1. Access the homepage to view all blog posts.
2. Login or register to create your own posts (if authentication is implemented).
3. Browse, create, edit, or delete posts.

## License

This project is for educational purposes and does not offer any warranty.  
You may reuse or modify it according to your needs.

## Author

Made by [mehdirexon](https://github.com/mehdirexon)

---
**This web blog was created as a school project in 2023. Development will not continue.**
