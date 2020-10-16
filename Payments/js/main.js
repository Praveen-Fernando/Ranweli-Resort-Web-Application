//Payment JS//

// Form animations

jQuery(document).ready(function($) {
    $('.info').on('click', function(e) {
        e.preventDefault();
        $(this).siblings('.info-box').show();
    });

    $('.close-button').on('click', function(e) {
        e.preventDefault();
        $(this).parents('.info-box').hide();
    });
});

// Display credit card images

var cardNumber = document.getElementById('cardNumber');
var image1 = document.getElementById('pic1');
var image2 = document.getElementById('pic2');

function equals() {
    if (cardNumber.value[0] == 4) {
        image1.style.display = 'block';
        image2.style.display = 'none';
    } else
    if (cardNumber.value[0] == 5) {
        image1.style.display = 'none';
        image2.style.display = 'block';

        if (cardNumber.value[0] == 5 && cardNumber.value[1] == 6 ||
            cardNumber.value[0] == 5 && cardNumber.value[1] == 7 ||
            cardNumber.value[0] == 5 && cardNumber.value[1] == 8 ||
            cardNumber.value[0] == 5 && cardNumber.value[1] == 9) {
            image1.style.display = 'none';
            image2.style.display = 'none';
        }
    } else {
        image1.style.display = 'none';
        image2.style.display = 'none';
    }
}
cardNumber.onkeyup = equals;
//---------------------------------------------------------------------------------------------------

//Pyayment form validations
$(function($) {
    $('[data-numeric]').payment('restrictNumeric');
    $('.cardNumber').payment('formatCardNumber');
    $('.expDate').payment('formatCardExpiry');
    $('.secCode').payment('formatCardCVC');
    $.fn.toggleInputError = function(erred) {
        this.parent('.form').toggleClass('has-error', erred);
        return this;
    };
});

$("#submit").click(function() {
    var number = $("#cardNumebr").val();
    var date = $("#expDate").val();
    var code = $("#secCode").val();
    var fName = $("#firstName").val();
    var lName = $("#lastName").val();

    if (number == '' || date == '' || code == '' || fName == '' || lName == '') {
        swal({
            title: "Complete The Form!",
            text: " ",
            icon: "warning"
        });
    } else {
        // Swal.fire({
        //     title: 'Do you want proceed?',
        //     showDenyButton: true,
        //     showCancelButton: true,
        //     confirmButtonText: `yes`,
        //     denyButtonText: `no`,
        //     timer: 3000
        // }).then((result) => {
        //     /* Read more about isConfirmed, isDenied below */
        //     if (result.isConfirmed) {
        //         Swal.fire('Payment Successful!', '', 'success')

        //     } else if (result.isDenied) {
        //         Swal.fire('Payment Canceled', '', 'info')
        //     }
        // })

        // swal({
        //     title: "WOW!",
        //     text: "Message!",
        //     type: "success"
        // }).then(okay => {
        //     if (okay) {
        //         window.location.href = "weddings.html";
        //     }
        // });

        // setTimeout(function() {
        //     swal({
        //             title: "Payment Successful!",
        //             text: " ",
        //             icon: "success",
        //             confirmButtonText: "Yes"
        //         },
        //         function(inConfirm) {
        //             if (isConfirm) {
        //                 window.location.href = "weddings.html";
        //             }
        //         });
        // }, 1000);

        swal({
            title: "Payment Successful!",
            text: " ",
            icon: "success",
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../Reservation/index.php";
            }
        });
    }
});

function sleep(milliseconds) {
    const date = Date.now();
    let currentDate = null;
    do {
        currentDate = Date.now();
    } while (currentDate - date < milliseconds);
}
//---------------------------------------------------------------------------------------------------
//End of payment JS//