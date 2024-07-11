
# RoamVerse

A dynamic and responsive social network website for sharing travel experiences and travel micro-blogging. The platform allows users to connect with fellow travelers, share stories, and discover new places.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)

## Features

- User registration and authentication
- Post travel experiences with text and images
- Connect with other travelers
- View and respond to friend requests
- Receive notifications for various activities
- Responsive design for mobile and desktop

## Technologies Used

- **Front-End**: HTML, CSS/Bootstrap, JavaScript
- **Back-End**: PHP
- **Database**: MySQL
- **Deployment**: XAMPP or LAMP stack

## Installation

### Prerequisites

- XAMPP or LAMP stack installed on your local machine
- Git installed on your local machine

### Steps

1. Clone the repository:

```bash
git clone https://github.com/jassranouta/roamverse.git
```

2. Move into the project directory:

```bash
cd roamverse
```

3. Start XAMPP or LAMP services (Apache and MySQL).

4. Import the database:
   - Open phpMyAdmin and create a new database named `roamverse`.
   - Import the SQL file located at `/sql/roamverse.sql` to set up the necessary tables.

5. Configure the database connection:
   - Open `php/functions.php` and update the database connection details if necessary.

6. Open your web browser and navigate to `http://localhost/roamverse` to see the website in action.

## Usage

- Register as a new user or log in with existing credentials.
- Create and share travel posts.
- Send and accept friend requests.
- Explore travel experiences shared by others.

## Project Structure

```plaintext
/roamverse (Root Directory)
|-- index.html (Home page)
|-- about-us.html (About page)
|-- README.md (Markdown file)

|-- /assets
|   |-- /css
|   |   |-- about-us.css
|   |   |-- contact-us.css
|   |   |-- footer.css
|   |   |-- friend.css
|   |   |-- header.css
|   |   |-- homepage.css
|   |   |-- login.css
|   |   |-- notification.css
|   |   |-- post.css
|   |   |-- profile.css
|   |   |-- search.css
|   |   |-- signup.css
|   |   |-- style.css
|
|   |-- /js
|       |-- about-us-toggle.js
|       |-- change-bg.js
|       |-- homepage.js
|       |-- script.js
|       |-- scroll-homepage.js

|-- /images
|   |-- (Folder for images used in the website)

|-- /includes
|   |-- footer.php (Common footer content)
|   |-- header.php (Common header content)

|-- /php
|   |-- accept-request.php
|   |-- add-friend.php
|   |-- contact-us.php
|   |-- create-post.php
|   |-- decline-request.php
|   |-- delete-post.php
|   |-- disp-friend-box.php
|   |-- edit-profile.php
|   |-- functions.php
|   |-- homepage.php
|   |-- login.php
|   |-- logout.php
|   |-- notification.php
|   |-- post.php
|   |-- profile.php
|   |-- remove-friend.php
|   |-- search.php
|   |-- signup.php
|   |-- terms-and-conditions.php

|-- /sql
|   |-- roamverse.sql (SQL file for creating necessary tables)
```

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a new Pull Request.
