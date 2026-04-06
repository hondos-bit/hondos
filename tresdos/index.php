<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Ronel Hondos · Login Portal</title>
    <!-- Google Fonts: modern & clean -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        /* main card */
        .login-card {
            max-width: 420px;
            width: 100%;
            background: #ffffff;
            border-radius: 2rem;
            box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .login-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 25px 40px -12px rgba(0, 0, 0, 0.15);
        }

        /* header with name */
        .login-header {
            background: #1a2a3f;
            padding: 2rem 1.5rem;
            text-align: center;
        }

        .avatar-icon {
            font-size: 2.8rem;
            color: #ffd966;
            margin-bottom: 0.75rem;
        }

        .login-header h1 {
            font-size: 1.9rem;
            font-weight: 700;
            color: white;
            letter-spacing: -0.3px;
            word-break: break-word;
        }

        .login-header p {
            font-size: 0.85rem;
            color: #a3c2e0;
            margin-top: 0.5rem;
            font-weight: 400;
        }

        /* form body */
        .form-body {
            padding: 2rem 1.8rem 1.8rem;
        }

        /* input groups */
        .input-group {
            margin-bottom: 1.5rem;
            display: flex;
            flex-direction: column;
        }

        .input-group label {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #5a6e7c;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .input-group label i {
            font-size: 0.8rem;
            color: #7c8b9c;
        }

        .input-field {
            display: flex;
            align-items: center;
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-radius: 1rem;
            transition: all 0.2s;
            padding: 0.1rem 0.1rem 0.1rem 1rem;
        }

        .input-field:focus-within {
            border-color: #3b6e9e;
            box-shadow: 0 0 0 3px rgba(59, 110, 158, 0.15);
            background: #ffffff;
        }

        .input-field i {
            color: #8ba0b2;
            font-size: 1rem;
            margin-right: 0.6rem;
        }

        .input-field input {
            width: 100%;
            padding: 0.85rem 0.8rem 0.85rem 0;
            font-size: 0.95rem;
            font-weight: 500;
            border: none;
            background: transparent;
            outline: none;
            font-family: 'Inter', sans-serif;
            color: #1e2a3a;
        }

        .input-field input::placeholder {
            color: #b9c8e0;
            font-weight: 400;
            font-size: 0.85rem;
        }

        /* login button */
        .login-btn {
            background: #1a2a3f;
            border: none;
            width: 100%;
            padding: 0.9rem;
            border-radius: 1.2rem;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            cursor: pointer;
            transition: all 0.25s ease;
            margin-top: 0.5rem;
            font-family: 'Inter', sans-serif;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .login-btn i {
            font-size: 0.95rem;
            transition: transform 0.2s;
        }

        .login-btn:hover {
            background: #0f1e2f;
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(26, 42, 63, 0.2);
        }

        .login-btn:active {
            transform: translateY(1px);
        }

        /* feedback message area */
        .feedback-area {
            margin-top: 1.5rem;
            text-align: center;
            font-size: 0.75rem;
            font-weight: 500;
            padding: 0.7rem;
            border-radius: 1rem;
            background: #f1f5f9;
            color: #4a627a;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.2s;
            border: 1px solid #e2edf7;
        }

        /* hint / demo helper */
        .demo-hint {
            background: #fef9e6;
            border-radius: 1rem;
            padding: 0.6rem 0.9rem;
            margin-top: 1rem;
            font-size: 0.7rem;
            color: #b68b40;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            border: 1px dashed #f0dbaa;
            cursor: pointer;
            transition: all 0.2s;
            font-weight: 500;
        }

        .demo-hint i {
            font-size: 0.75rem;
            color: #d9a13b;
        }

        .demo-hint:hover {
            background: #fff6e0;
            border-color: #e2bc7c;
        }

        footer {
            text-align: center;
            font-size: 0.65rem;
            color: #8ca0b2;
            padding: 1rem 1rem 1.3rem;
            border-top: 1px solid #eef3fa;
            background: #ffffff;
            font-weight: 500;
        }

        @media (max-width: 480px) {
            .form-body {
                padding: 1.5rem;
            }
            .login-header h1 {
                font-size: 1.6rem;
            }
        }

        /* small shake animation for error */
        @keyframes shakeField {
            0% { transform: translateX(0); }
            25% { transform: translateX(4px); }
            75% { transform: translateX(-4px); }
            100% { transform: translateX(0); }
        }
        .shake-effect {
            animation: shakeField 0.25s ease-in-out 0s 2;
        }
    </style>
</head>
<body>

<div class="login-card">
    <!-- Header with name: Ronel Hondos -->
    <div class="login-header">
        <div class="avatar-icon">
            <i class="fas fa-user-circle"></i>
        </div>
        <h1>Ronel Hondos</h1>
        <p>welcome back · secure access</p>
    </div>

    <!-- Login form -->
    <div class="form-body">
        <form id="loginForm" action="#" method="post" novalidate>
            <!-- Username field -->
            <div class="input-group">
                <label for="username">
                    <i class="fas fa-envelope"></i> 
                    Username
                </label>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" id="username" name="username" placeholder="Enter your username" autocomplete="username">
                </div>
            </div>

            <!-- Password field -->
            <div class="input-group">
                <label for="password">
                    <i class="fas fa-lock"></i> 
                    Password
                </label>
                <div class="input-field">
                    <i class="fas fa-key"></i>
                    <input type="password" id="password" name="password" placeholder="Enter your password" autocomplete="current-password">
                </div>
            </div>

            <!-- Login Button -->
            <button type="submit" class="login-btn" id="loginBtn">
                <span>Log In</span>
                <i class="fas fa-arrow-right-to-bracket"></i>
            </button>

            <!-- Feedback message (error / success) -->
            <div id="loginFeedback" class="feedback-area">
                <i class="fas fa-info-circle"></i>
                <span>Enter your credentials to continue</span>
            </div>

            <!-- Optional helper hint (click to autofill demo credentials) -->
            <div class="demo-hint" id="demoHint">
                <i class="fas fa-magic"></i>
                <span>✨ Demo: click to fill (ronel / pass123) ✨</span>
                <i class="fas fa-chevron-right"></i>
            </div>
        </form>
    </div>
    <footer>
        <i class="fas fa-shield-alt"></i> secured connection · Ronel Hondos portal
    </footer>
</div>

<script>
    (function() {
        const form = document.getElementById('loginForm');
        const usernameField = document.getElementById('username');
        const passwordField = document.getElementById('password');
        const feedbackDiv = document.getElementById('loginFeedback');
        const loginBtn = document.getElementById('loginBtn');
        const demoHint = document.getElementById('demoHint');

        // Helper: update feedback message (style based on error or normal)
        function setFeedbackMessage(msg, isError = false, isSuccess = false) {
            feedbackDiv.innerHTML = `
                <i class="fas ${isError ? 'fa-circle-exclamation' : (isSuccess ? 'fa-circle-check' : 'fa-info-circle')}"></i>
                <span>${msg}</span>
            `;
            if (isError) {
                feedbackDiv.style.background = "#fee9e6";
                feedbackDiv.style.color = "#b13e3e";
                feedbackDiv.style.border = "1px solid #ffcdc7";
            } else if (isSuccess) {
                feedbackDiv.style.background = "#e6f7ec";
                feedbackDiv.style.color = "#2e6b3e";
                feedbackDiv.style.border = "1px solid #c0e0c8";
            } else {
                feedbackDiv.style.background = "#f1f5f9";
                feedbackDiv.style.color = "#4a627a";
                feedbackDiv.style.border = "1px solid #e2edf7";
            }
        }

        // reset to default neutral message after some time (only for success)
        function resetToDefaultMessage() {
            setTimeout(() => {
                if (feedbackDiv.innerHTML.includes("successful") || feedbackDiv.innerHTML.includes("Welcome")) {
                    setFeedbackMessage("Enter your credentials to continue", false, false);
                }
            }, 4000);
        }

        // simple validation and login simulation
        function handleLogin(event) {
            event.preventDefault();
            
            const username = usernameField.value.trim();
            const password = passwordField.value.trim();
            
            // Basic validation: both fields required
            if (username === "") {
                setFeedbackMessage("❌ Please enter your username", true);
                usernameField.parentElement.classList.add('shake-effect');
                usernameField.focus();
                setTimeout(() => {
                    usernameField.parentElement.classList.remove('shake-effect');
                }, 500);
                return;
            }
            
            if (password === "") {
                setFeedbackMessage("❌ Please enter your password", true);
                passwordField.parentElement.classList.add('shake-effect');
                passwordField.focus();
                setTimeout(() => {
                    passwordField.parentElement.classList.remove('shake-effect');
                }, 500);
                return;
            }
            
            // --- SIMPLE LOGIN CREDENTIALS ---
            // For the sake of demo, we accept:
            // 1) username: "ronel" and password: "pass123"
            // 2) username: "admin" and password: "admin123"
            // 3) username: "Ronel Hondos" and password: "welcome"
            // You can easily modify these credentials.
            const isValid = (
                (username.toLowerCase() === "ronel" && password === "pass123") ||
                (username.toLowerCase() === "admin" && password === "admin123") ||
                (username === "Ronel Hondos" && password === "welcome")
            );
            
            if (isValid) {
                // SUCCESS LOGIN
                setFeedbackMessage("✅ Login successful! Redirecting...", false, true);
                
                // Optional: disable button briefly to prevent double click
                loginBtn.disabled = true;
                loginBtn.style.opacity = "0.7";
                const originalBtnText = loginBtn.innerHTML;
                loginBtn.innerHTML = `<span>Logging in...</span> <i class="fas fa-spinner fa-pulse"></i>`;
                
                // simulate redirect or just show success state
                setTimeout(() => {
                    // you can redirect to another page if needed:
                    // window.location.href = "/dashboard";
                    // For demo, we re-enable and show final message.
                    loginBtn.disabled = false;
                    loginBtn.style.opacity = "1";
                    loginBtn.innerHTML = originalBtnText;
                    setFeedbackMessage("🎉 Welcome back, " + username + "! You are now logged in.", false, true);
                    
                    // clear fields? optional: but good practice to keep
                    // reset after 4 sec to default
                    setTimeout(() => {
                        if (feedbackDiv.innerHTML.includes("logged in")) {
                            setFeedbackMessage("Enter your credentials to continue", false, false);
                        }
                    }, 4500);
                }, 1500);
                
            } else {
                // FAILED LOGIN
                setFeedbackMessage("❌ Invalid username or password. Please try again.", true);
                passwordField.value = ""; // clear password field for security
                passwordField.focus();
                // add subtle shake on card
                const card = document.querySelector('.login-card');
                card.style.transform = "translateX(3px)";
                setTimeout(() => card.style.transform = "", 100);
                setTimeout(() => card.style.transform = "translateX(-2px)", 200);
                setTimeout(() => card.style.transform = "", 300);
            }
        }
        
        // Attach event listener
        form.addEventListener('submit', handleLogin);
        
        // DEMO HINT: autofill with default working credentials (ronel / pass123)
        if (demoHint) {
            demoHint.addEventListener('click', () => {
                usernameField.value = "ronel";
                passwordField.value = "pass123";
                setFeedbackMessage("✨ Demo credentials filled: 'ronel' / 'pass123'. Click 'Log In' ✨", false);
                // highlight fields temporarily
                usernameField.parentElement.style.borderColor = "#3b6e9e";
                passwordField.parentElement.style.borderColor = "#3b6e9e";
                setTimeout(() => {
                    usernameField.parentElement.style.borderColor = "#e2e8f0";
                    passwordField.parentElement.style.borderColor = "#e2e8f0";
                }, 1500);
                usernameField.focus();
            });
        }
        
        // Optional: add focus/blur effects for better UX
        const inputs = [usernameField, passwordField];
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.style.borderColor = "#3b6e9e";
                input.parentElement.style.boxShadow = "0 0 0 2px rgba(59, 110, 158, 0.1)";
            });
            input.addEventListener('blur', () => {
                input.parentElement.style.borderColor = "#e2e8f0";
                input.parentElement.style.boxShadow = "none";
            });
        });
        
        // initial default message is already set in HTML but we ensure consistency
        setFeedbackMessage("Enter your credentials to continue", false);
    })();
</script>
</body>
</html>