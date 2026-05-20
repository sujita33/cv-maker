<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select a CV Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Base Architecture Resets */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #333;
        }

        .main-content {
            flex: 1 0 auto;
        }

        /* Template Grid Interactive Cards */
        .template-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            background: #fff;
        }
        
        .template-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
        }
        
        .template-img-container {
            height: 300px;
            background-color: #edf2f7;
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

        /* Dashboard Footer Blueprint Components */
        .dashboard-footer {
            background-color: #212529;
            color: #fff;
            padding: 20px;
            margin-top: auto;
            flex-shrink: 0;
            border-top: 1px solid #333;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .footer-container p {
            margin: 0;
            font-size: 0.9rem;
            color: #adb5bd;
        }

        .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            margin: 0 10px;
            font-size: 0.9rem;
            transition: color 0.2s ease;
        }

        .footer-links a:hover {
            color: #fff;
        }

        .footer-socials a {
            color: #adb5bd;
            font-size: 1.2rem;
            margin-left: 15px;
            transition: color 0.2s ease;
        }

        .footer-socials a:hover {
            color: #fff;
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                text-align: center;
            }
            .footer-socials a {
                margin: 0 10px;
            }
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
                            <img src="suryani international.png" alt="Executive Classic Template" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="w-100 h-100 bg-secondary d-none align-items-center justify-content-center text-white">
                                <i class="fa-solid fa-briefcase fs-1"></i>
                            </div>
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
                            <img src="bgimg.png" alt="Modern Minimalist Template" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="w-100 h-100 bg-secondary d-none align-items-center justify-content-center text-white">
                                <i class="fa-solid fa-laptop-code fs-1"></i>
                            </div>
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
                            <div class="w-100 h-100 bg-dark d-flex align-items-center justify-content-center text-white">
                                <i class="bi bi-layout-text-window-reversed fs-1 text-info"></i>
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
            // Check if there's already an active redirection workflow needed
            const activeSelection = localStorage.getItem('selectTemplate');
            if(activeSelection) {
                // Safely drop the state and send user back to live workspace window
                window.location.href = "index.php";
            }
        });
    </script>
</body>
</html>