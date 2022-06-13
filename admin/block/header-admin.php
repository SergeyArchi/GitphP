    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/admin/postindex.php" class="d-flex align-items-center text-dark text-decoration-none">
            <p> Доброго дня <?=($_COOKIE['lname'])?> (<?=($_COOKIE['user'])?>)</p>
            </a>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="/admin/menu.php">Замовлення та почта</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="/admin/FAQ.php">Допомога</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="/admin/admin-users.php">Адмін-Аккаунти</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="/admin/register_aa.php">Створити</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="/admin/users.php">Користувачі</a>
            </nav>
            <a class="btn btn-outline-primary" href="exit.php">Выход</a>
        </div>
    <header>