<?php include __DIR__ . '/src/header.php'; ?>

<section id="hero">
  <div class="hero-content">
    <h1>Hi, I’m Tyler Sapp</h1>
    <p>B.S Bioinformatics: Computational Sciences - Minor in CS</p>
    <a class="btn" href="#contact">Let’s Talk</a>
  </div>
  <div class="hero-image">
    <img 
      src="/assets/images/headshot.jpg" 
      alt="Tyler Sapp" 
      class="profile-pic" 
      width="300" 
      height="300"
    >
  </div>
</section>

<section id="about">
  <h2>About Me</h2>
  <p>
    I have a B.S. in Bioinformatics with a minor in Computer Science from VCU.
    I love working with data and coding to solve real-world problems.
    My experience includes working as a Certified Pharmacy Technician, where I
    developed a strong understanding of healthcare systems and data management,
    working on projects with large-scale data sets, and creating reports and webpages
    to visualize and analyze data.
    I have a solid foundation in programming and data analysis, and I
    am always eager to learn new skills and technologies. I thrive in collaborative
    environments and enjoy working with cross-functional teams to achieve common goals.
    I specialize in PHP, SQL, Python, Java, Docker, R, and data visualization.
  </p>
</section>

<section id="experience">
  <h2>Experience</h2>
  <div class="job">
    <h3>Senior Certified Pharmacy Technician III</h3>
    <span class="date">2015 – Present</span>
    <h4>VCU Health Hospital — Richmond, VA</h4>
    <p> • Led and managed all CPhT roles within the inpatient pharmacy over 10 years, demonstrating leadership
        in diverse responsibilities. </p>
    <p> • Oversaw the training and onboarding of new pharmacy technicians, ensuring compliance with
        established protocols and procedures. </p>
    <p> • Applied extensive experience in IV room protocols, ensuring adherence to PPE standards and
        maintaining a sterile environment.   </p>
    <p> • Utilized and optimized the functionality of Cerner, EPIC, and Pyxis systems through targeted training
        and practical application. </p>
    <p> • Executed complex drug compounding and batching processes, ensuring accuracy and efficiency. </p>
    <p> • Specialized in the compounding of hazardous, chemotherapy, and investigational drugs, maintaining
        compliance with regulatory standards. </p>
    <p> • Prepared total parenteral nutrition (TPN) with precision, adhering to stringent safety and quality
        standards. </p>
    <p> • Facilitated effective communication and collaboration with nursing and provider staff to support patient
        care. </p> 
    <p> • Collaborated directly with pharmacists across multiple satellite pharmacy locations to ensure seamless
        medication management.</p>
    <p> • Administered narcotic vault procedures and managed inventory to ensure secure handling and accurate
        record-keeping.</p>
    <p> • Instructed and mentored new staff members, fostering their development and integration into pharmacy
        roles.</p>
    <p> • Adapted to staffing needs by covering additional shifts, demonstrating flexibility and commitment to
        team success.</p>
    <p> • Enforced safety protocols and ensured strict adherence to HIPAA guidelines to maintain patient
        confidentiality and compliance.</p>
    <p> • Operated efficiently in high-pressure environments, particularly on critical care floors, to support patient
        care and safety.</p>
  </div>
    <div class="job">
    <h3>Certified Pharmacy Technician III</h3>
    <span class="date">2018 – Present</span>
    <p>VCU Health Hospital — </p>
  </div>
    <div class="job">
    <h3>Certified Pharmacy Technician III</h3>
    <span class="date">2018 – Present</span>
    <p>VCU Health Hospital — </p>
  </div>
  <!-- Repeat for 1–2 other key roles or projects -->
</section>

<section id="skills">
  <h2>Skills</h2>
  <ul class="skills-grid">
    <li>PHP &amp; Laravel</li>
    <li>MySQL / PostgreSQL</li>
    <li>Python &amp; Pandas</li>
    <li>R &amp; ggplot2</li>
    <li>Docker &amp; Docker-Compose</li>
    <li>Git &amp; GitHub</li>
  </ul>
</section>

<section id="projects">
  <h2>Projects</h2>
  <div class="project-card">
    <h3>Medication Adherence System</h3>
    <p>Built a PHP/Docker app with MySQL backend to track patient adherence…</p>
    <a href="https://github.com/...">View on GitHub</a>
  </div>
  <!-- 1–2 more -->
</section>

<section id="contact">
  <h2>Get in Touch</h2>
  <form action="/src/contact.php" method="POST">
    <input name="name" placeholder="Your Name" required>
    <input name="email" type="email" placeholder="Email" required>
    <textarea name="message" placeholder="How can I help?" required></textarea>
    <button type="submit">Send Message</button>
  </form>
  <p>Or email me at <a href="mailto:sapp.tyler.c@gmail.com">sapp.tyler.c@gmail.com</a></p>
</section>

<?php include __DIR__ . '/src/footer.php'; ?>
