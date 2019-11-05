$( document ).ready(function() {

    load_home_js();
    click_airport();
    set_Passender();
    load_fly_list_js();
    load_fly_checkout_js();
    $('#add_flight').click(function () {
        show_multi();
    });
    close_flight();
    set_Passender2();
    hidden_add_flight();
});
// xu li click vao input roi kich ra ngoai
$(document).click(function(event) {
    var target_class = $(event.target).attr('class');

    if(target_class == undefined || target_class != 'go') {
        $('.home-search__go .search-default').addClass('d-none');
    }
    var pr = $(event.target).parents('ul.passenger-box-container');
    if (pr.length == 1 ) {
        $('.passenger-box').removeClass('d-none');
    }
    if(pr.length == 0 && target_class != 'ipt_Passenger'){
        $('.passenger-box').addClass('d-none');
    }
});

// xu li an cac country va airport neu khong co chuyen nao den
function hidden_country() {
    var list_countries = $('.home-search__to .country');
    for(var i = 0; i < list_countries.length;i++) {
        $(list_countries[i]).removeClass('d-none');
        var term_id = $(list_countries[i]).attr('term_id');
        var airport_hidden = $('.airport_' + term_id).find('li.d-none').length;
        var all_airport = $('.airport_' + term_id + ' li').length;
        if(airport_hidden == all_airport ){
            $(list_countries[i]).addClass('d-none');
        }
    }
}
function hidden_add_flight() {
    $('.home-search__radio.multi_').click(function () {
        if($('.home-search__content.no-multi').hasClass('d-none')) {
            // console.log('a');
            $('.btn.btn-orange.add').removeClass('d-none');
        }
    });
    $('.home-search__radio.round_').click(function () {
        if($('.home-search__content.multi').hasClass('d-none')) {
            // console.log('a');
            $('.btn.btn-orange.add').addClass('d-none');
        }
    });
}

//xu li di chuyen va chuyen tab giua cac input
function click_airport() {

    $('a.airport').click(function () {
        var type;//di hay ve
        var parent_box = $(this).parents('.home-search__input');
        var airport = $(this).attr('airport');

        var box_search_type = '';//multi active or no-multi active
        var box_input_type = ''; //home-search__group has active or hasn't active
        var abc = '';
        if($('.home-search__content.no-multi').hasClass('d-none')) {
            box_search_type = 'multi';
        } else {
            box_search_type = 'no-multi';
        }
        if($(parent_box).hasClass('home-search__go')) {
            type = 'from';
        } else {
            type = 'to';
        }
        $('.home-search__to .airport').addClass('d-none');

        if(type == 'from') {
            if(box_search_type=='multi')
            {
                abc = $(this).attr('index2');
                box_input_type = '.home-search__group.ab' + abc;
                var to = 'to'+abc;
                // console.log(box_input_type);
            }
            if(box_search_type=='no-multi')
            {
                $('.round_trip_from'+' input[name=inpFrom]').val(airport);
                $('.home-search__go .search-default').addClass('d-none');
                $('.home-search__to .search-default').removeClass('d-none');
            }
            if(box_input_type != '' && box_input_type != undefined) {
                $('.' + box_search_type + ' ' + box_input_type + ' input[name=inpFrom]').val(airport);
                $('.home-search__go .search-default').addClass('d-none');
                $('.home-search__to .search-default'+'.'+to).removeClass('d-none');
            }
            if(abc == undefined) {

                $('.' + box_search_type  + ' .home-search__group.ab0' + ' input[name=inpFrom]').val(airport);
                $('.home-search__go .search-default').addClass('d-none');
                $('.home-search__to .search-default'+'.to0').removeClass('d-none');
            }
        } else if(type == 'to') {
            if(box_search_type=='multi')
            {
                abcd = $(this).attr('index3');
                box_input_type = '.home-search__group.ab' + abcd;
                var date = 'date'+abcd;
                // console.log(box_input_type);
            }
            if(box_search_type=='no-multi')
            {
                $('.round_trip_to'+' input[name=inpTo]').val(airport);
                $('.home-search__to .search-default').addClass('d-none');
                $('.home-search__depart .open').addClass('active').focus();
            }
            if(abcd != '' && abcd != undefined) {
                $('.' + box_search_type + ' ' + box_input_type + ' input[name=inpTo]').val(airport);
                $('.home-search__to .search-default').addClass('d-none');
                $('.home-search__depart .open'+'.'+date).addClass('active').focus();
            } else  {
                $('.' + box_search_type + ' .home-search__group.ab0' + ' input[name=inpTo]').val(airport);
                $('.home-search__to .search-default').addClass('d-none');
                $('.home-search__depart .open'+'.date0').addClass('active').focus();
            }
        }
        var flight_to = $(this).attr('flight_to');
        if(flight_to != undefined && flight_to != ""){
            var flight_to_arr = flight_to.split(',');
            var airport_to = $('.home-search__to .airport');
            for(var i = 0; i < airport_to.length;i++) {
                var airport_item = $(airport_to[i]).attr('airport');
                if(flight_to_arr.indexOf(airport_item) != -1) {
                    $(airport_to[i]).removeClass('d-none');
                }

            }
        }

        if(type == 'from') {
            hidden_country();
        }
    });

    $('.round_trip_passenger .addAldult').click(function() {
        var sl = $('.nbAldult').text();
        sl = sl-0+1 ;
        $('.round_trip_passenger .nbAldult').text(sl);
        $('.round_trip_passenger .dlAldult').removeClass('btn-disable');

    });
    $('round_trip_passenger .dlAldult').click(function() {
        var sl = $('.round_trip_passenger .nbAldult').text();
        sl--;
        $('.round_trip_passenger .nbAldult').text(sl);
        if( sl ==1)
        {
            $('.minus.A').addClass('btn-disable');
        }
    });

    $('.round_trip_passenger .addChild').click(function() {
        var sl = $('.nbChild').text();
        sl = sl-0+1 ;
        $('.round_trip_passenger .nbChild').text(sl);
        $('.round_trip_passenger .dlChild').removeClass('btn-disable');

    });
    $('.round_trip_passenger .dlChild').click(function() {
        var sl = $('.nbChild').text();
        sl--;
        $('.round_trip_passenger .nbChild').text(sl);
        if( sl ==0)
        {
            $('.minus.C').addClass('btn-disable');
        }
    });

    $('.round_trip_passenger .addInfant').click(function() {
        var sl = $('.nbInfant').text();
        sl = sl-0+1 ;
        $('.round_trip_passenger .nbInfant').text(sl);
        $('.round_trip_passenger .dlInfant').removeClass('btn-disable');

    });
    $('.round_trip_passenger .dlInfant').click(function() {
        var sl = $('.round_trip_passenger .nbInfant').text();
        sl--;
        $('.round_trip_passenger .nbInfant').text(sl);
        if( sl ==0)
        {
            $('.minus.I').addClass('btn-disable');
        }
    });

    // 2222222

    $('.addAldult2').click(function() {
        var sl = $('.nbAldult2').text();
        sl = sl-0+1 ;
        $('.nbAldult2').text(sl);
        $('.dlAldult2').removeClass('btn-disable');

    });
    $('.dlAldult2').click(function() {
        var sl = $('.nbAldult2').text();
        sl--;
        $('.nbAldult2').text(sl);
        if( sl ==1)
        {
            $('.minus.A').addClass('btn-disable');
        }
    });

    $('.addChild2').click(function() {
        var sl = $('.nbChild2').text();
        sl = sl-0+1 ;
        $('.nbChild2').text(sl);
        $('.dlChild2').removeClass('btn-disable');

    });
    $('.dlChild2').click(function() {
        var sl = $('.nbChild2').text();
        sl--;
        $('.nbChild2').text(sl);
        if( sl ==0)
        {
            $('.minus.C').addClass('btn-disable');
        }
    });

    $('.addInfant2').click(function() {
        var sl = $('.nbInfant2').text();
        sl = sl-0+1 ;
        $('.nbInfant2').text(sl);
        $('.dlInfant2').removeClass('btn-disable');

    });
    $('.dlInfant2').click(function() {
        var sl = $('.nbInfant2').text();
        sl--;
        $('.nbInfant2').text(sl);
        if( sl ==0)
        {
            $('.minus.I').addClass('btn-disable');
        }
    });
}

function set_Passender() {
    $('.round_trip_passenger .addAldult').click(function() {
        //tong aldult tong children tong infant
        get_passenger_text();
    });
    $('.round_trip_passenger .dlAldult').click(function() {
        //hieu aldult tong children tong infant
        get_passenger_text();
    });
    $('.round_trip_passenger .addChild').click(function() {
        get_passenger_text();
    });
    $('.round_trip_passenger .dlChild').click(function() {
        get_passenger_text();
    });
    $('.round_trip_passenger .addInfant').click(function() {
        get_passenger_text();
    });
    $('.round_trip_passenger .dlInfant').click(function() {
        get_passenger_text();
    });

}
function set_Passender2() {
    $('.addAldult2').click(function() {
        get_passenger_text2();
    });
    $('.dlAldult2').click(function() {
        get_passenger_text2();
    });
    $('.addChild2').click(function() {
        get_passenger_text2();
    });
    $('.dlChild2').click(function() {
        get_passenger_text2();
    });
    $('.addInfant2').click(function() {
        get_passenger_text2();
    });
    $('.dlInfant2').click(function() {
        get_passenger_text2();
    });
}
function  get_passenger_text() {
    var nb1 = $('.round_trip_passenger .nbAldult').text();
    var nb2 = $('.round_trip_passenger .nbChild').text();
    var nb3 = $('.round_trip_passenger .nbInfant').text();
    var text = nb1 + ' Adult(s), ' + nb2 + ' Child(s), ' + nb3 + ' Infant(s)';

    $('.round_trip_passenger .ipt_Passenger').val(text);
}

function  get_passenger_text2() {
    var nb11 = $('.round_trip_passenger2 .nbAldult2').text();
    var nb22 = $('.round_trip_passenger2 .nbChild2').text();
    var nb33 = $('.round_trip_passenger2 .nbInfant2').text();
    var text = nb11 + ' Adult(s), ' + nb22 + ' Child(s), ' + nb33 + ' Infant(s)';

    $('.round_trip_passenger2 .ipt_Passenger').val(text);
}

function load_home_js() {
    $('.home-search__go input').click(function () {
        $(this).parents('.home-search__go').children('.search-default').toggleClass('d-none');
        $('.home-search__to .search-default').addClass('d-none');
    });
    $('.home-search__to input').click(function () {
        if($('.home-search__go input').val() != '') {
            $(this).parents('.home-search__to').children('.search-default').toggleClass('d-none');
            $('.home-search__go .search-default').addClass('d-none');
        }
    });
    $('.home-search__passenger input').click(function () {
        $('.passenger-box').toggleClass('d-none');
    });
    $('#r1').click(function () {
        $('.no-multi .home-search__return').removeClass('d-hidden');
        $('.multi').addClass('d-none');
        $('.no-multi').removeClass('d-none');
    });
    $('#r2').click(function () {
        $('#return').val('');
        $('#return').attr('placeholder','Select Date..');
        $('.no-multi .home-search__return').addClass('d-hidden');
        $('.multi').addClass('d-none');
        $('.no-multi').removeClass('d-none');
    });
    $('#r3').click(function () {
        $('.multi').removeClass('d-none');
        $('.no-multi').addClass('d-none');

    });
    $('.home-search__depart input ').flatpickr({
        altInput: false,
        disableMobile: true,
        dateFormat: 'D, d-m-Y',
        minDate: 'today',
        onChange: function() {
            if($('.home-search__return').hasClass('d-hidden')){
                $('.home-search__passenger .passenger-box').removeClass('d-none');
            }else{
                $('.home-search__return .open').addClass('active').focus();
            }

        }
    });
    $('.home-search__return input').flatpickr({
        altInput: false,
        disableMobile: true,
        dateFormat: 'D, d-m-Y',
        minDate: 'today',
        onChange: function() {

            $('.home-search__passenger .passenger-box').removeClass('d-none');
        }
    });

    $(".destination__body").slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        //autoplay: true,
        speed: 500,
        autoplaySpeed: 5000,
        arrows: false,
        dots: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.fly-offers__slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        //autoplay: true,
        speed: 500,
        arrows: false,
        dots: true
    });
}

function load_fly_list_js() {
    $('.booking-box__btn').click(function () {
        $('.booking-box__dropdown').slideToggle(400);
        $('.booking-box').toggleClass('open-dropdown');
    });

    $('.date-slide').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        //autoplay: true,
        speed: 500,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.ticket-table__cell').click(function () {
        $('.ticket-table__cell').removeClass('active');
        $(this).addClass('active');
    });

    $('.ticket-box__check').click(function () {
        $('.ticket-box__item').removeClass('active');
        $(this).parents('.ticket-box__item').addClass('active');
    });

    $('.ticket-table__type').click(function () {
        $(this).parents('.ticket-table').find('.ticket-table__collapse').slideToggle(400);
    });

    $('.ticket-box__show .p-show-detail').click(function () {
        $(this).parents('.ticket-box').find('.ticket-box__detail').slideToggle(400);
        $(this).parents('.ticket-box').toggleClass('open-detail');
    });
}

function load_fly_checkout_js(){
    $('.add-freq h5').click(function () {
        $(this).parents('.form-checkout__freq').toggleClass('rotate');
        $(this).parents('.form-checkout__freq').find('.row-card').slideToggle(400);
    });
}

//show multi
function show_multi() {
    var list = $('.multi .home-search__group');
    if(list.length > 0) {
        for (var i = 0; i < list.length;i++) {

            if($(list[i]).hasClass('d-none')) {
                $(list[i]).removeClass('d-none');

                return;
            }
        }
    }
}

function close_flight() {
    $('.home-search__close').click(function () {
        var i = ($(this).attr('index'));
        var ii = '.home-search__group.ab'+i;
        $(ii).addClass('d-none');
    });

}



