@extends('template/home_template')

@section('notification')
    <div class="icon" id="bell"><a href="#" onclick="notification()"><img src="https://i.imgur.com/AC7dgLA.png" alt=""></a></div>
    <div class="notifications mt-1" id="box">
        <h2>Notifications - <span>2</span></h2>
        <div class="notifications-item"> <img src="https://i.imgur.com/uIgDDDd.jpg" alt="img">
            <div class="text">
                <h4>Samso aliao</h4>
                <p>Samso Nagaro Like your home work</p>
            </div>
        </div>
        <div class="notifications-item"> <img src="https://img.icons8.com/flat_round/64/000000/vote-badge.png" alt="img">
            <div class="text">
                <h4>John Silvester</h4>
                <p>+20 vista badge earned</p>
            </div>
        </div>
    </div>    
@endsection