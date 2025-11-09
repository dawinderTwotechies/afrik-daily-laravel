# Base image with PHP-FPM and Nginx
FROM richarvey/nginx-php-fpm:3.1.6

# Set working directory
WORKDIR /var/www/html

# Install dependencies required for Node.js + build tools
RUN apk add --no-cache curl tar xz

# Install Node.js v20.19.0 (Alpine-compatible)
RUN curl -fsSL https://unofficial-builds.nodejs.org/download/release/v20.19.0/node-v20.19.0-linux-x64-musl.tar.xz -o node.tar.xz && \
    mkdir -p /usr/local/lib/nodejs && \
    tar -xJf node.tar.xz -C /usr/local/lib/nodejs && \
    ln -s /usr/local/lib/nodejs/node-v20.19.0-linux-x64-musl/bin/node /usr/local/bin/node && \
    ln -s /usr/local/lib/nodejs/node-v20.19.0-linux-x64-musl/bin/npm /usr/local/bin/npm && \
    ln -s /usr/local/lib/nodejs/node-v20.19.0-linux-x64-musl/bin/npx /usr/local/bin/npx && \
    rm node.tar.xz && \
    node -v && npm -v

# Copy package files first (to leverage Docker cache)
COPY package*.json ./

# Install frontend dependencies
RUN npm ci

# Copy the rest of the application before running build
COPY . .

# Run build from the correct directory
RUN npm run build --prefix /var/www/html

# Copy Laravel app files
COPY . .

# Environment setup
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
ENV COMPOSER_ALLOW_SUPERUSER 1

# Expose port for Render
EXPOSE 80

# Default start command
CMD ["/start.sh"]
