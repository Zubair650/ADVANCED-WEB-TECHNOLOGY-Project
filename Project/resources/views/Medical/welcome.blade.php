<html>
<head>
    
    @include('Medical.bootstrap')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  
<div class="container">
    <h1>Phone Number Verification </h1>
  
    <div class="alert alert-danger" id="error" style="display: none;"></div>
  
    <div class="card">
      <div class="card-header">
        Enter Phone Number
      </div>
      <div class="card-body">
  
        <div class="alert alert-success" id="sentSuccess" style="display: none;"></div>
  
        <form method="Post" action="">
        @csrf
            <label>Name:</label>
            <input type="text" id="name"  name="name" class="form-control" >
            <label>Phone Number:</label>
            <input type="text" id="number"  name="phone" class="form-control" >
            <br>
            <div id="recaptcha-container"></div>
            <br>
            <button type="button" class="btn btn-warning" onclick="phoneSendAuth();">Send OTP Code</button>
        
      </div>
    </div>
      
    <div class="card" style="margin-top: 10px">
      <div class="card-header">
        Enter Verification code
      </div>
      <div class="card-body">
  
        <div class="alert alert-success" id="successRegsiter" style="display: none;"></div>
  
        
            <input type="text" id="verificationCode" name="code" class="form-control">
            <br>
            <button type="submit" class="btn btn-secondary" onclick="codeverify();">Verify code</button>
            <br><br>
            <a href="{{url('/main')}}" class="btn btn-danger">Emergency Login</a>
  
        </form>
      </div>
    </div>
  
</div>
  
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
  
<script>
      
  var firebaseConfig = {
    apiKey: "AIzaSyD1WX7PiSNxZaHlMA-uH4rxpvbQdQ2AW8M",
    authDomain: "project-470ef.firebaseapp.com",
    projectId: "project-470ef",
    storageBucket: "project-470ef.appspot.com",
    messagingSenderId: "86054748530",
    appId: "1:86054748530:web:d754458c92975cfb649deb",
    measurementId: "G-LTWTJDF4B2"
  };
    
  firebase.initializeApp(firebaseConfig);
</script>
  
<script type="text/javascript">
  
    window.onload=function () {
      render();
    };
  
    function render() {
        window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
       recaptchaVerifier.render();
    }
  
    function phoneSendAuth() {
           
        var number = $("#number").val();
          
        firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) 
        //firebase.auth().then(function (confirmationResult) ,window.recaptchaVerifier
        {
              
            window.confirmationResult=confirmationResult;
            coderesult=confirmationResult;
            console.log(coderesult);
  
            $("#sentSuccess").text("Message Sent Successfully.");
            $("#sentSuccess").show();
              
        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });
  
    }
  
    function codeverify() {
  
        var code = $("#verificationCode").val();
  
        coderesult.confirm(code).then(function (result) {
            var user=result.user;
            console.log(user);
  
            $("#successRegsiter").text("Your Registration has been completed Successfully.");
            $("#successRegsiter").show();
            

  
        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });
    }
  
</script>
  
</body>
</html>