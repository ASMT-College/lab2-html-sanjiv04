<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <!-- <link rel="stylesheet" href="form_style.css"> -->

</head>

<style>
    body {
        height: 100vh;
    }

    form {
        width: 50vw;
        height: auto;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    fieldset {
        padding: 1rem 2rem;
        border: 1px solid gray;
        border-radius: 1rem;
    }

    .inputGroup {
        display: flex;
        flex-direction: column;
        margin: 1rem 0;
        gap: 0.5rem;
    }

    .inputGroup input,
    .inputGroup select {
        padding: 12px 8px;
        border-radius: 3px;
        border: 1px solid gray;
    }

    .inputGroup input:focus,
    .inputGroup select:focus {
        outline: none;
    }

    button {
        background-color: crimson;
        color: white;
        font-weight: bold;
        border: none;
        padding: 0.8rem 0;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
    }

    #email_error_text{
        display: none;
    }
</style>


<body>
    <form action="" onsubmit="return validateForm()">
        <fieldset>
            <legend>Signup</legend>
            <div class="inputContainer">
                <div class="inputGroup">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="email" name="email">
                    <p id="email_error_text"></p>
                </div>
                <div class="inputGroup">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Username" name="username">
                </div>
                <div class="inputGroup">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Your Name" name="name">
                </div>
                <div class="inputGroup">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Create Password" name="password">
                </div>
                <div class="inputGroup">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
                </div>
                <div class="inputGroup">
                    <div>Gender</div>
                    <div>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                    </div>
                </div>

                <div class="inputGroup">
                    <div>Hobbies</div>
                    <div>
                        <input type="checkbox" name="" id="guitar">
                        <label for="guitar">Guitar Playing</label>
                        <input type="checkbox" name="" id="writing">
                        <label for="writing">Writing</label>
                        <input type="checkbox" name="" id="gaming">
                        <label for="gaming">Gaming</label>
                        <input type="checkbox" name="" id="reading">
                        <label for="reading">Reading</label>
                    </div>
                </div>

                <div class="inputGroup">
                    <label for="country">Country</label>
                    <select name="country" id="country">
                        <option value="Nepal">Nepal</option>
                        <option value="India">India</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="China">China</option>
                        <option value="Bangladesh">Bangladesh</option>
                    </select>

                </div>

                <button type="submit">Submit</button>


            </div>
        </fieldset>
    </form>
</body>


<script>

    function validateEmail(email) {
        let pattern = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/;
        return pattern.test(email)
    }

    function validateForm() {
        let email = document.getElementById("email").value;
        const email_error_text = document.getElementById("email_error_text");
        if (validateEmail(email)) {
            email_error_text.style.display = "none"
            return true
        }
        email_error_text.style.display = "flex";
        email_error_text.style.innerText = "Email is invalid!";
        return false;
    }

</script>




</html>