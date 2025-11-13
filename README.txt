🟢 TIMONEY – AI Powered Personal Finance Dashboard

Timoney is a modern, AI-assisted personal finance dashboard built using
HTML, CSS, JavaScript, PHP, MySQL & Ollama AI.

It helps users analyse expenses, calculate EMI, track savings goals, estimate credit score, and interact with an AI assistant for financial tips.
All features run locally using XAMPP + PHP + MySQL + Ollama.

🚀 Features
✅ 1. User Authentication

Secure Login & Registration

LocalStorage-based quick welcome

PHP backend validation

✅ 2. Expense Analyzer

Rent, Food, Travel, Bills, Shopping inputs

Automatic total calculations

Savings % computation

Pie-chart visualisation (Chart.js)

✅ 3. Saving Goal Tracker

Target vs Saved amount

Animated progress bar

✅ 4. EMI Calculator

Monthly EMI

Total interest

Total payable amount

✅ 5. Credit Score Estimator

Uses income–expense ratio

Loan count impacts

Generates estimated credit score (300-850)

✅ 6. Finance Insights Panel

Slides in/out

Shows real-time highlights, news, crypto, bank rates

✅ 7. AI Assistant (Ollama)

Natural language queries

Local LLM using Ollama

Connects via ai_ollama.php

🛠 Technology Stack
Layer	Technology
Frontend	HTML, CSS, JavaScript
Charts	Chart.js
Backend	PHP
Database	MySQL
AI Engine	Ollama (local LLM)
Server	XAMPP (Apache + MySQL)
📂 Project Structure
Timoney/
│── public/
│    ├── index.html
│    ├── dashboard.html
│    ├── assets/
│    │    ├── css/style.css
│    │    └── img/
│    ├── ai_ollama.php
│    ├── login.php (optional)
│── database/
│    └── timoney.sql
│── README.md

⚡ Quick Setup Guide
1️⃣ Copy Project Folder

Place the full Timoney folder inside:

C:/xampp/htdocs/

2️⃣ Create Database

Open phpMyAdmin → Import:

database/timoney.sql


This will create required tables.

3️⃣ Update Credentials (if needed)

Inside your PHP files:

$host = "localhost";
$user = "root";
$pass = "";
$db   = "timoney";

4️⃣ Start Apache & MySQL in XAMPP

Both must be running.
Otherwise PHP + database won’t work.

5️⃣ Open Project
http://localhost/Timoney/public/index.html

6️⃣ Register → Login → Access Dashboard

✔ Expense Analyzer
✔ EMI Calculator
✔ Credit Score
✔ Reports
✔ AI Assistant

7️⃣ Enable AI Assistant (Ollama)

You must install Ollama:

👉 https://ollama.com/download

Then run in terminal:

ollama run llama3.2


OR download other models.

If running on a different port or IP →
update this in ai_ollama.php:

http://127.0.0.1:11434/api/generate

📸 Screenshots



🔗 Project Link

https://github.com/TIMIKIOP/TIMONEY

👤 Author

Utkarsh Thori (TIMIKIOP)
B.Tech CSE, VIT Vellore
AI & Software Development Enthusiast

⭐ If you like this project

Star 🌟 the repository and share!
