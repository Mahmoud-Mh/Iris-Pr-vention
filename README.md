# README - Test 1: Mini Blog System

## Overview
This project implements a **Mini Blog System** as part of a technical test. It includes:
- Basic CRUD operations for **Posts** and **Comments**.
- A simple interface to view, create, update, and delete posts and comments.
- A bonus feature to **like posts**.
- A modern interface using **Bootstrap** for better user experience.

---

## Setup Instructions
Follow these steps to set up and run the project locally.

### 1. Clone the Repository
```bash
git clone https://github.com/FranceSurgery/test-technique-1.git test-technique-1
cd test-technique-1
```

### 2. Install Dependencies
Install the PHP dependencies using Composer:
```bash
composer install
```

### 3. Configure Environment
Copy the example environment file and generate an application key:
```bash
cp .env.example .env
php artisan key:generate
```

Update the `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_technique_1
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

### 4. Set Up the Database
Create the database:
```sql
CREATE DATABASE test_technique_1;
```

Run the migrations:
```bash
php artisan migrate
```

(Optional) Populate the database with test data using seeders (if provided):
```bash
php artisan db:seed
```

### 5. Start the Development Server
```bash
php artisan serve
```

Visit the application at `http://localhost:8000`.

---

## Features

### 1. Posts
- Create, read, update, and delete posts.
- View a list of all posts with links to individual post details.
- **Bonus:** Like functionality to increment the number of likes for a post.

### 2. Comments
- Add comments to a specific post.
- View all comments associated with a post.

### 3. User Interface
- A responsive and modern interface built with **Bootstrap**.
- Clear and consistent styling for all pages.
- Modal confirmation for deleting posts.

### 4. Feedback Messages
- Success and error messages displayed for user actions.

---

## Usage

### 1. Access the Blog
Navigate to `/posts` to view all posts.

### 2. Create a New Post
- Click "Create New Post" on the index page.
- Fill in the title and body, then submit.

### 3. Add a Comment
- Open a specific post by clicking "View."
- Scroll to the comments section and submit a comment.

### 4. Like a Post
- Click "Like" on a post to increment its like count.

### 5. Edit or Delete a Post
- Click "Edit" to modify a post.
- Click "Delete" to remove a post (modal confirmation required).

---

## Code Structure
- **Models**:
  - `Post`: Manages posts and their relationships.
  - `Comment`: Manages comments and their relationships.
- **Controllers**:
  - `PostController`: Handles CRUD operations for posts.
  - `CommentController`: Handles comment creation for posts.
- **Views**:
  - `resources/views/posts`: Contains views for displaying and managing posts.
  - Layouts and components styled with **Bootstrap**.

---

## Known Issues
- Validation errors are displayed inline without advanced formatting.
- No server-side pagination implemented (although Laravel’s pagination feature is ready to use).

---

## Future Enhancements
- Add user authentication to restrict certain actions (e.g., liking or commenting).
- Implement AJAX for real-time like and comment updates.
- Add server-side pagination for large datasets.
- Include automated tests (Pest or PHPUnit).

---

## Dependencies
- **Laravel Framework**: 9.x
- **Bootstrap**: 5.x
- **MySQL**
- **Composer**

---

## License
This project is for evaluation purposes and is not licensed for production use.
