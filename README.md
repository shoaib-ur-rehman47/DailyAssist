# 📅 DailyAssist

**DailyAssist** is a versatile task and schedule management application designed to help you keep track of the work you've completed and plan the work you're about to do. Built to act as your personal assistant, it remembers your pending tasks and helps you organize your busy days into a clear, manageable schedule.

---

## ✨ Features

- **Task Tracking** — Log the work you've done, so nothing gets forgotten or duplicated.
- **Smart Scheduling** — Plan upcoming tasks and organize them into a structured daily/weekly schedule.
- **Task Reminders** — Stay on top of pending work with a built-in reminder system.
- **Progress Overview** — Get a quick snapshot of completed vs. pending tasks at a glance.
- **Simple & Intuitive UI** — Focused on usability so you spend less time managing the app and more time being productive.

---

## 🛠️ Tech Stack

| Component     | Technology       |
|----------------|------------------|
| Framework      | Laravel 13       |
| Language       | PHP              |
| Database       | MySQL            |
| Frontend       | Blade / Tailwind CSS |
| Package Manager| Composer, npm    |

---

## 🚀 Getting Started

### Prerequisites

Make sure you have the following installed on your system:

- PHP >= 8.3
- Composer
- MySQL
- Node.js & npm

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/dailyassist.git
   cd dailyassist
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install frontend dependencies**
   ```bash
   npm install
   npm run build
   ```

4. **Set up environment file**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your database**

   Update the `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=dailyassist
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Serve the application**
   ```bash
   php artisan serve
   ```

   Visit `http://127.0.0.1:8000` in your browser to see DailyAssist in action.

---

## 📖 Usage

Once the application is running:

1. **Log In / Register** to create your personal workspace.
2. **Add a Task** — describe the work you need to do, along with a due date.
3. **Mark Tasks as Done** — keep a record of completed work for future reference.
4. **View Your Schedule** — see your upcoming tasks organized by day, so you always know what's next.

---

## 🗺️ Roadmap

- [ ] Calendar view for visual scheduling
- [ ] Email/notification reminders
- [ ] Task categories and priority tags
- [ ] Analytics dashboard for productivity insights
- [ ] Mobile-responsive design improvements

---

## 🤝 Contributing

Contributions are welcome! If you'd like to improve DailyAssist:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/your-feature-name`)
3. Commit your changes (`git commit -m "Add your feature"`)
4. Push to the branch (`git push origin feature/your-feature-name`)
5. Open a Pull Request

---

## 📄 License

This project is open-sourced software licensed under the [MIT license](LICENSE).

---

## 👤 Author

Developed as part of a personal/academic project by **shoaib-ur-rehman47 (Guru)**.

> *DailyAssist — because a well-organized day starts with a well-organized mind.*
