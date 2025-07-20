<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5faff 0%, #f0f4ff 100%);
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(79,140,255,0.10);
            padding: 2.5rem 2rem 2rem 2rem;
            width: 100%;
            max-width: 400px;
        }
        .auth-card h2 {
            text-align: center;
            color: #4f8cff;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .form-group { margin-bottom: 1.2rem; }
        label { display: block; margin-bottom: 0.5rem; color: #222; font-weight: 500; }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.7rem 1rem;
            border: 1px solid #e0e6ed;
            border-radius: 8px;
            font-size: 1rem;
            background: #f8fbff;
            transition: border 0.2s;
        }
        input:focus { border: 1.5px solid #4f8cff; outline: none; background: #fff; }
        .btn-primary {
            width: 100%;
            background: #4f8cff;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.8rem 0;
            font-size: 1.1rem;
            font-weight: 600;
            margin-top: 0.5rem;
            cursor: pointer;
            transition: background 0.18s;
        }
        .btn-primary:hover { background: #2563eb; }
        .google-btn {
            margin-top: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border: 1px solid #e0e6ed;
            color: #222;
            border-radius: 8px;
            padding: 0.7rem 0;
            font-weight: 600;
            cursor: pointer;
            transition: box-shadow 0.18s;
            box-shadow: 0 2px 8px rgba(79,140,255,0.06);
        }
        .google-btn img { height: 22px; margin-right: 10px; }
        .google-btn:hover { box-shadow: 0 4px 16px rgba(79,140,255,0.13); }
        .text-link { color: #4f8cff; text-decoration: none; font-size: 0.97rem; }
        .text-link:hover { text-decoration: underline; }
        .remember-me { display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem; }
        .alert { background: #eaf3ff; color: #2563eb; border-radius: 6px; padding: 0.7rem 1rem; margin-bottom: 1rem; text-align: center; }
    </style>
</head>
<body>
    <div class="auth-card">
        <h2>Login</h2>
        <x-validation-errors class="mb-4" />
        @if (session('status'))
            <div class="alert">{{ session('status') }}</div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
            </div>
            <div class="remember-me">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me" style="margin-bottom:0;">Remember me</label>
            </div>
            <button type="submit" class="btn-primary">Log in</button>
            <div style="margin-top:1rem; text-align:right;">
                @if (Route::has('password.request'))
                    <a class="text-link" href="{{ route('password.request') }}">Forgot your password?</a>
                @endif
            </div>
        </form>
        <a href="{{ url('auth/google') }}" class="google-btn">
           <img src="data:image/png;base64,
                        iVBORw0KGgoAAAANSUhEUgAAAOEAAADh
                        CAMAAAAJbSJIAAABUFBMVEX////qQzU0q
                        FNChfT7vAUvfPPe6P06gfSHrPc1f/SxyPr7
                        uQD62Nb/vQD7twDqQDHoKRLpNyYtpk7qPS4lp
                        EnpNCIRoT/8wwAfo0bpMh/pNjcnefPpLRjoJw7
                        80nj4+v+v2LhDgv30ran87Ov1tbHwg3z7393zoZz
                        /+/T93Z3H1/sOpldht3V8wYwzqkCDxJLj8eb3w8D5z
                        83sW1Dzo57uc2vrTkL85uX+9/btYlnrUkbta2Lxj4n
                        92I37wCf+8NP95LL8zmj8yVXq8P5vnvb+9eL+6cD+7
                        Mn914fA0/uazqbuuhHG48ykv/lVj/VBrF3A4Mfd7uG
                        Ty6DvfXb4uXjrUDLvbyr0kR74rBHtYC7ygiT2oRfwd
                        DqTtPiLtVm8tC6DrkGVsDxfq0rcuB5jl/WxszJVs2z
                        LtibSy3s9j8w6mqI2onVAjNs8lbY4n4lBieb7gf+lA
                        AAKj0lEQVR4nO2cW2PaRhqGhYzjJhjrBIpYQ0IxNtQ
                        BAza2sU3StG7ThjrG2NvDHrLHbHa7u939/3crCYwlo
                        ZG+GWlmhJbnJndIT76ZeeckC8KKFStWrFixYkVM7Ow
                        d9uq1fqMxHA4bjX6t3jvc2+H9UvFw2usPLzKVcqlUL
                        CommqZZ/yjFUqksl47uGvXNAe93JGavvnteKRcVTZI
                        yCCTNVJW148bh0hV0s39WLpluKDU3pqec2e0tjeVO/
                        di0A8o5ylmUTxqbvF8+nNP+uaxomHZzS6VU3D3krRD
                        EoGbq4RbPg1YqDZNayd5xZL2ZZPmklrwBdtDXSqSNc
                        xFJkXf3eCu5ON2NqXwPaPJZcnrk3rEcX/kekMrnPd5
                        qNnsXVPxsx9IJ/zqe0qnf3LF8xHdgHQwrNP1sR/mY4
                        1ynVqbtZ6HJDU5+mydFBn4WSoZLd9yVY86HACR5l7l
                        fj3jySYamMS7jXZmpX8Yq45Ch36bGtoBTlJNTVoKNC
                        rse6ESq1Jn4Dc5YDaGLlFkMOHuMhxg3yjn1ZVWdUwu
                        9R1Mor6qGzMdQL1KF6oLjgl8XfKDSp+Y3OFd429mUa
                        SXjTobnGOOkQqcv7sS9T0GMTGfJeFpKu2A57YJpr+
                        BOMeWCA+ghEnVoCWZSLigcJSUHaQkeJ2MmQ0+wUeJtNoOWY
                        E/mbTaDluBp2gWF+IZRyb5nUrQvnWjY8UNN8DiOYVTSlFK5eHQ
                        3bNTq9V69XusP7840uVSEz+WpCdYijzL2FYuh37WgwV6vcQG8t
                        EFN8LQSUU8pZ4a9wL2jzf5Z+PExNUHhJFIn1MqZBmSpOqibknw
                        Eh1GiXpF34S+209DQc3t6gpvkbVQqan3Mjc3eOWKBRk8wQlAUJ
                        ZLt90NfR4qCDdI2qhRrhI/saQvPpChIOo5KlSh7fd5DH4qCwhl
                        Z1peOoh2BnR45N51pCvaIsl6SSRvoA/2HMtIUFIj2LZTzOC6G7
                        EkaA8E+yTAT2zn09HiEquCA4IhJkuM7FLKOuKgKCkP8YUaT4jx
                        lr1foCu7gJ4UW8+Fsj+7lkl9jl1A5o/pCcdPMbX3/KzzBY97vj
                        MezXPbpDziKyybY3Mpms09/hCsqF7xfGZOXuayl+BNUUDvi/ca
                        42IIWvwGVUcrwfmFcXs8Nn/4Wolhams+V7nmVnfP0d+GKFf53z
                        TH5fCvrIDQ2SvQut9Dii5zTMCw2tGUbRk1cJQyNjWLyvk8K43U
                        u61UMiI1yMj5qweJLr2BQbGh3vF8Xn6a3kQbGRmn52qjw2UIjn
                        cWGryCbS8nx4ttIEbEhnfN+WwL8GykiNspJ/Zg1iMWR1KHoiY1
                        ljMKFuPcoumNDTtZnrECCBC0csbGcJfwc3Q1nZXyIjaXshaisc
                        Crex4a0dMteG2RWOMhNY6O4hPM1YXHW7V9GOzYU3u9KxNcgQzs
                        2NJafysVHUBq6FH/6vryUUWHtk0L5Pe93JeNVuNmM3Evih1w+o
                        sxlwMNh3dBi62tiwyfb61TZ/gr9bOBAY0MsKDx5vEYZ9LPfgA1
                        zzxJsuP0c+ezwGc3c8E2CDdcfIZ8NH0q3mgk2fLyPfDZkzjaDX
                        JCB4RPks8F+uS+SbLjxHvls+EDzWaINkXERsEfjYeubRBteox4
                        Nj8MIec8iDzdQj/4GbhhBkIHhNurRb8Bh8SrZhuuoyIeunbLZL
                        xNuiJp7g6c0UeZsTAxRkxq44bcJN0RNal6CDaPEIQND5LTt29Q
                        Yvl0Zhhq+Trghauqdnhr+/xqmZyxFGaYmD2MwTPicBmmYmnkpMi1Ss7ZAGqZmfYictaVmjY+ceadlny
                        ZgSzgle23oFXBa9kvRuxhp2fNG70Sl5dwCvZuYlrOnNeSOcFrOD9G7+mk5Aw44mWF0js/xdI3NXQyeJ
                        6TwwTSf+wO54foGEWDDgFNu8Pop/52od0kN9z8hA6wYcFMBOtTk//hCLIxIDQl5vg4uYtDPQAzz+T+9
                        EEVRZaU2Yx/cfQNuDIHmbWYLtQRF44qV25T30FYaFBaQWU3+77afWcMWK7cp19ASIlf4NmH3vPP5P88
                        ERVGfsJKzuNyGGgYNpULYXf189i9zQVFtM5KzgafoevAPBX5vkf+r6IQ8MAj4ABVc+xD8Q0GJmP/bC5
                        chyyLCG+nGu+BfQu/VzELCVUR2PfEdOO+R21D3oPLCDIkF1I9M7CzAbTRwRmODyIt5SLgwbpjoCcJb+
                        IQGvfyd4d9MHSHhosBCz+Qa3EjDuqHg20xdIeE27DDQM2ds8BKGpKHF4mjqCQkOgw28hGFpaONtpt6Q
                        8Iw21PWwemHAHs0D7mWwT0i4DRmEIryCIZPSGa65qV9IuDGqtAXha19AVtg4dmv8Q4JtV3wEns4AG6l
                        zrEGFhBvKkQH3AzZSYb7AQIeEpyuOaQp+hdFGA04s3EyvnQSFhEeR4mL4HXwcNRvpJ8Bftec1wSHhaa
                        fUBtR9jE4ImHXPeZYLCwkPBiXFS5wKrgXvsrlobn0H64KUFS/xtscBc9I5/1Cx/CgpXmJsdFvAwnBKV
                        8c1FAuxDze4guBxxqaNXUQzNOLdt3mE2QfXtsOXFQ6a+EUUVSPO2c1brFHUImQLysttAV9R1OM7zHiP
                        LQiPihkkhqIRU2d8/gH7kBH9PReKqkGiqMaydbO/jTfGEJVQEMb4g42F3opwE8Wm2dJ//pR+CQVhQjDY2GWM2
                        BtHuioe/BNXkaCEgtAh6oomBZG8qd6I9lMP/rWG11AxB9IZZM3UwhiTnS7ejO97vyr+G6eMeFk454qwnVovaI
                        zx61gVDcd/6sEvcEW86YwD4nZq17FwizPJmXQMz9MO/gOetqFvI4YRQdCkoH+swiQno7G+2CcK4//CYnE94I5
                        Q2JPJ26mNakqOQuZy3ZuOqvs3FvUAFhsESTFnRJT7bklDb42ufGvZvaq2Rd3bOp2AYmM76C/ShNIiH1Ddlvq4
                        1RlVb64sbqrVUac11k25sJ8HxMZjjIWvH3EYzjzVQsGYUigUVOAPq2pYbERpoxZRu2J0QmIjWhu1qPJXDIqNC
                        OPonE7k0SYqAbEB3McPoRUl+GMBGRsb8A3EQAgXUnGCiA30xyOYiPwVDb/Y2CZZM/nS5d5OfWNjPWISuhS5jz
                        biYmw8Jl1R+CtyzwzRGxsbZKteJPyTX3THBsnOTIhiEhrqQ2zElRNOuqHTZBbMYmNjjXjRG6SYgNCwYuN6g5K
                        gkIjot9ZiP396TUkwCRM4i4NfqAma0/AEDKnxH1W64L+YonVpYM6E85Aa4xEeko8ck1HVmXyrc8utpRZiPkpH
                        wqul6gw/gGhzKKOqs7o5b3PDvIzGR5Yf6ViwLaOqVxn7mUzG7AZVvcW6gFOqPidGNCioTHugizYDR1W/5eZn0
                        m1RdlT1dtTbHVGZ0HRUeXVAN9Qczfolwc+i20Yc40ahoHeS4mfRHKlGnIVUDZH1HzUI56qlxzTRUQt6m/H3/k
                        Ca1XF0Set6Q5W3SQDdUSRJ1QBfUeFIt9oC3EHwLV6hzW/ygslkZFtCNa3bGmo7+cXzMKl2xroR7KmabqYc6sb
                        NMtC9GnVaoq5P75hY10ym/1iXTnRdbLVHN0z/wAY1ml37ntDo1mI0qlZvriZLW7UVK1asWLFiRfL4H/1Isc7V
                        uwGnAAAAAElFTkSuQmCC" alt="Google Logo" class="h-5 w-5 mr-3">
            <span>Sign in with Google</span>
        </a>
        <div style="margin-top:1.5rem; text-align:center;">
            <span style="color:#888;">Don't have an account?</span>
            <a href="{{ route('register') }}" class="text-link">Register</a>
        </div>
    </div>
</body>
</html>
