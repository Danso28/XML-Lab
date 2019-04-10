<?php
include("heading.php");
$xmlpersonal = ("xml/personal.xml");
$xmlDocumentpersonal = new DOMDocument();
$xmlDocumentpersonal->load($xmlpersonal);

$personals = $xmlDocumentpersonal->getElementsByTagName('contact');

$xmleducation = ("xml/education.xml");
$xmlDocumenteducation = new DOMDocument();
$xmlDocumenteducation->load($xmleducation);

$educations = $xmlDocumenteducation->getElementsByTagName('school');

$xmlexperience = ("xml/experience.xml");
$xmlDocumentexperience = new DOMDocument();
$xmlDocumentexperience->load($xmlexperience);

$experiences = $xmlDocumentexperience->getElementsByTagName('company');

$xmlproject = ("xml/project.xml");
$xmlDocumentproject = new DOMDocument();
$xmlDocumentproject->load($xmlproject);

$projects = $xmlDocumentproject->getElementsByTagName('project');

$xmlskill = ("xml/skill.xml");
$xmlDocumentskill = new DOMDocument();
$xmlDocumentskill->load($xmlskill);

$skills = $xmlDocumentskill->getElementsByTagName('skill');?>
  <div class="heading" >
     <nav class="uk-navbar-container  uk-navbar-transparent" uk-navbar >
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
              <a class="uk-navbar-item uk-logo" href="#"><img id="logo-icon" src="image/logo.jpg" alt=""></a>
                <li class="uk-active uk-visible@m"><a href="#">Vera A. Dansoh </a></li>
            </ul>
        </div>
        <div class="uk-navbar-right uk-visible@m">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#Personal">Personal</a></li>
                <li class="uk-active"><a href="#Education">Education</a></li>
                <li class="uk-active"><a href="#Experience">Experience</a></li>
                <li class="uk-active"><a href="#Projects">Projects</a></li>
                <li class="uk-active"><a href="#Skills">Skills</a></li>
            </ul>
        </div>
        <div class="uk-hidden@m uk-position-center">
          <a href="#offcanvas-slide" uk-icon="icon: menu" uk-toggle></a>
          <div id="offcanvas-slide" uk-offcanvas>
            <div class="uk-offcanvas-bar">
              <ul class="uk-nav uk-nav-default">
                <li class="uk-active"><a href="#Personal">Personal</a></li>
                <li class="uk-active"><a href="#Education">Education</a></li>
                <li class="uk-active"><a href="#Experience">Experience</a></li>
                <li class="uk-active"><a href="#Projects">Projects</a></li>
                <li class="uk-active"><a href="#Skills">Skills</a></li>
              </ul>
          </div>
        </div>
      </div>
    </nav>
  <div class="uk-section uk-section-medium" >
    <div class=" uk-container">
      <div class="uk-grid-match uk-child-width-1-2@m uk-grid">
      <div class="hero-image"></div>
      <div class="uk-flex-center uk-flex-middle">
        <div class="uk-grid-match uk-child-width-1-1@m uk-grid ">
          <div class="uk-flex-middle">
            <h1 id="title">Hi. I am a Developer</h1>
            <a class="uk-width-small uk-button uk-button-medium hero-button uk-center" href="convert.php">Resume</a>
        </div>
      </div>
      </div>
      </div>
      </div>
  </div>
  <div class="uk-section uk-section-medium" id="Personal">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div>
              <img src="image/birdbranch.svg" alt="bird" id="bird">
            </div>
            <div>
              <?php for ($i=0; $i< $personals->length; $i++): ?>
                  <h5><?php echo $personals->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue; ?></h5>
                  <p><?php echo $personals->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue; ?> </p>
                  <a class="uk-icon-button uk-width-small uk-margin-small-right" uk-icon="linkedin" href="<?php echo $personals->item($i)->getElementsByTagName('linkedin')->item(0)->childNodes->item(0)->nodeValue; ?>"></a>
                  <a class="uk-icon-button uk-width-small uk-margin-small-right" uk-icon="github-alt" href="<?php echo $personals->item($i)->getElementsByTagName('github')->item(0)->childNodes->item(0)->nodeValue; ?>"></a>
               <?php endfor;?>

              </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-section-medium " id="Education">
      <div class="uk-container">
          <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
              <div>
                <h3>Education</h3>
                <?php for ($i=0; $i< $educations->length; $i++): ?>
                  <div class="">
                    <h5><?php echo $educations->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue; ?></h5>
                    <p><?php echo $educations->item($i)->getElementsByTagName('major')->item(0)->childNodes->item(0)->nodeValue; ?> </br>
                    <?php echo $educations->item($i)->getElementsByTagName('minor')->item(0)->childNodes->item(0)->nodeValue; ?></br>
                    <?php echo $educations->item($i)->getElementsByTagName('duration')->item(0)->childNodes->item(0)->nodeValue; ?></p>
                    </div>
                 <?php endfor;?>
              </div>
              <div class="">
                <img src="image/birdtwo.svg" alt="bird" id="birdtwo">
              </div>
              </div>
              </div>
              </div>
      <div class="uk-section uk-section-medium " id="Experience">
            <div class="uk-container">
            <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
              <div class="uk-flex-center uk-flex-middle " >
                <img src="image/birch-leaf-gold-.svg" alt="branch leaf" id="branchleaf">
              </div>
              <div>
                  <h3 id="Experience">Experience</h3>
                <?php for ($i=0; $i< $experiences->length; $i++): ?>
                    <h5><?php echo $experiences->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue; ?></h5>
                    <p><?php echo $experiences->item($i)->getElementsByTagName('duration')->item(0)->childNodes->item(0)->nodeValue; ?>
                    <?php echo $experiences->item($i)->getElementsByTagName('location')->item(0)->childNodes->item(0)->nodeValue; ?> </p>
                    <ul class="uk-list uk-list-bullet ">
                    <li><?php echo $experiences->item($i)->getElementsByTagName('taskone')->item(0)->childNodes->item(0)->nodeValue; ?> </li>
                    <li><?php echo $experiences->item($i)->getElementsByTagName('tasktwo')->item(0)->childNodes->item(0)->nodeValue; ?> </li>
                    <li><?php echo $experiences->item($i)->getElementsByTagName('taskthree')->item(0)->childNodes->item(0)->nodeValue; ?> </li>
                    </ul>
                 <?php endfor;?>
                </div>
              </div>
          </div>
      </div>
      <div class="uk-section uk-section-medium " id="Projects">
        <div class="uk-container">
            <h3>Projects</h3>
            <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
                  <?php for ($i=0; $i< $projects->length; $i++): ?>
                      <h5><?php echo $projects->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue; ?></h5>
                      <p><?php echo $projects->item($i)->getElementsByTagName('summary')->item(0)->childNodes->item(0)->nodeValue; ?>
                      <?php echo $projects->item($i)->getElementsByTagName('skills-used')->item(0)->childNodes->item(0)->nodeValue; ?></p>
                   <?php endfor;?>
                  </div>

                </div>
            </div>
            <div class="uk-section uk-section-medium " id="Skills">
              <div class="uk-container">
                  <h3>Skills</h3>
                  <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
                    <div>
                        <?php for ($i=0; $i< $skills->length; $i++): ?>
                            <?php echo $skills->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue; ?>
                         <?php endfor;?>
                        </div>
                        <div >
                          <img src="image/branch-tree2.png" alt="dead tree" id="tree">
                        </div>
                      </div>
                  </div>
        </div>
    <?php include("footer.php"); ?>
