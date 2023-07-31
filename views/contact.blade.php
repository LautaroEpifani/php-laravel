@extends('layout')
@section('content')
<main>
    <div class="about-hero__container">
        <div class="text text-about">
            <h6 class="description">The Ultimate Luxury</h6>
            <h3 class="title">Contact</h3>
        </div>
        <div class="banner">
            <a class="home" href="../php/index.php">Home</a>
            <span>|</span>
            <h1 class="page">Contact</h1>
        </div>
    </div>
    <div class="blog-contact__container">
        <div class="card-container">
            <div class="card-contact">
                <img src="../../assets/phone.png" alt="" />
                <div>
                    <h1 class="title">Phone Number</h1>
                    <h6 class="text">+984 654 864 17 434</h6>
                </div>
            </div>
            <div class="card-contact">
                <img src="../../assets/message.png" alt="" />
                <div>
                    <h1 class="title">Email</h1>
                    <h6 class="text">hotelmiranda@gmail.com</h6>
                </div>
            </div>
            <div class="card-contact">
                <img src="../../assets/map.png" alt="" />
                <div>
                    <h1 class="title">Find Us</h1>
                    <h6 class="text">Crazy Avenue 54, Oklahoma</h6>
                </div>
            </div>
        </div>
        <div class="image"><img src="./assets/map.png" alt=""></div>
        <div class="contact-inputs">
            <div class="container-inputs">
                <div class="container-input">
                    <div class="input">
                        <img src="./assets/user.png" alt="" />
                        <input type="text" name="fullName" placeholder="Your full name">
                    </div>
                </div>
                <div class="container-input">
                    <div class="input">
                        <img src="./assets/phone.png" alt="" />
                        <input type="text" name="phone" placeholder="Add phone number">
                    </div>
                </div>
                <div class="container-input">
                    <div class="input">
                        <img src="./assets/message.png" alt="" />
                        <input type="text" name="email" placeholder="Enter email adress">
                    </div>
                </div>
                <div class="container-input">
                    <div class="input">
                        <img src="./assets/book.png" alt="" />
                        <input type="text" name="subject" placeholder="Enter subject">
                    </div>
                </div>
                <div class="container-input">
                    <div class="input">
                        <img src="./assets//pen.png" alt="" />
                        <input type="text" name="message" placeholder="Enter message">
                    </div>
                </div>
            </div>
            <button class="btn-check">Send</button>
        </div>
    </div>
    @endsection
    @section('scripts')
</main>
<script src="../../js/index.js"></script>
</body>

</html>
@endsection