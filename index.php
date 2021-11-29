<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <br>
    <br>

    <form class="w-50 offset-3 mt-5 myform">
        <h1>Ragistred Form</h1>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name='email'>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="agree" name="agree" value="yes">
            <label class="form-check-label" for="agree">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
    (function($) {
        $('form.myform').submit(function(e) {
            //alert('page loded'); 
            e.preventDefault()
            var email = $('input#email').val();
            var password = $('input#password').val();
            var agree = $('input#agree').val();



            console.log(email);
            console.log(password);
            console.log(agree);

            var b = {
                action: 'ragistration',
                e: email,
                p: password,
                a: agree

            }
            $.ajax({
                url: 'http://localhost/api.php',
                type: 'GET',
                data: b,
                beforeSend: function(xhr) {

                },
                success: function(result, status, xhr) {
                    if (result == '200') {
                        alert('User Registered Successfully');
                    }
                    console.log('The result is' +result);
                },
                error: function(xhr, status, error) {

                },
                complete: function(xhr, status) {

                }
            });



        });


    })(jQuery);
    </script>
</body>

</html>