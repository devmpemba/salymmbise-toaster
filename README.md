# SalymMbise Toaster

A beautiful and colorful toast notification package for PHP and Laravel.  
Supports **info, success, warning, and danger** messages with smooth animations and modern UI.

---

## 🚀 Features

- Beautiful colored toast notifications  
- Icons for each toast type  
- Auto-dismiss animations  
- Works in **pure PHP** and **Laravel**  
- Easy to use API  
- Closes on click  
- Publishable assets (CSS + JS)  

---

## 📦 Installation

Install via Composer:

```bash
composer require salymmbise/toaster

```
💡 Usage in Plain PHP
use SalymMbise\Toaster\Toaster;

Toaster::success("Saved successfully!");
Toaster::danger("Something went wrong!");
Toaster::warning("Please check again!");
Toaster::info("This is an information message.");

echo Toaster::render();

Make sure you include this before your HTML </body> tag.

🎯 Usage in Laravel
Step 1: Publish assets
php artisan vendor:publish --tag=public

This will publish:

public/vendor/toaster/toaster.css
public/vendor/toaster/toaster.js


Step 2: Add toaster renderer in your layout

Place this before the closing </body> tag:

```blade
@toaster
```

Step 3: Trigger toasts from your controller

```php
use SalymMbise\Toaster\Toaster;

Toaster::success("Welcome!");
Toaster::info("Profile updated!");
Toaster::warning("Low balance!");
Toaster::danger("Something went wrong!");

```markdown
🎨 Available Toast Types
Method	Color	Example
Toaster::info()	Purple	Information messages
Toaster::success()	Green	Success actions
Toaster::warning()	Orange	Warnings
Toaster::danger()	Red	Errors or danger alerts
```

```markdown
📂 Folder Structure

src/
  Toaster.php
  ToasterServiceProvider.php
  Views/toast.php

public/
  toaster.css
  toaster.js

```markdown
📝 License

This package is open-source and licensed under the MIT License.
```

```markdown
✨ Author

Salym Mbise
📧 Email: salymdeveloper@gmail.com
🌍 Dar Es Salaam, Tanzania

❤️ Enjoy using SalymMbise Toaster!

Simple. Beautiful. Powerful.


---

If you want, I can also generate:

✅ `LICENSE` file  
✅ `CHANGELOG.md`  
✅ GitHub release description  
✅ Packagist optimized description  

Just say **"Generate license"** or **"Generate full package docs"**.