<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>SignUp FORM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <script>
window.fbAsyncInit = function() {
  FB.init({
    appId      : '136412993654972',
    xfbml      : true,
    version    : 'v2.10'
  });
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
};
(function(d, s, id){
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
function statusChangeCallback(response)
{
  if(response.status === 'connected')
  {
    console.log('logged in and authenticated');
    window.location="/brand/add_del_display.php";
    setElements(true);
    testAPI();
  }
  else
  {
    console.log('not authenticated');
    setElements(fasle);
  }
}
function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
function setElements(isLoggedIn){
  if(isLoggedIn){

    document.getElementById('fb-btn').style.display='none';
  }
  else
  {
    document.getElementById('fb-btn').style.display='block';
  }
}
function testAPI()
{
  FB.api('/me?fields=name,email,birthday,location',function(response)
      {
        if(response && !response.error)
        {
          buildprofile(response);
        }
      })
}
/*
   function buildprofile(user)
   {
   let profile = `
   <h3>${user.name}</h3>
   <h3>${user.email}</h3>
   `;
   document.getElementById('profile').innerHTML=profile;
   }*/
    </script>

    <div class="signup__container">
      <div class="container__child signup__thumbnail">
        <div class="thumbnail__logo">
          <svg class="logo__shape" width="25px" viewBox="0 0 634 479" xmlns="http://www.w3.org/2000/svg"><g>
            <h1 class="logo__text"></h1>
        </div>
        <div class="thumbnail__content text-center">
          <h1 class="heading--primary">Welcome to FamousEnuf.</h1>
          <!-- <h2 class="heading--secondary">Are you ready to join the elite?</h2> -->
        </div>
        <div class="thumbnail__links">
          <ul class="list-inline m-b-0 text-center">
            <li><a href="http://alexdevero.com/" target="_blank"><i class="fa fa-globe"></i></a></li>
            <li><a href="https://www.behance.net/alexdevero" target="_blank"><fa class="fa fa-behance"></fa></a></li>
            <li><a href="https://github.com" target="_blank"><i class="fa fa-github"></i></a></li>
            <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
        <div class="signup__overlay"></div>
      </div>
      <div class="container__child signup__form">
        <form action="/brand/signup.php" method="POST">
          <div class="form-group">
            <label for="username">BrandName</label>
            <input class="form-control" type="text" name="name" id="username" placeholder="nestle.love" required />
          </div>
          <div class="form-group">
            <label for="username">AccountManagerName</label>
            <input class="form-control" type="text" name="managername" id="username" placeholder="paul.bulcke" required />
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="myemail" id="email" placeholder="j.b@spectre.com" required />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="mypassword" id="password" placeholder="********" required />
          </div>
          <div class="form-group">
            <label for="phone">PhoneNumber</label>
            <input class="form-control" type="number" name="myphone" id="myphone" placeholder="0-070000599" required />
          </div>
          <div class="m-t-lg">
            <ul class="list-inline">
              <li>
                <input class="btn btn--form" type="submit" value="Register" />
              </li>
              <li>
                <a class="signup__link" href="/brand/login.html">Log-In</a>
              </li>
              <li>
                <fb:login-button
                                        id="fb-btn"
                                        scope="public_profile,email,user_location"
                                        onlogin="checkLoginState();">
                </fb:login-button>
              </li>
            </ul>
          </div>
        </form>  
      </div>
    </div>
  </body>
</html>
