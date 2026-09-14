<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#113e67">

    <title>Jeffrey Daniel Yu Guevara | Web Developer</title>

    <style>

        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #0b0f17;
            color: #f5f7fa;
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }


        /* =========================
           NAVBAR
        ========================= */

        nav {
            position: sticky;
            top: 0;
            z-index: 1000;

            background: rgba(11, 15, 23, 0.92);

            backdrop-filter: blur(12px);

            border-bottom: 1px solid #202938;
        }

        .nav-container {
            max-width: 1200px;
            width: 90%;

            margin: auto;

            padding: 18px 0;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            width: 45px;
            height: 45px;

            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #113e67;

            font-weight: 800;
            font-size: 1.1rem;

            transition: 0.25s ease;
        }

        .logo:hover {
            transform: translateY(-3px);

            background: #174f80;
        }

        .nav-links {
            display: flex;

            gap: 30px;

            list-style: none;
        }

        .nav-links a {
            color: #aab3c5;

            font-size: 0.95rem;

            transition: 0.2s ease;
        }

        .nav-links a:hover {
            color: #5eead4;
        }


        /* =========================
           GENERAL
        ========================= */

        .container {
            width: min(1200px, 90%);

            margin: auto;
        }

        section {
            padding: 100px 0;
        }

        .section-title {
            margin-bottom: 50px;
        }

        .section-title span {
            display: block;

            color: #5eead4;

            font-size: 0.9rem;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 2px;

            margin-bottom: 10px;
        }

        .section-title h2 {
            font-size: 2.5rem;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 90vh;

            display: flex;

            align-items: center;

            padding: 80px 0;
        }

        .hero-container {
            display: grid;

            grid-template-columns: 1.2fr 0.8fr;

            align-items: center;

            gap: 70px;
        }

        .hero-content {
            max-width: 750px;
        }

        .hero-small {
            color: #5eead4;

            font-size: 1rem;

            font-weight: 700;

            margin-bottom: 15px;
        }

        .hero h1 {
            font-size: clamp(3rem, 6vw, 5.5rem);

            line-height: 1.05;

            margin-bottom: 25px;
        }

        .hero h1 span {
            color: #5eead4;
        }

        .hero p {
            max-width: 700px;

            color: #aab3c5;

            font-size: 1.1rem;

            margin-bottom: 35px;
        }

        .hero-buttons {
            display: flex;

            gap: 15px;

            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;

            padding: 13px 22px;

            border-radius: 8px;

            font-weight: 700;

            transition: 0.25s ease;
        }

        .btn-primary {
            background: #5eead4;

            color: #071014;
        }

        .btn-primary:hover {
            transform: translateY(-3px);

            box-shadow: 0 10px 25px rgba(94, 234, 212, 0.15);
        }

        .btn-secondary {
            border: 1px solid #354154;

            color: #f5f7fa;
        }

        .btn-secondary:hover {
            border-color: #5eead4;

            color: #5eead4;

            transform: translateY(-3px);
        }


        /* =========================
           PROFILE IMAGE
        ========================= */

        .hero-image {
            display: flex;

            justify-content: center;

            align-items: center;
        }

        .profile-frame {
            position: relative;

            width: 360px;
            height: 360px;

            padding: 7px;

            border-radius: 50%;

            background: linear-gradient(
                135deg,
                #5eead4,
                #113e67,
                #5eead4
            );

            box-shadow:
                0 0 40px rgba(94, 234, 212, 0.15);

            transition: 0.3s ease;
        }

        .profile-frame:hover {
            transform: translateY(-8px) scale(1.02);

            box-shadow:
                0 0 60px rgba(94, 234, 212, 0.25);
        }

        .profile-frame::before {
            content: "";

            position: absolute;

            inset: -15px;

            border-radius: 50%;

            border: 1px solid rgba(94, 234, 212, 0.15);

            z-index: -1;
        }

        .profile-frame img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            border-radius: 50%;

            border: 5px solid #0b0f17;
        }


        /* =========================
           ABOUT
        ========================= */

        .about {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

        .about-card {
            background: #111722;

            border: 1px solid #232c3c;

            border-radius: 14px;

            padding: 30px;

            transition: 0.25s ease;
        }

        .about-card:hover {
            transform: translateY(-5px);

            border-color: #5eead4;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .about-card h3 {
            margin-bottom: 15px;

            font-size: 1.2rem;
        }

        .about-card p {
            color: #aab3c5;

            font-size: 0.95rem;
        }


        /* =========================
           PROJECTS
        ========================= */

        .projects {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

        .project-card {
            background: #111722;

            border: 1px solid #232c3c;

            border-radius: 14px;

            padding: 30px;

            min-height: 280px;

            display: flex;

            flex-direction: column;

            transition: 0.25s ease;
        }

        .project-card:hover {
            transform: translateY(-7px);

            border-color: #5eead4;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.25);
        }

        .project-number {
            color: #5eead4;

            font-size: 0.85rem;

            font-weight: 700;

            margin-bottom: 20px;
        }

        .project-card h3 {
            font-size: 1.3rem;

            margin-bottom: 12px;
        }

        .project-card p {
            color: #aab3c5;

            font-size: 0.93rem;

            margin-bottom: 25px;
        }

        .project-tech {
            margin-top: auto;

            display: flex;

            flex-wrap: wrap;

            gap: 8px;
        }

        .project-tech span {
            background: #1a2230;

            color: #b9c4d6;

            padding: 5px 9px;

            border-radius: 5px;

            font-size: 0.75rem;
        }


        .project-actions {
            display: flex;
            gap: 10px;
            margin-top: 22px;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 9px 14px;
            border: 1px solid #354154;
            border-radius: 7px;
            color: #f5f7fa;
            font-size: 0.82rem;
            font-weight: 700;
            transition: 0.2s ease;
        }

        .project-link:hover {
            border-color: #5eead4;
            color: #5eead4;
            transform: translateY(-2px);
        }

        .project-link.github {
            background: #1a2230;
        }


        /* =========================
           SKILLS
        ========================= */

        .skills {
            display: flex;

            flex-wrap: wrap;

            gap: 12px;
        }

        .skill {
            padding: 10px 16px;

            border: 1px solid #2c3749;

            border-radius: 8px;

            background: #111722;

            color: #cbd5e1;

            transition: 0.2s ease;
        }

        .skill:hover {
            border-color: #5eead4;

            color: #5eead4;

            transform: translateY(-2px);
        }


        /* =========================
           CONTACT
        ========================= */

        .contact-box {
            background: #111722;

            border: 1px solid #232c3c;

            border-radius: 16px;

            padding: 50px;

            text-align: center;
        }

        .contact-box h2 {
            font-size: 2.2rem;

            margin-bottom: 15px;
        }

        .contact-box p {
            color: #aab3c5;

            max-width: 650px;

            margin: 0 auto 30px;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            border-top: 1px solid #202938;

            padding: 30px 0;

            text-align: center;

            color: #7f8a9d;

            font-size: 0.85rem;
        }


        /* =========================
           TABLET
        ========================= */

        @media (max-width: 1000px) {

            .hero-container {
                grid-template-columns: 1fr;

                text-align: center;

                gap: 50px;
            }

            .hero-content {
                max-width: 750px;

                margin: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-image {
                order: -1;
            }

            .profile-frame {
                width: 300px;
                height: 300px;
            }

            .about {
                grid-template-columns: repeat(2, 1fr);
            }

            .projects {
                grid-template-columns: repeat(2, 1fr);
            }
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 650px) {

            section {
                padding: 75px 0;
            }

            .nav-container {
                padding: 15px 0;
            }

            .nav-links {
                gap: 15px;
            }

            .nav-links a {
                font-size: 0.8rem;
            }

            .hero {
                min-height: 80vh;

                padding: 60px 0;
            }

            .profile-frame {
                width: 230px;
                height: 230px;
            }

            .hero h1 {
                font-size: 3rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .about {
                grid-template-columns: 1fr;
            }

            .projects {
                grid-template-columns: 1fr;
            }

            .contact-box {
                padding: 35px 20px;
            }

            .contact-box h2 {
                font-size: 1.8rem;
            }
        }

    </style>

</head>


<body>


    <!-- =========================
         NAVIGATION
    ========================= -->

    <nav>

        <div class="nav-container">

            <a href="#home" class="logo">
                JD
            </a>

            <ul class="nav-links">

                <li>
                    <a href="#about">
                        About
                    </a>
                </li>

                <li>
                    <a href="#projects">
                        Projects
                    </a>
                </li>

                <li>
                    <a href="#skills">
                        Skills
                    </a>
                </li>

                <li>
                    <a href="#contact">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </nav>


    <!-- =========================
         HERO
    ========================= -->

    <section class="hero" id="home">

        <div class="container hero-container">


            <!-- LEFT SIDE -->

            <div class="hero-content">

                <div class="hero-small">
                    Web and Mobile Developer
                </div>

                <h1>
                    I brain rot and build things<br>

                    <span>
                        for the web.
                    </span>
                </h1>

                <p>
                    I'm a graduating Information Technology student
                    specializing in Web and Mobile Development. I enjoy
                    building practical applications using modern web
                    technologies.
                </p>

                <div class="hero-buttons">

                    <a
                        href="#projects"
                        class="btn btn-primary"
                    >
                        View My Projects
                    </a>

                    <a
                        href="#contact"
                        class="btn btn-secondary"
                    >
                        Contact Me
                    </a>

                    <a
                        href="{{ asset('cv/GUEVARA_CV.pdf') }}"
                        class="btn btn-secondary"
                        download
                    >
                        Download CV
                    </a>

                    <a
                        href="https://github.com/jdyuguevara69-hue"
                        class="btn btn-secondary"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        GitHub
                    </a>

                </div>

            </div>


            <!-- RIGHT SIDE / PROFILE PHOTO -->

            <div class="hero-image">

                <div class="profile-frame">

                    <img
                        src="{{ asset('images/profile.jpg') }}"
                        alt="Jeffrey Daniel Guevara"
                    >

                </div>

            </div>


        </div>

    </section>


    <!-- =========================
         ABOUT
    ========================= -->

    <section id="about">

        <div class="container">


            <div class="section-title">

                <span>
                    About Me
                </span>

                <h2>
                    Who I Am
                </h2>

            </div>


            <div class="about">


                <!-- CARD 1 -->

                <div class="about-card">

                    <h3>
                        Who I Am
                    </h3>

                    <p>
                        Im Jeffrey Daniel Yu Guevara, but my nickname is JD
                        and I'm a graduating student from University of Santo Tomas,
                        studying BS Information Technology Specialized in Web
                        and Mobile Development. I am born on February 18, 2002
                    </p>

                </div>


                <!-- CARD 2 -->

                <div class="about-card">

                    <h3>
                        What I Do
                    </h3>

                    <p>
                        I work with technologies such as Laravel, PHP,
                        JavaScript, HTML, CSS, databases, and Linux to build
                        practical and reliable applications. I also love making game server and home file server.
                    </p>

                </div>


                <!-- CARD 3 -->

                <div class="about-card">

                    <h3>
                        Personal Experience
                    </h3>

                    <p>
                        I worked with the One Outsource Direct Corporation Group
                        as a Network Infrastructure Intern from February 2026 -
                        May 2026. I handled server management and physical
                        hardware related to networking.
                    </p>

                </div>


            </div>

        </div>

    </section>


    <!-- =========================
         PROJECTS
    ========================= -->

    <section id="projects">

        <div class="container">


            <div class="section-title">

                <span>
                    My Work
                </span>

                <h2>
                    Projects
                </h2>

            </div>


            <div class="projects">


                <!-- PROJECT 1 -->

                <div class="project-card">

                    <div class="project-number">
                        01
                    </div>

                    <h3>
                        Weekly Report Builder
                    </h3>

                    <p>
                        A productivity application that turns weekly notes
                        into structured and professional reports ready for
                        Microsoft Word.
                    </p>

                    <div class="project-tech">

                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                        <span>DOCX</span>

                    </div>


                    <div class="project-actions">
                        <a
                            href="https://github.com/jdyuguevara69-hue/Weekly-Report-Builder"
                            class="project-link github"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            View on GitHub
                        </a>
                    </div>

                </div>


                <!-- PROJECT 2 -->

                <div class="project-card">

                    <div class="project-number">
                        02
                    </div>

                    <h3>
                        Minecraft Server Platform
                    </h3>

                    <p>
                        A server hosting environment designed for managing
                        multiple Minecraft servers, resources, networking,
                        and virtualization.
                    </p>

                    <div class="project-tech">

                        <span>Linux</span>
                        <span>Ubuntu</span>
                        <span>Java</span>
                        <span>Networking</span>

                    </div>


                    <div class="project-actions">
                        <a
                            href="https://github.com/jdyuguevara69-hue/Minecraft-Server"
                            class="project-link github"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            View on GitHub
                        </a>
                    </div>

                </div>


                <!-- PROJECT 3 -->

                <div class="project-card">

                    <div class="project-number">
                        03
                    </div>

                    <h3>
                        GSIS Edu Hub
                    </h3>

                    <p>
                        A web-based online booking application for
                        government-based employees.
                    </p>

                    <div class="project-tech">

                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>

                    </div>


                    <div class="project-actions">
                        <a
                            href="https://github.com/jdyuguevara69-hue/GSIS-Edu-Health"
                            class="project-link github"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            View on GitHub
                        </a>
                    </div>

                </div>


                <!-- PROJECT 4 -->

                <div class="project-card">

                    <div class="project-number">
                        04
                    </div>

                    <h3>
                        Social Media Networking App
                    </h3>

                    <p>
                        A simple mobile Android App for sharing your
                        thoughts with your friends.
                    </p>

                    <div class="project-tech">

                        <span>Flutter</span>
                        <span>PHP</span>
                        <span>JavaScript</span>

                    </div>


                    <div class="project-actions">
                        <a
                            href="https://github.com/jdyuguevara69-hue/Social-Media-Networking"
                            class="project-link github"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            View on GitHub
                        </a>
                    </div>

                </div>


                <!-- PROJECT 5 -->

                <div class="project-card">

                    <div class="project-number">
                        05
                    </div>

                    <h3>
                        Student Loan Application WebApp
                    </h3>

                    <p>
                        A simple finance loan WebApp for students in need
                    </p>

                    <div class="project-tech">

                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>

                    </div>


                    <div class="project-actions">
                        <a
                            href="https://github.com/jdyuguevara69-hue/Student-Loans"
                            class="project-link github"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            View on GitHub
                        </a>
                    </div>

                </div>


                <!-- PROJECT 6 -->

                <div class="project-card">

                    <div class="project-number">
                        06
                    </div>

                    <h3>
                        Simple Valentine Invitation Web App
                    </h3>

                    <p>
                        A simple Valentine invitation for your special
                        loved one.
                    </p>

                    <div class="project-tech">

                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>

                    </div>


                    <div class="project-actions">
                        <a
                            href="https://github.com/jdyuguevara69-hue/Simple-Valentines-Invitation"
                            class="project-link github"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            View on GitHub
                        </a>
                    </div>

                </div>


                <!-- PROJECT 7 -->

                <div class="project-card">

                    <div class="project-number">
                        07
                    </div>

                    <h3>
                        Fruitectives AI Mobile Application
                    </h3>

                    <p>
                        Fruitectives was developed with a wide range of users
                        in mind, including health-conscious individuals,
                        farmers, retailers, and those with sensory or dietary
                        limitations. Fruitectives provides something for
                        everyone, whether looking for perfectly ripe fruit,
                        a nutritionist seeking thorough fruit data, or a
                        community member who wants to share tips and insights.
                    </p>

                    <div class="project-tech">

                        <span>Flutter</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>RoboFlow</span>

                    </div>


                    <div class="project-actions">
                        <a
                            href="https://github.com/jdyuguevara69-hue/fruitectivesAI2.0"
                            class="project-link github"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            View on GitHub
                        </a>
                    </div>

                </div>


            </div>

        </div>

    </section>


    <!-- =========================
         SKILLS
    ========================= -->

    <section id="skills">

        <div class="container">


            <div class="section-title">

                <span>
                    Technologies
                </span>

                <h2>
                    Skills
                </h2>

            </div>


            <div class="skills">

                <div class="skill">
                    Laravel
                </div>

                <div class="skill">
                    PHP
                </div>

                <div class="skill">
                    JavaScript
                </div>

                <div class="skill">
                    HTML
                </div>

                <div class="skill">
                    CSS
                </div>

                <div class="skill">
                    MySQL
                </div>

                <div class="skill">
                    Git
                </div>

                <div class="skill">
                    Linux
                </div>

                <div class="skill">
                    REST APIs
                </div>

                <div class="skill">
                    GitHub
                </div>

                <div class="skill">
                    Blade
                </div>

                <div class="skill">
                    Java
                </div>

                <div class="skill">
                    Cisco
                </div>

                <div class="skill">
                    FTP
                </div>

                <div class="skill">
                    Android App
                </div>

                <div class="skill">
                    iOS App
                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         CONTACT
    ========================= -->

    <section id="contact">

        <div class="container">

            <div class="contact-box">

                <h2>
                    Let's Work Together
                </h2>

                <p>
                    I'm always interested in building new projects,
                    learning new technologies, and working on practical
                    software solutions.
                </p>

                <div class="hero-buttons" style="justify-content: center;">

                    <a
                        href="mailto:jeffreydanielguevara@gmail.com"
                        class="btn btn-primary"
                    >
                        Get In Touch
                    </a>

                    <a
                        href="{{ asset('cv/GUEVARA_CV.pdf') }}"
                        class="btn btn-secondary"
                        download
                    >
                        Download CV
                    </a>

                    <a
                        href="https://github.com/jdyuguevara69-hue"
                        class="btn btn-secondary"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        GitHub
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        <div class="container">

            <p>
                © {{ date('Y') }}
                Jeffrey Daniel Yu Guevara.
                All rights reserved.
            </p>

        </div>

    </footer>


</body>

</html>
```
