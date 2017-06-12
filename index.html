<!DOCTYPE html>
<html  ng-app="project">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quizz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Google fonts - Roboto for copy, Montserrat for headings-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
 
    <div ng-include="'header.html'"></div>
    <!-- *** LOGIN MODAL ***_________________________________________________________
    -->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="Login" class="modal-title">Customer login</h4>
          </div>
          <div class="modal-body">
            <form action="customer-orders.html" method="post">
              <div class="form-group">
                <input id="email_modal" type="text" placeholder="email" class="form-control">
              </div>
              <div class="form-group">
                <input id="password_modal" type="password" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button type="button" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="client-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->
 <div class="ng-view"></div>
    
 <div ng-include="'footer.html'"></div>
    <button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm hidden-xs hidden-sm"><i class="fa fa-cog fa-2x"></i></button>
    <div id="style-switch" class="collapse">
      <h4 class="text-uppercase">Select theme colour</h4>
      <form class="margin-bottom">
        <select name="colour" id="colour" class="form-control">
          <option value="">select colour variant</option>
          <option value="default">red</option>
          <option value="pink">pink</option>
          <option value="green">green</option>
          <option value="violet">violet</option>
          <option value="sea">sea</option>
          <option value="blue">blue</option>
        </select>
      </form>
      <p><img src="img/template-mac.png" alt="" class="img-responsive"></p>
      <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-resource.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.min.js">
   </script>
    <script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/0.9.0/angularfire.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      angular.module('project', ['ngRoute', 'firebase'])
 
     
      .service('fbAuth', function($q, $firebase, $firebaseAuth, fbRef) {
        var auth;
        return function () {
            if (auth) return $q.when(auth);
            var authObj = $firebaseAuth(fbRef);
            if (authObj.$getAuth()) {
              return $q.when(auth = authObj.$getAuth());
            }
            var deferred = $q.defer();
            authObj.$authAnonymously().then(function(authData) {
                auth = authData;
                deferred.resolve(authData);
            });
            return deferred.promise;
        }
      })
       
      .service('Projects', function($q,  fbAuth) {
        var self = this;
        this.fetch = function () {
          if (this.projects) return $q.when(this.projects);
          return fbAuth().then(function(auth) {
            var deferred = $q.defer();
            var ref = fbRef.child('projects-fresh/' + auth.auth.uid);
            var $projects = $firebase(ref);
            ref.on('value', function(snapshot) {
              if (snapshot.val() === null) {
                $projects.$set(projectListValue);
              }
              self.projects = $projects.$asArray();
              deferred.resolve(self.projects);
            });
       
            //Remove projects list when no longer needed.
            ref.onDisconnect().remove();
            return deferred.promise;
          });
        };
      })
       
      .config(function($routeProvider) {
        var resolveProjects = {
          projects: function (Projects) {
            return Projects.fetch();
          }
        };
       
        $routeProvider
          .when('/', {
            templateUrl:'views/login.html'
          })
          .when('/instrucoes', {
            templateUrl:'views/instrucoes.html'
          })
          .when('/edit/:projectId', {
            controller:'EditProjectController as editProject',
            templateUrl:'detail.html',
            resolve: resolveProjects
          })
          .when('/new', {
            controller:'NewProjectController as editProject',
            templateUrl:'detail.html',
            resolve: resolveProjects
          })
          .otherwise({
            redirectTo:'/'
          });
      })
       
      .controller('ProjectListController', function(projects) {
        var projectList = this;
        projectList.projects = projects;
      })
       
      .controller('NewProjectController', function($location, projects) {
        var editProject = this;
        editProject.save = function() {
            projects.$add(editProject.project).then(function(data) {
                $location.path('/');
            });
        };
      })
       
      .controller('EditProjectController',
        function($location, $routeParams, projects) {
          var editProject = this;
          var projectId = $routeParams.projectId,
              projectIndex;
       
          editProject.projects = projects;
          projectIndex = editProject.projects.$indexFor(projectId);
          editProject.project = editProject.projects[projectIndex];
       
          editProject.destroy = function() {
              editProject.projects.$remove(editProject.project).then(function(data) {
                  $location.path('/');
              });
          };
       
          editProject.save = function() {
              editProject.projects.$save(editProject.project).then(function(data) {
                 $location.path('/');
              });
          };
      });
    </script>
  </body>
</html>