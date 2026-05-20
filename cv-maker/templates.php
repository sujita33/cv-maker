<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select a CV Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .template-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }
        .template-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        .template-img-container {
            height: 300px;
            background-color: #eaeaea;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .template-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .main-content {
            flex: 1;
        }
    </style>
</head>
<body>

    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
            <div class="container">
                <a class="navbar-brand fw-bold" href="index.php">CV Maker Dashboard</a>
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link active" href="templates.php">Templates</a>
                    <a class="nav-link" href="index.php">Create CV</a>
                </div>
            </div>
        </nav>

        <div class="container my-5 text-center">
            <h1 class="fw-bold text-dark">Pick Your Perfect Template</h1>
            <p class="text-muted fs-5">Choose a design framework to kickstart your professional CV.</p>
        </div>

        <div class="container mb-5">
            <div class="row g-4">
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 template-card shadow-sm">
                        <div class="template-img-container">
                            <img src="suryani international.png" alt="Executive Classic Template">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Executive Classic</h5>
                            <p class="card-text text-muted flex-grow-1">Traditional, highly organized structural look perfect for senior roles and corporate industries.</p>
                            <a href="index.php" onclick="localStorage.setItem('selectTemplate', 'Executive Classic')" class="btn btn-primary w-100 mt-3">Use This Template</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 template-card shadow-sm">
                        <div class="template-img-container">
                            <img src="bgimg.png" alt="Modern Minimalist Template">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Modern Minimalist</h5>
                            <p class="card-text text-muted flex-grow-1">A sleek, clean design with generous whitespace. Excellent for tech, engineering, and startups.</p>
                            <a href="index.php" onclick="localStorage.setItem('selectTemplate', 'Professional Modern')" class="btn btn-primary w-100 mt-3">Use This Template</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 template-card shadow-sm">
                        <div class="template-img-container">
                            <div class="w-100 h-100 bg-secondary d-flex align-items-center justify-content-center text-white">
                                <i class="bi bi-layout-text-window-reversed fs-1"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Creative Indigo</h5>
                            <p class="card-text text-muted flex-grow-1">Features a bold sidebar layout with modern accents. Ideal for designers, marketers, and copywriters.</p>
                            <a href="index.php" onclick="localStorage.setItem('selectTemplate', 'Creative Minimal')" class="btn btn-primary w-100 mt-3">Use This Template</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="dashboard-footer">
        <div class="footer-container">
            <p>&copy; 2026 CV Maker. All rights reserved.</p>
            <div class="footer-links">
                <a href="index.php">Home</a>
                <a href="templates.php">Templates</a>
                <a href="index.php">Create CV</a>
            </div>
            <div class="footer-socials">
                <a href="https://github.com/sujita33/cv-maker" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
                <a href="#" title="Support"><i class="fa-solid fa-circle-question"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const activeSelection = localStorage.getItem('selectTemplate');
            if(activeSelection) {
                localStorage.removeItem('selectTemplate');
                selectTemplate(activeSelection);
            }
        });
    </script>
</body>
</html>