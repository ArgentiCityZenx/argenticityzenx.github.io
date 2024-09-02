<?php include('header.php'); ?>

    <main>
        <section id="portfolio" class="portfolio-section">
            <h2>My Projects</h2>
            <div class="cards">
                <div class="card" role="button" onclick="redirect(a)">
                    <div class="card-info">
                        <span class="card-title">Mickey Ears</span>
                        <span class="card-description">
                            A PPC generator for Mickey Ears from WDW
                        </span>
                    </div>
                    <img src="img1.png" alt="Mickey Ears">
                </div>
                <div class="card" role="button" onclick="redirect(b)">
                    <div class="card-info">
                        <span class="card-title">Footer</span>
                        <span class="card-description">
                            A responsive footer using HTML and CSS.
                        </span>
                    </div>
                    <img src="img2.png" alt="Footer">
                </div>
                <div class="card" role="button" onclick="redirect(c)">
                    <div class="card-info">
                        <span class="card-title">Notification</span>
                        <span class="card-description">
                            Did you know that you can show notification using API?
                        </span>
                    </div>
                    <img src="img3.png" alt="Notification">
                </div>
                <div class="card" role="button" onclick="redirect(d)">
                    <div class="card-info">
                        <span class="card-title">Profile Card</span>
                        <span class="card-description">
                            A Profile Card using HTML and CSS.
                        </span>
                    </div>
                    <img src="img4.png" alt="Profile Card">
                </div>
                <div class="card" role="button" onclick="redirect(e)">
                    <div class="card-info">
                        <span class="card-title">Cart</span>
                        <span class="card-description">
                            A cart structure using HTML and CSS.
                        </span>
                    </div>
                    <img src="img5.png" alt="Cart">
                </div>
                <div class="card" role="button" onclick="redirect(f)">
                    <div class="card-info">
                        <span class="card-title">Dashboard</span>
                        <span class="card-description">
                            A simple dashboard design using HTML and CSS.
                        </span>
                    </div>
                    <img src="img6.png" alt="Dashboard">
                </div>
            </div>
        </section>

        <section id="about">
            <h2>About Me</h2>
            <p>I'm a Front-End Web Developer and Content Creator. I love to create and learn new things. I enjoy working in teams and connecting with interesting people. I'm always looking for new opportunities to learn and grow, both as a developer and as a person.</p>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <p>You can contact me by <a href="mailto:santino.almada@gmail.com">e-mail</a>.</p>
        </section>
    </main>

<?php include('footer.php'); ?>
