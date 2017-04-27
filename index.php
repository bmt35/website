<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script src="https://use.fontawesome.com/d121d07cb0.js"></script>
    <link rel="stylesheet" href="css/custom.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <header>
      <?php
      	  include "source/nav_bar.php";
      ?>
      <div class="parallax-container valign-wrapper">
        <div class ="container">
          <div class="row">
            <div class="col l8 s12 white-text">
              <h4 class="thin-text left-align  lighten-3-text valign">I'm Brandon a senior CS major at Pitt. Here is what I've taken during my 4 years here.</h4>
            </div>
          </div>
        </div>
        <div class="parallax"><img src="images/pc.jpeg"></div>
      </div>
    </header>
    <main>
      <h2 class="white-text thin-text center-align  lighten-3-text valign">Course Work</h2>
      <div class="row center-cols center-align section scrollspy" id='about'>
        <div class="col m4 offset-m2">
          <div class="card blue-grey lighten-2">
            <span class="card-title ">Year 1</span>
            <div class="card-content thin-text">
              <?php
                include "source/year_1.php";
              ?>
            </div>
          </div>
        </div>
        <div class="col m4">
          <div class="card blue-grey lighten-2" id="intern2">
            <span class="card-title">Classes Taken</span>
            <div class="card-content thin-text">
              <ul class="collection">
                <li class="collection-item">Calc 1</li>
                <li class="collection-item">Discrete Math 1&amp; 2</li>
                <li class="collection-item">Perspectives in CS</li>
                <li class="collection-item">Intro to Ada</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row center-cols center-align section scrollspy">
        <div class="col m4 offset-m2">
          <div class="card blue-grey lighten-2">
            <span class="card-title">Year 2</span>
              <div class="card-content thin-text">
                <?php
                include "source/year_2.php";
              ?>
              </div>
          </div>
        </div>
        <div class="col m4">
          <div class="card blue-grey lighten-2" id="intern2">
            <span class="card-title">Classes Taken</span>
            <div class="card-content thin-text">
              <ul class="collection">
                <li class="collection-item">Calc 2</li>
                <li class="collection-item">Intermediate Java</li>
                <li class="collection-item">Data Structures</li>
                <li class="collection-item">Computer Org. &amp; Assemlby Language</li>
                <li class="collection-item">Statistics</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row center-cols center-align section scrollspy">
        <div class="col m4 offset-m2">
          <div class="card blue-grey lighten-2">
            <span class="card-title" ">Year 3</span>
            <div class="card-content thin-text">
              <?php
                include "source/year_3.php";
              ?>
            </div>
          </div>
        </div>
        <div class="col m4">
          <div class="card blue-grey lighten-2" id="intern2">
            <span class="card-title">Classes Taken</span>
            <div class="card-content thin-text">
              <ul class="collection">
                <li class="collection-item">Linear Algebra</li>
                <li class="collection-item">Systems Software</li>
                <li class="collection-item">Algorithm Implementation</li>
                <li class="collection-item">Compiler Design</li>
                <li class="collection-item">Formal Methods in Computer Science</li>
              </ul>
            </div>
          </div>
        </div>
      </div>    
      <div class="row center-cols center-align section scrollspy">
        <div class="col m4 offset-m2">
          <div class="card blue-grey lighten-2">
            <span class="card-title" ">Year 4</span>
            <div class="card-content thin-text">
              <?php
                include "source/year_4.php";
              ?>
            </div>
          </div>
        </div>
        <div class="col m4">
          <div class="card blue-grey lighten-2" id="intern2">
            <span class="card-title">Classes Taken</span>
            <div class="card-content thin-text">
              <ul class="collection">
                <li class="collection-item">Software Quality Assurance</li>
                <li class="collection-item">Operating Systems</li>
                <li class="collection-item">Software Engineering</li>
                <li class="collection-item">Web Apps</li>
                <li class="collection-item">Data Science</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <h2 class="white-text thin-text center-align  lighten-3-text valign">Work Experience</h2>
      <div class="row center-cols center-align section scrollspy" id="career">
        <div class="col m4 offset-m2">
          <div class="card blue-grey lighten-2" id="intern1">
            <span class="card-title">UPMC Information Services Division, <br>Intern (Summer 2016)</span>
            <div class="card-content thin-text">
              <?php
                include "source/intern_1.php";
              ?>
            </div>
          </div>
        </div>
        <div class="col m4">
          <div class="card blue-grey lighten-2" id="intern2">
            <span class="card-title">Tools used</span>
            <div class="card-content thin-text">
              <ul class="collection">
                <li class="collection-item">HP Service manager</li>
                <li class="collection-item">Microsoft Access</li>
                <li class="collection-item">VBA, Dax</li>
                <li class="collection-item">SQL</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row center-cols center-align section scrollspy" id="career">
        <div class="col m4 offset-m2">
          <div class="card blue-grey lighten-2" id="intern1">
            <span class="card-title">UPMC Information Services Division, <br>Intern (Summer 2016)</span>
            <div class="card-content thin-text">
              <?php
                include "source/intern_2.php";
              ?>
            </div>
          </div>
        </div>
        <div class="col m4">
          <div class="card blue-grey lighten-2" id="intern2">
            <span class="card-title">Tools used</span>
            <div class="card-content thin-text">
              <ul class="collection">
                <li class="collection-item">Microsoft Power BI</li>
                <li class="collection-item">SQL Server</li>
                <li class="collection-item">SQL</li>
                <li class="collection-item">VBA, DAX</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="fixed-action-btn horizontal">
          <a class="btn-floating btn-large red tooltipped data-position="left" data-delay="50" data-tooltip="Resume" href='documents\resume_3.pdf' target="_blank"">
            <i class="large material-icons">attach_file</i>
          </a>
        </div>
      </div>
      <div class="divider"></div>
      <h2 class="white-text thin-text center-align  lighten-3-text valign">Contact me</h2>
      <div class="row section scrollspy" id="contact">
        <form class="col s12 action" action="form_submit.php" method="post">
          <div class="row">
            <div class="input-field col s6 thin-text left-align  lighten-3-text valign">
              <i class="material-icons prefix">account_circle</i>
              <input name="fname" id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">First Name</label>
            </div>
            <div class="input-field col s6 thin-text left-align  lighten-3-text valign">
              <i class="material-icons prefix">phone</i>
              <input name="phone" id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Telephone</label>
            </div>
            <div class="input-field col s6 thin-text left-align  lighten-3-text valign">
              <i class="material-icons prefix">account_circle</i>
              <input name="lname" id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">Last Name</label>
            </div>
            <div class="input-field col s6 thin-text left-align  lighten-3-text valign">
              <i class="material-icons prefix">email</i>
              <input name="email" id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">Email</label>
            </div>
            <div class="input-field col s12 thin-text left-align  lighten-3-text valign">
              <i class="material-icons prefix">mode_edit</i>
              <input name="msg" type="text" id="icon_prefix2" class="materialize-textarea">
              <label for="icon_prefix2">Message</label>
            </div>  
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons left">send</i>
          </button>
        </div>
      </div>
    </main>
    <footer class="page-footer blue-grey darken-4">
      <div class="footer-copyright">
        <div class="container">
          &copy; Brandon Torchia
          <a class="right" href="mailto:bmt35@pitt.edu?Subject=Website%20Email" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>
          <a class="right" href="https://www.linkedin.com/in/brandontorchia/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
        </div>
      </div>
    </footer>  
    <!--Import jQuery before materialize.js-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
        