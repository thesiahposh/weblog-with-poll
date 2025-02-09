<main class="row mt-3">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">عنوان اصلی</h1>
      <p class="lead my-3">توضیح مختصری درباره پست</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">ادامه خواندن...</a></p>
    </div>
  </div>

  <div class="row mb-2 mt-3">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col-auto d-none d-lg-block">
             <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder:post img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">post img</text></svg>
            </div>
            <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">عنوان پست</h3>
            <div class="mb-1 text-muted">تاریخ پست</div>
            <p class="card-text mb-auto">توضیح کلی در مورد پست</p>
            <a href="#" class="stretched-link">ادامه خواندن...</a>
            <strong class="d-inline-block mb-2 text-success">تعداد بازدید/ تعداد کامنت / اشتراک گذاری</strong>
            </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col-auto d-none d-lg-block">
             <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder:post img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">post img</text></svg>
            </div>
            <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">عنوان پست</h3>
            <div class="mb-1 text-muted">تاریخ پست</div>
            <p class="card-text mb-auto">توضیح کلی در مورد پست</p>
            <a href="#" class="stretched-link">ادامه خواندن...</a>
            <strong class="d-inline-block mb-2 text-success">تعداد بازدید/ تعداد کامنت / اشتراک گذاری</strong>
            </div>
      </div>
    </div>
  </div>

  <div class="row border-top">
    <div class="col-md-8">
        @yield('content')
        <nav class="blog-pagination" aria-label="Pagination">
            <a class="btn btn-outline-primary" href="#">صفحه قبلی</a>
            <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">آخرین صفحه</a>
        </nav>
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="fst-italic">درباره</h4>
                <p class="mb-0">یک توضیح کلی درمورد صفحه</p>
            </div>
            <div class="p-4">
                <h4 class="fst-italic">آرشیو</h4>
                <ol class="list-unstyled mb-0">
                <li><a href="#">مارس 2021</a></li>
                <li><a href="#">شباط 2021</a></li>
                <li><a href="#">يناير 2021</a></li>
                </ol>
            </div>
        <div class="p-4">
          <h4 class="fst-italic">اطلاعات دیگر</h4>
             <ol class="list-unstyled">
                 <li><a href="#">GitHub</a></li>
                 <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
             </ol>
        </div>
      </div>
    </div>
  </div>
</main>