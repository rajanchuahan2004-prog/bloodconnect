<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodConnect - Donate & Request Blood</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #c20c0c;
            --secondary: #f8f8f8;
            --dark: #333;
            --light: #fff;
            --accent: #ffcc00;
            --urgent: #ff4444;
            --success: #28a745;
        }

        body {
            background-color: var(--secondary);
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 0;
        }

        /* Header Styles */
        header {
            background-color: var(--primary);
            color: var(--light);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            font-size: 2rem;
        }

        .logo h1 {
            font-size: 1.8rem;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: var(--light);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 5px 10px;
            border-radius: 4px;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1579165466749-565dab744fa3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: var(--light);
            padding: 100px 0;
            text-align: center;
        }

        .hero-content h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .hero-content p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--light);
        }

        .btn-secondary {
            background-color: var(--light);
            color: var(--primary);
        }

        .btn-urgent {
            background-color: var(--urgent);
            color: var(--light);
            animation: pulse 2s infinite;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* Stats Section */
        .stats {
            background-color: var(--primary);
            color: var(--light);
            padding: 60px 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stat-item {
            padding: 20px;
        }

        .stat-item i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: var(--accent);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 10px 0;
        }

        /* Section Title */
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: var(--primary);
            font-size: 2.2rem;
            position: relative;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--primary);
            margin: 10px auto;
        }

        /* Info Section */
        .info {
            padding: 80px 0;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .info-card {
            background-color: var(--light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-10px);
        }

        .info-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .info-card-content {
            padding: 20px;
        }

        .info-card h3 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        /* Eligibility Section */
        .eligibility {
            background-color: var(--light);
            padding: 80px 0;
        }

        .eligibility-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            align-items: center;
        }

        .eligibility-list {
            list-style: none;
        }

        .eligibility-list li {
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
        }

        .eligibility-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }

        .eligibility-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .eligibility-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Process Section */
        .process {
            padding: 80px 0;
            background-color: var(--secondary);
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            counter-reset: step-counter;
        }

        .step {
            background-color: var(--light);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .step:before {
            counter-increment: step-counter;
            content: counter(step-counter);
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            background-color: var(--primary);
            color: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .step i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        /* Forms */
        .donor-registration, .need-blood {
            padding: 80px 0;
        }

        .donor-registration {
            background-color: var(--light);
        }

        .need-blood {
            background-color: var(--secondary);
        }

        .registration-form, .request-form {
            max-width: 800px;
            margin: 0 auto;
            background-color: var(--light);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .submit-btn {
            background-color: var(--primary);
            color: var(--light);
            border: none;
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: #a00;
            transform: translateY(-3px);
        }

        /* Urgent Requests */
        .urgent-requests {
            background-color: #fff5f5;
            border-left: 5px solid var(--urgent);
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .urgent-requests h3 {
            color: var(--urgent);
            margin-bottom: 15px;
        }

        .request-list {
            list-style: none;
        }

        .request-list li {
            padding: 15px;
            background-color: var(--light);
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .blood-type {
            background-color: var(--primary);
            color: var(--light);
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
        }

        .urgent-tag {
            background-color: var(--urgent);
            color: var(--light);
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            margin-left: 10px;
        }

        /* Messages */
        .message {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: var(--light);
            padding: 60px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            color: var(--accent);
            margin-bottom: 20px;
            font-size: 1.3rem;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: var(--light);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-column ul li a:hover {
            color: var(--accent);
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: var(--light);
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero-content h2 {
                font-size: 2.2rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 80%;
                text-align: center;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-content">
            <div class="logo">
                <i class="fas fa-tint"></i>
                <h1>BloodConnect</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#why-donate">Why Donate</a></li>
                    <li><a href="#eligibility">Eligibility</a></li>
                    <li><a href="#process">Process</a></li>
                    <li><a href="#donor-registration">Become a Donor</a></li>
                    <li><a href="#need-blood">Need Blood</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <h2>Your Blood Can Save a Life</h2>
            <p>Every two seconds, someone needs blood. Your donation can make a difference between life and death for patients in need.</p>
            <div class="hero-buttons">
                <a href="#donor-registration" class="btn btn-primary">Become a Donor</a>
                <a href="#need-blood" class="btn btn-urgent">Need Blood Urgently</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container stats-grid">
            <div class="stat-item">
                <i class="fas fa-users"></i>
                <div class="stat-number">1 in 7</div>
                <p>hospital patients need a blood transfusion</p>
            </div>
            <div class="stat-item">
                <i class="fas fa-clock"></i>
                <div class="stat-number">Every 2 sec</div>
                <p>someone needs blood</p>
            </div>
            <div class="stat-item">
                <i class="fas fa-tint"></i>
                <div class="stat-number">1 donation</div>
                <p>can save up to 3 lives</p>
            </div>
            <div class="stat-item">
                <i class="fas fa-calendar"></i>
                <div class="stat-number">56 days</div>
                <p>how often you can donate blood</p>
            </div>
        </div>
    </section>

    <!-- Why Donate Section -->
    <section class="info" id="why-donate">
        <div class="container">
            <h2 class="section-title">Why Donate Blood?</h2>
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-card-content">
                        <h3>Save Lives</h3>
                        <p>Your blood donation can help trauma patients, surgery patients, cancer patients, and those with chronic illnesses.</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card-content">
                        <h3>Health Benefits</h3>
                        <p>Regular blood donation can help reduce harmful iron stores, lower risk of heart disease, and burn calories.</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card-content">
                        <h3>Community Impact</h3>
                        <p>Blood donations strengthen community resilience and ensure hospitals have adequate supplies for emergencies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility Section -->
    <section class="eligibility" id="eligibility">
        <div class="container">
            <h2 class="section-title">Are You Eligible to Donate?</h2>
            <div class="eligibility-content">
                <div>
                    <h3>Basic Requirements</h3>
                    <ul class="eligibility-list">
                        <li>Be in good general health and feeling well</li>
                        <li>Be at least 17 years old in most states</li>
                        <li>Weigh at least 110 pounds</li>
                        <li>Not have donated blood in the last 8 weeks (56 days)</li>
                        <li>Have a valid ID with photo or signature</li>
                        <li>Have not gotten a tattoo in the last 3 months</li>
                        <li>Have not traveled to malaria-risk areas recently</li>
                    </ul>
                    <p style="margin-top: 20px; font-style: italic;">Some medical conditions or medications may temporarily or permanently prevent you from donating blood.</p>
                </div>
                <div class="eligibility-image">
                    <img src="https://images.unsplash.com/photo-1591035897819-f4bdf739f446?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Blood donation eligibility">
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process" id="process">
        <div class="container">
            <h2 class="section-title">The Donation Process</h2>
            <div class="process-steps">
                <div class="step">
                    <i class="fas fa-clipboard-list"></i>
                    <h3>Registration</h3>
                    <p>You'll complete a donor registration form with your personal information and medical history.</p>
                </div>
                <div class="step">
                    <i class="fas fa-stethoscope"></i>
                    <h3>Health Check</h3>
                    <p>A quick health screening checks your temperature, pulse, blood pressure, and hemoglobin levels.</p>
                </div>
                <div class="step">
                    <i class="fas fa-tint"></i>
                    <h3>Donation</h3>
                    <p>The actual blood donation takes about 8-10 minutes. You'll be seated comfortably during this time.</p>
                </div>
                <div class="step">
                    <i class="fas fa-cookie-bite"></i>
                    <h3>Refreshment</h3>
                    <p>After donating, you'll enjoy refreshments to help your body adjust to the slight decrease in fluid.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Donor Registration Section -->
    <section class="donor-registration" id="donor-registration">
        <div class="container">
            <h2 class="section-title">Become a Blood Donor</h2>
            <div class="registration-form">
                <?php
                // Display success or error messages
                if (isset($_GET['status'])) {
                    if ($_GET['status'] == 'success') {
                        echo '<div class="message success">Thank you for registering as a donor! We will contact you soon.</div>';
                    } elseif ($_GET['status'] == 'error') {
                        echo '<div class="message error">There was an error processing your registration. Please try again.</div>';
                    }
                }
                ?>
                <form action="register_donor.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="fullName">Full Name *</label>
                            <input type="text" id="fullName" name="fullName" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="bloodType">Blood Type *</label>
                            <select id="bloodType" name="bloodType" required>
                                <option value="">Select Blood Type</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="age">Age *</label>
                            <input type="number" id="age" name="age" min="17" max="65" required>
                        </div>
                        <div class="form-group">
                            <label for="weight">Weight (kg) *</label>
                            <input type="number" id="weight" name="weight" min="50" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address *</label>
                        <textarea id="address" name="address" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="city">City *</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label for="lastDonation">Last Donation Date (if any)</label>
                        <input type="date" id="lastDonation" name="lastDonation">
                    </div>
                    <button type="submit" class="submit-btn">Register as Donor</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Need Blood Section -->
    <section class="need-blood" id="need-blood">
        <div class="container">
            <h2 class="section-title">Need Blood?</h2>
            <div class="need-blood-content">
                <div style="margin-bottom: 40px;">
                    <div class="urgent-requests">
                        <h3><i class="fas fa-exclamation-triangle"></i> Urgent Blood Requests</h3>
                        <ul class="request-list">
                            <?php
                            // Display urgent blood requests from database
                            // This would typically come from a database query
                            $urgentRequests = [
                                ["type" => "O+", "reason" => "Type O+ needed", "urgent" => true],
                                ["type" => "A-", "reason" => "Emergency surgery", "urgent" => true],
                                ["type" => "B+", "reason" => "Accident victim", "urgent" => false],
                                ["type" => "AB-", "reason" => "Child with thalassemia", "urgent" => false]
                            ];
                            
                            foreach ($urgentRequests as $request) {
                                echo '<li>';
                                echo '<div>';
                                echo '<strong>' . $request['reason'] . '</strong>';
                                if ($request['urgent']) {
                                    echo '<span class="urgent-tag">URGENT</span>';
                                }
                                echo '</div>';
                                echo '<div class="blood-type">' . $request['type'] . '</div>';
                                echo '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <h3>How to Request Blood</h3>
                    <ol class="eligibility-list">
                        <li>Contact our emergency helpline for urgent needs</li>
                        <li>Submit a blood request form with patient details</li>
                        <li>Provide required blood type and quantity</li>
                        <li>We'll match you with available donors in your area</li>
                        <li>Coordinate blood transfusion at a hospital</li>
                    </ol>
                    <div style="margin-top: 20px;">
                        <h4>Emergency Helpline</h4>
                        <p><i class="fas fa-phone"></i> 1-800-BLOOD-HELP (1-800-256-3435)</p>
                        <p>Available 24/7 for urgent blood requirements</p>
                    </div>
                </div>
                <div class="request-form">
                    <?php
                    // Display success or error messages for blood requests
                    if (isset($_GET['request_status'])) {
                        if ($_GET['request_status'] == 'success') {
                            echo '<div class="message success">Your blood request has been submitted! We will contact you soon.</div>';
                        } elseif ($_GET['request_status'] == 'error') {
                            echo '<div class="message error">There was an error processing your request. Please try again.</div>';
                        }
                    }
                    ?>
                    <h3>Request Blood Online</h3>
                    <form action="request_blood.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="patientName">Patient Name *</label>
                                <input type="text" id="patientName" name="patientName" required>
                            </div>
                            <div class="form-group">
                                <label for="contactPerson">Contact Person *</label>
                                <input type="text" id="contactPerson" name="contactPerson" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contactPhone">Phone Number *</label>
                                <input type="tel" id="contactPhone" name="contactPhone" required>
                            </div>
                            <div class="form-group">
                                <label for="bloodTypeNeeded">Blood Type Needed *</label>
                                <select id="bloodTypeNeeded" name="bloodTypeNeeded" required>
                                    <option value="">Select Blood Type</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hospital">Hospital Name *</label>
                            <input type="text" id="hospital" name="hospital" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="unitsNeeded">Units Needed *</label>
                                <input type="number" id="unitsNeeded" name="unitsNeeded" min="1" required>
                            </div>
                            <div class="form-group">
                                <label for="urgency">Urgency Level *</label>
                                <select id="urgency" name="urgency" required>
                                    <option value="">Select Urgency</option>
                                    <option value="normal">Normal</option>
                                    <option value="urgent">Urgent</option>
                                    <option value="critical">Critical</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="additionalInfo">Additional Information</label>
                            <textarea id="additionalInfo" name="additionalInfo" rows="3"></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Submit Blood Request</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>BloodConnect</h3>
                    <p>We connect blood donors with recipients, saving lives one donation at a time.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#why-donate">Why Donate</a></li>
                        <li><a href="#eligibility">Eligibility</a></li>
                        <li><a href="#process">Process</a></li>
                        <li><a href="#donor-registration">Become a Donor</a></li>
                        <li><a href="#need-blood">Need Blood</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 123 Health Street, Medical City</li>
                        <li><i class="fas fa-phone"></i> (555) 123-4567</li>
                        <li><i class="fas fa-envelope"></i> info@bloodconnect.org</li>
                        <li><i class="fas fa-clock"></i> Mon-Fri: 9AM-5PM</li>
                        <li><i class="fas fa-ambulance"></i> Emergency: 1-800-BLOOD-HELP</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 BloodConnect. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // FAQ Accordion Functionality (if needed in the future)
        document.querySelectorAll('.faq-question')?.forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                faqItem.classList.toggle('active');
            });
        });
    </script>
</body>
</html>