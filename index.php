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
    <script src='assets/three.min.js'></script>
<script src='assets/ColladaLoader.js'></script>
<script src="assets/ar.js"></script>
<script>THREEx.ArToolkitContext.baseURL = ''</script>
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
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMJEuu01oa6tT1LGdrq17m9LQs01K_Euc"
  type="text/javascript"></script>
        <!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMJEuu01oa6tT1LGdrq17m9LQs01K_Euc"></script>
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
           .when('/registrar', {
            controller:'RegistrarController as Registrar',
            templateUrl:'views/registrar.html'
          })
          .when('/imagem', {
            controller:'CameraController as Camera',
            templateUrl:'views/camera.html'
          })

          .when('/perguntas', {
            controller:'PerguntasController as Perguntas',
            templateUrl:'views/perguntas.html'
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

      .controller('RegistrarController', function() {


        var showPosition = function(position) {


        //Paulista var location = new google.maps.LatLng(-23.5632103, -46.6542503);
         var location = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: location,
                zoom: 16,
                panControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);

            var markerImage = 'img/marker.png';

            var marker = new google.maps.Marker({
                position: location,
                map: map,
                icon: markerImage
            });

            var contentString = '<div class="info-window">' +
                    '<h3>Info Window Content</h3>' +
                    '<div class="info-content">' +
                    '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>' +
                    '</div>' +
                    '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 400
            });

            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });

            var styles = [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}];

            map.set('styles', styles);
      }


         var initMap = function() {

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);

            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }

        }

        google.maps.event.addDomListener(window, 'load', initMap);


      })
       
      .controller('CameraController', function() {


          var ss = function(){
              alert("ss");
          }

          var renderer  = new THREE.WebGLRenderer({
          // antialias  : true,
          alpha: true
          });
          renderer.setClearColor(new THREE.Color('lightgrey'), 0)
          // renderer.setPixelRatio( 1/2 );
          renderer.setSize( window.innerWidth, window.innerHeight );
          renderer.domElement.style.position = 'absolute'
          renderer.domElement.style.top = '0px'
          renderer.domElement.style.left = '0px'
          document.body.appendChild( renderer.domElement );

          // array of functions for the rendering loop
          var onRenderFcts= [];

          // init scene and camera
          var scene = new THREE.Scene();

          var mixer = new THREE.AnimationMixer( scene );
          //////////////////////////////////////////////////////////////////////////////////
          //  Initialize a basic camera
          //////////////////////////////////////////////////////////////////////////////////

          // Create a camera
          var camera = new THREE.Camera();
          scene.add(camera);

          ////////////////////////////////////////////////////////////////////////////////
          // handle arToolkitSource
          ////////////////////////////////////////////////////////////////////////////////

          var arToolkitSource = new THREEx.ArToolkitSource({
          // to read from the webcam
          sourceType : 'webcam',

          // to read from an image
          // sourceType : 'image',
          // sourceUrl : THREEx.ArToolkitContext.baseURL + '../data/images/img.jpg',

          // to read from a video
          // sourceType : 'video',
          // sourceUrl : THREEx.ArToolkitContext.baseURL + '../data/videos/headtracking.mp4',
          })

          arToolkitSource.init(function onReady(){
          onResize()
          })
          // handle resize
          window.addEventListener('resize', function(){
          onResize()
          })
          function onResize(){
          arToolkitSource.onResize()
          arToolkitSource.copySizeTo(renderer.domElement)
          if( arToolkitContext.arController !== null ){
          arToolkitSource.copySizeTo(arToolkitContext.arController.canvas)
          }
          }
          ////////////////////////////////////////////////////////////////////////////////
          // initialize arToolkitContext
          ////////////////////////////////////////////////////////////////////////////////

          // create atToolkitContext
          var arToolkitContext = new THREEx.ArToolkitContext({
          cameraParametersUrl: THREEx.ArToolkitContext.baseURL + 'data/data/camera_para.dat',
          detectionMode: 'mono',
          maxDetectionRate: 30,
          canvasWidth: 80*3,
          canvasHeight: 60*3,
          })
          // initialize it
          arToolkitContext.init(function onCompleted(){
          // copy projection matrix to camera
          camera.projectionMatrix.copy( arToolkitContext.getProjectionMatrix() );
          })

          // update artoolkit on every frame
          onRenderFcts.push(function(){
          if( arToolkitSource.ready === false ) return

            arToolkitContext.update( arToolkitSource.domElement )
          })

          var markerRoot = new THREE.Group
          scene.add(markerRoot)
          var artoolkitMarker = new THREEx.ArMarkerControls(arToolkitContext, markerRoot, {
          type : 'pattern',
          patternUrl : THREEx.ArToolkitContext.baseURL + 'data/data/kanji.patt'
          // patternUrl : THREEx.ArToolkitContext.baseURL + '../data/data/patt.kanji'
          })


        

          var light = new THREE.AmbientLight(0xffffff);
              scene.add(light);

          var loader = new THREE.ObjectLoader();

          loader.load(
              "data/data/uu.json",
              function ( obj ) {
              //add the loaded object to the scene
                  markerRoot.add( obj );
              },
              function ( xhr ) {
                  console.log( (xhr.loaded / xhr.total * 100) + '% loaded' );
              },
              function ( xhr ) {
                  console.error( 'An error happened' );
              }
          );
            


       
          // render the scene
          onRenderFcts.push(function(){
          renderer.render( scene, camera );

          })

          // run the rendering loop
          var lastTimeMsec= null
          requestAnimationFrame(function animate(nowMsec){
          // keep looping
          requestAnimationFrame( animate );
          // measure time
          lastTimeMsec  = lastTimeMsec || nowMsec-1000/60
          var deltaMsec = Math.min(200, nowMsec - lastTimeMsec)
          lastTimeMsec  = nowMsec
          // call each update function
          onRenderFcts.forEach(function(onRenderFct){
          onRenderFct(deltaMsec/1000, nowMsec/1000)
          })
          })



  
      })
      .controller('ProjectListController', function(projects) {
        var projectList = this;
        projectList.projects = projects;
      })
      .controller('PerguntasController', function() {
        
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