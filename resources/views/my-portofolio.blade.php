<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<style>
    :root {
        --neutral: #fff;
        --neutral-50: #F0F1F3;
        --primary: #A53DFF;
        --primary-100: #fde9fd;
        --gray-900: #132238;
        --gray-100:#E6E8EB;
        --gray-200: #C3C7CE;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg position-fixed top-0 w-100 nav-container" style="z-index: 10;">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center gap-2" href="#" style="font-weight: 500;">
            <div class="d-flex justify-content-center align-items-center" style="background-color: var(--primary); color: var(--neutral); width: 40px; height: 40px; border-radius: 40px;">D</div>
            <span>danynurf</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end gap-2" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-text active-nav" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-text" href="#">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-text" href="#">Project</a>
              </li>
            </ul>
            <a href="#">
                <button class="contact-btn">Contact Me</button>
            </a>
          </div>
        </div>
      </nav>
      <div class="container-fluid py-5 h-auto hero">
        <div class="container py-5">
            <div class="row min-vh-100">
                <div class="col-md-6 my-auto">
                    <span style="font-size: 18px; font-weight: 500;">Hello, I'm</span>
                    <h1 style="font-size: 60px; font-weight: 600;">Dany Nur Ferdiansyah</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci eum quisquam amet accusantium nam dicta earum repudiandae hic assumenda aliquid?</p>
                    <button class="hero-btn">Say Hello!</button>
                    <div class="d-flex gap-1 mt-4">
                        <div class="d-flex flex-column align-items-center py-3 w-100" style="background-color: var(--primary-100); border-radius: 5px;">
                            <span style="font-size: 1.6rem;font-weight: 600;">5 Y.</span>
                            <span>Experience</span>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3 w-100" style="background-color: var(--primary-100); border-radius: 5px;">
                            <span style="font-size: 1.6rem;font-weight: 600;">250+</span>
                            <span>Project Completed</span>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3 w-100" style="background-color: var(--primary-100); border-radius: 5px;">
                            <span style="font-size: 1.6rem;font-weight: 600;">58</span>
                            <span>Happy Client</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 vh-100 d-flex justify-content-end align-items-center">
                    <div class="overflow-hidden positon-relative d-flex justify-content-center hero-img-wrapper" style="height: 70vh; width: 80% ;background-color: var(--neutral); border-radius: 10px; z-index: 5;">
                        <img src="img/me-1.png" alt="" class="my-auto mx-auto" style="object-fit: cover; width: 80%; height: 100%; object-position: center;">
                    </div>
                </div>
            </div>
            <div class="position-absolute start-0" style="background-color: var(--primary); width: 200px; height: 200px; border-radius: 100px; filter: blur(200px); top: 10vh; opacity: 0.8;"></div>
            <div class="position-absolute end-0" style="background-color: var(--primary); width: 200px; height: 200px; border-radius: 100px; filter: blur(200px); top: 10vh; opacity: 0.8;"></div>
        </div>
      </div>
      <div class="container-fluid about-me py">
        <div class="container h-auto py-5">
            <div class="row g-3 align-items-center justify-content-between mx-auto px-5 about-me-card" style="height: 70vh; background-color: var(--neutral); width: min(900px, 90%);">
                <div class="col-md-5" style="background-color: var(--neutral-50); height: 80%; border-radius: 5px;">
                    <div class="img-wrapper h-100 w-100 overflow-hidden">
                        <img src="img/me-2.png" alt="" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column gap-3">
                    <h2>I am Future Front End Developer</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nobis nesciunt quasi animi recusandae placeat! Saepe inventore illum repellendus? Perferendis eos eum repudiandae esse! Vitae, officiis? Eum eaque aliquid ea.</p>
                    <div class="d-flex gap-2 btn-wrapper">
                        <button class="about-me-btn">Get to Know Me</button>
                        <button class="about-me-btn">Download My CV</button>
                    </div>  
                </div>
            </div>
        </div>
      </div>
      <div class="container-fluid py-5 project">
        <div class="container py-5 text-center">
            <h2 style="font-weight: 600;">My Projects</h2>
            <p class="mx-auto mb-5" style="width: 50%;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="project-card">
                        <img src="img/project1.png" alt="" style="width: 100%; object-fit: cover;">
                        <div class="project-card-content d-flex flex-column gap-1 p-3">
                            <span>WEB DEVELOPMENT</span>
                            <h4>Warehouse System</h4>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quae.</span>
                            <button class="project-card-btn mt-3">Study Case</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-card">
                        <img src="img/project2.png" alt="" style="width: 100%; object-fit: cover;">
                        <div class="project-card-content d-flex flex-column gap-1 p-3">
                            <span>WEB DEVELOPMENT</span>
                            <h4>Warehouse System</h4>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quae.</span>
                            <button class="project-card-btn mt-3">Study Case</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-card">
                        <img src="img/project3.png" alt="" style="width: 100%; object-fit: cover;">
                        <div class="project-card-content d-flex flex-column gap-1 p-3">
                            <span>WEB DEVELOPMENT</span>
                            <h4>Warehouse System</h4>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quae.</span>
                            <button class="project-card-btn mt-3">Study Case</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-card">
                        <img src="img/project4.png" alt="" style="width: 100%; object-fit: cover;">
                        <div class="project-card-content d-flex flex-column gap-1 p-3">
                            <span>WEB DEVELOPMENT</span>
                            <h4>Warehouse System</h4>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quae.</span>
                            <button class="project-card-btn mt-3">Study Case</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-card">
                        <img src="img/project5.png" alt="" style="width: 100%; object-fit: cover;">
                        <div class="project-card-content d-flex flex-column gap-1 p-3">
                            <span>WEB DEVELOPMENT</span>
                            <h4>Warehouse System</h4>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quae.</span>
                            <button class="project-card-btn mt-3">Study Case</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-card">
                        <img src="img/project6.png" alt="" style="width: 100%; object-fit: cover;">
                        <div class="project-card-content d-flex flex-column gap-1 p-3">
                            <span>WEB DEVELOPMENT</span>
                            <h4>Warehouse System</h4>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quae.</span>
                            <button class="project-card-btn mt-3">Study Case</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#">
                <button class="project-btn mt-5">Show More Project</button>
            </a>
        </div>
      </div>
      <div class="container-fluid py-5 banner" style="background-color: var(--gray-900); color: var(--neutral);">
        <div class="container text-center w-100 d-flex justify-content-center align-items-center flex-column py-5 gap-3">
            <h2 style="width: min(30rem, 80%);">Do you have Project Idea? Let's discuss your project!</h2>
            <p style="width: min(30rem, 80%); font-weight: 300;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
            <button class="cta-btn d-flex gap-2 align-items-center">
                <span>Let's Work Together</span>
                <i class="bi-arrow-right"></i>
            </button>
        </div>
      </div>
      <div class="container-fluid testimonial py-3">
        <div class="container text-center d-flex flex-column align-items-center py-5">
            <div class="testi-title d-flex flex-column align-items-center">
                <h2>Testimonial</h2>
                <p style="width: min(30rem, 80%); font-weight: 400; opacity: 0.8;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
            </div>
            <div class="testi-content d-flex flex-column align-items-center mt-4">
                <p style="width: min(40rem, 80%);">"Nulla efficitur nisl sit amet velit malesuada dapibus. Duis mollis felis turpis, nec semper odio convallis at. Curabitur imperdiet semper arcu, a finibus arcu suscipit in. Donec quis placerat nibh. Maecenas est purus, eleifend ac cursus sed, tincidunt ut sapien. Morbi ornare elit at libero suscipit porta."</p>
                <div class="testi-sender d-flex flex-column">
                    <span style="font-weight: 600; font-size: 1.1rem;">Cashadi</span>
                    <span>Managing Director, ABC company</span>
                </div>
            </div>
            <div class="d-flex gap-2 mt-4">
                <div class="circ active-circ"></div>
                <div class="circ"></div>
                <div class="circ"></div>
            </div>
        </div>
      </div>
      <div class="container-fluid py-3" style="background-color: var(--gray-900);">
        <div class="container">
            <div class="row align-items-center justify-content-between" style="color: var(--neutral);">
                <div class="col-md-2">
                    <a class="navbar-brand d-flex align-items-center gap-2" href="#" style="font-weight: 500;">
                        <div class="d-flex justify-content-center align-items-center" style="background-color: var(--primary); color: var(--neutral); width: 40px; height: 40px; border-radius: 40px;">D</div>
                        <span style="color: var(--neutral); font-weight: 400;">danynurf</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <span>Copyright &copy; Dany 2023</span>
                </div>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>