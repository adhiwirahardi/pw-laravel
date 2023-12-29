@extends('app')

@section('content')
<div class="container-fluid" style="font-family: 'Lato', sans-serif;">
    <div class="row justify-content-center">
        <!-- Main Content -->
        <div class="col-md-9">
        <div id="about" class="hero-section" style="position: relative; overflow: hidden; background-color: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Profile Photo Column -->
                <div class="col-md-6">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo" class="img-fluid" style="width: 300px; height: 360px; border: 5px solid #eee;">
                </div>
                <!-- About Me Description Column -->
                <div class="col-md-6">
                    <div style="padding: 10px;">
                        <h2 style="font-family: 'Lato', sans-serif; font-size: 38px; font-weight: bold; margin-bottom: 10px; color: #333;">Adhi Wirahardi</h2>
                        <h4 style="font-family: 'Lato', sans-serif; font-size: 24px; margin-bottom: 20px; color: #555;">Data Scientist</h4>
                        <p style="font-family: 'Lato', sans-serif; font-size: 12px; line-height: 1.8; text-align: justify; color: #777;">
                            Hey, I'm Adhi Wirahardi—a passionate data enthusiast on a journey of discovery! I find joy in unraveling the tales hidden within data, transforming complexity into engaging narratives.
                            Armed with Python, SQL, and a toolkit of machine learning techniques, I'm constantly learning and exploring new ways to optimize models and extract meaningful insights. Yet, what truly excites me is the magic of teamwork—I thrive in a collaborative, inclusive environment where communication is key.
                            My unwavering passion for continuous learning drives my quest to contribute positively to technology and research. I aspire to weave the threads of data into impactful solutions that make a tangible difference for businesses.
                            I'm just a humble seeker eager to untangle the mysteries of data and translate them into real-world impact. Let's embark on this journey together and bring innovative ideas to life through the captivating world of data science!
                        </p>
                        <div class="text-center" style="margin-top: 20px;">
                            <a href="{{ asset('Adhi Wirahardi - CV.pdf') }}" download="Adhi Wirahardi.pdf" class="btn btn-primary" style="background-color: #343a40;">Download My CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            <!-- Add spacing between sections -->
            <div class ="container-fluid" style="font-family: 'Lato', sans-serif; margin-bottom: 25px;"></div>

            <hr>
            <div id="skills" class="section">
                <!-- Soft Skills -->
                <div class="row">
                    <div class="col-md-4">
                        <h3>Soft Skills</h3>
                        <ul style= "list-style-type: none; padding: 0;">
                            <li><i class="fas fa-handshake"></i> Collaboration</li>
                            <li><i class="fas fa-adjust"></i> Adaptability</li>
                            <li><i class="fas fa-lightbulb"></i> Problem-solving</li>
                            <!-- Add more soft skills -->
                        </ul>
                    </div>
                    <!-- Research Skills -->
                    <div class="col-md-4">
                        <h3>Research Skills</h3>
                        <ul style= "list-style-type: none; padding: 0;">
                            <li><i class="fas fa-brain"></i> Machine Learning</li>
                            <li><i class="fas fa-chart-line"></i> Time Series Analysis</li>
                            <li><i class="fas fa-dna"></i> Multivariate Analysis</li>
                            <li><i class="fas fa-chart-bar"></i> Econometrics</li>
                            <li><i class="fas fa-chart-pie"></i> Data Visualization</li>
                            <!-- Add more research skills -->
                        </ul>
                    </div>
                    <!-- Technical Skills -->
                    <div class="col-md-4">
                        <h3>Technical Skills</h3>
                        <ul style= "list-style-type: none; padding: 0;">
                            <li><i class="fab fa-python"></i> Python</li>
                            <li><i class="fab fa-html5"></i> HTML/CSS</li>
                            <li><i class="fab fa-js"></i> JavaScript</li>
                            <li><i class="fas fa-database"></i> SQL</li>
                            <li><i class="fab fa-bootstrap"></i> Bootstrap</li>
                            <li><i class="fab fa-php"></i> PHP</li>
                            <li><i class="fab fa-laravel"></i> Laravel Framework</li>
                            <li><i class="fab fa-git"></i> GIT</li>
                            <!-- Add more technical skills -->
                        </ul>
                    </div>
                </div>

            <a href="{{ route('skill') }}" class="btn btn-primary" style="background-color: #343a40; float: right;">Read More</a>
        </div>
        <div class ="container-fluid" style="font-family: 'Lato', sans-serif; margin-bottom: 50px;"></div>


            <hr>
                <div id="education" class="section">
                    <h2>Education</h2>
                    <div class="education-entry">
                        <a href="https://graduation.apps.binus.ac.id/graduates/2301981722/?ref">
                            <div class="education-image">
                                <img src="{{asset('images/binus.png')}}" alt="Education Image">
                            </div>
                        </a>
                        <div class="education-details" style="font-family: 'Lato', sans-serif;">
                            <h3>Master of Computer, Majoring in Information System Management</h3>
                            <p>Mar 2022 - Nov 2023<br>University - City, Country</p>
                            <ul>
                                <li>GPA of 3.99/4.00</li>
                                <li>For my master thesis, I predicted used car prices based on classification price with Random Forest Regressor and Classifier, utilizing Recursive Feature Elimination to increase the model performance.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="education-entry">
                        <a href="https://pddikti.kemdikbud.go.id/data_mahasiswa/QTVGMkE2MEItODMwQi00OUFFLTk5RTItRkE3MzRGM0Y5MkRB">
                            <div class="education-image">
                                <img src="{{asset('images/unpad.png')}}" alt="Education Image">
                            </div>
                        </a>
                        <div class="education-details">
                            <h3>Bachelor of Agriculture, Majoring in Agribusiness</h3>
                            <p>Aug 2016 - Oct 2020<br>University - Bandung, Indonesia</p>
                            <ul>
                                <li>GPA of 3.25/4.00</li>
                                <li>For my undergraduate thesis, I analyzed the coffee shop business with SWOT and EFAS, IFAS matrix.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            <hr>
            <div id="experience" class="section">
                <h2>Experience</h2>
                <div class="timeline">
                    <div class="experience-item">
                        <div class="timeline-item">
                            <div class="content">
                                <h3><i class="fas fa-briefcase"></i>Product Researcher</h3>
                                <p class="date">July 2021 - Present</p>
                                <p class="location">Tuku Gadget - Jakarta, Indonesia</p>
                                <p class="description">
                                    Tuku Gadget is a retail store that operates across multiple e-commerce platforms in Indonesia. Specializing in electronic devices  and home living products, Tuku Gadget offers a diverse range of gadgets, electronics, and household items through various online  marketplaces. The store's presence across several e-commerce platforms allows it to reach a wider customer base, providing  convenience and accessibility to a variety of innovative and quality products for the modern lifestyle.
                                    • Conducted market research for electronic and home living products to spot trends and customer preferences.
                                    • Evaluated gadgets and home products for market viability and potential demand.
                                    • Managed supplier relationships, negotiating for competitive pricing and quality.
                                    • Assisted in inventory planning to meet customer demand efficiently.
                                    • Collaborated on e-commerce to enhance product visibility online
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="experience-item">
                        <div class="timeline-item">
                            <div class="content">
                                <h3><i class="fas fa-briefcase"></i>Field Assistant - Internship</h3>
                                <p class="date">Jun 2019 - Sep 2019</p>
                                <p class="location">Datu Nusa Agribusiness - Lombok, Indonesia</p>
                                <p class="description">
                                    PT. Datu Nusa Agribisnis aimed to produce low aflatoxin corn to meet national and export demands. They developed a 200- hectare maize plant in Lombok, West Nusa Tenggara. Additionally, they partnered with 7,200 maize farming families through DNA Cooperative, managing a 7,000-hectare corn plant area
                                    • Evaluated aflatoxin levels in maize products, ensuring warehouse safety standards.
                                    • Engaged in technologically enhanced maize plantation operations, fostering advanced agricultural practices.
                                    • Spearheaded community development initiatives, empowering local farmers for superior maize cultivation.
                                    • Cultivated partnerships with company clients and suppliers, learning valuable collaboration skills.
                                    • Absorbed leadership insights by witnessing and contributing to the management of an agribusiness company
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more experience items here -->
                </div>
            </div>

            <hr>
            <div id="portfolio" class="section">
             <h2>Portfolio</h2>

             <div class="portfolio-container">
            <div class="portfolio-item" data-toggle="modal" data-target="#projectModal1">
                <a href="{{ route('project.ccfd') }}">
                    <img src="{{asset('images/ccfd.png')}}" alt="Project 1">
                </a>
            </div>
            <div class="portfolio-item" data-toggle="modal" data-target="#projectModal2">
                <a href="{{ route('project.ucpp') }}">
                    <img src="{{asset('images/ucpp.png')}}" alt="Project 1">
                </a>
            </div>
            <div class="portfolio-item" data-toggle="modal" data-target="#projectModal2">
                <a href="{{ route('project.fa') }}">
                    <img src="{{asset('images/fa.png')}}" alt="Project 1">
                </a>
            </div>

        </div>
    </div>

            <hr>
            <div id="contact" class="section">
            <h2>Contact Me</h2>
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: #343a40; float: right;">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
