<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://use.typekit.net/hqh4sap.css">
    <style>

body {
    font-family: transat-text,sans-serif;
    font-weight: 400;
    font-style: normal;
    margin: 0;
}

section {
    background-color: white;
}

.hero {
    background-color: #000000;
    height: 100vh;
    color: white;
    font-size: 40px;
}

@import @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro');

p {
  border-right: solid 3px rgba(0,255,0,.75);
  white-space: nowrap;
  overflow: hidden;    
  font-family: 'Source Code Pro', monospace;  
  font-size: 28px;
  color: #69f0ae;
}

/* Animation */
p {
  animation: animated-text 10s steps(40) 1s 1 normal both,
             animated-cursor 800ms steps(40) infinite;
}

p {
  white-space: nowrap;
  overflow: hidden;    
}

/* text animation */

@keyframes animated-text{
  from{width: 0;}
  to{width: 472px;}
}

/* cursor animations */

@keyframes animated-cursor{
  from{border-right-color: rgba(0,255,0,.75);}
  to{border-right-color: transparent;}
}



nav {
    display: flex;
    justify-content: space-between;
}

ul {
    display: flex;
    list-style-type: none;
    width: 500px;
    justify-content: space-around;
    font-size: 30px;
}

li {
    text-decoration: none;
}

footer {
    background-color: #69f0ae;
    color: #000000;
    text-align: center;
    padding: 80px;
}

h1 {
    font-size: 90px;
    margin: 0;
}

h2 {
    font-size: 50px;
}

p {
    margin: 0;
    font-size: 30px;
    font-weight: 300;
}

.subtext {
    font-size: 15px;
    font-weight: 300;
}

.hero-area {
    display: flex;
    height: 100%;
    justify-content: space-between;
    align-items: center;
}

.hero-text {
    margin-left: 80px;
    margin-bottom: 200px;
}

.button {
    width: 200px;
    height: 50px;
    border-radius: 30px;
    background-color: #69f0ae;
    text-align: center;
    font-size: 25px;
    font-weight: 300;
    color: #000000;
    padding-top: 15px;
    margin-top: 15px;
}

.button:hover {
    background-color: #69f0ae;
    color: #000000;
    cursor: pointer;
}

.button:active {
    background-color: #000000;
    color: #000000;
}

.button-info a {
    color: black;
}

.socials {
    padding-bottom: 200px;
}

.logo {
    height: 80px;
    margin: 30px;
}
.social {
    margin: 20px;
}

.sub-section {
    display: flex;
    justify-content: space-around;
    padding: 80px;
}

.sub-section-alternative {
    display: flex;
    flex-direction: column;
    text-align: center;
    padding: 80px;
}

.headshot {
    width: 300px;
    border-radius: 150px;
    margin-left: 80px;
}

.headshot-container {
    display: flex;
    align-items: center;
}

.project-card {
    width: 300px;
    height: 500px;
    box-shadow: 5px 5px 20px rgb(197, 195, 195);
    margin: 10px;
}

.project-container {
    display: flex;
    justify-content: space-around;
}

@media only screen and (max-width: 1000px) {
    .project-container {
        display: flex;
        flex-wrap: wrap;
    }
}

.project-image {
    margin-top: 25px;
    width: 250px;
    border-radius: 125px;
}

hr {
    margin-left: 20px;
    margin-right: 20px;
}

.project-link {
    text-decoration: none;
    color: #69f0ae;
}

a {
    text-decoration: none;
    color: white;
}


@media only screen and (max-width: 1000px) {

    ul {
        display: none;
        background-color: #2b2c38;
        margin: 0ppx;
    }

    ul.show {
        display: block;
    }

    nav {
        display: flex;
        flex-direction: column-reverse;
        background-color: #2b2c38;
    }

    .logo {
        display: none;
    }
}
    </style>
    <link rel="stylesheet" href="src/styles.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/761e4c8e5c.js" crossorigin="anonymous"></script>
    <title>Portfolio</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
      <section class="hero">
          <nav>
              <ul id="nav-list">
                  <li><a href="#about-me">About me</a></li>
                  <li><a href="#projects">Projects</a></li>
                  <li><a href="contactform.php">Contact</a></li>
              </ul>
          </nav>
          <div class="hero-area">
            <div class="hero-text">
                <h1>Brittney Banning</h1>
                <p>Passionate Design Creative</p>
                <div class="button"><a href="#about-me">About me</a></div>
            </div>
            <div class="socials">
                <div><a href="https://twitter.com/bellusvita_" class="social">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="50" height="50" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                </a></div>
                <div><a href="https://github.com/brittneyleighb"  class="social">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="50" height="50" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a></div>
                <div><a href="https://www.linkedin.com/in/brittneybanning/"  class="social">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="50" height="50" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                </a></div>
            </div>
          </div>
      </section>
      <section class="sub-section" id="about-me">
          <div class="information">
              <h2>About Me</h2>
              <h3>Hi, I'm a voracious learner witha love for storytelling, imaginary worlds, and all things design. Currently working on Front End Development and UX Design projects.</h3>
          </div>
          <div class="headshot-container">
              <img class="headshot" src="https://live.staticflickr.com/65535/52563218494_713546bba2_z.jpg" alt="Brittney Banning headshot"/>
          </div>
      </section>
      <section class="sub-section-alternative" id="projects">
          <h2>Projects</h2>
          <div class="project-container">
              <div class="project-card">
                  <img class="project-image" src="https://live.staticflickr.com/65535/52562635354_ff030c61b1_k.jpg" alt="Project One Image"/>
                  <h3>Arcade App UX</h3>
                  <h4 class="subtext">A UX Design concept app made with Figma to look up arcades and arcade games in the New York City metropolitan area.</h4>
                  <hr/>
                  <h4 class="subtext"><a class="project-link" href="https://issuu.com/brittneyleighb/docs/google_ux_design_certificate_-_portfolio_project_1">View here</a></h4>
              </div>
              <div class="project-card">
                <img class="project-image" src="https://live.staticflickr.com/65535/52562812830_66d336fe4f_k.jpg" alt="Project Two Image"/>
                <h3>Educational Coding App and Responsive Website</h3>
                <h4 class="subtext">A UX Design concept made with Figma to help young adults to learn how to code.</p>
                <hr/>
                <h4 class="subtext"><a class="project-link" href="https://issuu.com/brittneyleighb/docs/google_ux_design_certificate_-_portfolio_project_3">View here</a></h4>
              </div>
              <div class="project-card">
                <img class="project-image" src="https://live.staticflickr.com/65535/52562635284_0461e1afcf_b.jpg" alt="Project Three Image"/>
                <h3>Art Courses Website</h3>
                <h4 class="subtext">UX Design concept made with Adobe XD, an art courses website.</h4>
                <hr/>
                <h4 class="subtext"><a class="project-link" href="https://issuu.com/brittneyleighb/docs/google_ux_design_certificate_-_portfolio_project_2">View here</a></h4>
              </div>
              <div class="project-card">
                <img class="project-image" src="https://live.staticflickr.com/65535/52562908463_85da339bd7_h.jpg" alt="Project Four Image"/>
                <h3>HTML Webpage</h3>
                <h4 class="subtext">A webpage made with HTML, CSS, and Bootstrap for a Harvard CS50 assignment.</h4>
                <hr/>
                <h4 class="subtext"><a class="project-link" href="https://vimeo.com/780972336">View here</a></h4>
              </div>
          </div>
      </section>
      <footer>
            <div class="footer">
                Created with ♥️ and ☕️ by <a href="https://github.com/brittneyleighb" target="_blank">Brittney Banning</a>
            </div>
      </footer>
    <script src="src/app.js"></script>
  </body>
</html>