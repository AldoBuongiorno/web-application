# Web application

A web application that dynamically builds **personalized travel itineraries** based on user preferences collected through a short interactive survey.  
The project allows users to log in, view existing itineraries, and generate new ones automatically according to their answers.

---

## 🧭 Overview

The application offers a simple and intuitive interface for managing  vacations or trips.  
After completing a brief questionnaire, the system processes the responses and generates **customized travel itineraries** that match user preferences such as location type, budget, and duration.

Key features include:
- User authentication and personal profile
- Dynamic itinerary generation based on survey responses
- Visualization of existing itineraries
- Clean and responsive design

---

## 🏗️ Technologies Used

| Component | Technology |
|------------|-------------|
| **Frontend** | HTML, CSS, JavaScript |
| **Backend** | PHP |
| **Architecture** | Classic LAPP-style web app |
| **Dynamic logic** | JavaScript + PHP integration |

---

## ⚙️ How It Works

1. **Home Page:**  
   Entry point with navigation options to access login or profile sections.

2. **User Profile:**  
   Displays itineraries previously created or saved.

3. **Survey Section:**  
   The user answers a short questionnaire about travel preferences (destination type, activities, budget, duration, etc.).

4. **Dynamic Itinerary Generation:**  
   The server processes survey responses through PHP logic and constructs a travel itinerary automatically.

5. **Display Results:**  
   The generated itinerary is displayed dynamically on the web page and can be stored for later access.

---

## 🚀 Getting Started

Follow these steps to run the project locally.

### 1️⃣ Clone the repository
Clone the project from GitHub using the command below:
```bash
git clone https://github.com/AldoBuongiorno/web-application.git
```

### 2️⃣ Move the project into your web server directory
If you are using XAMPP (Windows/Mac) or Apache (Linux):
- Place the folder inside your web root directory:
  -  Windows: `C:\xampp\htdocs\`
  - Linux/Mac: `/var/www/html/`

### 3️⃣ Start Apache (or your preferred web server)
- Open the XAMPP Control Panel
- Start the Apache module

Your local server should now be running.

### 4️⃣ Open the project in your browser 
Visit the following URL in your browser: `http://localhost/<repo-name>`

### 5️⃣ (Optional) Configure PHP settings
Make sure PHP is enabled in your environment (it is by default with XAMPP).

---

## 👨‍💻 Author
Designed and developed by Aldo Buongiorno, Salvatore Francesco Tartaglione, Raffaele Calabrese, Christian Rosa

---

## 🪪 License
This project is released without a license.
All rights reserved unless otherwise stated.
