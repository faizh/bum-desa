@extends('layouts.layout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Berita</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Berita</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="{{url('/blog-details')}}">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{url('/blog-details')}}">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{url('/blog-details')}}"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="{{url('/blog-details')}}">Read More</a>
                  </div>

                </article>
              </div><!-- End post list item -->
              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="{{url('/blog-details')}}">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{url('/blog-details')}}">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{url('/blog-details')}}"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="{{url('/blog-details')}}">Read More</a>
                  </div>

                </article>
              </div><!-- End post list item -->


            </div><!-- End blog posts list -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="active"><a href="#">1</a></li>
              </ul>
            </div><!-- End blog pagination -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Nihil blanditiis at in nihil autem</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Quidem autem et impedit</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Laborum corporis quo dara net para</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Et dolores corrupti quae illo quod dolor</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@stop