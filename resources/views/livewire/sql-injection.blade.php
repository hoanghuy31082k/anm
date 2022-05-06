<div>
    <section id="#sql">
        <h1>SQL Injection</h1>
        <div class="container">
            <div class="content">
                @if (isset($error_mess['Sucess']))
                    <p style="color: green">{{ $error_mess['Sucess'] }}</p>
                @elseif (isset($error_mess['Fail']))
                    <p style="color: red">{{ $error_mess['Fail'] }}</p>
                @endif
                <form wire:submit.prevent="check()">
                    <label for="username">Tài khoản</label>
                    <input type="text" name="username" id="username" wire:model="username">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" wire:model="password">
                    <input type="submit" value="Đăng nhập">
                </form>
            </div>
            <div class="info">
                <h3>Query:</h3>
                <span>SELECT * FROM `users` WHERE `username` = '{{ $username }}' AND `password` = '{{ $password }}' limit 1</span>
            </div>    
        </div>
        
    </section>
</div>
