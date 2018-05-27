$(document).ready(function(){

    $('#contact_form').validate({
        rules: {
            'customer_name': {
                required: true
            },
            'customer_email': {
                required: true,
                email: true
            },
            'customer_phone': {
                required: true,
                pattern: /^[0-9]{10}$/
            }
        },
        submitHandler: function(form) {
//            alert('form submitted');   
            $.ajax({
                url: '/contact/save',
                data: {
                    name: $('#customer_name').val(),
                    email: $('#customer_email').val(),
                    phone: $('#customer_name').val(),
                    req: $('#customer_req').val()
                },
                type: 'post',
                success: function(response){
                    console.log(response);
                    
                    if(response === 'ok') {
                        alert('thankyou for contacting us, we will get back to you soon');
//                        window.location.href='/';
                        form.reset();
                    }
                },
                error: function(xhr) {
                    alert('error');
                }
            });
        }
    });


});
