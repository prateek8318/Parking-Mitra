# 🅿️ Parking Mitra

**Parking Mitra** is a web-based parking management system built with **PHP** and **MySQL**. Users can book parking slots online, and administrators manage bookings and users from a dedicated admin panel.

## ✨ Features

- 👤 User login, profile and logout
- 🚗 Online parking slot booking & order management
- 🔳 QR code generation for bookings
- 🛠️ Admin login and admin dashboard (user & booking management)
- 🐳 Docker support for quick setup

## 🛠️ Tech Stack

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat-square&logo=bootstrap&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=flat-square&logo=docker&logoColor=white)

## 📁 Project Structure

```
Parking-Mitra/
├── parking_mitra/        # Application source (PHP pages, CSS, assets)
│   └── ap/               # Admin panel
├── parking_mitra.sql     # Database schema & seed data
└── Dockerfile            # PHP 8.2 + Apache image
```

## 🚀 Getting Started

### Option 1 — Docker

```bash
git clone https://github.com/prateek8318/Parking-Mitra.git
cd Parking-Mitra
docker build -t parking-mitra .
docker run -p 8080:80 parking-mitra
```

### Option 2 — XAMPP / WAMP

1. Copy the project into your `htdocs` folder.
2. Create a MySQL database and import `parking_mitra.sql`.
3. Update the database credentials in the PHP config.
4. Open `http://localhost/Parking-Mitra/parking_mitra/` in your browser.

## 👤 Author

**Prateek Kumar Pandey** — [GitHub](https://github.com/prateek8318) · [LinkedIn](https://www.linkedin.com/in/prateek-pandey-6087b624b/)
