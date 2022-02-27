<style>
    /*set border to the form*/

    form {
        border: 3px solid #f1f1f1;
    }
    /*assign full width inputs*/

    input[type=name],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /*set a style for the buttons*/

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 6px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    /* set a hover effect for the button*/

    button:hover {
        opacity: 1.2;
    }
    /*set extra style for the cancel button*/

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
    /*centre the display image inside the container*/

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    /*set image properties*/

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }
    /*set padding to the container*/

    .container {
        padding: 16px;
    }
    /*set the forgot password text*/

    span.psw {
        float: right;
        padding-top: 16px;
    }
    /*set styles for span and cancel button on small screens*/

    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
</style>

<form method="post" action="createlogin.php">
        <div class="imgcontainer">
            <img src=images/profile.jpg alt="logo" height="350" width="600">

        </div>
        <h2 style="color:blue; text-align:center;">Create Login Email-ID and Password</h2>
        <div class="container">
            <label><b>Email</b></label>
            <input type="name" placeholder="Enter your Email" name="EMAIL" " required>
            <br>
            <label><b>Password</b></label>
            <input type="password" placeholder="Create Password must be 8 character long" name="PASSWORD" required>
            <br>
            <button type="submit">Create Login</button>

        </div>

    </form>

