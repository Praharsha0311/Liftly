# **Liftly**  

*Inspiring People to Lift Others' Lives*  

Liftly is a donation and fundraising platform built to bridge the gap between donors and people in need. With an intuitive interface and robust backend, Liftly ensures transparency and ease of use for everyone involved.  


## 📋 **Prerequisites**  

1. Install [XAMPP](https://www.apachefriends.org/index.html) as a local server.  
2. Use any text editor (recommended: **VS Code** or **Notepad++**).  
3. Open the application in any modern web browser (e.g., **Google Chrome**).  

---

## 💻 **Languages and Technologies Used**  
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap  
- **Backend**: PHP  
- **Database**: MySQL (via XAMPP)  
- **Libraries**: jQuery (for interactive tables and components)  

---

## 🚀 **Steps to Run the Project**  

### 1. **Setup Environment**  
- Download and install **XAMPP**.  
- Clone or download the repository to your local machine.  
- Extract the files and move them to the `htdocs` folder in the XAMPP directory.  

### 2. **Database Setup**  
- Open XAMPP Control Panel and start **Apache** and **MySQL**.  
- Go to `http://localhost/phpmyadmin` in your browser.  
- Create a new database named `liftly`.  
- Import the `liftly.sql` file into the database.  

### 3. **Run the Application**  
- Open a web browser and navigate to:  
  ```
  http://localhost/liftly/
  ```

🎉 **Congratulations! The application is ready to use!**  

---

## 🏗️ **Modules Overview**  

### **1. Home Module**  
- Landing page for the platform showcasing its purpose and vision.  

### **2. Donation Module**  
- Users can register and log in to make donations securely.  
- Track donation history and view active campaigns.  

### **3. Admin Module**  
- Manage donations, users, and campaigns.  
- View detailed donation reports and analytics.  

### **4. Feedback Module**  
- Users can provide feedback and suggestions about the platform.  
- Admins can review and act upon the feedback.

---

## 📂 **Project Structure**  
```
/liftly
    |-- index.php        # Homepage
    |-- donate.php       # Handles donation logic
    |-- header.php       # Dynamic header
    |-- footer.php       # Dynamic footer
    |-- db_config.php    # Database connection setup
    |-- liftly.sql       # Database schema
    |-- /assets          # CSS, JS, and images
```

---

## 🔍 **Features Breakdown**  

### **User Features**  
1. **Register & Login**: Users can create an account to manage their donations.  
2. **Donate**: Contribute to active campaigns seamlessly.  
3. **View Donation History**: Keep track of past donations.  
4. **Feedback**: Provide suggestions and feedback to the platform admins.  

### **Admin Features**  
1. **Manage Campaigns**: Add, edit, or delete fundraising campaigns.  
2. **View Donations**: Access detailed reports of all donations.  
3. **Respond to Feedback**: Act upon user suggestions and complaints.  

---

## 🖼️ **Screenshots**  

### Homepage  
*(Add a screenshot of your homepage)*  

### Donation Page  
*(Add a screenshot of the donation page)*  

### Database Setup  
*(Include a screenshot of your database structure)*  

---

## 🖇️ **Software Used**  
- **XAMPP**: Web server (Apache2) and database server (MySQL).  
- **VS Code**: For editing and managing the code.  
- **Google Chrome**: For running the project in a browser.  

---

## 📜 **How to Contribute**  
We welcome contributions to Liftly!  
1. Fork the repository.  
2. Create a new branch:  
   ```bash
   git checkout -b feature-name
   ```  
3. Commit your changes:  
   ```bash
   git commit -m "Add feature-name"
   ```  
4. Push to the branch:  
   ```bash
   git push origin feature-name
   ```  
5. Open a pull request for review.  

---

## ✉️ **Contact**  
For any queries or feedback, feel free to contact:  
- **Your Name**: [your.email@example.com](mailto:your.email@example.com)  

---

Let me know if you'd like to make any adjustments or include more details!
