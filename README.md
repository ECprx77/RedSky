<<<<<<< HEAD
# RedSky
backend social media project
=======
# Redsky Backend - Social Network API

## Introduction

Redsky Backend is a robust PHP-based RESTful API that powers a social networking platform. Built with modern PHP practices and Docker containerization, it provides all the essential features needed for a social network application.

## Key Features

- User authentication and authorization
- Profile management
- Posts and comments functionality
- Friend/follower system
- Real-time notifications
- Media upload handling
- Feed generation and management

## Tech Stack

- PHP 8.2
- MySQL Database
- Docker & Docker Compose
- Nginx Web Server
- Composer for dependency management

## Prerequisites

- Docker and Docker Compose
- Composer (PHP package manager)
- Git

## Quick Start

1. Clone the repository:
```bash
git clone [your-repository-url]
cd redsky-backend
```

2. Set up environment variables:
```bash
cp .env.sample .env
```

3. Install dependencies:
```bash
cd app && composer install && cd ../
```

4. Start the Docker containers:
```bash
docker-compose up -d
```

## API Documentation

The API endpoints are available at `http://localhost/api/v1`. Key endpoints include:

### Authentication
- POST `/auth/register` - Register new user
- POST `/auth/login` - User login
- POST `/auth/logout` - User logout

### Users
- GET `/users/{id}` - Get user profile
- PUT `/users/{id}` - Update user profile
- GET `/users/{id}/posts` - Get user posts

### Posts
- GET `/posts` - Get feed posts
- POST `/posts` - Create new post
- PUT `/posts/{id}` - Update post
- DELETE `/posts/{id}` - Delete post

For complete API documentation, visit `/api/docs` after starting the server.

## Development

### Running Tests
```bash
docker-compose exec php vendor/bin/phpunit
```

### Code Style
```bash
docker-compose exec php vendor/bin/phpcs
```

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

P.S. If you encounter any issues, remember: "It's not a bug, it's a feature!"
>>>>>>> master
