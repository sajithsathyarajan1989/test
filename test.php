<html>
    <head>
    </head>
    <body>
        <script type="text/javascript" src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>
        <div id="appleid-signin" data-color="black" data-border="true" data-type="sign in"></div>
        <script type="text/javascript">
            AppleID.auth.init({
                clientId : 'com.smingy.test',
                scope : '',
                redirectURI : 'http://ec2-13-232-164-62.ap-south-1.compute.amazonaws.com/auth/apple/response',
                //state : '[STATE]',
                //nonce : '[NONCE]',
                //usePopup : true //or false defaults to false
            });

            window.addEventListener('load', function() {
	            //Listen for authorization success
				document.addEventListener('AppleIDSignInOnSuccess', async (data) => {
				     //handle successful response'
				     //console.log('Signin Success - ',data);
				     alert('signininn');
				     try {
						     const data = await AppleID.auth.signIn()
						     console.log('Signin Success - ',data);
						} catch ( error ) {
						     //handle error.
						     console.log('Signin failed - ',error);
						}
				});
				//Listen for authorization failures
				document.addEventListener('AppleIDSignInOnFailure', (error) => {
				     //handle error.
				     console.log('Signin failed - ',error);
				});
			});
        </script>
    </body>
</html>