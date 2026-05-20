<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Maker Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <nav class="dashboard-nav">
        <div class="nav-container">
            <div class="brand-container">
                <img src="suryani%20international.png" alt="Suryani International" class="brand-logo">
                <span class="brand-title">CV Maker Dashboard</span>
            </div>
            <div class="nav-links">
                <a href="#" id="home-link" class="active">Home</a>
                <a href="#" id="templates-link">Templates</a>
                <a href="#" id="create-cv-link">Create CV</a>
            </div>
        </div>
    </nav>

    <div class="main-background-wrapper">
        <main class="content-container">

            <section id="home-section" class="page-section">
                <div class="welcome-box">
                    <h1>Welcome to Your CV Builder</h1>
                    <p>Create professional, high-quality CVs in just a few minutes. Stand out from the crowd and land
                        your dream job.</p>
                    <button class="btn-primary" id="cta-btn">Choose a Template</button>
                </div>
            </section>

            <section id="templates-section" class="page-section hidden">
                <button class="btn-back" onclick="showSection(homeSection, homeLink)"><i
                        class="fa-solid fa-arrow-left"></i> Back to Home</button>

                <div class="section-title">
                    <h2>Select a Template</h2>
                    <p>Pick a design to get started with your resume setup.</p>
                </div>
                <div class="templates-grid">
                    <div class="template-card" onclick="selectTemplate('Professional Modern')">
                        <div class="template-preview modern-preview">
                            <div class="preview-header"></div>
                            <div class="preview-body">
                                <div class="preview-line long"></div>
                                <div class="preview-line mid"></div>
                                <div class="preview-line short"></div>
                            </div>
                        </div>
                        <div class="template-info">
                            <h3>Professional Modern</h3>
                            <p>Clean layout best for corporate and tech roles.</p>
                        </div>
                    </div>

                    <div class="template-card" onclick="selectTemplate('Creative Minimal')">
                        <div class="template-preview creative-preview">
                            <div class="preview-sidebar"></div>
                            <div class="preview-main">
                                <div class="preview-line mid"></div>
                                <div class="preview-line long"></div>
                            </div>
                        </div>
                        <div class="template-info">
                            <h3>Creative Minimal</h3>
                            <p>Split layout optimized for designers and marketers.</p>
                        </div>
                    </div>

                    <div class="template-card" onclick="selectTemplate('Executive Classic')">
                        <div class="template-preview classic-preview">
                            <div class="preview-body central">
                                <div class="preview-line short central-line"></div>
                                <div class="preview-line long"></div>
                                <div class="preview-line long"></div>
                            </div>
                        </div>
                        <div class="template-info">
                            <h3>Executive Classic</h3>
                            <p>Traditional structural look perfect for senior roles.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="create-cv-section" class="page-section hidden">
                <button class="btn-back" onclick="showSection(homeSection, homeLink)"><i
                        class="fa-solid fa-arrow-left"></i> Back to Home</button>

                <div class="cv-card">
                    <div class="card-header">
                        <h2><i class="fa-regular fa-file-lines icon-gray"></i> CV Create</h2>
                        <div class="header-flex">
                            <h3 class="sub-title">Registration</h3>
                            <span id="selected-template-badge" class="badge">Template: None</span>
                        </div>
                    </div>

                    <form class="cv-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="full-name">Full Name</label>
                                <input type="text" id="full-name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="Enter your email">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" id="phone" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" placeholder="Enter address">
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="education">Education</label>
                            <input type="text" id="education" placeholder="Your education">
                        </div>

                        <div class="form-group full-width">
                            <label for="skills">Skills</label>
                            <input type="text" id="skills" placeholder="HTML, CSS, JS...">
                        </div>

                        <div class="form-group full-width">
                            <label for="experience">Experience</label>
                            <textarea id="experience" rows="4" placeholder="Your experience"></textarea>
                        </div>

                        <button type="submit" class="btn-submit">Create CV</button>
                    </form>
                </div>
            </section>

        </main>
    </div>

    <script>
        const homeLink = document.getElementById('home-link');
        const templatesLink = document.getElementById('templates-link');
        const createCvLink = document.getElementById('create-cv-link');
        const ctaBtn = document.getElementById('cta-btn');

        const homeSection = document.getElementById('home-section');
        const templatesSection = document.getElementById('templates-section');
        const createCvSection = document.getElementById('create-cv-section');
        const templateBadge = document.getElementById('selected-template-badge');

        function clearActiveLinks() {
            homeLink.classList.remove('active');
            templatesLink.classList.remove('active');
            createCvLink.classList.remove('active');
        }

        function hideAllSections() {
            homeSection.classList.add('hidden');
            templatesSection.classList.add('hidden');
            createCvSection.classList.add('hidden');
        }

        function showSection(section, link) {
            hideAllSections();
            clearActiveLinks();
            section.classList.remove('hidden');
            link.classList.add('active');
        }

        function selectTemplate(templateName) {
            templateBadge.innerText = `Template: ${templateName}`;
            templateBadge.style.display = "inline-block";
            showSection(createCvSection, createCvLink);
        }

        // Navigation Bindings
        homeLink.addEventListener('click', (e) => { e.preventDefault(); showSection(homeSection, homeLink); });
        templatesLink.addEventListener('click', (e) => { e.preventDefault(); showSection(templatesSection, templatesLink); });
        createCvLink.addEventListener('click', (e) => { e.preventDefault(); showSection(createCvSection, createCvLink); });
        ctaBtn.addEventListener('click', () => showSection(templatesSection, templatesLink));
    </script>
</body>

</html>