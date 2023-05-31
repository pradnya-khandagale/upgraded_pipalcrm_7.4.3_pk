<div class="login-page">
	 <div class="container-login">
		<div class="panel-heading">
		    <div class="logo-container text-center">
		        <img src="{{logoSrc}}" class="login-logo">
		    </div>
		</div>
	    <!--<div class="text">
	       Login Form
	    </div>-->
	    <form id="login-form" onsubmit="return false;">
	       <div class="data">
				<label for="field-username">{{translate 'Username'}}</label>
				<input type="text" name="username" id="field-userName" class="form-control" autocapitalize="off" autocorrect="off" tabindex="1" autocomplete="username">
	       </div>
	       <div class="data">
	          	<label for="login">{{translate 'Password'}}</label>
	        	<input type="password" name="password" id="field-password" class="form-control" tabindex="2" autocomplete="current-password">
	       </div>
	       {{#if showForgotPassword}}<a href="javascript:" class="btn btn-link pull-right" data-action="passwordChangeRequest" tabindex="4">
                {{translate 'Forgot Password?' scope='User'}}
            </a>{{/if}}
	       <div class="btn">
	          <div class="inner"></div>
	          <button type="submit" id="btn-login" tabindex="3">{{translate 'Login' scope='User'}}</button>
	       </div>
	       <!--<div class="signup-link">
	          Not a member? <a href="#">Signup now</a>
	       </div>-->
	    </form>
	 </div>
</div>
<footer class="container-footer">{{{footer}}}</footer>

