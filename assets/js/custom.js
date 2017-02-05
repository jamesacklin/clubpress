$.fn.serializeObject = function() {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};
$(function() {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serializeObject();
        $('#contact-form input').prop('disabled', true).parent('.form-row').addClass('form-row-disabled');
        $('.button-submit').prop('disabled', true).html('Please wait...');
        $.ajax({
            type: 'POST',
            url: 'http://crm.apps4clubz.com/api/leads',
            data: formData,
            encode: true
        }).done(function(data) {
            if (data.errors) {
                $('#contact-form input').prop('disabled', false).parent('.form-row').removeClass('form-row-disabled');
                $('.button-submit').prop('disabled', false).html('Please try submitting again.');
                // Sneakily log errors, comment this for production
                // console.log(data.errors);
            } else {
                $('.button-submit').prop('disabled', true).html('Thanks for getting in touch!');
            }
        }).fail(function() {
            $('.button-submit').prop('disabled', true).html('Thanks for getting in touch!');
        });
    });
});

document.domain = 'apps4clubz.com';

WebFont.load({
  google: {
    families: ['Roboto Slab:100,300,400,700', 'Roboto']
  },
  custom: {
    families: ['FontAwesome'],
    urls: ['//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css']
  }
});
