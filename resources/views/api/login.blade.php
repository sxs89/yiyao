<!DOCTYPE html>
<html lang="ZH-cn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/login/layui.css">
    <link rel="stylesheet" href="/login/login.css">
</head>
<body>

<div class="kit-login">
    <div class="kit-login-bg"></div>
    <div class="kit-login-wapper">
        <h2 class="kit-login-slogan">欢迎使用 <br> KITADMIN 1.x后台模板</h2>
        <div class="kit-login-form">
            <h4 class="kit-login-title">登录</h4>

            <form class="layui-form" action="/api/check" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ csrf_field() }}
                <div class="kit-login-row">
                    <div class="kit-login-col">
                        <i class="layui-icon">&#xe612;</i>
                        <span class="kit-login-input">
                <input type="text" name="username" lay-verify="required" placeholder="用户名/邮箱/手机号" />
              </span>
                    </div>
                    <div class="kit-login-col"></div>
                </div>
                <div class="kit-login-row">
                    <div class="kit-login-col">
                        <i class="layui-icon">&#xe64c;</i>
                        <span class="kit-login-input">
                <input type="password" name="password" lay-verify="required" placeholder="密码" />
              </span>
                    </div>
                    <div class="kit-login-col"></div>
                </div>
                <div class="kit-login-row">
                    <div class="kit-login-col">
                        <input type="checkbox" name="rememberMe" title="记住帐号" lay-skin="primary">
                    </div>
                </div>
                <div class="kit-login-row">
                    <button class="layui-btn kit-login-btn" lay-submit="submit" lay-filter="login_hash">登录</button>
                </div>
                <div class="kit-login-row" style="margin-bottom:0;">
                    <a href="javascript:;" style="color: rgb(153, 153, 153); text-decoration: none; font-size: 13px;" id="forgot">忘记密码</a>
                </div>
            </form>
        </div>
    </div>
</div>


</body>

</html>