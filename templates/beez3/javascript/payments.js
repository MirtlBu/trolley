function pay( id, type ) {
    money = jQuery('#'+id+' .jertva_edit').val();
    link = '';
    if( type == 'pp' ) {
        link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=Z84JREWL2AVYJ&lc=RU&item_name=%D0%93%D0%BE%D1%80%D0%BE%D0%B4%D1%81%D0%BA%D0%B8%D0%B5+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D1%8B&charset=utf-8&no_note=0&cn=%D0%94%D0%BE%D0%B1%D0%B0%D0%B2%D0%B8%D1%82%D1%8C+%D1%81%D0%BF%D0%B5%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5+%D0%B8%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D0%B8+%D0%B4%D0%BB%D1%8F+%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B2%D1%86%D0%B0%3A&no_shipping=2&currency_code=RUB&bn=PP-DonationsBF%3Abtn_donateCC_LG.gif%3ANonHosted&amount='+money;
    }
    if( type == 'ya' || type == 'ya_card' ) {
        link = 'https://money.yandex.ru/quickpay/confirm.xml?'+
            '&receiver=410011770266201'+
            '&formcomment=Фонд Городские Проекты'+
            '&short-dest=Пожертвование на уставные цели фонда Городские Проекты'+
            '&targets=Пожертвование на уставные цели фонда Городские Проекты'+
            '&quickpay-back-url=http%3A%2F%2Fstart.city4people.ru%2F'+
            '&shop-host=start.city4people.ru'+
            '&writable-targets=false'+
            '&writable-sum=true'+
            '&comment-needed=false'+
            '&quickpay-form=shop'+
            '&paymentType='+(type=='ya' ? 'PC' : 'AC')+
            '&sum='+money;
    }
    window.open( link, '_blank' );
}
