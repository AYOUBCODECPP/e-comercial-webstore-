
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card login-card">
            <div class="card-body">
                <h2 class="card-title text-center">Login</h2>
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="username">اسم المستخدم:</label>
                        <input type="text" class="form-control" id="username" name="user" required>
                    </div>
                    <div class="form-group">
                        <label for="password">كلمة المرور:</label>
                        <input type="password" class="form-control" id="password" name="psw" required>
                    </div>
                    <button type="submit" class="btn btn-login btn-dark btn-block">تسجيل الدخول</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
