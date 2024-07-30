# streaming_service_website
# Fancy Streaming Service

A fancy streaming service with an admin panel built with PHP, MySQL, Bootstrap, and PDO.

## Features

- **Admin Panel**:
  - Login and manage videos.
  - CRUD operations for videos.
  - Video upload functionality.

- **User Interface**:
  - Browse and watch videos.
  - Video playback with embedded player.

## Project Structure

/streaming-service/
├── /admin/
│   ├── index.php
│   ├── add_video.php
│   ├── edit_video.php
│   ├── delete_video.php
│   ├── login.php
│   ├── logout.php
│   ├── /partials/
│   │   ├── header.php
│   │   ├── footer.php
├── /user/
│   ├── index.php
│   ├── video.php
│   ├── /partials/
│   │   ├── header.php
│   │   ├── footer.php
├── /assets/
│   ├── /css/
│   │   ├── styles.css
│   ├── /js/
│   │   ├── scripts.js
├── /uploads/
│   ├── video files
├── config.php
├── init.php
├── .htaccess
├── README.md
