# GlowGuide 🌸💌 

GlowGuide is een beauty-webapplicatie gebouwd met Laravel 13.

Het concept is vergelijkbaar met een platform zoals Treatwell. Bezoekers kunnen beauty providers ontdekken op basis van categorieën zoals Nails, Lashes, Brows, Makeup en Skincare.

Gebruikers kunnen een account aanmaken, inloggen en hun eigen profiel beheren. Admins kunnen de inhoud van de website beheren via een adminomgeving.

---

## Projectbeschrijving

GlowGuide is ontwikkeld als eindproject voor het vak Backend Web.

Het doel van het project is om de belangrijkste Laravel-concepten toe te passen in een volledige dynamische webapplicatie.

De applicatie maakt gebruik van:

- Laravel 13
- PHP
- Blade
- SQLite
- Eloquent ORM
- Laravel Authentication
- Middleware
- Migrations
- Seeders
- Controllers
- CRUD-functionaliteiten
- Blade layouts
- Form validation
- CSRF protection

---

# Functionaliteiten

## Bezoekers

Een bezoeker die niet ingelogd is kan:

- De homepage bekijken
- Beauty categorieën bekijken
- Providers bekijken
- Een provider detailpagina bekijken
- De FAQ bekijken
- Het contactformulier gebruiken
- Een account registreren
- Inloggen

---

## Gebruikers

Een ingelogde gebruiker kan:

- Zijn/haar profiel bekijken
- De profielgegevens aanpassen
- Een gebruikersnaam instellen
- Een verjaardag instellen
- Een korte bio toevoegen
- Een locatie instellen
- Een profielfoto uploaden
- Uitloggen

---

## Admin

Een admin heeft toegang tot het admin dashboard.

Admins kunnen:

- Categorieën beheren
- Providers beheren
- FAQ-categorieën beheren
- FAQ-vragen en antwoorden beheren
- Providers toevoegen
- Providers wijzigen
- Providers verwijderen
- Categorieën toevoegen
- Categorieën wijzigen
- Categorieën verwijderen
- FAQ-categorieën beheren
- FAQ-items beheren

---

# Beauty categorieën

GlowGuide gebruikt verschillende beautycategorieën:

- Nails
- Lashes
- Brows
- Makeup
- Skincare

Een bezoeker kan bijvoorbeeld op **Makeup** klikken en vervolgens alle providers binnen deze categorie bekijken.

---

# Providers

Elke provider bevat informatie zoals:

- Naam
- Beschrijving
- Stad/locatie
- Categorie
- Afbeelding

Providers worden door admins beheerd via het admin dashboard.

Een bezoeker kan een categorie openen en vervolgens doorklikken naar een specifieke provider.

---

# FAQ

De FAQ-pagina bevat veelgestelde vragen en antwoorden.

De vragen worden gegroepeerd per categorie.

Admins kunnen:

- FAQ-categorieën toevoegen
- FAQ-categorieën wijzigen
- FAQ-categorieën verwijderen
- FAQ-vragen toevoegen
- FAQ-vragen wijzigen
- FAQ-vragen verwijderen

De FAQ zelf is publiek toegankelijk.

---

# Contact

Bezoekers kunnen via de contactpagina contact opnemen met GlowGuide.

Het contactformulier bevat een bericht dat door de applicatie wordt verwerkt.

Na het versturen wordt het bericht naar het ingestelde admin e-mailadres verstuurd.

---

# Authentication

GlowGuide gebruikt Laravel's authentication functionaliteiten.

Gebruikers kunnen:

- Registreren
- Inloggen
- Uitloggen
- Wachtwoord resetten
- Ingelogd blijven via Remember Me

Er wordt onderscheid gemaakt tussen:

- Gewone gebruikers
- Admins

Admins krijgen toegang tot het admin dashboard.

---

# Middleware

Middleware wordt gebruikt om toegang tot bepaalde pagina's te beperken.

## Auth middleware

De `auth` middleware zorgt ervoor dat bepaalde pagina's alleen toegankelijk zijn voor ingelogde gebruikers.

Bijvoorbeeld:

```php
Route::middleware(['auth'])->group(function () {
    // user routes
});



---

<p align="center" style="font-size: 24px; margin-bottom: -25px; color: #EF3B2D;">
    <strong>Educational<br/> Starter Pack<br/></strong><span style="color:gray">for</span>
</p>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


---

## About this Starter Pack
<div style="background-color: #f6f8fa; padding: 10px; border-radius: 5px;">
This is a starter pack for <strong>Laravel tailored for educational purposes</strong>. 

It is aimed at helping students and beginners to quickly set up a Laravel development environment that allows for 
learning the basics without the need to configure everything from scratch.
</div>

### Changes from the original Laravel repository
It provides a pre-configured environment with some opinionated settings and packages for the educational context. 
Initial customisation was done based on Laravel version 12.x. (12.37.0 on November 9th, 2025).
Updated to Laravel 13.x (13.7 on May 4th, 2026), including now also Laravel Boost.

- Added **barryvdh/laravel-debugbar** for debug info in the browser
- Altered **.env.example** for local development (SQLite database, debug mode on, cache and session set to file)
- Added **roave/security-advisories** to prevent installation of packages with known security issues
- Added **laravel/boost** for AI assisted code generation
- Used **laravel/breeze** for authentication scaffolding with Blade templates (but moved all of the component views to a `components.breeze` subfolder for better organization)
- Replaced vite and related front-end dependencies by **CDN includes of Tailwind CSS and Alpine JS** to keep things simple
- Replaced PHP Unit by **Pest PHP** for testing, kept basic example tests
- Some other small tweaks in configuration files, routes, controller, and view organisation to better reflect the educational purpose (rigid structure)

Everything that follows below (and the shields in the header) are part of the original Laravel README.md file.

---
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
