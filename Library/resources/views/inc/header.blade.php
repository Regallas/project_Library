<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
      <span class="fs-4">Библиотека</span>
    </a>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('hall') }}">Холл</a>
      <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('about') }}">О нас</a>
      <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('addBook') }}">Добавление книги</a>
      <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('book-getBook') }}">Книги</a>
      <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('login') }}">Авторизация</a>
      <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('logout') }}">Выход</a>
    </nav>
  </div>
