# Shoe Store Web Application

This is a web application developed using the Laravel framework and PHP, designed for a shoe store. The application provides a range of features to facilitate shoe shopping for users and manage the store's inventory.

## Features

- User Authentication: Users can register, log in, and manage their accounts.
- Gender-Based Shoe Selection: Users can browse and purchase shoes for both men and women.
- Size and Quantity Selection: Users can choose the desired shoe size and quantity during the purchasing process.
- Cart Functionality: Users can add items to their cart, view the cart contents, and remove items if desired.
- Payment Confirmation: Users can fill out a form with their bank information and confirm payment for their purchases.
- Contact Us: Users can send comments and appreciation to the admin through a contact form.
- Admin Interface: The admin has access to a dedicated interface for managing the application.
- Dynamic Product Management: The admin can add, update, and delete products, including their price and description, on various pages.
- User Management: The admin can perform CRUD (Create, Read, Update, Delete) operations on user accounts.
- Comments Management: The admin can view and manage user comments and appreciations submitted through the contact form.
- Order Management: The admin can view orders made by users, including product photos, size, and quantity purchased.
- Statistics: The admin can access a statistics table to track website traffic, user registrations, and daily order counts through a graphical representation.

## Installation

1. Clone the repository: `git clone `(https://github.com/AbdouAlifb/ShoeStoreWebApp.git)`
2. Navigate to the project directory: `cd ShoeStoreWebApp`
3. Install dependencies: `composer install`
4. Create a `.env` file and configure your database connection.
5. Generate the application key: `php artisan key:generate`
6. Migrate the database: `php artisan migrate`
7. Start the development server: `php artisan serve`

Make sure you have Composer and PHP installed on your system.

## Technologies Used

- Laravel Framework
- PHP
- HTML/CSS
- JavaScript
- MySQL (or any other database supported by Laravel)

## Contributing

Contributions are welcome! If you would like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch: `git checkout -b feature/your-feature-name`
3. Commit your changes: `git commit -m "Add your feature"`
4. Push to the branch: `git push origin feature/your-feature-name`
5. Submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
