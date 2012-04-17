<?php

/**
 * Bulgarian (Bulgaria) language pack
 * @package shop
 * @subpackage i18n
 */

i18n::include_locale_file('modules: ecommerce', 'en_US');

global $lang;

if(array_key_exists('bg_BG', $lang) && is_array($lang['bg_BG'])) {
	$lang['bg_BG'] = array_merge($lang['en_US'], $lang['bg_BG']);
} else {
	$lang['bg_BG'] = $lang['en_US'];
}

$lang['bg_BG']['AccountPage']['Message'] = 'Ще трябва да влезнете в система преди да влезнете в профила си. Ако не сте регистриран, няма да може да влезните преди да направите първата си покупка, по друг начин можете да въведете данните си по-долу.';
$lang['bg_BG']['AccountPage']['NOPAGE'] = 'Няма ПрофилСтраница на този сайт - моля създайте една !';
$lang['bg_BG']['AccountPage.ss']['COMPLETED'] = 'Завършени поръчки';
$lang['bg_BG']['AccountPage.ss']['HISTORY'] = 'Хронология на вашите поръчки';
$lang['bg_BG']['AccountPage.ss']['INCOMPLETE'] = 'Неизпълнени поръчки';
$lang['bg_BG']['AccountPage.ss']['Message'] = 'Моля въведете вашите данни за да влезните във вашият акаунт. <br /> Тази страница е само достъпна след първата ви поръчка и след това ви е нагласена парола.';
$lang['bg_BG']['AccountPage.ss']['NOCOMPLETED'] = 'Не са открити никакви завършени поръчки.';
$lang['bg_BG']['AccountPage.ss']['NOINCOMPLETE'] = 'Не са намерени неизпълнени поръчки.';
$lang['bg_BG']['AccountPage.ss']['ORDER'] = 'Поръчка номер';
$lang['bg_BG']['AccountPage.ss']['READMORE'] = 'Прочетете още за поръчка #%s';
$lang['bg_BG']['AccountPage_order.ss']['ADDRESS'] = 'Адрес';
$lang['bg_BG']['AccountPage_order.ss']['AMOUNT'] = 'Количество';
$lang['bg_BG']['AccountPage_order.ss']['BACKTOCHECKOUT'] = 'Натиснете тук за да отидите при страницата за разплащане';
$lang['bg_BG']['AccountPage_order.ss']['CITY'] = 'Град';
$lang['bg_BG']['AccountPage_order.ss']['COUNTRY'] = 'Държава';
$lang['bg_BG']['AccountPage_order.ss']['DATE'] = 'Дата';
$lang['bg_BG']['AccountPage_order.ss']['DETAILS'] = 'Детайли';
$lang['bg_BG']['AccountPage_order.ss']['EMAILDETAILS'] = 'Копие от това беше изпратено на вашият мейл адрес за да подтвърдите детайлите за покупката.';
$lang['bg_BG']['AccountPage_order.ss']['NAME'] = 'Име';
$lang['bg_BG']['AccountPage_order.ss']['PAYMENTMETHOD'] = 'Метод';
$lang['bg_BG']['Cart.ss']['ADDONE'] = 'Добави още едно &quot;%s&quot; към вашата количка';
$lang['bg_BG']['Cart.ss']['CheckoutClick'] = 'Натиснете тук за да отидите при страницата за поръчване';
$lang['bg_BG']['Cart.ss']['CheckoutGoTo'] = 'Поръчайте';
$lang['bg_BG']['Cart.ss']['HEADLINE'] = 'Моята количка';
$lang['bg_BG']['Cart.ss']['NOITEMS'] = 'Няма никакви продукти във вашата количка';
$lang['bg_BG']['Cart.ss']['PRICE'] = 'Цена';
$lang['bg_BG']['Cart.ss']['READMORE'] = 'Натиснете тук за да научите още за &quot;%s&quot;';
$lang['bg_BG']['Cart.ss']['Remove'] = 'Изтрий &quot;%s&quot; от вашата количка';
$lang['bg_BG']['Cart.ss']['REMOVEALL'] = 'Премахни всички &quot;%s&quot; от вашата количка';
$lang['bg_BG']['Cart.ss']['RemoveAlt'] = 'Изтрий';
$lang['bg_BG']['Cart.ss']['REMOVEONE'] = 'Премахни едно &quot;%s&quot; от вашата количка';
$lang['bg_BG']['Cart.ss']['SHIPPING'] = 'Изпращане';
$lang['bg_BG']['Cart.ss']['SUBTOTAL'] = 'Общо';
$lang['bg_BG']['Cart.ss']['TOTAL'] = 'Общо';
$lang['bg_BG']['CheckoutPage']['NOPAGE'] = 'Няма страница за поръчки на този сайт - моля създайте една!';
$lang['bg_BG']['CheckoutPage.ss']['CHECKOUT'] = 'Поръчай';
$lang['bg_BG']['CheckoutPage.ss']['ORDERSTATUS'] = 'Състояние на поръчката';
$lang['bg_BG']['CheckoutPage.ss']['PROCESS'] = 'Процедирай';
$lang['bg_BG']['CheckoutPage_OrderIncomplete.ss']['BACKTOCHECKOUT'] = 'Натиснете тук за да върнете към поръчките';
$lang['bg_BG']['CheckoutPage_OrderIncomplete.ss']['CHECKOUT'] = 'Поръчай';
$lang['bg_BG']['CheckoutPage_OrderIncomplete.ss']['CHEQUEINSTRUCTIONS'] = 'Ако сте посочили разплащане с чек ще получите мейл с инструкций.';
$lang['bg_BG']['CheckoutPage_OrderIncomplete.ss']['DETAILSSUBMITTED'] = 'Тук са дейтаилите които пратихте';
$lang['bg_BG']['CheckoutPage_OrderIncomplete.ss']['INCOMPLETE'] = 'Неизпълнена поръчка';
$lang['bg_BG']['CheckoutPage_OrderIncomplete.ss']['ORDERSTATUS'] = 'Състояние на поръчката';
$lang['bg_BG']['CheckoutPage_OrderIncomplete.ss']['PROCESS'] = 'Процедирай';
$lang['bg_BG']['CheckoutPage_OrderSuccessful.ss']['BACKTOCHECKOUT'] = 'Натиснете тук за да се върнете в поръчките';
$lang['bg_BG']['CheckoutPage_OrderSuccessful.ss']['CHECKOUT'] = 'Поръчване';
$lang['bg_BG']['CheckoutPage_OrderSuccessful.ss']['EMAILDETAILS'] = 'Копие от това е изпратено на вашият мейл адрес за да подтвърдите подробностите на поръчката.';
$lang['bg_BG']['CheckoutPage_OrderSuccessful.ss']['ORDERSTATUS'] = 'Състояние на поръчката';
$lang['bg_BG']['CheckoutPage_OrderSuccessful.ss']['PROCESS'] = 'Процедирай';
$lang['bg_BG']['CheckoutPage_OrderSuccessful.ss']['SUCCESSFULl'] = 'Поръчката беше успешна';
$lang['bg_BG']['ChequePayment']['MESSAGE'] = 'Разплащане прието през чек. Моля запомнете: продуктите няма да бъдат изпратени до като не се получи разплащането.';
$lang['bg_BG']['DataReport']['EXPORTCSV'] = 'Изнеси на CSV';
$lang['bg_BG']['FindOrderReport']['DATERANGE'] = 'Интервал';
$lang['bg_BG']['MemberForm']['DETAILSSAVED'] = 'Вашите детайли бяха запазени';
$lang['bg_BG']['MemberForm']['LOGGEDIN'] = 'Вие сте влязъл като';
$lang['bg_BG']['Order']['INCOMPLETE'] = 'Неуспашна поръчка';
$lang['bg_BG']['Order']['SUCCESSFULL'] = 'Успешна поръчка';
$lang['bg_BG']['OrderInformation.ss']['ADDRESS'] = 'Адрес';
$lang['bg_BG']['OrderInformation.ss']['AMOUNT'] = 'Сума';
$lang['bg_BG']['OrderInformation.ss']['BUYERSADDRESS'] = 'Адрес на копувача';
$lang['bg_BG']['OrderInformation.ss']['CITY'] = 'Град';
$lang['bg_BG']['OrderInformation.ss']['COUNTRY'] = 'Страна';
$lang['bg_BG']['OrderInformation.ss']['CUSTOMERDETAILS'] = 'Детайли на клиента';
$lang['bg_BG']['OrderInformation.ss']['DATE'] = 'Дата';
$lang['bg_BG']['OrderInformation.ss']['DETAILS'] = 'Детайли';
$lang['bg_BG']['OrderInformation.ss']['EMAIL'] = 'мейл';
$lang['bg_BG']['OrderInformation.ss']['MOBILE'] = 'Мобилен телефон';
$lang['bg_BG']['OrderInformation.ss']['NAME'] = 'Име';
$lang['bg_BG']['OrderInformation.ss']['ORDERSUMMARY'] = 'Преглед на поръчката';
$lang['bg_BG']['OrderInformation.ss']['PAYMENTID'] = 'ID за разплащане';
$lang['bg_BG']['OrderInformation.ss']['PAYMENTINFORMATION'] = 'Информация за разплащане';
$lang['bg_BG']['OrderInformation.ss']['PAYMENTMETHOD'] = 'Метод';
$lang['bg_BG']['OrderInformation.ss']['PAYMENTSTATUS'] = 'Ситуация на разплащане';
$lang['bg_BG']['OrderInformation.ss']['PHONE'] = 'Телефон';
$lang['bg_BG']['OrderInformation.ss']['PRICE'] = 'Цена';
$lang['bg_BG']['OrderInformation.ss']['PRODUCT'] = 'Продукт';
$lang['bg_BG']['OrderInformation.ss']['QUANTITY'] = 'Брой';
$lang['bg_BG']['OrderInformation.ss']['READMORE'] = 'Натиснете тук зада прочетете повече за &quot;%s&quot;';
$lang['bg_BG']['OrderInformation.ss']['SHIPPING'] = 'Изпращане';
$lang['bg_BG']['OrderInformation.ss']['SHIPPINGDETAILS'] = 'Детайли за изпращане';
$lang['bg_BG']['OrderInformation.ss']['SHIPPINGTO'] = 'за';
$lang['bg_BG']['OrderInformation.ss']['SUBTOTAL'] = 'Общо';
$lang['bg_BG']['OrderInformation.ss']['TABLESUMMARY'] = 'Съдържанието на вашата количка е показано в този формуляр също както и резюме от всички такси свързани с поръчката и разплащането.';
$lang['bg_BG']['OrderInformation.ss']['TOTAL'] = 'Общо';
$lang['bg_BG']['OrderInformation.ss']['TOTALl'] = 'Общо';
$lang['bg_BG']['OrderInformation.ss']['TOTALOUTSTANDING'] = 'Общо висящо';
$lang['bg_BG']['OrderInformation.ss']['TOTALPRICE'] = 'Обща цена';
$lang['bg_BG']['OrderInformation_Editable.ss']['ADDONE'] = 'Добавете още едно от &quot;%s&quot; във вашата количка';
$lang['bg_BG']['OrderInformation_Editable.ss']['NOITEMS'] = 'Няма <strong>никакви</strong> продукти във вашата количка.';
$lang['bg_BG']['OrderInformation_Editable.ss']['ORDERINFORMATION'] = 'Информация за поръчката';
$lang['bg_BG']['OrderInformation_Editable.ss']['PRICE'] = 'Цена';
$lang['bg_BG']['OrderInformation_Editable.ss']['PRODUCT'] = 'Продукт';
$lang['bg_BG']['OrderInformation_Editable.ss']['QUANTITY'] = 'Брой';
$lang['bg_BG']['OrderInformation_Editable.ss']['READMORE'] = 'Натиснете тук за да прочетете ощe за &quot;%s&quot;';
$lang['bg_BG']['OrderInformation_Editable.ss']['REMOVEALL'] = 'Премахни всички &quot;%s&quot; от вашата количка';
$lang['bg_BG']['OrderInformation_Editable.ss']['REMOVEONE'] = 'Премахнете едно от &quot;%s&quot; от вашата количка';
$lang['bg_BG']['OrderInformation_Editable.ss']['SHIPPING'] = 'Изпращане';
$lang['bg_BG']['OrderInformation_Editable.ss']['SHIPPINGTO'] = 'за';
$lang['bg_BG']['OrderInformation_Editable.ss']['SUBTOTAL'] = 'Общо';
$lang['bg_BG']['OrderInformation_Editable.ss']['TABLESUMMARY'] = 'Съдържанието на вашата количка е показано в този формуляр също както и резюме от всички такси свързани с поръчката и разплащането.';
$lang['bg_BG']['OrderInformation_Editable.ss']['TOTAL'] = 'Общо';
$lang['bg_BG']['OrderInformation_Editable.ss']['TOTALPRICE'] = 'Обща цена';
$lang['bg_BG']['OrderInformation_NoPricing.ss']['ADDRESS'] = 'Адрес';
$lang['bg_BG']['OrderInformation_NoPricing.ss']['BUYERSADDRESS'] = 'Адрес на копувача';
$lang['bg_BG']['OrderInformation_NoPricing.ss']['CITY'] = 'Град';
$lang['bg_BG']['OrderInformation_NoPricing.ss']['COUNTRY'] = 'Страна';
$lang['bg_BG']['OrderInformation_NoPricing.ss']['CUSTOMERDETAILS'] = 'Детайли на копувача';
$lang['bg_BG']['OrderInformation_NoPricing.ss']['EMAIL'] = 'мейл';
$lang['bg_BG']['OrderInformation_NoPricing.ss']['MOBILE'] = 'Мобилен телефон';
$lang['bg_BG']['OrderInformation_NoPricing.ss']['NAME'] = 'Име';
$lang['bg_BG']['OrderInformation_NoPricing.ss']['ORDERINFO'] = 'Информация за поръчка номер';
$lang['bg_BG']['OrderInformation_NoPricing.ss']['PHONE'] = 'Телефон';
$lang['bg_BG']['OrderInformation_NoPricing.ss']['TABLESUMMARY'] = 'Съдържанието на вашата количка е показано в този формуляр всъщо така и резюме на всички цени свързани с поръчката и метод на разплащането.';
$lang['bg_BG']['OrderInformation_PackingSlip.ss']['DESCRIPTION'] = 'Описание';
$lang['bg_BG']['OrderInformation_PackingSlip.ss']['ITEM'] = 'Продукт';
$lang['bg_BG']['OrderInformation_PackingSlip.ss']['ORDERDATE'] = 'Дата на поръчката';
$lang['bg_BG']['OrderInformation_PackingSlip.ss']['ORDERNUMBER'] = 'Номер на поръчка';
$lang['bg_BG']['OrderInformation_PackingSlip.ss']['PAGETITLE'] = 'Принтирай покупката на поръчките';
$lang['bg_BG']['OrderInformation_PackingSlip.ss']['QUANTITY'] = 'Брой';
$lang['bg_BG']['OrderInformation_PackingSlip.ss']['TABLESUMMARY'] = 'Съдържанието на вашата количка е показано в този формуляр всъщо така и резюме на всички цени свързани с поръчката и метод на разплащането.';
$lang['bg_BG']['OrderInformation_Print.ss']['PAGETITLE'] = 'Принтирай поръчките';
$lang['bg_BG']['OrderReport']['CHANGESTATUS'] = 'Промени състоянието на поръчката';
$lang['bg_BG']['OrderReport']['NOTEEMAIL'] = 'Бележка/мейл';
$lang['bg_BG']['OrderReport']['PRINTEACHORDER'] = 'Принтирай всички показани поръчки';
$lang['bg_BG']['OrderReport']['SENDNOTETO'] = 'Изпрати тази бележка на  %s (%s)';
$lang['bg_BG']['Order_Member.ss']['ADDRESS'] = 'Адрес';
$lang['bg_BG']['Order_Member.ss']['CITY'] = 'Град';
$lang['bg_BG']['Order_Member.ss']['COUNTRY'] = 'Държава';
$lang['bg_BG']['Order_Member.ss']['EMAIL'] = 'Email';
$lang['bg_BG']['Order_Member.ss']['MOBILE'] = 'GSM';
$lang['bg_BG']['Order_Member.ss']['NAME'] = 'Име';
$lang['bg_BG']['Order_Member.ss']['PHONE'] = 'Телефон';
$lang['bg_BG']['Order_receiptEmail.ss']['HEADLINE'] = 'Касова бележка за поръчката';
$lang['bg_BG']['Order_ReceiptEmail.ss']['HEADLINE'] = 'Разписка от поръчката';
$lang['bg_BG']['Order_receiptEmail.ss']['TITLE'] = 'Касова бележка';
$lang['bg_BG']['Order_ReceiptEmail.ss']['TITLE'] = 'Разписка от поръчката';
$lang['bg_BG']['Order_statusEmail.ss']['HEADLINE'] = 'Промени състоянието на копуването';
$lang['bg_BG']['Order_StatusEmail.ss']['HEADLINE'] = 'Смяна на статута на покупа';
$lang['bg_BG']['Order_statusEmail.ss']['STATUSCHANGE'] = 'Състояето променено на "%s" за поръчка #';
$lang['bg_BG']['Order_StatusEmail.ss']['STATUSCHANGE'] = 'Статута променен на "%s" за поръчка #';
$lang['bg_BG']['Order_statusEmail.ss']['TITLE'] = 'Промени състоянието на копуването';
$lang['bg_BG']['Order_StatusEmail.ss']['TITLE'] = 'Смяна на статута на покупа';
$lang['bg_BG']['PaymentInformation.ss']['AMOUNT'] = 'Сума';
$lang['bg_BG']['PaymentInformation.ss']['DATE'] = 'Дата';
$lang['bg_BG']['PaymentInformation.ss']['DETAILS'] = 'Детайли';
$lang['bg_BG']['PaymentInformation.ss']['PAYMENTID'] = 'ID за разплащане';
$lang['bg_BG']['PaymentInformation.ss']['PAYMENTINFORMATION'] = 'Информация на разплащане';
$lang['bg_BG']['PaymentInformation.ss']['PAYMENTMETHOD'] = 'Метод';
$lang['bg_BG']['PaymentInformation.ss']['PAYMENTSTATUS'] = 'Състояние на разплащане';
$lang['bg_BG']['PaymentInformation.ss']['TABLESUMMARY'] = 'Съдържанието на вашата количка е показано в този формуляр всъщо така и резюме на всички цени свързани с поръчката и метод на разплащането.';
$lang['bg_BG']['Product.ss']['ADD'] = 'Добави &quot;%s&quot; към вашата количка';
$lang['bg_BG']['Product.ss']['ADDLINK'] = 'Добави този продукт към количката';
$lang['bg_BG']['Product.ss']['ADDONE'] = 'Добави още едно от &quot;%s&quot; към вашата количка';
$lang['bg_BG']['Product.ss']['AUTHOR'] = 'Автор';
$lang['bg_BG']['Product.ss']['FEATURED'] = 'Това е отличен продукт. ';
$lang['bg_BG']['Product.ss']['GOTOCHECKOUT'] = 'Отиди към поръчките сега';
$lang['bg_BG']['Product.ss']['GOTOCHECKOUTLINK'] = '&raquo; Отидете към поръчките';
$lang['bg_BG']['Product.ss']['IMAGE'] = '%s изображение';
$lang['bg_BG']['Product.ss']['ItemID'] = 'Продукт #';
$lang['bg_BG']['Product.ss']['NOIMAGE'] = 'Съжелявам, няма изображение за &quot;%s&quot;';
$lang['bg_BG']['Product.ss']['QUANTITYCART'] = 'Брой в количката';
$lang['bg_BG']['Product.ss']['REMOVE'] = 'Премахни &quot;%s&quot; от вашата количка';
$lang['bg_BG']['Product.ss']['REMOVEALL'] = 'Премахни едно от &quot;%s&quot; от вашата количка';
$lang['bg_BG']['Product.ss']['REMOVELINK'] = '&raquo; Премахни от количката';
$lang['bg_BG']['Product.ss']['SIZE'] = 'Размер';
$lang['bg_BG']['ProductCategory.ss']['FEATURED'] = 'Отличени продукти';
$lang['bg_BG']['ProductCategory.ss']['OTHER'] = 'Други Продукти';
$lang['bg_BG']['ProductCategory.ss']['VIEWGROUP'] = 'Вижте групата на  продукт &quot;%s&quot;';
$lang['bg_BG']['ProductCategoryItem.ss']['ADD'] = 'Добави &quot;%s&quot; към вашата количка';
$lang['bg_BG']['ProductCategoryItem.ss']['ADDLINK'] = 'Добави този продукт към количката';
$lang['bg_BG']['ProductCategoryItem.ss']['ADDONE'] = 'Добави още едно от &quot;%s&quot; към вашата количка';
$lang['bg_BG']['ProductCategoryItem.ss']['AUTHOR'] = 'Автор';
$lang['bg_BG']['ProductCategoryItem.ss']['GOTOCHECKOUT'] = 'Отиди при разплащане';
$lang['bg_BG']['ProductCategoryItem.ss']['GOTOCHECKOUTLINK'] = '&raquo; Отиди при разплащане';
$lang['bg_BG']['ProductCategoryItem.ss']['IMAGE'] = '%s изображение';
$lang['bg_BG']['ProductCategoryItem.ss']['NOIMAGE'] = 'Съжелявам, няма изображение за &quot;%s&quot;';
$lang['bg_BG']['ProductCategoryItem.ss']['QUANTITY'] = 'Брой';
$lang['bg_BG']['ProductCategoryItem.ss']['QUANTITYCART'] = 'Брой в количката';
$lang['bg_BG']['ProductCategoryItem.ss']['READMORE'] = 'Натиснете тук за да прочетете още за &quot;%s&quot;';
$lang['bg_BG']['ProductCategoryItem.ss']['READMORECONTENT'] = 'Натиснете за да прочетете още &raquo;';
$lang['bg_BG']['ProductCategoryItem.ss']['REMOVE'] = 'Премахни &quot;%s&quot; от вашата количка';
$lang['bg_BG']['ProductCategoryItem.ss']['REMOVEALL'] = 'Премахни едно &quot;%s&quot; от вашата количка';
$lang['bg_BG']['ProductCategoryItem.ss']['REMOVELINK'] = '&raquo; Премахни от количката';
$lang['bg_BG']['ProductCategoryItem.ss']['REMOVEONE'] = 'Премахни едно от &quot;%s&quot; от вашата количка';
$lang['bg_BG']['ProductMenu.ss']['GOTOPAGE'] = 'Отиди на %s страница';
$lang['bg_BG']['SSReport']['ALLCLICKHERE'] = 'Натиснете тук за да прегледате всички продукти';
$lang['bg_BG']['SSReport']['INVOICE'] = 'Фактурирай';
$lang['bg_BG']['SSReport']['PRINT'] = 'Принтирай';
$lang['bg_BG']['SSReport']['VIEW'] = 'Виж';
$lang['bg_BG']['ViewAllProducts.ss']['AUTHOR'] = 'Автор';
$lang['bg_BG']['ViewAllProducts.ss']['CATEGORIES'] = 'Категорий';
$lang['bg_BG']['ViewAllProducts.ss']['IMAGE'] = '%S изображение';
$lang['bg_BG']['ViewAllProducts.ss']['LASTEDIT'] = 'Последно променено';
$lang['bg_BG']['ViewAllProducts.ss']['LINK'] = 'Връзка';
$lang['bg_BG']['ViewAllProducts.ss']['NOCONTENT'] = 'Няма нагласено съдържание.';
$lang['bg_BG']['ViewAllProducts.ss']['NOIMAGE'] = 'Съжелявам, няма изображение за &quot;%s&quot;';
$lang['bg_BG']['ViewAllProducts.ss']['NOSUBJECTS'] = 'Няма нагласени теми';
$lang['bg_BG']['ViewAllProducts.ss']['PRICE'] = 'Цена';
$lang['bg_BG']['ViewAllProducts.ss']['PRODUCTID'] = 'Продукт ID';
$lang['bg_BG']['ViewAllProducts.ss']['WEIGHT'] = 'Тежаст';

?>