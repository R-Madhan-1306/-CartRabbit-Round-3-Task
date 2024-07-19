# Event Management System

This is a web application built using the Laravel framework for managing events. Users can add, view, edit, and delete event details such as title, date, and location.

## Features

- Add Event: Users can add a new event with a title, date, and location.
- View Events: All registered events are displayed in the "Event Details" section.
- Edit Event: Users can edit the details of an existing event.
- Delete Event: Users can delete an event.

## Requirements

- PHP >= 7.4
- Composer
- Laravel >= 8.0
- MySQL

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/R-Madhan-1306/CartRabbit-Round-3-Task.git
    cd CartRabbit-Round-3-Task
    ```

2. **Install dependencies:**
    ```bash
    composer install
    ```

3. **Create a copy of the `.env` file:**
    ```bash
    cp .env.example .env
    ```

4. **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

5. **Configure your database:**
    - Open the `.env` file and update the following lines with your database information:
      ```env
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=your_database_name
      DB_USERNAME=your_database_username
      DB_PASSWORD=your_database_password
      ```

6. **Run the database migrations:**
    ```bash
    php artisan migrate
    ```

7. **Run the database seeders (if applicable):**
    ```bash
    php artisan db:seed
    ```

8. **Start the development server:**
    ```bash
    php artisan serve
    ```

    The application will be accessible at `http://localhost:8000`.

## Usage

1. **Add an Event:**
   - Navigate to `http://localhost:8000/events/create`
   - Fill in the event title, date, and location
   - Click on the "Register Event" button

2. **View Events:**
   - Navigate to `http://localhost:8000/events`
   - All registered events will be displayed

3. **Edit an Event:**
   - In the events list, click on the "Edit" button next to the event you want to edit
   - Update the event details and click on the "Update Event" button

4. **Delete an Event:**
   - In the events list, click on the "Delete" button next to the event you want to delete

## Project Structure

- `app/Models/Event.php`: The Event model
- `app/Http/Controllers/EventController.php`: The Event controller
- `resources/views/events/`: The directory containing all event-related views
- `routes/web.php`: The file where routes are defined


## Acknowledgements

This project was developed as part of a technical task for Cartrabbit company.
