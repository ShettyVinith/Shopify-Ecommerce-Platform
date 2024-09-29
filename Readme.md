# Shopify E-commerce Platform

## Project Overview

An E-commerce platform built using HTML, CSS, PHP, and MySQL. This web application allows users to browse products, add items to the shopping cart, buy products, and manage their cart. The admin has full control over the inventory, including adding, editing, and deleting items.

## Table of Contents

- [Features](#features)
  - [User Features](#user-features)
  - [Admin Features](#admin-features)
- [Technologies Used](#technologies-used)
- [Setup Instructions](#setup-instructions)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

### User Features

- Browse products in the catalog.
- Add items to the cart.
- View and edit the shopping cart.
- Proceed with purchasing items.

### Admin Features

- Add new products to the inventory.
- Edit existing product details.
- Delete items from the inventory.
- Manage all products and stock directly from the admin panel.

## Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL

## Setup Instructions

### Prerequisites

Before running this project, make sure you have the following software installed:

- [XAMPP](https://www.apachefriends.org/index.html) (to run Apache and MySQL server)
- PHP 7.x or higher

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/ShettyVinith/Shopify-Ecommerce-Platform.git
   ```

2. **Move the files to the XAMPP `htdocs` folder:**

   - Copy the cloned project folder to `C:/xampp/htdocs/`.

3. **Start Apache and MySQL:**

   - Open XAMPP and start both **Apache** and **MySQL** services.

4. **Database Setup:**

   - Import the database file:
     1. Open **phpMyAdmin** by going to `http://localhost/phpmyadmin/`.
     2. Create a new database named `shopify_db`.
     3. Import the SQL file from the `database` folder in this repository.

5. **Access the Website:**
   - Visit `http://localhost/Shopify-Ecommerce-Platform` in your browser.

## Usage

Once the setup is complete, users can browse the products and perform various actions such as adding items to the cart, managing their cart, and making purchases. The admin can manage inventory and product details via the admin panel.

## Contributing

Contributions are always welcome! Feel free to fork the repository and submit pull requests. If you'd like to contribute in other ways, don't hesitate to open an issue or submit your ideas.
