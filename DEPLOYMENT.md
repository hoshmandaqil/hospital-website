# 🚀 Hospital Website Deployment Guide

## Quick Deploy Options

### 1. Railway (Recommended - Easiest for Laravel)

**Steps:**

1. **Push to GitHub:**

    ```bash
    git init
    git add .
    git commit -m "Initial commit"
    git branch -M main
    git remote add origin https://github.com/yourusername/hospital-website.git
    git push -u origin main
    ```

2. **Deploy on Railway:**

    - Go to [railway.app](https://railway.app)
    - Sign up with GitHub
    - Click "New Project" → "Deploy from GitHub repo"
    - Select your repository
    - Railway will auto-detect Laravel and deploy!

3. **Set Environment Variables:**
    - In Railway dashboard, go to Variables tab
    - Add: `APP_KEY` (generate with: `php artisan key:generate --show`)
    - Add: `APP_URL` (your Railway URL)

### 2. Vercel (Alternative)

**Steps:**

1. **Install Vercel CLI:**

    ```bash
    npm i -g vercel
    ```

2. **Deploy:**

    ```bash
    vercel
    ```

3. **Configure:**
    - Set `APP_KEY` in Vercel dashboard
    - Set `APP_URL` to your Vercel domain

### 3. Heroku (Classic)

**Steps:**

1. **Install Heroku CLI:**

    ```bash
    # macOS
    brew tap heroku/brew && brew install heroku
    ```

2. **Login and Create App:**

    ```bash
    heroku login
    heroku create your-hospital-app
    ```

3. **Deploy:**

    ```bash
    git push heroku main
    ```

4. **Set Environment:**
    ```bash
    heroku config:set APP_KEY=$(php artisan key:generate --show)
    ```

## Pre-Deployment Checklist

### 1. Build Assets

```bash
npm run build
```

### 2. Generate App Key

```bash
php artisan key:generate
```

### 3. Run Migrations

```bash
php artisan migrate
```

### 4. Optimize for Production

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Environment Variables for Production

Set these in your deployment platform:

```
APP_NAME="Bayazid Rokhan Hospital"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-domain.com
APP_KEY=base64:your-generated-key

DB_CONNECTION=sqlite
DB_DATABASE=/app/database/database.sqlite
```

## Database Setup

The app uses SQLite by default, which works great for deployment. No additional database setup needed!

## Troubleshooting

### If images don't load:

-   Check image URLs are accessible
-   Use absolute URLs for external images
-   Consider using a CDN

### If styles don't load:

-   Run `npm run build` before deployment
-   Check Vite configuration

### If routes don't work:

-   Ensure `.htaccess` is in public folder
-   Check web server configuration

## Recommended: Railway

Railway is the easiest option because:

-   ✅ Auto-detects Laravel
-   ✅ Free tier available
-   ✅ Built-in database support
-   ✅ Automatic HTTPS
-   ✅ Easy environment management

## Next Steps

1. Choose a deployment platform
2. Push your code to GitHub
3. Follow the platform-specific steps
4. Share your live URL! 🎉

Your hospital website will be live in minutes!
