<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Path Recommender - Admin Home</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Montserrat', Arial, sans-serif;
            background: linear-gradient(120deg, #aeefff 0%, #fceabb 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            color: #333;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            padding: 20px;
            box-sizing: border-box;
        }
        .header {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 40px 20px;
            margin-top: 20px;
            text-align: center;
        }
        .title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 5px;
            letter-spacing: 2px;
        }
        .title .path {
            color: #f76b1c;
        }
        .slogan {
            font-size: 1.2rem;
            color: #555;
        }
        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding-top: 20px;
        }
        .job-list-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            padding: 20px;
            width: 90%;
            max-width: 900px;
            margin-bottom: 20px;
        }
        .job-list-header {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .job-list {
            display: flex;
            overflow-x: scroll;
            gap: 20px;
            padding-bottom: 15px;
        }
        .job-card {
            min-width: 280px;
            background: #f4f4f4;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        .job-card:hover {
            transform: translateY(-5px);
        }
        .job-card h4 {
            margin: 0 0 5px 0;
            font-size: 1.2rem;
            color: #4a90e2;
        }
        .job-card p {
            margin: 0;
            font-size: 0.9rem;
            color: #666;
        }
        .cta-buttons {
            display: flex;
            flex-direction: column;
            width: 90%;
            max-width: 400px;
            margin-bottom: 20px;
        }
        .cta-buttons button {
            width: 100%;
            padding: 12px 0;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s;
            box-shadow: 0 2px 6px rgba(0,0,0,0.07);
        }
        .cta-buttons button:hover {
            transform: translateY(-2px);
        }
        .start-test-btn {
            background: linear-gradient(90deg, #4a90e2 0%, #f76b1c 100%);
            color: #fff;
        }
        .my-profile-btn {
            background: #fff;
            color: #4a90e2;
            border: 1px solid #4a90e2;
        }
        .logout-btn {
            background: #dc3545;
            color: #fff;
        }
        .footer {
            margin-top: auto;
            padding: 20px;
            text-align: center;
            color: #fff;
            width: 100%;
            background: rgba(0, 0, 0, 0.1);
        }
        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="title">
                JOB <span class="path">PARTNER</span>
            </div>
            <div class="slogan" style="font-size:1.7rem; color:#4a90e2; font-weight:700;">
                Welcome, Admin!
            </div>
            <div class="slogan">
                Your powerful tool to the perfect career path.
            </div>
        </div>
        <div class="main-content">
            <div class="cta-buttons">
                <a href="test.html" style="text-decoration: none;">
                    <button class="start-test-btn">⭐ Start Test</button>
                </a>
                <a href="profile.html" style="text-decoration: none;">
                    <button class="my-profile-btn">👤 My Profile</button>
                </a>
                <a href="admin-database.html" style="text-decoration: none;">
                    <button style="background:#b3e6ff;color:#333;font-size:1.1rem;border:none;border-radius:8px;padding:12px 0;margin-bottom:15px;font-weight:600;display:flex;align-items:center;justify-content:center;">
                        🛠️ Admin Tools
                    </button>
                </a>
                <a href="login.html" style="text-decoration: none;">
                    <button class="logout-btn">Log Out</button>
                </a>
            </div>
            <div class="job-list-container">
                <div class="job-list-header">
                    Featured Jobs for You
                </div>
                <div class="job-list">
                    <a href="apply.html?job=Software%20Engineer" style="text-decoration:none;color:inherit;">
                        <div class="job-card">
                            <h4>Software Engineer</h4>
                            <p>Company: Google Inc.</p>
                            <p>Location: Mountain View, CA</p>
                            <p>Skills: Python, C++, AWS</p>
                        </div>
                    </a>
                    <a href="apply.html?job=Data%20Scientist" style="text-decoration:none;color:inherit;">
                        <div class="job-card">
                            <h4>Data Scientist</h4>
                            <p>Company: Amazon</p>
                            <p>Location: Seattle, WA</p>
                            <p>Skills: R, Python, Machine Learning</p>
                        </div>
                    </a>
                    <a href="apply.html?job=UX%2FUI%20Designer" style="text-decoration:none;color:inherit;">
                        <div class="job-card">
                            <h4>UX/UI Designer</h4>
                            <p>Company: Adobe</p>
                            <p>Location: San Jose, CA</p>
                            <p>Skills: Figma, Sketch, Prototyping</p>
                        </div>
                    </a>
                    <a href="apply.html?job=Marketing%20Analyst" style="text-decoration:none;color:inherit;">
                        <div class="job-card">
                            <h4>Marketing Analyst</h4>
                            <p>Company: Meta</p>
                            <p>Location: Menlo Park, CA</p>
                            <p>Skills: SEO, SEM, Data Analysis</p>
                        </div>
                    </a>
                    <a href="apply.html?job=Product%20Manager" style="text-decoration:none;color:inherit;">
                        <div class="job-card">
                            <h4>Product Manager</h4>
                            <p>Company: Apple</p>
                            <p>Location: Cupertino, CA</p>
                            <p>Skills: Agile, Project Management</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <a href="#">About</a> ·
        <a href="#">Careers</a> ·
        <a href="#">Privacy</a> ·
        <a href="#">Terms</a> ·
        <a href="#">Contact</a>
        <br>
        © Job Partner, 2023
    </div>
</body>
</html>
