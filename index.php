<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunziQHub - Premium Food Delivery Services | Fresh Meals Delivered Fast</title>
    <meta name="description" content="FunziQHub delivers fresh, delicious meals straight to your door. Experience our wide variety of cuisines from local restaurants with fast, reliable delivery service. Click here to continue exploring our amazing food options and start your culinary journey today!">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-container-xyz789 {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .header-section-abc123 {
            background: rgba(255, 255, 255, 0.95);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-container-def456 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-ghi789 {
            font-size: 2rem;
            font-weight: bold;
            color: #e74c3c;
            text-decoration: none;
        }

        .navigation-menu-jkl012 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-mno345 {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-link-mno345:hover {
            color: #e74c3c;
        }

        .hero-banner-pqr678 {
            margin-top: 80px;
            padding: 4rem 2rem;
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg');
            background-size: cover;
            background-position: center;
            color: white;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .hero-title-stu901 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-vwx234 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .cta-button-yz567 {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-yz567:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }

        .content-section-abc890 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section-block-def123 {
            background: white;
            margin: 3rem 0;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .section-title-ghi456 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .section-content-jkl789 {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .features-grid-mno012 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .feature-card-pqr345 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .feature-card-pqr345:hover {
            transform: translateY(-5px);
        }

        .feature-icon-stu678 {
            width: 80px;
            height: 80px;
            margin: 0 auto 1rem;
            border-radius: 50%;
            background: #e74c3c;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .reviews-container-vwx901 {
            background: #f8f9fa;
            padding: 4rem 2rem;
        }

        .review-card-yz234 {
            background: white;
            padding: 2rem;
            margin: 1rem 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .reviewer-name-abc567 {
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 0.5rem;
        }

        .review-stars-def890 {
            color: #f39c12;
            margin-bottom: 1rem;
        }

        .history-timeline-ghi123 {
            position: relative;
            padding: 2rem 0;
        }

        .timeline-item-jkl456 {
            background: white;
            padding: 2rem;
            margin: 2rem 0;
            border-left: 4px solid #e74c3c;
            border-radius: 0 10px 10px 0;
        }

        .timeline-year-mno789 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .footer-section-pqr012 {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-content-stu345 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-column-vwx678 {
            margin-bottom: 2rem;
        }

        .footer-title-yz901 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #e74c3c;
        }

        .contact-link-abc234 {
            color: #ecf0f1;
            text-decoration: none;
            display: block;
            margin: 0.5rem 0;
        }

        .contact-link-abc234:hover {
            color: #e74c3c;
        }

        .modal-overlay-def567 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-ghi890 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .close-button-jkl123 {
            float: right;
            font-size: 2rem;
            cursor: pointer;
            color: #e74c3c;
        }

        .image-gallery-mno456 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .gallery-image-pqr789 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .continue-button-stu012 {
            background: #27ae60;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            margin: 1rem 0;
            transition: all 0.3s ease;
        }

        .continue-button-stu012:hover {
            background: #229954;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .hero-title-stu901 {
                font-size: 2.5rem;
            }
            
            .navigation-menu-jkl012 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav-container-def456 {
                flex-direction: column;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
    
<body class="main-container-xyz789">
    <header class="header-section-abc123">
        <nav class="nav-container-def456">
            <a href="#home" class="logo-brand-ghi789">FunziQHub</a>
            <ul class="navigation-menu-jkl012">
                <li><a href="#home" class="nav-link-mno345">Home</a></li>
                <li><a href="#services" class="nav-link-mno345">Our Services</a></li>
                <li><a href="#cuisine" class="nav-link-mno345">Cuisine Types</a></li>
                <li><a href="#delivery" class="nav-link-mno345">Delivery Zones</a></li>
                <li><a href="#history" class="nav-link-mno345">Our Story</a></li>
                <li><a href="#testimonials" class="nav-link-mno345">Reviews</a></li>
                <li><a href="#contact" class="nav-link-mno345">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero-banner-pqr678">
        <h1 class="hero-title-stu901">Delicious Food Delivered Fast</h1>
        <p class="hero-subtitle-vwx234">Experience the finest culinary delights from local restaurants delivered straight to your doorstep with our reliable and efficient delivery service</p>
        <button class="cta-button-yz567" onclick="scrollToSection('services')">Order Now</button>
    </section>

    <div class="content-section-abc890">
        <section id="services" class="section-block-def123">
            <h2 class="section-title-ghi456">Our Food Delivery Services</h2>
            <div class="section-content-jkl789">
                <p>At FunziQHub, we revolutionize the way you experience food delivery. Our comprehensive platform connects you with the most authentic restaurants in your area, ensuring every meal is a memorable experience. We understand that great food brings people together, and our mission is to make exceptional dining accessible to everyone.</p>
                
                <button class="continue-button-stu012" onclick="showMoreServices()">Click Here to Continue Reading</button>
                
                <div class="features-grid-mno012">
                    <div class="feature-card-pqr345">
                        <div class="feature-icon-stu678">🚚</div>
                        <h3>Lightning Fast Delivery</h3>
                        <p>Our advanced logistics network ensures your food arrives hot and fresh within 30 minutes or less</p>
                    </div>
                    <div class="feature-card-pqr345">
                        <div class="feature-icon-stu678">🍽️</div>
                        <h3>Restaurant Quality</h3>
                        <p>We partner only with certified kitchens that meet our strict quality and hygiene standards</p>
                    </div>
                    <div class="feature-card-pqr345">
                        <div class="feature-icon-stu678">📱</div>
                        <h3>Easy Ordering</h3>
                        <p>Our user-friendly platform makes ordering your favorite meals simple and convenient</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="cuisine" class="section-block-def123">
            <h2 class="section-title-ghi456">Diverse Cuisine Selection</h2>
            <div class="section-content-jkl789">
                <p>Explore a world of flavors with our extensive collection of international and local cuisines. From traditional comfort foods to exotic international dishes, we have something to satisfy every palate and dietary preference.</p>
                
                <div class="image-gallery-mno456">
                    <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg" alt="Asian Cuisine" class="gallery-image-pqr789">
                    <img src="https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg" alt="Italian Food" class="gallery-image-pqr789">
                    <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg" alt="Mexican Dishes" class="gallery-image-pqr789">
                    <img src="https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg" alt="Burger Selection" class="gallery-image-pqr789">
                </div>
                
                <p>Our culinary experts work tirelessly to curate a menu that represents the authentic flavors of each cuisine type. Whether you're craving spicy Asian stir-fries, hearty Mediterranean dishes, or classic American comfort food, our restaurant partners deliver exceptional quality every time.</p>
                
                <button class="continue-button-stu012" onclick="expandCuisineInfo()">Click Here to Continue Exploring</button>
            </div>
        </section>

        <section id="delivery" class="section-block-def123">
            <h2 class="section-title-ghi456">Comprehensive Delivery Network</h2>
            <div class="section-content-jkl789">
                <p>Our extensive delivery network covers metropolitan areas and suburban neighborhoods, ensuring that delicious food is never more than a few clicks away. We've strategically positioned our fulfillment centers to optimize delivery times and maintain food quality throughout the journey.</p>
                
                <p>Our delivery zones include downtown business districts, residential communities, university campuses, and office complexes. We utilize advanced route optimization technology to ensure the most efficient delivery paths, reducing wait times and maintaining optimal food temperature.</p>
                
                <p>Each delivery vehicle is equipped with temperature-controlled compartments and GPS tracking systems, allowing customers to monitor their order in real-time. Our delivery professionals undergo comprehensive training in food safety protocols and customer service excellence.</p>
                
                <button class="continue-button-stu012" onclick="showDeliveryDetails()">Click Here to Continue Learning</button>
            </div>
        </section>

        <section id="history" class="section-block-def123">
            <h2 class="section-title-ghi456">Our Journey & Company History</h2>
            <div class="section-content-jkl789">
                <div class="history-timeline-ghi123">
                    <div class="timeline-item-jkl456">
                        <div class="timeline-year-mno789">2018</div>
                        <h4>The Beginning</h4>
                        <p>FunziQHub was founded by three college friends who shared a passion for great food and technology. Starting with just five local restaurants, we began our mission to revolutionize food delivery in our hometown.</p>
                    </div>
                    
                    <div class="timeline-item-jkl456">
                        <div class="timeline-year-mno789">2019</div>
                        <h4>Rapid Expansion</h4>
                        <p>Within our first year, we expanded to serve over 50 restaurants and launched our mobile application. Our innovative approach to logistics and customer service quickly gained recognition in the local market.</p>
                    </div>
                    
                    <div class="timeline-item-jkl456">
                        <div class="timeline-year-mno789">2020</div>
                        <h4>Technology Innovation</h4>
                        <p>During the challenging times of 2020, we invested heavily in contactless delivery technology and AI-powered route optimization. This allowed us to maintain safe, efficient service while supporting local restaurants.</p>
                    </div>
                    
                    <div class="timeline-item-jkl456">
                        <div class="timeline-year-mno789">2021</div>
                        <h4>Regional Growth</h4>
                        <p>We expanded our operations to multiple cities, establishing partnerships with over 200 restaurants and building a network of dedicated delivery professionals committed to excellence.</p>
                    </div>
                    
                    <div class="timeline-item-jkl456">
                        <div class="timeline-year-mno789">2022</div>
                        <h4>Sustainability Focus</h4>
                        <p>Launched our green delivery initiative, introducing electric vehicles and eco-friendly packaging solutions. We became the first carbon-neutral food delivery service in our region.</p>
                    </div>
                    
                    <div class="timeline-item-jkl456">
                        <div class="timeline-year-mno789">2023</div>
                        <h4>Community Impact</h4>
                        <p>Established the FunziQHub Community Kitchen program, supporting local food entrepreneurs and providing meal assistance to underserved communities through our platform.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="section-block-def123">
            <h2 class="section-title-ghi456">Customer Testimonials</h2>
            <div class="section-content-jkl789">
                <div class="review-card-yz234">
                    <div class="reviewer-name-abc567">Sarah Mitchell</div>
                    <div class="review-stars-def890">★★★★★</div>
                    <p>"FunziQHub has completely transformed my dining experience. The food always arrives hot and fresh, and the variety of restaurants available is incredible. Their customer service team is responsive and helpful whenever I have questions."</p>
                </div>
                
                <div class="review-card-yz234">
                    <div class="reviewer-name-abc567">Marcus Rodriguez</div>
                    <div class="review-stars-def890">★★★★★</div>
                    <p>"As a busy professional, FunziQHub saves me so much time. The app is intuitive, delivery is consistently fast, and I love being able to track my order in real-time. The quality of food from their partner restaurants is outstanding."</p>
                </div>
                
                <div class="review-card-yz234">
                    <div class="reviewer-name-abc567">Jennifer Chen</div>
                    <div class="review-stars-def890">★★★★★</div>
                    <p>"I've been using FunziQHub for over two years, and they never disappoint. The delivery drivers are professional and courteous, and I appreciate their commitment to eco-friendly packaging. Highly recommend!"</p>
                </div>
                
                <div class="review-card-yz234">
                    <div class="reviewer-name-abc567">David Thompson</div>
                    <div class="review-stars-def890">★★★★★</div>
                    <p>"The convenience and reliability of FunziQHub is unmatched. Whether I'm ordering lunch for the office or dinner for my family, they consistently deliver exceptional service and delicious food."</p>
                </div>
                
                <button class="continue-button-stu012" onclick="loadMoreReviews()">Click Here to Continue Reading Reviews</button>
            </div>
        </section>

        <section class="section-block-def123">
            <h2 class="section-title-ghi456">Quality Assurance & Food Safety</h2>
            <div class="section-content-jkl789">
                <p>Food safety is our top priority at FunziQHub. We maintain rigorous standards throughout our entire supply chain, from restaurant partner selection to final delivery. Our quality assurance team conducts regular inspections and audits to ensure compliance with health department regulations and our own elevated standards.</p>
                
                <p>Every restaurant partner must complete our comprehensive certification program, which covers food handling procedures, packaging protocols, and temperature maintenance requirements. We provide ongoing training and support to ensure consistent quality across all our partner establishments.</p>
                
                <p>Our delivery vehicles are sanitized regularly, and our drivers follow strict hygiene protocols. We use insulated bags and containers designed to maintain optimal food temperature during transport, ensuring your meal arrives as fresh as when it left the kitchen.</p>
            </div>
        </section>

        <section class="section-block-def123">
            <h2 class="section-title-ghi456">Technology & Innovation</h2>
            <div class="section-content-jkl789">
                <p>At the heart of FunziQHub's success is our commitment to technological innovation. Our proprietary algorithms analyze traffic patterns, weather conditions, and order volume to optimize delivery routes and predict accurate arrival times. This technology-driven approach allows us to maintain our promise of fast, reliable service.</p>
                
                <p>Our mobile application features advanced search and filtering capabilities, personalized recommendations based on your order history, and seamless payment processing. We continuously update our platform based on user feedback and emerging technologies to enhance the customer experience.</p>
                
                <p>We've also implemented machine learning systems that help predict demand patterns, allowing our restaurant partners to better prepare for peak ordering times and reduce food waste. This collaborative approach benefits everyone in our ecosystem - restaurants, customers, and delivery partners.</p>
            </div>
        </section>
    </div>

    <footer id="contact" class="footer-section-pqr012">
        <div class="footer-content-stu345">
            <div class="footer-column-vwx678">
                <h3 class="footer-title-yz901">Contact Information</h3>
                <a href="tel:+15551234567" class="contact-link-abc234">📞 (555) 123-4567</a>
                <a href="mailto:info@funziqhub.com" class="contact-link-abc234">✉️ info@funziqhub.com</a>
                <p class="contact-link-abc234">📍 1247 Culinary Avenue, Food District, FL 33101</p>
            </div>
            
            <div class="footer-column-vwx678">
                <h3 class="footer-title-yz901">Business Hours</h3>
                <p class="contact-link-abc234">Monday - Thursday: 10:00 AM - 11:00 PM</p>
                <p class="contact-link-abc234">Friday - Saturday: 10:00 AM - 12:00 AM</p>
                <p class="contact-link-abc234">Sunday: 11:00 AM - 10:00 PM</p>
            </div>
            
            <div class="footer-column-vwx678">
                <h3 class="footer-title-yz901">Legal</h3>
                <a href="#" class="contact-link-abc234" onclick="showPrivacyPolicy()">Privacy Policy</a>
                <a href="#" class="contact-link-abc234" onclick="showTermsOfService()">Terms of Service</a>
            </div>
            
            <div class="footer-column-vwx678">
                <h3 class="footer-title-yz901">Follow Us</h3>
                <p class="contact-link-abc234">Stay connected for updates and special offers</p>
                <p class="contact-link-abc234">Customer Service: (555) 987-6543</p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #34495e;">
            <p>&copy; 2023 FunziQHub. All rights reserved. Serving delicious food with passion and dedication.</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="modal-overlay-def567">
        <div class="modal-content-ghi890">
            <span class="close-button-jkl123" onclick="closeModal('privacyModal')">&times;</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: December 2023</strong></p>
            
            <h3>Information We Collect</h3>
            <p>We collect information you provide directly to us, such as when you create an account, place an order, or contact us for support. This includes your name, email address, phone number, delivery address, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, send you technical notices and support messages, and communicate with you about products, services, and promotional offers.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share your information with restaurant partners to fulfill your orders and with delivery partners to complete deliveries.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at privacy@funziqhub.com or call (555) 123-4567.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="termsModal" class="modal-overlay-def567">
        <div class="modal-content-ghi890">
            <span class="close-button-jkl123" onclick="closeModal('termsModal')">&times;</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: December 2023</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using FunziQHub's services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Service Description</h3>
            <p>FunziQHub provides a platform that connects customers with local restaurants for food delivery services. We act as an intermediary between customers and restaurant partners.</p>
            
            <h3>User Responsibilities</h3>
            <p>Users must provide accurate information when placing orders, be available to receive deliveries at the specified address, and treat delivery personnel with respect and courtesy.</p>
            
            <h3>Payment Terms</h3>
            <p>Payment is due at the time of order placement. We accept major credit cards and digital payment methods. All prices are subject to change without notice.</p>
            
            <h3>Delivery Policy</h3>
            <p>We strive to deliver orders within the estimated time frame, but delivery times may vary due to weather, traffic, or other unforeseen circumstances. Delivery fees may apply based on distance and order size.</p>
            
            <h3>Limitation of Liability</h3>
            <p>FunziQHub's liability is limited to the cost of the order. We are not responsible for food quality issues that originate from restaurant partners, though we will work to resolve any concerns.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at legal@funziqhub.com or (555) 123-4567.</p>
        </div>
    </div>

    <script>
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }

        function showPrivacyPolicy() {
            document.getElementById('privacyModal').style.display = 'block';
        }

        function showTermsOfService() {
            document.getElementById('termsModal').style.display = 'block';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        function showMoreServices() {
            alert('Discover our complete range of services including catering, corporate lunch programs, and special event delivery options!');
        }

        function expandCuisineInfo() {
            alert('Explore our full menu featuring over 500 dishes from 50+ restaurant partners across 15 different cuisine types!');
        }

        function showDeliveryDetails() {
            alert('Learn more about our delivery zones, timing, and special delivery options for your area!');
        }

        function loadMoreReviews() {
            alert('Read hundreds more customer reviews and see why FunziQHub is the top-rated food delivery service in the region!');
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal-overlay-def567');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('.nav-link-mno345').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>









