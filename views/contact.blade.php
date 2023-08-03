<?php
include('./db.php');

$email = $fullName = $phone = $subject = $message = '';
$submit = false;
$errors = array('email' => '', 'fullName' => '', 'phone' => '', 'subject' => '', 'message' => '');


if (isset($_POST['submit'])) {

    if (empty($_POST['email'])) {
        $errors['email'] = 'Field Email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'email must be a valid email adress';
        }
    }

    if (empty($_POST['fullName'])) {
        $errors['fullName'] = 'Field Name is required <br />';
    } else {
        $fullName = $_POST['fullName'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $fullName)) {
            $errors['fullName'] = 'field must be a valid name';
        }
    }

    if (empty($_POST['phone'])) {
        $errors['phone'] = 'Field Phone is required <br />';
    } else {
        $phone = $_POST['phone'];
        if (!preg_match('/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/', $phone)) {
            $errors['phone'] = 'field must be a valid phone number';
        }
    }

    if (empty($_POST['subject'])) {
        $subject = $_POST['subject'];
        $errors['subject'] = 'Field Subject is required <br />';
    }


    if (empty($_POST['message'])) {
        $message = $_POST['message'];
        $errors['message'] = 'Field Message is required <br />';
    }

    if (array_filter($errors)) {
        //fail, display errors
    } else {
        //submit ok
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $fullName = mysqli_real_escape_string($connection, $_POST['fullName']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);
        $subject = mysqli_real_escape_string($connection, $_POST['subject']);
        $message = mysqli_real_escape_string($connection, $_POST['message']);
        $date = date('Y-m-d');
        $dateTime = date('Y-m-d H:i:s');

        $sql = "INSERT INTO messages(date, hour, name, email, phone, subject, comment)
         VALUES('$date', '$dateTime', '$fullName', '$email', '$phone', '$subject', '$message')";

        if (mysqli_query($connection, $sql)) {
            $submit = true;
        } else {
            echo 'query error: ' . mysqli_error($connection);
        }
    }
}
?>


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
        <?php if ($submit) :  ?> <div class="submit-message-container">
                <h1>Thank you very much,</h1>
                <h4>Your message has been sent successfully!</h4>
            </div>
        <?php else : ?>
            <form class="contact-inputs" action="contact.php" method="POST">
                <div class="container-inputs">
                    <div class="container-input">
                        <div class="input">
                            <img src="./assets/user.png" alt="" />
                            <input type="text" name="fullName" placeholder="Your full name" value="<?php echo htmlspecialchars($fullName) ?>">
                            <div class="input-error"> <?php echo $errors['fullName'] ?></div>
                        </div>
                    </div>
                    <div class="container-input">
                        <div class="input">
                            <img src="./assets/phone.png" alt="" />
                            <input type="text" name="phone" placeholder="Add phone number" value="<?php echo htmlspecialchars($phone) ?>">
                            <div class="input-error"><?php echo $errors['phone'] ?></div>
                        </div>
                    </div>
                    <div class="container-input">
                        <div class="input">
                            <img src="./assets/message.png" alt="" />
                            <input type="text" name="email" placeholder="Enter email adress" value="<?php echo htmlspecialchars($email) ?>">
                            <div class="input-error"><?php echo $errors['email'] ?></div>
                        </div>
                    </div>
                    <div class="container-input">
                        <div class="input">
                            <img src="./assets/book.png" alt="" />
                            <input type="text" name="subject" placeholder="Enter subject" value="<?php echo htmlspecialchars($subject) ?>">
                            <div class="input-error"><?php echo $errors['subject'] ?></div>
                        </div>
                    </div>
                    <div class="container-input">
                        <div class="input">
                            <img src="./assets/pen.png" alt="" />
                            <input type="text" name="message" placeholder="Enter message" value="<?php echo htmlspecialchars($message) ?>">
                            <div class="input-error"><?php echo $errors['message'] ?></div>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn-check">Send</button>
            </form>
        <?php endif; ?>


    </div>
    @endsection
    @section('scripts')
</main>
<script src="../../js/index.js"></script>
</body>

</html>
@endsection