const components = {};
components.register = `
    <div class='register-container'>
        <div class="register-bg"></div>
        <div class='form-wrapper'>
            <div class='logo'>
                <span>SCI Chat</span>
            </div>

            <div class='form-container'>
                <form id='register-form'>
                <div class='name-wrapper'>
                    <div class='input-wrapper'>
                        <div id="firstName-error"></div>
                        <input class='input' type="text" name="firstName" placeholder="First name" />
                    </div>
                    <div class='input-wrapper'>
                        <div id="lastName-error"></div>
                        <input class='input' type="text" name="lastName" placeholder="Last name" />
                    </div>
                </div>

                <div class='input-wrapper'>
                    <div id="email-error"></div>
                    <input class='input' type="email" name="email" placeholder="Email" />
                </div>

                <div class='input-wrapper'>
                    <div id="password-error"></div>
                    <input class='input' type="password" name="password" placeholder="Password" />
                </div>

                <div class='input-wrapper'>
                    <div id="confirmPassword-error"></div>
                    <input class='input' type="password" name="confirmPassword" placeholder="Confirm password" />
                </div>

                <div class='input-wrapper register-footer'>
                    <a id='already-have-account'>Already have an account? Login</a>
                    <button class='btn' type='submit'>
                    <span>Register</span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
`;

components.login = `
    <div class='login-container'>
        <div class="login-bg"></div>
        <div class='form-wrapper'>
            <div class='logo'>
                <span>SCI Chat</span>
            </div>
            <div class='form-container'>
                <form id='login-form'>
                <div class='input-wrapper'>
                    <input class='input' type="email" name="email" placeholder="Email" />
                    <div id='email-error' class='error'></div>
                </div>
                <div class='input-wrapper'>
                    <input class='input' type="password" name="password" placeholder="Password" />
                    <div id='password-error' class='error'></div>
                </div>
                <div id='form-error' class='form-error'></div>
                <div class='input-wrapper login-footer'>
                    <a id='create-account-button' class='login-register'>Create an account</a>
                    <button class='btn' type='submit'>
                    <span>Login</span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
`; 