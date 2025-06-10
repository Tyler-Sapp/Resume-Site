# ──────────────────────────────────────────────────────────────────────────────
# Stage 1: "composer" builder — uses the official Composer container to install
#            dependencies (PHP libraries, PHPMailer, etc.) in a clean environment.
# ──────────────────────────────────────────────────────────────────────────────
FROM composer:2 AS builder

# 1a. Tell Composer to install without dev‐dependencies and optimize the autoloader
WORKDIR /app

# 1b. Copy only composer.json & composer.lock for a fast cached composer install
COPY composer.json composer.lock /app/

# 1c. Install PHP dependencies (e.g., PHPMailer) into /app/vendor
RUN composer install --no-dev --optimize-autoloader


# ──────────────────────────────────────────────────────────────────────────────
# Stage 2: "runtime" image — this is what actually runs on Render / in production.
#            We start from PHP 8.3 + Apache on Debian Bookworm, install only the
#            required PHP extensions, then copy our code + the built vendor/ folder.
# ──────────────────────────────────────────────────────────────────────────────
FROM php:8.3-apache-bookworm

# 2a. Install only the PHP extensions we need (e.g. pdo_mysql). No unzip here—
#     everything Composer needed was done in the builder stage.
RUN apt-get update \
 && apt-get install -y --no-install-recommends \
      libzip-dev \
 && docker-php-ext-install pdo_mysql \
 && rm -rf /var/lib/apt/lists/*

# 2b. Copy over the built vendor/ directory from the builder stage:
COPY --from=builder /app/vendor/ /var/www/html/vendor/

# 2c. Copy our application code (public/ and src/) into Apache’s webroot.
COPY public/ /var/www/html/
COPY src/    /var/www/html/src/

# 2d. Expose port 80 and let Apache run in the foreground
EXPOSE 80
CMD ["apache2-foreground"]
