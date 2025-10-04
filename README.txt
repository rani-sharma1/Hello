LearnHub - Demo project
-----------------------

Steps to run locally on a PHP host:

1. Copy project folder to your PHP-enabled server (e.g., XAMPP htdocs, shared host).
2. Edit includes/db.php and set your DB credentials (host, user, pass). The DB name is 'learnhub'.
3. Import db.sql into MySQL (or run install.php to create tables and sample data).
   - To run install.php: visit http://your-site/install.php once.
4. After install, delete install.php for security.
5. Admin login: /admin/login.php
   - default: admin / admin123
6. Sample user: user@example.com / password123

Notes:
- This is a starter demo. For production, add CSRF protection, input validation, prepared statements are used for most queries.
- Style and pages are basic; you can replace HTML with your designs.
