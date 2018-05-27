<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link rel="stylesheet" href="/assets/css/style.css" >

        <script src="assets/js/script.js"></script>



    </head>
    <body>
        <div class="container">
            <div class="row">
                
                <div class="gap"></div>
                <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please enter your details
                        </div>
                        
                        <div class="panel-body">
                            <form class="form" name="contact_form" id="contact_form">
                                <div class="form-group">
                                    <input class="form-control" type="text" id="customer_name" name="customer_name" placeholder="Name" />

                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="customer_email" name="customer_email" placeholder="Email" />
                                </div>


                                <div class="form-group">
                                    <input class="form-control" type="text" id="customer_phone" name="customer_phone" placeholder="Phone" />
                                </div>

                                <div class="form-group">

                                    <select class="form-control" id="customer_req">
                                        <option selected disabled value="">What are you looking for? </option>
                                        <option value="webdev">Web Development</option>
                                        <option value="dmktg">Digital Marketing</option>
                                    </select>
                                </div>
                                <div class="">
                                    <button class="btn btn-primary btn-block" type="submit" id="submit">Submit</button>
                                </div>

                            </form>        
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>