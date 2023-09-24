<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://kaulinan.teguhrianto.com/img/kaulinan-logo.png" width="200" alt="Laravel Logo"></a></p>

# Kaulinan Web

## Overview
Kaulinan Web is the ultimate destination for everything related to high-quality Montessori toys. We understand the importance of play in children's development, and we are committed to providing products that stimulate their creative growth. Here, you can explore various types of toys carefully designed based on Montessori principles to help children learn in a natural and effective way.

## Landing Page
The landing page serves as the front-end of our application and displays dynamic data retrieved from the database. It includes the following sections:

### Preview
**Live URL:** [https://kaulinantask.xcodehoster.com/](https://kaulinantask.xcodehoster.com/)

### Categories
- Categories are divided into two types: "Age" and "General".
- Categories are displayed as cards on the landing page.
- Categories can be clicked to access related products.

### Products
- Products are displayed in various sections on the landing page.
- Products may have badges like "Hot," "New," "Sold Out," or "Sale" displayed on their cards.
- Products have images, titles, and pricing information.

### Features
- Features are displayed as cards on the landing page.
- Each feature card includes a title and a description.

### Blogs
- Blogs are displayed as cards on the landing page.
- Each blog card includes an image, author information, comment count, and a title.

## Tech Stacks
- **Laravel:** Laravel is a PHP web framework that handles the server-side logic and database operations.

- **Tailwind CSS:** Tailwind CSS is a utility-first CSS framework for styling the user interface.

- **JavaScript (JS):** JavaScript adds interactivity and enhances the user experience on the client-side.

These technologies work together to build and style the web application, making it interactive and user-friendly.

## Local Development
To run this project locally, follow these steps:

1. Clone the repository.
2. Install project dependencies using `composer install` and `npm install`.
3. Create a `.env` file and configure your database settings.
4. Run database migrations and seed the database with sample data using `php artisan migrate --seed`.
5. Start the Laravel development server using `php artisan serve`.
6. Compile and watch for front-end changes using `npm run dev`.

- Your application should now be accessible locally at [http://localhost:8000](http://localhost:8000).

- Access API endpoints by navigating to [http://localhost:8000/api](http://localhost:8000/api).

## API CRUD Documentation
You can access the detailed API documentation and endpoint here:

[https://documenter.getpostman.com/view/5968363/2s9YJW5RcP](https://documenter.getpostman.com/view/5968363/2s9YJW5RcP)

### Categories API (CRUD)
- Create a new category: `POST /api/categories`
- Read all categories: `GET /api/categories`
- Read a specific category by ID: `GET /api/categories/{id}`
- Update a category by ID: `PUT /api/categories/{id}`
- Delete a category by ID: `DELETE /api/categories/{id}`

### Products API (CRUD)
- Create a new product: `POST /api/products`
- Read all products: `GET /api/products`
- Read a specific product by ID: `GET /api/products/{id}`
- Update a product by ID: `PUT /api/products/{id}`
- Delete a product by ID: `DELETE /api/products/{id}`

### Features API (CRUD)
- Create a new feature: `POST /api/features`
- Read all features: `GET /api/features`
- Read a specific feature by ID: `GET /api/features/{id}`
- Update a feature by ID: `PUT /api/features/{id}`
- Delete a feature by ID: `DELETE /api/features/{id}`

### Blogs API (CRUD)
- Create a new blog: `POST /api/blogs`
- Read all blogs: `GET /api/blogs`
- Read a specific blog by ID: `GET /api/blogs/{id}`
- Update a blog by ID: `PUT /api/blogs/{id}`
- Delete a blog by ID: `DELETE /api/blogs/{id}`

## Author

**Teguh Rianto** Frontend Developer

**Portfolio** [https://teguhrianto.com](https://teguhrianto.com)

**Github** [https://github.com/teguhrianto](https://github.com/teguhrianto)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
