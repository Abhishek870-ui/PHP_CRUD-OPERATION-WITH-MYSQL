$(document).ready(function () {
    $('#form').validate({
        rules: {
            fname: {
                required: true,
                minlength: 2,
                maxlength: 20
            },
            lname: {
                required: true,
                minlength: 2,
                maxlength: 20
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                rangelength: [10, 12],
                number: true
            },
            message: {
                required: true,
                minlength: 10,

            }

        },
        messages: {
            fname: {
                required: 'Please enter First Name.',
                minlength: 'First Name should be more than 2 character.',
                maxlength: 'First Name should be less than 20 character.',

            },
            lname:  {
                required: 'Please enter Last Name.',
                minlength: 'Last Name should be more than 2 character.',
                maxlength: 'Last Name should be less than 20 character.',

            },
            email: {
                required: 'Please enter Email Address.',
                email: 'Please enter a valid Email Address.',
            },
            phone: {
                required: 'Please enter Phone number.',
                rangelength: 'Contact should be 10 digit number.'
            },
            message: {
                required: 'Please enter message.',
                minlength: 'Message should be more than 10 character.',

            }

        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});