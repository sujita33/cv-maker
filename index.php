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

<form class="cv-form" id="interactive-cv-form">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 20px;">
                            
                            <div class="form-inputs-pane">
                                <h4 style="margin-bottom: 15px; color: #2c3e50; border-bottom: 2px solid #eaeaea; padding-bottom: 5px;">Personal Details</h4>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="full-name">Full Name</label>
                                        <input type="text" id="full-name" placeholder="Enter your name" oninput="updateLivePreview()">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" placeholder="Enter your email" oninput="updateLivePreview()">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="tel" id="phone" placeholder="Enter phone number" oninput="updateLivePreview()">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" id="address" placeholder="Enter address" oninput="updateLivePreview()">
                                    </div>
                                </div>

                                <div class="form-group full-width">
                                    <label for="profile-pic">Profile Picture (Frontend Upload)</label>
                                    <input type="file" id="profile-pic" accept="image/*" onchange="previewImage(event)">
                                </div>

                                <h4 style="margin: 25px 0 15px 0; color: #2c3e50; border-bottom: 2px solid #eaeaea; padding-bottom: 5px;">Professional Track</h4>
                                <div class="form-group full-width">
                                    <label for="education">Education</label>
                                    <input type="text" id="education" placeholder="Bachelor of Science in CS - University X (2022-2026)" oninput="updateLivePreview()">
                                </div>

                                <div class="form-group full-width">
                                    <label for="skills">Skills</label>
                                    <input type="text" id="skills" placeholder="HTML, CSS, JavaScript, Bootstrap, PHP" oninput="updateLivePreview()">
                                </div>

                                <div class="form-group full-width">
                                    <label for="experience">Experience</label>
                                    <textarea id="experience" rows="4" placeholder="Frontend Developer Intern at Company Y: Built responsive templates..." oninput="updateLivePreview()"></textarea>
                                </div>

                                <button type="submit" class="btn-submit" style="width: 100%; margin-top: 20px;">Save & Export CV</button>
                            </div>

                            <div class="preview-paper-pane" style="background: white; border: 1px solid #d3d3d3; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 4px; padding: 40px; min-height: 500px; color: #333; font-family: 'Arial', sans-serif;">
                                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #333; padding-bottom: 15px; margin-bottom: 20px;">
                                    <div>
                                        <h2 id="view-name" style="margin: 0; font-size: 28px; color: #111; font-weight: bold;">Your Name</h2>
                                        <p style="margin: 5px 0 0 0; color: #666; font-size: 14px;">
                                            <span id="view-email">email@example.com</span> | 
                                            <span id="view-phone">Phone Number</span>
                                        </p>
                                        <p id="view-address" style="margin: 2px 0 0 0; color: #666; font-size: 14px;">Your Location Address</p>
                                    </div>
                                    <img id="view-avatar" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 24 24' fill='%23ccc'><circle cx='12' cy='8' r='4'/><path d='M12 14c-6.1 0-8 4-8 4v2h16v-2s-1.9-4-8-4z'/></svg>" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; border: 1px solid #ddd;">
                                </div>

                                <div style="margin-bottom: 20px;">
                                    <h4 style="text-transform: uppercase; border-bottom: 1px solid #ddd; padding-bottom: 3px; font-size: 16px; color: #2c3e50; margin-bottom: 8px;">Education</h4>
                                    <p id="view-education" style="margin: 0; font-size: 14px; white-space: pre-wrap; line-height: 1.5;">Educational qualifications show up here...</p>
                                </div>

                                <div style="margin-bottom: 20px;">
                                    <h4 style="text-transform: uppercase; border-bottom: 1px solid #ddd; padding-bottom: 3px; font-size: 16px; color: #2c3e50; margin-bottom: 8px;">Skills</h4>
                                    <p id="view-skills" style="margin: 0; font-size: 14px; white-space: pre-wrap; line-height: 1.5;">Core skillsets show up here...</p>
                                </div>

                                <div style="margin-bottom: 20px;">
                                    <h4 style="text-transform: uppercase; border-bottom: 1px solid #ddd; padding-bottom: 3px; font-size: 16px; color: #2c3e50; margin-bottom: 8px;">Work Experience</h4>
                                    <p id="view-experience" style="margin: 0; font-size: 14px; white-space: pre-wrap; line-height: 1.5;">Detailed job histories show up here...</p>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </section>

        </main>
    </div>
   <footer style="background-color: #1a1a1a; color: #ffffff; padding: 25px 0; font-family: sans-serif; font-size: 14px; border-top: 2px solid #2d2d2d; margin-top: 40px; width: 100%;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            
            <p style="margin: 0; color: #aaaaaa;">&copy; 2026 CV Maker. All rights reserved.</p>
            
            <div style="display: flex; gap: 20px;">
                <a href="#" onclick="showSection(homeSection, homeLink)" style="color: #ffffff; text-decoration: none; transition: 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#ffffff'">Home</a>
                <a href="#" onclick="showSection(templatesSection, templatesLink)" style="color: #ffffff; text-decoration: none; transition: 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#ffffff'">Templates</a>
                <a href="#" onclick="showSection(createCvSection, createCvLink)" style="color: #ffffff; text-decoration: none; transition: 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#ffffff'">Create CV</a>
            </div>
            
            <div style="display: flex; gap: 15px; font-size: 18px;">
                <a href="https://github.com/sujita33/cv-maker" target="_blank" title="GitHub" style="color: #aaaaaa; text-decoration: none;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#aaaaaa'">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="#" title="Support" style="color: #aaaaaa; text-decoration: none;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#aaaaaa'">
                    <i class="fa-solid fa-circle-question"></i>
                </a>
            </div>

        </div>
    </footer>

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

        // Live Preview Binding Logic
        function updateLivePreview() {
            const nameInput = document.getElementById('full-name').value;
            const emailInput = document.getElementById('email').value;
            const phoneInput = document.getElementById('phone').value;
            const addressInput = document.getElementById('address').value;
            const eduInput = document.getElementById('education').value;
            const skillsInput = document.getElementById('skills').value;
            const expInput = document.getElementById('experience').value;

            document.getElementById('view-name').innerText = nameInput ? nameInput : "Your Name";
            document.getElementById('view-email').innerText = emailInput ? emailInput : "email@example.com";
            document.getElementById('view-phone').innerText = phoneInput ? phoneInput : "Phone Number";
            document.getElementById('view-address').innerText = addressInput ? addressInput : "Your Location Address";
            document.getElementById('view-education').innerText = eduInput ? eduInput : "Educational qualifications show up here...";
            document.getElementById('view-skills').innerText = skillsInput ? skillsInput : "Core skillsets show up here...";
            document.getElementById('view-experience').innerText = expInput ? expInput : "Detailed job histories show up here...";
        }

        // Image Stream Renderer
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('view-avatar');
                output.src = reader.result;
            };
            if(event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]);
            }
        }

    </script>
</body>

</html>