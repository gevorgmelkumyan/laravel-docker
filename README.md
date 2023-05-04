# Custom Laravel Docker Environment

This repository contains a custom Docker environment for Laravel projects, which streamlines the development process 
and ensures a virtually hands-free setup with minimal additional configuration required. This environment allows you to 
concentrate on writing code and developing features, while promoting a consistent development experience across your team.

## Table of Contents

- [Getting Started](#getting-started)
- [Makefile Commands](#makefile-commands)
- [Environment Configuration](#environment-configuration)
- [Contributing](#contributing)
- [License](#license)

## Getting Started

To set up the project on your local machine, follow these steps:

1. Clone the repository:

```bash
git clone https://github.com/gevorgmelkumyan/laravel-docker.git
```

2. Run the Makefile `build` command:

```bash
make build
```

3. Start the Docker environment using the Makefile `run` command:

```bash
make run
```

## Makefile Commands

The Makefile provides several useful commands for interacting with the Docker environment:

- `make build`: Build the Docker containers
- `make run`: Start the Docker containers
- `make stop`: Stop the Docker containers
- `make down`: Remove the Docker containers, volumes, and images
- `make server`: Access the server container's bash shell
- `make vite`: Access the vite container's bash shell

## Environment Configuration

The custom Docker environment is configured using a combination of Makefile, `update.env.sh` script, and Docker-related 
files. The Makefile defines commonly used commands, the `update.env.sh` script sets up the necessary environment 
variables, and the Docker-related files (located in the `/docker` directory) define the services the Laravel 
application relies on.

## Contributing

Contributions to improve the custom Laravel Docker environment are welcome. Please create an issue to discuss the 
changes or submit a pull request.

## License

This project is released under the [MIT License](https://opensource.org/licenses/MIT).
