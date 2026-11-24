



<?php
include('header.php');

?>

<section class="hero">
    <a href= "#intro" class="scroll-arrow" aria-label="scroll naar introductie">&darr;</a>
    <div class= "hero-content">
        <h1>Roy Biesheuvel</h1>
        <h2>Webdeveloper in opleiding</h2>
        <p>Van nieuwsgierigheid naar code. Ik ontwikkel mijn vaardigheden en bouw aan mijn toekomst als developer.</p>
    
       <div class= "intro-knoppen">
        <a href="Mijn.projecten.php" class="projecten-knop">Bekijk mijn projecten</a>

        <a href="over.mij.php" class="over-mij-knop">lees meer over mij</a>
        </div>
    </div>
</section>

<section class="intro content container" id="intro">
    
    <div class="intro-tekst">
        <h2>Van interesse naar <span>ontwikkeling</span></h2>

        

        <p>
          Mijn interesse in technologie heeft mij ertoe gebracht
    om te leren programmeren. Momenteel ontwikkel ik mijn
    vaardigheden in HTML, CSS en PHP. Door zelfstandig
    projecten te bouwen, breng ik mijn kennis in de praktijk
    en werk ik toe naar een carrière als webdeveloper.
        </p>
  
    
    </div>

    <div class="intro-foto">
        <div class = "coding-window">
            <div class = "coding-header">
                <div class="code-dot red"></div>
                <div class="code-dot yellow"></div>
                <div class="code-dot green"></div>
                <span class="code-title">portfolio.php</span>

            </div>
            <div class = "coding-body">
                <div><span class="coding-php">&lt;?php</span></div>
                <div><span class="coding-name">$naam = "Roy";</span></div>
                <div><span class="coding-php">$skills</span>
                    <span>  =</span>
                    <span>[</span>
                    <span class = "coding-name">"HTML"</span>
                    <span>,</span>
                    <span class= "coding-name">"CSS"</span>
                    <span>,</span>
                    <span class="coding-name">"PHP"</span>
                    <span>]; </span>
            
                </div>
                <div>?&gt;</div>
                <div class="afbeelding2">
                    <h3>HTML</h3>
                    <p>de basis van websites</p>
                </div>

                 <div class="afbeelding3">
                    <h3>PHP</h3>
                    <p>dynamische websites</p>
                </div>
</div>

</section> 



<section class="container projecten">
    <h2>Mijn projecten</h2>

        <div class="project-grid">
            <div class="project-card">
            <div class="project-image">
                Portfolio website
            </div>

            <div class="project-info">
                <h3>Mijn portfolio website</h3>
                <span class="project-status">In ontwikkeling</span>
                <p>Het leren en onder de knie krijgen van de basis.</p>
                <div class="project-skills">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>PHP</span>
                </div>
            </div>
        </div>

        <div class="project-card">
        <div class= "project-image">
                Basketbalstatistieken
        </div>
            <div class="project-info">
                <h3>Basketbalstatistieken</h3>
           
        
            <span class="project-status-gepland">Op de planning</span>
            <p>Een website voor het bijhouden van statistieken en terugkijken van wedstrijden.</p>
            
             </div>
        </div>

        </div>

    
</section>

            </div>
        </div> 
    
    </div>

   <script src="script.js"></script>


      <?php
include('footer.php');

?>


 

       
        




   

         
       

    