<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Only fresh news - Только свежие новости</title>

    <link rel="stylesheet" href="css/choices.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/default.css">

    <script src="js/choices.min.js" defer></script>
    <script src="js/script.js" defer></script>
</head>
<body>
<header class="header">
    <div class="container flex-center">
        <img class="logo" src="image/logo.svg" alt="Логотип Only fresh news">
        <form class="form-search flex-center">
            <div class="search-label">
                <input type="search" class="search-input" name="search">
                <button class="search-submit" type="submit">
                    <svg width="19" height="19" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0995 15.1287L18.7849 17.8127C18.9101 17.9424 18.9794 18.1161 18.9778 18.2963C18.9763 18.4766 18.904 18.649 18.7765 18.7765C18.649 18.904 18.4766 18.9763 18.2963 18.9778C18.1161 18.9794 17.9424 18.9101 17.8127 18.7849L15.1274 16.0995C13.3725 17.603 11.1036 18.3683 8.79661 18.235C6.48964 18.1016 4.32399 17.0799 2.75408 15.3843C1.18418 13.6886 0.332062 11.4508 0.376535 9.14037C0.421008 6.82998 1.35862 4.62661 2.99261 2.99261C4.62661 1.35862 6.82998 0.421008 9.14037 0.376535C11.4508 0.332062 13.6886 1.18418 15.3843 2.75408C17.0799 4.32399 18.1016 6.48964 18.235 8.79661C18.3683 11.1036 17.603 13.3725 16.0995 15.1274V15.1287ZM9.31249 16.875C11.3182 16.875 13.2417 16.0782 14.66 14.66C16.0782 13.2417 16.875 11.3182 16.875 9.31249C16.875 7.30679 16.0782 5.38324 14.66 3.96499C13.2417 2.54675 11.3182 1.74999 9.31249 1.74999C7.30679 1.74999 5.38324 2.54675 3.96499 3.96499C2.54675 5.38324 1.74999 7.30679 1.74999 9.31249C1.74999 11.3182 2.54675 13.2417 3.96499 14.66C5.38324 16.0782 7.30679 16.875 9.31249 16.875Z" fill="currentColor"/>
                    </svg>
                </button>
            </div>
            <select name="country" class="js-choice">
                <option value="">Выберите страну</option>
                <option value="ru">Россия</option>
                <option value="ua">Украина</option>
                <option value="us">США</option>
                <option value="de">Германия</option>
                <option value="cz">Чехия</option>
                <option value="pl">Польша</option>
                <option value="lv">Латвия</option>
                <option value="lt">Литва</option>
            </select>
        </form>
    </div>
</header>
<main>
    <div class="title-wrapper">
        <div class="container">
            <h1 class="visually-hidden">Агрегатор новостей - Only fresh news</h1>
            <h2 class="title hide">По вашему запросу "новости про IT" найдено 0 результатов</h2>
        </div>
        <section class="news">
            <h2 class="visually-hidden">Список новостей</h2>
            <div class="container">
                <ul class="news-list"></ul>
            </div>
        </section>
    </div>
</main>
<footer class="footer">
    <div class="container footer-container">
        <img class="footer-logo" src="image/logo.svg" alt="Логотип Only fresh news">
        <p class="copyright">© 2020-2022 News</p>
        <ul class="social-list">
            <li class="social-item">
                <a href="https://twitter.com" class="social-link">
                   <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="15" cy="15" r="15" fill="currentColor"/>
                    <path d="M24.7026 9.11415C24.0067 9.42248 23.2592 9.63082 22.4734 9.72498C23.2842 9.23981 23.8908 8.4762 24.1801 7.57665C23.4183 8.02914 22.5845 8.34765 21.7151 8.51832C21.1304 7.89404 20.3559 7.48025 19.512 7.34121C18.668 7.20217 17.8018 7.34564 17.0477 7.74936C16.2937 8.15308 15.694 8.79445 15.3418 9.5739C14.9897 10.3534 14.9047 11.2273 15.1001 12.06C13.5565 11.9825 12.0464 11.5813 10.6679 10.8824C9.2894 10.1835 8.07325 9.20262 7.09838 8.00332C6.76505 8.57832 6.57338 9.24498 6.57338 9.95498C6.57301 10.5941 6.73041 11.2235 7.03162 11.7873C7.33282 12.351 7.76852 12.8317 8.30005 13.1866C7.68361 13.167 7.08078 13.0005 6.54172 12.7008V12.7508C6.54166 13.6473 6.85174 14.5161 7.41937 15.21C7.98699 15.9038 8.77719 16.3799 9.65588 16.5575C9.08404 16.7122 8.4845 16.735 7.90255 16.6241C8.15047 17.3955 8.63338 18.07 9.28369 18.5533C9.934 19.0365 10.7191 19.3043 11.5292 19.3191C10.1541 20.3987 8.45579 20.9842 6.70755 20.9816C6.39787 20.9817 6.08845 20.9636 5.78088 20.9275C7.55545 22.0685 9.62117 22.674 11.7309 22.6716C18.8726 22.6716 22.7767 16.7566 22.7767 11.6266C22.7767 11.46 22.7726 11.2916 22.7651 11.125C23.5245 10.5758 24.18 9.89573 24.7009 9.11665L24.7026 9.11415Z" fill="white"/>
                </svg>
                </a>
            </li>
            <li class="social-item">
                <a href="https://habr.com" class="social-link">
                   <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="15" cy="15" r="15" fill="currentColor"/>
                    <path d="M5.94996 12.7458L6.09162 12.9567C5.80829 12.9483 5.51162 12.9208 5.45496 12.7992C5.45496 12.7933 5.45662 12.7875 5.45829 12.7817C5.61662 12.74 5.75246 12.7375 5.94996 12.7458ZM7.45496 13.3875L7.52329 13.5958L7.36329 13.6025L7.40162 13.3892C7.41943 13.3892 7.43723 13.3883 7.45496 13.3867V13.3875ZM7.99996 14.9083C7.85829 15.0383 7.74912 15.125 7.66496 15.3225C7.54829 15.2267 7.48746 15.0367 7.44996 14.8242C7.40829 14.5925 7.39496 14.335 7.36329 14.1425L7.37329 14.0442L7.53746 14.0325L7.95579 14.8242L7.99996 14.9075V14.9083ZM7.78829 12.9567C7.80907 12.8143 7.83046 12.6721 7.85246 12.53L7.90662 12.5267C7.86662 12.67 7.82662 12.8133 7.78829 12.9567ZM7.67412 11.0217L8.42412 11.225C8.4229 11.2361 8.42179 11.2472 8.42079 11.2583C8.07162 11.5167 7.74912 11.63 7.57579 12.0967L7.64162 11.0583L7.67412 11.0225V11.0217ZM8.37412 9.94666C8.32579 10.43 8.39412 10.6433 8.47829 10.9433C8.61162 11.0383 8.66496 11.0958 8.62162 11.2367C8.39662 11.125 8.15829 11.0083 7.81329 11.0267C7.80488 11.017 7.79654 11.0073 7.78829 10.9975C7.88496 10.6167 8.07329 10.3825 8.21912 10.0808L8.37496 9.94582L8.37412 9.94666ZM9.45246 9.30332L9.48496 9.30082C9.38162 9.65749 9.33996 10.48 9.15912 10.8067C8.73162 10.6042 8.73996 9.72666 9.21829 9.37999L9.45162 9.30332H9.45246ZM9.05412 11.945L9.41412 12.3358C9.27246 12.7708 9.00496 13.0983 8.89162 13.6025L8.67912 13.5858C8.49746 13.0783 8.95162 12.2517 9.02912 11.8817L9.36246 11.92C9.40412 12.0242 9.44412 12.1283 9.48496 12.2333L9.05412 11.9442V11.945ZM10.0391 9.29999C10.0025 9.72249 10.0958 9.94166 10.1208 10.2683C9.90912 10.3767 9.69662 10.4833 9.48496 10.5908C9.52427 10.1535 9.62905 9.72453 9.79579 9.31832L10.0391 9.29999ZM10.2858 8.65832L10.3333 8.65499L10.2616 8.86082L10.1208 8.86999L10.2291 8.74249L10.2858 8.65832ZM10.3333 10.6292L9.69662 11.0208C9.70996 10.7842 10.0116 10.465 10.2641 10.3767L10.3225 10.4083L10.3333 10.6292ZM10.7583 9.14749C10.7191 9.36582 10.6808 9.58332 10.6433 9.80166L10.5241 9.87666L10.4608 9.94582C10.3458 9.78416 10.3166 9.38749 10.3416 9.08582L10.7583 9.14749ZM11.1816 8.65582C11.1816 8.66416 11.18 8.67082 11.1791 8.67749L11.0166 8.83332C10.9083 8.87499 10.895 8.87332 10.7583 8.86832C10.7758 8.79749 10.7958 8.72666 10.815 8.65582H11.1816ZM11.6066 7.79582L11.4166 8.22499L10.7583 8.17749L10.7608 8.14249C11.0316 8.01749 11.2691 7.86916 11.6058 7.79499L11.6066 7.79582ZM11.2633 8.91249L11.3333 8.87082L11.3941 9.08582L11.1816 9.04416L11.2633 8.91166V8.91249ZM11.8183 9.54832C11.5658 9.64666 11.2166 9.61916 11.0141 9.73166C10.9996 9.64552 10.9849 9.55941 10.97 9.47332L11.1016 9.30082C11.3158 9.38416 11.53 9.46916 11.7433 9.55332L11.8183 9.54832ZM11.2758 9.93499L10.9875 9.94582C10.9808 9.91582 10.9758 9.88582 10.97 9.85499C11.1725 9.77249 11.5125 9.76499 11.8183 9.73082L11.4958 9.90832L11.2758 9.93499ZM12.03 9.93499C11.7875 9.99582 11.555 10.21 11.3958 10.3767C11.365 10.1817 11.7391 9.83832 11.9183 9.73082C11.9975 9.80166 12.0058 9.79416 12.03 9.93499ZM12.455 7.36582L12.4516 7.39916L12.1966 7.55332L11.8183 7.58082L11.8216 7.54749L12.455 7.36582ZM12.1116 8.01082L12.03 7.88999C12.2216 7.72916 12.6441 7.81749 12.8791 7.84166L12.1116 8.01082ZM14.01 7.37749C14.3641 7.40666 14.6883 7.48999 14.935 7.64416L15 7.63999L14.9608 7.69499L14.6216 7.79499C14.4175 7.76666 14.2133 7.73666 14.01 7.70749L12.6666 7.51666L12.67 7.48916C13.1085 7.385 13.5603 7.34763 14.01 7.37832V7.37749ZM15.4208 7.26416L15.3458 7.36582C15.1424 7.35128 14.948 7.27642 14.7875 7.15082L15.4241 7.23166L15.4208 7.26416ZM16.5508 8.05916L16.7266 7.99249L16.9091 8.14916C16.8841 8.32832 16.7116 8.47499 16.5791 8.64916L16.4775 8.65582C16.2008 8.19749 15.8516 7.69666 15.2391 7.51999L15.2125 7.46582L15.46 7.36582C15.8758 7.51082 16.2225 7.73082 16.6083 7.85749C16.6583 7.97832 16.6425 7.93749 16.55 8.05916H16.5508ZM17.0625 9.07832L17.0141 9.03082L16.9091 9.03832L17.0841 8.87166L17.0625 9.07832ZM17.25 11.4517C17.5366 11.7 17.61 12.06 17.4908 12.5267C17.3675 12.25 17.245 11.9725 17.1208 11.6958C17.1625 11.6342 17.2016 11.5725 17.2425 11.5108C17.245 11.4908 17.2466 11.4708 17.25 11.4517ZM17.3333 9.51832L17.33 9.55832L17.1791 9.73082L17.1208 9.61666C17.2116 9.45416 17.1458 9.54166 17.265 9.52499L17.3333 9.51832ZM17.51 9.51582L18.1816 9.76499C18.1805 9.78728 18.1786 9.80952 18.1758 9.83166C18.1191 9.87082 18.0625 9.90832 18.0058 9.94582L17.3333 9.69749L17.3391 9.62999L17.51 9.51582ZM18.8183 10.3767L18.4458 10.1292L18.3941 10.0292C18.5558 9.92916 18.5325 9.93416 18.7033 9.96749C18.7408 10.1042 18.78 10.24 18.8183 10.3758V10.3767ZM19.03 10.295L18.955 10.3767C18.865 10.33 18.8491 10.2708 18.8183 10.1608L19.0125 10.2458L19.03 10.295ZM18.8716 9.67916L18.8183 9.68332C18.8766 9.62749 18.935 9.57166 18.995 9.51666C18.9533 9.57082 18.9116 9.62499 18.8716 9.67916ZM19.8791 10.7608L19.775 10.8067C19.5856 10.7006 19.3964 10.5942 19.2075 10.4875C19.1481 10.407 19.089 10.3265 19.03 10.2458C19.3241 10.0292 19.335 10.2808 19.6125 10.4183L19.8791 10.7608ZM20.0908 10.9508L19.8791 10.8733L20.0066 10.8067L20.0908 10.9508ZM19.8325 11.2975C19.9091 11.4517 19.9091 11.4083 20.0908 11.385L19.765 11.6667L19.4541 11.0733L19.4583 11.0367C19.6875 10.9875 19.7608 11.07 19.985 11.1033L20.0708 11.2417L19.8333 11.2975H19.8325ZM19.8791 11.6833L20.3033 11.4517C20.2183 11.6433 20.1075 11.7417 19.9766 11.8817L19.8791 11.6833ZM20.7275 12.5042C20.6125 12.6033 20.5375 12.635 20.32 12.6533L20.495 12.6725L20.4916 12.7033L19.8941 12.9567L19.8791 12.19L20.2908 11.7025L20.3658 11.6667L20.7275 12.5042ZM20.515 11.3275C21.6866 11.0008 21.46 11.6225 20.9375 12.0967C20.7958 11.8408 20.655 11.5842 20.515 11.3275ZM21.5758 11.4517C21.1441 13.48 21.0608 13.5908 19.5341 14.4625C19.5085 14.4215 19.4818 14.3812 19.4541 14.3417L19.5083 14.115C20.5041 13.8317 21.07 13.31 21.0108 12.1292L21.51 11.4875L21.5758 11.4517ZM21.6275 11.4517C21.6108 11.3817 21.5941 11.3117 21.5758 11.2417L21.7341 11.2367L21.6275 11.4517ZM19.03 13.4242L19.045 13.2L19.0583 13.0083L19.205 12.9592C19.2125 12.9592 19.2191 12.9575 19.2258 12.9567C19.2675 13.2108 19.2258 13.3983 19.1425 13.6025C19.0708 13.5567 19.0566 13.5375 19.03 13.4242ZM18.1816 15.3058L18.185 15.2683L18.4633 14.6025L18.5216 14.4625L19.0116 14.4958C19.0191 14.5325 19.0241 14.5683 19.0266 14.6025C19.0483 14.8558 18.9608 15.0583 18.8708 15.3225L18.1816 15.3058ZM18.3941 16.1692L18.4 15.8358L18.4083 15.7525L18.7666 15.7792L18.8183 15.775C18.7358 15.9108 18.6541 16.0467 18.5733 16.1833L18.3941 16.1692ZM18.1841 14.7775L18.2058 14.7667L18.375 14.6792L18.3941 14.6775L18.3691 14.7667L18.27 15.1075L18.1816 14.8042L18.1841 14.7775ZM17.8533 15.8483L17.7575 15.7525C17.8508 15.8175 17.79 15.7542 17.8533 15.8483ZM17.3333 15.5925C17.4525 15.5175 17.5816 15.5408 17.7583 15.5425L17.7058 15.715C17.56 15.7733 17.5391 15.7517 17.375 15.7342L17.3333 15.5925ZM17.5933 16.3975L17.7575 16.7858C17.6308 16.8717 17.5033 16.9567 17.3766 17.0433C17.2633 16.8875 17.3866 16.4517 17.5933 16.3975ZM17.1741 15.0475L17.1208 15.0517L17.1908 14.8925L17.1741 15.0483V15.0475ZM17.785 15.1075L17.7575 15.09L17.8508 14.8933L17.8816 14.8925L17.97 15.0992L17.785 15.1075ZM19.2541 12.3117L19.2425 12.2392C19.2983 12.1708 19.3341 12.1283 19.43 12.0975L19.455 12.2242C19.4133 12.2517 19.3716 12.2783 19.3308 12.3067L19.2541 12.3117ZM19.2425 12.8367C19.2041 12.8875 19.1358 12.9158 19.0875 12.9567L19.03 11.8817L19.2425 12.8367ZM18.8533 14.2783C18.9933 14.2 19.0133 14.2725 19.03 14.4617H18.6058L18.6133 14.395L18.8533 14.2783ZM18.645 13.6842L18.7408 13.6025L18.8183 13.7408L18.7825 13.8175L18.6058 13.7967L18.645 13.6842ZM18.6058 14.2542L18.385 14.4625L18.2408 14.4383L18.1825 14.4442C18.2158 14.3783 18.2508 14.3125 18.285 14.2475L18.6058 14.2542ZM17.8058 14.1317C17.7175 14.07 17.7808 14.0783 17.7641 14.0317L17.8058 14.1317ZM18.4741 13.1717L17.7575 12.8C17.7908 12.3083 17.8508 11.7433 17.8025 11.2367C18.355 11.4367 18.8508 12.3358 18.4741 13.1717ZM17.97 13.1717C18.1458 13.265 18.1366 13.35 18.3808 13.425C18.4233 13.5842 18.3583 13.6475 18.2566 13.8167L17.9966 13.8067C17.9433 13.5233 18.0016 13.3608 17.97 13.1717ZM18.0183 14.5625C17.9291 14.5008 17.9933 14.5092 17.9766 14.4625L18.0183 14.5625ZM19.4541 12.4925L19.4566 12.4525L19.6483 12.3117C19.6816 12.5317 19.6691 12.8983 19.6191 13.1717C19.5058 13.0833 19.485 12.71 19.4541 12.4925ZM19.4541 13.1717C19.4975 13.1 19.5408 13.0283 19.5825 12.9567L19.5075 13.1683L19.4541 13.1717ZM20.6916 12.5292L20.7275 12.5267C20.7375 13.3508 20.2291 13.5008 19.5608 13.81L19.4541 13.8175L19.8708 12.9542L20.6916 12.5292ZM19.4333 10.9192C19.44 10.9408 19.4475 10.9617 19.4533 10.9833L19.4008 11.0217L19.2416 10.8067L19.4333 10.9192ZM19.2416 11.2775L19.2475 11.24C19.263 11.2387 19.2786 11.2376 19.2941 11.2367L19.4541 11.4517C19.3308 11.3933 19.3108 11.3783 19.2416 11.2767V11.2775ZM19.4533 11.8275L19.1675 12.0967L18.5533 11.205L17.7566 10.5133L17.9316 10.3767C18.3175 10.5433 18.9925 10.8608 19.1283 11.2575C19.1725 11.3867 19.02 11.4933 19.1233 11.6008C19.2466 11.7292 19.37 11.6375 19.4541 11.8267L19.4533 11.8275ZM17.6633 13.1717L17.7283 13.1975L17.7566 13.8175L17.6575 13.7942C17.5641 13.725 17.4991 13.405 17.5841 13.2658L17.6633 13.1717ZM17.1933 14.25L17.2616 14.2475L17.3325 14.4158L17.2241 14.4575L17.12 14.4625C17.145 14.3917 17.17 14.3208 17.1933 14.25ZM17 17.6883L16.9083 17.3742C17.0391 17.3367 17.1691 17.2992 17.3 17.26L17.3333 17.2583C17.3316 17.268 17.3302 17.2777 17.3291 17.2875L17 17.6875V17.6883ZM16.6958 16.8283C16.735 16.7017 16.7625 16.6825 16.8333 16.6125L16.8916 16.6358L16.9083 16.6908L16.7775 16.8192L16.6958 16.8275V16.8283ZM16.7958 17.0433L16.6958 16.9333L16.9083 16.8283L16.8533 17.0392L16.7958 17.0433ZM16.5725 18.0183C16.5425 17.995 16.5141 17.9708 16.4841 17.9458L16.5491 17.9417L16.8766 17.6883L16.9083 17.9467L16.6575 18.1183L16.5725 18.0183ZM16.5891 20.4817C16.0783 20.5033 15.7725 20.3733 15.3558 20.3367L14.8783 19.3925L14.7866 19.2975C15.5883 19.2025 16.0925 18.8158 16.6866 18.5483C16.8966 18.7483 17.3725 19.7667 16.9533 20.2175C16.8533 20.3717 16.7408 20.3875 16.5883 20.4817H16.5891ZM14.3958 19.4208L14.5875 19.4083C14.8766 19.6025 15.0733 19.95 15.2116 20.2692L14.3625 20.0233C14.4258 19.8083 14.4525 19.59 14.3958 19.4208ZM13.7858 18.6092L14.7425 18.3333L16.2458 18.48L16.2725 18.5558C15.825 18.7575 15.3158 18.9275 14.8025 19.1875C14.2466 19.2317 14.1125 19.0242 13.7275 18.8875L13.7866 18.6092H13.7858ZM13.7266 19.6225L13.7458 19.4358L14.1116 19.4083C14.1416 19.5708 14.1733 19.6617 14.1283 19.8383L13.7266 19.6217V19.6225ZM13.3016 19.9592L13.4441 19.8808C13.6191 19.765 13.75 19.9192 13.9383 19.98L13.8633 20.0533L13.3025 19.9592H13.3016ZM13.7141 19.6233C13.6679 19.6028 13.6218 19.5819 13.5758 19.5608L13.5141 19.4083L13.7266 19.4217L13.7141 19.6233ZM13.09 19.6233L13.3025 19.8058C13.3025 19.9183 13.2925 19.9058 13.2666 20.0533L13.09 19.6233ZM12.54 18.8175C12.7391 18.7567 13.0041 18.77 13.3025 18.7633L13.025 18.9783L12.4541 18.9225L12.54 18.8175ZM12.03 8.03999C12.4241 7.66332 13.4125 7.77582 13.66 8.01499L13.7266 8.00916C13.3975 8.31666 12.8875 8.35166 12.5741 8.65582C12.3283 8.49249 12.125 8.38749 12.03 8.03999ZM14.1966 8.65582L14.3633 8.84499C14.215 8.85332 14.0591 8.86249 13.9033 8.87582C13.5525 8.90582 13.2058 8.95832 12.9633 9.08416L12.9316 9.08582C12.9141 9.05834 12.8966 9.03084 12.8791 9.00332C13.2772 8.79451 13.7167 8.67667 14.1658 8.65832L14.1966 8.65582ZM15.0233 7.58082C15.2975 7.85582 15.7066 8.01916 15.8483 8.44082C15.2733 8.17332 14.3883 8.17749 13.94 7.75166C14.335 7.83582 14.6716 7.80416 15.0233 7.58082ZM15.2125 9.08582L15.9991 9.19416L16.0608 9.18916L15.43 9.73082C15.33 9.53166 15.3066 9.26166 15.2125 9.08582ZM16.2233 10.0058L16.0608 9.98082L16.2725 9.94582L16.2225 10.0058H16.2233ZM16.0608 9.49166L16.255 9.30082L16.2725 9.51582L16.1316 9.48499L16.0608 9.49166ZM16.4458 16.6083L16.3525 16.6125L16.2725 16.5375L16.3341 16.4567L16.4841 16.3983L16.4458 16.6092V16.6083ZM16.2766 17.0017C16.3016 16.9717 16.3283 16.9417 16.355 16.9117L16.3616 16.8283L16.485 17.0242L16.2725 17.0433L16.2766 17.0017ZM16.1925 17.6883L16.0608 17.53L16.485 17.4733L16.2825 17.6817L16.1925 17.6883ZM16.2725 18.3333L15.8483 18.2825L16.1483 18.1183L16.2733 18.3333H16.2725ZM15.975 17.7267L16.0608 17.8083L15.7533 17.8867L15.4241 17.9033L15.8825 17.6883L15.975 17.7267ZM14.7883 8.44082C15.0358 8.44749 15.2975 8.50999 15.4241 8.65582C15.2533 8.63916 14.9458 8.66666 14.8683 8.53499L14.7883 8.44082ZM15.0033 9.30082C15.1241 9.40666 15.1666 9.53166 15.145 9.73082C14.9583 9.66666 15.0066 9.46249 15.0033 9.30082ZM15.2116 10.6567L15.2191 10.62C15.6416 10.5283 15.7325 10.675 15.54 10.8067C15.3733 10.7833 15.2983 10.7208 15.2125 10.6567H15.2116ZM15.7558 16.1825L15.8483 16.2058C15.8471 16.2158 15.8459 16.2258 15.845 16.2358L15.6366 16.3975L15.7233 16.185L15.7558 16.1825ZM15.6391 10.9375L15.7975 10.8067L15.8483 11.0217L15.6366 10.975L15.6383 10.9375H15.6391ZM16.2725 16.6875L15.76 16.8217L15.6366 16.8275C15.6366 16.8208 15.6383 16.8133 15.64 16.8067C15.8316 16.7683 15.955 16.705 16.0683 16.6125L16.2483 16.6458L16.2733 16.6875H16.2725ZM15.9066 16.1825L15.8483 16.0633L15.9941 15.9675L16.0608 16.0033L15.9775 16.1767L15.9066 16.1825ZM14.5758 17.67L14.8283 17.4733L15.61 17.54L15.6366 17.5983L15.1083 17.9033C14.9125 17.8708 14.7433 17.7842 14.6416 17.665L14.575 17.67H14.5758ZM14.1833 17.6883L14.575 17.9033L13.9391 17.7908C14.0208 17.7575 14.1016 17.7225 14.1833 17.6883ZM14.1516 18.1275C14.1507 18.1447 14.1499 18.1619 14.1491 18.1792L14.0283 18.2458L13.9391 18.2575L13.9425 18.2058C14.035 18.0833 14.0191 18.1242 14.1508 18.1275H14.1516ZM13.1516 9.37499C13.1315 9.35342 13.1113 9.33203 13.0908 9.31082C13.3016 9.19582 13.6341 9.14082 13.9608 9.11499C14.23 9.09249 14.495 9.08999 14.685 9.08582L14.7883 9.73082C14.5108 9.70082 14.2466 9.66416 13.9608 9.65166C13.7138 9.63942 13.4662 9.64834 13.2208 9.67832C13.1982 9.57711 13.1751 9.476 13.1516 9.37499ZM13.4633 18.0042L13.515 18.0958L13.465 18.2883L12.8791 18.3333C12.9416 18.1417 13.035 18.0492 13.1358 17.9033L13.4633 18.0042ZM12.74 17.2583C12.4733 17.2433 12.1083 17.0483 12.03 16.8283L12.8791 17.0442L12.74 17.2583ZM13.0383 17.2467L12.8791 17.2583L12.8841 17.2067L13.0608 17.0433C13.0525 17.1108 13.0458 17.1783 13.0383 17.2467ZM12.455 9.38249L12.7133 9.30082L12.8791 9.50916L12.7041 9.51582L12.4541 9.38249H12.455ZM12.4516 18.6158C12.4375 18.6625 12.425 18.71 12.4116 18.7575C12.391 18.7586 12.3704 18.7605 12.35 18.7633C12.3142 18.6916 12.2784 18.6199 12.2425 18.5483L12.455 18.57L12.4516 18.6158ZM12.5691 17.6883L13.0641 17.7883L13.0908 17.855L12.7066 18.3333L12.2425 18.265L12.5691 17.6883ZM16.2725 10.9483L16.3683 10.8075L16.4033 10.8067L16.67 10.8733L16.6966 10.9117L16.3991 11.0217C16.357 10.9971 16.3147 10.9727 16.2725 10.9483ZM16.8466 10.2533L16.6966 10.1617C16.8491 10.2175 16.7616 10.1542 16.8466 10.2533ZM16.7983 11.2367L16.6966 11.15L16.9091 11.0217L16.7983 11.2367ZM16.6966 12.7417L17.0266 12.8233C17.1158 12.8583 17.1133 12.8675 17.1208 12.9567C16.9791 12.9025 16.7425 12.865 16.6966 12.7417ZM16.73 12.1558L16.775 12.0975L16.9091 12.3117L16.6966 12.27L16.73 12.1558ZM12.4325 19.2317L12.455 19.2883L12.1691 19.3975L12.03 19.4083L12.0333 19.3792L12.1308 19.2267C12.2658 19.1642 12.2691 19.205 12.4325 19.2317ZM11.8183 8.43999C12.0033 8.57832 12.0516 8.74832 12.0225 9.30082C11.9008 9.14499 11.8266 8.81416 11.8183 8.44082V8.43999ZM11.94 8.01082L11.925 8.16666L11.8191 8.17416L11.9408 8.01082H11.94ZM11.8183 8.22582C11.8125 8.27749 11.8083 8.32916 11.8016 8.38082L11.6058 8.34499L11.7675 8.22916L11.8175 8.22582H11.8183ZM11.8183 20.6992L11.9233 19.6042L12.6666 19.4083L11.885 20.6592L11.8183 20.6992ZM11.8708 17.7558L11.985 17.6883C12.0891 17.8117 11.9958 17.9892 11.8975 18.1183C11.8158 18.0417 11.8066 17.9933 11.8283 17.8192L11.87 17.7558H11.8708ZM11.1816 17.6508L11.4258 17.2583L11.8175 17.4883C11.6841 17.6983 11.5483 17.9083 11.4133 18.1183C11.2916 18.01 11.2166 17.8508 11.1816 17.6517V17.6508ZM11.1816 19.335L11.5733 18.9783L11.7575 18.995L11.8183 19.095C11.8016 19.2 11.7866 19.3042 11.7716 19.4083L11.1816 19.335ZM10.5458 19.0433L11.0125 18.7633L11.3675 18.8192L11.3941 18.8683L11.02 19.1933C10.8333 19.1742 10.7091 19.1242 10.6116 19.0392L10.545 19.0433H10.5458ZM10.4833 18.6275L10.6541 18.5483L10.7275 18.5642L10.7575 18.5992L10.2633 18.7633L10.1216 18.7133L10.4833 18.6275ZM9.90912 18.4258L10.0341 18.1233C10.2658 18.0933 10.3208 18.2075 10.495 18.28L10.545 18.3567L10.2858 18.5342L10.075 18.5483L9.90912 18.4258ZM9.48412 19.3083L9.79329 18.7633C9.99829 18.7633 10.0233 18.78 10.1075 18.8883C10.145 18.9517 10.1125 18.9175 10.0308 18.9317L10.0116 19.1192L10.3333 19.1692C10.27 19.3267 10.26 19.3058 10.165 19.4058C9.84829 19.4225 9.70579 19.3625 9.48496 19.3083H9.48412ZM9.12746 18.5483L9.66662 18.7108L9.69662 18.775L9.35079 19.1933L8.84829 19.0283L9.12746 18.5483ZM7.04996 17.9667L7.05662 17.9025L7.35746 18.1342L7.38329 18.1958C6.75746 18.6792 7.71496 20.2542 8.80412 19.2333L9.27246 19.4217C9.09246 19.7425 8.78329 19.8692 8.45746 20.0508C7.67829 20.1158 6.58746 18.8433 7.04912 17.9667H7.04996ZM7.77662 18.1867L7.78829 18.3325C7.72996 18.2883 7.67162 18.2458 7.61496 18.2017L7.57579 18.1175L7.77579 18.1867H7.77662ZM8.84829 19.1L8.46079 19.4C7.69746 19.48 7.38829 18.9517 7.36329 18.3025L7.51246 18.1225L7.57746 18.1175C7.96162 18.42 8.30162 18.8817 8.82329 19.0342L8.84829 19.1ZM8.10912 15.9667C8.03996 15.9167 8.03579 15.8917 8.00079 15.8067L8.14579 15.255L8.31496 15.1067L8.42412 15.2667L8.10912 15.9667ZM8.00079 16.1525L8.33496 15.3617L8.40329 15.3217C8.55746 15.5933 8.78079 15.7167 8.84829 16.0858L8.34496 16.6117C8.18844 16.4951 8.0687 16.336 7.99996 16.1533L8.00079 16.1525ZM8.63662 16.8108L9.06162 16.3967L9.27246 16.8275C9.06053 16.8211 8.84859 16.8155 8.63662 16.8108ZM9.69662 12.465C9.49579 12.8942 9.22829 13.1858 9.06829 13.6017C8.99829 13.2242 9.41996 12.6817 9.55579 12.3483L9.62079 12.3108L9.69662 12.465ZM9.69662 11.2817C10.0125 11.1842 10.2241 11.0058 10.45 10.8058L10.5458 11.0925L10.2775 11.4508L9.69662 11.2825V11.2817ZM10.7575 11.3042L10.6425 11.4508L10.5458 11.4342L10.5475 11.4108L10.7408 11.2358L10.7575 11.3042ZM10.5908 10.3775L10.6241 10.3758L10.7575 10.6567L10.7075 10.8058C10.5133 10.7042 10.5208 10.5833 10.5908 10.3775ZM10.5508 16.6117L10.7466 16.7525L10.5458 16.6642C10.5469 16.6466 10.5486 16.6291 10.5508 16.6117ZM10.5475 16.8275L10.7575 16.9183C10.7562 16.9266 10.7551 16.935 10.7541 16.9433L10.3041 17.2575C10.175 17.1992 10.1591 17.0833 10.1208 16.9575L10.125 16.9308L10.5475 16.8275ZM9.91996 16.3967L10.1216 16.4783L10.0133 16.5408L9.90912 16.5525L9.91996 16.3967ZM9.90912 12.0967C10.1641 12.1683 10.0833 12.12 10.0941 12.3108C9.97746 12.2425 9.96912 12.21 9.90912 12.0958V12.0967ZM9.90912 15.9375L9.92662 15.7517C10.0258 15.8208 10.06 15.8617 10.1216 15.9667C10.0508 15.9568 9.97998 15.9471 9.90912 15.9375ZM10.3341 13.2517C10.2541 13.3542 10.2575 13.3267 10.1216 13.3858L10.2141 13.1708L10.3333 13.2517H10.3341ZM10.3341 12.3867L10.2008 12.5258C10.0675 12.4508 10.13 12.4808 10.19 12.3417L10.2691 12.3108L10.3333 12.3867H10.3341ZM10.3166 12.0208L10.1216 11.8808C10.2716 11.9383 10.2366 11.9033 10.3166 12.0208ZM9.90912 15.9667L10.1216 16.1358C10.0133 16.1333 9.95496 16.11 9.90912 15.9667ZM10.5458 15.9583L10.4591 15.9667L10.385 15.83L10.3333 15.7633L10.4483 15.7517C10.4808 15.8208 10.5125 15.89 10.5458 15.9583ZM10.4291 11.9767L10.3333 11.8817C10.4266 11.9467 10.365 11.8833 10.4283 11.9775L10.4291 11.9767ZM10.4416 15.5183L10.3333 15.2933L10.3791 15.1083L10.4058 15.1067L10.5458 15.5367C10.5111 15.5305 10.4764 15.5244 10.4416 15.5183ZM9.88579 18.0208L9.90912 18.0492L9.83329 18.3333C9.74404 18.2963 9.66545 18.2376 9.60462 18.1625C9.5438 18.0874 9.50267 17.9983 9.48496 17.9033L9.88579 18.0217V18.0208ZM9.27246 18.3333L9.48496 18.5217C9.34912 18.4617 9.34079 18.4642 9.27246 18.3333ZM9.63912 16.4267L9.66412 16.6125L9.48496 16.3975L9.63912 16.4267ZM9.42912 17.4325L9.27246 17.0433C9.45829 17.1142 9.60329 17.3267 9.69746 17.4733L9.42912 17.4325ZM9.59579 13.6042L9.64829 13.6025L9.49329 13.8175C9.46829 13.7642 9.49912 13.7133 9.58496 13.6508L9.59579 13.6033V13.6042ZM9.48496 15.4525L9.44246 15.5375L9.32079 15.4433C9.30466 15.4092 9.28855 15.375 9.27246 15.3408L9.43912 15.3225L9.48496 15.4525ZM7.99996 17.2583C8.42496 17.535 9.14746 17.7917 9.27246 18.3333C8.76857 18.0817 8.33224 17.7131 7.99996 17.2583ZM9.10246 17.05L9.27246 17.2583L8.84829 17.0433L9.10246 17.05ZM10.6558 17.6883L10.3333 17.3633L10.8975 16.8283L10.97 17.4175L10.6558 17.6883ZM10.97 18.0475L11.0258 17.9075L11.1008 17.9033L11.1816 18.1183L10.97 18.0475ZM11.2558 17.2583L11.1816 17.0433L11.3358 17.0717L11.2558 17.2583ZM10.97 10.0167L10.9716 9.99749C11.0416 9.98082 11.1116 9.96416 11.1816 9.94582L11.035 10.1608L10.97 10.0167ZM8.83079 14.4625L8.63662 14.0325C8.88579 14.0867 8.84496 14.2642 8.83079 14.4625ZM8.31162 14.6775C8.12996 14.5517 8.01412 14.3008 7.99996 14.0325C8.37246 14.12 8.35162 14.2667 8.42496 14.6067L8.31162 14.6775ZM8.09246 13.555C7.82162 13.2992 8.21579 12.2758 8.38912 12.04C8.48079 11.9242 8.59579 11.9267 8.74746 11.8817L8.84829 11.9075C8.59329 12.3592 8.42162 12.9742 8.36079 13.6025L8.09246 13.555ZM7.69662 17.0433L7.82579 17.2608L7.70996 17.5317L7.64329 17.6025C7.73829 17.6158 7.75996 17.5342 7.90162 17.4183C8.17662 17.8642 8.59662 18.2908 9.05996 18.5333L8.80746 18.9783L8.04079 18.485C7.95329 18.3225 8.07412 18.1358 7.93329 18.0367C7.80579 17.9467 7.64162 18.0767 7.51162 18.0375L7.15162 17.7075C7.25746 17.4708 7.35912 17.2392 7.56829 17.1183L7.69662 17.0433ZM6.96329 14.6717C6.99221 14.4572 7.03367 14.2446 7.08746 14.035L7.11579 14.0325L7.22662 14.6717L7.28496 15.005C7.45162 15.47 7.61996 15.9342 7.78829 16.3975C7.38496 16.1775 7.13579 15.6683 7.17162 14.9833C7.07496 15.2042 7.15496 15.5517 7.18662 15.7467C6.93912 15.5367 6.90746 15.1192 6.96246 14.6717H6.96329ZM6.59496 14.8925C6.55642 14.8111 6.53217 14.7237 6.52329 14.6342C6.51142 14.5136 6.51254 14.392 6.52662 14.2717L6.56329 14.195L6.72746 14.0325L6.63496 14.6333L6.59496 14.8917V14.8925ZM21.3633 17.0425L20.9391 16.8792L21.3508 16.8283L21.3633 17.0433V17.0425ZM10.1383 20.5425L10.2491 20.4842L10.1208 20.6983L10.1375 20.5433L10.1383 20.5425ZM6.93912 13.1725L6.75829 13.1558C6.53329 13.0817 6.32246 12.8192 6.30329 12.5275C6.64746 12.5583 6.76412 12.7217 6.93412 12.9208C6.93579 13.0042 6.93829 13.0883 6.93912 13.1725ZM6.91412 13.155C6.93912 12.6908 6.58496 12.4008 6.12496 12.4133C6.20329 11.7617 6.76996 11.4283 7.27496 11.2092L7.37246 11.2017C7.28829 12.02 7.35246 12.725 7.04662 13.4333C6.82079 13.955 6.01996 13.945 6.06329 14.75L6.06912 14.8167C6.18329 15.8867 7.34662 16.1042 7.50746 17.045C5.78246 17.9225 7.88496 21.61 9.24912 19.4442C9.49412 19.4792 9.71162 19.59 10.0158 19.4833C10.1575 19.405 10.185 19.3417 10.24 19.1783L10.7275 19.4308L10.7525 19.4925C10.3058 19.8392 9.99079 20.315 9.51079 20.64L9.55662 20.5083L9.43162 20.4858L9.36246 20.5233L9.29996 20.815C9.57412 21.095 10.405 20.0825 10.6483 19.8842C10.5108 20.365 10.1708 20.6125 9.98162 21.0525L10.04 21.1125C10.3983 20.8558 10.8375 20.1292 10.9041 19.5767L11.4408 19.6658C10.7683 20.575 9.04079 22.575 8.13246 23.1092C8.27079 22.675 8.49079 22.3433 8.60246 21.9867L8.53746 21.9917C8.51808 21.9716 8.49864 21.9516 8.47912 21.9317C8.25829 22.3667 7.89412 22.6725 7.82912 23.2592C7.86796 23.3173 7.9171 23.3679 7.97412 23.4083C9.05412 23.2283 10.8575 20.5142 11.7191 19.7725C11.4858 22.1142 10.2308 22.4792 9.14246 23.8975C10.1316 23.4042 10.7316 22.1458 11.5775 21.4475C11.4841 22.425 11.2516 24.6108 10.6666 25L10.7633 24.9925C11.42 24.5842 11.4583 22.905 11.6775 22.0467L11.7708 21.1442L12.7083 19.8275L12.7766 19.79C12.8816 20.1192 13.3566 20.4767 13.8708 20.3808L14.24 20.2258L15.1666 20.5725C15.2883 21.9058 15.2416 22.6533 14.3975 23.6683C15.26 23.2275 15.5766 21.5292 15.2891 20.6275C17.295 20.86 17.2141 20.1833 16.8341 18.7225L17.1866 18.7283C17.1216 18.6308 16.9458 18.7033 16.8116 18.6283C16.7508 18.5892 16.7625 18.5967 16.725 18.5383C17.2016 18.0008 18.35 18.535 18.1083 19.4275C18.4383 18.6875 17.7091 18.0292 17.0066 18.2942C17.3066 17.9383 17.67 17.6458 17.86 17.175L17.9283 17.1383L19.5783 18.8717L19.6758 18.8642L19.7508 18.7625C19.2258 18.1408 18.7016 17.5183 18.1783 16.8958L18.3466 16.8192C18.3838 16.7808 18.4295 16.7516 18.48 16.7341C18.5306 16.7166 18.5845 16.7112 18.6375 16.7183C18.6096 16.7045 18.5819 16.6906 18.5541 16.6767C19.3966 16.7608 20.4733 17.4633 21.3525 17.2367C21.4333 17.0958 21.4375 17.02 21.3883 16.8825C22.325 16.9058 24.01 16.5925 24.5466 16.1375C23.105 16.44 21.4816 16.5425 20.1583 16.3658L18.9858 16.2283L18.92 16.2333L19.2358 15.6667C20.2025 15.6483 22.7375 15.6242 23.25 15.0175L23.1366 14.8658L22.695 14.8025C22.664 14.8518 22.6468 14.9085 22.645 14.9667L22.995 15.0042C22.235 15.1958 20.1183 15.6 19.4275 15.3642C19.355 15.2758 19.4083 14.9692 19.4116 14.7483C19.4129 14.7088 19.4112 14.6693 19.4066 14.63C20.4 14.3333 21.1375 13.665 21.44 12.6567C21.6125 12.0792 21.4983 11.3208 21.8716 10.9608C22.11 10.9817 22.1583 11.0825 22.3333 11.1508C22.2408 11.0225 22.1083 10.9508 21.9425 10.8925L21.6316 11.1067C21.3475 11.2167 21.05 10.9292 20.5675 11.1533C20.1758 10.8183 19.955 10.2892 19.4258 10.0867L19.3716 9.99499L20.0133 9.37082C19.8033 9.54666 19.5891 9.75416 19.375 9.96249L18.945 9.76999L18.92 9.70749C19.41 9.36082 19.845 9.23249 20.4025 9.34249C20.4283 9.39416 20.4558 9.44499 20.4825 9.49666C20.4566 9.54082 20.4333 9.55332 20.4108 9.56582L20.2233 9.51582C20.3041 9.56332 20.3883 9.57832 20.4725 9.59332L20.5433 9.52416L20.5541 9.42749C20.4325 9.31916 20.395 9.24082 20.1558 9.23249L20.27 9.06416C19.9966 9.25249 19.4416 9.30249 19.17 9.46582L19.7983 8.97082L19.8733 8.86999L18.7108 9.56332C18.4625 9.54666 18.1983 9.42999 18.0641 9.29082C18.0427 9.29247 18.0213 9.29414 18 9.29582L19.38 8.36249L19.3575 8.26832C18.8341 8.57332 18.31 8.87832 17.7875 9.18416L17.2858 9.06082L17.3325 8.60999L20.93 5.78499L20.9941 5.77999L20.9433 5.65582C20.81 5.59249 20.2625 6.03666 20.0558 6.16916C19.2591 6.67999 18.555 7.31582 17.7716 7.77749C18.095 7.36666 18.6866 6.95749 18.785 6.35916L18.6266 6.33916L18.38 6.54916L18.6483 6.43249C18.475 6.95999 17.69 7.90166 17.2466 8.19999L17.195 8.07582C17.4833 7.59082 17.7675 6.93832 17.6341 6.31582L17.3925 6.17416L17.1333 6.19332C17.2991 6.25916 17.4116 6.27499 17.5333 6.35582C17.6108 6.95916 17.3141 7.36749 17.1541 7.85582L17.0858 7.89249C16.9791 7.69499 16.9858 7.59999 16.7666 7.56416L16.7475 7.43749L16.8975 7.23416L17.0008 7.16249C17.0358 7.22916 17.0375 7.20499 17.0483 7.31916C17.079 7.2701 17.096 7.21369 17.0975 7.15582L16.975 7.10082L16.6508 7.44416C16.38 7.26332 16.0816 7.07332 15.7008 7.00249C15.9166 6.55499 16.5725 5.83582 16.2341 5.26832C15.8208 4.57832 14.41 5.37332 13.8933 5.92082C13.8333 5.98187 13.7813 6.05018 13.7383 6.12416C13.7894 6.08349 13.8411 6.04348 13.8933 6.00416C14.4033 5.62416 15.7608 4.71416 16.055 5.44166C16.3633 5.84749 15.7725 6.62832 15.6116 6.94582C15.0616 6.88999 14.4866 6.83749 13.895 6.84916C13.2722 6.85459 12.6538 6.95404 12.0608 7.14416C11.7608 7.24332 10.4808 8.00999 10.4316 7.99999L9.84829 7.43499L8.62829 6.82249L8.62162 6.88666L8.54996 6.95582L10.1133 8.27916L9.87496 8.42499C9.23162 7.93749 8.78829 7.64166 7.83079 7.39249L7.66912 7.40499C8.22829 7.78999 8.79162 8.14249 9.35412 8.49582L9.46662 8.64749C9.06496 8.81666 8.89496 9.16832 8.55579 9.38666C8.02579 9.13332 7.53496 8.90332 6.89246 8.70916L6.84746 8.84082L8.05079 9.61582L8.11579 9.61082L7.90829 9.75416C7.81246 10.0767 7.62496 10.4508 7.46829 10.9058C6.86829 11.3942 6.09079 11.365 5.96996 12.36C5.77829 12.4125 5.64329 12.4292 5.46829 12.5575L5.45496 12.6867C5.56496 12.84 6.53912 13.2525 6.77162 13.2925L6.91496 13.1542L6.91412 13.155ZM14.0308 6.27499L14.12 6.29166L14.0008 6.27666C13.98 6.27666 13.9591 6.27832 13.9391 6.27916C14.0333 6.10416 14.31 6.06082 14.5758 6.07999L14.5575 6.20666L14.0375 6.23249L14.0308 6.27416V6.27499ZM14.4025 6.50582L14.6525 6.42416C14.7608 6.24416 14.8225 6.05332 14.7675 5.87916C14.51 5.82832 14.3616 5.89082 14.1208 5.99249C14.077 6.06375 14.0333 6.13514 13.99 6.20666L13.94 6.28999C13.9554 6.30788 13.9721 6.32459 13.99 6.33999C14.0716 6.40666 14.17 6.42999 14.3508 6.41499C14.4008 6.49999 14.3425 6.46249 14.2533 6.48582L14.4033 6.50582H14.4025ZM20.5716 8.44166L20.3033 8.49166L20.4683 8.47999L20.6575 8.56166L20.3708 9.08666C20.5183 8.91249 20.665 8.78916 20.7275 8.52499L20.5716 8.44166ZM19.03 16.8292C18.9633 16.71 18.8908 16.6317 18.8183 16.6133C18.8825 16.6742 18.9566 16.7458 19.03 16.8292ZM18.1816 19.4092L17.97 19.5325L18.1325 19.5175L18.1825 19.4092H18.1816ZM19.03 16.8292C19.2458 17.0725 19.4075 17.5392 19.3608 17.9042C19.6058 17.375 19.3266 17.045 19.03 16.8292Z" fill="white"/>
                </svg>
                </a>
            </li>
            <li class="social-item">
                <a href="https://vk.com" class="social-link">
                   <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="15" cy="15" r="15" fill="currentColor"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.5417 9.95669C24.68 9.50169 24.5417 9.16669 23.8792 9.16669H21.6917C21.135 9.16669 20.8783 9.45585 20.7392 9.77502C20.7392 9.77502 19.6267 12.4384 18.0508 14.1684C17.5408 14.67 17.3092 14.8292 17.0308 14.8292C16.8917 14.8292 16.6825 14.67 16.6825 14.2142V9.95669C16.6825 9.41002 16.5292 9.16669 16.0658 9.16669H12.6258C12.2783 9.16669 12.0692 9.42002 12.0692 9.66085C12.0692 10.1784 12.8575 10.2984 12.9383 11.755V14.92C12.9383 15.6142 12.8108 15.74 12.5325 15.74C11.7908 15.74 9.98667 13.0642 8.91583 10.0025C8.70833 9.40669 8.49833 9.16669 7.93917 9.16669H5.75C5.125 9.16669 5 9.45585 5 9.77502C5 10.3434 5.74167 13.1667 8.45417 16.9009C10.2625 19.4509 12.8083 20.8334 15.1275 20.8334C16.5183 20.8334 16.69 20.5267 16.69 19.9975V18.07C16.69 17.4559 16.8217 17.3334 17.2625 17.3334C17.5875 17.3334 18.1433 17.4934 19.4417 18.7225C20.925 20.18 21.1692 20.8334 22.0042 20.8334H24.1917C24.8167 20.8334 25.13 20.5267 24.95 19.92C24.7517 19.3167 24.0433 18.4409 23.1042 17.4017C22.5942 16.81 21.8292 16.1725 21.5967 15.8534C21.2725 15.4442 21.365 15.2617 21.5967 14.8975C21.5967 14.8975 24.2633 11.2092 24.5408 9.95669H24.5417Z" fill="white"/>
                </svg>
                </a>
            </li>
        </ul>
    </div>
</footer>
</body>
</html>