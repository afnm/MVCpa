<?php $this->title = "QUIZ-CPP - User Login and Registration" ?>

<div class="container">

<div class="form-box">
            
    <div class="button-box">
        <div id="btn"> 
        </div>
            <button type="button" class="toggle-btn" onclick="login()" > Log In</button>
            <button type="button" class="toggle-btn" onclick="register()"> Register</button>
        </div>
            
        <form id="login" class="input-group" action="connection/connect" method="post">
            <input type="text" class="input-field" name="user" placeholder="User Id" required>
            <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" class="submit-btn">Log In</button>
        </form>
        <form id="register" class="input-group" action="connection/register" method="post">
            <input type="text" class="input-field" name="user" placeholder="User Id" required>
            <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
            <button type="submit" class="submit-btn">Register</button>
        </form>
    </div>
</div>


    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }  
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }  
    </script>

<?php if (isset($msgError)): ?>
    <p><?= $msgError ?></p>
<?php endif; ?>
