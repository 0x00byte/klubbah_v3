	var user = {}
	function getUserData() {
	    FB.api('/me', function(response) {
		    user.id = response.id;
		    user.bio = response.bio;
		    user.email = response.email;
		    user.first_name = response.first_name;
		    user.gender = response.gender;
		    user.last_name = response.last_name;
		    user.link = response.link;
		    user.locale = response.locale;
		    user.name = response.name;
		    user.timezone = response.timezone;
		    user.updated_time = response.updated_time;
		    user.verified = response.verified;
		    user.birthday = response.birthday;
			console.log('user.id = ' + user.id);
			console.log('user.bio = ' + user.bio);
			console.log('user.email = ' + user.email);
			console.log('user.gender = ' + user.gender);
			console.log('user.link = ' + user.link);
			console.log('user.locale = ' + user.locale);
			console.log('user.verified = ' + user.verified);
			console.log('user.name = ' + user.name);
	        console.log('user.birthday = ' + user.birthday);
	        if (user.id) {
		        checkPageLike('219324014766541');
	        }
	        document.getElementById('user_email').innerHTML = '<h2>' + user.email + '</h2><p>' + user.bio + '</p>';
	    });
	}

	function getUserLikes() {
	    FB.api('/me/likes', function(response) {
			for (var i = 0; i < response.data.length; i++) {
				console.log('**** USER LIKES ****');
			    console.log(response.data[i].name);
			    console.log(response.data[i].category);
			    console.log(response.data[i].id);
			}
	    });
	}

	function checkPageLike(id) {
	    FB.api('/' + user.id + '/likes/' +id, function(response) {
		    if (response.data[0].name) {
				console.log('You like ' +response.data[0].name);
			} else {
				console.log('The user does not like page: ' +id);
			}
	    });
	}

	function getPageData() {
		FB.api('/' + user.id + '/219324014766541', function(response) {
			console.log('Sirocco dress code is ' +response.data[0].attire);
	    });
	}


  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);

    if (response.status === 'connected') {
      getUserData();
      getUserLikes();
      console.log('access token: ' + response.authResponse.accessToken);
    } else if (response.status === 'not_authorized') {
      document.getElementById('status').innerHTML = 'Please log into this app.';
    } else {
      document.getElementById('status').innerHTML = 'Please log into Facebook.';
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
	  FB.init({
	  	appId      : '751179351617276',
	    cookie     : true,  // enable cookies to allow the server to access
	                        // the session
	    xfbml      : true,  // parse social plugins on this page
	    version    : 'v2.1' // use version 2.1
	  });

	  FB.getLoginStatus(function(response) {
	    statusChangeCallback(response);
	  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  var rep_points = 0;
