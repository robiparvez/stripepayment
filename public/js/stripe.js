$(document).ready(function()
{
    // Stripe.setPublishableKey('pk_test_4bT0QCAkKZ63tOTVxKL8Je0x');
    var stripe = Stripe('pk_test_4bT0QCAkKZ63tOTVxKL8Je0x');
    $('#subscription-form').click(function(event)
    {
        var form = $('#subscription-form'); // find form
        var submit = form.find('button'); //find submit button
        var submitInitialText = submit.text(); // get initial text on form
        // submit.attr('disabled', 'disabled');
        submit.attr('disabled', 'disabled').text('Just Wait A Moment!');
        stripe.card.createToken(form, function(status, response)
        {
            var token;
            if (response.error)
            {
                form.find('.stripe-errors').text(response.error.message).show();
            }
        });
    });
});