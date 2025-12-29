#  Digital Garden – PHP POO Project

Digital Garden is a PHP 8 application developed using an Object-Oriented modular architecture.
The project refactors a procedural PHP application into a clean, maintainable OOP structure.

##  Features

### User
- Register & login
- Create and manage themes
- Create and manage notes per theme
- Access only own data

### Admin
- Secure backoffice login
- View users list
- Validate or block user accounts
- No access to private notes

##  Tech Stack
- PHP 8 (OOP)
- MySQL (PDO, prepared statements)
- HTML5 / CSS3 / Bootstrap
- JavaScript (client-side validation)
- Git & GitHub
- UML (Use case & Class diagrams)

##  Architecture
- Entity (User, Theme, Note)
- Repository (DB access)
- Service (Business logic)
- Simple modular structure (no full MVC)

##  Security
- Sessions & role checks
- CSRF protection
- XSS prevention (escaping)
- SQL Injection prevention (PDO)

##  UML
- Use case diagram
- Class diagram

##  Installation
1. Clone repository
2. Import SQL script
3. Configure database in `/config/database.php`
4. Run with local server (XAMPP / Apache)

##  Team
- Said AABILLA
