<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H-Tutor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            transition: background 0.5s ease;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            color: #333;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            color: #ffd700 !important;
        }

        .dropdown-menu {
            background-color: #007bff;
        }

        .dropdown-item:hover {
            background-color: #0056b3;
            color: white !important;
        }

        .course-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }

        .course-card:hover {
            transform: scale(1.05);
        }

        .course-title {
            font-weight: bold;
            font-size: 1.2em;
        }

        img {
            height: 200px;
            object-fit: cover;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        #load-more {
            text-align: center;
            margin-top: 20px;
        }

        .footer-link {
            color: #ffd700;
        }

        .footer-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php include 'assets/nav.php'; ?>

    <div class="container my-5">
        <div class="row" id="course-list">
            <!-- Initial Course Cards -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 course-item">
                <div class="card course-card">
                    <img src="https://images.pexels.com/photos/4009089/pexels-photo-4009089.jpeg" alt="Course 1">
                    <div class="card-body">
                        <div class="course-title">Digital Marketing</div>
                        <p>Learn the essentials of digital marketing.</p>
                        <div class="course-price">$99</div>
                        <button class="btn btn-primary w-100 mt-3">Enroll Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 course-item">
                <div class="card course-card">
                    <img src="https://images.pexels.com/photos/3911052/pexels-photo-3911052.jpeg" alt="Course 2">
                    <div class="card-body">
                        <div class="course-title">Social Media Marketing</div>
                        <p>Learn to promote products on social media.</p>
                        <div class="course-price">$99</div>
                        <button class="btn btn-primary w-100 mt-3">Enroll Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 course-item">
                <div class="card course-card">
                    <img src="https://images.pexels.com/photos/4050284/pexels-photo-4050284.jpeg" alt="Course 3">
                    <div class="card-body">
                        <div class="course-title">Content Writing</div>
                        <p>Enhance your content writing skills.</p>
                        <div class="course-price">$99</div>
                        <button class="btn btn-primary w-100 mt-3">Enroll Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 course-item">
                <div class="card course-card">
                    <img src="https://images.pexels.com/photos/4181624/pexels-photo-4181624.jpeg" alt="Course 4">
                    <div class="card-body">
                        <div class="course-title">SEO Optimization</div>
                        <p>Understand SEO strategies to boost visibility.</p>
                        <div class="course-price">$99</div>
                        <button class="btn btn-primary w-100 mt-3">Enroll Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div id="load-more">
            <button class="btn btn-secondary" onclick="loadMoreCourses()">Load More Courses</button>
        </div>
    </div>

    <?php include 'assets/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const additionalCourses = [{
                title: "Public Speaking",
                description: "Develop your public speaking skills.",
                price: "$149",
                img: "https://images.pexels.com/photos/5482694/pexels-photo-5482694.jpeg"
            },
            {
                title: "Business Management",
                description: "Learn the principles of business management.",
                price: "$199",
                img: "https://images.pexels.com/photos/3746767/pexels-photo-3746767.jpeg"
            },
            {
                title: "Photography",
                description: "Learn the basics of photography.",
                price: "$149",
                img: "https://images.pexels.com/photos/322551/pexels-photo-322551.jpeg"
            },
            {
                title: "Video Editing",
                description: "Edit videos like a pro using various tools.",
                price: "$199",
                img: "https://images.pexels.com/photos/3052434/pexels-photo-3052434.jpeg"
            },
            {
                title: "Music Production",
                description: "Produce your own music tracks.",
                price: "$249",
                img: "https://images.pexels.com/photos/315036/pexels-photo-315036.jpeg"
            }
        ];

        function loadMoreCourses() {
            const courseList = document.getElementById('course-list');
            additionalCourses.forEach(course => {
                const courseCard = document.createElement('div');
                courseCard.className = 'col-lg-3 col-md-4 col-sm-6 mb-4 course-item';
                courseCard.innerHTML = `
                    <div class="card course-card">
                        <img src="${course.img}" alt="${course.title}">
                        <div class="card-body">
                            <div class="course-title">${course.title}</div>
                            <p>${course.description}</p>
                            <div class="course-price">${course.price}</div>
                            <button class="btn btn-primary w-100 mt-3">Enroll Now</button>
                        </div>
                    </div>
                `;
                courseList.appendChild(courseCard);
            });
        }
    </script>
</body>

</html>