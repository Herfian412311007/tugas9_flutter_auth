# Tugas 10 - Flutter Authentication + API

Repository ini berisi project **Flutter** untuk autentikasi user dan integrasi dengan **API PHP (MySQL)**.  
Project ini terdiri dari dua bagian utama:

- **Flutter App** → folder `lib/` berisi halaman login, register, dan daftar user.
- **Backend API** → folder `flutter_api/` berisi script PHP untuk autentikasi dan manajemen user.

---

## 📂 Struktur Folder

tugas10_flutter_auth/
├── lib/
│ ├── pages/
│ │ ├── add_user_page.dart
│ │ ├── user_list_page.dart
│ │ └── homepage.dart
│ └── main.dart
├── flutter_api/
│ ├── config/
│ │ └── database.php
│ ├── user/
│ │ ├── add_user.php
│ │ └── get_user.php
│ └── auth/
│ ├── login.php
│ └── register.php
└── README.md
