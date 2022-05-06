<div>
    <div>
        <section id="#xss">
            <h1>XSS</h1>
            <div class="container">
                <div class="content">
                    @if (isset($error_comment['Success']))
                        <p style="color: green">{{ $error_comment['Success'] }}</p>
                    @elseif (isset($error_comment['Fail']))
                        <p style="color: red">{{ $error_comment['Fail'] }}</p>
                    @endif
                    <form wire:submit.prevent="check()">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" wire:model="email">
                        <label for="text">Comment</label>
                        <input type="text" name="text" id="text" wire:model="text">
                        <input type="submit" value="Gửi">
                    </form>
                </div>
                <div class="info">
                    @if (isset($error_comment['Success']))
                        <strong>Email: </strong> {!! $test->email !!}<br>
                        <strong>Comment: </strong> {!! $test->text !!}    
                    @endif
                    
                </div>    
            </div>
            
        </section>
    </div>
    
</div>
